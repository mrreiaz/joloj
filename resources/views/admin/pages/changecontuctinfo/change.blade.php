@extends('admin.layouts.app2')

@section('title','Dashbord')

@section('css')
    

    <!--plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/intl-tel-input/css/intlTelInput.css') }}">
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/css/pages/form_layouts.css') }}" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
    <!-- end of page level styles -->

@endsection

@section('main')

        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar row">
                    <div class="col-xs-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-home"></i>
                            <a href="{{ action('ChangeFooterTextController@getFootertext') }}">Upade Footer Content</a> 
                        </h4>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        
                        
                            <div class="col-xs-12">
                                <div class="card m-t-35">
                                    <div class="card-header bg-white">
                                        Upade Footer Content
                                    </div>
                                    <div class="card-header bg-white">
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
                                    </div>
                                    <div class="card-block m-t-10">
                                        @if(count($contuct) > 0)
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <form class="form-horizontal" action="{{ action('ChangeFooterTextController@postFootertext') }}" method="post">
                                                    {{ csrf_field() }}
                                                    <fieldset>
                                                        <!-- Name input-->
                                                        <div class="form-group row">
                                                            <div class="col-lg-10 push-lg-1">
                                                                <label for="query1" class="form-control-label">
                                                                   <stront>Description</stront>
                                                                </label>
                                                                <div class="input-group float">
                                                                    <textarea class="form-control" rows="10" name="footer_text">{{ $contuct->footer_text }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row m-t-25">
                                                            <div class="col-lg-10 push-lg-1">
                                                                <label for="email5" class="form-control-label">
                                                                    Facebook
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control" name="facebook"  value="{{ $footer->facebook }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row m-t-25">
                                                            <div class="col-lg-10 push-lg-1">
                                                                <label for="email5" class="form-control-label">
                                                                    Twitter
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control" name="twitter" value="{{ $footer->twitter }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row m-t-25">
                                                            <div class="col-lg-10 push-lg-1">
                                                                <label for="email5" class="form-control-label">
                                                                    Google Plus
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-google-plus"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control" name="google_plus" value="{{ $footer->google }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row m-t-25">
                                                            <div class="col-lg-10 push-lg-1">
                                                                <label for="email5" class="form-control-label">
                                                                    Instagram
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-instagram"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control" name="instagram" value="{{ $footer->instagram }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row m-t-25">
                                                            <div class="col-lg-10 push-lg-1">
                                                                <label for="email5" class="form-control-label">
                                                                    YouTube
                                                                </label>
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                        <i class="fa fa-youtube"></i>
                                                                    </span>
                                                                    <input type="text" class="form-control" name="youtube" value="{{ $footer->youtube }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group row">
                                                            <div class="col-lg-10 push-lg-1">
                                                                <button type="submit" class="btn btn-lg btn-responsive layout_btn_prevent btn-primary">Submit</button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    
                                                </form>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- Basic Query Layout-->
                    </div>
                    
                </div>
                <!-- /.outer -->
            </div>
            <!-- /#content -->
        </div>

@endsection

@section('js')

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
    <!-- end of page level js -->

@endsection

