<?php

namespace App\Http\Controllers\School;

use App\Edu\Job;
use App\Edu\Library;
use App\Http\Controllers\Controller;
use App\Mail\NewJob;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
//            dd('asd');
            return redirect('/school');
        }
        $page_title = __("School Login");
        return view('auth.login-2', compact('page_title'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {

        if (App::getLocale() == 'ar') {
            $page_title = 'لوحة التحكم';
            $page_description = 'لوحة تحكم مدرسة ';
        } else {
            $page_title = 'Dashboard ';
            $page_description = ' Dashboard for Schools ' . Auth::user()->name;
        }
        $jobs = Job::where('school_id',$request->user()->id)->orderBy('created_at','desc')
            ->get();
        $event = collect();
        foreach ($jobs as $job){
            $ev = array();
            $username =  $job->Teacher->name ?? null;

            $ev['title'] = 'Interview meeting';
            $ev['description'] = ' meeting with '.$username ?? null;

                $ev['allDay'] = false;

                $ev['start']  = $job->date . 'T'.$job->start;
                $ev['end']  = $job->date .'T'.$job->end;


            $event->push($ev);

        }
        $getusertoday = 2;
        return view('school.index', compact('page_title', 'page_description',  'getusertoday','event'));
    }

    /**
     * @param $slug
     * @param Request $request
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     * @throws \Throwable
     */
    public function files($slug,Request $request)
    {
        $page_title = __("Files");
        if ($slug == 'arabic') {
            $page_description = __("Arabic files ");
            $type = 1;
        } elseif ($slug == 'islamic') {
            $page_description = __("Islamic files ");
            $type = 2;
        } elseif ($slug == 'other') {
            $page_description = __("Others files ");
            $type = 3;
        }elseif ($slug == 'social') {
            $page_description = __("Social Studies ");
            $type = 4;
        }
        $files = Library::where('type', $type)->orderBy('created_at', 'desc')->paginate(15);
        if ($request->ajax()) {
            if (isset($request->value)) {
                $keyword = $request->value;
                $files = Library::where(function ($query) use ($keyword) {
                    $query->where('name', 'like', '%' . $keyword . '%')
                        ->orWhere('id', 'like', '%' . $keyword . '%')
                        ->orWhere('phone', 'like', '%' . $keyword . '%');
                })->where('type', 3)
                    ->paginate(50);
            }
            return view('school.files.table', compact('files'))->render();
        }
        return view('school.files.datatables', compact('page_title', 'page_description', 'files', 'type'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(){
        $user = User::findorfail(Auth::user()->id);
        $page_title = __('Edit Schools');
        $page_description =  $user->name;
        return view('school.catEdit', compact('page_title', 'page_description','user'));
    }

    /**
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'phone' => [ 'string','min:10','unique:users'],
            'password' => [ 'string','min:6'],
            'email' => [ 'string','unique:users','email'],
        ]);
        $user = User::findorfail($request->id);
        if ($request->img != null){
            $path = $request->img->store('Users/imgs');
            $path  =  asset('edu/storage/app/' . $path);
            $user->img = $path;
        }
        if ($request->password == null){

            $user->name = $request->name;
            $user->phone  = $request->phone;
            $user->email = $request->email;
            $status =  $user->update();
        }else{
            $user->password = bcrypt($request->password);
            $status =  $user->update();
        }


        if($status){
            return response()->json([
                'status'  => true,
                'message' => __("Schools was edit successfully"),
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' => __("Faild update user , plaese try again"),
            ],500);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function meeting(Request $request){
        $jobs = Job::where('school_id',$request->user()->id)->orderBy('created_at','desc')
            ->get();
        $event = collect();
        foreach ($jobs as $job){
            $ev = array();
            $username =  $job->Teacher->name ?? null;

            $ev['title'] = 'Interview meeting';
            $ev['description'] = ' meeting with '.$username ?? null;

            $ev['allDay'] = false;

            $ev['start']  = $job->date . 'T'.$job->start;
            $ev['end']  = $job->date .'T'.$job->end;


            $event->push($ev);

        }
        $getusertoday = 2;
        $page_title = __('Calender Schools');
        $page_description =  __('Calender Schools meeting');
        return view('school.meeting', compact('page_title', 'page_description','event','getusertoday'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => [ 'string','required'],
            'src' => [ 'required'],

        ]);
        if($validator->fails()){
            return response()->json([
                'status'  => false,
                'message' =>$validator->messages()->first()
            ],500);
        }
        $path = $request->file('src')->store('Library/files');
        $file = new Library();
        $file->src = 'edu/storage/app/'.$path;
        $file->name = $request->name;
        $file->type = $request->type;
        $status = $file->save();
        if($status){
            return response()->json([
                'status'  => true,
                'type'  => 3,
                'message' =>__("Add Job Meeting was successfully")
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Add Job Meeting was Falied")
            ],500);
        }
    }

}
