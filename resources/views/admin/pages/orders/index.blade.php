@extends('admin.layouts.app2')

@section('title','Upader TemMember  Info')



@section('main')

<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <h4 class="nav_top_align">
                <i class="fa fa-th"></i>
                Data Tables
            </h4>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="{{ URL::to('/') }}">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Tables</a>
                    </li>
                    <li class="breadcrumb-item active">Data Tables</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
                    <div class="inner bg-light lter bg-container">
                        <div class="card">
                            <div class="card-block m-t-35">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <strong>Order Summary</strong>
                                            </div>
                                            <div class="card-block m-t-35">
                                                <div class="table-responsive">
                                            
                                            @foreach($orders as $order)
                                            
                                                    <table class="table table-sm">
                                                        <thead>
                                                        <tr>
                                                            <td>
                                                                <strong>Customar  Name</strong>
                                                            </td>
                                                            <td>
                                                                <strong>Customar Address</strong>
                                                            </td>
                                                            <td>
                                                                <strong>Phone Number</strong>
                                                            </td>
                                                            <td>
                                                                <strong>Customar Email</strong>
                                                            </td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                                <tr>
                                                                    <td>{{$order->user->first_name}} {{ $order->user->last_name }}</td>
                                                                    <td>{{ $order->user->address}}</td>
                                                                    <td>{{ $order->user->number}}</td>
                                                                    <td>{{ $order->user->email}}</td>
                                                                </tr>
                                                        </tbody>
                                                    </table>
                                                    
                                                    
                                                    <table class="table table-sm">
                                                        <thead>
                                                        <tr>
                                                            <td>
                                                                <strong>Item Name</strong>
                                                            </td>
                                                            <td>
                                                                <strong>Price</strong>
                                                            </td>
                                                            <td>
                                                                <strong>Item Quantity</strong>
                                                            </td>
                                                            <td>
                                                                <strong>Total</strong>
                                                            </td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>    
                                                        @foreach($order->orderItems as $items)
                                                        <tr>
                                                            <td>{{$items->name}}</td>
                                                            <td>৳ {{$items->real_price}}</td>
                                                            <td>{{$items->pivot->qty}}</td>
                                                            
                                                            <?php 
                                                            
                                                                $price = $items->real_price;
                                                                $price_qty = $items->pivot->qty;
                                                                
                                                                $totlal_price = $price * $price_qty;
                                                                
                                                            
                                                            ?>
                                                            <td> {{$items->real_price}} * {{$items->pivot->qty}} = {{ $totlal_price }}</td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                        <tr>
                                                            <td class="emptyrow"></td>
                                                            <td class="emptyrow"></td>
                                                            <td class="emptyrow text-center"></td>
                                                            <td class="emptyrow text-right">
                                                                <strong>Shipping &nbsp;</strong>
                                                            </td>
                                                            <td class="highrow text-right">
                                                                <strong>৳ 100</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="highrow"></td>
                                                            <td class="highrow"></td>
                                                            <td class="highrow text-center"></td>
                                                            <td class="highrow text-right">
                                                                <strong>Sub Total &nbsp;</strong>
                                                            </td>
                                                            <td class="highrow text-right">
                                                                <strong>৳ {{ $totlal_price }}</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="highrow"></td>
                                                            <td class="highrow"></td>
                                                            <td class="highrow text-center"></td>
                                                            <td class="highrow text-right">
                                                                <strong>Total &nbsp;</strong>
                                                            </td>
                                                            <td class="highrow text-right">
                                                                <strong>৳ {{ $order->total }}</strong>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                        
                                                    <span class="pull-sm-right">
                                                        <a style="color:#fff;" class="btn button-alignment btn-info m-t-15" data-toggle="button" onclick="javascript:window.print();">
                                                            Print
                                                        </a>
                                                        <button type="button" class="btn button-alignment btn-warning m-t-15" data-toggle="button">
                                                            Cancel
                                                        </button>
                                                    </span>
                                                    <br>
                                                    <br>
                                                    <br>
                                            @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               
                                
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
</div>

@endsection

