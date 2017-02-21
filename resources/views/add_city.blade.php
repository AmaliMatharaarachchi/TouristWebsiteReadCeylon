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


                    <p>
                        Add your package details using below form. If its route having a other city other than existing
                        cities, create that city using the "create city" form before creating a new package.<br><br> *required
                    </p>
                    <div class="col-md-6">

                        <h3>Add Package</h3>
                        <div class="col-md-12">
                            <form method="post" action="{{route('add_package')}}">
                                {{ csrf_field() }}
                                <label for="package_name" class="col-md-4 control-label">Package Name*</label>
                                <input type="text" placeholder="Package Name" id="package_name" name="package_name"
                                       required/>
                                <label for="description" class="col-md-4 control-label">Description*</label>
                                <input type="text" placeholder="Description" id="description" name="description"
                                       required/>
                                <label for="price" class="col-md-4 control-label">Price</label>
                                <input type="text" placeholder="Price" id="price" name="price"/>
                                <label for="days" class="col-md-4 control-label">Days*</label>
                                <input type="text" placeholder="Days" id="days" name="days" required/>
                                <label for="route" class="col-md-4 control-label">Route*</label>
                                <input type="text" placeholder="Route" id="route" name="route" required/>
                                <label for="picture1" class="col-md-4 control-label">Add Picture*</label>
                                <input type="text" placeholder="Picture" id="picture1" name="picture1" required/>
                                <label for="picture2" class="col-md-4 control-label">Add Picture*</label>
                                <input type="text" placeholder="Picture" id="picture2" name="picture2" required/>
                                <label for="picture3" class="col-md-4 control-label">Add Picture</label>
                                <input type="text" placeholder="Picture" id="picture3" name="picture3"/>


                                <input class="base-text-color" type="submit" value="Send"/>
                            </form>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Add City</h3>


                    </div>


                </div>
            </div>
        </section>
    </div>

@endsection
