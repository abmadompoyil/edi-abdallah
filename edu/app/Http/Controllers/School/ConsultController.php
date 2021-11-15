<?php

namespace App\Http\Controllers\School;

use App\Edu\Comment;
use App\Edu\Consult;
use App\Edu\Job;
use App\Edu\Notifaction;
use App\Edu\Resume;
use App\Http\Controllers\Controller;
use App\Mail\NewJob;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page_title = __("Consult");
        $page_description = __("Consult Table");
        $consults = Consult::where('school_id',$request->user()->id)->orderBy('created_at','desc')->paginate(15);
        if($request->ajax())
        {
            if (isset($request->value)){
                $keyword = $request->value;
                $consults= Consult::where('school_id',$request->user()->id)->
                where(function ($query) use($keyword) {
                    $query->where('name', 'like', '%' . $keyword . '%')
                        ->orWhere('id', 'like', '%' . $keyword . '%')
                        ->orWhere('phone', 'like', '%' . $keyword . '%');
                })->where('type',3)
                    ->paginate(50);
            }
            return view('school.consult.table', compact('consults'))->render();
        }
        return view('school.consult.datatables', compact('page_title', 'page_description','consults'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = __(" Add  consult");
        $page_description = __(" Add new consult");
        return view('school.consult.create', compact('page_title', 'page_description'));
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
            'consult' => [ 'string','min:10','required'],

        ]);
        if($validator->fails()){
            return response()->json([
                'status'  => false,
                'message' =>$validator->messages()->first()
            ],403);
        }

        $consult = new Consult();
        $consult->fill($request->all());
        $consult->school_id = $request->user()->id;
        $status =  $consult->save();

        $files=$request->files;
        if ($files != null){
             foreach($request->file('files') as $cv ) {
                $path = $cv->store('consult/files');
//                $path = $file->store('consult/files');
                $path = ('edu/storage/app/' . $path);
                $resume = new Resume();
                $resume->consult_id = $consult->id;
                $resume->resume = $path;
                $resume->save();

            }
        }

        if($status){
            foreach (User::where('role_id' ,'!=',3)->get() as $user) {

                $message = "Hi " . $user->name . "\r\n There is a new Consult
\r\n from school:" . $consult->school->name . "
\r\n Consult is  : " . $consult->consult;
                $data = ['message' => $message, 'id' => $consult->id];
                Mail::to($user->email)->send(new NewJob($data));
            }
            return response()->json([
                'status'  => true,
                'message' =>__("Add Consult was successfully")
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Add Consult was Falied")
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Edu\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function show(Consult $consult,Request $request)
    {
        $page_title = __(" Consult Status ");
        $page_description = __("  Consult Details ");
        $school = $request->user();
        $comments = Comment::where('consult_id',$consult->id)->latest('created_at')->get();
        return view('school.consult.show', compact('page_title', 'page_description','consult','school','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edu\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function edit(Consult $consult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edu\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consult $consult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edu\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consult $consult)
    {
        //
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
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
        $job = Consult::findorfail($id);
        $comment  = new Comment();
        $comment->fill($request->all());
        $comment->sender_type = 2;
        $comment->sender_id =$request->user()->id;
        $comment->consult_id =$id;
        $comment->status = $job->status ;
        $status = $comment->save();
        if($status){
            foreach (User::where('role_id' ,'!=',3)->get() as $user) {

                $message = "Hi " . $user->name . "\r\n There is a new comment to consult
\r\n from school:" . $job->school->name . "
\r\n comment is  : " . $comment->result;
                $data = ['message' => $message, 'id' => $job->id];
                Mail::to($user->email)->send(new NewJob($data));
            }
            $notify = new Notifaction();
            $notify->text = $message = " There is a new comment on Consult  \r\n from school:" . $job->school->name ;
            $notify->url = $id;
            $notify->supervisor_id = 0;
            $notify->type = 3;
            $notify->save();
            return response()->json([
                'status'  => true,
                'type'  => 3,

                'message' =>__("Note send  was successfully")
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Note send was Falied")
            ]);
        }
    }

}
