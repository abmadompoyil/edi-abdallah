<?php

namespace App\Http\Controllers\Password;

use App\Http\Controllers\Controller;
use App\Mail\NewJob;
use App\Mail\Password;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Redirect;

class PasswordController extends Controller
{
    public function forget(){
        $page_title = __(" Reset Password ");
        $page_description = __("  Rest Password");

        return view('auth.passwords.email', compact('page_title', 'page_description'));
    }


    public function reset(Request $request){
        $user = User::where('email',$request->email)->first();
        if ($user == null){
            return Redirect::back()->withErrors([ 'Email not found']);
        }
        $page_title = __("  Check Code ");
        $page_description = __("write code to   rest password");

        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $pass = implode($pass); //turn the array into a string
        $message = "Hi " .$user->name . "\r\n This is new password for your account ";
        $data = ['message' => $message, 'id' => $pass];
        $succes = Mail::to($user->email)->send(new Password($data));
        $user->password = bcrypt($pass);
        $user->update();
        $email = $request->email;
        $page_title = __("New password");
        $page_description = __("new password generator ");
        $msg = 'we have sent a new password to your email '.$email.', please check your email';


        return view('auth.passwords.confirm',compact('page_description','page_title','msg'));
    }

    public function code(Request $request){

        $user = User::where('email',$request->email)->where('code',$request->code)->first();
        if ($user == null){
            return Redirect::back()->withErrors([ 'Code is wrong']);

        }else{

        }



    }


    public function password(){

    }
}
