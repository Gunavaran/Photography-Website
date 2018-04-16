
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Photography</title>

    <!-- Bootstrap -->
    <link href="{{ url('vendorsTemplate/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="{{ url('vendorsTemplate/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- NProgress -->
    <link href="{{ url('vendorsTemplate/nprogress/nprogress.css') }}" rel="stylesheet" />
    {{--<!-- bootstrap-daterangepicker -->--}}
    {{--<link href="{{ url('vendorsTemplate/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" />--}}
    <!-- Custom Theme Style -->
    <link href="{{ url('build/css/custom.min.css') }}" rel="stylesheet" />
    <!-- Animate.css -->
    <link href="{{ url('vendorsTemplate/animate.css/animate.min.css') }}" rel="stylesheet" />
    <!-- Dropzone.js -->
    <link href="{{ url('vendorsTemplate/dropzone/dist/min/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ url('vendorsTemplate/dropzone-bootsnipp/bootsnipp.css') }}" rel="stylesheet" />

</head>
<body>
@yield('body')
<!-- ==============================================JavaScript===================================== -->

<!-- jQuery -->
<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/nprogress/nprogress.js') }}"></script>
<!-- Dropzone.js -->
<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/dropzone/dist/min/dropzone.min.js') }}"></script>
<!-- Chart.js -->
{{--<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/Chart.js/dist/Chart.min.js') }}"></script>--}}
<!-- jQuery Sparklines -->
<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/bs-confirmation-master/bootstrap-confirmation.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/popper.js/dist/popper.js') }}"></script>
<script>
    $('[data-toggle=confirmation]').confirmation();
</script>

{{--<!-- Flot -->--}}
{{--<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/Flot/jquery.flot.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/Flot/jquery.flot.pie.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/Flot/jquery.flot.time.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/Flot/jquery.flot.stack.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/Flot/jquery.flot.resize.js') }}"></script>--}}
{{--<!-- Flot plugins -->--}}
{{--<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/flot-spline/js/jquery.flot.spline.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/flot.curvedlines/curvedLines.js') }}"></script>--}}
{{--<!-- DateJS -->--}}
{{--<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/DateJS/build/date.js') }}"></script>--}}
<!-- bootstrap-daterangepicker -->
{{--<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/moment/min/moment.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/bootstrap-daterangepicker/daterangepicker.js') }}"></script>--}}

<!-- Custom Theme Scripts -->
<script type="text/javascript" src="{{ URL::asset('build/js/custom.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/dropzone-bootsnipp/preview.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendorsTemplate/dropzone-bootsnipp/bootsnipp.js') }}"></script>

</body>


</html>
