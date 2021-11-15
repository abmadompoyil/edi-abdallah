<?php

namespace App\Http\Controllers\Edu;

use App\Edu\Date;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DateController extends Controller
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
        $page_title = __("Date meeting");
        $page_description = __("Date meeting Table");
        $dates = Date::all();

        return view('edu.date.datatables', compact('page_title', 'page_description','dates'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = __(" Add  new Date");
        $page_description = __(" Add new date meeting");
        return view('edu.date.create', compact('page_title', 'page_description'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Date();
        $old = Date::where('date',$request->date)->where('start',$request->start)->where('end',$request->end)->first();
        if ($old != null){
            return response()->json([
                'status'  => false,
                'message' => __("Error when add , this is date is unavalibale")],403);

        }
        $cat->fill($request->all());
        if (!($request->start  < $request->end)){
        return response()->json([
            'status'  => false,
            'message' => __("Error when add , please try again")],403);
        }
        if($cat->save()){
            return response()->json([
                'status'  => true,
                'message' => __("Added was succesfuly "),
            ],200);
        }else{
            return response()->json([
                'status'  => false,
                'message' => __("Error when add , please try again")],403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function show(Date $date)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function edit(Date $date)
    {
        $page_title = __(" Edit Date");
        $page_description = __(" Edit date meeting");
        return view('edu.date.catEdit', compact('page_title', 'page_description','date'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Date $date)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Date  $date
     * @return \Illuminate\Http\Response
     */
    public function destroy(Date $date,Request $request)
    {
        $category = Date::findorfail($request->id);
        if($category->sub_category != null) {
            foreach ($category->sub_category as $sub) {
                $sub->delete();
            }

        }
        $category->delete();
        return response()->json([
            'status'  => true,
            'message' => __("Date was delete  "),
            'id'    => $request->id,
        ]);
    }
}
