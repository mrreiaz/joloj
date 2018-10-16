<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;

use Sentinel;

use Activation;

use Reminder;

use Mail;


class ResetPasswordController extends Controller
{
    public function getAutoActiveUserResetPassword($email,$resetCode)
    {
        $user = User::byEmail($email);
        $sentaineluser = Sentinel::findById($user->id);

        if($reminder = Reminder::exists($sentaineluser)){

            if($resetCode == $reminder->code)
                return view('admin.pages.resetPassword.AutoActiveUserResetPassword');
            else
                return redirect()->back();
        }
        else{
            return redirect()->back();
        }

    }

    public function postAutoActiveUserResetPassword(Request $request,$email,$resetCode)
    {
        $this->validate($request,[
            'password' => 'confirmed|required|min:5',
            'password_confirmation' => 'required|min:5'
        ]);

        $user = User::byEmail($email);
        $sentaineluser = Sentinel::findById($user->id);
        if($reminder = Reminder::exists($sentaineluser)){

            if($resetCode == $reminder->code)
            {
                Reminder::complete($sentaineluser,$resetCode,$request->password);
                return redirect()->action('LoginController@getAutoActiveUserLogin')->with(['success' => 'Your password is reset successfully. Please Login .']);

            }
            else
                return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }


}
