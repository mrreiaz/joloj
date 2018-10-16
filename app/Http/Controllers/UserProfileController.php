<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\SimpleImage;

use App\User;

use Sentinel;

class UserProfileController extends Controller
{
    public function getUserProfile()
    {
        $user = Sentinel::check();
        return view('admin.pages.users.edit',compact('user'));
    }
    
    public function postUserProfile(Request $request)
    {
        
     $user = Sentinel::check();
        
        if($request->hasFile('user_photo_input'))
        {
            if($request->file('user_photo_input')->isValid())
            {
             
                /**
                 * SimpleImage can't make dir. It returns error if directory does not exist.
                 * Make directory (if it dows not exists) before putting file in it
                 */
                $location   = public_path().'/img/images/';
                if(!is_dir($location))
                {
                    
                    mkdir($location, 0777, true);
                                    
                }
                
                
                /**
                *
                * Prepare names for file at different sizes
                * 
                */
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('user_photo_input')->getClientOriginalExtension();
                $image_md  = date('Ymdhis').'_md.'.$request->file('user_photo_input')->getClientOriginalExtension();
                $image_sm  = date('Ymdhis').'_sm.'.$request->file('user_photo_input')->getClientOriginalExtension();
                $image_xs  = date('Ymdhis').'_xs.'.$request->file('user_photo_input')->getClientOriginalExtension();
                
                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('user_photo_input'));
                
                
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                // Size:md
                $image->best_fit(640,400);
                $image->save($location.$image_md);
                
                // Size:sm
                $image->best_fit(320,225);
                $image->save($location.$image_sm);
                
                // Size:xs
                $image->best_fit(100,75);
                $image->save($location.$image_xs);
                
                $request['user_photo'] = '/img/images/'.$image_lg;
                
            }
                        
        }
        

        $user->update($request->all());
        
        return redirect()->back()->with(['success' => 'Your profile is update successfully']);
    }
}
