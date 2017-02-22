<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{URL::asset('images/apple-touch-icon.html')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('images/apple-touch-icon-72x72.html')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('images/apple-touch-icon-114x114.html')}}">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}" type="text/css">



    <!-- / color -->
    <link class="colors_style" rel="stylesheet" href="{{URL::asset('css/color_style/color_5.css')}}" type="text/css"/>
    <!-- / google font -->
    <link href='{{URL::asset('http://fonts.googleapis.com/css?family=Titillium+Web:400,200,600,300')}}' rel='stylesheet' type='text/css'>
    <!-- / settings_box -->
    <link rel="stylesheet" href="{{URL::asset('settings_box/settings_box.css')}}" type="text/css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <!-- Load jQuery
    ================================================== -->
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/device.min.js"></script>
</head>

<body>



@yield('body')
<section id="copy">
    <div class="container">
        <div class="fl-r">
            <p>Website Design, Development & Hosting by Almas-Den<br>
                contact us: almas.den.sw@gmail.com
            </p>


        </div>

        <p>&copy;Copyright 2017 Suranga All Rights Reserved</p>
    </div>
</section>

<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/jquery.fs.boxer.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/vegas.min.js"></script>
<script type="text/javascript" src="js/jquery.main.js"></script>

</body>
</html>