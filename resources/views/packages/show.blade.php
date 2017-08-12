{{--this is the package page where a specific package details and comments are shown--}}
@extends('layouts.master')

@section('title')
    {{$package->name}}
@endsection

@section('body')



    <br xmlns="http://www.w3.org/1999/html">
    <br>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('welcome')}}">ReadCeylon</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li><a href="{{route('packages')}}">All Packages</a></li>
                <li class="active"><a href="/packages/{{$package->name}}">{{$package->name}}</a></li>
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

    <div class="container">

        <div class="row">
            <div class="col-md-6"><p style="color: #1b6d85; font-size: xx-large" ><b>{{$package->name}}</b></p></div>
            <div class="col-md-6 col-md-push-4">
                @if(Auth::check())
                    @if(Auth::user()->type=='A')
                        <a href="/packages/update/{{$package->name}}"
                           class="btn btn-lg btn-primary ">update</a>

                    @endif
                @endif
            </div>
        </div>

        <div class="row">

            <!-- Indicators -->

            @foreach($package->has_city as $p)
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <h2>{{$p->city->name}}</h2>
                    @if(sizeof($p->city->has_image)>1)
                        <ol class="carousel-indicators">
                            @foreach($p->city->has_image as $key=>$i)
                                @if($key==0)
                                    <li data-target="#myCarousel" data-slide-to="{{$key}}" class="active"></li>
                                @else
                                    <li data-target="#myCarousel" data-slide-to="{{$key}}"></li>
                                @endif
                            @endforeach
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox" style=" width:100%; height: 500px !important;">
                            @foreach($p->city->has_image as $key=>$i)
                                @if($key==0)
                                    <div class="item active">
                                        <img src="\img\{{$i->image->url}}" alt="{{$i->image->name}}"
                                             style="width:100%;">
                                    </div>
                                @else
                                    <div class="item ">
                                        <img src="\img\{{$i->image->url}}" alt="{{$i->image->name}}"
                                             style="width:100%;">
                                    </div>
                                @endif
                            @endforeach

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    @else
                        @foreach($p->city->has_image as $i)
                            <img src="\img\{{$i->image->url}}" alt="{{$i->image->name}}" style="width:100%;">

                        @endforeach
                    @endif
                </div>
            @endforeach

        </div>
        <br>
        <br>
        <div class="col-md-6">
            <h2>Description :</h2>
            <p align="justify">{{$package->description}}</p>
        </div>
        <div class="col-md-6">
            <div class="col-md-6 pull-right"><h2> Price : <span>{{$package->price}}$</span></h2>
                <h2> For {{$package->days}} days only <span></span></h2></div>

        </div>
        <div class="col-md-12">
            <br>

            @if(sizeof($package->comments)>0)
                <h2><b>Recent Comments</b></h2>
            @else
                <h2><b>No Comments have been posted yet</b></h2>
            @endif


            @foreach($package->comments as $comment)
                <div class="col-md-4"><h3 style="color: #2e6da4">
                        @if(Auth::check())
                            @if($comment->user->type=='A')
                                Admin
                            @else
                                {{$comment->user->name}}
                            @endif
                        @endif
                    </h3></div>
                <div class="col-md-8"><h3><span>{{$comment->created_at->diffForHumans()}}  </span></h3></div>
                <div class="col-md-1"></div>
                <div class="col-md-11"><p><b>{{$comment->review}}</b>

                    </p></div>
                <div class="col-md-12"> @if($comment->user==Auth::user() or Auth::user()->type=='A')
                        <form method="post" action="{{route('delete_comment')}}">
                            {{csrf_field()}}


                            <input type="hidden" value="{{$comment->id}}" id="id"
                                   name="id"/>

                            <input class=" base-text-color" type="submit" value="Delete Comment"/>

                        </form>

                    @endif</div>

            @endforeach
            @if(Auth::check())
                <div class="col-md-12">
                    <form method="post" action="{{route('add_comment')}}">
                        {{csrf_field()}}

                        <h3><i class="icon-comments"></i> Add your comment: </h3>
                    <textarea  id="review" name="review"
                    ></textarea>

                        <input type="hidden" value="{{Auth::user()->id}}" id="user_id"
                               name="user_id"/>
                        <input type="hidden" value="{{$package->id}}" id="package_id"
                               name="package_id"/>
                        <input class=" base-text-color" type="submit" value="Send"/>

                    </form>

                </div>
            @endif
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