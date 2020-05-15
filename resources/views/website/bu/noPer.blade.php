@extends('layouts.app')
@section('title')
  This Building is Waiting the approval !
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





    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider single_slider2  d-flex align-items-center property_bg overlay2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="property_wrap">
                            <div class="slider_text text-center justify-content-center">

                            </div>
                            <div class="property_form">
                                <form action="{{url('/search')}}" method="get">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form_wrap d-flex">

                                                <div class="single-field max_width ">
                                                    <label for="#">Location</label>
                                                    <select class="wide" style="text-align: right" name="place">


                                                        @php
                                                            $type = bu_place();
                                                        @endphp
                                                        <option value="">Location</option>
                                                        @foreach($type as $index=>$typ)
                                                            <option value="{{$typ}}">{{$typ}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="single-field max_width ">
                                                    @php
                                                        $types =  bu_type()
                                                    @endphp
                                                    <label for="#">Property type</label>
                                                    <select class="wide" name="type">

                                                        <option value="">Building Type</option>

                                                        @foreach($types as $index=>$type)
                                                            <option value="{{$index}}">{{$type}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="single-field max_width ">

                                                    <label for="#">Rooms </label>
                                                    <select class="wide" name="rooms">

                                                        <option value="">Rooms</option>

                                                        @for($x=5 ; $x<=10 ; $x++)
                                                            <option value="{{$x}}">{{$x}}</option>
                                                        @endfor
                                                    </select>
                                                </div>

                                                <div class="single-field max_width ">
                                                    @php
                                                        $types =  bu_rent()
                                                    @endphp
                                                    <label for="#">Rent type</label>
                                                    <select class="wide" name="rent">

                                                        <option value="">Rent</option>

                                                        @foreach($types as $index=>$type)
                                                            <option value="{{$index}}">{{$type}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="single-field max_width ">


                                                    <input type="submit" name="submit" class=" btn btn-warning"
                                                           value="search">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

































        <br>
        <br>

    <div class="container">
            <div class="col-md-12">

                <div class="profile-content">

                    <div class="row" >
                        <div class="alert alert-danger" style="width: 100%">
                          <strong>  Warning :</strong>
                            @if($buInfo->sataus !=1)
                                {{$title}}
                                @else
                                {{$message}}

                            @endif



                            <i class="fa fa-close"></i>

                        </div>



                    </div>
                    <div class="clearfix"></div>
                    <br>



                </div>

            </div>

    </div>


@endsection
