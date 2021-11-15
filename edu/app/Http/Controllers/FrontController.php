<?php

namespace App\Http\Controllers;

use App\Front\Front_ar;
use App\Front\question;
use App\Front\service;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function ar(){
        $page_title = 'لوحة التحكم';
        $page_description = 'لوحة تحكم تطبيق الشامل';
        $front = Front_ar::where('id',2)->first();
        return view('front.ar.catEdit',compact('page_title','page_description','front'));

    }
    public function ar5(){
        $page_title = 'لوحة التحكم';
        $page_description = 'لوحة تحكم تطبيق الشامل';
        $front = Front_ar::where('id',2)->first();
        return view('front.ar.catEdit4',compact('page_title','page_description','front'));

    }
    public function ar2(){
        $page_title = 'لوحة التحكم';
        $page_description = 'لوحة تحكم تطبيق الشامل';
        $front = Front_ar::where('id',2)->first();
        $services = service::all();
        return view('front.ar.catEdit2',compact('page_title','page_description','front','services'));

    }
    public function ar4(){
        $page_title = 'لوحة التحكم';
        $page_description = 'لوحة تحكم تطبيق الشامل';
        $front = Front_ar::where('id',2)->first();
        $questions = question::all();
        return view('front.ar.catEdit3',compact('page_title','page_description','front','questions'));

    }

    //** En */
    public function en(){
        $page_title = 'لوحة التحكم';
        $page_description = 'لوحة تحكم تطبيق الشامل';
        $front = Front_ar::latest()->first();
        return view('front.en.catEdit',compact('page_title','page_description','front'));

    }
    public function en5(){
        $page_title = 'لوحة التحكم';
        $page_description = 'لوحة تحكم تطبيق الشامل';
        $front = Front_ar::latest()->first();
        return view('front.en.catEdit4',compact('page_title','page_description','front'));

    }
    public function en2(){
        $page_title = 'لوحة التحكم';
        $page_description = 'لوحة تحكم تطبيق الشامل باللغة الانجليزية';
        $front = Front_ar::latest()->first();
        $services = service::all();
        return view('front.en.catEdit2',compact('page_title','page_description','front','services'));

    }
    public function en4(){
        $page_title = 'لوحة التحكم';
        $page_description = 'لوحة تحكم تطبيق الشامل';
        $front = Front_ar::latest()->first();
        $questions = question::all();
        return view('front.en.catEdit3',compact('page_title','page_description','front','questions'));

    }


    public function ar_post(Request $request){
        $front = Front_ar::findorfail($request->id);
        $front->fill($request->all());
        $status = $front->update();
        if($status == true){
            return response()->json([
                'status'  => true,
                'message' => 'تم تعديل البيانات بنجاح',
            ]);        }else{
            return response()->json([
                'status'  => false,
                'message' => 'فشل التعديل رجاء محاوله مرة أخرى',
            ]);
        }
    }

    /**
     * @param Request $request
     * @param service $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ar_srevice(Request $request,service $service){
        $service->fill($request->all());
        $status = $service->update();
//        dd($service ,$request->all());
        if($status){
            return back()->with('success', 'تم التعديل  بنجاح');


        }else{
            return back()->with('error','فشل التعديل رجاء محاوله مرة أخرى');

        }

    }

    /**
     * @param Request $request
     * @param question $question
     * @return \Illuminate\Http\RedirectResponse
     */
    public function ar_question(Request $request,question $question){
        $question->fill($request->all());
        $status = $question->update();
//        dd($service ,$request->all());
        if($status){
            return back()->with('success', 'تم التعديل  بنجاح');


        }else{
            return back()->with('error','فشل التعديل رجاء محاوله مرة أخرى');

        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function questionCreate(Request $request){
        $question  = new question();
        $question->fill($request->all());
        $question->title_en = $request->title;
        $question->sub_title_en = $request->sub_title;
        $question->service_id = 1;
        $status = $question->save();
//        dd($service ,$request->all());
        if($status){
            return back()->with('success', 'تم الاضافة    بنجاح');


        }else{
            return back()->with('error','فشل التعديل رجاء محاوله مرة أخرى');

        }

    }
}
