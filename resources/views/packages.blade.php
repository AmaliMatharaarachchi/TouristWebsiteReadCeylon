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
                <a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
            </li>
        @endif

    </ul>

    <div id="fh5co-container">


        <div class="js-sticky">

            <div class="fh5co-main-nav">
                <div class="container-fluid">
                    <div class="fh5co-menu-1">

                        <a href="#" data-nav-section="packages">Packages</a>


                    </div>
                    <div class="fh5co-logo">
                        <a href="#">Tours</a>
                    </div>
                    <div class="fh5co-menu-2">
                        @if(Auth::check())
                            @if(Auth::user()->type=='U')
                            @else
                                <a href="#" data-nav-section="create">Create Tour</a>
                            @endif
                        @endif

                    </div>


                </div>
            </div>


        </div>


    </div>

    <br>
    <br>
    <br>
    <div class="div">

        @if(Auth::check())
            @if(Auth::user()->type=='U')

                <h1>My Tours</h1>

                <div class="col-md-12"><p><a href="{{route('cities')}}"
                                             class="btn btn-primary btn-outline">Create
                            a new Tour</a></p></div>
                @foreach((Auth::user()->tour) as $key=>$tour)
                    <h1>{{$tour->name}}</h1>


                    <div class="col-md-12"><p>
                            @foreach($tour->customizeTour() as $city)
                                {{$city->name}}
                            @endforeach</p>

                    </div>



                @endforeach



            @endif
        @endif

    </div>


    <div id="fh5co-about" data-section="packages">


        @foreach($packages as $key=>$package)
            @if($key%2==0)

                @foreach($package->has_city as $key1=>$c)
                    @if($key1==0)
                        @foreach($c->city->has_image as $key2=>$i)
                            @if($key2==0)
                                <div class="fh5co-2col fh5co-bg to-animate-2"
                                     style="background-image: url('img/{{$i->image->url}}')"></div>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                <div class="fh5co-2col fh5co-text">
                    <a href="#" class="btn "><h2
                                class="heading to-animate">{{$package->name}}</h2></a>

                    <p class="to-animate">{{$package->description}}<br>
                        {{--@if(($package->price)!=null or ($package->price)!='')--}}
                        <span>Price = ${{$package->price}}</span>
                        {{--@endif--}}
                    </p>
                    <a href="/packages/{{$package->name}}">more...</a>

                    </p>
                    @if(Auth::check())
                        @if(Auth::user()->type=='A')
                            <p class="text-center to-animate"><a href="/packages/update/{{$package->name}}"
                                                                 class="btn btn-primary btn-outline">update</a>
                            </p>
                        @else
                            <p class="text-center to-animate"><a href="{{route('book')}}"
                                                                 class="btn btn-primary btn-outline">Book now!</a>

                        @endif
                    @else
                        <p class="text-center to-animate"><a href="{{route('book')}}"
                                                             class="btn btn-primary btn-outline">Book now!</a>

                    @endif
                </div>
            @else

                <div class="fh5co-2col fh5co-text">
                    <a href="#" class="btn "><h2
                                class="heading to-animate">{{$package->name}}</h2></a>

                    <p class="to-animate">{{$package->description}}<br>

                        @if(($package->price)!=null or ($package->price)!='')
                            <span>${{$package->price}}</span>
                        @endif
                    </p>
                    <a href="/packages/{{$package->name}}">more...</a>

                    @if(Auth::check())
                        @if(Auth::user()->type=='A')
                            <p class="text-center to-animate"><a href="/packages/update/{{$package->name}}"
                                                                 class="btn btn-primary btn-outline">update</a>
                            </p>
                        @else
                            <p class="text-center to-animate"><a href="{{route('book')}}"
                                                                 class="btn btn-primary btn-outline">Book now!</a>
                            </p>
                        @endif
                    @else
                        <p class="text-center to-animate"><a href="{{route('book')}}"
                                                             class="btn btn-primary btn-outline">Book now!</a>
                        </p>
                    @endif


                </div>
                @foreach($package->has_city as $key1=>$c)
                    @if($key1==0)
                        @foreach($c->city->has_image as $key2=>$i)
                            @if($key2==0)
                                <div class="fh5co-2col fh5co-bg to-animate-2"
                                     style="background-image: url('img/{{$i->image->url}}')"></div>
                            @endif
                        @endforeach
                    @endif
                @endforeach


            @endif
        @endforeach
    </div>


    @if(Auth::check())
        @if(Auth::user()->type=='A')
            <div id="fh5co-contact" data-section="create">
                <div class="container">
                    <div class="row text-center fh5co-heading row-padded">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="heading to-animate">Create package</h2>
                            <p class="sub-heading to-animate">Enter details of special tour packages you provide</p>
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







