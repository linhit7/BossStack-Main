@extends('home.index')

@section('content')
  <div class="main-login">
    <div class="setion section-login pt-96 pb-96">
      <div class="container">
        <div class="wrap">
          <div class="login-box">
            <div class="login-image login-item">
              <img class="img-fluid" src="{{ asset('image/banner-feature.png') }}" alt="">
            </div>

            <div class="login-content login-item">
              <img class="img-fluid login-logo" src="{{ asset('image/logo-slogan.png') }}"
                alt="">
              <h3 class="login-text">
                Welcome!
                <img class="img-fluid" src="{{ asset('image/icon-wellcome.svg') }}" alt="">
              </h3>

              @if (Session::has('infor'))
                <div class="form-group has-feedback">
                  <font color='#ff0000'><b>{{ Session::get('infor') }}</b></font>
                </div>
              @endif
              <form class="login-form" action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="login-form__group">
                  <input type="email" class="form-control" id="email" placeholder="Email"
                    name="email" value="{{ env('TEST_USERNAME') }}">
                </div>

                <div class="login-form__group">
                  <input type="password" class="form-control" placeholder="Password" name="password"
                    id="password" value="{{ env('TEST_PASSWORD') }}">
                  <span class="show-text"></span>
                </div>

                <div class="login-form__group d-flex align-items-center">
                  <input type="captchacode" class="form-control" placeholder="Mã kiểm tra"
                    name="captchacode">
                  <img id="captcha" name="captcha" src="{{ route('apiadmin-getCaptcha') }}">
                </div>

                @if (count($errors) > 0)
                  @foreach ($errors->all() as $error)
                    <p class="login-noti error">
                      <i class="fa-solid fa-circle-exclamation"></i>
                      {{ $error }}
                    </p>
                  @endforeach
                @endif

                <button type="submit" class="btn btn-primary btn-login">Đăng nhập</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('assets/js/login.js') }}"></script>
@endsection
