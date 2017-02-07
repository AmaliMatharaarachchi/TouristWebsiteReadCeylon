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
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/responsive.css" type="text/css">

    <!-- / color -->
    <link class="colors_style" rel="stylesheet" href="css/color_style/color_1.css" type="text/css"/>
    <!-- / google font -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,600,300' rel='stylesheet' type='text/css'>
    <!-- / settings_box -->
    <link rel="stylesheet" href="settings_box/settings_box.css" type="text/css">

    <!-- Load jQuery
    ================================================== -->
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/device.min.js"></script>
</head>

<body>


<section id="header-container">
    <header id="header">
        <div class="container">
            <a href="#" id="logo"></a>

            <nav id="navigation" class="fl-r" role="navigation">
                <ul>
                    <li class="current">
                        <a href="#">Home</a>


                    </li>


                    <li>
                        <a href="#">Packages</a>


                        <div class="submenu col-md-2">
                            <ul class="base-bg-color">
                                <li><a href="about_us.html">About Us</a></li>
                                <li><a href="our_team.html">Our Team</a></li>
                                <li><a href="project_details_1.html">Project Details 1</a></li>
                                <li><a href="project_details_2.html">Project Details 2</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>

                        </div>

                    </li>
                    <li><a href="#">Sri Lanka</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
</section>

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