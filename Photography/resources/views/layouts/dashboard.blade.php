@extends('layouts.adminLayout')
@section('body')

        <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="{{route('dashboard')}}" class="site_title"><i class="fa fa-camera"></i> <span>Hari Studio</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            {{--The profile picture and user anme should be added--}}

                            {{--<div class="profile_pic">--}}
                            {{--<img src="images/img.jpg" alt="..." class="img-circle profile_img">--}}
                            {{--</div>--}}
                            {{--<div class="profile_info">--}}
                            {{--<span>Welcome,</span>--}}
                            {{--<h2>John Doe</h2>--}}
                            {{--</div>--}}
                        </div>
                        <!-- /menu profile quick info -->

                        <br/>

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">

                                    {{--this tab deals with details of the vendor who is the user here--}}
                                    <li><a><i class="fa fa-home"></i> Account <span
                                                    class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{route('myDetails')}}">My Details</a></li>
                                            <li><a href="{{route('changePasswordForm')}}">Change Password</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-photo"></i> Photos <span
                                                    class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="{{route('viewPhotos')}}">Gallery</a></li>
                                            <li><a href="{{route('uploadPhotos_selectCategory')}}">Upload Photos</a>
                                            </li>
                                            <li><a href="{{route('showCategories')}}">Categories</a></li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                       aria-expanded="false">
                                        <img src="" alt=""> {{Session::get('username')}}
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="{{route('myDetails')}}">My Profile</a></li>

                                        <li><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    @yield('content')
                    @if(!empty($message))
                        <p class="alert alert-danger"> {{$message}}</p>
                    @endif

                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        ©Apptimus Têch 2018. All Rights Reserved
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>
        </body>

@endsection
