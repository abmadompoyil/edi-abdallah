<?php

namespace App\Http\Controllers\Edu;

use App\Edu\Category;
use App\Edu\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = __("Subjects");
        $page_description = __("Subjects");
        $categories =  Subject::all();
        return view('edu.category.datatables', compact('page_title', 'page_description','categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title =  __("Add Subject");
        $page_description =  __("Add Subject");
        return view('edu.category.create',compact('page_description','page_description'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Subject();
        $cat->fill($request->all());
        if($request->has('icon')){
            $path = $request->file('icon')->store('icon');
            $cat->icon = $path;

        }
        if($cat->save()){
            return response()->json([
                'status'  => true,
                'message' => __("Added was succesfuly "),
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' => __("Error when add , please try again")],500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Haraj\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        $category = Subject::findorfail($subject);
        $page_title = __("Edit Subject");
        $page_description = $category->name;
        return view('edu.category.catEdit', compact('page_title', 'page_description','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Haraj\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject,Request  $request)
    {
        $category = $subject;
        $page_title = __("Edit Subject");
        $page_description = $category->name;
        return view('edu.category.catEdit', compact('page_title', 'page_description','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Haraj\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category = Subject::findorfail($request->id);
      $category->fill($request->all());
        if($category->update()){
            return response()->json([
                'status'  => true,
                'message' => __("Added was succesfuly "),
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' => __("Edit falied , please try again "),
            ],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Haraj\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category , Request  $request,$id)

    {
        $category = Subject::findorfail($request->id);
        if($category->sub_category != null) {
            foreach ($category->sub_category as $sub) {
                $sub->delete();
            }

        }
        $category->delete();
        return response()->json([
            'status'  => true,
            'message' => __("Subject was delete  "),
            'id'    => $request->id,
        ]);
    }
}
