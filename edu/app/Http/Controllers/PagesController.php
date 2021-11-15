<?php

namespace App\Http\Controllers;

//use App\Delviery\Order;
//use App\Delviery\Places;
use App\Edu\Category;
use App\Edu\Job;
use App\Edu\Package;
use App\Edu\UserPackage;
//use App\Haraj\Ads;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PhpParser\Builder\Property;

class PagesController extends Controller
{
    public function test(){
        return parent::SMS('966537141291','رسالة تجريبية');
//        return parent::sendMessage();
    }

    public function driver(){
        return parent::sendMessageDriver();
    }
    public function index()
    {
        if (App::getLocale() == 'ar'){
        $page_title = 'لوحة التحكم';
            $page_description = ' Recruitment of teachers for national programs ';
        } else {
            $page_title = 'Dashboard ';
            $page_description = ' Recruitment of teachers for national programs ';
        }
        $jobs = Job::orderBy('created_at','desc')
            ->get();
        $event = collect();
        foreach ($jobs as $job){
            $ev = array();
            $username =  $job->Teacher->name ?? null;

            $ev['title'] = 'Interview meeting';
            $ev['description'] = ' meeting with '.$username ?? null;

            $ev['allDay'] = false;

            $ev['start']  = $job->date . 'T'.$job->start;
            $ev['end']  = $job->date .'T'.$job->end;


            $event->push($ev);

        }
        $getusertoday = 2;
        return view('pages.dashboard', compact('page_title', 'page_description','getusertoday','event'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function meeting(Request $request){
        $jobs = Job::orderBy('created_at','desc')
            ->get();
        $event = collect();
        foreach ($jobs as $job){
            $ev = array();
            $username =  $job->Teacher->name ?? null;

            $ev['title'] = 'Interview meeting';
            $ev['description'] = ' meeting with '.$username ?? null;

            $ev['allDay'] = false;

            $ev['start']  = $job->date . 'T'.$job->start;
            $ev['end']  = $job->date .'T'.$job->end;


            $event->push($ev);

        }
        $getusertoday = 2;
        $page_title = __('Calender Schools');
        $page_description =  __('Calender Schools meeting');
        return view('edu.meeting', compact('page_title', 'page_description','event','getusertoday'));
    }



    /**
     * Demo methods below
     */
public function contact(Request $request){

}
    // Datatables
    public function datatables()
    {
        $page_title = 'Datatables';
        $page_description = 'This is datatables test page';

        return view('pages.datatables', compact('page_title', 'page_description'));
    }

    // KTDatatables
    public function ktDatatables()
    {
        $page_title = 'KTDatatables';
        $page_description = 'This is KTdatatables test page';

        return view('pages.ktdatatables', compact('page_title', 'page_description'));
    }

    // Select2
    public function select2()
    {
        $page_title = 'Select 2';
        $page_description = 'This is Select2 test page';

        return view('pages.select2', compact('page_title', 'page_description'));
    }

    // custom-icons
    public function customIcons()
    {
        $page_title = 'customIcons';
        $page_description = 'This is customIcons test page';

        return view('pages.icons.custom-icons', compact('page_title', 'page_description'));
    }

    // flaticon
    public function flaticon()
    {
        $page_title = 'flaticon';
        $page_description = 'This is flaticon test page';

        return view('pages.icons.flaticon', compact('page_title', 'page_description'));
    }

    // fontawesome
    public function fontawesome()
    {
        $page_title = 'fontawesome';
        $page_description = 'This is fontawesome test page';

        return view('pages.icons.fontawesome', compact('page_title', 'page_description'));
    }

    // lineawesome
    public function lineawesome()
    {
        $page_title = 'lineawesome';
        $page_description = 'This is lineawesome test page';

        return view('pages.icons.lineawesome', compact('page_title', 'page_description'));
    }

    // socicons
    public function socicons()
    {
        $page_title = 'socicons';
        $page_description = 'This is socicons test page';

        return view('pages.icons.socicons', compact('page_title', 'page_description'));
    }

    // svg
    public function svg()
    {
        $page_title = 'svg';
        $page_description = 'This is svg test page';

        return view('pages.icons.svg', compact('page_title', 'page_description'));
    }

    // Quicksearch Result
    public function quickSearch()
    {
        return view('layout.partials.extras._quick_search_result');
    }
}
