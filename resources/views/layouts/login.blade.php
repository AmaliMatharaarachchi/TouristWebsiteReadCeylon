{{--this is the login form for user--}}
<div class="container">
    <div class="row">
        <div class="col-lg-6">


            <p>
                * required

            </p>

            <div class="col-md-12">
                <form METHOD="post" action="{{ route('login') }}">
                    {{ csrf_field() }}

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

                    <input type="submit" value="Login"/>
                </form>
            </div>
        </div>


    </div>
</div>



