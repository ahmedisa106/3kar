@extends("admin.layouts.layout")

@section('title')
    تعديل اعدادات الموقع
@endsection




@section('content')
    <section class="content-header">
        <h1>
            تعديل اعدادات الموقع

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin-panel')}}"><i class="fa fa-dashboard"></i> الرئيسيه</a></li>
            <li class="active"><a href="{{url('/admin-panel/setting')}}"> تعديل اعدادات الموقع</a></li>


        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> تعديل اعدادات الموقع</h3>
                    </div>


                    <div class="box-body">

                            @include('admin.partial.swalert')
                            @include('admin.partial._errors')
                        <form action="{{url('admin-panel/setting')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                        @foreach($siteSetting as $setting)
                            <div class="test2">



                                <div class="col-lg-10" style="margin-bottom: 15px;">

                                    @if($setting->type ==0)
                                        <input id="name" type="text"
                                               class="form-control pull-left"
                                               name="{{$setting->name}}" value="{{$setting->value}}"  autocomplete="name"
                                               autofocus
                                               placeholder="اسم  الاعدادات">



                                    @elseif($setting->type==2)
                                        <input id="slider" type="file"
                                               class="form-control pull-left"
                                               name="{{$setting->name}}">
                                        <br>
                                        <br>


                                        <img class="thumbnail" src="{{url('/website/slider/'.getSetting(['slider']))}}" alt="" style="width: 200px;height: 100px;">





                                    @else


                                        <textarea   class=" form-control" name="{{$setting->name}}" id="name" cols="30"
                                                  rows="10" >{{$setting->value}}
                                        </textarea>


                                    @endif


                                </div>
                                <div class="col-md-2">{{$setting->slug}}</div>

                            </div>
                            <div class="clearfix"></div>
                            <br>
                        @endforeach
                            <button class="btn btn-app" name="submit" type="submit"><i class="fa fa-save"></i>حفظ</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

