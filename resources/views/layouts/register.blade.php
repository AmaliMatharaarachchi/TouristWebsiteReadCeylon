{{--this is the register form for user registration--}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">


                        <p>
                     * required
                        </p>

                        <div class="col-md-12">
                            <form METHOD="post" action="{{ route('register') }}">
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


