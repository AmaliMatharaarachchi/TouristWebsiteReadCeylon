{{--this is the message page customized for each registered user--}}
@extends('layouts.master')

@section('title')
    Messages
@endsection

@section('style')
    <style>


        .chat {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .chat li {
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 1px dotted #B3A9A9;
        }

        .chat li.left .chat-body {
            margin-left: 60px;
        }

        .chat li.right .chat-body {
            margin-right: 60px;
        }

        .chat li .chat-body p {
            margin: 0;
            color: #777777;
        }

        .panel .slidedown .glyphicon, .chat .glyphicon {
            margin-right: 5px;
        }

        .panel-body {
            overflow-y: scroll;
            height: 250px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #555;
        }


    </style>
@endsection

@section('body')

    <ul>
        <li >
            <a href="{{route('welcome')}}">Back to Home</a></li>
        @if(Auth::check())

            <li >
                <a href="{{route('logout')}}">Logout</a>
            </li>
        @endif

    </ul>

    <div id="fh5co-container">

        <div class="js-sticky">
            <div class="fh5co-main-nav">
                <div class="container-fluid">
                    <div class="fh5co-menu-1">
                        {{--<a href="#" data-nav-section="home">Home</a>--}}
                        {{--<a href="#" data-nav-section="tours">Tours</a>--}}
                        {{--<a href="#" data-nav-section="about">About Sri Lanka</a>--}}


                    </div>
                    <div class="fh5co-logo">
                        <a href="#">ReadCeylon</a>
                    </div>
                    {{--<div class="fh5co-menu-2">--}}
                    {{--<a href="#" data-nav-section="sri_lanka">Sri Lanka</a>--}}

                    {{--<a href="#" data-nav-section="events">Messages</a>--}}
                    {{--@if((Auth::check()))--}}
                    {{--<a href="#" data-nav-section="login">Logout/Register-Admin</a>--}}
                    {{--@else--}}

                    {{--<a href="#" data-nav-section="login">Login/Register</a>--}}
                    {{--@endif--}}
                    {{--</div>--}}


                </div>
            </div>


        </div>


    </div>
    <br>
    <br>
    <br>


    <div class="container">
        <div class="row">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-comment"></span> Message to Admin
                    {{--<div class="btn-group pull-right">--}}
                    {{--<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">--}}
                    {{--<span class="glyphicon glyphicon-chevron-down"></span>--}}
                    {{--</button>--}}
                    {{--<ul class="dropdown-menu slidedown">--}}
                    {{--<li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-refresh">--}}
                    {{--</span>Refresh</a></li>--}}
                    {{--<li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-ok-sign">--}}
                    {{--</span>Available</a></li>--}}
                    {{--<li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-remove">--}}
                    {{--</span>Busy</a></li>--}}
                    {{--<li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-time"></span>--}}
                    {{--Away</a></li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-off"></span>--}}
                    {{--Sign Out</a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                </div>
                <div class="panel-body">
                    <ul class="chat">

                        @foreach(Auth::user()->sendMessages as $sendMessage)

                            @if(($sendMessage->user_type=='U'))
                                <li class="right clearfix">
                            <span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&amp;text=ME" alt="User Avatar"
                                 class="img-circle">
                        </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>
                                                {{$sendMessage->message->created_at->diffForHumans()}}
                                            </small>
                                            <strong class="pull-right primary-font">ME</strong>
                                        </div>
                                        <p>
                                            {{$sendMessage->message->message}}
                                        </p>
                                    </div>
                                </li>

<br>

                            @else
                                <li class="left clearfix">
                            <span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&amp;text=A" alt="User Avatar"
                                 class="img-circle">
                        </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Admin</strong>
                                            <small class="pull-right text-muted">
                                                <span class="glyphicon glyphicon-time"></span>12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            {{$sendMessage->message->message}}
                                        </p>
                                    </div>
                                </li>
                                <br>

                            @endif

                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">
                    {{--<form METHOD="post" action="{{route('user_message')}}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="message" class="control-label">your message*</label>--}}


                                {{--<textarea id="message" type="message" class="form-control" name="message"--}}
                                          {{--required></textarea>--}}


                        {{--</div>--}}


                        {{--<input class="base-text-color" type="submit" value="send message"/>--}}
                    {{--</form>--}}
                    <form METHOD="post" action="{{route('user_message')}}">
                        {{csrf_field()}}
                    <div class="input-group">
                        <input id="btn-input" class="form-control input-sm" placeholder="Type your message here..." id="message" name="message"
                               type="text">
                        <span class="input-group-btn">
                            <input class="btn btn-warning btn-sm" id="btn-chat" type="submit" value="send"/>

                        </span>
                    </div>
                        </form>
                </div>
            </div>

        </div>
    </div>

@endsection


