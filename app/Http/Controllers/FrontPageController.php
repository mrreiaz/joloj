<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Blog;
use App\Slide;
use App\Comment;
use App\Testimonial;
use App\Category;
use App\Product;
use App\User;
use Sentinel;
use Cart;

class FrontPageController extends Controller
{
    public function getHome()
    {

        $fish = Category::find(1);
        $food = Category::find(2);
        $accessories = Category::find(3);
        $popular_product = Category::find(4)->products;
        $fratured_products = Category::find(5)->products()->take(8)->get();
        $today_offers = Category::find(6)->products()->take(4)->get();
        $new_products = Product::orderBy('created_at', 'desc')->limit(6)->get();
        $top_sells = Category::find(7)->products()->take(4)->get();
        $sliders = Slide::orderBy('created_at', 'desc')->limit(5)->get();
        $testimonials = Testimonial::orderBy('created_at', 'desc')->limit(4)->get();
        $footer = DB::table('footers')->where('id', 1)->first();
        $blogs =  DB::table('blogs')->get();
        return view('frontpages.pages.home',compact(
            'footer',
            'blogs',
            'sliders',
            'fish',
            'food',
            'accessories',
            'new_products',
            'popular_product',
            'fratured_products',
            'today_offers',
            'top_sells',
            'testimonials'
            ));
    }
    
    
    public function getAbout()
    {
        $footer = DB::table('footers')->where('id', 1)->first();
        $teams = DB::table('our_teams')->get();
        
        $testimonials = Testimonial::get();
        
        return view('frontpages.pages.about',compact('footer','teams','testimonials'));
    }
    
    
    public function getContact()
    {
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.contact',compact('footer'));
    }
    
    public function getGallery()
    {
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.gallery',compact('footer'));
    }
        
    public function getAqueaFish()
    {
        
        $fishes = Category::find(1)->products()->orderBy('created_at', 'desc')->limit(8)->paginate(15);
        
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.aqueafish',compact('footer','fishes'));
    }
            
    public function getAqueaFood()
    {
        
        $foods = Category::find(2)->products()->orderBy('created_at', 'desc')->limit(8)->paginate(15);
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.aqueafood',compact('footer','foods'));
    }
    
                
    public function getAccessories()
    {
        $accessories = Category::find(3)->products()->orderBy('created_at', 'desc')->limit(8)->paginate(8);
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.aqueaAccessories',compact('footer','accessories'));
    }
      
                
    public function getPlants()
    {
        $plants = Category::find(8)->products()->orderBy('created_at', 'desc')->limit(8)->paginate(8);
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.aqueaplants',compact('footer','plants'));
    }
        
        
    public function getSingleProduct($id)
    {
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.single',compact('footer'));
    }
        
                
    public function getCustomerService()
    {
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.customerservice',compact('footer'));
    }
            
                
    public function getWarranty()
    {
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.warranty',compact('footer'));
    }      
    
    public function getOrdersAndReturns()
    {
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.OrdersAndReturns',compact('footer'));
    }
        
    public function getfaq()
    {
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.faq',compact('footer'));
    }
            
    public function getAllBlogs()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);
        
        
        $footer = DB::table('footers')->where('id', 1)->first();
        
        return view('frontpages.pages.all_blogs',compact('footer','blogs'));
    }
            
    public function getSingleBlog($id)
    {
       
        $blog   = Blog::find($id);
        
        
        $blogs  = Blog::orderBy('created_at', 'desc')->limit(3)->get();
        $footer = DB::table('footers')->where('id', 1)->first();
        
        $comments = Comment::get();
        
        return view('frontpages.pages.single_blog',compact('footer','blog','blogs','comments'));
    }
    
    
    public function getProduct($id)
    {

        $single_product  = Product::find($id);
        
        $new_products = Product::orderBy('created_at', 'desc')->limit(6)->get();  
                                                                                                                                                                                                                                                                                                                                            // 
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.single_product',compact('footer','new_products','single_product'));
    }
    
    public function getUserSignIn()
    {
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.signin',compact('footer'));
    }
    
    public function postUserSignIn(Request $request)
    {
    // return $request->all();
        try{
            $user =  $request->all();
            if(Sentinel::authenticateAndRemember($user))
                return redirect()->action('CheckOutController@getCheckOut');
            else
                return redirect()->back()->with(['error'=>'Wrong Cardensial']);

        }catch(ThrottlingException $e){
            $delay = $e->getDelay();
            return redirect()->back()->with(['error'=>"Your account is band for $delay sec. Please try later"]);
        }catch(NotActivatedException $e){
            return redirect()->back()->with(['error'=>"Your account is not Active, please Contact with Support"]);
        }

    }
    
    public function getUserSignUp()
    {
                                                                                                                                                                                                                                                                            // 
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.signup',compact('footer'));
    }
    
    public function postUserSignUp(Request $request)
    {
        // return $request->all();
        $user = Sentinel::registerAndActivate($request->all());
        return redirect()->action('FrontPageController@getUserSignIn')->with(['success' => 'Your registration is Complete. Please Login .']);

    }
    
    public function getModalData(Request $request)
    {
        return json_encode(Product::find($request->id));
    }
    
    
}

