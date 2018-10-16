<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getDashbord(){
        return view('admin.pages.dashbord');
    }
}
