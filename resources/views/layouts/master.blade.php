{{--this is the format of all pages in this project. common stylesheets--}}
{{--css and js are loaded using this--}}

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>


    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}">

    <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic')}}"
          rel='stylesheet' type='text/css'>
    {{--added--}}

    <link rel="stylesheet" type="text/css" href="{{URL::asset('dist/sweetalert.css')}}">
    <link rel="stylesheet" href="{{URL::asset('image-picker/image-picker.css')}}">


    <!-- Animate.css -->
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{URL::asset('css/icomoon.css')}}">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{URL::asset('css/simple-line-icons.css')}}">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-datetimepicker.min.css')}}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{URL::asset('css/flexslider.css')}}">


    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">



    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">


    <!-- Modernizr JS -->
    <script src="{{URL::asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{URL::asset('js/respond.min.js')}}"></script>
    <![endif]-->

    <link rel="stylesheet"
          href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css')}}">


    @yield('header_js')
</head>
<body>


@yield('style')

@yield('body')


<script src="{{URL::asset('dist/sweetalert.min.js')}}"></script>

@include('sweet::alert')




<br>


<!-- jQuery -->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<!-- Bootstrap DateTimePicker -->
<script src="{{URL::asset('js/moment.js')}}"></script>
<script src="{{URL::asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{URL::asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Stellar Parallax -->
<script src="{{URL::asset('js/jquery.stellar.min.js')}}"></script>


<!-- Flexslider -->
<script src="{{URL::asset('js/jquery.flexslider-min.js')}}"></script>
<script>
    $(function () {
        $('#date').datetimepicker();
    });
</script>
<!-- Main JS -->
<script src="{{URL::asset('js/main.js')}}"></script>

<script src="{{URL::asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js')}}"></script>


<script src="{{URL::asset('image-picker/image-picker.js')}}" type="text/javascript"></script>

<script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js')}}"></script><!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js')}}"></script>

@yield('body_js')

</body>
</html>

