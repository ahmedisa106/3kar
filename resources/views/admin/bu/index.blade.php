@extends("admin.layouts.layout")

@section('title')
    التحكم في العقارات
@endsection

@section('header')
    <!-- DataTables -->

    {!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
@endsection



@section('content')
    <section class="content-header">
        <h1>
            التحكم في العقارات

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin-panel')}}"><i class="fa fa-dashboard"></i> الرئيسيه</a></li>
            <li class="active"><a href="{{url('/admin-panel/users')}}"> التحكم في العقارات
                </a></li>

        </ol>
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> التحكم في العقارات</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        @include('admin.partial.swalert')

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>إسم العقار</th>
                                <th>صوره العقار</th>
                                <th>نوع العقار</th>
                                <th>عدد الغرف</th>
                                <th>المساحه(م)</th>

                                <th>الحاله</th>

                                <th>السعر$</th>

                                <th>العمليات</th>
                            </tr>
                            </thead>


                            <tbody>

                            @foreach($bu as $bul)
                                @php
                                    $type = bu_type();
                                @endphp
                                <tr class="text-center">
                                    <td>{{$bul->id}}</td>
                                    <td>{{$bul->name}}</td>
                                    <td><img src="{{$bul->image_path}}" class="thumbnail" alt="{{$bul->image}}"
                                             style="width: 100px; height: 100px;"></td>
                                    <td>{{$type[$bul->type]}}</td>
                                    <td>{{$bul->rooms}}</td>
                                    <td>{{$bul->square}} م</td>

                                    <td>{{($bul->status ==1)? 'مفعل':'غير مفعل' }}</td>


                                    <td> {{$bul->price}} $</td>


                                    <td>

                                        <a class="btn btn-warning"
                                           href="{{url('admin-panel/bu/edit',$bul->id)}}">تعديل</a>
                                        <a class="btn btn-danger" onclick="return confirm('هل أنت متأكد !')"
                                           href="{{url('admin-panel/bu',$bul->id)}}">حذف</a>

                                        {{--                                    <form action="{{url('admin-panel/bu',$bul->id)}}" method="post" >--}}
                                        {{--                                        {{csrf_field()}}--}}
                                        {{--                                        @method('delete')--}}
                                        {{--                                        <button class="btn btn-danger delete" type="submit">حذف</button>--}}
                                        {{--                                    </form>--}}

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

        {{--        data Table--}}
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        });

    </script>
@endsection



