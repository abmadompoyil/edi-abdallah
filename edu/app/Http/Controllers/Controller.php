<?php

namespace App\Http\Controllers;

use App\Sms;
use http\Client;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function json($code,$status,$message,$data=[]){

        return response()->json(['status'=>[
            'code'=>$code,'status'=>$status,'message'=>$message
        ],'data'=>$data],$code);


    }

    function sendMessage($msg = 'test Api', $sub='test Api ', $head='test Api',$arr =  array())
    {
        $content = array(
            "en" => $msg, "ar" => $msg
        );
        $headings = array(
            "en" => $head, "ar" => $head
        );
        $subtitle = array(
            "en" => $sub, "ar" => $sub
        );

        $fields = array(
            'app_id' => "db7045d7-484c-45b3-80c0-5680edb8739a",
//            'included_segments' => array('All'),
            'include_player_ids' => $arr ,
            'data' => array("foo" => "bar"),
            'large_icon' => "http://alshshamil.com/index/img/LOGOAWQAT.png",
            'contents' => $content,
            'subtitle' => $subtitle,
            'headings' => $headings,
        );

        $fields = json_encode($fields);
//        print("\nJSON sent:\n");
//        print($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
            'Authorization: Basic YTVkYTI4MTgtOTc3OS00ODFiLTlhODctOTFkNDE0ZDliN2Yx'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;

    }
    function sendMessageDriver($msg = 'test Api', $sub='test Api ', $head='test Api',$arr =  array())
    {
        $content = array(
            "en" => $msg, "ar" => $msg
        );
        $headings = array(
            "en" => $head, "ar" => $head
        );
        $subtitle = array(
            "en" => $sub, "ar" => $sub
        );

        $fields = array(
            'app_id' => "e565bd23-f9c3-4139-8ff2-baacc3f6c4e6",
//            'included_segments' => array('All'),
            'include_player_ids' => $arr,
            'data' => array("foo" => "bar"),
            'large_icon' => "http://alshshamil.com/index/img/LOGOAWQAT.png",
            'contents' => $content,
            'subtitle' => $subtitle,
            'headings' => $headings,
        );

        $fields = json_encode($fields);
//        print("\nJSON sent:\n");
//        print($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
            'Authorization: Basic NzAwMTBjMmYtYWIxNS00YzEzLWI3YTktODllM2QyYmE0ODMy'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;

    }

    function SMS($phone,$msg){
       $sms = new Sms('alshshamil','Amjad123$','UTF-8');
        $Credits    = $sms->GetCredits();
        $SenderName = $sms->GetSenders();
        $CheckUser  = $sms->CheckUserPassword();
        $Send = $sms->Send_SMS($phone, 'ALSHSHAMIL',$msg);
        return $Send;
    }


    public function createPyament($arr){
        $rand = rand(111111111 , 999999999);
        extract($arr);
        $url = "https://test.oppwa.com/v1/checkouts";
        if ($test){
            $data = "entityId=$entityId" .
                "&amount=$amount" .
                "&currency=SAR" .
                "&customer.email=$email" .
                "&customer.givenName=$name" .
                "&customer.surname=$name" .
                "&billing.country=SA" .
                "&billing.city=$city" .
                "&billing.state=$city" .
                "&billing.street1=$address" .
                "&billing.postcode=$zip" .
                "&merchantTransactionId=$id".
                "&testMode=EXTERNAL".
                "&paymentType=DB";
        }else{
            $data = "entityId=$entityId" .
                "&amount=$amount" .
                "&currency=SAR" .
                "&customer.email=$email" .
                "&customer.givenName=$name" .
                "&customer.surname=$name" .
                "&billing.country=SA" .
                "&billing.city=$city" .
                "&billing.state=$city" .
                "&billing.street1=$address" .
                "&billing.postcode=$zip" .
                "&merchantTransactionId=$id".
                "&paymentType=DB";
        }


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization:Bearer OGFjN2E0Yzc3OGM2ODk0MDAxNzhkMDZmN2FiNDEzNTV8ODVrcXRoVzM2Zg=='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        //return $responseData;

        $response = json_decode($responseData, TRUE);

        $checkoutId = $response["id"];
        return $checkoutId;
    }


    function get_payment_status($checkoutId,$entity){
        $url = "https://test.oppwa.com/v1/checkouts/$checkoutId/payment";
        $url .= "?entityId=$entity";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGFjN2E0Yzc3OGM2ODk0MDAxNzhkMDZmN2FiNDEzNTV8ODVrcXRoVzM2Zg=='));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return $responseData;

    }


}
