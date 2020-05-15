@extends("admin.layouts.layout")

@section('title')
    التحكم في رسائل الموقع
@endsection

@section('header')
    <!-- DataTables -->

    {!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection



@section('content')
    <section class="content-header">
        <h1>
            التحكم في رسائل الموقع

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin-panel')}}"><i class="fa fa-dashboard"></i> الرئيسيه</a></li>
            <li class="active"><a href="{{url('/admin-panel/contact/index')}}">التحكم في رسائل الموقع</a></li>

        </ol>
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">التحكم في رسائل الموقع</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        @include('admin.partial.swalert')
                        <table id="example2" class="table table-bordered table-hover text-center">
                            <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>إسم المرسل</th>
                                <th>الرساله</th>
                                <th>البريد الإلكتروني</th>
                                <th>نوع الرساله</th>
                                <th>موضوع الرساله</th>
                                <th>حاله الرساله</th>
                                <th>التحكم</th>
                            </tr>
                            </thead>



                            <tbody >
                            @foreach($contacts as $contact)

                            <tr class="text-center">
                                <td>{{$contact->id}}</td>
                                <td>{{$contact->name}}</td>
                                <td>{{$contact->message}}</td>
                                <td>{{$contact->email}}</td>
                                <td>
                                  {{$contact->type}}
                                </td>
                                <td>{{$contact->subject}}</td>

                                <td>{{$contact->view =='0'? 'رساله جديده' : 'رساله قديمه'}}</td>

                                <td>

                                    <a class="btn btn-warning " href="{{url('/admin-panel/contact/'.$contact->id.'/edit')}}">تعديل</a>
{{--                                    @if($user->admin !=1)--}}
                                    <a class="btn btn-danger" onclick="return confirm(    'هل انت متأكد من حذف {{$contact->name}}')" href="{{url('/admin-panel/contact/'.$contact->id)}}">حذف</a>


{{--                                    <form action="{{url('/admin-panel/users',$contact->id)}}" method="post">--}}
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
