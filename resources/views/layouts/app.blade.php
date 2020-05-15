<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        {{getSetting('siteName')}} |@yield('title')

    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
   @include('website.includes.css')
    <style>


    </style>


    @yield('css')

</head>

<body>




<!-- header-start -->
<header>
    <div class="header-area ">
       @include('website.includes.header-top')
       @include('website.includes.header-main')
    </div>
</header>
<!-- header-end -->

@yield('content')


@include('website.includes.footer')

<!-- link that opens popup -->
@include('website.includes.js')


@yield('js')
</body>

</html>


{{--<!doctype html>--}}
{{--<html >--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    {!! Html::style('website/css/bootstrap.min.css') !!}--}}
{{--    {!! Html::style('website/css/flexslider.css') !!}--}}

{{--    {!! Html::style('website/css/style.css') !!}--}}

{{--    {!! Html::style('website/css/font-awesome.min.css') !!}--}}
{{--    {!! Html::script('website/js/jquery.min.js') !!}--}}
{{--    {{Html::style('cus/buall.css')}}--}}

{{--        select1--}}

{{--    {!! Html::style('admin/select2/css/select2.min.css') !!}--}}

{{--        cairo font--}}
{{--    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cairo:400,700">--}}


{{--    <style>--}}

{{--        body, h1, h2, h3, h4, h5, h6 {--}}
{{--            font-family: 'cairo', Sans-Serif !important;--}}
{{--        }--}}

{{--    </style>--}}


{{--    <script type="application/x-javascript"> addEventListener("load", function () {--}}
{{--            setTimeout(hideURLbar, 0);--}}
{{--        }, false);--}}

{{--        function hideURLbar() {--}}
{{--            window.scrollTo(0, 1);--}}
{{--        } </script>--}}
{{--    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet'--}}
{{--          type='text/css'>--}}
{{--    <title>--}}

{{--        {{getSetting(['siteName'])}}--}}

{{--        |--}}
{{--        @yield('title')--}}

{{--    </title>--}}

{{--    @yield('header')--}}
{{--</head>--}}
{{--<body style="direction:rtl;">--}}


{{--<div id="app">--}}
{{--    <div class="header">--}}

{{--        <div class="container"><a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-paper-plane"></i> ONE</a>--}}
{{--            <div class="menu pull-left"><a class="toggleMenu" href="#"><img--}}
{{--                        src="{{asset('/')}}/website/images/nav_icon.png" alt=""/> </a>--}}
{{--                <ul class="nav" id="nav">--}}

{{--                    <li class="current"><a href="{{url('/')}}">الرئيسيه</a></li>--}}
{{--                    <li>--}}
{{--                        <a href="{{url('/showAllBuilding')}}">--}}

{{--                            كل العقارات </a>--}}
{{--                    </li>--}}

{{--                    <li class="dropdown">--}}
{{--                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
{{--                           aria-expanded="false">--}}
{{--                            إيجار <span class="caret"></span>--}}


{{--                        </a>--}}

{{--                        <ul class="dropdown-menu" role="menu">--}}
{{--                            @foreach(bu_type() as $index=>$type)--}}
{{--                                <li><a href="{{url('/search?rent=1&type='.$index)}}">{{$type}}</a></li>--}}
{{--                            @endforeach--}}


{{--                        </ul>--}}


{{--                    </li>--}}

{{--                    <li class="dropdown">--}}
{{--                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
{{--                           aria-expanded="false">--}}
{{--                            للتمليك <span class="caret"></span>--}}


{{--                        </a>--}}

{{--                        <ul class="dropdown-menu" role="menu">--}}
{{--                            @foreach(bu_type() as $index=>$type)--}}
{{--                                <li><a href="{{url('/search?rent=0&type='.$index)}}">{{$type}}</a></li>--}}
{{--                            @endforeach--}}


{{--                        </ul>--}}


{{--                    </li>--}}

{{--                    <li><a href="{{url('/contact')}}">اتصل بنا</a></li>--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @guest--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>--}}
{{--                        </li>--}}
{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('عضويه جديده') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    @else--}}


{{--                        <li class="nav-item dropdown">--}}

{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
{{--                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}


{{--                                <div style="margin-right: 5px;">--}}
{{--                                    <a href="{{url('/user/editSetting')}}">--}}
{{--                                        <i class="fa fa-gears"></i>--}}
{{--                                        تعديل المعلوماتات الشخصيه</a>--}}

{{--                                    <br>--}}
{{--                                    <a href="{{url('/user/buildingShow')}}">--}}
{{--                                        <i class=" fa fa-building"></i>--}}
{{--                                        العقارات المفعله</a>--}}
{{--                                    <br>--}}

{{--                                    <a href="{{url('/user/buildingShow/waiting')}}">--}}
{{--                                        <i class=" fa fa-building"></i>--}}
{{--                                        عقارات منتظره التفعيل</a>--}}

{{--                                    <br>--}}

{{--                                    <a href="{{url('/user/create/building')}}">--}}
{{--                                        <i class=" fa fa-plus"></i>--}}
{{--                                      إضافه عقار جديد</a>--}}

{{--                                    <br>--}}

{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('تسجيل الخروج') }}--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
{{--                                      style="display: none;">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @endguest--}}
{{--                    <div class="clear"></div>--}}
{{--                </ul>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<br>--}}
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-9">--}}

{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}


{{--<main class="py-4">--}}
{{--    @yield('content')--}}
{{--</main>--}}

{{--@yield('footer')--}}

{{--{!! Html::script('website/js/responsive-nav.js') !!}--}}
{{--{!! Html::script('website/js/bootstrap.min.js') !!}--}}
{{--{!! Html::script('website/js/jquery.flexslider.js') !!}--}}

{{--select2--}}

{{--{!! Html::script('admin/select2/js/select2.min.js') !!}--}}

{{--@yield('footer')--}}


{{--<script>--}}

{{--    //    select2--}}
{{--    $(document).ready(function () {--}}
{{--        $('.select2').select2({--}}
{{--            dir: "rtl"--}}

{{--        });--}}
{{--    });--}}

{{--</script>--}}


{{--<div class="footer">--}}
{{--    <div class="footer_bottom">--}}
{{--        <div class="follow-us">--}}

{{--            <a class="fa fa-facebook social-icon" href="{{getSetting(['facebook'])}}"> </a>--}}
{{--            <a class="fa fa-twitter social-icon" href="{{getSetting(['twitter'])}}"> </a>--}}
{{--            <a class="fa fa-youtube social-icon" href="{{getSetting(['youtube'])}}"></a>--}}

{{--        </div>--}}
{{--        <div class="copy">--}}
{{--            <p>Copyright &copy :{{date('M')}} - {{date('Y')}} <a href="{{getSetting(['facebook'])}}" rel="nofollow"> By--}}
{{--                    : {{getSetting(['footer'])}}</a>--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--</body>--}}
{{--</html>--}}
