@extends('layouts.public')

@section('title')
    Suranga Packages
@endsection

@section('body')
    <section id="header-container">
        <header id="header">
            <div class="container">
                <nav id="navigation" class="navigation-login fl-r" role="navigation">
                    <ul>
                        <li><a href="#"><i
                                        class="ico icon-user-male rounded_50 base-text-color base-border-color"></i>
                                <span>Login</span></a></li>

                        <li id="signup"><a href="#">Sign Up</a></li>
                    </ul>
                </nav>
                <a href="#" id="logo"></a>

                <nav id="navigation" class="fl-r" role="navigation">
                    <ul>
                        <li>

                            <a href="{{route('welcome')}}">Home</a>


                        </li>


                        <li class="current">
                            <a href="{{route('packages')}}">Packages</a>


                            <div class="submenu " style="width: 400px;">
                                <ul class="base-bg-color">
                                    <li><a href="about_us.html">About Us</a></li>
                                    <li><a href="our_team.html">Our Team</a></li>
                                    <li><a href="project_details_1.html">Project Details 1</a></li>
                                    <li><a href="project_details_2.html">Project Details 2</a></li>
                                    <li><a href="login.html">Login</a></li>
                                </ul>
                                <ul class="base-bg-color ">
                                    <li><a href="about_us.html">About Us</a></li>
                                    <li><a href="our_team.html">Our Team</a></li>
                                    <li><a href="project_details_1.html">Project Details 1</a></li>
                                    <li><a href="project_details_2.html">Project Details 2</a></li>
                                    <li><a href="login.html">Login</a></li>
                                </ul>

                            </div>

                        </li>
                        <li><a href="#">Sri Lanka</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>

                </nav>

            </div>
        </header>
    </section>



    <section id="headline">
        <div class="container">
            <div class="section-title clearfix">
                <h2 class="fl-l">Our Blog</h2>

                <ul id="breadcrumbs" class="fl-r">
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="content-container">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-7 col-md-8">
                    <div>
                        @foreach($packages as $package)
                            <article class="blog-item post-item">
                                <div class="owlSliderImg post-slider img-container" data-items="1" data-loop="true"
                                     data-auto="false" data-autospeed="3000" data-mousedrag="false" data-nav="true"
                                     data-animin="fadeIn" data-animout="fadeOut">

                                    <div><img class="img-responsive" src="{{$package->picture1}}" alt="single"/></div>
                                    <div><img class="img-responsive" src="{{$package->picture2}}" alt="single"/></div>
                                    @if(($package->picture3)!=null)
                                        <div><img class="img-responsive" src="{{$package->picture3}}" alt="single"/>
                                        </div>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 col-md-2">
										<span class="date-post">
											08<span>08</span>
										</span>
                                    </div>

                                    <div class="col-sm-12 col-md-10">
                                        <p class="post-title base-text-color"><a href="/packages/{{$package->id}}">{{$package->package_name}}</a></p>
                                        {{--</echo updated at {{$package->updated_at->toFormattedDateString()}}--}}
                                        <ul class="tags-list">
                                            <li><a href="#">Interactive</a></li>
                                            <li><a href="#">PSD</a></li>
                                            <li><a href="#">Creative Direction</a></li>

                                        </ul>
                        {{--<p class="blog-item"> {{(new \Carbon($package->updated_at))->toFormattedDateString()}}</p>--}}
                                        <p>
                                            All-over perfomance formula burst pleasure choose never. Fat-free sweet
                                            delicious. Smile listen crunchy lather for deeply waxy gentle refreshing
                                            exclusive aromatic deeply. Genuine snappy exclusive flat UI design.
                                        </p>

                                        <a class="more-btn" href="#"><i
                                                    class="icon-angle-right rounded_50 base-border-color"></i> Read More</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach


                    </div>
                </div>

                <div class="col-xs-12 col-sm-5 col-md-4">
                    <aside id="sidebar">
                        <div class="widget widget-search">
                            <form action="#">
                                <input name="s" type="text" value=""/>

                                <input type="submit" value="Search"/>
                            </form>
                        </div>

                        <div class="widget widget-custom_posts">
                            <div class="tab">
                                <ul class="tabs clearfix">
                                    <li class="fl-l"><a href="#"><span>Popular Packages</span></a></li>

                                    <li class="fl-l"><a href="#"><span>Add something</span></a></li>
                                </ul>

                                <div class="tab_content base-bg-color_light">
                                    <div class="tabs_tab tab-popular">
                                        <ul>
                                            @foreach($packages as $package)
                                                <li>
                                                    <a href="#"><img class="img-responsive" src="{{$package->picture1}}"
                                                                     alt="single"/></a>

                                                    <div>
                                                        <a class="title" href="#">{{$package->package_name}}</a>


                                                        <span>137 Views</span>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>

                                    <div class="tabs_tab tab-updates">
                                        <ul>
                                            @foreach($packages as $package)
                                                <li>
                                                    <a href="#"><img class="img-responsive" src="{{$package->picture1}}"
                                                                     alt="single"/></a>

                                                    <div>
                                                        <a class="title" href="#">{{$package->package_name}}</a>


                                                        <span>137 Views</span>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-project">
                            <h4 class="widget-title">Recent Projects</h4>
                            <div id="isotope-masonry" class="isotope-container">
                                <div class="project-item post-item">

                                    <ul class="clearfix">
                                        @foreach($packages as $package)

                                            <li class="fl-l">
                                                <a href="#"><img class="img-responsive" src="{{$package->picture1}}"
                                                                 alt="single"/></a>

                                                <div>
                                                    <a class="title" href="#">{{$package->package_name}}</a>


                                                    <span>137 Views</span>
                                                </div>
                                            </li>

                                            <li class="fl-l">
                                                <a href="#"><img class="img-responsive" src="{{$package->picture2}}"
                                                                 alt="single"/></a>

                                                <div>
                                                    <a class="title" href="#">{{$package->package_name}}</a>


                                                    <span>137 Views</span>
                                                </div>
                                            </li>
                                        @endforeach

                                        <li class="fl-l"><a href="#"><img class="img-responsive"
                                                                          src="images/recent_post/1.jpg"
                                                                          alt="single"/></a></li>

                                        <li class="fl-l"><a href="#"><img class="img-responsive"
                                                                          src="images/recent_post/2.jpg"
                                                                          alt="single"/></a></li>

                                        <li class="fl-l"><a href="#"><img class="img-responsive"
                                                                          src="images/recent_post/3.jpg"
                                                                          alt="single"/></a></li>

                                        <li class="fl-l"><a href="#"><img class="img-responsive"
                                                                          src="images/recent_post/4.jpg"
                                                                          alt="single"/></a></li>

                                        <li class="fl-l"><a href="#"><img class="img-responsive"
                                                                          src="images/recent_post/5.jpg"
                                                                          alt="single"/></a></li>

                                        <li class="fl-l"><a href="#"><img class="img-responsive"
                                                                          src="images/recent_post/6.jpg"
                                                                          alt="single"/></a></li>
                                    </ul>
                                </div>
                            </div>


                            <div class="widget widget-comment">
                                <h4 class="widget-title">Recent Comments</h4>
                                @foreach($packages as $package)
                                    <article>
                                        <span class="comment icon-comment"><a href="#">06/07</a></span>

                                        <p>
                                            {{$package->description}}
                                            fghhfhjdjhdjdgdjgdfdj dhgytrytyu fhfjh dghgdhg
                                        </p>
                                    </article>
                                @endforeach

                            </div>
                        </div>
                    </aside>
                </div>
            </div>


        </div>
    </section>


@endsection







