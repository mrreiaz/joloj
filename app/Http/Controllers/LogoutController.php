<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Sentinel;


class LogoutController extends Controller
{
    public function getLogout()
    {

        Sentinel::logout();
        return redirect()->action('LoginController@getAutoActiveUserLogin')->with(['error'=>'You are Logout Successfully.']);;
    }
}
