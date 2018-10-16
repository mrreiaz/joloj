<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\User;

use Sentinel;

use Activation;

use Reminder;

use Mail;

class ForgotPasswordController extends Controller
{
    public function getAutoActiveUserForgetPassword()
    {
        return view('admin.pages.forgetPassword.AutoActiveUserForgetPassword');
    }


    public function postAutoActiveUserForgetPassword(Request $request)
    {

        $user = User::whereEmail($request->email)->first();
        if(! $user)
        {
            return redirect()->back()->with(['error' => 'Your email is not correct']);
        }else{
            $sentaineluser = Sentinel::findById($user->id);

            if(count($user) == 0){
                return redirect()->back()->with(['success' => 'Reset Code Was Send to Your email.']);
            }

            $reminder = Reminder::exists($sentaineluser) ?: Reminder::create($sentaineluser);

            $this->sendEmail($user,$reminder->code);
            return redirect()->back()->with(['success' => 'Reset Code Was Send to Your email.']);

        }
    }




    private function sendEmail($user,$code)
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
