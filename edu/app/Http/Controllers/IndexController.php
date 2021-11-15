<?php

namespace App\Http\Controllers;

use App\Edu\Library;
use App\Front\Front_ar;
use App\Front\question;
use App\Front\service;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(){
        if (\Session::get('locale') == null or \Session::get('locale') == 'ar') {
            $front = Front_ar::where('id', 2)->first();
            $services = service::all()->toArray();
            $question = question::all();
        }elseif (\Session::get('locale') == 'en') {
            $front = Front_ar::where('id', 1)->first();
            $services = service::all()->toArray();
            $question = question::all();
        }
        $lang = \Session::get('locale') ?? 'ar';
        return view('index',compact('front','lang','services','question'));
    }

   public function lang ($lang){
        \Session::put('locale',$lang);
        return redirect()->back();
    }


    public function library($type ,Request $request){
        $page_title = 'Library';
        $page_title = __("Files");
        if ($type == 'arabic') {
            $page_description = __("Arabic files ");
            $type = 1;
        } elseif ($type == 'islamic') {
            $page_description = __("Islamic files ");
            $type = 2;
        } elseif ($type == 'other') {
            $page_description = __("Others files ");
            $type = 3;
        }
        $files = Library::where('type', $type)->orderBy('created_at', 'desc')->paginate(15);
        return view('library',compact('files','page_description','page_title'));
    }
}
