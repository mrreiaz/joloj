@extends('admin.layouts.app2')

@section('title','Upader User Info')

@section('css')
    <!-- plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" />
    <!--end of page level css-->
@endsection

@section('main')

<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar row">
            <div class="col-lg-6">
                <h4 class="nav_top_align skin_txt">
                <i class="fa fa-pencil"></i>
                Update Testimonial
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
                        <a href="#">Users</a>
                    </li>
                    <li class="breadcrumb-item active">Testimonial</li>
                </ol>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                <div class="card-block m-t-25">
                    <div>
                        <h4>Update Testimonial </h4>
                    </div>
                    
                  
                   {!! Form::open( ['method'=>'patch', 'class' =>'form-horizontal bv-form', 'id' => 'tryitForm', 'url'=> action('OurTeamController@update', $team->id), 'enctype'=>'multipart/form-data' ]) !!}

                       
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
                       @if( count($team) > 0 )
                       
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group row m-t-15">
                                    <div class="col-xs-12 col-lg-3 text-xs-center text-lg-right">
                                        <label class="form-control-label"> <strong> Team member Pic </strong> </label>
                                    </div>
                                    
                                    <div class="col-xs-12 col-lg-6 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-xs-center">
                                                <img src="/public/{{ $team->img }}" data-src="/public/{{ $team->img }}" alt="not found"></div>
                                            <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                            <div class="m-t-20 text-xs-center">
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new1">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="testimonial_photo_input">
                                                </span>
                                                <a href="#" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row m-t-25">
                                    <div class="col-xs-12 col-lg-3 text-lg-right">
                                        <label for="u-name" class="form-control-label"> <stront>Team Member Name</stront> </label>
                                    </div>
                                    <div class="col-xs-12 col-xl-8 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                            <input type="text" value="{{ $team->name }}" name="name" id="u-name" class="form-control" data-bv-field="title">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row m-t-25">
                                    <div class="col-xs-12 col-lg-3 text-lg-right">
                                        <label for="p-title" class="form-control-label"> <stront>Person Title</stront> </label>
                                    </div>
                                    <div class="col-xs-12 col-xl-8 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                            <input type="text" value="{{ $team->designations }}" name="designations" id="u-name" class="form-control" data-bv-field="title">
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="form-group row m-t-25">
                                    <div class="col-xs-12 col-lg-3 text-lg-right">
                                        <label for="description" class="form-control-label"> <stront>Description</stront> </label>
                                    </div>
                                    <div class="col-xs-12 col-xl-8 col-lg-8">
                                        <div class="input-group">
                                            <textarea class="form-control" rows="15" name="body"> {{ $team->body }} </textarea>
                                        </div>
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
            
                        @endif
                        
                    {!! Form::close() !!}
                    
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
    
      <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
      
      <script>
          
          tinymce.init({
              selector: 'textarea',
              height: 500,
              theme: 'modern',
              plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
              ],
              toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
              toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
              image_advtab: true,
              templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
              ],
              content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
              ]
             });
          
      </script>
      
      
@endsection

