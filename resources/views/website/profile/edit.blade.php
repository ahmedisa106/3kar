@extends('layouts.app')
@section('title')
    تعديل المعلومات الشخصيه
@endsection
@section('header')
    {{Html::style('cus/buall.css')}}
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cairo:400,700">


    <style>

        body, h1, h2, h3, h4, h5, h6 {
            font-family: 'cairo', Sans-Serif !important;


        }

        .breadcrumb {
            background-color: white;
        }


    </style>
@section('css')

@endsection
@endsection
@section('content')



    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider single_slider2  d-flex align-items-center property_bg overlay2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="property_wrap">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/showAllBuilding')}}">Home </a></li>
                <li class="active breadcrumb-item"><a href=""> Settings</a></li>
                <li class="active breadcrumb-item"><a href=""> {{auth()->user()->name}}'s Setting</a></li>


            </ol>
        </nav>

        <br>
        <br>
        @include('admin.partial.success')
        @include('admin.partial._errors')
        @if(session('error'))

            <div class="alert alert-danger">please enter a valid Password !</div>
        @endif
        <div class="row profile">
            <div class="col-md-12">

                <div class="profile-content">

                    <form method="POST" action="{{ url('/user/editSetting',$user->id)}}">
                        @csrf
                        @method('put')

                        <div class="test2 ">

                            <div class="col-md-12" style="margin-bottom: 15px;">
                                <input id="name" type="text"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ $user->name}}" required autocomplete="name" autofocus
                                       placeholder="name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="test2 ">

                            <div class="col-md-12" style="margin-bottom: 15px;">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ $user->email}}" required autocomplete="email"
                                       placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <h5 class="text-center">If You Want Change Your Password</h5>

                        <div class="test2 ">

                            <div class="col-md-12" style="margin-bottom: 15px;">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror mb-2" name="password"
                                       autocomplete="password" placeholder=" Your Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="test2 ">

                            <div class="col-md-12" style="margin-bottom: 15px;">
                                <input id="new_password" type="password"
                                       class="form-control @error('new_password') is-invalid @enderror mb-2"
                                       name="new_password"
                                       autocomplete="new_password" placeholder="  New password">

                                @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="test2">
                            <div class=" col-md-1 pull-left single-field">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('edit') }}
                                </button>
                            </div>
                        </div>


                    </form>
                    <div class="clearfix"></div>
                    <br>


                </div>

            </div>


        </div>


    </div>

    <br>
    <br>





@endsection
@section('js')
    <script src="{{asset('/')}}design/form/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('/')}}design/form/js/main.js"></script>
@endsection
