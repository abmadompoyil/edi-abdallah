<?php

namespace App\Http\Controllers\Hrj;

use App\Haraj\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'إدخال مدينة';
        $page_description = 'This is datatables test page';
        $city = City::all();
        return view('haraj.city.datatables', compact('page_title', 'page_description','city'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'إدخال مدن';
        $page_description = 'إدخال مدن حراج';
        return view('haraj.city.create',compact('page_description','page_description'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new City();
        $cat->fill($request->all());

        if($cat->save()){
            return response()->json([
                'status'  => true,
                'message' => 'تم اضافة المدينة بنجاح',
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' => 'فشل الحفظ رجاء محاوله مرة أخرى',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Haraj\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Haraj\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city,Request  $request)
    {
        $page_title = 'تعديل المدن';
        $page_description = $city->name;
        return view('haraj.city.catEdit', compact('page_title', 'page_description','city'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Haraj\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $city->fill($request->all());
        if($city->save()){
            return response()->json([
                'status'  => true,
                'message' => 'تم تحديث المدينة بنجاح',
            ]);
        }else{
            return response()->json([
                'status'  => false,
                'message' => 'فشل النعديل رجاء محاوله مرة أخرى',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Haraj\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        //
    }
}
