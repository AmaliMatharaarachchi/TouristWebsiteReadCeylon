@extends('layouts.public')

@section('title')
    {{$package->package_name}}
@endsection

@section('body')
    <section id="headline">
        <div class="container">
            <div class="section-title clearfix">
                <h2 class="fl-l">{{$package->package_name}}</h2>

                <ul id="breadcrumbs" class="fl-r">
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li><a href="{{route('packages')}}">Packages</a></li>
                    <li>{{$package->package_name}}</li>
                </ul>
            </div>
        </div>
    </section>


    <section id="content-container">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-7 col-md-12">
                    <div>
                        <article class="blog-item post-item">
                            <div class="owlSliderImg post-slider img-container" data-items="1" data-loop="true"
                                 data-auto="false" data-autospeed="3000" data-mousedrag="false" data-nav="true"
                                 data-animin="fadeIn" data-animout="fadeOut">

                                {{--<div><img class="img-responsive" src="{{$package->picture1}}" alt="single"/></div>--}}
                                <div><img class="img-responsive" src="{{URL::asset($package->picture1)}}"
                                          alt="display is not available"/></div>
                                <div><img class="img-responsive" src="{{URL::asset($package->picture2)}}"
                                          alt="display is not available"/></div>
                                {{--<div><img class="img-responsive" src="images/elephant.jpg" alt="display not available"/></div>--}}
                                @if(($package->picture3)!=null)
                                    <div><img class="img-responsive" src="{{URL::asset($package->picture3)}}"
                                              alt="display is not available"/>
                                    </div>
                                @endif
                            </div>

                            <div class="row">


                                <div class="col-sm-12 col-md-12">
                                    <p class="post-title base-text-color"><a
                                                href="/packages/{{$package->id}}">{{$package->package_name}}</a></p>
                                    {{--</echo updated at {{$package->updated_at->toFormattedDateString()}}--}}
                                    <ul class="tags-list">
                                        <li><a href="#">place1</a></li>
                                        <li><a href="#">place2</a></li>
                                        <li><a href="#">place3</a></li>

                                    </ul>
                                    {{--<p class="blog-item"> {{(new \Carbon($package->updated_at))->toFormattedDateString()}}</p>--}}
                                    <p>
                                        {{$package->description}}
                                    </p>
                                    <hr>
                                    <hr>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="widget widget-comment">
                                            <h4 class="widget-title"><b>Recent Comments</b></h4>


                                            <div class="col-xs-12 col-md-12">
                                                @foreach($package->comments as $comment)
                                                    <article>
                                                        <span class="comment icon-comment">{{$comment->user->name}}</span>

                                                        <p>
                                                            {{$comment->created_at->diffForHumans()}}

                                                        </p>
                                                        <p style='color: #2ab27b'>
                                                            {{$comment->review}}
                                                        </p>
                                                    </article>
                                                @endforeach

                                            </div>
                                            <div class="col-xs-12 col-md-12">
                                                <form method="post" action="{{route('add_comment')}}">
                                                    {{csrf_field()}}
                                                    <span class="comment icon-comment">Add your comment</span>
                                                    <textarea type="text" placeholder="Type your comment here"
                                                    id="comment" name="comment"
                                                    required></textarea>
                                                    <input type="hidden" value="{{Auth::user()->id}}" id="user_id" name="user_id"/>
                                                    <input type="hidden" value="{{$package->id}}" id="package_id" name="package_id"/>
                                                    <input class="base-text-color" type="submit" value="Send"/>

                                                </form>
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </article>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="base-bg-color_light">
        <div class="col-xs-12 col-md-12">
            <form method="post" action="{{route('add_comment')}}">
                <label for="comment" class="col-md-4 control-label">Add your comment</label>
                                                    {{--<textarea type="text" placeholder="Type your comment here"--}}
                                                              {{--id="comment" name="comment"--}}
                                                              {{--required/>--}}
                <input class="base-text-color" type="submit" value="Send"/>

            </form>
        </div>
    </section>


@endsection