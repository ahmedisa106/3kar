{{--<li>--}}
{{--    <a href="{{url('/admin-panel')}}"><i class="fa fa-dashboard"></i> الرئيسيه </a>--}}

{{--</li>--}}


ّ{{--  users --}}

<li>
    <a href="{{url('/admin-panel')}}">
        <i class="fa fa-dashboard "></i> <span>الرئيسيه</span>

    </a>


</li>


<li class=" treeview">
    <a href="#">
        <i class="fa fa-users "></i> <span>التحكم في الأعضاء</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left "></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{url('/admin-panel/users/create')}}"><i class="fa fa-circle-o"></i> أضف عضو </a>
        </li>
        <li><a href="{{url('/admin-panel/users')}}"><i class="fa fa-circle-o"></i> كل الأعضاء</a></li>
    </ul>

</li>

<li class=" treeview">
    <a href="#">
        <i class="fa fa-gears "></i> <span>اعدادات الموقع</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left "></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{url('/admin-panel/setting')}}"><i class="fa fa-circle-o"></i> اعدادات رئيسيه</a>
        </li>
        <li><a href="index2.html"><i class="fa fa-circle-o"></i> اعدادات اخري</a></li>
    </ul>
</li>

<li class=" treeview">
    <a href="#">
        <i class="fa fa-home "></i> <span>التحكم في العقارات</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left "></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{url('/admin-panel/bu/create')}}"><i class="fa fa-circle-o"></i>أضف عقار</a>
        </li>
        <li><a href="{{url('/admin-panel/bu')}}"><i class="fa fa-circle-o"></i> كل العقارات</a></li>
    </ul>
</li>


<li class=" treeview">
    <a href="#">
        <i class="fa fa-home "></i> <span>رسائل الموقع</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left "></i>
            </span>
    </a>
    <ul class="treeview-menu">

        <li><a href="{{url('/admin-panel/contact')}}"><i class="fa fa-circle-o"></i> أرسال رساله</a></li>
        <li><a href="{{url('/admin-panel/contact/index')}}"><i class="fa fa-circle-o"></i> الرسائل</a></li>
    </ul>
</li>

