<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>@yield('title')</title>

    <!-- CSS  -->
    <link href="{{URL::asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
    <link href="{{URL::asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{URL::asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>


@yield('body')



        <!--  Scripts-->
<!--Import jQuery before materialize.js-->

<script type="text/javascript" src="{{URL::asset('https://code.jquery.com/jquery-2.1.1.min.js')}}"></script>


<script src="{{URL::asset('js/materialize.js')}}"></script>
<script src="{{URL::asset('js/init.js')}}"></script>
@yield('js')

</body>
</html>

