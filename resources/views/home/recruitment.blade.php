@extends('home.index')

@section('content')
  @include('home.banner.default')

  <div class="main-recruitment">
    <div class="section section-recruitment section-recruitment-bs">
      <div class="container">
        <div class="wrap">
          <div class="recruitment-bs-content" data-aos="fade-right" data-aos-duration="1000">
            <h2>BossStack<br />tuyển dụng</h2>
            <p>Ở BossStack chúng tôi đặt giá trị con người lên hàng đầu. Từ đó, mọi nhân viên đều được
              tạo điều kiện thuận lợi để cống hiến và phát triển toàn diện.</p>
            <a href="#position-hiring" class="btn btn-primary">Vị trí đang tuyển</a>
          </div>

          <img class="recruitment-bs-img" src="{{ asset('image/img-advertisement-11.png') }}"
            alt="">
        </div>
      </div>
    </div>

    <div class="section section-recruitment section-about-company">
      <div class="container">
        <div class="wrap">
          <div class="card-advertisement">
            <div class="card-body" data-aos="fade-right" data-aos-duration="1000">
              <h3>Về BossStack</h3>
              <p>BossStack ra đời vào năm 2015 với mục đích đưa công nghệ vào doanh nghiệp, nhằm hỗ
                trợ thực thi dự án, kiểm soát thất thoát và giải quyết các vấn đề chuyên sâu về tài
                chính.</p>
              <p>Áp dụng BossStack, hệ thống doanh nghiệp sẽ được vận hành một cách tự động hiệu quả,
                đồng thời giúp chủ doanh nghiệp thực sự <span class="highlight">"giải phóng"</span> ra
                khỏi các <span class="highlight">"business"</span> của mình.</p>
            </div>
            <div class="card-image" data-aos="fade-left" data-aos-duration="1000">
              <img class="img-fluid" src="{{ asset('image/img-advertisement.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-recruitment section-position-hiring" id="position-hiring">
      <div class="container">
        <div class="wrap">
          <h3>Vị trí đang tuyển</h3>
          <ul class="recruitment-list">
            <li class="recruitment-item" data-aos="zoom-in" data-aos-duration="1500">
              <img class="img-fluid logo" src="{{ asset('image/logo.svg') }}" alt="">
              <div class="recruitment-info">
                <h4 class="name">Tuyển dụng leader Kế toán</h4>
                <p class="dealine">Hạn ứng tuyển: 29/09/2022</p>
              </div>
              <a href="{{ route('recruitment-detail') }}" class="btn btn-primary btn-detail">Xem chi
                tiết</a>
            </li>

            <li class="recruitment-item" data-aos="zoom-in" data-aos-duration="1500">
              <img class="img-fluid logo" src="{{ asset('image/logo.svg') }}" alt="">
              <div class="recruitment-info">
                <h4 class="name">Tuyển dụng nhân viên Back - End</h4>
                <p class="dealine">Hạn ứng tuyển: 29/09/2022</p>
              </div>
              <a href="#" class="btn btn-primary btn-detail">Xem chi tiết</a>
            </li>

            <li class="recruitment-item" data-aos="zoom-in" data-aos-duration="1500">
              <img class="img-fluid logo" src="{{ asset('image/logo.svg') }}" alt="">
              <div class="recruitment-info">
                <h4 class="name">Tuyển dụng nhân viên Marketing</h4>
                <p class="dealine">Hạn ứng tuyển: 29/09/2022</p>
              </div>
              <a href="#" class="btn btn-primary btn-detail">Xem chi tiết</a>
            </li>

            <li class="recruitment-item" data-aos="zoom-in" data-aos-duration="1500">
              <img class="img-fluid logo" src="{{ asset('image/logo.svg') }}" alt="">
              <div class="recruitment-info">
                <h4 class="name">Tuyển dụng chuyên viên Font - end</h4>
                <p class="dealine">Hạn ứng tuyển: 29/09/2022</p>
              </div>
              <a href="#" class="btn btn-primary btn-detail">Xem chi tiết</a>
            </li>

            <li class="recruitment-item" data-aos="zoom-in" data-aos-duration="1500">
              <img class="img-fluid logo" src="{{ asset('image/logo.svg') }}" alt="">
              <div class="recruitment-info">
                <h4 class="name">Tuyển dụng UI/UX Designer</h4>
                <p class="dealine">Hạn ứng tuyển: 29/09/2022</p>
              </div>
              <a href="#" class="btn btn-primary btn-detail">Xem chi tiết</a>
            </li>

            <li class="recruitment-item" data-aos="zoom-in" data-aos-duration="1500">
              <img class="img-fluid logo" src="{{ asset('image/logo.svg') }}" alt="">
              <div class="recruitment-info">
                <h4 class="name">Tuyển dụng nhân viên Graphic Designer</h4>
                <p class="dealine">Hạn ứng tuyển: 29/09/2022</p>
              </div>
              <a href="#" class="btn btn-primary btn-detail">Xem chi tiết</a>
            </li>
          </ul>

          <button type="button" class="read-more">
            Xem thêm
            <img class="img-fluid" src="{{ asset('image/icon-down.svg') }}" alt="">
          </button>
        </div>
      </div>
    </div>
  </div>
@endsection
