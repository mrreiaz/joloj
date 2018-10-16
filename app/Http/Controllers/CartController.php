<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;

use App\Product;
use DB;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                                                                                                                                                                                                                                                               // 
        $footer = DB::table('footers')->where('id', 1)->first();
        
        $cartItems=Cart::content();
        // return $cartItems;
        return view('frontpages.pages.all_items',compact('cartItems','footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
      public function addItem($id){
            $product=Product::find($id);
            Cart::add($id,$product->name,1,$product->real_price);
            return redirect()->back();
        }     
        

      public function addItemFromSinglePage(Request $request,$rowId)
        {
            $product=Product::find($id);
            Cart::add($id,$product->name,1,$product->real_price);
            return redirect()->back();
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * 
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
        $product=Product::find($id);
        // return $product;
        Cart::add($id,$product->name,1,$product->real_price);
        
        return redirect()->action('CartController@index');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateItem(Request $request,$rowId)
    {
     
        // return $request->all();
        
        Cart::update($rowId, $request->qty); // Will update the quantity
        return redirect()->back();
    }

    public function itemDelete(Request $request,$rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }

    public function cartDestroy()
    {
        Cart::destroy();
        return redirect()->back();
    }
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
