<?php

namespace App\Http\Controllers\Super;

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
        $jobs = Job::where('type',1)->orderBy('created_at','desc')->paginate(15);
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
            return view('supervisor.job.table', compact('jobs'))->render();
        }
        return view('supervisor.job.datatables', compact('page_title', 'page_description','jobs'));
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
        return view('supervisor.job.create', compact('page_title', 'page_description','subjects','dates'));

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

        $user->school_id = $request->user()->id;
        $user->subject_id = $request->specialization;
        if ($request->specialization == 0){
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
        if($status){
            return response()->json([
                'status'  => true,
                'message' =>__("Add Job Meeting was successfully")
            ],200);
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
        $school = $job->school;
        $comments = Comment::where('job_id',$job->id)->latest('created_at')->get();
        $dates = Date::where('is_book',0)->get();
        $results = Result::where('job_id',$job->id)->where('type',1)->get();

        return view('supervisor.job.show', compact('page_title', 'page_description','results','job','school','comments','dates'));
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
        $comment->sender_type =1;
        $comment->sender_id =$request->user()->id;
        $comment->status = $request->status ;
        $comment->job_id =$id;
        $status = $comment->save();
        $job->status = $comment->status ;
        $job->supervisor_id = $request->user()->id;

        $job->update();
        if ($request->has('files')){
            foreach($request->file('files') as $cv ) {
                $path = $cv->store('consult/files/attachment');
//                $path = $file->store('consult/files');
                $path = ('edu/storage/app/' . $path);
                $resume = new Resume();
                $resume->result_id = $comment->id;
                $resume->resume = $path;
                $resume->save();

            }
        }
        if($status){
            $message = "Hi " .$job->school->name . "\r\n There is a new comment for your job application
\r\n comment is  : " . $comment->note."
\r\n status is  : " . $comment->result;
            $data = ['message' => $message, 'id' => $job->id];
            Mail::to($job->school->email)->send(new NewJob($data));
            $notify = new Notifaction();
            $notify->text = $message ="There is a new Result on Recruitment a  Teachers \r\n from school:" . $job->school->name ;
            $notify->url = $id;
            $notify->school_id = $job->school->id;
            $notify->type = 1;
            $notify->save();
            return response()->json([
                'status'  => true,
                'type'  => 2,
                'message' =>__("Note send  was successfully")
            ]);
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
            'name' => [ 'required'],
            'result' => [ 'required'],

        ]);
        if($validator->fails()){
            return response()->json([
                'status'  => false,
                'message' =>$validator->messages()->first()
            ],403);
        }

        $job = Job::findorfail($id);
        if ($job->status == 'finished'){
            return response()->json([
                'status'  => false,
                'message' =>'You cannot submit a grade after result approved '
            ],403);
        }
        $resultss = Result::where('job_id',$id)->count();
        if ($resultss >=7){
            return response()->json([
                'status'  => false,
                'message' =>__("Result send was added")
            ],500);
        }

            $result  = new Result();
            $result->fill($request->all());
            $result->job_id =$id;
            $result->type =1;
            $status = $result->save();$result  = new Result();


        if($status){

            $admin = User::where('role_id',1)->first();
            $message = "Hi Admin \r\n There is a new result for a job application
\r\n result is  : " . $result->note;
            $data = ['message' => $message, 'id' => $job->id];
            Mail::to($admin->email)->send(new NewJob($data));
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
    public function resultUpdate ($id,Request $request){
        $validator = Validator::make($request->all(), [
            'name' => [ 'required',],
            'result' => [ 'required',],

        ]);
        if($validator->fails()){
            return response()->json([
                'status'  => false,
                'message' =>$validator->messages()->first()
            ],403);
        }
        $result  = Result::findorfail($id);

        $job = Job::findorfail($result->job_id);

        if ($job->status == 'finished'){
            return response()->json([
                'status'  => false,
                'message' =>'You cannot submit a grade after result approved '
            ],403);
        }
        $result->fill($request->all());
        $status = $result->update();
        if($status){
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

}
