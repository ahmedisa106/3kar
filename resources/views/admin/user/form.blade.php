    @csrf

    <div class="test2 ">

        <div class="col-md-12" style="margin-bottom: 15px;">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                   placeholder="اسم  المستخدم">

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="test2 ">

        <div class="col-md-12"  style="margin-bottom: 15px;">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" required autocomplete="email"
                   placeholder="البريد الإلكتروني">

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="test2">

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                   required autocomplete="new-password" placeholder="كرر كلمه المرور">
        </div>
    </div>

    <div class="test2 ">

        <div class="col-md-6" style="margin-bottom: 15px;">
            <input id="password" type="password"
                   class="form-control @error('password') is-invalid @enderror mb-2" name="password"
                   required autocomplete="new-password" placeholder="كلمه المرور">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>



    <div class="test2">
        <div class="col-md-12  ">
            <button type="submit" class="btn btn-warning">
                {{ __('تسجيل عضويه جديده') }}
            </button>
        </div>
    </div>
