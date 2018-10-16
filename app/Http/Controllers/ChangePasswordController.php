<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Sentinel;

use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function getAutoActiveUserChangePassword()
    {
        return view('admin.pages.changePassword.AutoActiveUserChangePassword');
    }
    
    public function postAutoActiveUserChangePassword(Request $request)
    {
          
        $user = Sentinel::check();
        $hashedPassword = $user->password;
        $plain_pass = $request->current_password;
        if (Hash::check($plain_pass, $hashedPassword)) {
            
            if($request->password == $request->con_password){
                // return 'ok';
                $pass = bcrypt($request->password);

                $user->update(['password' => $pass]);
                
                return redirect()->action('DashboardController@getDashbord')->with(['success' => 'Your password is update successfully']);
                
                
            }else{
                
            return 'error';
            }
            
        }
        else{
            return 'error';
        }

    }
}
