<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Activation;

use Sentinel;

class ActivationController extends Controller
{

    public  function getActiveUser($email,$activationCode)
    {
        $user = User::whereEmail($email)->first();
        $sentainelUser = Sentinel::findById($user->id);

        if(Activation::complete($sentainelUser,$activationCode))
        {
            return redirect()->action('LoginController@getAutoActiveUserLogin')->with(['success' => 'Your registration is Complete. Please Login .']);
        }else{
            return redirect()->back();
        }

    }
}
