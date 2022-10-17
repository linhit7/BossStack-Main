@extends('home.index')

@section('content')
  @include('home.banner.feature')

  <div class="main-coaching">
    <div class="feature-page coaching overflow-hidden">
      <section class="section section-feature section-benefitApp overflow-hidden pt-96">
        <div class="line --top"></div>
        <div class="container">
          <div class="feature-wrap">
            <h3 class="section-title text-center">Lợi ích của tính năng Coaching</h3>
    
            <div class="card-list">
              <div class="card">
                <img src="{{ asset('image/icon-bs-13.svg') }}" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Xác định bức tranh tài chính</h4>
                </div>
              </div>
              <div class="card">
                <img src="{{ asset('image/icon-bs-14.svg') }}" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Kiểm toán vốn</h4>
                </div>
              </div>
              <div class="card">
                <img src="{{ asset('image/icon-bs-15.svg') }}" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Kiểm soát dòng tiền</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-feature section-difficult">
        <div class="container">
          <div class="wrap">
            <div class="card-advertisement">
              <div class="card-body">
                <h3>Khó khăn trong quản lý dòng tiền của doanh nghiệp</h3>
                <ul class="advertisement-list">
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Không quản lý được nguồn vốn
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Chủ doanh nghiệp thường không thể tách dòng tiền cá nhân của mình ra khỏi doanh nghiệp
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Thiếu vốn để mở rộng sản xuất kinh doanh
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Thiếu công cụ quản lý dòng tiền
                  </li>
                </ul>
              </div>
              <div class="card-image">
                <img class="img-fluid" src="{{ asset('image/img-advertisement-3.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-feature section-manage">
        <div class="container">
          <div class="wrap">
            <div class="card-advertisement reverse">
              <div class="card-body">
                <h3>Quản lý chỉ số tăng trưởng</h3>
                <ul class="advertisement-list">
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Quản lý các danh mục đầu tư
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Kỹ năng phân tích thị trường
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Khuyến nghị các mã chứng khoán và chiến lược đầu tư theo tháng được cập nhật liên tục
                  </li>
                </ul>
              </div>
              <div class="card-image">
                <img class="img-fluid" src="{{ asset('image/img-advertisement-4.png') }}" alt="">
              </div>
            </div>
            <img class="img-fluid circle-disc-gray" src="{{ asset('image/circle-disc-gray.png') }}" alt="">
          </div>
        </div>
      </section>

      <section class="section section-feature section-tool">
        <div class="container">
          <div class="wrap">
            <div class="card-advertisement">
              <div class="card-body">
                <h3>Sở hữu công cụ kiểm soát các “Business”</h3>
                <ul class="advertisement-list">
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Phân tích dòng tiền
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Tính toán tài sản ròng
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Theo dõi các khoản đầu tư
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Lập kế hoạch nghỉ hưu
                  </li>
                </ul>
              </div>
              <div class="card-image">
                <img class="img-fluid" src="{{ asset('image/img-advertisement-5.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="section section-feature section-course pb-96">
        <div class="container">
          <div class="wrap">
            <div class="card-advertisement reverse">
              <div class="card-body">
                <h3>Khoá đào tạo<br/>Xử Lý Dòng Tiền</h3>
                <ul class="advertisement-list">
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Dự báo, phân tích và lập kế hoạch tài chính cho doanh nghiệp
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Kiểm soát các khoản nợ phải thu và nợ phải trả
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Sử dụng các công cụ giúp dự báo dòng tiền
                  </li>
                </ul>
              </div>
              <div class="card-image">
                <img class="img-fluid" src="{{ asset('image/img-advertisement-6.png') }}" alt="">
              </div>
            </div>
            <img class="img-fluid circle-disc-gray" src="{{ asset('image/circle-disc-gray.png') }}" alt="">
          </div>
        </div>
      </section>
      <img class="bg-circle" src="https://bossstack.com.vn/image/circle.png" alt="">
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('assets/js/banner.js') }}"></script>
@endsection