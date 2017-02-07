@extends('layouts.public')

@section('body')


<section id="headline">
    <div class="container">
        <div class="section-title clearfix">
            <h2 class="fl-l">Contact</h2>

            <ul id="breadcrumbs" class="fl-r">
                <li><a href="index-2.html">Home</a></li>
                <li>Get in Touch</li>
            </ul>
        </div>
    </div>
</section>

<section class="map" data-longitude="44.958309" data-latitude="34.109925" data-marker="images/marker.png"></section>

<section id="contact" class="base-bg-color_light">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-8">
                <h3>Get in touch with us</h3>

                <p>
                    Introducing crystals splash. Very bigger brings most velvety treat burst unique choosy it's spring. Satisfying sleek clinically made reputation agree hello full-bodied. New talking waxy magically made exotic aroma odor newest.
                </p>

                <form action="http://idealui.com/">
                    <input type="text" placeholder="Please Enter Your Name" />

                    <input type="text" placeholder="Your Email *" />

                    <textarea placeholder="Your Message"></textarea>

                    <input class="base-text-color" type="submit" value="Send" />
                </form>
            </div>

            <div class="col-xs-12 col-sm-5 col-md-4">
                <div class="contact-address">
                    <div class="title-with-ico">
                        <i class="ico icon-location rounded_50 base-text-color base-border-color"></i>

                        <h3>Address<br />NYC Head Office</h3>
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
                        Traditional mountain finest ocean take. Survey affordable healthy seasoned outstanding spend chocolatey why more.
                    </p>

                    <p>
                        Feedback also customer agree yet racy. Fights gentle chocolatey what luxury goodbye latest seeing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="footer-item">
                    <h4>About Us</h4>

                    <p>Accomodations trust works tighter just. Chance  however dry pennies effective. Deeply soaking below genuine bold care burst. Reduced unique win.</p>

                    <img id="footer-logo" src="images/logo2.png" alt="single" />
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="footer-item">
                    <h4>Our Tweets</h4>

                    <div class="tweet">
                        <article>
                            <p>Check out this great #themeforest item 'FR – Elegant One Page Fashion PSD Template' http://themeforest.net/item/fr-elegant-one-page-fashion-psd-template/5339674</p>

                            <span><i class="icon-twitter-bird"></i> about 2 week ago</span>
                        </article>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="footer-item">
                    <h4>Newsletter Signup</h4>

                    <p>Please subscribe to our University newsletters</p>

                    <form class="style1" action="http://idealui.com/">
                        <input type="text" value="" />

                        <input type="submit" value="Subscribe" />
                    </form>

                    <p>We promise NO SPAM</p>
                </div>
            </div>
        </div>
    </div>
</footer>



    @endsection

