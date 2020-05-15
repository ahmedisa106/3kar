@extends('layouts.app')






@section('title')
    home
@endsection




@section('content')





    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="slider_text text-center justify-content-center">
                            <h3>{{getSetting('SiteName')}}</h3>
                            <p>{{getSetting('description')}}</p>
                        </div>
                        <div class="property_form">
                            <form action="{{url('/search')}}" method="get">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form_wrap d-flex">

                                            <div class="col-md-3">
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
                                                <br>
                                                <br>
                                                <div class="single-field max_width ">
                                                    @php
                                                        $types =  bu_type()
                                                    @endphp
                                                    <label for="#">Building Type</label>
                                                    <select class="wide" name="type">


                                                        <option value="">Building Type</option>

                                                        @foreach($types as $index=>$type)
                                                            <option value="{{$index}}">{{$type}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="single-field max_width ">

                                                    <label for="#">Rooms </label>
                                                    <select class="wide" name="rooms">

                                                        <option value="">Rooms</option>

                                                        @for($x=5 ; $x<=10 ; $x++)
                                                            <option value="{{$x}}">{{$x}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <br>
                                                <br>
                                                <div class="single-field max_width ">
                                                    @php
                                                        $types =  bu_rent()
                                                    @endphp
                                                    <label for="#">Rent type</label>
                                                    <select class="wide" name="rent">

                                                        <option value=""> Rent Type</option>

                                                        @foreach($types as $index=>$type)
                                                            <option value="{{$index}}">{{$type}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-4" style="margin-top: 35px;">
                                                <div class="single-field max_width ">


                                                    <input type="number" name="price_from" id="price_from"
                                                           class="form-control wide"
                                                           placeholder="Price From" autocomplete="off">
                                                </div>
                                                <br>
                                                <br>
                                                <div class="single-field max_width ">

                                                    <input type="number" name="square" id="square" class="form-control"
                                                           placeholder="Square" autocomplete="off">


                                                </div>
                                            </div>


                                            <div class="single-field max_width">


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
    <!-- slider_area_end -->
    <!-- popular_property  -->
    <div class="popular_property">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>Popular Properties</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($bus as $bu )
                    <div class="col-xl-4 col-md-6 col-lg-4">

                        <div class="single_property">
                            <div class="property_thumb">

                                @if($bu->rent ==0)
                                    <div class="property_tag  font-weight-bold">For Sale</div>
                                @elseif($bu->rent ==1 )
                                    <div class="property_tag red font-weight-bold">For Rent</div>

                                @endif

                                <img src="{{url('/website/Bu_images',$bu->image)}}" style="max-height: 230px;" alt="">
                            </div>
                            <div class="property_content">
                                <div class="main_pro">
                                    <h3><a href="{{url('/singleBuilding',$bu->id)}}">{{$bu->name}}</a></h3>
                                    <div class="mark_pro">
                                        <img src="{{asset('/')}}design/realestate/img/svg_icon/location.svg" alt="">
                                        <span>{{$bu->place}}</span>
                                    </div>
                                    <span class="amount">From  $ {{$bu->price}} </span>
                                </div>
                            </div>
                            <div class="footer_pro">
                                <ul>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="{{asset('/')}}design/realestate/img/svg_icon/square.svg" alt="">
                                            <span>{{$bu->square}} Sqft</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single_info_doc">
                                            <img src="{{asset('/')}}design/realestate/img/svg_icon/bed.svg" alt="">
                                            <span>{{$bu->rooms}} Rooms</span>
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
                @endforeach

            </div>
            <div class="row">
                @if($bus->count()>11)
                    <div class="col-xl-12">
                        <div class="more_property_btn text-center">
                            <a href="{{url('/showAllBuilding')}}" class="boxed-btn3-line">More Properties</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- /popular_property  -->



    <!-- home_details  -->
    <div class="home_details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="home_details_active owl-carousel">

                        @foreach($bus as $bu)
                            <div class="single_details">
                                <div class="row">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="modern_home_info">
                                            <div class="modern_home_info_inner">
                                                @if($bu->rent ==0)

                                                    <span class="for_sale">
                                                      sale
                                                    </span>
                                                @elseif($bu->rent==1)
                                                    <span class="for_sale">
                                                      Rent
                                                    </span>

                                                @endif
                                                <div class="info_header">
                                                    <h3>{{$bu->name}}</h3>
                                                    <div class="popular_pro d-flex">
                                                        <img
                                                            src="{{asset('/')}}design/realestate/img/svg_icon/location.svg"
                                                            alt="">
                                                        <span>{{$bu->place}}</span>
                                                    </div>
                                                </div>
                                                <div class="info_content">
                                                    <ul>
                                                        <li><img
                                                                src="{{asset('/')}}design/realestate/img/svg_icon/square.svg"
                                                                alt="">
                                                            <span>{{$bu->square}} Sqft</span></li>
                                                        <li><img
                                                                src="{{asset('/')}}design/realestate/img/svg_icon/bed.svg"
                                                                alt=""> <span>{{$bu->rooms}} Bed</span>
                                                        </li>
                                                        <li><img
                                                                src="{{asset('/')}}design/realestate/img/svg_icon/bath.svg"
                                                                alt=""> <span>2 Bath</span>
                                                        </li>
                                                    </ul>
                                                    <p>{{$bu->small_desc}}</p>
                                                    <div
                                                        class="prise_view_details d-flex justify-content-between align-items-center">
                                                        <span>${{$bu->price}} </span>
                                                        <a class="boxed-btn3-line"
                                                           href="{{url('/singleBuilding',$bu->id)}}">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script>


    </script>


@endsection



































