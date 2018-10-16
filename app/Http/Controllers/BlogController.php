<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\SimpleImage;

use App\Blog;

use DB;

use Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = DB::table('blogs')->get();
        return view('admin.pages.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.blogs.create');
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
                'blog_photo_input'         => 'required',
                'title'         => 'required|max:255',
                'body'          => 'required'
            ));
       
                   
        if($request->hasFile('blog_photo_input'))
        {
            if($request->file('blog_photo_input')->isValid())
            {
                
                
                /**
                 * SimpleImage can't make dir. It returns error if directory does not exist.
                 * Make directory (if it dows not exists) before putting file in it
                 */
                $location   = public_path().'/img/blog/';
                if(!is_dir($location))
                {
                    
                    mkdir($location, 0777, true);
                                    
                }
                
                
                /**
                *
                * Prepare names for file at different sizes
                * 
                */
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('blog_photo_input')->getClientOriginalExtension();
                $image_md  = date('Ymdhis').'_md.'.$request->file('blog_photo_input')->getClientOriginalExtension();
                $image_sm  = date('Ymdhis').'_sm.'.$request->file('blog_photo_input')->getClientOriginalExtension();
                $image_xs  = date('Ymdhis').'_xs.'.$request->file('blog_photo_input')->getClientOriginalExtension();
                
                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('blog_photo_input'));
                
                
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
                
                $request['blog_img'] = 'img/blog/'.$image_lg;
                
            }
                        
        }
        
        $save_success = Blog::create($request->all());


        Session::flash('success', 'The blog post was successfully save!');
                
        if($save_success){
        
            return redirect()->action('BlogController@index')->withErrors('Data has been stored successfully.');
        
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
        return view('admin.pages.blogs.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        
        return view('admin.pages.blogs.edit',compact('blog'));
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

        $blog = Blog::find($id);
        
            $this->validate($request, array(
                'blog_photo_input'  => 'required',
                'title'             => 'required|max:255',
                'body'              => 'required'
            ));
       
                   
                
        if($request->hasFile('blog_photo_input'))
        {
            if($request->file('blog_photo_input')->isValid())
            {

                /**
                *
                * At first, remove previous items, if they exist
                * 
                */
                if($blog->blog_photo_input)
                {
                    
                    if(\Storage::has($application->blog_photo_input))
                    {
                        
                        \Storage::delete($application->blog_photo_input);
                        
                    }
                    
                }

                $file  = date('Ymdhis').'.'.$request->file('blog_photo_input')->getClientOriginalExtension();
                
                if($request->file('blog_photo_input')->move(public_path().'/img/blog/', $file))
                {
                    
                    $request['blog_img'] = 'img/blog/'.$file;
                    
                }
                
            }
                        
        }
        
        
        $save_success = Blog::find($id)->update($request->all());
        

        Session::flash('success', 'The blog post was successfully Update !');
                
        if($save_success){
        
            return redirect()->action('BlogController@index')->withErrors('Data has been stored successfully.');
        
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
        $post = Blog::find($id);
        $post->delete();
        Session::flash('success', 'The post was successfully deleted.');
        return redirect()->action('PostController@index');
    }
}
