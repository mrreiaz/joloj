<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Facades\Cart;

use App\User;


use Sentinel;

class Order extends Model
{
   
     protected $fillable = [
        'user_id',
        'isDelivered',
        'total',
    ];
    
      
   public function user()
   {
      return $this->belongsTo(User::class);
   }
   
   public function orderItems()
   {
      return $this->belongsToMany(Product::class)->withPivot('qty','total');
   }
   
   public static function createOrder()
   {
        $user=Sentinel::check();
        
        $order=$user->orders()->create([
            'total'=>Cart::total(),
            'isDelivered'=>0,
        ]);
        
        $cartItems=Cart::content();
        foreach ($cartItems as $cartItem){
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->real_price
            ]);
        }
        Cart::destroy();
   }
   
    
    
}
