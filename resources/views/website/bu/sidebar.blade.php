@if(auth()->user())
    {{--    خيارات العضو--}}
    <div class="col-md-3 pull-right" style="margin-bottom: 20px;">
        <div class="profile-sidebar">
            <h3 class="text-center"> خيارات العضو</h3>
            <div class="profile-usermenu ">


                <ul class="nav" style="width: 115%; margin-right: -40px ">

                    <li class="">
                        <a href="{{url('/user/editSetting')}}">
                            <i class="fa fa-gears"></i>
                            تعديل المعلوماتات الشخصيه</a>
                    </li>
                    <li>

                        <a href="{{url('/user/buildingShow')}}">
                            <i class=" fa fa-building"></i>

                            <label class="label label-default" style="float: left" >{{buForUserCount(auth()->user()->id,1)}}</label>  العقارات المفعله</a>


                    </li>
                    <li>
                        <a href="{{url('/user/buildingShow/waiting')}}">
                            <i class=" fa fa-building"></i>
                            <label class="label label-default" style="float: left" >{{buForUserCount(auth()->user()->id ,0)}}</label> عقارات منتظره التفعيل</a>
                    </li>
                    <li>
                        <a href="{{url('/user/create/building')}}">
                            <i class=" fa fa-plus"></i>
                            إضافه عقار جديد</a>
                    </li>


                </ul>
            </div>

        </div>

    </div>
@endif


{{--    خيارات البحث--}}


<div class="col-md-3" style="margin-bottom: 20px;">
    <div class="profile-sidebar">
        <h3 class="text-center"> خيارات البحث</h3>
        <div class="profile-usermenu ">
            <form action="{{url('/search')}}" method="get">

                {{csrf_field()}}


                <ul class="nav" style="padding: 10px;">
                    {{--    price--}}
                    <li style="margin-bottom: 10px;">
                        <input type="number" name="price_from" id="price_from" class="form-control"
                               placeholder="سعر العقار من" autocomplete="off">
                    </li>
                    <li style="margin-bottom: 10px;">
                        <input type="number" name="price_to" id="price_to" class="form-control"
                               placeholder="سعر العقار إلي" autocomplete="off">
                    </li>


                    {{-- المنطقه --}}

                    <li style="margin-bottom: 10px;">
                        <select name="place" id=place" class="form-control select2">

                            <option value="">المنطقه</option>
                            @php
                                $type = bu_place();
                            @endphp
                            @foreach(bu_place() as $index=>$typ)
                                <option value="{{$typ}}">{{$typ}}</option>
                            @endforeach
                        </select>
                    </li>

                    {{--rooms--}}

                    <li style="margin-bottom: 10px;">
                        <select name="rooms" id="" class="form-control select2">

                            <option value="">عدد الغرف</option>
                            @for($x=5 ; $x<=50 ; $x++)
                                <option value="{{$x}}">{{$x}}</option>
                            @endfor
                        </select>
                    </li>


                    {{--type--}}
                    <li style="margin-bottom: 10px;">
                        @php
                            $types =  bu_type()
                        @endphp
                        <select name="type" id="type" class="form-control select2">
                            <option value="">نوع العقار</option>
                            @foreach($types as $index=>$type)
                                <option value="{{$index}}">{{$type}}</option>
                            @endforeach
                        </select>
                    </li>

                    {{-- rent type --}}

                    {{--type--}}
                    <li style="margin-bottom: 10px;">
                        @php
                            $types =  bu_rent()
                        @endphp
                        <select name="rent" id="rent" class="form-control select2">
                            <option value="">نوع العمليه</option>
                            @foreach($types as $index=>$type)
                                <option value="{{$index}}">{{$type}}</option>
                            @endforeach
                        </select>
                    </li>

                    {{--square--}}

                    <li style="margin-bottom: 10px;">

                        <input type="text" name="square" id="square" placeholder="المساحه" class="form-control">

                    </li>

                    {{--      form submit          --}}
                    <br>
                    <li>

                        <input type="submit" name="submit" class="form-control btn btn-warning" value="بحث">

                    </li>


                </ul>
            </form>

        </div>

    </div>
</div>

{{--    خيارات العقارات--}}

<div class="col-md-3 pull-right ">
    <div class="profile-sidebar">
        <h3 class="text-center"> خيارات العقارات</h3>
        <div class="profile-usermenu ">


            <ul class="nav" style="width: 115%; margin-right: -40px ">




                <li class="">
                    <a href="{{url('/showAllBuilding')}}">
                        <i class="fa fa-home"></i>
                        كل العقارات </a>
                </li>
                <li>
                    <a href="{{url('/rent/1')}}">
                        <i class=" fa fa-user"></i>
                        إيجار</a>
                </li>
                <li>
                    <a href="{{url('/rent/0')}}">
                        <i class=" fa fa-flag"></i>
                        تمليك </a>
                </li>
                <li>
                    <a href="{{url('/type/0')}}">
                        <i class=" fa fa-home"></i>
                        شقه </a>
                </li>
                <li>
                    <a href="{{url('/type/1')}}">
                        <i class=" fa fa-home"></i>
                        فيلا </a>
                </li>

                <li>
                    <a href="{{url('/type/2')}}">
                        <i class=" fa fa-home"></i>
                        شاليه </a>
                </li>


            </ul>
        </div>

    </div>

</div>


<?php



//
//function active($array)
//{
//    if (!empty($array)) {
//
//        $seg_array = [];
//        foreach ($array as $key => $url) {
//
//            if (Request::segment($key + 1) == $url) {
//
//
//                $seg_array[] = $key;
//            }
//
//        }
//
//
//        if (count($seg_array) == count(Request::segments())) {
//            return "active";
//
//
//        }
//
//    }
//
//
//}












