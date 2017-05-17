@extends('layouts.master')
@section('title')
    Reviews
@endsection


@section('body')


    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('welcome')}}">ReadCeylon</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li><a href="{{route('reviews')}}">Reviews</a></li>

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

    <h1>Reviews</h1>
    <div class="container">

        <div class="col-md-6">
            <h1>Reviews Accepted : </h1>
            @foreach($reviews as $review)
                @if($review->state=='A')
                    <h3>Added by {{$review->user->name}}</h3>
                    <p>{{$review->review}}</p>

                    <form action="{{route('change_review')}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="hidden" name="id" value="{{$review->id}}"/>

                        </div>
                        <div class="form-group">
                            <input type="hidden" name="state" value="R"/>

                        </div>

                        <input class="btn-primary base-text-color " type="submit" value="Reject"/>
                    </form>
                @endif
            @endforeach

        </div>
        <div class="col-md-6">
            <h1>Other reviews :</h1>
            @foreach($reviews as $key=> $review)
                @if($review->state!='A')

                    <h3>{{$key+1}}. Added by {{$review->user->name}}</h3>
                    <p>{{$review->review}}</p>
                    <p>current state: @if($review->state=='R')rejected @else pending @endif
                    </p>
                    <div class="col-md-6">
                        <form action="{{route('change_review')}}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <input type="hidden" name="id" value="{{$review->id}}"/>

                            </div>

                            <div class="form-group">

                                <input type="hidden" name="state" value="A"/>

                            </div>

                            <input class="btn-primary base-text-color " type="submit" value="Accept"/>
                        </form>
                    </div>

                    <div class="col-md-6">@if($review->state=='P')

                            <form action="{{route('change_review')}}" method="post">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{$review->id}}"/>

                                </div>

                                <div class="form-group">

                                    <input type="hidden" name="state" value="R"/>

                                </div>

                                <input class="btn-primary base-text-color " type="submit" value="Reject"/>
                            </form>
                        @endif
                    </div>



                @endif
            @endforeach

        </div>

    </div>

@endsection

