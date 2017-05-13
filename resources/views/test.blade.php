@extends('layouts.master')

@section('title')
    Tours
@endsection
@section('style')
    <style>
        .city-div {
            padding: 30px;
            border: 1px solid darkgrey;
            margin-bottom: 10px;
        }
    </style>
    @endsection
@section('body')


    <div id="fh5co-about" data-section="cities">
        {{--@foreach($cities as $city)--}}
        {{--<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/res_img_1.jpg)"></div>--}}

        {{--<div class="fh5co-2col fh5co-text">--}}
            {{--<a href="#" class="btn "><h2 class="heading to-animate">{{$city->name}}</h2></a>--}}

            {{--<p class="to-animate">{{$city->description}}<br>--}}


            {{--</p>--}}
            {{--<a href="/packages/{{$city->name}}">more</a>--}}
            {{--@if(Auth::user()->type=='U')--}}
                {{--<p class="text-center to-animate"><a href="#" class="btn btn-primary btn-outline">Add to my--}}
                        {{--tour</a>--}}
                {{--</p>--}}
            {{--@endif--}}
        {{--</div>--}}
            {{--@endforeach--}}

            <div class="container">
                <h1>City Selector</h1>
                <div class="col-md-6 city-wrapper">
                    No cities to display!
                </div>
                <div class="col-md-6">
                    <h3>Selected Cities:</h3>
                    <div id="array-div"></div>
                </div>
            </div>

    </div>
    @endsection
@section('body-js')
    <script>
        var cityNames = [{id: '001', name: 'Matara'}, {id: '002', name: 'Kandy'}, {id: '003', name: 'Colombo'}, {
            id: '004',
            name: 'Galle'
        }];

        var selectedCities = []

        $(function () {

            $('.city-wrapper').text("")
            renderCities()
        });

        $('.city-wrapper').on('click', ".city-div button", function () {
            selectedCities.push($(this).data('id'))
            renderArray(selectedCities)
            $(this).closest('.city-div').slideUp()
        })
        function renderCities() {
            $.each(cityNames, function (index, value) {
                $('.city-wrapper').append("<div class='city-div'><p>" + value['name'] + "</p><button data-id='" + value['id'] + "'>Add City</button></div>");
            })
        }
        function renderArray(array) {
            $('#array-div').text(selectedCities.toString())
        }

    </script>
    @endsection