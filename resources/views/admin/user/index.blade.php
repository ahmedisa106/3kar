@extends("admin.layouts.layout")

@section('title')
    التحكم في الأعضاء
@endsection

@section('header')
    <!-- DataTables -->

    {!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection



@section('content')
    <section class="content-header">
        <h1>
            التحكم في الأعضاء

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin-panel')}}"><i class="fa fa-dashboard"></i> الرئيسيه</a></li>
            <li class="active"><a href="{{url('/admin-panel/users')}}">التحكم في الأعضاء</a></li>

        </ol>
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hover Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        @include('admin.partial.swalert')
                        <table id="example2" class="table table-bordered table-hover text-center">
                            <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>إسم المستخدم</th>
                                <th>البريد الإلكتروني</th>
                                <th>أضيف في</th>
                                <th>عقاراتي</th>
                                <th>الصلاحيات</th>
                                <th>التحكم</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($users as $user)
                                <tr class="text-center">
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>
                                        <a class="text-center"
                                           href="{{url('/admin-panel/bu/user_id='.$user->id)}}"><span
                                                class="btn btn-success btn-circle"><i class="fa fa-link"></i></span></a>

                                    </td>
                                    <td>{{$user->admin ==1 ? 'مدير ': 'عضو'}}</td>

                                    <td>

                                        <a class="btn btn-warning "
                                           href="{{url('/admin-panel/users/'.$user->id.'/edit')}}">تعديل</a>
                                        {{--                                    @if($user->admin !=1)--}}
                                        <a class="btn btn-danger"
                                           onclick="return confirm(    'هل انت متأكد من حذف {{$user->name}}')"
                                           href="{{url('/admin-panel/users/'.$user->id)}}">حذف</a>


                                        {{--                                    <form action="{{url('/admin-panel/users',$user->id)}}" method="post">--}}
                                        {{--                                            {{csrf_field()}}--}}
                                        {{--                                            @method('delete')--}}
                                        {{--                                            <button class="btn btn-danger delete">حذف</button>--}}
                                        {{--                                            @endif--}}


                                        {{--                                        </form>--}}


                                    </td>


                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->


@endsection





















@section('footer')
    <!-- DataTables -->



    {!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}

    <script>
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })


    </script>
@endsection
