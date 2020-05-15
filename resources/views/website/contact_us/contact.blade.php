@extends('layouts.app')
@section('title')
    contact
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



    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->


    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">


            <form action="{{url('/contact')}}" method="post">

                {{csrf_field()}}
                @method('post')
                <div class="row">

                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-12">

                        @include('admin.partial._errors')

                        <form action="{{url('/contact')}}" method="post">

                            {{csrf_field()}}
                            @method('post')
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="well well-sm">
                                        <form>
                                            <div class="row">

                                                <div class="col-12 ">
                                                    <div class="form-group">

                                                            <textarea name="message" id="message" class="form-control"
                                                                      rows="9" cols="25"
                                                                      required="required"
                                                                      placeholder="The Message"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 ">
                                                    <div class="form-group">

                                                        <input type="text" name="name" class="form-control"
                                                               id="name"
                                                               placeholder="الإسم"
                                                               required="required"
                                                               value="{{auth()->user()->name ? : ''}}"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 ">
                                                    <div class="form-group">

                                                        <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                                            <input type="email" class="form-control" name="email"
                                                                   id="email"
                                                                   placeholder="البريد الإلكتروني"
                                                                   required="required"
                                                                   value="{{auth()->user()->email ? : '' }}"/></div>
                                                    </div>
                                                </div>

                                                    <div class="form-select col-md-6">
                                                        <select name="type">

                                                            <option value="">message Type</option>
                                                            @foreach(contact() as $ty)

                                                                <option value="{{$ty}}">{{$ty}} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>



                                                <div class="col-sm-6 ">
                                                    <div class="form-group">

                                                        <input type="text" name="subject" class="form-control"
                                                               id="subject"
                                                               placeholder="Subject Of Message"
                                                               required="required" value=""/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="text-align:center; margin-top: 50px;">
                                                <button type="submit"
                                                        class="button button-contactForm boxed-btn text-center "
                                                        id="btnContactUs">
                                                    Send
                                                </button>
                                            </div>

                                    </div>
                                </div>
                                <div class="col-lg-3 offset-lg-1">

                                    <div class="media contact-info">
                                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                                        <div class="media-body">
                                            <h3>{{getSetting('address')}}.</h3>
                                            <p>Rosemead, CA 91770</p>
                                        </div>
                                    </div>
                                    <div class="media contact-info">
                                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                        <div class="media-body">
                                            <h3>+1{{getSetting('mobile')}}</h3>
                                            <p>Mon to Fri 9am to 6pm</p>
                                        </div>
                                    </div>
                                    <div class="media contact-info">
                                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                                        <div class="media-body">
                                            <h3>{{getSetting('email')}}</h3>
                                            <p>Send us your query anytime!</p>
                                        </div>
                                    </div>
                                </div>


                        </form>

                    </div>


                </div>

            </form>


        </div>


    </section>



@endsection


