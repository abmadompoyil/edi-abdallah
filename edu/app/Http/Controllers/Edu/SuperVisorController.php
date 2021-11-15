<?php

namespace App\Http\Controllers\Edu;

use App\Edu\Category;
use App\Edu\day_time;
use App\Edu\days;
use App\Edu\lessons;
use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\User;
use  Validator;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel as Exel;

class SuperVisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        Request $request
    )
    {
        $page_title = __("SuperVisor");
        $page_description = __("SuperVisor Table");
        $users = User::where('role_id',2)->orderBy('created_at','desc')->paginate(15);
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
            return view('users.supervisor.table', compact('users'))->render();
        }
        return view('users.supervisor.datatables', compact('page_title', 'page_description','users'));
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
        $page_title = __(" Add superVisor");
        $page_description = __(" Add new SuperVisor");

        return view('users.supervisor.create', compact('page_title', 'page_description'));

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
            ],500);
        }
        $user = new User();
        $user->fill($request->all());
            if ($request->img != null){
                $path = $request->img->store('Users/imgs');
                $path  =  ('edu/storage/app/' . $path);
                $user->img = $path;
            }
            $user->name = $request->name;
            $user->phone  = $request->phone;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->status = 'active';
            $user->type = 2;
            $user->role_id = 2;
            $status =  $user->save();
        if($status){
            return response()->json([
                'status'  => true,
                'message' =>__("Add SuperVisor was successfully")
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Add SuperVisor was Falied")
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
    public function teacherLessons(User $user,$id,Request $request){
        $lessons = lessons::where('user_id',$id)->get();
        $user = User::findorfail($id);

        $page_title = 'كل الدروس';
        $page_description = 'الدروس   للطالب'.$user->name;
        $lessons =  lessons::where('teacher_id',$user->id)->orderBy('created_at','desc')->paginate(15);
        if($request->ajax())
        {
            return view('edu.lessons.table', compact('lessons'))->render();
        }
        return view('edu.lessons.datatables', compact('page_title', 'page_description','lessons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user,$id)
    {
        $user = User::findorfail($id);
        $page_title = __('Edit Supervisor');
        $page_description =  $user->name;
        return view('users.supervisor.catEdit', compact('page_title', 'page_description','user'));

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
        if ($request->img != null){
            $path = $request->img->store('Users/imgs');
            $path  =  asset('edu/storage/app/' . $path);
            $user->img = $path;
        }
        if ($request->has('select')){
            $user->status = 'active';
        }else{
            $user->status = 'inactive';

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
                'message' => __("Supervisor was edit successfully"),
            ]);
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
        ]);
    }



    public function export($slug)
    {
//        return Exel::download(new UsersExport(), 'supervisors.xlsx');

        if ($slug == 'xlxs'){
            return Exel::download(new UsersExport(2), 'supervisors.xlsx',\Maatwebsite\Excel\Excel::XLSX);

//            return (new UsersExport)->download('supervisors.xlsx', \Maatwebsite\Excel\Excel::XLSX);


        }elseif ($slug == 'csv'){
            return Exel::download(new UsersExport(2), 'supervisors.csv',\Maatwebsite\Excel\Excel::CSV);

//            return (new UsersExport)->download('supervisors.csv', \Maatwebsite\Excel\Excel::CSV);

        }elseif ($slug == 'pdf]'){
            return Exel::download(new UsersExport(2), 'supervisors.pdf',\Maatwebsite\Excel\Excel::DOMPDF);

//            return (new UsersExport)->download('supervisors.pdf', \Maatwebsite\Excel\Excel::DOMPDF);

        }
        return Exel::download(new UsersExport(2), 'supervisors.xlsx');
    }
}
