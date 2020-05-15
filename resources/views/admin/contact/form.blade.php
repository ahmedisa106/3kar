@extends("admin.layouts.layout")

@section('title')
    إتصل بنا
@endsection




@section('content')
    <section class="content-header">
        <h1>
           إتصل بنا

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin-panel')}}"><i class="fa fa-dashboard"></i> الرئيسيه</a></li>
            <li class="active"><a href="{{url('/contact')}}">إتصل بنا</a></li>


        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"> إتصل بنا</h3>
                    </div>


                    <div class="box-body">

                        @include('admin.partial.swalert')
                        @include('admin.partial._errors')


                        <form action="{{url('/contact')}}" method="post">
                            {{csrf_field()}}
                            @method('post')

                                <div class="test2">


                                    <div class="col-lg-10" style="margin-bottom: 15px;">


                                            <input id="name" type="text"
                                                   class="form-control pull-left"
                                                   name="name" value=""
                                                   autocomplete="name"
                                                   autofocus
                                                   placeholder="اسم المرسل">



                                    </div>
                                    <div class="col-md-2">اسم المرسل</div>

                                </div>
                            <div class="test2">


                                <div class="col-lg-10" style="margin-bottom: 15px;">


                                    <input id="email" type="email"
                                           class="form-control pull-left"
                                           name="email" value=""
                                           autocomplete="email"
                                           autofocus
                                           placeholder="البريد الإلكتروني">



                                </div>
                                <div class="col-md-2">البريد الإلكتروني</div>

                            </div>
                            <div class="test2">


                                <div class="col-lg-10" style="margin-bottom: 15px;">


                                    <input id="subject" type="text"
                                           class="form-control pull-left"
                                           name="subject" value=""
                                           autocomplete="subject"
                                           autofocus
                                           placeholder="عنوان الرساله">



                                </div>
                                <div class="col-md-2">عنوان الرساله</div>

                            </div>
                            <div class="test2">


                                <div class="col-lg-10" style="margin-bottom: 15px;">


                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="الرساله"></textarea>



                                </div>
                                <div class="col-md-2">الرساله</div>

                            </div>
                            <div class="test2">


                                <div class="col-lg-10" style="margin-bottom: 15px;">


                                    <select name="type" id="type" class="form-control">

                                        <option value="" selected>...</option>
                                        @foreach(contact() as $index=>$val)
                                            <option value="{{$val}}">{{$val}}</option>
                                         @endforeach


                                    </select>



                                </div>
                                <div class="col-md-2">نوع الرساله</div>

                            </div>


                                <div class="clearfix"></div>
                                <br>

                            <button class="btn btn-app" name="submit" type="submit"><i class="fa fa-save"></i>تنفيذ
                            </button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

