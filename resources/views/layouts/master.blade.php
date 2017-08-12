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
    {{--<meta name="csrf_token" content="{{ csrf_token() }}">--}}

            <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic"
          rel='stylesheet' type='text/css'>
    {{--added--}}

    {{--<link rel="stylesheet" type="text/css" href="/dist/sweetalert.css">--}}
    <link rel="stylesheet" type="text/css" href="/image-picker/image-picker.css">

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- Waypoints -->
    <script src="/js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="/js/jquery.stellar.min.js"></script>


    <!-- Flexslider -->
    <script src="/js/jquery.flexslider-min.js"></script>

    <!-- Main JS -->
    <script src="/js/main.js"></script>

    <script src="/js/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>


    <script src="/image-picker/image-picker.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>

    <!-- Bootstrap DateTimePicker -->
    <script src="/js/moment.js"></script>
    <script src="/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Animate.css -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="/css/simple-line-icons.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="/css/flexslider.css">


    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/css/bootstrap.css">


    <link rel="stylesheet" href="/css/style.css">


    <!-- Modernizr JS -->
    <script src="/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="/js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">


    @yield('header_js')

</head>
<body>
{{--@if (count($errors) > 0)--}}
{{--<div class="alert alert-danger">--}}
{{--<ul>--}}
{{--@foreach ($errors->all() as $error)--}}
{{--<li>{{ $error }}</li>--}}

{{--@endforeach--}}
{{--</ul>--}}
{{--</div>--}}
{{--@endif--}}


@yield('style')

@yield('body')


{{--<script src="/dist/sweetalert.min.js"></script>--}}
{{--<script type="text/javascript">--}}
{{--var csrfToken = $('[name="csrf_token"]').attr('content');--}}

{{--setInterval(refreshToken, 3600000); // 1 hour--}}

{{--function refreshToken(){--}}
{{--$.get('refresh-csrf').done(function(data){--}}
{{--csrfToken = data; // the new token--}}
{{--});--}}
{{--}--}}

{{--setInterval(refreshToken, 3600000); // 1 hour--}}

{{--</script>--}}

{{--@include('sweet::alert')--}}
{{--@if (count($errors) > 0)--}}

{{--<script>--}}
{{--swal("Oops...", "try again", "error");--}}
{{--</script>--}}

{{--@endif--}}

@if(Session::has('message') or Session::has('errors'))
    <div id="myModal" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                @if(Session::has('errors'))
                <div class="modal-header">

                    <h1 class="modal-title" style="color: #d73d32"><i class="glyphicon glyphicon-fire"></i> ERROR!</h1>
                </div>


                <div class="modal-body">


                        @foreach ($errors->all() as $error)
                            {{ $error }}

                        @endforeach



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">OK</button>
                </div>
                    @else
                    <div class="modal-header">

                        <h1 class="modal-title" ></h1>
                    </div>


                    <div class="modal-body">

                        <p>{{Session::get('message')}}</p>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-lg btn-warning" data-dismiss="modal">OK</button>
                    </div>
                @endif
            </div> <!-- / .modal-content -->
        </div> <!-- / .modal-dialog -->
    </div>
@endif

@if(Session::has('errors') or Session::has('message'))
    <script>
        $(document).ready(function () {
            $('#myModal').modal({show: true})
        });
    </script>
@endif



<br>


@yield('body_js')

</body>
</html>

