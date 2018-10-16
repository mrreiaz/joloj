<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\User;

use Sentinel;

use Activation;

use Mail;

use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;


class LoginController extends Controller
{
    public function getAutoActiveUserLogin()
    {
        return view('admin.pages.login.loginAutoActiveUser');
    }

    public function postAutoActiveUserLogin(Request $request)
    {

        try{
            $user =  $request->all();
            // if(Sentinel::authenticateAndRemember($user))
            if(Sentinel::authenticate($user))
                return redirect()->action('DashboardController@getDashbord');
            else
                return redirect()->back()->with(['error'=>'Wrong Cardensial']);
        }catch(ThrottlingException $e){
            $delay = $e->getDelay();
            return redirect()->back()->with(['error'=>"Your account is band for $delay sec. Please try later"]);
        }catch(NotActivatedException $e){
            return redirect()->back()->with(['error'=>"Your account is not Active, please Contact with Support"]);
        }


    }
}
