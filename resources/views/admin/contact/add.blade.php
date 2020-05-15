@extends("admin.layouts.layout")

@section('title')
    اضف عضو جديد
@endsection




@section('content')
    <section class="content-header">
        <h1>
            أضف عضو

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin-panel')}}"><i class="fa fa-dashboard"></i> الرئيسيه</a></li>
            <li class=""><a href="{{url('/admin-panel/users')}}">التحكم في الأعضاء</a></li>
            <li class="active"><a href="{{url('/admin-panel/users/create')}}">أضف عضو</a></li>

        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">أضف عضو جديد</h3>
                    </div>

                    <div class="box-body">
                        @include('admin.partial._errors')
                        <form method="Post" action="{{ url('/admin-panel/users') }}">

                            @include('admin.user.form')
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

