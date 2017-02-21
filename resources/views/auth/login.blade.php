@extends('layouts.public')
@section('title')
    LOGIN
@endsection
@section('body')

    <div id="login-container" class="base-bg-color_light">


        <section id="headline">
            <div class="container">
                <div class="section-title clearfix">
                    <h2 class="fl-l">Login</h2>

                    <ul id="breadcrumbs" class="fl-r">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li>Login</li>
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
                            <form METHOD="post" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address*</label>


                                    <input id="email" type="email" name="email" placeholder="Email Address"
                                           value="{{ old('email') }}" required/>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif

                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password*</label>


                                    <input id="password" type="password" class="form-control" name="password"
                                           placeholder="Password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    <br>
                                    <br>


                                </div>

                                <p>
                                    <a class="fl-r" href="{{ route('password.request') }}">forgot your password?</a>

                                    <label><input name="remember" type="checkbox"{{ old('remember') ? 'checked' : '' }}> <span></span> Remember Me</label>
                                </p>
                                {{--<div class="checkbox">--}}


                                    {{--<label><input name="remember" type="checkbox"--}}
                                                {{--{{ old('remember') ? 'checked' : '' }}>--}}
                                        {{--<span></span> Remember--}}
                                        {{--Me</label>--}}

                                {{--</div>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                                <input class="base-text-color" type="submit" value="Login"/>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>

@endsection
