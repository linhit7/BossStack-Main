@extends('home.index')

@section('content')
  @include('home.banner.homepage')

  <div class="main-home">
    <section class="section section-home section-feature overflow-hidden">
      <div class="container">
        <div class="feature-wrap">
          <h3 class="section-title text-center">Tính năng của BossStack</h3>
          
          <div class="card-list home">
            <div class="card">
              <img src="{{ asset('image/icon-bs-1.svg') }}" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title">Kiểm soát thất thoát</h4>
                <p class="card-text">Kết nối nhân viên hiện trường và nhà quản lý dễ dàng</p>
                <a href="#" class="card-link">Xem thêm</a>
              </div>
            </div>

            <div class="card">
              <img src="{{ asset('image/icon-bs-2.svg') }}" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title">Hỗ trợ ra quyết định</h4>
                <p class="card-text">Tự động hoá quy trình đánh giá và xây dựng kế hoạch tài chính cho doanh nghiệp</p>
                <a href="#" class="card-link">Xem thêm</a>
              </div>
            </div>

            <div class="card">
              <img src="{{ asset('image/icon-bs-3.svg') }}" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title">Coaching</h4>
                <p class="card-text">Giúp doanh nghiệp và xây dựng chiến lược Quản lý tài chính và Kiểm toán vốn</p>
                <a href="#" class="card-link">Xem thêm</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <img class="bg-circle" src="{{ asset('image/circle.png') }}" alt="">
    </section>

    <section class="section section-home section-advertise section-second-cl">
      <div class="bg-trapezium-xl"></div>

      <div class="container">
        <div class="advertise-wrap">
          <div class="advertise-content">
            <h3>Tư vấn chuyển đổi số đem lại <span>lợi nhuận tức thì</span> và xây dựng kế hoạch <span>gia tăng lợi nhuận lâu dài.</span></h3>
            <a href="#" class="btn btn-primary">Liên hệ</a>
          </div>
          
          <img class="bg-advertise-img" src="{{ asset('image/bg-advertise-img.png') }}" alt="">
        </div>
      </div>
    </section>

    <section class="section section-home section-benefit overflow-hidden">
      <div class="line --top"></div>
      <img class="bg-circle" src="{{ asset('image/circle.png') }}" alt="">

      <div class="container">
        <div class="benefit-wrap">
          <h3 class="section-title text-center">Lợi ích BossStack</h3>

          <div class="benefit-content">
            <div class="roadmap-top">
              <div class="roadmap-item primary">
                <span class="icon">
                  <img src="{{ asset('image/icon-roadmap.svg') }}" alt="">
                </span>
                <span class="text">Doanh nghiệp vừa và nhỏ, Start - up</span>
              </div>
              <div class="roadmap-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-roadmap-1.svg') }}" alt="">
                </span>
                <span class="text">Công cụ quản lý vận hành hiệu quả cho doanh nghiệp</span>
              </div>
              <div class="roadmap-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-roadmap-2.svg') }}" alt="">
                </span>
                <span class="text">Xác thực tính khả thi của dự án</span>
              </div>
              <div class="roadmap-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-roadmap-3.svg') }}" alt="">
                </span>
                <span class="text">Kiểm soát tốt dòng tiền chủ sở hữu</span>
              </div>
              <div class="roadmap-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-roadmap-4.svg') }}" alt="">
                </span>
                <span class="text">Theo kịp xu hướng chuyển đổi số</span>
              </div>
            </div>
            <img class="roadmap-logo" src="{{ asset('image/logo.svg') }}" alt="">
            <div class="roadmap-bottom">
              <div class="roadmap-item primary">
                <span class="icon">
                  <img src="{{ asset('image/icon-roadmap-5.svg') }}" alt="">
                </span>
                <span class="text">Doanh nghiệp lớn</span>
              </div>
              <div class="roadmap-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-roadmap-6.svg') }}" alt="">
                </span>
                <span class="text">Gia tăng chất lượng dữ liệu</span>
              </div>
              <div class="roadmap-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-roadmap-7.svg') }}" alt="">
                </span>
                <span class="text">Tự động hóa quy trình quản lý để giải phóng chủ doanh nghiệp</span>
              </div>
              <div class="roadmap-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-roadmap-8.svg') }}" alt="">
                </span>
                <span class="text">Tối ưu hóa chi phí</span>
              </div>
              <div class="roadmap-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-roadmap-9.svg') }}" alt="">
                </span>
                <span class="text">Kiếm soát thất thoát</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-home section-contact">
      <div class="container">
        <div class="benefit-wrap">
          <h3 class="section-title text-center">Liên hệ với chúng tôi</h3>

          @include('home.component.formContact')
        </div>
      </div>

      <div class="bg-trapezium-sm"></div>
    </section>
  </div>
@endsection
