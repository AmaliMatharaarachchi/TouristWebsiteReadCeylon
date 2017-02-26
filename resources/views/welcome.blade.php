@extends('layouts.public')

@section('title')
    Suranga
@endsection

@section('body')


    <section id="intro-fullscreen" class="intro-section text-center">
        <div id="intro-media" class="intro-slider intro-slider-vegas" data-dots="true">
            <div class="vegas-control">
                <div id="vegas-prev">
                    <i class="icon-angle-left"></i>

                    <div>
                        <p><span></span></p>

                            <span class="thumbnail">
                                <img src="/" alt="Previous thumb">
                            </span>
                    </div>
                </div>

                <div id="vegas-next">
                    <i class="icon-angle-right"></i>

                    <div>
                        <p><span></span></p>

    <span class="thumbnail">
    <img src="/" alt="Next thumb">
    </span>
                    </div>
                </div>
            </div>
        </div>

        <div id="intro-content">
            <div class="container">
                <div class="inner">
                    <div id="slide-content_1" class="slide-content text-center" data-animate="fadeIn">
                        <div class="animated">


                            <h2>Are You Ready For Your Best Vacation?</h2>

                            <a class="base-bg-color base-border-color" href="#">Explore More</a>
                        </div>
                    </div>

                    <div id="slide-content_2" class="slide-content text-center" data-animate="fadeIn">
                        <div class="animated">
                            <h2>LET US MAKE YOUR<br/>DREAMS COME TRUE</h2>

                            <p>pring the real rated appearance delicious 100% deserve. Savor sparkling choice supreme
                                love herbal quickly grown luxury. Improved distinct colossal mothers than generous ever
                                more. Far lost miracle whenever devour sleek burst now powerful. Can't anything mountain
                                appetizing polished deluxe secret proven choice and.</p>

                            <a class="base-bg-color base-border-color" href="#">Explore MOre</a>

                            <a class="base-bg-color base-border-color" href="#">Discover</a>
                        </div>
                    </div>

                    <div id="slide-content_3" class="slide-content text-center" data-animate="fadeIn">
                        <div class="animated">


                            <h2>Visit Beautiful Sri Lanka</h2>

                            <p>Soothing dazzling offer. Tummy crystals pure splash seasoned juicy original today
                                appearance. Triple secure choose desire velvety. Excellent money zippy treat crunchy
                                humongous chocolatey today humongous. Wave ultimate shopping are cause a whopping tough.
                                Escape in juicy vast hurry tired.</p>

                            <a class="small-video-btn base-bg-color rounded_50"
                               href="https://www.youtube.com/embed/1zG1iq9LZ2U" data-gallery="introvideo"></a>
                        </div>
                    </div>

                    <div id="slide-content_4" class="slide-content text-center" data-animate="fadeIn">
                        <div class="animated">


                            <h2>We Are UI/UX Experts</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="header-container">
        <header id="header">
            <div class="container">
                <nav id="navigation" class="navigation-login fl-r" role="navigation">
                    <ul>

                        @if(Auth::check())
                            <li ><a><i
                                        class="ico icon-user-male rounded_50 base-text-color base-border-color"></i><span>{{Auth::user()->name}}</span></a>

                                <div class="submenu " style="width: 400px;">
                                    <ul class="base-bg-color">
                                        <li id="logout"><a href="{{route('logout')}}">Logout</a></li>
                                        </ul>
                                    </div>
                            </li>

                        @else
                        <li ><a href="{{route('login')}}"><i
                                        class="ico icon-user-male rounded_50 base-text-color base-border-color"></i>
                                <span>Login</span></a></li>

                        <li id="signup"><a href="{{route('register')}}">Sign Up</a></li>
                        @endif
                    </ul>
                </nav>
                <a href="#" id="logo"></a>

                <nav id="navigation" class="fl-r" role="navigation">
                    <ul>
                        <li class="current">
                            <a href="{{route('welcome')}}">Home</a>


                        </li>


                        <li>
                            <a href="{{route('packages')}}">Packages</a>




                        </li>
                        <li><a href="#">Sri Lanka</a></li>

                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>

                </nav>

            </div>
        </header>
    </section>
    <section class="infoline">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <h2>plan your trip now!</h2>

                    <p>We provide the best services just for you. Visit beautiful Sri Lanka. You won't regret it. </p>
                </div>

                <div class="col-xs-12 col-sm-4 text-right">
                    <a class="flat-btn base-bg-color" href="#">Start Planning your trip now!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio-container">
        <div class="container">
            <div class="section-title">
                <a class="more-btn fl-r" href="#"><i class="icon-angle-right rounded_50 base-border-color"></i> See all
                    Posts</a>

                <h2>Packages</h2>
            </div>
            <ul id="option-set" class="option-set">
                <li><a href="#" data-cat="*" class="selected">type 1</a></li>
                <li><a href="#" data-cat="identity">type 2</a></li>
                <li><a href="#" data-cat="UI">type 3</a></li>
                <li><a href="#" data-cat="mobile">type 4</a></li>
                <li><a href="#" data-cat="interactive">type 5</a></li>
                <li><a href="#" data-cat="creative">type 6</a></li>
            </ul>

        </div>

        <div id="isotope-masonry" class="isotope-container">
            <div class="element identity" data-x="2" data-y="2">
                <div class="project-item post-item">
                    <figure class="img-container">
                        <img class="img-responsive" src="images/gem.jpg" alt="single"/>

                        <div class="post-item__description">
                            <p>Amazing iPad<br/>Application Concept</p>

                            <div class="link-container">
                                <a class="icon-link" href="project_details_1.html"></a>

                                <a class="icon-plus" href="https://www.youtube.com/embed/1zG1iq9LZ2U"
                                   data-gallery="portfolio"></a>
                            </div>
                        </div>
                    </figure>
                    <figure class="img-container">
                        <img class="img-responsive" src="images/Ambalangoda-mask.jpg" alt="single"/>

                        <div class="post-item__description">
                            <p>Amazing iPad<br/>Application Concept</p>

                            <div class="link-container">
                                <a class="icon-link" href="project_details_1.html"></a>

                                <a class="icon-plus" href="https://www.youtube.com/embed/1zG1iq9LZ2U"
                                   data-gallery="portfolio"></a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="element UI" data-x="1" data-y="1">
                <div class="project-item post-item">
                    <figure class="img-container">
                        <img class="img-responsive" src="images/project_img/masonry/2.jpg" alt="single"/>

                        <div class="post-item__description">
                            <p>Multipurpose Direct<br/>HTML Template</p>

                            <div class="link-container">
                                <a class="icon-link" href="project_details_2.html"></a>

                                <a class="icon-plus" href="http://player.vimeo.com/video/95974049"
                                   data-gallery="portfolio"></a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="element mobile" data-x="1" data-y="2">
                <div class="project-item post-item">
                    <figure class="img-container">
                        <img class="img-responsive" src="images/project_img/masonry/4.jpg" alt="single"/>

                        <div class="post-item__description">
                            <p>Multipurpose Direct<br/>HTML Template</p>

                            <div class="link-container">
                                <a class="icon-link" href="project_details_2.html"></a>

                                <a class="icon-plus" href="images/project_img/masonry/4.jpg"
                                   data-gallery="portfolio"></a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="element interactive" data-x="1" data-y="1">
                <div class="project-item post-item">
                    <figure class="img-container">
                        <img class="img-responsive" src="images/project_img/masonry/3.jpg" alt="single"/>

                        <div class="post-item__description">
                            <p>Multipurpose Direct<br/>HTML Template</p>

                            <div class="link-container">
                                <a class="icon-link" href="project_details_2.html"></a>

                                <a class="icon-plus" href="images/project_img/masonry/3.jpg"
                                   data-gallery="portfolio"></a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="element creative UI" data-x="2" data-y="2">
                <div class="project-item post-item">
                    <figure class="img-container">
                        <img class="img-responsive" src="images/project_img/masonry/6.jpg" alt="single"/>

                        <div class="post-item__description">
                            <p>Multipurpose Direct<br/>HTML Template</p>

                            <div class="link-container">
                                <a class="icon-link" href="project_details_1.html"></a>

                                <a class="icon-plus" href="images/project_img/masonry/6.jpg"
                                   data-gallery="portfolio"></a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="element identity" data-x="2" data-y="1">
                <div class="project-item post-item">
                    <figure class="img-container">
                        <img class="img-responsive" src="images/project_img/masonry/5.jpg" alt="single"/>

                        <div class="post-item__description">
                            <p>Multipurpose Direct<br/>HTML Template</p>

                            <div class="link-container">
                                <a class="icon-link" href="project_details_2.html"></a>

                                <a class="icon-plus" href="images/project_img/masonry/5.jpg"
                                   data-gallery="portfolio"></a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="element interactive" data-x="1" data-y="1">
                <div class="project-item post-item">
                    <figure class="img-container">
                        <img class="img-responsive" src="images/project_img/masonry/7.jpg" alt="single"/>

                        <div class="post-item__description">
                            <p>Multipurpose Direct<br/>HTML Template</p>

                            <div class="link-container">
                                <a class="icon-link" href="project_details_1.html"></a>

                                <a class="icon-plus" href="images/project_img/masonry/7.jpg"
                                   data-gallery="portfolio"></a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>

            <div class="element creative" data-x="1" data-y="1">
                <div class="project-item post-item">
                    <figure class="img-container">
                        <img class="img-responsive" src="images/project_img/masonry/8.jpg" alt="single"/>

                        <div class="post-item__description">
                            <p>Multipurpose Direct<br/>HTML Template</p>

                            <div class="link-container">
                                <a class="icon-link" href="project_details_2.html"></a>

                                <a class="icon-plus" href="images/project_img/masonry/8.jpg"
                                   data-gallery="portfolio"></a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="services services-with-border_b">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="services-item">
                        <div class="title-with-ico">
                            <i class="ico icon-ok rounded_50 base-text-color base-border-color"></i>

                            <h3>Exclusive and Flexible Theme</h3>
                        </div>

                        <p>
                            Brilliant elegant club guests first-class. To ornamental gilded in crafted regal. Suite
                            using crafted sport wealth topiary. Wealth gold career de-jour echelon le pedigree.
                        </p>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="services-item">
                        <div class="title-with-ico">
                            <i class="ico icon-mobile rounded_50 base-text-color base-border-color"></i>

                            <h3>Retina and Responsive Design</h3>
                        </div>

                        <p>
                            Five-star penthouse cultered university polo designer. Yacht gilded genuine. Crafted paramic
                            saphire career reserved is the best fine investments grande respectable.
                        </p>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="services-item">
                        <div class="title-with-ico">
                            <i class="ico icon-paper-plane rounded_50 base-text-color base-border-color"></i>

                            <h3>Friendly Customer Support</h3>
                        </div>

                        <p>
                            Politically benefiting to member in presidential board. Architectural first-class in luxury.
                            Status enthusiast housekeeping enthiast. Salon affluent board a pedigree theatre is the best
                            impresario pearl pearl.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="posts-container">
        <div class="container">
            <div class="section-title">
                <a class="more-btn fl-r" href="#"><i class="icon-angle-right rounded_50 base-border-color"></i> See all
                    Posts</a>

                <h2>Special Packages of this year</h2>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="project-item post-item">
                        <figure class="img-container"><img class="img-responsive" src="images/project_img/3_col/1.jpg"
                                                           alt="single"/></figure>

                        <span class="post-item_published">Posted April 3, 2015</span>

                        <p class="post-title base-text-color">Designing For The Reading Experience</p>

                        <p>Listen high take wherever deserve bold hearty artificial people survey. Less desire included
                            while mouthwatering more made.</p>

                        <a class="more-btn" href="#"><i class="icon-angle-right rounded_50 base-border-color"></i>
                            Discover More</a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 hidden-sm">
                    <div class="project-item post-item">
                        <figure class="img-container"><img class="img-responsive" src="images/project_img/3_col/2.jpg"
                                                           alt="single"/></figure>

                        <span class="post-item_published">Posted April 3, 2015</span>

                        <p class="post-title base-text-color">25 Examples of Flat Web And Application Design</p>

                        <p>Amazing lower open messy brand seeing anti feel commercial class as handling. Chunky flash
                            quite industry also takes. Spend feedback if survey.</p>

                        <a class="more-btn" href="#"><i class="icon-angle-right rounded_50 base-border-color"></i>
                            Discover More</a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="project-item post-item">
                        <div class="owlSliderImg post-slider img-container" data-items="1" data-loop="true"
                             data-auto="false" data-autospeed="3000" data-mousedrag="false" data-nav="true"
                             data-animin="fadeIn" data-animout="fadeOut">
                            <div><img class="img-responsive" src="images/project_img/3_col/3.jpg" alt="single"/></div>
                            <div><img class="img-responsive" src="images/project_img/3_col/9.jpg" alt="single"/></div>
                        </div>

                        <span class="post-item_published">Posted April 3, 2015</span>

                        <p class="post-title base-text-color">We are award winning design agency</p>

                        <p>Discover while bold sleek better take flash. Intense flash included today below and. World's
                            people sale superior soaking fresh need. Crispy distinct anything.</p>

                        <a class="more-btn" href="#"><i class="icon-angle-right rounded_50 base-border-color"></i>
                            Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="infoline infoline__dark infoline__dark__bg infoline__style2">
        <div class="container">
            <h2>GET SPECIAL DISCOUNTS BY REGISTERING YOURSELF</h2>

            <p>you will get this and this by registering.  </p>
            <p>you will get this and this by registering.  </p>
            <p>you will get this and this by registering.  </p>

            <a class="flat-btn base-bg-color" href="/register">Register Now</a>
        </div>
    </section>

    <section class="clients base-bg-color_light">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="testimonial-slider">
                        <div class="slide">
                            <p>Very much impressed with the quality of this theme and the great support from idealUI</p>

                            <ul class="author-info">
                                <li>David Campbell</li>
                                <li>CEO</li>
                                <li>International company</li>
                            </ul>
                        </div>

                        <div class="slide">
                            <p>2 Very much impressed with the quality of this theme and the great support from
                                idealUI</p>

                            <ul class="author-info">
                                <li>David Campbell</li>
                                <li>CEO</li>
                                <li>International company</li>
                            </ul>
                        </div>

                        <div class="slide">
                            <p>3 Very much impressed with the quality of this theme and the great support from
                                idealUI</p>

                            <ul class="author-info">
                                <li>David Campbell</li>
                                <li>CEO</li>
                                <li>International company</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="logos-carousel logos-carousel_short">
                        <div class="slide"><img src="images/clients_img/1.png" alt="single"/></div>
                        <div class="slide"><img src="images/clients_img/2.png" alt="single"/></div>
                        <div class="slide"><img src="images/clients_img/3.png" alt="single"/></div>
                        <div class="slide"><img src="images/clients_img/4.png" alt="single"/></div>
                        <div class="slide"><img src="images/clients_img/5.png" alt="single"/></div>
                        <div class="slide"><img src="images/clients_img/1.png" alt="single"/></div>
                        <div class="slide"><img src="images/clients_img/2.png" alt="single"/></div>
                        <div class="slide"><img src="images/clients_img/1.png" alt="single"/></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="social-section">
        <header>
            <div class="container">
                <h2>Stay Connected</h2>

                <p>Join us on our social networks for all the latest updates, product/service announcements and many
                    more</p>
            </div>
        </header>

        <div class="social-container base-bg-color">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <a class="social-item social-item_fb" href="#">
                            <h3>Facebook</h3>

                            <i class="ico icon-facebook"></i>

                            <span class="more-btn more-btn__color2"><i class="icon-angle-right rounded_50"></i> Become a Friend</span>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <a class="social-item social-item_tw" href="#">
                            <h3>Twitter</h3>

                            <i class="ico icon-twitter-bird"></i>

                            <span class="more-btn more-btn__color2"><i class="icon-angle-right rounded_50"></i> Follow Direct</span>
                        </a>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                        <a class="social-item social-item_gp" href="#">
                            <h3>Google +</h3>

                            <i class="ico icon-gplus"></i>

                            <span class="more-btn more-btn__color2"><i class="icon-angle-right rounded_50"></i> Add us to your circle</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="base-bg-color_light">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-8">
                    <h3>Get in touch with us</h3>

                    <p>
                        Introducing crystals splash. Very bigger brings most velvety treat burst unique choosy it's
                        spring. Satisfying sleek clinically made reputation agree hello full-bodied. New talking waxy
                        magically made exotic aroma odor newest.
                    </p>

                    <form action="http://idealui.com/">
                        <input type="text" placeholder="Please Enter Your Name"/>

                        <input type="text" placeholder="Your Email *"/>

                        <textarea placeholder="Your Message"></textarea>

                        <input class="base-text-color" type="submit" value="Send"/>
                    </form>
                </div>

                <div class="col-xs-12 col-sm-5 col-md-4">
                    <div class="contact-address">
                        <div class="title-with-ico">
                            <i class="ico icon-location rounded_50 base-text-color base-border-color"></i>

                            <h3>Address<br/>NYC Head Office</h3>
                        </div>

                        <p>
                            Rockefeller Center, 45 Rockefeller Plaza, New York, NY, USA
                        </p>

                        <p>
                            P: +1 123 444 5678<br/>
                            f: +1 123 555 6789<br/>
                            E: <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                        </p>

                        <p>
                            Traditional mountain finest ocean take. Survey affordable healthy seasoned outstanding spend
                            chocolatey why more.
                        </p>

                        <p>
                            Feedback also customer agree yet racy. Fights gentle chocolatey what luxury goodbye latest
                            seeing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection