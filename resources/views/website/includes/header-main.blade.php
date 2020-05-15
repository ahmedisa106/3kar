<div id="sticky-header" class="main-header-area">
    <div class="container">
        <div class="header_bottom_border">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-2">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('/')}}design/realestate/img/logo.png" alt="">
                        </a>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">

                    <div class="main-menu  d-none d-lg-block">
                        <nav>

                            <ul id="navigation">


                                <li><a class="{{is_active('home')}}" href="{{url('/home')}}">home</a></li>

                                <li><a class="{{ is_active('showAllBuilding') }}"
                                       href="{{url('/showAllBuilding')}}">All building</a></li>


                                <li ><a  href="{{url('/search?rent=1')}}">For Rent <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">

                                        @foreach(bu_type() as $index=>$type)
                                            <li ><a href="{{url('/search?rent=1&type='.$index)}}">
                                                    <h5>{{$type}}</h5></a></li>
                                        @endforeach

                                    </ul>
                                </li>

                                <li><a  href="{{url('/search?rent=0')}}">For Sale <i class="ti-angle-down"></i></a>
                                    <ul class="submenu">

                                        @foreach(bu_type() as $index=>$type)
                                            <li><a href="{{url('/search?rent=0&type='.$index)}}">
                                                    <h5>{{$type}}</h5></a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>


                                <li><a class="{{is_active('contact')}}" href="{{url('/contact')}}">Contact</a>
                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 d-none d-lg-block">


                    <div class="Appointment">


                        <div class="main-menu  d-none d-lg-block">
                            <nav>


                                @guest()
                                    <ul id="navigation">
                                        <li><a class="{{is_active('contact')}}"
                                               href="{{route('login')}}">login</a>
                                        </li>

                                        <li><a class="{{is_active('contact')}}"
                                               href="{{route('register')}}">register</a>
                                        </li>
                                    </ul>
                                @else

                                    <ul id="navigation">


                                        <li style="margin-right: 100px;"><a href="#">
                                                {{auth()->user()->name}}
                                                <img class="img-circle" style="border-radius: 50%; width: 30px;"
                                                     src="{{asset('/')}}design/realestate/img/post/post_3.png"
                                                     alt="">

                                            </a>


                                            <ul class="submenu">

                                                <li>

                                                    <a href="{{url('/user/create/building')}}">

                                                        Add Building Free</a>


                                                </li>
                                                <li>
                                                    <a href="{{url('/user/buildingShow')}}">

                                                        <span
                                                            style="color: red"> {{buForUserCount(auth()->user()->id ,1)}} </span>
                                                        My Buildings </a>
                                                </li>
                                                <li><a href="{{url('/user/buildingShow/waiting')}}">
                                                        <span
                                                            style="color: red"> {{buForUserCount(auth()->user()->id ,0)}} </span>

                                                        Waiting Approval</a>
                                                </li>

                                                <li>
                                                    <a href="{{url('/user/editSetting')}}">
                                                        Settings</a>

                                                </li>


                                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">


                                                        logout
                                                    </a>
                                                </li>

                                                <form id="logout-form" action="{{ route('logout') }}"
                                                      method="POST"
                                                      style="display: none;">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>


                                    </ul>

                                @endguest


                            </nav>
                        </div>


                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none">


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
