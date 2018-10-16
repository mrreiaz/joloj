<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Contuct;

class ChageConttactController extends Controller
{
        
    public function getContuct()
    {
        $contuct = DB::table('contucts')->where('id', 1)->first();
        return view('admin.pages.contact.change',compact('contuct'));
    }
    
    public function postContuct(Request $request)
    {
       
        $this->validate($request, [
            'address'    => 'required',
            'phone'      => 'required',
            'hours'      => 'required',
            'email'      => 'required',
            'facebook'   => 'required',
            'twitter'    => 'required',
            'google'     => 'required',
            'instagram'  => 'required',
            'youtube'    => 'required',
        ]);
         
        $save_success = Contuct::find(1)->update($request->all());
        return $save_success;
        Session::flash('success', 'The information was successfully saved!');
        
        return back();
        
    }
}
