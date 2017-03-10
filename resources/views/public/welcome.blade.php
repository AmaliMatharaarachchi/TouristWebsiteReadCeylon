@extends('layouts.master')
@section('title')
   Read Ceylon Lanka Tours
   @endsection
    @section('body')

        <div class="row">
            <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Card Title</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
        </div>
            {{--<!--your code start-->--}}
    {{--<div class="slider fullscreen">--}}
        {{--<ul class="slides" >--}}
            {{--<li>--}}

                {{--<img src="images/beach.jpg"> <!-- random image -->--}}
                {{--<div class="caption center-align">--}}
                    {{--<h3>This is our big Tagline!</h3>--}}
                    {{--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<img src="images/elephant.jpg"> <!-- random image -->--}}
                {{--<div class="caption left-align">--}}
                    {{--<h3>Left Aligned Caption</h3>--}}
                    {{--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<img src="images/gem.jpg"> <!-- random image -->--}}
                {{--<div class="caption right-align">--}}
                    {{--<h3>Right Aligned Caption</h3>--}}
                    {{--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<img src="images/hotel.jpg"> <!-- random image -->--}}
                {{--<div class="caption center-align">--}}
                    {{--<h3>This is our big Tagline!</h3>--}}
                    {{--<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>--}}
                {{--</div>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('.slider').slider();
        });

    </script>

    @endsection

            <!--your code end-->

