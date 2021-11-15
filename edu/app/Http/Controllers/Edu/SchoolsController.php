<?php

namespace App\Http\Controllers\Edu;

use App\Edu\Category;
use App\Edu\day_time;
use App\Edu\days;
use App\Edu\Job;
use App\Edu\lessons;
use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Http\Middleware\School;
use App\User;
use Maatwebsite\Excel\Facades\Excel as Exel;
use  Validator;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;


class SchoolsController extends Controller
{
    /**php artisan make:export UsersExport --model=User

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        Request $request
    )
    {
        $page_title = __("Schools");
        $page_description = __("Schools Table");
        $users = User::where('role_id',3)->orderBy('created_at','desc')->paginate(15);
        if($request->ajax())
        {
            if (isset($request->value)){
                $keyword = $request->value;
                $users= User::where(function ($query) use($keyword) {
                    $query->where('name', 'like', '%' . $keyword . '%')
                        ->orWhere('id', 'like', '%' . $keyword . '%')
                        ->orWhere('phone', 'like', '%' . $keyword . '%');
                })->where('type',3)
                    ->paginate(50);
            }
            return view('users.schools.table', compact('users'))->render();
        }
        return view('users.schools.datatables', compact('page_title', 'page_description','users'));
    }

    /**
     * @param Request $request
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     * @throws \Throwable
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = __(" Add Schools");
        $page_description = __(" Add new Schools");

        return view('users.schools.create', compact('page_title', 'page_description'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => [ 'string','min:10','unique:users'],
            'password' => [ 'string','min:6'],
            'email' => [ 'string','unique:users','email'],
        ]);
        if($validator->fails()){
            return response()->json([
                'status'  => false,
                'message' =>$validator->messages()->first()
            ],403);
        }
        $user = new User();
        $user->fill($request->all());
            if ($request->img != null){
                $path = $request->img->store('Users/imgs');
                $path  =  ('edu/storage/app/' . $path);
                $user->img = $path;
            } if ($request->img2 != null){
                $path = $request->img2->store('Users/imgs');
                $path  =  ('edu/storage/app/' . $path);
                $user->img2 = $path;
            }
            $user->name = $request->name;
            $user->phone  = $request->phone;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->status = 'active';
            $user->type = 2;
            $user->role_id = 3;
            $status =  $user->save();
        if($status){
            return response()->json([
                'status'  => true,
                'message' =>__("Add Schools was successfully")
            ],200);
        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Add Schools was Falied")
            ],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * @param User $user
     * @param $id
     * @param Request $request
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     * @throws \Throwable
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,$id)
    {
        $user = User::findorfail($id);
        $page_title = __('Edit Schools');
        $page_description =  $user->name;
        return view('users.schools.catEdit', compact('page_title', 'page_description','user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'phone' => [ 'string','min:10','unique:users'],
            'password' => [ 'string','min:6'],
            'email' => [ 'string','unique:users','email'],
        ]);
        $user = User::findorfail($request->id);
        if ($request->has('select')){
            $user->status = 'active';
        }else{
            $user->status = 'inactive';

        }
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
            ],200);
        }else{
            return response()->json([
                'status'  => false,
                'message' => __("Faild update user , plaese try again"),
            ],500);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,$id ,Request $request)
    {
        $status = User::destroy($request->id);
//        $category->delete();
        return response()->json([
            'status'  => true,
            'message' => __("Delete done"),
            'id'    => $request->id,
        ],200);
    }
    public function export($slug)
    {
//        return Exel::download(new UsersExport(), 'supervisors.xlsx');

        if ($slug == 'xlxs'){
            return Exel::download(new UsersExport(3), 'schools.xlsx',\Maatwebsite\Excel\Excel::XLSX);

//            return (new UsersExport)->download('supervisors.xlsx', \Maatwebsite\Excel\Excel::XLSX);


        }elseif ($slug == 'csv'){
            return Exel::download(new UsersExport(3), 'schools.csv',\Maatwebsite\Excel\Excel::CSV);

//            return (new UsersExport)->download('supervisors.csv', \Maatwebsite\Excel\Excel::CSV);

        }elseif ($slug == 'pdf]'){
            return Exel::download(new UsersExport(3), 'schools.pdf',\Maatwebsite\Excel\Excel::DOMPDF);

//            return (new UsersExport)->download('supervisors.pdf', \Maatwebsite\Excel\Excel::DOMPDF);

        }
        return Exel::download(new UsersExport(3), 'schools.xlsx');
    }


    public function jobs($id,Request $request){
        $page_title = __("Jobs");
        $jobs = Job::where('type',1)->where('school_id',$id)->orderBy('created_at','desc')->paginate(15);
        $school = User::find($id);
        $page_description = __("Jobs Table For").$school->name;
        if($request->ajax())
        {
            if (isset($request->value)){
                $keyword = $request->value;
                $jobs= Job::where('school_id',$request->user()->id)->
                where(function ($query) use($keyword) {
                    $query->where('name', 'like', '%' . $keyword . '%')
                        ->orWhere('id', 'like', '%' . $keyword . '%')
                        ->orWhere('phone', 'like', '%' . $keyword . '%');
                })->where('type',3)
                    ->paginate(50);
            }
            return view('admin.job.table', compact('jobs'))->render();
        }
        return view('admin.job.datatables', compact('page_title', 'page_description','jobs','id'));
    }
}
