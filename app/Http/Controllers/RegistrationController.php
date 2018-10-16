<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Sentinel;

use Activation;

use Mail;

class RegistrationController extends Controller
{
    public function getUserAutoActiveRegistration()
    {
        return view('admin.pages.registration.registrationAndActive');
    }


    public function lol(Request $request)
    {
        return $request->all();
        $user = Sentinel::registerAndActivate($request->all());
        return redirect()->action('LoginController@getAutoActiveUserLogin')->with(['success' => 'Your registration is Complete. Please Login .']);

    }



    public function postUserAutoActiveRegistrations(Request $request)
    {
        return $request->all();
        $user = Sentinel::registerAndActivate($request->all());
        return redirect()->action('LoginController@getAutoActiveUserLogin')->with(['success' => 'Your registration is Complete. Please Login .']);

    }


    public function getUserEmailSendRegistration()
    {
        return view('admin.pages.registration.registrationAndActiveByEmail');
    }

    public function postUserEmailSendRegistration(Request $request)
    {
        $user = Sentinel::register($request->all());

        $activation = Activation::create($user);

        $this->sendMail($user,$activation->code);

        return redirect()->action('LoginController@getAutoActiveUserLogin')->with(['success' => 'Confirm E-mail is send your mail.Please Active your account.']);
    }


    private function sendMail($user,$code)
    {
        Mail::send('mails.pages.activeCode',[
            'user'=>$user,
            'code'=>$code
        ],function($message) use ($user){
            $message->to($user->email);
            $message->subject("Hello $user->name, Active Your Account");
        });
    }

}
