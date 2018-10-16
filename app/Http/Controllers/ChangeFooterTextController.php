<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Footer;

use Session;

use DB;

class ChangeFooterTextController extends Controller
{
    
    public function getFootertext()
    {
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('admin.pages.footer.change',compact('footer'));
    }
        
    public function postFootertext(Request $request )
    {
        $this->validate($request, [
            'footer_text' => 'required',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'google_plus' => 'required|url',
            'instagram' => 'required|url',
            'youtube' => 'required|url',
        ]);
        
        $save_success = Footer::find(1)->update($request->all());
        
        Session::flash('success', 'The information was successfully saved!');
        
        return back();
        
    }
    
    
}
