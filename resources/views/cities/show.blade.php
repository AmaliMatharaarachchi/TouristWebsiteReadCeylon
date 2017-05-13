{{--this is the package page where a specific package details and comments are shown--}}
@extends('layouts.master')

@section('title')
    {{$package->name}}
@endsection

@section('body')



    {{--<section id="content-container">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}

                {{--<div class="col-xs-12 col-sm-7 col-md-12">--}}
                    {{--<div>--}}
                        {{--<article class="blog-item post-item">--}}
                            {{--<div class="owlSliderImg post-slider img-container" data-items="1" data-loop="true"--}}
                            {{--data-auto="false" data-autospeed="3000" data-mousedrag="false" data-nav="true"--}}
                            {{--data-animin="fadeIn" data-animout="fadeOut">--}}

                            {{--<div><img class="img-responsive" src="{{$package->picture1}}" alt="single"/></div>--}}
                            {{--<div><img class="img-responsive" src="{{URL::asset($package->picture1)}}"--}}
                            {{--alt="display is not available"/></div>--}}
                            {{--<div><img class="img-responsive" src="{{URL::asset($package->picture2)}}"--}}
                            {{--alt="display is not available"/></div>--}}
                            {{--<div><img class="img-responsive" src="images/elephant.jpg" alt="display not available"/></div>--}}
                            {{--@if(($package->picture3)!=null)--}}
                            {{--<div><img class="img-responsive" src="{{URL::asset($package->picture3)}}"--}}
                            {{--alt="display is not available"/>--}}
                            {{--</div>--}}
                            {{--@endif--}}
                            {{--</div>--}}

                            {{--<div class="row">--}}


                                {{--<div class="col-sm-12 col-md-12">--}}
                                    {{--<p class="post-title base-text-color"><a--}}
                                                {{--href="/packages/{{$package->id}}">{{$package->name}}</a></p>--}}
                                    {{--</echo updated at {{$package->updated_at->toFormattedDateString()}}--}}
                                    {{--<ul class="tags-list">--}}
                                    {{--<li><a href="#">place1</a></li>--}}
                                    {{--<li><a href="#">place2</a></li>--}}
                                    {{--<li><a href="#">place3</a></li>--}}

                                    {{--</ul>--}}
                                    {{--<p class="blog-item"> {{(new \Carbon($package->updated_at))->toFormattedDateString()}}</p>--}}
                                    {{--<p>--}}
                                        {{--{{$package->description}}--}}
                                    {{--</p>--}}
                                    {{--<hr>--}}
                                    {{--<hr>--}}
                                    {{--<div class="col-xs-12 col-md-12">--}}
                                        {{--<div class="widget widget-comment">--}}
                                            {{--@if(sizeof($package->comments)>0)--}}
                                                {{--<h4 class="widget-title"><b>Recent Comments</b></h4>--}}
                                            {{--@else--}}
                                                {{--<h4 class="widget-title"><b>No Comments have been posted yet</b></h4>--}}
                                            {{--@endif--}}
                                            {{--<div class="col-xs-12 col-md-12">--}}
                                                {{--@foreach($package->comments as $comment)--}}
                                                    {{--<article>--}}
                                                        {{--<span class="comment icon-comment">{{$comment->user->name}}</span>--}}

                                                        {{--<p>--}}
                                                            {{--{{$comment->created_at->diffForHumans()}}--}}

                                                        {{--</p>--}}
                                                        {{--<p style='color: #2ab27b'>--}}
                                                            {{--{{$comment->review}}--}}
                                                        {{--</p>--}}
                                                    {{--</article>--}}
                                                {{--@endforeach--}}

                                            {{--</div>--}}
                                            {{--@if(Auth::check())--}}
                                                {{--<div class="col-xs-12 col-md-12">--}}
                                                    {{--@if ($errors->has('review'))--}}
                                                        {{--<div class="alert alert-danger">--}}
                                                            {{--<span class="help-block">--}}
                                                                {{--<strong>--}}
                                                                    {{--'You have to type a non empty comment here'--}}
                                                                {{--</strong>--}}
                                                             {{--</span>--}}
                                                        {{--</div>--}}

                                                    {{--@endif--}}
                                                    {{--<form method="post" action="{{route('add_comment')}}">--}}
                                                        {{--{{csrf_field()}}--}}

                                                        {{--<span class="comment icon-comment">Add your comment</span>--}}
                                                    {{--<textarea type="text" id="review" name="review"--}}
                                                    {{--></textarea>--}}

                                                        {{--<input type="hidden" value="{{Auth::user()->id}}" id="user_id"--}}
                                                        {{--name="user_id"/>--}}
                                                        {{--<input type="hidden" value="{{$package->id}}" id="package_id"--}}
                                                               {{--name="package_id"/>--}}
                                                        {{--<input class="base-text-color" type="submit" value="Send"/>--}}

                                                    {{--</form>--}}
                                                {{--</div>--}}
                                            {{--@endif--}}


                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</article>--}}

                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}



@endsection