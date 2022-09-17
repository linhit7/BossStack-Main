@extends('home.index')

@section('content')
  @include('home.banner.homepage')
  <div class="main-home">
    <section class="section section-home overflow-hidden">
      <div class="container">
        <div class="feature-wrap">
          <h3 class="section-title text-center">Tính năng của BossStack</h3>
          <div class="card-list link">
            <div class="card">
              <img src="{{ asset('image/icon-bs-1.svg') }}" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title">Kiểm soát thất thoát</h4>
                <p class="card-text">Kết nối nhân viên hiện trường và nhà quản lý dễ dàng</p>
                <a href="#" class="card-link">Xem thêm</a>
              </div>
            </div>

            <div class="card">
              <img src="{{ asset('image/icon-bs-1.svg') }}" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title">Hỗ trợ ra quyết định</h4>
                <p class="card-text">Tự động hoá quy trình đánh giá và xây dựng kế hoạch tài chính cho doanh nghiệp</p>
                <a href="#" class="card-link">Xem thêm</a>
              </div>
            </div>

            <div class="card">
              <img src="{{ asset('image/icon-bs-1.svg') }}" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title">Coaching</h4>
                <p class="card-text">Giúp doanh nghiệp và xây dựng chiến lược Quản lý tài chính và Kiểm toán vốn</p>
                <a href="#" class="card-link">Xem thêm</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <img class="bg-circle" src="{{ asset('image/circle-half.png') }}" alt="">
    </section>

    <section class="section section-home section-second-cl">
      <div class="bg-gray"></div>
      <img class="bg-advertise-img" src="{{ asset('image/bg-advertise-img.png') }}" alt="">

      <div class="container">
        <div class="advertise-wrap">
          <div class="advertise-content">
            <h3>Tư vấn chuyển đổi số đem lại <span>lợi nhuận tức thì</span> và xây dựng kế hoạch <span>gia tăng lợi nhuận lâu dài.</span></h3>
            <a href="#" class="btn btn-contact">Liên hệ</a>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-home overflow-hidden">
      <div class="line"></div>

      <div class="container">
        <div class="benefit-wrap">
          <h3 class="section-title text-center">Lợi ích BossStack</h3>

          
        </div>
      </div>
    </section>
  </div>
@endsection
