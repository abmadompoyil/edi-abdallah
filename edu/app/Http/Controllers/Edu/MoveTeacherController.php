<?php

namespace App\Http\Controllers\Edu;

use App\Edu\Comment;
use App\Edu\Date;
use App\Edu\Job;
use App\Edu\Resume;
use App\Edu\Subject;
use App\Edu\Teacher;
use App\Exports\JobsExport;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel as Exel;
use Validator;
class MoveTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $page_title = __("Jobs");
        $page_description = __("Jobs Table");
        $jobs = Job::where('type',2)->orderBy('created_at','desc')->paginate(15);

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
            return view('admin.move.table', compact('jobs'))->render();
        }
        return view('admin.move.datatables', compact('page_title', 'page_description','jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = __(" Add  Employee");
        $page_description = __(" Add new Employee");
        $subjects = Subject::all();
        $schools = User::where('type',2)->where('role_id',3)->get();
        $dates = Date::where('is_book',0)->get();
        return view('school.move.create', compact('page_title', 'page_description','subjects','dates','schools'));
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
            'phone' => [ 'string','min:10',],
            'name' => [ 'string','required'],
            'exp' => [ 'required'],
            'age' => [ 'required'],
            'qualification' => [ 'required'],
            'old_specialization' => [ 'required'],
            'new_Specialization' => [ 'required'],
            'new_school' => [ 'required'],
            'old_school' => [ 'required'],
        ]);
        if($validator->fails()){
            return response()->json([
                'status'  => false,
                'message' =>$validator->messages()->first()
            ],500);
        }
        $date = Date::where('is_book',0)->find($request->date_id);

        $user = new Teacher();
        $user->fill($request->all());

        $user->school_id = $request->user()->id;
        $user->subject_id = $request->old_specialization;
        $user->old_school_id = $request->old_school;
        if ($request->old_specialization == 0){
            $user->other = $request->other;
        }

        $status =  $user->save();
        if ($request->file != null){
            foreach ($request->file as $file) {
                $path = $file->store('Teacher/resume');
                $path = ('edu/storage/app/' . $path);
                $resume = new Resume();
                $resume->Teacher_id = $user->id;
                $resume->resume = $path;
                $resume->save();
                $user->resume = $path;
                $user->update();
            }
        }
        $job = new Job();
        $job->new_subject_id = $request->new_specialization;
        if ($request->new_specialization == 0){
            $job->other = $request->other2;
        }
        $job->new_school_id = $request->new_school;
        $job->date_id = $date->id ?? null;
        $job->date = $date->date ?? null;
        $job->start = $date->start ?? null;
        $job->end = $date->end ?? null;
        $job->status = 'pending';
        $job->school_id = $request->user()->id;
        $job->teacher_id = $user->id;
        $job->type = 2 ;
        $job->save();
        if ($date != null) {
            $date->is_book = 1;
            $date->update();
        }
        if($status){
            return response()->json([
                'status'  => true,
                'message' =>__("Add Job Meeting was successfully")
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Add Job Meeting was Falied")
            ],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Edu\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job,$id,Request $request)
    {
        $job = Job::findorfail($id);

        $page_title = __(" Employee Status ");
        $page_description = __("  Employee ").$job->Teacher->name;
        $school = $job->school;
        $comments = Comment::where('job_id',$job->id)->latest('created_at')->get();
        return view('admin.move.show', compact('page_title', 'page_description','job','school','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edu\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edu\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edu\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //

    }
    public function add($id,Request $request){
        $validator = Validator::make($request->all(), [
            'note' => [ 'string','min:10',],

        ]);
        if($validator->fails()){
            return response()->json([
                'status'  => false,
                'message' =>$validator->messages()->first()
            ],403);
        }
        $job = Job::findorfail($id);
        $comment  = new Comment();
        $comment->fill($request->all());
        $comment->sender_type = 1;
        $comment->sender_id =$request->user()->id;
        $comment->job_id =$id;
        $comment->status = $job->status ;
        $status = $comment->save();
        if($status){
            return response()->json([
                'status'  => true,
                'type'  => 3,

                'message' =>__("Note send  was successfully")
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Note send was Falied")
            ],500);
        }
    }
    public function export($slug,$id = null)
    {
//        return Exel::download(new UsersExport(), 'supervisors.xlsx');

        if ($slug == 'xlxs'){
            return Exel::download(new JobsExport($id,2), 'moveTeacher.xlsx',\Maatwebsite\Excel\Excel::XLSX);

//            return (new UsersExport)->download('supervisors.xlsx', \Maatwebsite\Excel\Excel::XLSX);


        }elseif ($slug == 'csv'){
            return Exel::download(new JobsExport($id,2), 'moveTeacher.csv',\Maatwebsite\Excel\Excel::CSV);

//            return (new UsersExport)->download('supervisors.csv', \Maatwebsite\Excel\Excel::CSV);

        }elseif ($slug == 'pdf]'){
            return Exel::download(new JobsExport($id,2), 'moveTeacher.pdf',\Maatwebsite\Excel\Excel::DOMPDF);

//            return (new UsersExport)->download('supervisors.pdf', \Maatwebsite\Excel\Excel::DOMPDF);

        }
        return Exel::download(new JobsExport($id,2), 'moveTeacher.xlsx');
    }

}
