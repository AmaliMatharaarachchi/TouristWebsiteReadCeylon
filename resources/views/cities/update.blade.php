@extends('layouts.master')
@section('title')
    {{$city->name}}
@endsection

{{--@section('style')--}}
{{--<style>--}}
{{--.thumbnails li img {--}}
{{--width: 150px;--}}
{{--}--}}

{{--ul {--}}
{{--list-style-type: none;--}}
{{--margin: 0;--}}
{{--padding: 0;--}}
{{--overflow: hidden;--}}
{{--background-color: #333;--}}

{{--}--}}

{{--li {--}}
{{--float: left;--}}
{{--border-right: 1px solid #bbb;--}}
{{--}--}}

{{--li:last-child {--}}
{{--border-right: none;--}}
{{--}--}}

{{--li a {--}}
{{--display: block;--}}
{{--color: white;--}}
{{--text-align: center;--}}
{{--padding: 14px 16px;--}}
{{--text-decoration: none;--}}
{{--}--}}

{{--li a:hover:not(.active) {--}}
{{--background-color: #111;--}}
{{--}--}}


{{--</style>--}}
{{--@endsection--}}
@section('body')


    <div id="fh5co-container">


        <div class="js-sticky">

            <div class="fh5co-main-nav">
                <div class="container-fluid">

                    <div class="fh5co-logo">
                        <a href="#">{{$city->name}} </a>
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
                        <form method="post" action="{{ route('city_update')}}">
                            {{ csrf_field() }}
                            <input type="hidden" id="id" name="id" value="{{$city->id}}"
                            />
                            <label for="name" class="control-label">City Name*</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{$city->name}}"
                                   required/>
                            <label for="description" class="control-label">Description*</label>
    <textarea type="text" id="description" name="description" class="form-control"
              required>{{$city->description}}</textarea>
                            <label for="star3price" class="control-label">Price of 3 star hotels($)</label>
                            <input type="star3price" id="star3price" name="star3price" value="{{$city->star3price}}"
                                   class="form-control"/>
                            <label for="star4price" class="control-label">Price of 4 star hotels($)</label>
                            <input type="text" id="star4price" value="{{$city->star4price}}" name="star4price"
                                   class="form-control"/>
                            <label for="star5price" class="control-label">Price of 5 star hotels($)</label>
                            <input type="text" id="star5price" name="star5price" value="{{$city->star5price}}"
                                   class="form-control"/>
                            <label for="images" class=" control-label">Select Images*</label>

                            <div class="picker">
                                <select data-max-options="3" name="images[]"
                                        class="image-picker show-labels masonry show-html selectpicker"
                                        data-live-search="true" title="Select cities..." data-width="100%"
                                        data-limit="3"
                                        name="images[]" multiple="multiple">

                                    @foreach($images as $image)


                                        <option data-img-label='{{$image->name}}' data-img-src='{{URL::asset('images\beach.jpg')}}'
                                                value='{{$image->id}}'>{{$image->name}}</option>

                                    @endforeach
                                </select>
                            </div>
                            {{--<input type="hidden" class="control-label" name="images" value=("select").imagepicker() />--}}

                            <input class="base-text-color" type="submit" value="Send"/>
                        </form>

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