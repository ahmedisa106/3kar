@extends('layouts.app')
@section('title')
    إضافه عقار جديد
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


    <!-- header-end -->
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Add Your Building</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->


    <!-- End Button -->

    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">


            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h3 class="mb-30">Add Building</h3>


                        @include('admin.partial.success')
                        <form method="Post" action="{{ url('/user/create/building') }}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="mt-10">
                                <input type="text" name="name" placeholder=" Name"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = ' Name'" required
                                       class="single-input">
                            </div>

                            <div class="mt-10">
                                <input type="number" name="price" placeholder=" price"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = ' price'" required
                                       class="single-input">
                            </div>

                            <div class="mt-10">
                                <input type="number" name="rooms" placeholder="Rooms"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rooms'" required
                                       class="single-input">
                            </div>

                            <div class="mt-10">
                                <input type="number" name="square" placeholder="square"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'square'" required
                                       class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="number" name="longitude" placeholder="longitude"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'longitude'" required
                                       class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="number" name="latitude" placeholder="latitude"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'latitude'" required
                                       class="single-input">
                            </div>

                            <div class="mt-10">
                                <input type="text" name="meta" placeholder=" Meta"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = ' Meta'" required
                                       class="single-input">
                            </div>
                            <div class="mt-10">
								<textarea name="large_desc" class="single-textarea" placeholder="description"
                                          onfocus="this.placeholder = ''"
                                          onblur="this.placeholder = 'description'" required></textarea>
                            </div>

                            <br>
                            <div class="alert alert-warning text-center">الوصف لا يزيد عن 160 حرف طبقا لمعايير جوجل
                            </div>

                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                <div class="form-select">
                                    <select name="place">
                                        @php
                                            $type = bu_place();
                                        @endphp
                                        <option value="">City</option>
                                        @foreach($type as $index=>$ty)

                                            <option value="{{$ty}}">{{$ty}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-dashboard" aria-hidden="true"></i></div>
                                <div class="form-select">
                                    <select name="type">
                                        @php
                                            $type = bu_type();
                                        @endphp
                                        <option value="">Type</option>
                                        @foreach($type as $index=>$ty)

                                            <option value="{{$index}}">{{$ty}} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-dashboard" aria-hidden="true"></i></div>
                                    <div class="form-select">
                                        <select name="rent">
                                            @php
                                                $type = bu_rent();
                                            @endphp

                                            @foreach($type  as $index=>$rnt )

                                                <option value="{{$index}}">{{$rnt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <div class="mt-10">
                                <labl>Image</labl>
                                <input type="file" name="image" placeholder="Image"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'image'" required>

                            </div>
                            <div class="mt-10">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Add anew
                                </button>

                            </div>


                        </form>
                    </div>


                </div>


                <br>
                <br>
                <br>


            </div>
        </div>
    </div>
    {{--    <br>--}}

    {{--    <div class="container">--}}
    {{--        <div class="row profile">--}}
    {{--            <div class="col-md-9">--}}
    {{--                <nav aria-label="breadcrumb">--}}
    {{--                    <ol class="breadcrumb">--}}
    {{--                        <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسيه</a></li>--}}
    {{--                        <li class="breadcrumb-item"><a href="{{url('/user/create/building')}}">أضف عقار جديد</a></li>--}}

    {{--                    </ol>--}}
    {{--                </nav>--}}
    {{--                <div class="profile-content">--}}

    {{--                    <div class="row">--}}
    {{--                        <form method="Post" action="{{ url('/user/create/building') }}" enctype="multipart/form-data">--}}

    {{--                            @include('admin.bu.form')--}}
    {{--                        </form>--}}


    {{--                    </div>--}}
    {{--                    <div class="clearfix"></div>--}}
    {{--                    <br>--}}


    {{--                </div>--}}

    {{--            </div>--}}


    {{--            --}}{{--  sidebare style--}}
    {{--            @include('website.bu.sidebar')--}}


    {{--        </div>--}}


    {{--    </div>--}}

    {{--    <br>--}}
    {{--    <br>--}}




    {{--    <div class="col-lg-3">--}}


    {{--    </div>--}}

@endsection
