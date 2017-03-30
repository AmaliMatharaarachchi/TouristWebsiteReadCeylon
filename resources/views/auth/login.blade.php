@extends('layouts.master')
@section('title')
    ADMIN LOGIN
@endsection
@section('body')


    <div id="fh5co-container">


        <div class="js-sticky">

            <div class="fh5co-main-nav">
                <div class="container-fluid">

                    <div class="fh5co-logo">
                        <a href="#">Admin Register</a>
                    </div>


                </div>
            </div>


        </div>
        <br>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">


                    <p>
                        * required

                    </p>

                    <div class="col-md-12">
                        <form METHOD="post" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            {{--<div class="form-group ">--}}
                            {{--<label for="name" class="sr-only">Name</label>--}}
                            {{--<input id="name" class="form-control" placeholder="Name" type="text">--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <label for="email" class="control-label">E-Mail Address*</label>


                                <input id="email" type="email" name="email" class="form-control"
                                       value="{{ old('email') }}" required/>


                            </div>
                            <div class="form-group">
                                <label for="password">Password*</label>


                                <input id="password" type="password" class="form-control" name="password"
                                       required>


                                <br>
                                <br>


                            </div>

                            <p>
                                <a class="fl-r" href="{{ route('password.request') }}">forgot your password?</a>

                                <label><input name="remember" type="checkbox"{{ old('remember') ? 'checked' : '' }}>
                                    <span></span> Remember Me</label>
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
                            <input type="submit" value="Login"/>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
