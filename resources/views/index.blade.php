{{--this is the home page customized for every user--}}
{{--@extends('layouts.master')--}}

{{--@section('title')--}}
    {{--ReadCeylon--}}
{{--@endsection--}}

{{--@section('body')--}}


    {{--<div id="fh5co-container">--}}
        {{--<div id="fh5co-home" class="js-fullheight" data-section="home">--}}

            {{--<div class="flexslider">--}}

                {{--<div class="fh5co-overlay"></div>--}}
                {{--<div class="fh5co-text">--}}
                    {{--<div class="container">--}}
                        {{--<div class="row">--}}
                            {{--<h2 class="to-animate">Read Ceylon</h2>--}}
                            {{--<br>--}}
                            {{--<h2 class="to-animate"><span>Travel with us</span></h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<ul class="slides">--}}
                    {{--<li style="background-image: url(images/beach.jpg);" data-stellar-background-ratio="0.5"></li>--}}
                    {{--<li style="background-image: url(images/gem.jpg);" data-stellar-background-ratio="0.5"></li>--}}
                    {{--<li style="background-image: url(images/hotel.jpg);" data-stellar-background-ratio="0.5"></li>--}}
                    {{--<li style="background-image: url(images/train.jpg);" data-stellar-background-ratio="0.5"></li>--}}
                    {{--<li style="background-image: url(images/srilanka-1.jpg);" data-stellar-background-ratio="0.5"></li>--}}
                {{--</ul>--}}

            {{--</div>--}}

        {{--</div>--}}


        {{--<div class="js-sticky">--}}
            {{--<div class="fh5co-main-nav">--}}
                {{--<div class="container-fluid">--}}
                    {{--<div class="fh5co-menu-1">--}}
                        {{--<a href="#" data-nav-section="home">Home</a>--}}
                        {{--<a href="#" data-nav-section="tours">Tours</a>--}}
                        {{--<a href="#" data-nav-section="about">About Sri Lanka</a>--}}


                    {{--</div>--}}
                    {{--<div class="fh5co-logo">--}}
                        {{--<a href="#">ReadCeylon</a>--}}
                    {{--</div>--}}
                    {{--<div class="fh5co-menu-2">--}}
                        {{--<a href="#" data-nav-section="sri_lanka">Cities</a>--}}


                        {{--@if((Auth::check()))--}}
                            {{--@if(Auth::user()->type=='A')--}}
                                {{--<a href="#" data-nav-section="events">notifications()</a>--}}
                                {{--<a href="#" data-nav-section="login">Logout/Register-Admin</a>--}}

                            {{--@else--}}
                                {{--<a href="#" data-nav-section="events">messages</a>--}}
                                {{--<a href="#" data-nav-section="login">Logout</a>--}}

                            {{--@endif--}}

                        {{--@else--}}
                            {{--<a href="#" data-nav-section="events">contact Us</a>--}}
                            {{--<a href="#" data-nav-section="login">Login/Register</a>--}}
                        {{--@endif--}}
                    {{--</div>--}}


                {{--</div>--}}
            {{--</div>--}}


        {{--</div>--}}


    {{--</div>--}}

    {{--<div id="fh5co-about" data-section="about">--}}
        {{--<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/srilanka-1.jpg)"></div>--}}
        {{--<div class="fh5co-2col fh5co-text">--}}
            {{--<h2 class="heading to-animate">About Sri Lanka</h2>--}}
            {{--<p class="to-animate"><span class="firstcharacter">S</span>ri Lanka is a beautiful country. far far--}}
                {{--away, behind the word mountains, far--}}
                {{--from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in--}}
                {{--Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the--}}
                {{--word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small--}}
                {{--river named Duden flows by their place and supplies it with the necessary regelialia. It is a--}}
                {{--paradisematic country, in which roasted parts of sentences fly into your mouth. Even the--}}
                {{--all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div id="fh5co-sayings">--}}
        {{--<div class="container">--}}
            {{--<div class="row to-animate">--}}

                {{--<div class="flexslider">--}}
                    {{--<ul class="slides">--}}
                        {{--@foreach($reviews as $review)--}}
                            {{--@if($review->state=='A')--}}
                                {{--<li>--}}
                                    {{--<blockquote>--}}
                                        {{--<p>&ldquo;{{$review->review}}&rdquo;</p>--}}
                                        {{--<p class="quote-author">&mdash; {{$review->user->name}}</p>--}}
                                    {{--</blockquote>--}}
                                {{--</li>--}}
                            {{--@endif--}}
                        {{--@endforeach--}}


                    {{--</ul>--}}
                {{--</div>--}}


            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--@if(Auth::check())--}}
        {{--@if(Auth::user()->type=='U')--}}
            {{--<div class="container">--}}
                {{--<div class="col-md-6 right">--}}
                    {{--<form METHOD="post" action="{{route('user_review')}}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="review" class="control-label">Tell us about your experience</label>--}}


                                {{--<textarea id="review" type="review" class="form-control" name="review"--}}
                                          {{--required></textarea>--}}


                        {{--</div>--}}


                        {{--<input class="btn-primary base-text-color " type="submit" value="Add review"/>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<br>--}}
            {{--<br>--}}
        {{--@endif--}}
    {{--@endif--}}
    {{--<div id="fh5co-featured" data-section="tours">--}}
        {{--<div class="container">--}}
            {{--<div class="row text-center fh5co-heading row-padded">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<h2 class="heading to-animate">Special tour packages</h2>--}}
                    {{--<p class="sub-heading to-animate">These are our special tour packages. they are designed just--}}
                        {{--for you!</p>--}}
                {{--</div>--}}
            {{--</div>--}}


            {{--<div class="row">--}}

                {{--<div class="fh5co-grid">--}}
                    {{--@foreach($packages as $package)--}}

                        {{--<div class="fh5co-v-half to-animate-2">--}}
                            {{--@foreach($package->has_city as $k=> $c)--}}
                                {{--@if($k==0)--}}
                                    {{--@foreach($c->city->has_image as $key=>$i)--}}
                                        {{--@if($key==0)--}}
                                            {{--<div class="fh5co-v-col-2 fh5co-bg-img"--}}
                                                 {{--style="background-image: url('img/{{$i->image->url}}')"></div>--}}
                                        {{--@endif--}}
                                    {{--@endforeach--}}
                                {{--@endif--}}
                            {{--@endforeach--}}
                            {{--<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">--}}
                                {{--<h1 style="color: #1b6d85"><b>{{$package->name}}</b></h1>--}}
                                {{--<span class="pricing">Price : ${{$package->price}} For {{$package->days}}days</span>--}}
                                {{--<p>--}}
                                    {{--@foreach($package->has_city as $c)--}}
                                        {{--<a href="/cities/{{$c->city->name}}">{{$c->city->name}}</a>--}}
                                {{--@endforeach--}}
                                {{--<div class="your-div"><span>{{$package->description}}</span></div>--}}
                                {{--</p>--}}
                                {{--<p><a href="/packages/{{$package->name}}">more...</a></p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--@endforeach--}}


                {{--</div>--}}
            {{--</div>--}}

            {{--<br>--}}

            {{--@if(Auth::check())--}}
                {{--@if(Auth::user()->type=='U')--}}
                    {{--<p class="text-center to-animate"><a href="{{route('packages')}}"--}}
                                                         {{--class="btn btn-primary btn-outline">View/Customize Tour</a></p>--}}
                {{--@else--}}
                    {{--<p class="text-center to-animate"><a href="{{route('packages')}}"--}}
                                                         {{--class="btn btn-primary btn-outline">View/Create--}}
                            {{--Tour</a></p>--}}
                {{--@endif--}}
            {{--@else--}}
                {{--<p class="text-center to-animate"><a href="{{route('packages')}}" class="btn btn-primary btn-outline">View--}}
                        {{--All Tours</a></p>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}



    {{--<div id="fh5co-menus" data-section="sri_lanka">--}}
        {{--<div class="container">--}}
            {{--<div class="row text-center fh5co-heading row-padded">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<h2 class="heading to-animate">Sri Lanka</h2>--}}
                    {{--<p class="sub-heading to-animate">Breath-taking places in sri lanka.--}}
                        {{--You can visit as much as you like. We will assure you the best vacation.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row row-padded">--}}
                {{--<div class="row">--}}
                    {{--<div class="fh5co-food-menu to-animate-2">--}}
                        {{--<h2 class="fh5co-drinks">Cities</h2>--}}
                        {{--<ul>--}}
                            {{--@foreach($cities as $city)--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<li>--}}
                                        {{--<div class="fh5co-food-desc">--}}
                                            {{--<figure>--}}
                                                {{--@foreach($city->has_image as $key=> $i)--}}
                                                    {{--@if($key==0)--}}
                                                        {{--<img src="img\{{$i->image->url}}" class="img-responsive"--}}
                                                             {{--alt="not available">--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                            {{--</figure>--}}
                                            {{--<div>--}}
                                                {{--<h2><a href="/cities/{{$city->name}}">{{$city->name}}</a></h2>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</li>--}}
                                {{--</div>--}}

                            {{--@endforeach--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}


            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4 col-md-offset-4 text-center to-animate-2">--}}

                    {{--@if(Auth::check())--}}
                        {{--@if(Auth::user()->type=='A')--}}
                            {{--<p><a href="{{route('cities')}}" class="btn btn-primary btn-outline">View/Update</a></p>--}}
                        {{--@else--}}
                            {{--<p><a href="{{route('cities')}}" class="btn btn-primary btn-outline">Create your own--}}
                                    {{--tour</a></p>--}}

                        {{--@endif--}}
                    {{--@else--}}
                        {{--<p><a href="{{route('cities')}}" class="btn btn-primary btn-outline">Create your own tour</a>--}}
                        {{--</p>--}}

                    {{--@endif--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    {{--<div id="fh5co-events" data-section="events" style="background-image: url(images/wave.jpg);"--}}
         {{--data-stellar-background-ratio="0.5">--}}
        {{--<div class="container">--}}
            {{--<div class="row text-center fh5co-heading row-padded">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<h2 class="heading to-animate">--}}
                        {{--@if(Auth::check())--}}
                            {{--@if(Auth::user()->type=='A')--}}

                                {{--Notifications--}}
                            {{--@else--}}
                                {{--Contact Us--}}
                            {{--@endif--}}

                        {{--@else--}}
                            {{--Contact Us--}}

                        {{--@endif--}}
                    {{--</h2>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6 to-animate-2">--}}
                    {{--<h3>Contact Info</h3>--}}
                    {{--<ul class="fh5co-contact-info">--}}
                        {{--<li class="fh5co-contact-address ">--}}
                            {{--<i class="icon-home"></i>--}}
                            {{--University of Moratuwa <br>Sri Lanka--}}
                        {{--</li>--}}
                        {{--<li><i class="icon-phone"></i> 071-9321861</li>--}}
                        {{--<li><i class="icon-envelope"></i>almas.den.sw@gmail.com</li>--}}
                        {{--<li><i class="icon-globe"></i> <a href="http://www.google.com"--}}
                                                          {{--target="_blank">google.com</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 to-animate-2">--}}

                    {{--@if((Auth::check()))--}}
                        {{--@if((Auth::user()->type=='U'))--}}

                            {{--<form METHOD="post" action="{{route('user_message')}}">--}}
                                {{--{{ csrf_field() }}--}}

                                {{--<div class="form-group">--}}
                                    {{--<label for="message" class="control-label">your message*</label>--}}


                                {{--<textarea id="message" type="message" class="form-control" name="message"--}}
                                          {{--required></textarea>--}}


                                {{--</div>--}}


                                {{--<input class="base-text-color" type="submit" value="send message"/>--}}
                            {{--</form>--}}
                        {{--@else--}}
                            {{--<form METHOD="post" action="{{route('admin_message')}}">--}}
                                {{--{{ csrf_field() }}--}}

                                {{--<div class="form-group">--}}
                                    {{--<label for="message" class="control-label">your message*</label>--}}


                                {{--<textarea id="message" type="message" class="form-control" name="message"--}}
                                          {{--required></textarea>--}}


                                {{--</div>--}}


                                {{--<input class="base-text-color" type="submit" value="send message to All users"/>--}}
                            {{--</form>--}}
                            {{--<h1><a href="{{route('reviews')}}" class="btn btn-danger btn-outline"--}}
                                   {{--style="color: black"><b>Add / Remove reviews</b></a></h1>--}}


                        {{--@endif--}}
                    {{--@else--}}
                        {{--<form METHOD="post" action="{{route('public_message')}}">--}}
                            {{--{{ csrf_field() }}--}}

                            {{--<div class="form-group">--}}

                                {{--<label for="name" class="control-label">Your name*</label>--}}


                                {{--<input id="name" type="text" name="name" class="form-control"--}}
                                       {{--required/>--}}


                            {{--</div>--}}
                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                {{--<label for="email" class="control-label">E-Mail Address*</label>--}}


                                {{--<input id="email" type="email" name="email" class="form-control"--}}
                                       {{--value="{{ old('email') }}" required/>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                    {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}

                            {{--</div>--}}


                            {{--<div class="form-group">--}}
                                {{--<label for="message" class="control-label">your message*</label>--}}


                                {{--<textarea id="message" type="message" class="form-control" name="message"--}}
                                          {{--required></textarea>--}}


                            {{--</div>--}}


                            {{--<input class="base-text-color" type="submit" value="send message"/>--}}
                        {{--</form>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--@if(Auth::check())--}}
            {{--@if(Auth::user()->type!='A')--}}
            {{--<p class="text-center to-animate"><a href="{{route('messages')}}" class="btn btn-outline">View--}}
            {{--all Messages</a></p>--}}
            {{--@endif--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}


    {{--<div id="fh5co-contact" data-section="login">--}}
        {{--<div class="container">--}}
            {{--@if((Auth::check()))--}}
                {{--@if(Auth::user()->type=='A')--}}
                    {{--<label>Register new admin</label>--}}
                    {{--<p class="text-center to-animate"><a href="/admin-register" class="btn btn-primary btn-outline">--}}
                            {{--REGISTER</a></p>--}}
                {{--@endif--}}
                {{--<label>Are you sure to logout?</label>--}}
                {{--<p class="text-center to-animate"><a href="{{route('logout')}}" class="btn btn-primary btn-outline">--}}
                        {{--LOGOUT</a></p>--}}
            {{--@else--}}
                {{--<div class="row text-center fh5co-heading row-padded">--}}
                    {{--<div class="col-md-8 col-md-offset-2">--}}
                        {{--<h2 class="heading to-animate">Join us today</h2>--}}
                        {{--<p class="sub-heading to-animate">You will be given special discounts and treatments</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-6 to-animate-2">--}}
                        {{--<h3>Log In</h3>--}}
                        {{--@include('layouts.login')--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 to-animate-2">--}}
                        {{--<h3>Register Now</h3>--}}
                        {{--@include('layouts.register')--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div id="fh5co-type" style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5">--}}
        {{--<div class="fh5co-overlay"></div>--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 to-animate">--}}
                    {{--<div class="fh5co-type">--}}
                        {{--<h3 class="with-icon icon-1">Useful links</h3>--}}
                        {{--<div class="col-md-4">--}}
                            {{--<p>--}}
                            {{--<ul >--}}
                                {{--<li class=""><a class="view-all" href="http://www.immigration.gov.lk/"--}}
                                                {{--title="Department of Immigration" target="_blank">Department of--}}
                                        {{--Immigration</a></li>--}}
                                {{--<li class=""><a class="view-all"--}}
                                                {{--href="http://srilanka.travel/index.php?route=common/home"--}}
                                                {{--title="Sri Lanka Tourism" target="_blank">Sri Lanka Tourism</a></li>--}}
                                {{--<li class=""><a class="view-all"--}}
                                                {{--href="http://www.eta.gov.lk/slvisa/visainfo/weta.jsp?locale=en_US&ch1=current"--}}
                                                {{--title="Electronic Travel Authorization" target="_blank">Electronic--}}
                                        {{--Travel Authorization</a></li>--}}
                                {{--<li class=""><a class="view-all" href="http://www.sltda.lk/embassies_in_sri_lanka"--}}
                                                {{--title="Sri Lankan Embassies" target="_blank">Sri Lankan Embassies</a>--}}
                                {{--</li>--}}
                                {{--<li class=""><a class="view-all" href="http://www.dwc.gov.lk/index.php/en/"--}}
                                                {{--title="Department of Wildlife" target="_blank">Department of--}}
                                        {{--Wildlife</a></li>--}}
                                {{--</ul>--}}
                            {{--</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4">--}}
                            {{--<p>--}}
                            {{--<ul>--}}
                            {{--<li class=""><a class="view-all" href="http://www.sltb.lk/home.php "--}}
                                            {{--title="Sri Lanka Transport Board" target="_blank">Sri Lanka Transport--}}
                                    {{--Board</a></li>--}}
                            {{--<li class=""><a class="view-all" href="http://www.police.lk/" title="Sri lanka Police"--}}
                                            {{--target="_blank">Sri Lanka Police</a></li>--}}
                            {{--<li class=""><a class="view-all" href="http://www.motortraffic.gov.lk/"--}}
                                            {{--title="Department of Motor Traffic" target="_blank">Department of Motor--}}
                                    {{--Traffic</a></li>--}}
                            {{--<li class=""><a class="view-all" href="http://www.airport.lk/"--}}
                                            {{--title="Airport & Aviation Services" target="_blank">Airport & Aviation--}}
                                    {{--Services</a></li>--}}
{{--</ul>--}}

                            {{--</p>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4">--}}
                            {{--<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FHelanka-Vacations-Pvt-Limited%2F140407856031952&amp;width&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" style="border:none; overflow:hidden;" allowtransparency="true" class="fb-like-wrapper" frameborder="0" scrolling="no"></iframe>--}}

                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 to-animate">--}}
                {{--<div class="fh5co-type">--}}
                {{--<h3 class="with-icon icon-2">Sea food</h3>--}}
                {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,--}}
                {{--there live the blind texts.</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 to-animate">--}}
                {{--<div class="fh5co-type">--}}
                {{--<h3 class="with-icon icon-3">Vegetables</h3>--}}
                {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,--}}
                {{--there live the blind texts.</p>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 to-animate">--}}
                {{--<div class="fh5co-type">--}}
                {{--<h3 class="with-icon icon-4">Meat</h3>--}}
                {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,--}}
                {{--there live the blind texts.</p>--}}
                {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div id="fh5co-footer">--}}
        {{--<div class="row">--}}
            {{--<div class="container">--}}
                {{--<div class="row row-padded">--}}
                    {{--<div class="col-md-12 text-center">--}}
                        {{--<p class="to-animate">&copy; 2017 ReadCeylon travels . <br>--}}
                        {{--<p>Website Design, Development & Hosting by Almas-Den<br>--}}
                            {{--contact us: almas.den.sw@gmail.com--}}
                        {{--</p>--}}
                        {{--<p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--@endsection--}}

{{--@section('body_js')--}}

    {{--<script type="text/javascript">// <![CDATA[--}}
        {{--$(function () {--}}
            {{--$(".your-div").each(function (i) {--}}
                {{--len = $(this).text().length;--}}
                {{--if (len > 80) {--}}
                    {{--$(this).text($(this).text().substr(0, 200) + '...');--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
        {{--// ]]></script>--}}

{{--@endsection--}}
