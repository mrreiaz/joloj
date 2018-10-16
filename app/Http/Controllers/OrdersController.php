<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Order;
use Session;
use DB;
class OrdersController extends Controller
{
    public function getOrders()
    {

        $orders = Order::orderBy('created_at','DESC')->get();
        // return $orders;
        return view('admin.pages.orders.index',compact('orders'));
    }
}
