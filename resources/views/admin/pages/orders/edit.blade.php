@extends('admin.layouts.app2')

@section('title','Upader User Info')

@section('css')
    <!-- plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <!--end of page level css-->
    <style>
        .select2-container--default .select2-selection--multiple .select2-selection__rendered li {
            list-style: none;
            text-transform: capitalize;
        }
    </style>
@endsection

@section('main')

            <div id="content" class="bg-container">
                <header class="head">
                    <div class="main-bar row">
                        <div class="col-lg-6">
                            <h4 class="nav_top_align skin_txt">
                            <i class="fa fa-pencil"></i>
                            Add New Product
                        </h4>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                                <li class="breadcrumb-item">
                                    <a href="index-2.html">
                                        <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ action('ProductController@create') }}">Add Product`s</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-block m-t-25">
                                <div>
                                    <h4> Edit Product</h4>
                                </div>
                              @if(count($product) > 0)
                               {!! Form::open( ['method'=>'patch', 'class' =>'form-horizontal login_validator bv-form', 'id' => 'tryitForm', 'url'=> action('ProductController@update', $product->id), 'enctype'=>'multipart/form-data' ]) !!}
                                   
                                   {{ csrf_field() }}
                                    <button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                    
                                     @if (Session::has('success'))
                                    	<div class="alert alert-success" role="alert">
                                    		<strong>Success:</strong> {{ Session::get('success') }}
                                    	</div>
                                    @endif
                                    
                                    @if (count($errors) > 0)
                                    	<div class="alert alert-danger" role="alert">
                                    		<strong>Errors:</strong>
                                    		<ul>
                                    		@foreach ($errors->all() as $error)
                                    			<li>{{ $error }}</li>
                                    		@endforeach  
                                    		</ul>
                                    	</div>
                                    @endif
                                   
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group row m-t-15">
                                                <div class="col-xs-12 col-lg-3 text-xs-center text-lg-right">
                                                    <label class="form-control-label"> <strong> Product Pic </strong> </label>
                                                </div>
                                                
                                                <div class="col-xs-12 col-lg-6 text-xs-center text-lg-left">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new img-thumbnail text-xs-center">
                                                            <img src="/public/{{ $product->product_photo }}" data-src="/public/{{ $product->product_photo }}" alt="{{ $product->name }}"></div>
                                                        <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                        <div class="m-t-20 text-xs-center">
                                                            <span class="btn btn-primary btn-file">
                                                                <span class="fileinput-new1">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="product_photo_input">
                                                            </span>
                                                            <a href="#" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row m-t-15">
                                                
                                                <div class="col-xs-12 col-lg-3 text-xs-center text-lg-right">
                                                    <label class="form-control-label"> <strong> Brand Pic </strong> </label>
                                                </div>
                                                
                                                <div class="col-xs-12 col-lg-6 text-xs-center text-lg-left">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new img-thumbnail text-xs-center">
                                                            <img src="/public/{{ $product->brand_photo }}" data-src="/public/{{ $product->brand_photo }}" alt="not found"></div>
                                                        <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                        <div class="m-t-20 text-xs-center">
                                                            <span class="btn btn-primary btn-file">
                                                                <span class="fileinput-new1">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="brand_photo_input">
                                                            </span>
                                                            <a href="#" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront>Product Name </stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                                        <input type="text" value="{{ $product->name }}" name="name" id="u-name" class="form-control" data-bv-field="title">
                                                    </div>
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                            </div>
                                            
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront>Brand Name</stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                                        <input type="text" value="{{ $product->brand_name }}" name="brand_name" id="u-name" class="form-control" data-bv-field="title">
                                                    </div>
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                            </div>
                                            
                                            <div class="form-group row m-t-25">
                                                
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront> Product Short Title </stront> </label>
                                                </div>
                                                
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                                        <input type="text" value="{{ $product->short_title }}" name="short_title" id="u-name" class="form-control" data-bv-field="title">
                                                    </div>
                                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront> Product Long Title </stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                                        <input type="text" value="{{ $product->long_title }}" name="long_title" id="u-name" class="form-control" data-bv-field="title">
                                                    </div>
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                            </div>
                                            
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront> Short Description </stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <textarea class="form-control" rows="10" name="short_description"> {{ $product->short_description }} </textarea>
                                                    </div>
                                                     <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront>Long escription</stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <textarea class="form-control" rows="15" name="long_description"> {{ $product->long_description }}  </textarea>
                                                    </div>
                                                     <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                            </div>
                                            
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront> Product Real Price </stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                                        <input type="number" value="{{ $product->real_price }}" name="real_price" id="u-name" class="form-control" data-bv-field="title">
                                                    </div>
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                            </div>
                                            
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront> Product Discount price </stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                                        <input type="number" value="{{ $product->discunt_price }}" name="discunt_price" id="u-name" class="form-control" data-bv-field="title">
                                                    </div>
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                            </div>
                                            
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront> Product Discount price By %</stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                                        <input type="number" value="{{ $product->discunt_price_by_parsents }}" name="discunt_price_by_parsents" id="u-name" class="form-control" data-bv-field="title">
                                                    </div>
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                            </div>
                                            
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront> Total Quantity </stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                                        <input type="number" value="{{ $product->quantity }}" name="quantity" id="u-name" class="form-control" data-bv-field="title">
                                                    </div>
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                            </div>
                                            
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront> Facebook Link </stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                                        <input type="text" value="{{ $product->facebook_links }}" name="facebook_links" id="u-name" class="form-control" data-bv-field="title">
                                                    </div>
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                            </div>
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront> Instagram Links </stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                                        <input type="text" value="{{ $product->instagram_links }}" name="instagram_links" id="u-name" class="form-control" data-bv-field="title">
                                                    </div>
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                            </div>
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront> Youtube Links </stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                                        <input type="text" value="{{ $product->youtube_links }}" name="youtube_links" id="u-name" class="form-control" data-bv-field="title">
                                                    </div>
                                                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                            </div>
                                            
                                            
                                            <div class="form-group row m-t-25">
                                                <div class="col-xs-12 col-lg-3 text-lg-right">
                                                    <label for="u-name" class="form-control-label"> <stront> Product Show By Category </stront> </label>
                                                </div>
                                                <div class="col-xs-12 col-xl-8 col-lg-8">
                                    				
                                    				{!! Form::select('categories[]', \App\Category::pluck('name', 'id'), $product->categories()->pluck('categories.id')->toArray(), ['class'=> 'form-control text-capitalize select2-multi', 'multiple'=> 'multiple']) !!}
                                    				
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group row">
                                                <div class="col-xs-12 col-lg-9 push-lg-3">
                                                    <button class="btn btn-primary btn-lg" id="submit2" type="submit">
                                                        Update
                                                    </button>
                                                    <input type="reset" class="btn btn-warning btn-lg" value="Reset" id="clear">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>

@endsection

@section('js')


    <!-- plugin scripts-->
    <script type="text/javascript" src="{{ asset('/public/admin/js/pluginjs/jasny-bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/holderjs/js/holder.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <script type="text/javascript">
        $('select').select2();
    </script>
@endsection

