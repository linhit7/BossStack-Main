@extends('home.index')

@section('content')
  @include('home.banner.default')

  <div class="main-contact">
    <div class="section section-contact pt-96 pb-96">
      <div class="container">
        <div class="wrap">
          <div class="row">
            <div class="col-12 col-xl-6 contact-item">
              <h3>Liên hệ tư vấn</h3>
              <p>Chúng tôi sẽ giúp bạn giải đáp các thắc mắc về:</p>
              <p>Tìm ra giải pháp thích hợp với mô hình kinh doanh của bạn</p>
              <p>Áp dụng công nghệ để tối ưu hóa quy trình kinh doanh:</p>
              <p class="contact-info">
                <img class="img-fluid icon" src="{{ asset('image/icon-map.svg') }}" alt="">
                LM81- 42.OT04 (Officetel), Landmark 81 Vinhomes Central Park, 720A Điện Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh.
              </p>
              <p class="contact-info">
                <img class="img-fluid icon" src="{{ asset('image/icon-phone.svg') }}" alt="">
                +84 918 90 55 00
              </p>
              <p class="contact-info">
                <img class="img-fluid icon" src="{{ asset('image/icon-mail.svg') }}" alt="">
                info@bossstack.vn
              </p>
            </div>
            <div class="col-12 col-xl-6 contact-item">
              <a href="{{ route('home') }}" class="logo"><img class="img-fluid" src="{{ asset('image/logo.svg') }}" alt=""></a>
              <h4>Liên hệ với chúng tôi</h4>
              @include('home.component.formContact')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection