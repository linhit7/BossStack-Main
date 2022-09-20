@extends('home.index')

@section('content')
  @include('home.banner.feature')

  <section class="section section-feature section-benefitApp overflow-hidden">
    <div class="line --top"></div>
    <div class="container">
      <div class="feature-wrap">
        <h3 class="section-title text-center">Lợi ích của tính năng Kiểm soát thất thoát</h3>
        
        <div class="card-list">
          <div class="card">
            <img src="{{ asset('image/icon-bs-4.svg') }}" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Kiểm soát thất thoát</h4>
              <p class="card-text">Tiết kiệm thời gian quản lý</p>
              <a href="#" class="card-link">Xem thêm</a>
            </div>
          </div>

          <div class="card">
            <img src="{{ asset('image/icon-bs-5.svg') }}" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Hỗ trợ ra quyết định</h4>
              <p class="card-text">Kiểm soát thất thoát từ quản lý quy trình vận hành</p>
              <a href="#" class="card-link">Xem thêm</a>
            </div>
          </div>

          <div class="card">
            <img src="{{ asset('image/icon-bs-6.svg') }}" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Coaching</h4>
              <p class="card-text">Quản lý nhân sự sản xuất, chấm công tự động</p>
              <a href="#" class="card-link">Xem thêm</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection