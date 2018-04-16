<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    Document Title
    =============================================
    -->
    <title>Hari Creation Studio</title>
    <!--
    Favicons
    =============================================
    -->
    <link href="{{ url('assets/images/favicons/favicon-16x16.png') }}" rel="icon" type="image/png" sizes="16x16"/>
    <link href="{{ url('/manifest.json') }}" rel="manifest">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--
    Stylesheets
    =============================================

    -->

    <!-- Default stylesheets-->
    <link href="{{ url('assets/lib/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- Template specific stylesheets-->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700') }}" rel="stylesheet"/>
    <link href="{{ url('https://fonts.googleapis.com/css?family=Volkhov:400i') }}" rel="stylesheet"/>
    <link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800') }}" rel="stylesheet"/>
    <link href="{{ url('assets/lib/animate.css/animate.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/lib/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/lib/et-line-font/et-line-font.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/lib/flexslider/flexslider.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/lib/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/lib/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/lib/simple-text-rotator/simpletextrotator.css') }}" rel="stylesheet"/>
    <!-- Main stylesheet and color file-->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/css/colors/default.css') }}" rel="stylesheet"/>
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
<main>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span
                            class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="{{route('home')}}">Hari Creation Studio</a>
            </div>
            <div class="collapse navbar-collapse" id="custom-collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li><a  href="{{route('home')}}">Home</a>
                    </li>

                    <li><a  href="{{route('gallery')}}">Gallery</a>
                    </li>

                    <li><a  href="{{route('services')}}">Services</a>
                    </li>

                    <li><a  href="{{route('contact')}}">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    @yield('slider')
    <div class="main">
        @yield('content')
        <div class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Contact Details</h5>
                            <p>Tel No : &nbsp; {{DB::table('user')->value('contact_no')}}</p>
                            <p>Email : &nbsp; {{DB::table('user')->value('email')}}</p>
                            <p>Address : &nbsp; {{DB::table('user')->value('address')}}</p>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="widget">
                            <h5 class="widget-title font-alt">Our Services</h5>
                            <p class="fa fa-camera"> <span> &nbsp; </span>Photography</p>
                            <br>
                            <p class="fa fa-video-camera"> <span> &nbsp; </span>Videography</p>

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; 2018&nbsp;Apptimus Têch, All Rights Reserved</p>
                    </div>

                </div>
            </div>
        </footer>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </div>
</main>
<!--
JavaScripts
=============================================
-->
<script type="text/javascript" src="{{ URL::asset('assets/lib/jquery/dist/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/lib/wow/dist/wow.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/lib/isotope/dist/isotope.pkgd.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/lib/imagesloaded/imagesloaded.pkgd.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/lib/flexslider/jquery.flexslider.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/lib/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/lib/smoothscroll.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('assets/lib/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
<script type="text/javascript"
        src="{{ URL::asset('assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>
</html>