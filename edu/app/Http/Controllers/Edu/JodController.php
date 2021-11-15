<?php

namespace App\Http\Controllers\Edu;

use App\Edu\Comment;
use App\Edu\Date;
use App\Edu\Job;
use App\Edu\Result;
use App\Edu\Resume;
use App\Edu\Subject;
use App\Edu\Teacher;
use App\Exports\JobsExport;
use App\Exports\UsersExport;
use App\Http\Controllers\Controller;
use App\Mail\NewJob;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel as Exel;
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
            return view('admin.job.table', compact('jobs'))->render();
        }
        return view('admin.job.datatables', compact('page_title', 'page_description','jobs'));
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
        return view('admin.job.create', compact('page_title', 'page_description','subjects','dates'));

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

        $user->school_id = $request->user()->id;
        $user->subject_id = $request->specialization;
        if ($request->specialization == 0){
            $user->other = $request->other;
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
    public function show(Job $job,Request $request,$id)
    {
        $job = Job::findorfail($id);
        $page_title = __(" Employee Status ");
        $page_description = __("  Employee ").$job->Teacher->name;
        $school = $job->school;
        $comments = Comment::where('job_id',$job->id)->get();
        $sManger = Result::where('job_id',$job->id)->where('school_id',$job->school->id)->where('type',2)->first();
        $secManger = Result::where('job_id',$job->id)->where('school_id',$job->school->id)->where('type',3)->first();
        $results = Result::where('job_id',$job->id)->where('type',1)->get();
        return view('admin.job.show', compact('page_title', 'page_description','job','school','comments','secManger','sManger','results'));
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

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function add($id,Request $request){


        $job = Job::findorfail($id);
        if ($request->note != null) {


            $comment = new Comment();
            $comment->fill($request->all());
            $comment->sender_type = 2;
            $comment->sender_id = $request->user()->id;
            $comment->job_id = $id;
            if ($job->status == 'finished') {
                return response()->json([
                    'status' => false,
                    'message' => 'you cannot add any comment when job is finished'
                ], 403);

            }
            $comment->status = $job->status;

            $status = $comment->save();
        }
        $job->status = $request->status;
        $status = $job->update();
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
            if ($request->note != null){
                $message = "Hi " .$job->school->name . "\r\n There is a new comment for your job application
\r\n comment is  : " . $comment->note."
\r\n status is  : " . $comment->status;
                $data = ['message' => $message, 'id' => $job->id];
                Mail::to($job->school->email)->send(new NewJob($data));
            }else{
                $message = "Hi " .$job->school->name . "\r\n Your job application
\r\n status updated to   : " . $job->status;
                $data = ['message' => $message, 'id' => $job->id];
                Mail::to($job->school->email)->send(new NewJob($data));
            }

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
        $job = Job::findorfail($id);
        if ($job->status == 'finished'){
            return response()->json([
                'status'  => false,
                'message' =>'Has been approved '
            ],403);
        }
       $job->status = 'finished';
      $status =   $job->update();
        if($status){
            $message = "Hi " .$job->school->name . "\r\n There is a Approved of job application
\r\n grade is  : " . $job->grade();
            $data = ['message' => $message, 'id' => $job->id];
            Mail::to($job->school->email)->send(new NewJob($data));
            return response()->json([
                'status'  => true,
                'type'  => 3,
                'message' =>'Has been approved'
            ],200);

        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Result send was Failed")
            ],500);
        }
    }


    public function export($slug,$id = null)
    {
//        return Exel::download(new UsersExport(), 'supervisors.xlsx');

        if ($slug == 'xlxs'){
            return Exel::download(new JobsExport($id,1), 'jobs.xlsx',\Maatwebsite\Excel\Excel::XLSX);

//            return (new UsersExport)->download('supervisors.xlsx', \Maatwebsite\Excel\Excel::XLSX);


        }elseif ($slug == 'csv'){
            return Exel::download(new JobsExport($id,1), 'jobs.csv',\Maatwebsite\Excel\Excel::CSV);

//            return (new UsersExport)->download('supervisors.csv', \Maatwebsite\Excel\Excel::CSV);

        }elseif ($slug == 'pdf]'){
            return Exel::download(new JobsExport($id,1), 'jobs.pdf',\Maatwebsite\Excel\Excel::DOMPDF);

//            return (new UsersExport)->download('supervisors.pdf', \Maatwebsite\Excel\Excel::DOMPDF);

        }
        return Exel::download(new JobsExport($id), 'jobs.xlsx');
    }


    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function resultAdd($id,Request $request){
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
