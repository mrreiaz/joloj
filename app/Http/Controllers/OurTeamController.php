<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\OurTeam;

use Session;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourteams = DB::table('our_teams')->get();
        // return $ourteams;
        return view('admin.pages.ourteam.index',compact('ourteams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.ourteam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
            'testimonial_photo_input'  => 'required',
            'name'                     => 'required|max:255',
            'designations'             => 'required',
            'body'                     => 'required'
        ));
        
        
        
                           
        if($request->hasFile('testimonial_photo_input'))
        {
            if($request->file('testimonial_photo_input')->isValid())
            {
                
                
                /**
                 * SimpleImage can't make dir. It returns error if directory does not exist.
                 * Make directory (if it dows not exists) before putting file in it
                 */
                $location   = public_path().'/public/img/ourteam/';
                if(!is_dir($location))
                {
                    
                    mkdir($location, 0777, true);
                                    
                }
                
                
                /**
                *
                * Prepare names for file at different sizes
                * 
                */
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('testimonial_photo_input')->getClientOriginalExtension();
                $image_md  = date('Ymdhis').'_md.'.$request->file('testimonial_photo_input')->getClientOriginalExtension();
                $image_sm  = date('Ymdhis').'_sm.'.$request->file('testimonial_photo_input')->getClientOriginalExtension();
                $image_xs  = date('Ymdhis').'_xs.'.$request->file('testimonial_photo_input')->getClientOriginalExtension();
                
                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('testimonial_photo_input'));
                
                
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
                
                $request['img'] = '/public/img/ourteam/'.$image_lg;
                
            }
        }
        
        
        
        $save_success = OurTeam::create($request->all());

        
        Session::flash('success', 'The blog post was successfully save!');
                
        if($save_success){
        
            return redirect()->action('OurTeamController@index')->withErrors('Data has been stored successfully.');
        
        } else{
            
            return back()->withInput()->withErrors('Failed to store data. Please check data and retry.');
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = OurTeam::find($id);
        
        return view('admin.pages.ourteam.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $ourteam = OurTeam::find($id);
        
        // validate the data
        $this->validate($request, array(
            'testimonial_photo_input'  => 'required',
            'name'                     => 'required|max:255',
            'designations'             => 'required',
            'body'                     => 'required'
        ));
        
             
                
        if($request->hasFile('testimonial_photo_input'))
        {
            if($request->file('testimonial_photo_input')->isValid())
            {

                /**
                *
                * At first, remove previous items, if they exist
                * 
                */
                if($ourteam->testimonial_photo_input)
                {
                    
                    if(\Storage::has($ourteam->testimonial_photo_input))
                    {
                        
                        \Storage::delete($ourteam->testimonial_photo_input);
                        
                    }
                    
                }

                $file  = date('Ymdhis').'.'.$request->file('testimonial_photo_input')->getClientOriginalExtension();
                
                if($request->file('testimonial_photo_input')->move(public_path().'/public/img/ourteam/', $file))
                {
                    
                    $request['img'] = '/public/img/ourteam/'.$file;
                    
                }
                
            }
                        
        }
        
                
        $save_success = OurTeam::find($id)->update($request->all());
        

        Session::flash('success', 'The information update successfully !');
                
        if($save_success){
        
            return redirect()->action('OurTeamController@index')->withErrors('Data has been update successfully.');
        
        } else{
            
            return back()->withInput()->withErrors('Failed to store data. Please check data and retry.');
            
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = OurTeam::find($id);
        $post->delete();
        Session::flash('success', 'The  successfully deleted.');
        return redirect()->action('OurTeamController@index');
    }
}
