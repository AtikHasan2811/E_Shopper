@extends('admin.admin_layout')

@section('contain')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}




<div class="container-fluid-full">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="login-box">
                <div class="icons">
                    <a href="index.html"><i class="halflings-icon home"></i></a>
                    <a href="#"><i class="halflings-icon cog"></i></a>
                </div>
                <h2>Login to your account</h2>

{{--//session message show code................--}}
                @if (session('successMsg'))
                    <div class="alert alert-success">
                        {{ session('successMsg') }}
                    </div>
                @endif



{{--                @if(session('successMsg'))--}}
{{--                    <div class="alert alert-success alert-dismissable fade show" role="alert">--}}
{{--                        <strong>Great !!</strong> {{ session('successMsg') }}--}}
{{--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                            <span aria-hidden="true">&times;</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                @endif--}}


                <form method="POST" action="{{ route('login') }}">
                    @csrf






                    <div class="input-prepend" title="Username">
                        <span class="add-on"><i class="halflings-icon user"></i></span>
                        <input class="input-large span10" id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Gmail" />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="clearfix"></div>



                    <div class="input-prepend" title="Password">
                        <span class="add-on"><i class="halflings-icon lock"></i></span>
                        <input class="input-large span10" id="password" type="password"  name="password" required autocomplete="current-password" placeholder="Password"  />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>


                    <div class="clearfix"></div>



                    <label class="remember" for="remember"><input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />Remember me</label>

                    {{--                    .............edit file............................................--}}


                    {{--                    .......................................................................--}}



                    <div class="button-login">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
                <hr>
                <h3>Forgot Password?</h3>
                <p>
                    No problem,  <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a> to get a new password.
                </p>
            </div><!--/span-->
        </div><!--/row-->


    </div><!--/.fluid-container-->

</div><!--/fluid-row-->

<!-- start: JavaScript-->
@endsection
