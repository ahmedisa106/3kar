@extends('layouts.app')
@section('title')
    كل العقارات
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

    <div class="container">
        <div class="row profile">
            <div class="col-md-9">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/showAllBuilding')}}">الرئيسيه</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/showAllBuilding')}}">كل العقارات</a></li>

                        @php
                            $typ =[
                                      'شقه',
                                      'فيلا',
                                      'شاليه',

                        ]
                        @endphp
                        <li class="breadcrumb-item"><a href="{{url('/search?type='.$type)}}"> نوع العقار -> {{$typ[$type]}}</a></li>


                    </ol>
                </nav>


                <div class="profile-content">
                    <div class="row">

                        @if($bus->count()>0)

                            @foreach($bus as $bu)


                                <div class="col-lg-4 pull-right">
                                    <article class="col-item">
                                        <div class="photo">
                                            <div class="options">
                                                <a href="{{url('/singleBuilding',$bu->id)}}" class="btn btn-default"><i
                                                        class="fa fa-eye"></i></a>

                                            </div>


                                            <a href="{{url('/singleBuilding',$bu->id)}}"> <img
                                                    src="{{asset('/website/Bu_images/'.$bu->image)}}"
                                                    class="img-responsive thumbnail"
                                                    alt="Product" style="width: 250px; height: 250px;"/> </a>

                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price-details col-md-6">

                                                    @if($bu->status ==0)

                                                        <p class="pull-left btn btn-danger"
                                                           href="">في إنتظار التفعيل</p>

                                                    @else

                                                        <a class="pull-left btn btn-warning"
                                                           href="{{url('/singleBuilding',$bu->id)}}"> التفاصيل</a>
                                                    @endif
                                                    <p class="details">
                                                        @php
                                                            $type = bu_type();
                                                        @endphp
                                                        <strong> العقار : </strong>

                                                        @foreach($type as $index=>$tpe)

                                                            {{$bu->type == $index ? $tpe : ''}}
                                                        @endforeach
                                                    </p>


                                                    <p class="details">
                                                        <strong>السعر : </strong>
                                                        {{$bu->price}} <strong> ج.م </strong>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                </div>







                            @endforeach
                        @else
                            <div class="alert alert-danger text-center"><h4> لا يوجد أي عقارات حاليا <i
                                        class="fa fa-close"></i>
                                </h4></div>
                        @endif


                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="text-center">

                        {{$bus->appends(request()->query())->links()}}

                    </div>
                </div>


            </div>
            @include('website.bu.sidebar')

        </div>
    </div>

    <br>
    <br>

@endsection
