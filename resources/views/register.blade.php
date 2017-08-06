
{{--this is the register form for admin registration--}}

@extends('layouts.master')
@section('title')
    ADMIN REGISTER
@endsection
@section('body')

    <div id="fh5co-container">


        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('welcome')}}">ReadCeylon</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li><a href="#">Admin Register</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">

                        <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

                </ul>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">


                    <p>
                        * required
                    </p>

                    <div class="col-md-12">
                        <form METHOD="post" action='{{route('admin_register')}}'>
                            {{ csrf_field() }}                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Your name*</label>


                                <input id="name" type="text" name="name" class="form-control"
                                       value="{{ old('name') }}" required/>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

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
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Password*</label>


                                <input id="password" type="password" class="form-control" name="password"
                                       class="form-control" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>


                            <div class="form-group">
                                <label for="password-confirm" class="control-label">Confirm
                                    Password*</label>


                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>

                            </div>


                            <input class="base-text-color" type="submit" value="Register"/>
                        </form>
                    </div>
                </div>


            </div>
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
