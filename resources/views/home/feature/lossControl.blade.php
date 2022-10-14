@extends('home.index')

@section('content')
  @include('home.banner.feature')

  <div class="main-lossControl">
    <div class="feature-page loss-control overflow-hidden">
      <img class="bg-circle" src="https://bossstack.com.vn/image/circle.png" alt="">
      
      <section class="section section-feature section-benefitApp overflow-hidden pt-96">
        <div class="line --top"></div>
        <div class="container">
          <div class="feature-wrap">
            <h3 class="section-title text-center">Lợi ích của tính năng Kiểm soát thất thoát</h3>
    
            <div class="card-list">
              <div class="card">
                <img src="{{ asset('image/icon-bs-4.svg') }}" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Tiết kiệm thời gian<br/>quản lý</h4>
                </div>
              </div>
              <div class="card">
                <img src="{{ asset('image/icon-bs-5.svg') }}" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Kiểm soát thất thoát từ quản lý quy<br/>trình vận hành</h4>
                </div>
              </div>
              <div class="card">
                <img src="{{ asset('image/icon-bs-6.svg') }}" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Quản lý nhân sự sản xuất, chấm<br/>công tự động</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-feature section-reason">
        <div class="container">
          <div class="wrap">
            <div class="card-advertisement">
              <div class="card-body">
                <h3>Lý do doanh nghiệp cần Phần mềm Kiểm soát thất thoát</h3>
                <p>Doanh nghiệp phải đối mặt với nhiều thách thức như:</p>
                <ul class="advertisement-list">
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Nhân công làm việc không hiệu quả
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Thất thoát nguyên vật liệu
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Thất thoát hàng hóa kho
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Phần mềm quản lý nhân sự sản xuất
                  </li>
                </ul>
                <p>Vậy nên chủ doanh nghiệp cần một <span class="highlight">hệ thống để kiểm soát thất thoát</span> để tiết kiệm thời gian quản lý.</p>
              </div>
              <div class="card-image">
                <img class="img-fluid" src="{{ asset('image/img-advertisement-1.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-feature section-result">
        <div class="line --bottom"></div>
        <div class="container">
          <div class="wrap">
            <div class="card-advertisement reverse">
              <div class="card-body">
                <h3>BossStack giúp doanh nghiệp thực thi dự án và kiểm soát thất thoát như thế nào ?</h3>
                <ul class="advertisement-list">
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Công nghệ quản lý nhân sự
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    Chụp ảnh thời gian thực
                  </li>
                  <li>
                    <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                    GPS và check in real-time
                  </li>
                </ul>
    
                <p>Vậy nên chủ doanh nghiệp sẽ tiết kiệm được <span class="highlight">thời gian quản lý</span> thông qua công nghệ và kiểm soát thất thoát từ việc quản lí quy trình vận hành.</p>
              </div>
              <div class="card-image">
                <img class="img-fluid" src="{{ asset('image/img-advertisement-2.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-feature section-network section-second-cl pb-96">
        <div class="container">
          <div class="wrap">
            <h3 class="section-title text-center">Kết nối quản lý <span>tại văn phòng và nhân viên tuyến đầu</span></h3>
            <div class="network-group">
              <h4 class="title">Chức năng dành cho người quản lý và chủ doanh nghiệp</h4>
              <div class="card-list">
                <div class="card">
                  <img src="{{ asset('image/icon-bs-7.svg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4 class="card-title">Quản lý chấm công</h4>
                  </div>
                </div>
                <div class="card">
                  <img src="{{ asset('image/icon-bs-8.svg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4 class="card-title">Theo dõi tiến độ công việc<br/>công việc</h4>
                  </div>
                </div>
                <div class="card">
                  <img src="{{ asset('image/icon-bs-9.svg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4 class="card-title">Kiểm soát dòng tiền</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="network-group">
              <h4 class="title">Chức năng quản lý nhân viên ngoài hiện trường</h4>
              <div class="card-list">
                <div class="card">
                  <img src="{{ asset('image/icon-bs-10.svg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4 class="card-title">Thực hiện chấm công <br/>từ xa</h4>
                  </div>
                </div>
                <div class="card">
                  <img src="{{ asset('image/icon-bs-11.svg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4 class="card-title">Chụp ảnh, báo cáo tiến độ <br/>theo thời gian thực</h4>
                  </div>
                </div>
                <div class="card">
                  <img src="{{ asset('image/icon-bs-12.svg') }}" class="card-img-top">
                  <div class="card-body">
                    <h4 class="card-title">Đo lường khối lượng hàng <br/>hoá - Kiểm soát thất thoát</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <img class="bg-circle" src="https://bossstack.com.vn/image/circle.png" alt="">
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    window.onload = function (){
      let selectTrapeziumBanner = document.querySelector(".bg-trapezium-xl");
      let selectBannerFeature = document.querySelector(".banner.feature");
      let selectBannerFeatureWrap = document.querySelector(".feature-wrap");

      let selectBannerImg = selectBannerFeatureWrap.querySelector(".bg-feature-img");
      selectBannerImg.style.maxWidth = `${selectTrapeziumBanner.offsetWidth * 0.8}px`
      let widthBannerImg = selectBannerImg.offsetWidth;
      let heightBannerImg = selectBannerImg.offsetHeight;
      let leftBannerImg = widthBannerImg + widthBannerImg * 0.5;

      let heightBanner = selectBannerFeature.offsetHeight + window.outerWidth;

      if (window.outerWidth < 576) {
        selectBannerFeature.style.height = `${heightBanner}px`;
        selectTrapeziumBanner.style.borderBottomWidth = `${window.outerWidth}px`;
        selectBannerImg.style.left = `${Math.abs(
          window.outerWidth * 0.5 - widthBannerImg * 0.5 - 7.5
        )}px`;
        selectBannerImg.style.bottom = `${heightBanner / 20 - 50}px`;

      }else if (window.outerWidth >= 576 && window.outerWidth < 992){
        selectBannerImg.style.top = `${
          selectTrapeziumBanner.offsetHeight * 0.5 - heightBannerImg * 0.5 - 50
        }px`;
        selectBannerImg.style.left = `${
          document.querySelector("body").offsetWidth - leftBannerImg
        }px`;
      } else {
        selectBannerImg.style.top = `${
          selectTrapeziumBanner.offsetHeight * 0.5 - heightBannerImg * 0.5 - 100
        }px`;
        selectBannerImg.style.left = `${
          document.querySelector("body").offsetWidth - leftBannerImg
        }px`;
      }
    }
  </script>
@endsection