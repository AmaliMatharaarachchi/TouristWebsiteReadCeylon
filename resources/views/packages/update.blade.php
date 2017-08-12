@extends('layouts.master')
@section('title')
    {{$package->name}}
@endsection


@section('body')

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">

            <ul class="nav navbar-nav">
                <li><a href="{{route('packages')}}">Back</a></li>
                <li><a href="{{route('welcome')}}">Home</a></li>

                </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                @else
                    <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

                    <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                @endif
            </ul>
        </div>
    </nav>
    <div id="fh5co-container">



        <br>
        <br>
        <div id="fh5co-contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <form method="post" action="{{route('package_update')}}">
                            {{ csrf_field() }}
                            <input type="hidden" id="id" name="id" value="{{$package->id}}"/>
                            <label for="name" class="control-label">Package Name*</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="{{$package->name}}"
                                   value="{{$package->name}}" required/>
                            <label for="description" class="control-label">Description*</label>
                                <textarea  id="description" name="description" class="form-control"
                                          required>{{$package->description}}</textarea>
                            <label for="price" class=" control-label" >Price($)*</label>
                            <input type="text" id="price" name="price" value="{{$package->price}}" placeholder="{{$package->price}}" class="form-control" required/>
                            <label for="days" class=" control-label">Number of Days*</label>
                            <input type="text" id="days" name="days" value="{{$package->days}}" placeholder="{{$package->days}}" class="form-control" required/>
                            <label for="cities" class=" control-label">Select cities*</label>
                            <select name="cities[]" class="selectpicker" data-live-search="true" data-width="100%" multiple
                                    title="Select cities...">
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>


                            <input class="base-text-color" type="submit" value="Send"/>
                        </form>

                    </div>
                </div>
            </div>
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

            </div>
        </div>
    </div>

@endsection

@section('body-js')
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