{{--this is the home page customized for every user--}}
@extends('layouts.master')

@section('title')
    ReadCeylon
@endsection

@section('body')


    <div id="fh5co-container">
        <div id="fh5co-home" class="js-fullheight" data-section="home">

            <div class="flexslider">

                <div class="fh5co-overlay"></div>
                <div class="fh5co-text">
                    <div class="container">
                        <div class="row">
                            <h2 class="to-animate">Read Ceylon</h2>
                            <br>
                            <h2 class="to-animate"><span>Travel with us</span></h2>
                        </div>
                    </div>
                </div>
                <ul class="slides">
                    <li style="background-image: url(images/beach.jpg);" data-stellar-background-ratio="0.5"></li>
                    <li style="background-image: url(images/gem.jpg);" data-stellar-background-ratio="0.5"></li>
                    <li style="background-image: url(images/hotel.jpg);" data-stellar-background-ratio="0.5"></li>
                    <li style="background-image: url(images/train.jpg);" data-stellar-background-ratio="0.5"></li>
                    <li style="background-image: url(images/srilanka-1.jpg);" data-stellar-background-ratio="0.5"></li>
                </ul>

            </div>

        </div>


        <div class="js-sticky">
            <div class="fh5co-main-nav">
                <div class="container-fluid">
                    <div class="fh5co-menu-1">
                        <a href="#" data-nav-section="home">Home</a>
                        <a href="#" data-nav-section="tours">Tours</a>
                        <a href="#" data-nav-section="about">About Sri Lanka</a>


                    </div>
                    <div class="fh5co-logo">
                        <a href="#">ReadCeylon</a>
                    </div>
                    <div class="fh5co-menu-2">
                        <a href="#" data-nav-section="sri_lanka">Sri Lanka</a>

                        @if((Auth::check()))
                            <a href="#" data-nav-section="login">Logout/Register-Admin</a>
                        @else
                            <a href="#" data-nav-section="events">Contact us</a>
                            <a href="#" data-nav-section="login">Login/Register</a>
                        @endif
                    </div>


                </div>
            </div>


        </div>


    </div>

    <div id="fh5co-about" data-section="about">
        <div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/res_img_1.jpg)"></div>
        <div class="fh5co-2col fh5co-text">
            <h2 class="heading to-animate">About Sri Lanka</h2>
            <p class="to-animate"><span class="firstcharacter">S</span>ri Lanka is a beautiful country. far far
                away, behind the word mountains, far
                from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the
                word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small
                river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                paradisematic country, in which roasted parts of sentences fly into your mouth. Even the
                all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
        </div>
    </div>

    <div id="fh5co-sayings">
        <div class="container">
            <div class="row to-animate">

                <div class="flexslider">
                    <ul class="slides">
                        @foreach($reviews as $review)
                            <li>
                                <blockquote>
                                    <p>&ldquo;{{$review->review}}&rdquo;</p>
                                    <p class="quote-author">&mdash; {{$review->user->name}}</p>
                                </blockquote>
                            </li>

                        @endforeach

                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div id="fh5co-featured" data-section="tours">
        <div class="container">
            <div class="row text-center fh5co-heading row-padded">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="heading to-animate">Special tour packages</h2>
                    <p class="sub-heading to-animate">These are our special tour packages. they are designed just
                        for you!</p>
                </div>
            </div>


            <div class="row">

                <div class="fh5co-grid">
                    @foreach($packages as $key => $package)

                        <div class="fh5co-v-half to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img"
                                 style="background-image: url(images/res_img_1.jpg)"></div>
                            <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                                <h2>{{$package->name}}</h2>
                                <span class="pricing">${{$package->price}}</span>
                                <p>
                                <div class="your-div"><span>{{$package->description}}</span></div>
                                </p>
                                <p><a href="#">more...</a></p>
                            </div>
                        </div>

                    @endforeach


                </div>
            </div>

            <br>

            @if(Auth::check())
                <p class="text-center to-animate"><a href="{{route('packages')}}" class="btn btn-primary btn-outline">View/Create
                        Tour</a></p>
            @else
                <p class="text-center to-animate"><a href="{{route('packages')}}" class="btn btn-primary btn-outline">View
                        All Tours</a></p>
            @endif
        </div>
    </div>

    <div id="fh5co-type" style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="fh5co-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 to-animate">
                    <div class="fh5co-type">
                        <h3 class="with-icon icon-1">Fruits</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-3 to-animate">
                    <div class="fh5co-type">
                        <h3 class="with-icon icon-2">Sea food</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-3 to-animate">
                    <div class="fh5co-type">
                        <h3 class="with-icon icon-3">Vegetables</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
                <div class="col-md-3 to-animate">
                    <div class="fh5co-type">
                        <h3 class="with-icon icon-4">Meat</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-menus" data-section="sri_lanka">
        <div class="container">
            <div class="row text-center fh5co-heading row-padded">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="heading to-animate">Sri Lanka</h2>
                    <p class="sub-heading to-animate">Breath-taking places in sri lanka.
                        You can visit as much as you like. We will assure you the best vacation.</p>
                </div>
            </div>
            <div class="row row-padded">
                <div class="row">
                    <div class="fh5co-food-menu to-animate-2">
                        <h2 class="fh5co-drinks">Cities</h2>
                        <ul>
                            @foreach($cities as $city)
                                <div class="col-md-6">
                                    <li>
                                        <div class="fh5co-food-desc">
                                            <figure>
                                                <img src="images/res_img_5.jpg" class="img-responsive"
                                                     alt="not available">
                                            </figure>
                                            <div>
                                                <h3>{{$city->name}}</h3>
                                                <p>{{$city->description}}</p>
                                            </div>
                                        </div>

                                    </li>
                                </div>

                            @endforeach
                        </ul>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center to-animate-2">
                    <p><a href="#" class="btn btn-primary btn-outline">More about Sri lanka</a></p>
                </div>
            </div>
        </div>
    </div>

    @if(Auth::check())

    @else
        <div id="fh5co-events" data-section="events" style="background-image: url(images/slide_2.jpg);"
             data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row text-center fh5co-heading row-padded">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading to-animate">Contact us</h2>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 to-animate-2">
                        <h3>Contact Info</h3>
                        <ul class="fh5co-contact-info">
                            <li class="fh5co-contact-address ">
                                <i class="icon-home"></i>
                                5555 Love Paradise 56 New Clity 5655, <br>Excel Tower United Kingdom
                            </li>
                            <li><i class="icon-phone"></i> (123) 465-6789</li>
                            <li><i class="icon-envelope"></i>info@freehtml5.co</li>
                            <li><i class="icon-globe"></i> <a href="http://freehtml5.co/"
                                                              target="_blank">freehtml5.co</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 to-animate-2">
                        <h3>Reservation Form</h3>
                        <form METHOD="post" action="#">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class="control-label">Your name*</label>


                                <input id="name" type="text" name="name" class="form-control"
                                       required/>


                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">E-Mail Address*</label>


                                <input id="email" type="email" name="email" class="form-control"
                                       value="{{ old('email') }}" required/>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-group">
                                <label for="message" class="control-label">your message*</label>


                                <textarea id="message" type="message" class="form-control" name="message"
                                          required></textarea>


                            </div>


                            <input class="base-text-color" type="submit" value="send message"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div id="fh5co-contact" data-section="login">
        <div class="container">
            @if((Auth::check()))
                <label>Register new admin</label>
                <p class="text-center to-animate"><a href="/admin_register" class="btn btn-primary btn-outline">
                        REGISTER</a></p>

                <label>Are you sure to logout?</label>
                <p class="text-center to-animate"><a href="{{route('logout')}}" class="btn btn-primary btn-outline">
                        LOGOUT</a></p>
            @else
                <div class="row text-center fh5co-heading row-padded">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading to-animate">Join us today</h2>
                        <p class="sub-heading to-animate">You will be given special discounts and treatments</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 to-animate-2">
                        <h3>Log In</h3>
                        @include('layouts.login')
                    </div>
                    <div class="col-md-6 to-animate-2">
                        <h3>Register Now</h3>
                        @include('layouts.register')
                    </div>

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
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="fh5co-social">
                            <li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
                            <li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
                            <li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('body_js')

    <script type="text/javascript">// <![CDATA[
        $(function () {
            $(".your-div").each(function (i) {
                len = $(this).text().length;
                if (len > 80) {
                    $(this).text($(this).text().substr(0, 200) + '...');
                }
            });
        });
        // ]]></script>

@endsection
