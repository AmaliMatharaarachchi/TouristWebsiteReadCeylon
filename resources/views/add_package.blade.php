@extends('layouts.public')
@section('title')
    Add a new package
@endsection
@section('body')

    <div id="login-container" class="base-bg-color_light">


        <section id="headline">
            <div class="container">
                <div class="section-title clearfix">
                    <h2 class="fl-l">Add Package</h2>

                    <ul id="breadcrumbs" class="fl-r">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li>Add Package</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="contact" class="base-bg-color_light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>User Login Screen</h3>

                        <p>
                            Introducing crystals splash. Very bigger brings most velvety treat burst unique choosy it's
                            spring. Satisfying sleek clinically made reputation agree hello full-bodied. New talking
                            waxy magically made exotic aroma odor newest.
                        </p>

                        <div class="col-md-12">
                            <form method="post" action="{{route('add_package')}}">
                                {{ csrf_field() }}
                                <input type="text" placeholder="Package Name" id="package_name" name="package_name" required/>

                                <input type="text" placeholder="Description" id="description" name="description" required/>

                                <input type="text" placeholder="Price" id="price" name="price" />
                                <input type="text" placeholder="Days" id="days" name="days" required/>
                                <input type="text" placeholder="Route" id="route" name="route" required />
                                <input type="text" placeholder="Picture" id="picture1" name="picture1" required/>
                                <input type="text" placeholder="Picture" id="picture2" name="picture2" required/>
                                <input type="text" placeholder="Picture" id="picture3" name="picture3" />




                                <input class="base-text-color" type="submit" value="Send" />
                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>

@endsection
