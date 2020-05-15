@extends("admin.layouts.layout")

@section('title')
    تعديل العقار
@endsection




@section('content')
    <section class="content-header">
        <h1>
            تعديل العقار

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin-panel')}}"><i class="fa fa-dashboard"></i> الرئيسيه</a></li>
            <li class=""><a href="{{url('/admin-panel/bu')}}">التحكم في العقارات</a></li>
            <li class="active"><a href="{{url('/admin-panel/bu/create')}}">تعديل العقار</a></li>

        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">أتعديل العقار</h3>
                    </div>

                    <div class="box-body">
                        @include('admin.partial._errors')

                        <form method="Post" action="{{ url('/admin-panel/bu',$bu->id) }}" enctype="multipart/form-data">

                            {{csrf_field()}}

                            @method("put")


                            <div class="test2 ">


                                <div class="col-md-10" style="margin-bottom: 15px;">

                                    <input id="name" type="text" class="form-control "
                                           name="name" value="{{$bu->name}}" autocomplete="name" autofocus
                                           placeholder="اسم  العقار">


                                </div>
                                <div class="col-md-2">اسم العقار</div>
                            </div>

                            {{--Image--}}

                            <div class="test2 ">


                                <div class="col-md-10" style="margin-bottom: 15px;">

                                    <input id="image" type="file" class="form-control "
                                           name="image" value="default.png">


                                </div>
                                <div class="col-md-2">صوره العقار</div>
                            </div>
                            <div class="test2 ">
                                <div class="col-md-10" style="margin-bottom: 15px;"><img src="{{$bu->image_path}}"
                                                                                         alt=""
                                                                                         style="width: 100px; height: 100px;">
                                </div>


                            </div>


                            <div class="test2 ">


                                <div class="col-md-10" style="margin-bottom: 15px;">

                                    <select name="place" id="place" class="form-control select2">

                                        @php
                                            $type = bu_place();
                                        @endphp
                                        <option value="">المناطق</option>

                                        @foreach($type as $index=>$ty)
                                            <option
                                                value="{{$ty}}"{{$ty == $bu->place ? 'selected' : ''}}>{{$ty}} </option>

                                        @endforeach


                                    </select>


                                </div>
                                <div class="col-md-2">المنطقه</div>
                            </div>


                            <div class="test2 ">


                                <div class="col-md-10" style="margin-bottom: 15px;">

                                    <select name="type" id="type" class="form-control select2">

                                        @php
                                            $type = bu_type();
                                        @endphp

                                        @foreach($type as $index=>$ty)

                                            <option
                                                value="{{$index}}"{{$index == $bu->type ? 'selected' : ''}}>{{$ty}}</option>
                                        @endforeach


                                    </select>

                                </div>
                                <div class="col-md-2">نوع العقار</div>
                            </div>

                            <div class="test2 ">


                                <div class="col-md-10" style="margin-bottom: 15px;">

                                    <input id="rooms" type="number" class="form-control "
                                           name="rooms" value="{{ $bu->rooms }}" autocomplete="rooms" autofocus
                                           placeholder="عدد الغرف">


                                </div>
                                <div class="col-md-2">عدد الغرف</div>
                            </div>

                            <div class="test2 ">


                                <div class="col-md-10" style="margin-bottom: 15px;">

                                    <input id="square" type="number" class="form-control "
                                           name="square" value="{{ $bu->square }}" autocomplete="square" autofocus
                                           placeholder="المساحه">


                                </div>
                                <div class="col-md-2">المساحه</div>
                            </div>

                            <div class="test2 ">


                                <div class="col-md-10" style="margin-bottom: 15px;">

                            <textarea name="small_desc" id="small-desc" cols="30" rows="4" class="form-control">
                                    {{$bu->small_desc}}
                            </textarea>


                                </div>
                                <div class="col-md-2">الوصف المصغرللعقار</div>
                            </div>

                            <div class="test2 ">

                                <div class="col-md-10" style="margin-bottom: 15px;">
                                <textarea name="large_desc" id="large-desc" cols="30" rows="4" class="form-control">

                                     {{$bu->large_desc}}

                                </textarea>
                                    <br>
                                    <div class="alert alert-warning text-center">الوصف لا يزيد عن 160 حرف طبقا لمعايير
                                        جوجل
                                    </div>


                                </div>
                                <div class="col-md-2">الوصف الكامل للعقار</div>
                            </div>

                            @if(auth()->user()->admin =1)
                                <div class="test2 ">


                                    <div class="col-md-10" style="margin-bottom: 15px;">

                                        <select name="status" id="status" class="form-control select2">

                                            <option value="">الحاله</option>
                                            <option value="1" {{$bu->status == 1 ? 'selected' : ''}}>مفعل</option>
                                            <option value="0" {{$bu->status == 0 ? 'selected' : ''}}>غير مفعل</option>

                                        </select>


                                    </div>
                                    <div class="col-md-2">الحاله</div>
                                </div>
                            @endif

                            <div class="test2 ">


                                <div class="col-md-10" style="margin-bottom: 15px;">

                                    <input id="latitude" type="number" class="form-control "
                                           name="longitude" value="{{ $bu->longitude }}" autocomplete="latitude"
                                           autofocus
                                           placeholder="خط الطول">


                                </div>
                                <div class="col-md-2">خط الطول</div>
                            </div>
                            <div class="test2 ">


                                <div class="col-md-10" style="margin-bottom: 15px;">

                                    <input id="latitude" type="number" class="form-control "
                                           name="latitude" value="{{ $bu->latitude }}" autocomplete="latitude"
                                           autofocus
                                           placeholder="دوائر العرض">


                                </div>
                                <div class="col-md-2">دوائر العرض</div>
                            </div>


                            <div class="test2 ">


                                <div class="col-md-10" style="margin-bottom: 15px;">
                                    @php
                                        $rent = bu_rent();
                                    @endphp
                                    <select name="rent" id="rent" class="form-control select2">

                                        @foreach($rent  as $index=>$rnt )

                                            <option
                                                value="{{$index}}" {{$bu->rent == $index ? 'selected' : ''}}>{{$rnt}}</option>
                                        @endforeach

                                    </select>


                                </div>
                                <div class="col-md-2">نوع العمليه</div>
                            </div>

                            @if(auth()->user()->admin =1)

                                <div class="test2 ">


                                    <div class="col-md-10" style="margin-bottom: 15px;">

                                        <input id="meta" type="text" class="form-control "
                                               name="meta" value="{{ $bu->meta }}" autocomplete="meta" autofocus
                                               placeholder="الكلمات  الدلاليه">


                                    </div>
                                    <div class="col-md-2">الكلمات الدلاليه</div>
                                </div>

                                <div class="test2 ">

                                    <div class="col-md-10">
                                        <input id="user_id" type="hidden" class="form-control "
                                               name="user_id" value="{{ auth()->user()->id}}" autocomplete="user_id"
                                               placeholder="اضيف بواسطه">


                                    </div>

                                </div>
                            @endif

                            <div class="test2 ">

                                <div class="col-md-10" >
                                    <input id="price" type="hidden" class="form-control "
                                           name="user_id" value="{{auth()->user()->id}}" autocomplete="user_id"
                                           placeholder="بواسطه">


                                </div>


                            </div>


                            <div class="test2 ">

                                <div class="col-md-10" >
                                    <input id="price" type="number" class="form-control "
                                           name="price" value="{{ $bu->price}}" autocomplete="price"
                                           placeholder="السعر">


                                </div>
                                <div class="col-md-2">السعر</div>

                            </div>


                            <div class="test2">
                                <div class="col-md-12  ">
                                    <button type="submit" class="btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                        {{ __('تعديل العقار') }}
                                    </button>


                                </div>
                            </div>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
<script>

    //delete alert
    $('.delete').click(function (e) {

        e.preventDefault();

        Swal.fire({
            title: ' هل أنت متأكد?',
            text: "بإمكانك الرجوع عن هذا الأمر !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'نعم !',
            cancelButtonText: 'لا !'
        }).then((result) => {
            if (result.value) {
                $('.delete').closest('form').submit();


            }
        })
    })

</script>

