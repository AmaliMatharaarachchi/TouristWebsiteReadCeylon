@extends('layouts.master')

@section('title')
    Tours
@endsection



@section('body')
    <style type="text/css">
        .thumbnails li img {
            width: 150px;
        }
    </style>

    <nav class="collapse navbar-collapse" id=bs-navbar>
        <ul class="nav navbar-nav">
            <li class=active>
                <a href="{{route('welcome')}}">Home</a></li>
            {{--<li>--}}
            {{--<a href=../css/ >CSS</a>--}}
            {{--</li>--}}
            {{--<li><a href=../components/ >Components</a></li>--}}
            {{--<li>--}}
            {{--<a href=../javascript/ >JavaScript</a></li>--}}
            {{--<li><a href=../customize/ >Customize</a></li>--}}
        </ul>
    </nav>


    <div id="fh5co-container">


        <div class="js-sticky">

            <div class="fh5co-main-nav">
                <div class="container-fluid">
                    <div class="fh5co-menu-1">

                        <a href="#" data-nav-section="packages">Packages</a>
                        {{--<a href="#" data-nav-section="about">About Sri Lanka</a>--}}
                        {{--<a href="#" data-nav-section="features">Features</a>--}}


                    </div>
                    <div class="fh5co-logo">
                        <a href="#">Tours</a>
                    </div>
                    <div class="fh5co-menu-2">
                        {{--<a href="#" data-nav-section="sri_lanka">Sri Lanka</a>--}}
                        @if(Auth::check())
                            <a href="#" data-nav-section="create">Create Tour</a>
                        @endif
                        {{--<a href="#" data-nav-section="login">Login/Register</a>--}}

                    </div>


                </div>
            </div>


        </div>


    </div>


    <div id="fh5co-about" data-section="packages">
        <div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/res_img_1.jpg)"></div>
        <div class="fh5co-2col fh5co-text">
            <a href="ht.html" class="btn "><h2 class="heading to-animate">About Sri Lanka</h2></a>

            <p class="to-animate"><span class="firstcharacter">S</span>ri Lanka is a beautiful country. far far
                away, behind the word mountains, far
                from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the
                word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small
                river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                paradisematic country, in which roasted parts of sentences fly into your mouth. Even the
                all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
        </div>
        <div class="fh5co-2col fh5co-text">
            <h2 class="heading to-animate">About Sri Lanka</h2>
            <p class="to-animate"><span class="firstcharacter">S</span>ri Lanka is a beautiful country. far far
                away, behind the word mountains, far
                from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the
                word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small
                river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                paradisematic country, in which roasted parts of sentences fly into your mouth. Even the
                all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
        </div>
        <div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/res_img_1.jpg)"></div>


    </div>
    @if(Auth::check())
        <div id="fh5co-contact" data-section="create">
            <div class="container">
                <div class="row text-center fh5co-heading row-padded">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading to-animate">Create package</h2>
                        <p class="sub-heading to-animate">You will be given special discounts and treatments</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 to-animate-2">
                        <h3 style="color: red"><b>Add City</b></h3>
                        @include('add_city')
                        <hr>
                    </div>

                    <div class="col-md-6 to-animate-2">
                        <h3 style="color: blue"><b>Upload Image</b></h3>
                        @include('add_image')
                        <hr>
                        <hr>
                        <hr>

                    </div>

                    <div class="col-md-6 to-animate-2">
                        <h3 style="color: green"><b>Add Tour</b></h3>
                        @include('add_package')
                        <hr>
                    </div>

                </div>
            </div>
        </div>
    @endif


    <div id="fh5co-footer">
        <div class="row">
            <div class="container">
                <div class="row row-padded">
                    <div class="col-md-12 text-center">
                        <p class="to-animate">&copy; 2017 ReadCeylon travels . <br>
                        <p>Website Design, Development & Hosting by Almas-Den<br>
                            contact us: almas.den.sw@gmail.com
                        </p>
                        <p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="fh5co-social">
                            <li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
                            <li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
                            <li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('body_js')
    <script> jQuery("select.image-picker").imagepicker({
            hide_select: false,
        });

        jQuery("select.image-picker.show-labels").imagepicker({
            hide_select: false,
            show_label: true,
        });

        jQuery("select.image-picker.limit_callback").imagepicker({
            limit_reached: function () {
                alert('We are full!')
            },
            hide_select: false
        });

        var container = jQuery("select.image-picker.masonry").next("ul.thumbnails");
        container.imagesLoaded(function () {
            container.masonry({
                itemSelector: "li",
            });
        });
    </script>

@endsection


@section('body_js')

@endsection




