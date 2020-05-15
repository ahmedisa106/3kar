@extends("admin.layouts.layout")

@section('title')
    أضف عقار جديد
@endsection




@section('content')
    <section class="content-header">
        <h1>
            أضف عقار جديد

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin-panel')}}"><i class="fa fa-dashboard"></i> الرئيسيه</a></li>
            <li class=""><a href="{{url('/admin-panel/bu')}}">التحكم في العقارات</a></li>
            <li class="active"><a href="{{url('/admin-panel/bu/create')}}">أضف عقار جديد</a></li>

        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">أضف عقار جديد</h3>
                    </div>

                    <div class="box-body">
                        @include('admin.partial._errors')
                        <form method="Post" action="{{ url('/admin-panel/bu') }}" enctype="multipart/form-data">

                            @include('admin.bu.form')
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

