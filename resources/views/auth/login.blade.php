<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('/')}}design/form/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/')}}design/form/css/style.css">
</head>
<body>

<div class="main">


    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img
                            src="{{asset('/')}}design/form/images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="{{route('register')}}" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-email material-icons-name @error('email') is-invalid @enderror"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your email"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i
                                    class="zmdi zmdi-lock @error('password') is-invalid @enderror"></i></label>
                            <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term"/>
                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                me</label>
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>

                    </form>
                    <div class="social-login">
                        <span class="social-label">Or login with</span>
                        <ul class="socials">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="{{asset('/')}}design/form/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}design/form/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<!-- JS -->


{{--    <br>--}}
{{--    <br>--}}
{{--    <div class="container">--}}
{{--        <div class="contact_bottom">--}}
{{--            <hr>--}}
{{--            <h3>تسجيل الدخول</h3>--}}
{{--            <hr>--}}

{{--            <form method="POST" action="{{ route('login') }}">--}}
{{--                @csrf--}}

{{--                <div class=" test2">--}}

{{--                    <div class="col-md-6">--}}
{{--                        <input id="password" type="password"--}}
{{--                               class="form-control @error('password') is-invalid @enderror" name="password" required--}}
{{--                               autocomplete="current-password" placeholder="كلمه المرور">--}}

{{--                        @error('password')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="test2">--}}

{{--                    <div class="col-md-6">--}}
{{--                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"--}}
{{--                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus--}}
{{--                               placeholder="البريد الإلكتروني">--}}

{{--                        @error('email')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <br>--}}

{{--                <div class="test2">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" type="checkbox" name="remember"--}}
{{--                                   id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                            <label class="form-check-label" for="remember">--}}
{{--                                {{ __('ذكرني') }}--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="test2">--}}
{{--                    <div class="col-md-12 ">--}}
{{--                        <button type="submit" class="btn btn-warning">--}}
{{--                            {{ __('تسجيل الدخول') }}--}}
{{--                        </button>--}}

{{--                        @if (Route::has('password.request'))--}}
{{--                            <a class="banner_btn" href="{{ route('password.request') }}">--}}
{{--                                {{ __('هل نسيت كلمه المرور ؟') }}--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}

{{--        <div class="clearfix"></div>--}}


{{--    </div>--}}

{{--    </br>--}}




