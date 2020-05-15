@extends("admin.layouts.layout")

@section('title')
    تعديل العضو   {{$user->name}}
@endsection



@section('content')



    <section class="content-header">
        <h1>
            تعديل العضو {{$user->name}}

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin-panel')}}"><i class="fa fa-dashboard"></i> الرئيسيه</a></li>
            <li class=""><a href="{{url('/admin-panel/users')}}">التحكم في الأعضاء</a></li>
            <li class="active"><a href="{{url('/admin-panel/users/edit/',$user->id)}}"> تعديل العضو {{$user->name}} </a>
            </li>

        </ol>
    </section>

    @include('admin.partial.swalert')
    <br>
    <div class="row">
        <div class="container">


            <!-- /.nav-tabs-custom -->
            <div class="col-md-5">
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">تعديل {{$user->name}} </h3>
                                </div>

                                <div class="box-body">


                                    @include('admin.partial._errors')

                                    <form method="POST" action="{{ url('admin-panel/users',$user->id)}}">
                                        @csrf
                                        @method('put')

                                        <div class="test2 ">

                                            <div class="col-md-12" style="margin-bottom: 15px;">
                                                <input id="name" type="text"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       name="name" value="{{ $user->name}}" required autocomplete="name"
                                                       autofocus
                                                       placeholder="اسم  المستخدم">

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="test2 ">

                                            <div class="col-md-12" style="margin-bottom: 15px;">
                                                <input id="email" type="email"
                                                       class="form-control @error('email') is-invalid @enderror"
                                                       name="email" value="{{ $user->email}}" required
                                                       autocomplete="email"
                                                       placeholder="البريد الإلكتروني">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="test2 ">

                                            <div class="col-md-12" style="margin-bottom: 15px;">
                                                <select name="admin" id="admin" class="form-control">
                                                    <option>كل الصلاحيات</option>
                                                    <option value="1" {{$user->admin =='1' ? 'selected' : ''}}>مدير
                                                    </option>
                                                    <option value="0" {{$user->admin =='0' ? 'selected' : ''}}>عضو
                                                    </option>

                                                </select>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="test2">
                                            <div class=" col-md-1 pull-right">
                                                <button type="submit" class="btn btn-warning">
                                                    <i class="fa fa-edit"></i> {{ __('تعديل') }}
                                                </button>
                                            </div>
                                        </div>

                                        @if($user->admin !=1)

                                            <div class="test2">
                                                <div class=" pull-left col-md-1">
                                                    <a onclick="return confirm('are you sure !!')"
                                                       class="btn btn-danger pull-left"
                                                       href="{{route('user.delete',$user->id)}}"><i
                                                            class="fa fa-trash"> </i> حذف </a>
                                                </div>
                                            </div>

                                        @endif


                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <br>
            <div class="col-md-7">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">عقارات مفعله</a>
                        </li>
                        <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">عقارات غير مفعله</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">

                            <table class="table table-bordered text-center">
                                <tr>
                                    <td>#</td>
                                    <td>إسم العقار</td>
                                    <td>اضيف في</td>
                                    <td>إلغاء التفعيل</td>
                                </tr>
                                @if($buEnable->count()>0)
                                    @foreach($buEnable as $bu)
                                        <tr>
                                            <td>
                                                {{$bu->id}}
                                            </td>
                                            <td>
                                                <a href="{{url('/admin-panel/bu/edit',$bu->id)}}">
                                                    {{$bu->name}} </a>
                                            </td>
                                            <td>

                                                {{$bu->created_at->toFormattedDateString()}}
                                            </td>
                                            <td>
                                                <a href="{{url('/admin-panel/changeStatus',$bu->id)}}"
                                                   class="btn btn-danger"><i class="fa fa-user-times"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                @else
                                    <div class="alert alert-danger text-center">لا يوجد عقارات غير مفعله</div>
                                @endif
                            </table>
                            <div class="text-center">

                                {{$buEnable->appends(request()->query())->links()}}

                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">

                            <table class="table table-bordered text-center" id="example2">
                                <tr>
                                    <td>#</td>
                                    <td>إسم العقار</td>
                                    <td>اضيف في</td>
                                    <td>تفعيل</td>
                                </tr>
                                @if($buWaiting->count()>0)
                                    @foreach($buWaiting as $bu)
                                        <tr>
                                            <td>
                                                {{$bu->id}}
                                            </td>
                                            <td>
                                                <a href="{{url('/admin-panel/bu/edit',$bu->id)}}">
                                                    {{$bu->name}} </a>
                                            </td>
                                            <td>

                                                {{$bu->created_at->toFormattedDateString()}}
                                            </td>
                                            <td><a href="{{url('/admin-panel/changeStatus',$bu->id)}}"
                                                   class="btn btn-success"><i class="fa fa-check"></i></a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <div class="alert alert-danger text-center">لا يوجد عقارات غير مفعله</div>
                                @endif
                            </table>
                            <div class="text-center">

                                {{$buWaiting->appends(request()->query())->links()}}

                            </div>

                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>


        </div>


    </div>
@endsection

