
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid">
                <a class="navbar-brand text-xs-center" href="{{ action('DashboardController@getDashbord') }}">
                    <h4 class="text-white"><img src="{{ asset('/public/admin/img/logow.png') }}" class="admin_img" alt="logo"> ADMIN</h4>
                </a>
                <div class="menu">
                        <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                        </span>
                </div>

                <!-- Toggle Button -->
                <div class="text-xs-right xs_menu">
                    <button class="navbar-toggler hidden-xs-up" type="button" data-toggle="collapse" data-target="#nav-content">
                        ☰
                    </button>
                </div>
                
                <!-- Nav Content -->
                
                <div class="topnav dropdown-menu-right float-xs-right">
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="{{ asset('/public/admin/img/admin.jpg') }}" class="admin_img2 rounded-circle avatar-img" alt="avatar">
                                <strong>{{ \Sentinel::check()->username }}</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <?php 
                                    $role = Sentinel::check()->id;
                                    $rolename = Sentinel::findRoleById($role);
                                ?>
                                <a class="dropdown-item title" href="#">{{ $rolename->slug }}</a>
                                <a class="dropdown-item" href="{{ action('UserProfileController@getUserProfile') }}"><i class="fa fa-cogs"></i> Account Settings</a>
                                <a class="dropdown-item" href="{{ action('ChangePasswordController@getAutoActiveUserChangePassword') }}">  <i class="fa fa-key"></i> Change Password </a>
                                <a class="dropdown-item" href="{{ action('LogoutController@getLogout') }}"><i class="fa fa-sign-out"></i> Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- /.container-fluid --> </nav>
        <!-- /.navbar -->
        <!-- /.head --> </div>