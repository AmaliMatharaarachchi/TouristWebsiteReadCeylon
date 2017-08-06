@extends('layouts.master')
@section('title')
    {{$package->name}}
@endsection


@section('body')


    <div id="fh5co-container">


        <div class="js-sticky">

            <div class="fh5co-main-nav">
                <div class="container-fluid">

                    <div class="fh5co-logo">
                        <a href="#">{{$package->name}} </a>
                    </div>


                </div>
            </div>


        </div>
        <br>
        <br>
        <div id="fh5co-contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        {{--this is the form for create cities--}}
                        {{--<form method="post" action="{{ route('city-update')}}">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<input type="hidden" id="id" name="id" value="{{$city->id}}"--}}
                            {{--/>--}}
                            {{--<label for="name" class="control-label">City Name*</label>--}}
                            {{--<input type="text" id="name" name="name" class="form-control" value="{{$city->name}}"--}}
                                   {{--required/>--}}
                            {{--<label for="description" class="control-label">Description*</label>--}}
    {{--<textarea type="text" id="description" name="description" class="form-control"--}}
              {{--required>{{$city->description}}</textarea>--}}
                            {{--<label for="star3price" class="control-label">Price of 3 star hotels($)</label>--}}
                            {{--<input type="star3price" id="star3price" name="star3price" value="{{$city->star3price}}"--}}
                                   {{--class="form-control"/>--}}
                            {{--<label for="star4price" class="control-label">Price of 4 star hotels($)</label>--}}
                            {{--<input type="text" id="star4price" value="{{$city->star4price}}" name="star4price"--}}
                                   {{--class="form-control"/>--}}
                            {{--<label for="star5price" class="control-label">Price of 5 star hotels($)</label>--}}
                            {{--<input type="text" id="star5price" name="star5price" value="{{$city->star5price}}"--}}
                                   {{--class="form-control"/>--}}
                            {{--<label for="images" class=" control-label">Select Images*</label>--}}

                            {{--<div class="picker">--}}
                                {{--<select data-max-options="3" name="images[]"--}}
                                        {{--class="image-picker show-labels masonry show-html selectpicker"--}}
                                        {{--data-live-search="true" title="Select cities..." data-width="100%"--}}
                                        {{--data-limit="3"--}}
                                        {{--name="images[]" multiple="multiple">--}}

                                    {{--@foreach($images as $image)--}}


                                        {{--<option data-img-label='{{$image->name}}' data-img-src='{{URL::asset('images\beach.jpg')}}'--}}
                                                {{--value='{{$image->id}}'>{{$image->name}}</option>--}}

                                    {{--@endforeach--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            {{--<input type="hidden" class="control-label" name="images" value=("select").imagepicker() />--}}

                            {{--<input class="base-text-color" type="submit" value="Send"/>--}}
                        {{--</form>--}}

                        <form method="post" action="{{route('package_update')}}">
                            {{ csrf_field() }}
                            <input type="hidden" id="id" name="id" value="{{$package->id}}"/>
                            <label for="name" class="control-label">Package Name*</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="{{$package->name}}"
                                   value="{{$package->name}}" required/>
                            <label for="description" class="control-label">Description*</label>
                                <textarea type="text" id="description" name="description" class="form-control"
                                          required>{{$package->description}}</textarea>
                            <label for="price" class=" control-label" >Price</label>
                            <input type="text" id="price" name="price" value="{{$package->price}}" placeholder="{{$package->price}}" class="form-control"/>
                            <label for="days" class=" control-label">Days</label>
                            <input type="text" id="days" name="days" value="{{$package->days}}" placeholder="{{$package->days}}" class="form-control"/>
                            <label for="cities" class=" control-label">Select cities</label>
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