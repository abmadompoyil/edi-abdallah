<?php

namespace App\Http\Controllers\Edu;

use App\Edu\Category;
use App\Edu\Package;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacakgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'الباقات ';
        $page_description = 'جدول بقائمة الباقات';
        $packages  = Package::all();
        return view('edu.packages.datatables', compact('page_title', 'page_description','packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'إنشاء باقة';
        $page_description = 'أضف باقة اشتراك للتطبيق ';
        $packages  = Package::all();
        return view('edu.packages.create', compact('page_title', 'page_description','packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Package();
        $cat->fill($request->all());
        if ($request->days == 30) {
            $cat->month = 'شهر' ;
        }elseif($request->days == 90) {
            $cat->month = ' 3 شهر' ;
        }elseif($request->days ==180) {
            $cat->month = '6 شهر' ;
        }elseif($request->days == 270) {
            $cat->month = '9 شهر' ;
        }elseif($request->days == 360) {
            $cat->month = 'سنة' ;
        }
        if($cat->save()){
            return response()->json([
                'status'  => true,
                'message' => 'تم اضافة الباقة بنجاح',
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
     * @param  \App\Edu\Pacakge  $pacakge
     * @return \Illuminate\Http\Response
     */
    public function show(Package $pacakge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edu\Pacakge  $pacakge
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        $page_title = 'تعديل الباقة';
        $page_description = $package->name;
        return view('edu.packages.catEdit', compact('page_title', 'page_description','package'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edu\Pacakge  $pacakge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $package->fill($request->all());
        if ($request->days == 30) {
            $package->month = 'شهر' ;
        }elseif($request->days == 90) {
            $package->month = ' 3 شهر' ;
        }elseif($request->days ==180) {
            $package->month = '6 شهر' ;
        }elseif($request->days == 270) {
            $package->month = '9 شهر' ;
        }elseif($request->days == 360) {
            $package->month = 'سنة' ;
        }
        if($package->update()){

            return response()->json([
                'status'  => true,
                'message' => 'تم تحديث الباقة بنجاح',
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
     * @param  \App\Edu\Pacakge  $pacakge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $pacakge)
    {
        //
    }
}
