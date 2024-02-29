<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon.png') }}">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet" />
    <style>
        .login-bg{
            background: url(assets/img/login.png) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body id="body" class="pace-top login-bg">
    <div id="app" class="app">
        <div class="login login-v1">
            <div class="login-container">
                <div class="login-header">
                    <div class="brand">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('uploads/logo.png') }}" width="100px">  <div style="margin: 10px;"><b>BLS </b><br>  WORLD SCHOOL</div>
                        </div>
                    </div>
                    <div class="icon">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                {{-- error --}}
                    @if(Session::has('error'))
                    <div style="background: #f93162; padding: 5px 11px 8px; font-weight: 700; color: white; border-radius: 0px; text-align:center;">{{ Session::get('error') }}</div>
                    @endif
                {{-- error --}}
                {{-- success --}}
                    @if(Session::has('success'))
                    <div style="background: green; padding: 5px 11px 8px; font-weight: 700; color: white; border-radius: 0px; text-align:center;">{{ Session::get('success') }}</div>
                    @endif
                {{-- success --}}
                <div class="login-body">
                    <div class="login-content fs-13px">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            @method('post')   
                            <div class="form-floating mb-20px">
                                <input type="email" name="email" class="form-control fs-13px h-45px @error('email') is-invalid @enderror" placeholder="Email Address" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                <label for="email" class="d-flex align-items-center py-0">{{ __('Email Address') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-20px">
                                <input type="password" name="password"  class="form-control fs-13px h-45px @error('password') is-invalid @enderror" id="password" placeholder="Password" autocomplete="password"/>
                                <label for="password" class="d-flex align-items-center py-0">{{ __('Password') }}</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-check mb-20px">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="rememberMe">{{ __('Remember Me') }}</label>
                            </div>
                            <div class="login-buttons">
                                <button type="submit" class="btn h-45px btn-success d-block w-100 btn-lg">
                                    {{ __('Sign me in') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
