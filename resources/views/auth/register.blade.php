<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('/')}}design/form/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/')}}design/form/css/style.css">
</head>
<body>

<div class="main">


    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" action="{{ route('register') }}" class="register-form" id="register-form">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="password_confirmation" id="re_pass" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term"/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img
                            src="{{asset('/')}}design/form/images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="{{route('login')}}" class="signup-image-link">I am already member</a>
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


{{--    <div class="container">--}}
{{--        <div class="contact_bottom">--}}
{{--            <hr>--}}
{{--            <h3>تسجيل عضويه جديده</h3>--}}
{{--            <hr>--}}
{{--            <form method="POST" action="{{ route('register') }}">--}}
{{--                @csrf--}}

{{--                <div class="test2 ">--}}

{{--                    <div class="col-md-12" style="margin-bottom: 15px;">--}}
{{--                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"--}}
{{--                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus--}}
{{--                               placeholder="اسم  المستخدم">--}}

{{--                        @error('name')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="test2 ">--}}

{{--                    <div class="col-md-12"  style="margin-bottom: 15px;">--}}
{{--                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"--}}
{{--                               name="email" value="{{ old('email') }}" required autocomplete="email"--}}
{{--                               placeholder="البريد الإلكتروني">--}}

{{--                        @error('email')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="test2">--}}

{{--                    <div class="col-md-6">--}}
{{--                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"--}}
{{--                               required autocomplete="new-password" placeholder="كرر كلمه المرور">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="test2 ">--}}

{{--                    <div class="col-md-6" style="margin-bottom: 15px;">--}}
{{--                        <input id="password" type="password"--}}
{{--                               class="form-control @error('password') is-invalid @enderror mb-2" name="password"--}}
{{--                               required autocomplete="new-password" placeholder="كلمه المرور">--}}

{{--                        @error('password')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="test2">--}}
{{--                    <div class="col-md-12  ">--}}
{{--                        <button type="submit" class="btn btn-warning">--}}
{{--                            {{ __('تسجيل عضويه جديده') }}--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}

{{--        <div class="clearfix">--}}


{{--        </div>--}}
{{--        </br>--}}
{{--    </div>--}}

{{--@endsection--}}
