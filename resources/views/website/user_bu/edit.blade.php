@extends('layouts.app')
@section('title')
    تعديل العقار{{$buInfo->name}}
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

    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Edit Your Building</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    <div class="whole-wrap">
        <div class="container box_1170">


            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h3 class="mb-30">Edit Building</h3>


                        @include('admin.partial.success')
                        @include('admin.partial._errors')
                        <form method="Post" action="{{ url('/user/edit/building',$buInfo->id) }}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('put')
                            <div class="mt-10">
                                <input type="text" name="name" placeholder=" Name" value="{{ $buInfo->name }}"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = ' Name'" required
                                       class="single-input">
                            </div>

                            <div class="mt-10">
                                <input type="number" name="price" placeholder=" price" value="{{$buInfo->price}}"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = ' price'" required
                                       class="single-input">
                            </div>

                            <div class="mt-10">
                                <input type="number" name="rooms" placeholder="Rooms" value="{{$buInfo->rooms}}"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Rooms'" required
                                       class="single-input">
                            </div>

                            <div class="mt-10">
                                <input type="number" name="square" placeholder="square" value="{{$buInfo->square}}"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'square'" required
                                       class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="number" name="longitude" placeholder="longitude" value="{{$buInfo->latitude}}"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'longitude'" required
                                       class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="number" name="latitude" placeholder="latitude" value="{{$buInfo->longitude}}"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'latitude'" required
                                       class="single-input">
                            </div>

                            <div class="mt-10">
                                <input type="text" name="meta" placeholder=" Meta" value="{{$buInfo->meta}}"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = ' Meta'" required
                                       class="single-input">
                            </div>
                            <div class="mt-10">
								<textarea name="large_desc" class="single-textarea" placeholder="description"
                                          onfocus="this.placeholder = ''"
                                          onblur="this.placeholder = 'description'" required>{{$buInfo->large_desc}}</textarea>
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

                                            <option value="{{$ty}}" {{$ty == $buInfo->place ? 'selected' :''}}>{{$ty}} </option>
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

                                            <option value="{{$index}}" {{$index == $buInfo->type ? 'selected' :''}}>{{$ty}} </option>
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

                                                <option value="{{$index}}" {{$index == $buInfo->rent ?'selected' :''}}>{{$rnt}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>


                            <div class="mt-10">
                                <labl>Image</labl>
                                <input type="file" name="image" placeholder="Image" value="default.png"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'image'" >

                            </div>

                            <div class="mt-10">
                                <img src="{{$buInfo->image_path}}" alt="" style="width: 200px;">
                            </div>

                            <div class="mt-10">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Edit
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
{{--                        <li class="breadcrumb-item"><a href="{{url('/user/edit/building',$buInfo->id)}}">تعديل--}}
{{--                                العقار-> {{$buInfo->name}}</a></li>--}}

{{--                    </ol>--}}
{{--                </nav>--}}
{{--                <div class="profile-content">--}}

{{--                    <div class="row">--}}
{{--                        <form method="Post" action="{{ url('/user/edit/building',$buInfo->id) }}"--}}
{{--                              enctype="multipart/form-data">--}}

{{--                            {{csrf_field()}}--}}
{{--                            @method('put')--}}


{{--                            <div class="test2 ">--}}


{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}

{{--                                    <input id="name" type="text" class="form-control "--}}
{{--                                           name="name" value="{{ $buInfo->name }}" autocomplete="name" autofocus--}}
{{--                                           placeholder="اسم  العقار" required="required">--}}


{{--                                </div>--}}
{{--                                <div class="col-md-2">اسم العقار</div>--}}
{{--                            </div>--}}

{{--                            <div class="test2 ">--}}


{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}

{{--                                    <input id="image" type="file" class="form-control"--}}
{{--                                           name="image" value="default.png">--}}


{{--                                </div>--}}
{{--                                <div class="col-md-2">صوره العقار</div>--}}
{{--                            </div>--}}
{{--                            <div class="test2 ">--}}
{{--                                <div class="col-md-10" style="margin-bottom: 15px;"><img src="{{$buInfo->image_path}}"--}}
{{--                                                                                         alt=""--}}
{{--                                                                                         style="width: 100px; height: 100px;">--}}

{{--                                </div>--}}


{{--                            </div>--}}

{{--                            <div class="test2 ">--}}


{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}

{{--                                    <select name="place" id="place" class="form-control select2" required="required">--}}

{{--                                        @php--}}
{{--                                            $type = bu_place();--}}
{{--                                        @endphp--}}
{{--                                        <option value="">المنطقه</option>--}}

{{--                                        @foreach($type as $index=>$ty)--}}

{{--                                            <option--}}
{{--                                                value="{{$ty}}" {{$buInfo->palce == $index ? 'selected' :''}}>{{$ty}} </option>--}}
{{--                                        @endforeach--}}


{{--                                    </select>--}}


{{--                                </div>--}}
{{--                                <div class="col-md-2">المنطقه</div>--}}
{{--                            </div>--}}


{{--                            <div class="test2 ">--}}


{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}

{{--                                    <select name="type" id="type" class="form-control select2" required="required">--}}

{{--                                        @php--}}
{{--                                            $type = bu_type();--}}
{{--                                        @endphp--}}
{{--                                        <option value="">نوع العقار</option>--}}

{{--                                        @foreach($type as $index=>$ty)--}}

{{--                                            <option--}}
{{--                                                value="{{$index}}" {{$buInfo->type ==$index ? 'selected' : ''}}>{{$ty}} </option>--}}
{{--                                        @endforeach--}}


{{--                                    </select>--}}

{{--                                </div>--}}
{{--                                <div class="col-md-2">نوع العقار</div>--}}
{{--                            </div>--}}

{{--                            <div class="test2 ">--}}


{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}

{{--                                    <input id="rooms" type="number" class="form-control "--}}
{{--                                           name="rooms" value="{{ $buInfo->rooms }}" autocomplete="rooms" autofocus--}}
{{--                                           placeholder="عدد الغرف" required="required">--}}


{{--                                </div>--}}
{{--                                <div class="col-md-2">عدد الغرف</div>--}}
{{--                            </div>--}}

{{--                            <div class="test2 ">--}}


{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}

{{--                                    <input id="square" type="number" class="form-control " required="required"--}}
{{--                                           name="square" value="{{ $buInfo->square }}" autocomplete="square" autofocus--}}
{{--                                           placeholder="المساحه">--}}


{{--                                </div>--}}
{{--                                <div class="col-md-2">المساحه</div>--}}
{{--                            </div>--}}

{{--                            @if(auth()->user()->admin == 1)--}}


{{--                                <div class="test2 ">--}}


{{--                                    <div class="col-md-10" style="margin-bottom: 15px;">--}}

{{--                            <textarea name="small_desc" id="small-desc" cols="30" rows="4" class="form-control"--}}
{{--                                      required="required">--}}
{{--                                {{$buInfo->small_desc}}--}}

{{--                            </textarea>--}}


{{--                                    </div>--}}
{{--                                    <div class="col-md-2">الوصف المصغرلمحركات البحث</div>--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            <div class="test2 ">--}}


{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}
{{--                            <textarea name="large_desc" id="large-desc" cols="30" rows="4" class="form-control"--}}
{{--                                      required="required">--}}

{{--                     {{$buInfo->large_desc}}--}}

{{--                            </textarea>--}}
{{--                                    <br>--}}
{{--                                    <div class="alert alert-warning text-center">الوصف لا يزيد عن 160 حرف طبقا لمعايير--}}
{{--                                        جوجل--}}
{{--                                    </div>--}}


{{--                                </div>--}}
{{--                                <div class="col-md-2">الوصف الكامل للعقار</div>--}}
{{--                            </div>--}}

{{--                            @if(auth()->user()->admin == 1)--}}
{{--                                <div class="test2 ">--}}


{{--                                    <div class="col-md-10" style="margin-bottom: 15px;">--}}

{{--                                        <select name="status" id="status" class="form-control select2"--}}
{{--                                                required="required">--}}

{{--                                            <option value="">الحاله</option>--}}
{{--                                            <option value="1" {{$buInfo->status ==1 ?'selected' :''}}>مفعل</option>--}}
{{--                                            <option value="0" {{$buInfo->status ==0 ?'selected' :''}}>غير مفعل</option>--}}

{{--                                        </select>--}}


{{--                                    </div>--}}
{{--                                    <div class="col-md-2">الحاله</div>--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            <div class="test2 ">--}}


{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}

{{--                                    <input id="longitude" type="number" class="form-control " required="required"--}}
{{--                                           name="longitude" value="{{ $buInfo->longitude }}" autocomplete="longitude"--}}
{{--                                           autofocus--}}
{{--                                           placeholder="خط الطول">--}}


{{--                                </div>--}}
{{--                                <div class="col-md-2">خط الطول</div>--}}
{{--                            </div>--}}
{{--                            <div class="test2 ">--}}


{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}

{{--                                    <input id="latitude" type="number" class="form-control "--}}
{{--                                           name="latitude" value="{{ $buInfo->latitude }}" autocomplete="latitude"--}}
{{--                                           autofocus--}}
{{--                                           placeholder="دوائر العرض" required="required">--}}


{{--                                </div>--}}
{{--                                <div class="col-md-2">دوائر العرض</div>--}}
{{--                            </div>--}}


{{--                            <div class="test2 ">--}}


{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}
{{--                                    @php--}}
{{--                                        $rent = bu_rent();--}}
{{--                                    @endphp--}}
{{--                                    <select name="rent" id="rent" class="form-control select2" required="required">--}}
{{--                                        <option value="">نوع العمليه</option>--}}
{{--                                        @foreach($rent  as $index=>$rnt )--}}

{{--                                            <option--}}
{{--                                                value="{{$index}}" {{$buInfo->rent == $index ?'selected':''}}>{{$rnt}}</option>--}}
{{--                                        @endforeach--}}

{{--                                    </select>--}}


{{--                                </div>--}}
{{--                                <div class="col-md-2">نوع العمليه</div>--}}
{{--                            </div>--}}


{{--                            <div class="test2 ">--}}


{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}

{{--                                    <input id="meta" type="text" class="form-control "--}}
{{--                                           name="meta" value="{{$buInfo->meta }}" autocomplete="meta" autofocus--}}
{{--                                           placeholder="الكلمات  الدلاليه" required="required">--}}


{{--                                </div>--}}
{{--                                <div class="col-md-2">الكلمات الدلاليه</div>--}}
{{--                            </div>--}}

{{--                            <div class="test2 ">--}}

{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}
{{--                                    <input id="user_id" type="hidden" class="form-control "--}}
{{--                                           name="user_id" value="{{ auth()->user()->id}}" autocomplete="user_id"--}}
{{--                                           placeholder="اضيف بواسطه">--}}


{{--                                </div>--}}

{{--                            </div>--}}


{{--                            <div class="test2 ">--}}

{{--                                <div class="col-md-10" style="margin-bottom: 15px;">--}}
{{--                                    <input id="price" type="number" class="form-control "--}}
{{--                                           name="price" value="{{ $buInfo->price }}" autocomplete="price"--}}
{{--                                           placeholder="السعر">--}}


{{--                                </div>--}}
{{--                                <div class="col-md-2">السعر</div>--}}

{{--                            </div>--}}


{{--                            <div class="test2">--}}
{{--                                <div class="col-md-12  ">--}}
{{--                                    <button type="submit" class="btn btn-warning">--}}
{{--                                        {{ __('تعديل') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}


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
