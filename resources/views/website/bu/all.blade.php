@extends('layouts.app')
@section('title')
    All Buildings
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

    <!-- slider_area_end -->
    <div class="popular_property plus_padding">

        <div class="container">
            <div class="slider_text text-center justify-content-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('showAllBuilding')}}"> Home </a></li>
                        <li ><a href="{{url('showAllBuilding')}}"> / All Buildings  </a></li>

                        @if(isset($array))
                            @if(!empty($array))

                                @foreach($array as $key=>$val)

                                    <li > <a href="{{url('/search?'. $key . '=' . $val)}} "> / {{search()[$key]}}->
                                            @if($key == 'type')
                                                {{bu_type()[$val]}}
                                            @elseif($key =='rent')

                                                {{bu_rent()[$val]}}

                                            @elseif($key == 'place')

                                                {{$val}}

                                            @else
                                                {{$val}}

                                            @endif


                                        </a>


                                    </li>

                                @endforeach


                            @endif

                        @endif

                    </ol>
                </nav>
            </div>
            <div class="row">

                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h4>{{$buAll->count()}} Property Found</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                @if($buAll->count()>0)

                    @foreach($buAll as $bu)

                        @if($bu->status ==1)

                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="single_property">
                                <div class="property_thumb">
                                    @if($bu->rent ==0)
                                        <div class="property_tag  font-weight-bold">For Sale</div>
                                    @elseif($bu->rent ==1 )
                                        <div class="property_tag red font-weight-bold">For Rent</div>

                                    @endif
                                    <img src="{{asset('/website/Bu_images/'.$bu->image)}}" style="max-height: 230px;"
                                         alt="">
                                </div>
                                <div class="property_content">
                                    <div class="main_pro">
                                        <h3><a href="{{url('/singleBuilding',$bu->id)}}">{{$bu->name}}</a></h3>
                                        <div class="mark_pro">
                                            <img src="{{asset('/')}}design/realestate/img/svg_icon/location.svg" alt="">
                                            <span>{{$bu->place}}</span>
                                        </div>
                                        <span class="amount">From $ {{$bu->price}}</span>
                                    </div>
                                </div>
                                <div class="footer_pro">
                                    <ul>
                                        <li>
                                            <div class="single_info_doc">
                                                <img src="{{asset('/')}}design/realestate/img/svg_icon/square.svg"
                                                     alt="">
                                                <span>{{$bu->square}} Sqft</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_info_doc">
                                                <img src="{{asset('/')}}design/realestate/img/svg_icon/bed.svg" alt="">
                                                <span>{{$bu->rooms}} Bed</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single_info_doc">
                                                <img src="{{asset('/')}}design/realestate/img/svg_icon/bath.svg" alt="">
                                                <span>2 Bath</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endif

            </div>
            <div class="row">
              <div class="offset-5">  {{$buAll->links()}}</div>

            </div>
        </div>
    </div>

    <!-- contact_action_area  -->
    <div class="contact_action_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="action_heading">
                        <h3>Add your property for sale</h3>
                    </div>
                </div>
                <div class="col-xl-5">

                    <div class="call_add_action">
                        <span>{{getSetting('mobile')}}</span>
                        <a href="{{url('/user/create/building')}}" class="boxed-btn3-line">Add your Building</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /contact_action_area  -->














































    {{--    <div class="container">--}}
    {{--        <div class="row profile">--}}
    {{--            <div class="col-md-9">--}}
    {{--                <nav aria-label="breadcrumb">--}}
    {{--                    <ol class="breadcrumb">--}}
    {{--                        <li class="breadcrumb-item"><a href="{{url('/showAllBuilding')}}">الرئيسيه</a></li>--}}
    {{--                        <li class="breadcrumb-item"><a href="{{url('/showAllBuilding')}}">كل العقارات</a></li>--}}

    {{--                        @if(isset($array))--}}
    {{--                            @if(!empty($array))--}}

    {{--                                @foreach($array as $key=>$val)--}}

    {{--                                    <li><a href="{{url('/search?'.$key.'='.$val)}}">{{search()[$key]}}->--}}
    {{--                                            @if($key == 'type')--}}
    {{--                                                {{bu_type()[$val]}}--}}
    {{--                                            @elseif($key =='rent')--}}

    {{--                                                {{bu_rent()[$val]}}--}}

    {{--                                            @elseif($key == 'place')--}}

    {{--                                                {{$val}}--}}

    {{--                                            @else--}}
    {{--                                                {{$val}}--}}

    {{--                                            @endif--}}


    {{--                                        </a>--}}


    {{--                                    </li>--}}

    {{--                                @endforeach--}}


    {{--                            @endif--}}

    {{--                        @endif--}}

    {{--                    </ol>--}}
    {{--                </nav>--}}
    {{--                <div class="profile-content">--}}

    {{--                    <div class="row">--}}
    {{--                        @if($buAll->count()>0)--}}

    {{--                            @foreach($buAll as $bu)--}}


    {{--                                <div class="col-lg-4 pull-right">--}}
    {{--                                    <article class="col-item">--}}
    {{--                                        <div class="photo">--}}
    {{--                                            <div class="options">--}}
    {{--                                                <a href="{{url('/singleBuilding',$bu->id)}}" class="btn btn-default"><i--}}
    {{--                                                        class="fa fa-eye"></i></a>--}}

    {{--                                            </div>--}}


    {{--                                            <a href="{{url('/singleBuilding',$bu->id)}}"> <img--}}
    {{--                                                    src="{{asset('/website/Bu_images/'.$bu->image)}}"--}}
    {{--                                                    class="img-responsive thumbnail"--}}
    {{--                                                    alt="Product" style="width: 250px; height: 250px;"/> </a>--}}

    {{--                                        </div>--}}
    {{--                                        <div class="info">--}}
    {{--                                            <div class="row">--}}
    {{--                                                <div class="price-details col-md-6">--}}

    {{--                                                    <a class="pull-left btn btn-warning"--}}
    {{--                                                       href="{{url('/singleBuilding',$bu->id)}}"> التفاصيل</a>--}}
    {{--                                                    <p class="details">--}}
    {{--                                                        @php--}}
    {{--                                                            $type = bu_type();--}}
    {{--                                                        @endphp--}}
    {{--                                                        <strong>نوع العقار : </strong>--}}

    {{--                                                        @foreach($type as $index=>$tpe)--}}

    {{--                                                            {{$bu->type == $index ? $tpe : ''}}--}}
    {{--                                                        @endforeach--}}
    {{--                                                    </p>--}}


    {{--                                                    <p class="details">--}}
    {{--                                                        <strong>السعر : </strong>--}}
    {{--                                                        {{$bu->price}} <strong> ج.م </strong>--}}
    {{--                                                    </p>--}}

    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </article>--}}

    {{--                                </div>--}}

    {{--                            @endforeach--}}
    {{--                        @else--}}
    {{--                            <div class="alert alert-danger text-center"><h4> لا يوجد أي عقارات حاليا <i--}}
    {{--                                        class="fa fa-close"></i>--}}
    {{--                                </h4></div>--}}
    {{--                        @endif--}}


    {{--                    </div>--}}
    {{--                    <div class="clearfix"></div>--}}
    {{--                    <br>--}}
    {{--                    <div class="text-center">--}}

    {{--                        {{$buAll->appends(request()->query())->links()}}--}}

    {{--                    </div>--}}


    {{--                </div>--}}

    {{--            </div>--}}


    {{--            sidebare style--}}
    {{--            @include('website.bu.sidebar')--}}


    {{--        </div>--}}


    {{--    </div>--}}

    {{--    <br>--}}
    {{--    <br>--}}




    {{--    <div class="col-lg-3">--}}


    {{--    </div>--}}

@endsection
