{{--this is the tour page where all --}}
{{--tour packages are listed to one place and all functions related --}}
{{--to tours--}}
@extends('layouts.master')

@section('title')
    Tours
@endsection

@section('style')
    <style>
        .thumbnails li img {
            width: 150px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;

        }

        li {
            float: left;
            border-right: 1px solid #bbb;
        }

        li:last-child {
            border-right: none;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }


    </style>


@endsection

@section('body')



    <ul>
        <li>
            <a href="{{route('welcome')}}">Back to Home</a></li>
        @if(Auth::check())
            <li style="float:right">
                <a href="{{route('logout')}}">Logout</a>
            </li>
        @endif

    </ul>





    <div id="fh5co-container">


        <div class="js-sticky">

            <div class="fh5co-main-nav">
                <div class="container-fluid">
                    <div class="fh5co-menu-1">

                        <a href="#" data-nav-section="cities">Sri Lanka Cities</a>


                    </div>
                    <div class="fh5co-logo">
                        <a href="#">Cities</a>
                    </div>
                    <div class="fh5co-menu-2">
                        {{--<a href="#" data-nav-section="sri_lanka">Sri Lanka</a>--}}
                        @if(Auth::check())
                            @if(Auth::user()->type=='U')
                            @else
                                <a href="#" data-nav-section="create">Create City</a>
                            @endif
                        @endif
                        {{--<a href="#" data-nav-section="login">Login/Register</a>--}}

                    </div>


                </div>
            </div>


        </div>


    </div>

    <br>
    <br>
    <br>
    <div id="fh5co-about" data-section="cities">
        @foreach($cities as $key=>$city)

            @if($key%2==1)
                <div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/res_img_1.jpg)"></div>

                <div class="fh5co-2col fh5co-text">
                    <a href="#" class="btn "><h2 class="heading to-animate">{{$city->name}}</h2></a>

                    <p class="to-animate">{{$city->description}}<br>


                    </p>
                    <a href="/cities/{{$city->name}}">more</a>
                    @if(Auth::check())
                        @if(Auth::user()->type=='U')
                            <p class="text-center to-animate"><a href="#" class="btn btn-primary btn-outline">Add to my
                                    tour</a>
                            </p>
                        @else
                            <p class="text-center to-animate"><a href="/cities/update/{{$city->name}}"
                                                                 class="btn btn-primary btn-outline">update</a>
                            </p>
                        @endif
                    @endif
                </div>
            @else

                <div class="fh5co-2col fh5co-text">
                    <a href="#" class="btn "><h2 class="heading to-animate">{{$city->name}}</h2></a>

                    <p class="to-animate">{{$city->description}}<br>

                    </p>
                    <a href="/packages/{{$city->name}}">more</a>
                    <p class="text-center to-animate"><input type="button" class="sal" value="0"> <a
                                href="javascript:addNum({{$city->id}})"
                                class="btn btn-primary btn-outline">Add to my city</a></p>
                </div>
                <div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/res_img_1.jpg)"></div>

            @endif

        @endforeach

    </div>
    @if(Auth::check())
        @if(Auth::user()->type!='U')
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


                    </div>
                </div>
            </div>





        @endif
    @endif
    <div class="container">
        <div class="col-md-6 right">
            <form action="{{route('customize')}}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <input type="hidden" id='list' name="srray[]"/>

                </div>


                <input class="btn-primary base-text-color " type="submit" value="send"/>
            </form>
        </div>
    </div>

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
    <script type="text/javascript">
        var numArray = ['123'];
        function addNum(num) {
            numArray.push(num);
            document.querySelector(".txt").innerHTML = numArray.join('');
        }

        //        var fd = new FormData(document.getElementById("myform"));
        //        for (var i = 0; i < numArray.length; i++) {
        //            fd.append('numArray[]', numArray[i]);
        //        }

        document.getElementById('list').value = numArray;


        $(document).ready(function () {
            $('.sal').each(function () {
                $(this).click(function (e) {
                    numArray.push($(this).val());
                    console.log(numArray);
                });
            });
        });
    </script>
@endsection





