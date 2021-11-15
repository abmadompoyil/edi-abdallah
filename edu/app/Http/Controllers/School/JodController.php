<?php

namespace App\Http\Controllers\School;

use App\Edu\Comment;
use App\Edu\Date;
use App\Edu\Job;
use App\Edu\Notifaction;
use App\Edu\Result;
use App\Edu\Resume;
use App\Edu\Subject;
use App\Edu\Teacher;
use App\Http\Controllers\Controller;
use App\Mail\NewJob;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
class JodController extends Controller
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
        $page_title = __("Jobs");
        $page_description = __("Jobs Table");
        $jobs = Job::where('type',1)->where('school_id',$request->user()->id)->orderBy('created_at','desc')->paginate(15);
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
            return view('school.job.table', compact('jobs'))->render();
        }
        return view('school.job.datatables', compact('page_title', 'page_description','jobs'));
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
        $dates = Date::where('is_book',0)->get();
        return view('school.job.create', compact('page_title', 'page_description','subjects','dates'));

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
            'specialization' => [ 'required'],
        ]);
        if($validator->fails()){
            return response()->json([
                'status'  => false,
                'message' =>$validator->messages()->first()
            ],403);
        }
        $date = Date::where('is_book',0)->find($request->date_id);
        if ($date == null){
            return response()->json([
                'status'  => false,
                'message' =>__(" Job Meeting was Falied")
            ],500);
        }
        $user = new Teacher();
        $user->fill($request->all());
        $user->resume = '';
        $arr = [];
        foreach ($request->qualification as $key => $value){

            array_push($arr,$key);
        }
        $user->qualification = $arr;
        $user->school_id = $request->user()->id;
        $user->subject_id = $arr;
        if ($request->nationality == 0){
            $user->other = $request->nationality2;
        }
        if ($request->has('license')){
            $f = $request->license;
            $path = $f->store('consult/files');
            $path = ('edu/storage/app/' . $path);

            $user->resume = $path;
        }
        if ($request->sub_teacher ){
            $user->sub_teacher = 1;
        }else{
            $user->sub_teacher = 0;

        }
        if ($request->specialization == 0){
            $user->specialization = $request->specialization2;
        }
        $status =  $user->save();
        $files=$request->files;
        if ($files != null){
            foreach($request->file('files') as $cv ) {
                $path = $cv->store('consult/files');
//                $path = $file->store('consult/files');
                $path = ('edu/storage/app/' . $path);
                $resume = new Resume();
                $resume->Teacher_id = $user->id;
                $resume->resume = $path;
                $resume->save();

            }
        }

        $job = new Job();
        $job->date_id = $date->id;
        $job->date = $date->date;
        $job->start = $date->start;
        $job->end = $date->end;
        $job->status = 'pending';
        $job->school_id = $request->user()->id;
        $job->teacher_id = $user->id;
        $job->save();
        $date->is_book = 1;
        $date->update();
        foreach (User::where('role_id' ,'!=',3)->get() as $user) {
            $message = "Hi ".$user->name ."\r\n There is a new job application
\r\n For school:".$job->school->name."
\r\n The name of the teacher:".$job->Teacher->name."
\r\n Date : ".$job->date;
            $data = ['message' =>$message,'id' => $job->id];
            Mail::to($user->email)->send(new NewJob($data));
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
    public function show(Job $job,Request $request)
    {
        $page_title = __(" Employee Status ");
        $page_description = __("  Employee ").$job->Teacher->name;
        $school = $request->user();
        $comments = Comment::where('job_id',$job->id)->latest('created_at')->get();
        if ($job->status == 'finished'){
            $sManger = Result::where('job_id',$job->id)->where('school_id',$job->school->id)->where('type',2)->first();
            $secManger = Result::where('job_id',$job->id)->where('school_id',$job->school->id)->where('type',3)->first();
            $results = Result::where('job_id',$job->id)->get();
            $result = Result::where('job_id', $job->id)->where('type', 2)->first();
            $result_m = Result::where('job_id', $job->id)->where('type', 3)->first();

            return view('school.job.show', compact('page_title', 'page_description', 'job', 'school', 'comments', 'result','results', 'result_m'));

        }else {


            $result = Result::where('job_id', $job->id)->where('type', 2)->where('school_id', $request->user()->id)->first();
            $result_m = Result::where('job_id', $job->id)->where('school_id', $request->user()->id)->where('type', 3)->first();
            return view('school.job.show', compact('page_title', 'page_description', 'job', 'school', 'comments', 'result', 'result_m'));
        }
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
    public function destroy(Job $job,Request $request,$id)
    {
        $job = Job::findorfail($id ?? $request->id);
        $job->Teacher->delete();
        $job->Date->is_book = 0;
        $job->Date->update();
       foreach ($job->comments as $comment){
            $comment->delete();
        }
       if ($job->result != null) {
           foreach ($job->result as $result) {
               $result->delete();
           }
       }
       $job->delete();
        return response()->json([
            'status'  => true,
            'message' => __("Recruitment was delete  "),
            'id'    => $id,
        ]);
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
        $comment->sender_type = 2;
        $comment->sender_id =$request->user()->id;
        $comment->job_id =$id;
        $comment->status = $job->status ;
        $status = $comment->save();
        if($status){
            foreach (User::where('role_id' ,'!=',3)->get() as $user) {

                $message = "Hi " . $user->name . "\r\n There is a new comment for job application
\r\n from school:" . $job->school->name . "
\r\n The name of  teacher:".$job->Teacher->name."
\r\n comment is  : " . $comment->result;
                $data = ['message' => $message, 'id' => $job->id];
                Mail::to($user->email)->send(new NewJob($data));
            }
            $notify = new Notifaction();
            $notify->text = $message = " There is a new comment on Recruitment Teachers \r\n from school:" . $job->school->name ;
            $notify->url = $job->id;
            $notify->supervisor_id = 0;
            $notify->type = 1;
            $notify->save();
            return response()->json([
                'status'  => true,
                'type'  => 3,

                'message' =>__("Note send  was successfully")
            ],200);
        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Note send was Falied")
            ],500);
        }
    }


    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function result($id,Request $request){
        $validator = Validator::make($request->all(), [
            'note' => [ 'string','min:10',],
            'result' => [ 'required','numeric','min:40','max:100'],

        ]);
        if($validator->fails()){
            return response()->json([
                'status'  => false,
                'message' =>$validator->messages()->first()
            ],403);
        }
        $job = Job::findorfail($id);
        if ($job->status != 'completed'){
            return response()->json([
                'status'  => false,
                'message' =>'You can not submit a grade before make status is completed '
            ],403);
        }
        if ($job->status == 'finished'){
            return response()->json([
                'status'  => false,
                'message' =>'You cannot submit a grade after result approved '
            ],403);
        }
        $resultss = Result::where('job_id',$id)->where('type',$request->type)->where('school_id',$request->user()->id)->first();
        if ($resultss !=null){
            return response()->json([
                'status'  => false,
                'message' =>__("Result send was added")
            ],500);
        }
        $result  = new Result();
        $result->fill($request->all());
        $result->type = $request->type;
        $result->school_id =$request->user()->id;
        $result->job_id =$id;
        $status = $result->save();
        $job->result = $job->grade();
        $job->update();
        foreach (User::where('role_id' ,'!=',3)->get() as $user) {

            $message = "Hi " . $user->name . "\r\n There is a new result for job application
\r\n from school:" . $job->school->name . "
\r\n The name of the teacher:".$job->Teacher->name."
\r\n result is  : " . $result->result."
\r\n Grade is  : " . $job->result;
            $data = ['message' => $message, 'id' => $job->id];
            Mail::to($user->email)->send(new NewJob($data));
        }

        $notify = new Notifaction();
        $notify->text = $message ="There is a new Result on Recruitment a  Teachers \r\n from school:" . $job->school->name ;
        $notify->url = $job->id;
        $notify->supervisor_id = 0;
        $notify->type = 1;
        $notify->save();

        if($status){

            return response()->json([
                'status'  => true,
                'type'  => 3,
                'message' =>__("Result send  was successfully")
            ],200);
        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Result send was Falied")
            ],500);
        }
    }


    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function resultUpdate ($id,Request $request){
        $validator = Validator::make($request->all(), [
            'note' => [ 'string','min:10',],
            'result' => [ 'required','numeric','min:40','max:100'],

        ]);
        if($validator->fails()){
            return response()->json([
                'status'  => false,
                'message' =>$validator->messages()->first()
            ],403);
        }
        $job = Job::findorfail($id);
        if ($job->status != 'completed'){
            return response()->json([
                'status'  => false,
                'message' =>'You can not submit a grade before make status is completed '
            ],403);
        }
        if ($job->status != 'finished'){
            return response()->json([
                'status'  => false,
                'message' =>'You cannot submit a grade after result approved '
            ],403);
        }
        $result  = Result::findorfail($request->id);
        $result->fill($request->all());
        $result->type = $request->type;
        $result->school_id =$request->user()->id;
        $result->job_id =$id;
        $status = $result->update();
        $job->result = $job->grade();
        if($status){
            return response()->json([
                'status'  => true,
                'type'  => 3,

                'message' =>__("Result send  was successfully")
            ],200);
        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Result send was Falied")
            ],500);
        }
    }



    public function print(Request $request,$id){
        $job = Job::findorfail($id);
        $page_title = __(" Employee Status ");
        $page_description = __("  Employee ").$job->Teacher->name;
        $school = $request->user();
        $comments = Comment::where('job_id',$job->id)->latest('created_at')->get();
        $sManger = Result::where('job_id',$job->id)->where('school_id',$job->school->id)->where('type',2)->first();
        $secManger = Result::where('job_id',$job->id)->where('school_id',$job->school->id)->where('type',3)->first();
        $results = Result::where('job_id',$job->id)->where('type',1)->get();
        $pdf = PDF::loadView('school.job.pdf',compact('page_title','job','page_description','comments','school','sManger','secManger','results'))->setOptions(['defaultFont' => 'sans-serif','isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]); ;
        return $pdf->download($job->Teacher->name.'.pdf');
    }
}
