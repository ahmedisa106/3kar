{{csrf_field()}}


<div class="test2 ">


    <div class="col-md-10" style="margin-bottom: 15px;">

        <input id="name" type="text" class="form-control "
               name="name" value="{{ old('name') }}" autocomplete="name" autofocus
               placeholder="اسم  العقار" required="required">


    </div>
    <div class="col-md-2">اسم العقار</div>
</div>

<div class="test2 ">


    <div class="col-md-10" style="margin-bottom: 15px;">

        <input id="image" type="file" class="form-control" required="required"
               name="image" value="default.png">


    </div>
    <div class="col-md-2">صوره العقار</div>
</div>

<div class="test2 ">


    <div class="col-md-10" style="margin-bottom: 15px;">

        <select name="place" id="place" class="form-control select2" required="required">

            @php
                $type = bu_place();
            @endphp
            <option value="">المنطقه</option>

            @foreach($type as $index=>$ty)

                <option value="{{$ty}}">{{$ty}} </option>
            @endforeach


        </select>


    </div>
    <div class="col-md-2">المنطقه</div>
</div>


<div class="test2 ">


    <div class="col-md-10" style="margin-bottom: 15px;">

        <select name="type" id="type" class="form-control select2" required="required">

            @php
                $type = bu_type();
            @endphp
            <option value="">نوع العقار</option>

            @foreach($type as $index=>$ty)

                <option value="{{$index}}">{{$ty}} </option>
            @endforeach


        </select>

    </div>
    <div class="col-md-2">نوع العقار</div>
</div>

<div class="test2 ">


    <div class="col-md-10" style="margin-bottom: 15px;">

        <input id="rooms" type="number" class="form-control "
               name="rooms" value="{{ old('rooms') }}" autocomplete="rooms" autofocus
               placeholder="عدد الغرف" required="required">


    </div>
    <div class="col-md-2">عدد الغرف</div>
</div>

<div class="test2 ">


    <div class="col-md-10" style="margin-bottom: 15px;">

        <input id="square" type="number" class="form-control " required="required"
               name="square" value="{{ old('square') }}" autocomplete="square" autofocus
               placeholder="المساحه">


    </div>
    <div class="col-md-2">المساحه</div>
</div>

@if(auth()->user()->admin == 1)


    <div class="test2 ">


        <div class="col-md-10" style="margin-bottom: 15px;">

        <textarea name="small_desc" id="small-desc" cols="30" rows="4" class="form-control" required="required">

        </textarea>


        </div>
        <div class="col-md-2">الوصف المصغرلمحركات البحث</div>
    </div>
@endif

<div class="test2 ">


    <div class="col-md-10" style="margin-bottom: 15px;">
        <textarea name="large_desc" id="large-desc" cols="30" rows="4" class="form-control" required="required">



        </textarea>
        <br>
        <div class="alert alert-warning text-center">الوصف لا يزيد عن 160 حرف طبقا لمعايير جوجل</div>


    </div>
    <div class="col-md-2">الوصف الكامل للعقار</div>
</div>

@if(auth()->user()->admin == 1)
    <div class="test2 ">


        <div class="col-md-10" style="margin-bottom: 15px;">

            <select name="status" id="status" class="form-control select2" required="required">

                <option value="">الحاله</option>
                <option value="1">مفعل</option>
                <option value="0">غير مفعل</option>

            </select>


        </div>
        <div class="col-md-2">الحاله</div>
    </div>
@endif

<div class="test2 ">


    <div class="col-md-10" style="margin-bottom: 15px;">

        <input id="longitude" type="number" class="form-control " required="required"
               name="longitude" value="{{ old('longitude') }}" autocomplete="longitude" autofocus
               placeholder="خط الطول">


    </div>
    <div class="col-md-2">خط الطول</div>
</div>
<div class="test2 ">


    <div class="col-md-10" style="margin-bottom: 15px;">

        <input id="latitude" type="number" class="form-control "
               name="latitude" value="{{ old('latitude') }}" autocomplete="latitude" autofocus
               placeholder="دوائر العرض" required="required">


    </div>
    <div class="col-md-2">دوائر العرض</div>
</div>


<div class="test2 ">


    <div class="col-md-10" style="margin-bottom: 15px;">
        @php
            $rent = bu_rent();
        @endphp
        <select name="rent" id="rent" class="form-control select2" required="required">
            <option value="">نوع العمليه</option>
            @foreach($rent  as $index=>$rnt )

                <option value="{{$index}}">{{$rnt}}</option>
            @endforeach

        </select>


    </div>
    <div class="col-md-2">نوع العمليه</div>
</div>


<div class="test2 ">


    <div class="col-md-10" style="margin-bottom: 15px;">

        <input id="meta" type="text" class="form-control "
               name="meta" value="{{ old('meta') }}" autocomplete="meta" autofocus
               placeholder="الكلمات  الدلاليه" required="required">


    </div>
    <div class="col-md-2">الكلمات الدلاليه</div>
</div>

<div class="test2 ">

    <div class="col-md-10" >
        <input id="user_id" type="hidden" class="form-control "
               name="user_id" value="{{ auth()->user()->id}}" autocomplete="user_id"
               placeholder="اضيف بواسطه">


    </div>

</div>


<div class="test2 ">

    <div class="col-md-10" style="margin-bottom: 15px;">
        <input id="price" type="number" class="form-control "
               name="price" value="{{ old('price') }}" autocomplete="price"
               placeholder="السعر">


    </div>
    <div class="col-md-2">السعر</div>

</div>


<div class="test2">
    <div class="col-md-12  ">
        <button type="submit" class="btn btn-warning">
            {{ __('إاضافه عقار جديد') }}
        </button>
    </div>
</div>
