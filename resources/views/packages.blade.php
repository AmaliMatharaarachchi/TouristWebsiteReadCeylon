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
                                @if(Auth::user()->tour)
                                    <a href="#" data-nav-section="tours">My Packages</a>
                                @endif
                            @else
                                <a href="#" data-nav-section="create">Create Tour</a>
                            @endif
                        @endif

                    </div>


                </div>
            </div>


        </div>


    </div>

    @if(Auth::user()->tour)
        <div id="fh5co-featured" data-section="tours">
            <div class="container">
                <div class="row text-center fh5co-heading row-padded">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading to-animate">My Packages</h2>
                        <p class="sub-heading to-animate">These are your customized packages </p>
                    </div>
                </div>


                <div class="row">

                    <div class="fh5co-grid">
                        @foreach((Auth::user()->tour) as $tour)

                            <div class="fh5co-v-half to-animate-2">

                                @foreach($tour->customizeTour as $k=> $c)
                                    @if($k==0)
                                        @foreach($c->city->has_image as $key=>$i)
                                            @if($key==0)
                                                <div class="fh5co-v-col-2 fh5co-bg-img"
                                                     style="background-image: url('img/{{$i->image->url}}')"></div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                                <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                                    <h1 style="color: #1b6d85"><b>{{$tour->name}}</b>
                                    </h1>
                                    <p>
                                        @foreach($tour->customizeTour as $c)
                                            <a href="/cities/{{$c->city->name}}">{{$c->city->name}}</a>
                                        @endforeach
                                        <br>
                                    <p class="text-center to-animate"><a href="{{route('book')}}"
                                                                         class="btn btn-primary btn-outline">Book
                                            now!</a>

                                    </p>
                                </div>
                            </div>

                        @endforeach


                    </div>
                </div>

                <br>
                <div class="row text-center fh5co-heading row-padded">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading to-animate">Other Packages</h2>
                        <p class="sub-heading to-animate">These are most popular tour packages</p>
                    </div>
                </div>

            </div>
        </div>

    @endif



    <div id="fh5co-about" data-section="packages">


        @foreach($packages as $key=>$package)
            @if($key%2==1)

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

                    <p class="to-animate">
                        @foreach($package->has_city as $c)
                            <a href="/cities/{{$c->city->name}}">{{$c->city->name}}</a>
                        @endforeach
                        <br>
                        {{$package->description}}<br>

                        @if(($package->price)!=null or ($package->price)!='')
                            <span>${{$package->price}}</span>
                        @endif
                        <br>
                        <a href="/packages/{{$package->name}}">more...</a>

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

                    <p class="to-animate">
                        @foreach($package->has_city as $c)
                            <a href="/cities/{{$c->city->name}}">{{$c->city->name}}</a>
                        @endforeach
                        <br>
                        {{$package->description}}<br>

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
            hide_select: false
        });

        jQuery("select.image-picker.show-labels").imagepicker({
            hide_select: false,
            show_label: true
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
                itemSelector: "li"
            });
        });
    </script>


@endsection







