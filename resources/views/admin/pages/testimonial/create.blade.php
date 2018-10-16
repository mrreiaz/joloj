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
                Add Testimonial
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
                        <h4> Testimonial </h4>
                    </div>
                    <form class="form-horizontal login_validator bv-form" id="tryitForm" action="{{ action('TestimonialController@store') }}" method="POST" enctype="multipart/form-data">
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
                                        <label class="form-control-label"> <strong> Testimonial Pic </strong> </label>
                                    </div>
                                    
                                    <div class="col-xs-12 col-lg-6 text-xs-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-xs-center">
                                                <img src="{{ asset('public/front/animated/2.gif') }}" data-src="{{ asset('public/front/animated/2.gif') }}" alt="not found"></div>
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
                                        <label for="u-name" class="form-control-label"> <stront>Person Name</stront> </label>
                                    </div>
                                    <div class="col-xs-12 col-xl-8 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                            <input type="text" value="{{ old('title') }}" name="name" id="u-name" class="form-control" data-bv-field="title">
                                        </div>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                </div>
                                
                                <div class="form-group row m-t-25">
                                    <div class="col-xs-12 col-lg-3 text-lg-right">
                                        <label for="u-name" class="form-control-label"> <stront>Person Title</stront> </label>
                                    </div>
                                    <div class="col-xs-12 col-xl-8 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                            <input type="text" value="{{ old('name_title') }}" name="name_title" id="u-name" class="form-control" data-bv-field="title">
                                        </div>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                </div>
                                
                                
                                <div class="form-group row m-t-25">
                                    <div class="col-xs-12 col-lg-3 text-lg-right">
                                        <label for="u-name" class="form-control-label"> <stront>Inf Source</stront> </label>
                                    </div>
                                    <div class="col-xs-12 col-xl-8 col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"> <i class="fa fa-user text-primary"></i></span>
                                            <input type="text" value="{{ old('source') }}" name="source" id="u-name" class="form-control" data-bv-field="title">
                                        </div>
                                    <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                </div>
                                
                                <div class="form-group row m-t-25">
                                    <div class="col-xs-12 col-lg-3 text-lg-right">
                                        <label for="u-name" class="form-control-label"> <stront>Testimonial Body</stront> </label>
                                    </div>
                                    <div class="col-xs-12 col-xl-8 col-lg-8">
                                        <div class="input-group">
                                            <textarea class="form-control" rows="15" name="body"> {{ old('body') }} </textarea>
                                        </div>
                                         <small class="help-block" data-bv-validator="notEmpty" data-bv-for="firstName" data-bv-result="NOT_VALIDATED" style="display: none;">Enter the title</small></div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-xs-12 col-lg-9 push-lg-3">
                                        <button class="btn btn-primary btn-lg" id="submit2" type="submit">
                                            Save
                                        </button>
                                        <input type="reset" class="btn btn-warning btn-lg" value="Reset" id="clear">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
      
    //   tinymce.init({ selector:'textarea' });
      
        tinymce.init({
          selector: "textarea",
          height: 500,
          plugins: [
            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
          ],
        
          toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
          toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
          toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",
        
          menubar: false,
          toolbar_items_size: 'small',
        
          style_formats: [{
            title: 'Bold text',
            inline: 'b'
          }, {
            title: 'Red text',
            inline: 'span',
            styles: {
              color: '#ff0000'
            }
          }, {
            title: 'Red header',
            block: 'h1',
            styles: {
              color: '#ff0000'
            }
          }, {
            title: 'Example 1',
            inline: 'span',
            classes: 'example1'
          }, {
            title: 'Example 2',
            inline: 'span',
            classes: 'example2'
          }, {
            title: 'Table styles'
          }, {
            title: 'Table row 1',
            selector: 'tr',
            classes: 'tablerow1'
          }],
        
          templates: [{
            title: 'Test template 1',
            content: 'Test 1'
          }, {
            title: 'Test template 2',
            content: 'Test 2'
          }],
          content_css: [
            '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
            '//www.tinymce.com/css/codepen.min.css'
          ]
        });
        
      </script>
      
@endsection

