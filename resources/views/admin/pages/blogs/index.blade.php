@extends('admin.layouts.app2')

@section('title','Upader User Info')

@section('css')

        <!--plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/select2/css/select2.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/datatables/css/scroller.bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/datatables/css/colReorder.bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/datatables/css/dataTables.bootstrap.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/css/pages/dataTables.bootstrap.css') }}" />
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/css/pages/tables.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/vendors/Buttons/css/buttons.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('/public/admin/css/pages/buttons.css') }}" />
    <!--End of page level styles-->    
@endsection

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
                                    <a href="{{ action('DashboardController@getDashbord') }}">
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
                        <div class="row">
                            <div class="col-xs-12 data_tables">
                                <!-- BEGIN EXAMPLE4 TABLE PORTLET-->
                                <div class="card m-t-35">
                                    <div class="card-header bg-white">
                                        <i class="fa fa-table"></i> All Post
                                        <a class="btn btn-info btn-lg pull-right" href="{{ action('BlogController@create') }}">Create Naw</a>
                                    </div>
                                    <div class="card-block p-t-10">
                                        <div class=" m-t-25">
                                            <div id="sample_6_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                                
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover  dataTable no-footer" id="sample_6" role="grid" aria-describedby="sample_6_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th rowspan="1" colspan="1" style="width: 155.5px;">Title</th>
                                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 44.5px;">Featured Image</th>
                                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 44.5px;">Published Date</th>
                                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 44.5px;">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if( count($blogs)>0)
                                                                @foreach($blogs as $blog)
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1"> <strong> {{ $blog->title }} </strong> </td>
                                                                        <td> <img src="/public/{{ $blog->blog_img }}" class="img-thumbnail" alt="Cinque Terre" width="100px" height="100px"> </td>
                                                                        <td> {{ $blog->created_at }} </td>
                                                                        <td> 
                                                                        
                                                                        <div class="row">
                                                                           <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-xs-6 m-t-15">
                                                                               <a href="{{ action('BlogController@edit',$blog->id) }}" class="btn btn-info button-rectangle">Edit </a>
                                                                           </div>
                                                                           <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-xs-6 m-t-15">
                                                                               <button class="btn btn-danger  button-rectangle">Delete</button>
                                                                           </div>
                                                                       </div>
                                                                        
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END EXAMPLE4 TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>

@endsection

@section('js')
    <!--plugin scripts-->
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/select2/js/select2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/js/pluginjs/dataTables.tableTools.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/datatables/js/dataTables.colReorder.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/datatables/js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/datatables/js/dataTables.rowReorder.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/datatables/js/buttons.colVis.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/datatables/js/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/datatables/js/buttons.bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/datatables/js/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/admin/vendors/datatables/js/dataTables.scroller.min.js') }}"></script>
    <!-- end of plugin scripts -->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{ asset('/public/admin/js/pages/datatable.js') }}"></script>
    <!-- end of global scripts-->
    
@endsection