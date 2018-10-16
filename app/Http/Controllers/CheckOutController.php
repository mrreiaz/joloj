<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Order;
use DB;
use Cart;
use Sentinel;
use Session;
class CheckOutController extends Controller
{
    public function getCheckOut()
    {                                  
        // return Sentinel::check();
        $cartItems=Cart::content();
        
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.checkout',compact('cartItems','footer'));
    }
    
    public function getGuestCheckOut()
    {                                  
        $cartItems=Cart::content();
        $footer = DB::table('footers')->where('id', 1)->first();
        return view('frontpages.pages.guest_checkout',compact('cartItems','footer'));
    }
    
    public function postOrders(Request $request)
    {        
        // return $request->all();
        
        $this->validate($request, array(
            'user_id'      =>  'required',
            'isDelivered'     =>  'required',
            'first_name'     =>  'required',
            'last_name'     =>  'required',
            'company'     =>  'required',
            'email'     =>  'required',
            'address'     =>  'required',
            'city'     =>  'required',
            'postal_code'     =>  'required',
            'number'     =>  'required',
            'radios'     =>  'required',
            'cash_on_delivery'     =>  'required',
            'total'   =>  'required'
            ));
            
            $order = new Order();
            $order->user_id = $request->user_id;
            $order->isDelivered = $request->isDelivered;
            $order->first_name = $request->first_name;
            $order->last_name = $request->last_name;
            $order->company = $request->company;
            $order->email = $request->email;
            $order->address = $request->address;
            $order->city = $request->city;
            $order->postal_code = $request->postal_code;
            $order->number = $request->number;
            $order->radios = $request->radios;
            $order->cash_on_delivery = $request->cash_on_delivery;
            $order->total = $request->total;
            $order->save();
        
                    
            $cartItems=Cart::content();
            
            foreach ($cartItems as $cartItem){
                $order->orderItems()->attach($cartItem->id,[
                    'qty'=>$cartItem->qty,
                    'total'=>$cartItem->qty*$cartItem->real_price
                ]);
            }
            Cart::destroy();
        
        Session::flash('success', 'You are Successfully Shopping From Joloj. Joloj Team Contact With You Very Soon.');
        return redirect()->action('FrontPageController@getHome');
    }
    
}
