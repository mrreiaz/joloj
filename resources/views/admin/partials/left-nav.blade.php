
        <div id="left">
            <div class="media user-media bg-dark dker">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper bg-dark">
                    <a class="user-link" href="#">
                        <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                             src="{{ asset('/public/admin/img/admin.jpg') }}">
                        <p class="text-white user-info">Welcome Reiaz</p>
                    </a>
                    <div class="search_bar col-lg-12">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="search">
                            <span class="input-group-btn">
                                <button class="btn without_border" type="button"><span class="fa fa-search">
                                </span></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #menu -->
            <ul id="menu" class="bg-blue dker">
                <li class="active">
                    <a href="{{ action('DashboardController@getDashbord') }}">
                        <i class="fa fa-home"></i>
                        <span class="link-title">&nbsp;Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-sitemap"></i>
                        <span class="link-title">&nbsp; Menu's</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp; Orders's
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="{{ action('OrdersController@getOrders') }}">
                                        <i class="fa fa-angle-right"></i> &nbsp; All Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ action('OrdersController@getDeliveredOrders') }}">
                                        <i class="fa fa-angle-right"></i> &nbsp; Delivered Order
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ action('OrdersController@getPanddingOrders') }}">
                                        <i class="fa fa-angle-right"></i> &nbsp; Pandding Order
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp; Product's
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="{{ action('ProductController@index') }}">
                                        <i class="fa fa-angle-right"></i> &nbsp; All Product's
                                    </a>
                                </li>
                                
                                
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fa fa-angle-right"></i> &nbsp; Blogs Option's
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="{{ action('BlogController@index') }}">
                                        <i class="fa fa-angle-right"></i> &nbsp; All Blog's
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ action('BlogController@create') }}">
                                        <i class="fa fa-angle-right"></i> &nbsp; Blog Create
                                    </a>
                                </li>
                                <!-- comment -->
                                <!--<li>-->
                                <!--    <a href="{{ action('BlogController@create') }}">-->
                                <!--        <i class="fa fa-angle-right"></i> &nbsp; Blog's Comment Manage-->
                                <!--        <span class="fa arrow"></span>-->
                                <!--    </a>-->
                                    
                                <!--    <ul class="sub-menu sub-submenu">-->
                                <!--<li>-->
                                <!--    <a href="javascript:;">-->
                                <!--        <i class="fa fa-angle-right"></i> &nbsp; All Comment's-->
                                <!--    </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--    <a href="javascript:;">-->
                                <!--        <i class="fa fa-angle-right"></i> &nbsp; User's Comments-->
                                <!--    </a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--    <a href="javascript:;">-->
                                <!--        <i class="fa fa-angle-right"></i> &nbsp; Guest Comments-->
                                <!--    </a>-->
                                <!--</li>-->
                                      
                                <!--    </ul>-->
                                    
                                <!--</li>-->
                                <!-- comment -->
                                
                            </ul>
                        </li>
                        <li>
                            <a href="{{ action('ChangeFooterTextController@getFootertext') }}">
                                <i class="fa fa-angle-right"></i> &nbsp; Update Footer Content
                            </a>
                        </li>
                        <li>
                            <a href="{{ action('ChageConttactController@getContuct') }}">
                                <i class="fa fa-angle-right"></i> &nbsp; Change Contact Info
                            </a>
                        </li>
                        <li>
                            <a href="{{ action('TestimonialController@index') }}">
                                <i class="fa fa-angle-right"></i> &nbsp; Testimonial's
                            </a>
                        </li>
                        <li>
                            <a href="{{ action('SliderController@index') }}">
                                <i class="fa fa-angle-right"></i> &nbsp; Slide's
                            </a>
                        </li>
                        <li>
                            <a href="{{ action('OurTeamController@index') }}">
                                <i class="fa fa-angle-right"></i> &nbsp; Team Members
                            </a>
                        </li>
                    </ul>
                </li>
                <!--<li>-->
                <!--    <a href="javascript:;">-->
                <!--        <i class="fa fa-anchor"></i>-->
                <!--        <span class="link-title">&nbsp; Update Footer Content</span>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="javascript:;">-->
                <!--        <i class="fa fa-th-large"></i>-->
                <!--        <span class="link-title">&nbsp; Widgets</span>-->
                <!--        <span class="fa arrow"></span>-->
                <!--    </a>-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <a href="widgets.html">-->
                <!--                <i class="fa fa-angle-right"></i>-->
                <!--                &nbsp; Widgets1-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="widgets2.html">-->
                <!--                <i class="fa fa-angle-right"></i>-->
                <!--                &nbsp; Widgets2-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="javascript:;">-->
                <!--        <i class="fa fa-pencil"></i>-->
                <!--        <span class="link-title">&nbsp; Forms</span>-->
                <!--        <span class="fa arrow"></span>-->
                <!--    </a>-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <a href="form_elements.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Form Elements-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="form_layouts.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Form Layouts-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="form_validations.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Form Validations-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="form_editors.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Form Editors-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="radio_checkbox.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Radio and Checkbox-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="form_wizards.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Wizards-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="datetime_picker.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Date Time Picker-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="ratings.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Ratings-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="#">-->
                <!--        <i class="fa fa-th"></i>-->
                <!--        <span class="link-title">&nbsp; Tables</span>-->
                <!--        <span class="fa arrow"></span>-->
                <!--    </a>-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <a href="simple_tables.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Simple Tables-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="datatables.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Data Tables-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="advanced_tables.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Advanced Tables-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="#">-->
                <!--        <i class="fa fa-bar-chart"></i>-->
                <!--        <span class="link-title">&nbsp; Charts</span>-->
                <!--        <span class="fa arrow"></span>-->
                <!--    </a>-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <a href="charts.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Flot Charts-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="advanced_charts.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Advanced Charts-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="chartist.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Chartist-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="rickshaw.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Rickshaw Charts-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="#">-->
                <!--        <i class="fa fa-user"></i>-->
                <!--        <span class="link-title">&nbsp; Users</span>-->
                <!--        <span class="fa arrow"></span>-->
                <!--    </a>-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <a href="users.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; User Grid-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="add_user.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Add User-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="view_user.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; User Profile-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="delete_user.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Delete User-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="calendar.html">-->
                <!--        <i class="fa fa-calendar"></i>-->
                <!--        <span class="link-title">&nbsp; Calendar</span>-->
                <!--        <span class="tag tag-pill tag-primary float-xs-right calendar_tag">7</span>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="gallery.html">-->
                <!--        <i class="fa fa-picture-o"> </i> &nbsp; Gallery-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="#">-->
                <!--        <i class="fa fa-envelope-o"></i>-->
                <!--        <span class="link-title">&nbsp; Email</span>-->
                <!--        <span class="fa arrow"></span>-->
                <!--    </a>-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <a href="mail_compose.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Compose-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="mail_inbox.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Inbox-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="mail_view.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; View-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="mail_sent.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Sent-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="mail_spam.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Spam-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="mail_draft.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Draft-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="mail_trash.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Trash-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="#">-->
                <!--        <i class="fa fa-map-marker"></i>-->
                <!--        <span class="link-title">&nbsp; Maps</span>-->
                <!--        <span class="fa arrow"></span>-->
                <!--    </a>-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <a href="maps.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Google Maps-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="jqvmaps.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Vector Maps-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="javascript:;">-->
                <!--        <i class="fa fa-file"></i>-->
                <!--        <span class="link-title">&nbsp; Pages</span>-->
                <!--        <span class="fa arrow"></span>-->
                <!--    </a>-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <a href="404.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; 404-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="500.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; 500-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="login.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Login-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="register.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Register-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="lockscreen.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Lock Screen-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="invoice.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Invoice-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="blank.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Blank Page-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!--<li class="">-->
                <!--    <a href="javascript:;">-->
                <!--        <i class="fa fa-th"></i>-->
                <!--        <span class="link-title">&nbsp; Layouts</span>-->
                <!--        <span class="fa arrow"></span>-->
                <!--    </a>-->
                <!--    <ul>-->
                <!--        <li>-->
                <!--            <a href="boxed.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Boxed Layout-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="fixed-header-boxed.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Boxed &amp; Fixed Header-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="fixed-header-menu.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Fixed Header &amp; Menu-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="fixed-header.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Fixed Header-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="fixed-menu-boxed.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Boxed &amp; Fixed Menu-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="fixed-menu.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; Fixed Menu-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="no-header.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; No Header-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="no-left-sidebar.html">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp; No Left Sidebar-->
                <!--            </a>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="javascript:;">-->
                <!--        <i class="fa fa-sitemap"></i>-->
                <!--        <span class="link-title">&nbsp; Multi Level Menu</span>-->
                <!--        <span class="fa arrow"></span>-->
                <!--    </a>-->
                <!--    <ul class="sub-menu">-->
                <!--        <li>-->
                <!--            <a href="javascript:;">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp;Level 1-->
                <!--                <span class="fa arrow"></span>-->
                <!--            </a>-->
                <!--            <ul class="sub-menu sub-submenu">-->
                <!--                <li>-->
                <!--                    <a href="javascript:;">-->
                <!--                        <i class="fa fa-angle-right"></i> &nbsp;Level 2-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="javascript:;">-->
                <!--                        <i class="fa fa-angle-right"></i> &nbsp;Level 2-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="javascript:;">-->
                <!--                        <i class="fa fa-angle-right"></i> &nbsp;Level 2-->
                <!--                        <span class="fa arrow"></span>-->
                <!--                    </a>-->
                <!--                    <ul class="sub-menu sub-submenu">-->
                <!--                        <li>-->
                <!--                            <a href="javascript:;">-->
                <!--                                <i class="fa fa-angle-right"></i> &nbsp;Level 3-->
                <!--                            </a>-->
                <!--                        </li>-->
                <!--                        <li>-->
                <!--                            <a href="javascript:;">-->
                <!--                                <i class="fa fa-angle-right"></i> &nbsp;Level 3-->
                <!--                            </a>-->
                <!--                        </li>-->
                <!--                        <li>-->
                <!--                            <a href="javascript:;">-->
                <!--                                <i class="fa fa-angle-right"></i> &nbsp;Level 3-->
                <!--                                <span class="fa arrow"></span>-->
                <!--                            </a>-->
                <!--                            <ul class="sub-menu sub-submenu">-->
                <!--                                <li>-->
                <!--                                    <a href="javascript:;">-->
                <!--                                        <i class="fa fa-angle-right"></i> &nbsp;Level 4-->
                <!--                                    </a>-->
                <!--                                </li>-->
                <!--                                <li>-->
                <!--                                    <a href="javascript:;">-->
                <!--                                        <i class="fa fa-angle-right"></i> &nbsp;Level 4-->
                <!--                                    </a>-->
                <!--                                </li>-->
                <!--                                <li>-->
                <!--                                    <a href="javascript:;">-->
                <!--                                        <i class="fa fa-angle-right"></i> &nbsp;Level 4-->
                <!--                                        <span class="fa arrow"></span>-->
                <!--                                    </a>-->
                <!--                                    <ul class="sub-menu sub-submenu">-->
                <!--                                        <li>-->
                <!--                                            <a href="javascript:;">-->
                <!--                                                <i class="fa fa-angle-right"></i> &nbsp;Level 5-->
                <!--                                            </a>-->
                <!--                                        </li>-->
                <!--                                        <li>-->
                <!--                                            <a href="javascript:;">-->
                <!--                                                <i class="fa fa-angle-right"></i> &nbsp;Level 5-->
                <!--                                            </a>-->
                <!--                                        </li>-->
                <!--                                        <li>-->
                <!--                                            <a href="javascript:;">-->
                <!--                                                <i class="fa fa-angle-right"></i> &nbsp;Level 5-->
                <!--                                            </a>-->
                <!--                                        </li>-->
                <!--                                    </ul>-->
                <!--                                </li>-->
                <!--                            </ul>-->
                <!--                        </li>-->
                <!--                        <li>-->
                <!--                            <a href="javascript:;">-->
                <!--                                <i class="fa fa-angle-right"></i> &nbsp;Level 4-->
                <!--                            </a>-->
                <!--                        </li>-->
                <!--                    </ul>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="javascript:;">-->
                <!--                        <i class="fa fa-angle-right"></i> &nbsp;Level 2-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--            </ul>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="javascript:;">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp;Level 1-->
                <!--            </a>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--            <a href="javascript:;">-->
                <!--                <i class="fa fa-angle-right"></i> &nbsp;Level 1-->
                <!--                <span class="fa arrow"></span>-->
                <!--            </a>-->
                <!--            <ul class="sub-menu sub-submenu">-->
                <!--                <li>-->
                <!--                    <a href="javascript:;">-->
                <!--                        <i class="fa fa-angle-right"></i> &nbsp;Level 2-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="javascript:;">-->
                <!--                        <i class="fa fa-angle-right"></i> &nbsp;Level 2-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--                <li>-->
                <!--                    <a href="javascript:;">-->
                <!--                        <i class="fa fa-angle-right"></i> &nbsp;Level 2-->
                <!--                    </a>-->
                <!--                </li>-->
                <!--            </ul>-->
                <!--        </li>-->
                <!--    </ul>-->
                <!--</li>-->
            </ul>
            <!-- /#menu -->
        </div>