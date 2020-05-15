@extends('layouts.app')
@section('title')
    تم إضافه العقار بنجاح
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
@endsection
@section('content')

    <br>

    <div class="container">
        <div class="row profile">
            <div class="col-md-9">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسيه</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/user/create/building')}}">أضف عقار جديد</a></li>
                        <li class="breadcrumb-item"><a href="">تم </a></li>

                    </ol>
                </nav>
                <div class="profile-content">

                    <div class="row">
                    <div class="alert alert-success">
                        تم إضافه العقار بنجاح....
                    </div>



                    </div>
                    <div class="clearfix"></div>
                    <br>



                </div>

            </div>


            {{--  sidebare style--}}
            @include('website.bu.sidebar')


        </div>


    </div>

    <br>
    <br>




    <div class="col-lg-3">


    </div>

@endsection
