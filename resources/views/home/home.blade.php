@extends('home.index')

@section('content')
  @include('home.banner.homepage')
  <div class="main-home">
    <section class="section section-benefit">
      <div class="container">
        <div class="wrap">
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
    </section>
  </div>
@endsection
