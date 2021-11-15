<?php

namespace App\Http\Controllers\Edu;

use App\Edu\Category;
use App\Edu\day_time;
use App\Edu\days;
use App\Edu\lessons;
use App\Http\Controllers\Controller;
use App\User;
use  Validator;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * @param Request $request
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     * @throws \Throwable
     */
    public function teachers(Request $request)
    {
        $page_title = __("SuperVisor");
        $page_description = __("SuperVisor Table");
        $users = User::where('type',1)->orderBy('created_at','desc')->paginate(15);
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
            return view('users.teacher.table', compact('users'))->render();
        }
        return view('users.teacher.datatables', compact('page_title', 'page_description','users'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = __(" Add superVisor");
        $page_description = __(" Add new SuperVisor");
        $cat = Category::all();

        return view('users.teacher.create', compact('page_title', 'page_description','cat'));

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
        $user = new User();
        $user->fill($request->all());
            if ($request->img != null){
                $path = $request->img->store('Users/imgs');
                $path  =  asset('Heart/storage/app/' . $path);
                $user->img = $path;
            }
            $user->name = $request->name;
            $user->phone  = $request->phone;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->status = 'active';
            $status =  $user->save();

        $teacher = new \App\Edu\User();
        $teacher->video = $request->video;
        $teacher->description = $request->description;
        $teacher->country = $request->country;
        $teacher->category_id = $request->category_id;
        $teacher->user_id = $user->id;
        $teacher->type = $request->type;
//        dd($teacher);
        $teacher->save();
        if($status){
            return response()->json([
                'status'  => true,
                'message' =>__("Add SuperVisor was successfully")
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Add SuperVisor was Falied")
            ]);
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
        $page_title = 'تعديل المعلم';
        $page_description =  $user->name;
        $cat = Category::all();
        return view('users.teacher.catEdit', compact('page_title', 'page_description','user','cat'));

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
        if ($request->password == null){
            if ($request->img != null){
                $path = $request->img->store('Users/imgs');
                $path  =  asset('Heart/storage/app/' . $path);
                $user->img = $path;
            }
            $user->name = $request->name;
            $user->phone  = $request->phone;
            $user->email = $request->email;

            $status =  $user->update();

        }else{
            $user->password = bcrypt($request->password);
            $status =  $user->update();
        }

        $teacher = \App\Edu\User::where('user_id',$user->id)->first();
        $teacher->video = $request->video;
        $teacher->description = $request->description;
        $teacher->country = $request->country;
        $teacher->category_id = $request->category_id;
//        dd($teacher);
        $teacher->update();
        $days = days::where('user_id', $request->id)->first();
        if (isset($request->statuSat)) {
            if ($request->statuSat == 0) {
                $time = day_time::find($days->Sat);
                if ($time != null) {
                    $time->delete();
                    $days->Sat = 0;
                    $days->update();

                } else {
                    $days->Sat = 0;
                    $days->update();

                }
            } else {
                $time = day_time::find($days->Sat);
                if ($time != null) {
                    $time->start = $request->Sat['start'];
                    $time->end = $request->Sat['end'];

                    $time->update();
//                dd('asd');

//                $days
                } else {
                    $time = new day_time();
                    $time->start = $request->Sat['start'];
                    $time->end = $request->Sat['end'];
                    $time->user_id = $request->user()->id;

                    $time->save();
                    $days->Sat = $time->id;
                    $days->update();

                }
            }
        }
        //** Sun */

        /* Tue **/
        if (isset($request->statusTue)) {
            if ($request->statusTue == 0) {
                $time = day_time::find($days->Tue);
                if ($time != null) {
                    $time->delete();
                    $days->Tue = 0;
                    $days->update();

                } else {
                    $days->Tue = 0;
                    $days->update();


                }
            } else {
                $time = day_time::find($days->Tue);
                if ($time != null) {
                    $time->start = $request->Tue['start'];
                    $time->end = $request->Tue['end'];
                    $time->update();
                } else {
                    $time = new day_time();

                    $time->start = $request->Tue['start'];
                    $time->end = $request->Tue['end'];
                    $time->user_id = $request->user()->id;
                    $time->save();
                    $days->Tue = $time->id;
                    $days->update();

                }
            }
        }
        //** Wed */
        if (isset($request->statusWed)) {
            if ($request->statusWed == 0) {
                $time = day_time::find($days->Wed);
                if ($time != null) {
                    $time->delete();
                    $days->Wed = 0;
                    $days->update();

                } else {
                    $days->Wed =0;
                    $days->update();


                }
            } else {
                $time = day_time::find($days->Wed);
                if ($time != null) {
                    $time->start = $request->Wed['start'];
                    $time->end = $request->Wed['end'];
                    $time->update();
                } else {
                    $time = new day_time();

                    $time->start = $request->Wed['start'];
                    $time->end = $request->Wed['end'];
                    $time->user_id = $request->user()->id;
                    $time->save();
                    $days->Wed = $time->id;
                    $days->update();

                }

            }
        }
        /** Thu */
        if (isset($request->statusThu)) {
            if ($request->statusThu == 0) {
                $time = day_time::find($days->Thu);
                if ($time != null) {
                    $time->delete();
                    $days->Thu = 0;
                    $days->update();

                } else {
                    $days->Thu = 0;
                    $days->update();


                }
            } else {
                $time = day_time::find($days->Thu);
                if ($time != null) {
                    $time->start = $request->Thu['start'];
                    $time->end = $request->Thu['end'];
                    $time->update();
                } else {
                    $time = new day_time();

                    $time->start = $request->Thu['start'];
                    $time->end = $request->Thu['end'];
                    $time->user_id = $request->user()->id;
                    $time->save();
                    $days->Thu = $time->id;
                    $days->update();

                }

            }
        }
        /**  Fri */
        if (isset($request->statusFri)) {

            if ($request->statusFri == 0) {
                $time = day_time::find($days->Fri);
                if ($time != null) {
                    $time->delete();
                    $days->Fri = 0;
                    $days->update();

                } else {
                    $days->Fri = 0;
                    $days->update();


                }
            } else {
                $time = day_time::find($days->Thu);
                if ($time != null) {
                    $time->start = $request->Fri['start'];
                    $time->end = $request->Fri['end'];
                    $time->update();
                } else {
                    $time = new day_time();

                    $time->start = $request->Fri['start'];
                    $time->end = $request->Fri['end'];
                    $time->user_id = $request->user()->id;
                    $time->save();
                    $days->Fri = $time->id;
                    $days->update();

                }

            }
        }


        if($status){
            return response()->json([
                'status'  => true,
                'message' => 'تم تعديل المستخدم بنجاح',
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' => 'فشل الحفظ رجاء محاوله مرة أخرى',
            ]);
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
            'message' => 'تم حدف الشرط  بنجاح',
            'id'    => $request->id,
        ]);
    }
}
