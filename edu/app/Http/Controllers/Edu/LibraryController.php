<?php

namespace App\Http\Controllers\Edu;

use App\Edu\Job;
use App\Edu\Library;
use App\Edu\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$slug)
    {
        $page_title = __("Jobs");
        $page_description = __("Jobs Table");
        if ($slug == 'arabic'){
            $type =1;
        }elseif($slug == 'islamic'){
            $type = 2;
        }elseif ($slug == 'other'){
            $type =3;
        }elseif ($slug == 'social'){
            $type =4;
        }
        $files = Library::where('type',$type)->orderBy('created_at','desc')->paginate(15);
        if($request->ajax())
        {
            if (isset($request->value)){
                $keyword = $request->value;
                $files= Library::where(function ($query) use($keyword) {
                    $query->where('name', 'like', '%' . $keyword . '%')
                        ->orWhere('id', 'like', '%' . $keyword . '%')
                        ->orWhere('phone', 'like', '%' . $keyword . '%');
                })->where('type',3)
                    ->paginate(50);
            }
            return view('admin.files.table', compact('files'))->render();
        }
        return view('admin.files.datatables', compact('page_title', 'page_description','files','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                'message' =>__("Add Cv   was successfully")
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' =>__("Add Cv Meeting was Falied")
            ],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Edu\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edu\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $library)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edu\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library,$id)
    {
        $library = Library::findorfail($id);
        if ($library->is_Avalibale == 1 ){
            $library->is_Avalibale = 0;
        }elseif($library->is_Avalibale == 0){
            $library->is_Avalibale = 1;
        }
        $status = $library->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edu\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $library,Request $request)
    {
        $category = Library::findorfail($request->id);
        if($category->sub_category != null) {
            foreach ($category->sub_category as $sub) {
                $sub->delete();
            }

        }
        $category->delete();
        return response()->json([
            'status'  => true,
            'message' => __("File was delete  "),
            'id'    => $request->id,
        ]);
    }
}
