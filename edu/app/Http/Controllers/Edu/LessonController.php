<?php

namespace App\Http\Controllers\Edu;

use App\Edu\lessons;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(Request $request){
//        dd('asd');
        $page_title = 'كل الدروس';
        $page_description = 'الدروس  داخل التطبيق';
        $lessons =  lessons::orderBy('created_at','desc')->paginate(15);
        if($request->ajax())
        {
            return view('edu.lessons.table', compact('lessons'))->render();
        }
        return view('edu.lessons.datatables', compact('page_title', 'page_description','lessons'));
    }
}
