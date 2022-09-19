@extends('home.index')

@section('content')
  @include('home.banner.default')

  <div class="main-about">
    <div class="about-general overflow-hidden">
      <img class="bg-circle" src="{{ asset('image/circle.png') }}" alt="">
      <div class="section section-about section-mission">
        <div class="container">
          <img class="img-fluid rhombus-img" src="{{ asset('image/rhombus-img.png') }}" alt="">
          <div class="wrap">
            <div class="mission-content">
              <h3>Sứ mệnh</h3>
              <h2>Chúng tôi giải phóng chủ doanh nghiệp khỏi gánh nặng quản lý</h2>
              <a href="#" class="btn btn-primary btn-contact">Liên hệ</a>
            </div>
            <img class="img-fluid mission-image" src="{{ asset('image/mission-img.png') }}" alt="">
          </div>
        </div>
        <div class="line --bottom"></div>
      </div>
      <div class="section section-about section-product">
        <div class="container">
          <div class="wrap">
            <h3>Sản phẩm ngành</h3>
          </div>
        </div>
      </div>
      <img class="bg-circle" src="{{ asset('image/circle.png') }}" alt="">
    </div>
  </div>
@endsection