@extends('home.index')

@section('content')
  @include('home.banner.feature')

  <div class="main-decisionSupport">
    <div class="feature-page decision-support overflow-hidden">
      <img class="bg-circle" src="https://bossstack.com.vn/image/circle.png" alt="">
      <img class="bg-circle" src="https://bossstack.com.vn/image/circle.png" alt="">
      <img class="bg-circle" src="https://bossstack.com.vn/image/circle.png" alt="">
      <section class="section section-feature section-benefitApp overflow-hidden pt-96 pb-96">
        <div class="line --top"></div>
        <div class="container">
          <div class="feature-wrap">
            <h3 class="section-title text-center">Lợi ích của tính năng hỗ trợ quyết định cho doanh nghiệp</h3>
    
            <div class="card-list">
              <div class="card">
                <img src="{{ asset('image/icon-bs-16.svg') }}" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Ứng dụng công nghệ để<br/>đánh giá thực trạng doanh nghiệp</h4>
                </div>
              </div>
              <div class="card">
                <img src="{{ asset('image/icon-bs-17.svg') }}" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Tự động hóa quy trình quản lý bằng<br/>hệ thống vận hành mẫu</h4>
                </div>
              </div>
              <div class="card">
                <img src="{{ asset('image/icon-bs-18.svg') }}" class="card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Kiểm soát dòng vốn chủ sở hữu<br/>từng giai đoạn</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="line --bottom"></div>
      </section>

      <section class="section section-feature section-problem section-second-cl pt-96 pb-96">
        <div class="container">
          <div class="wrap">
            <div class="card-advertisement">
              <div class="card-body">
                <h3>Vấn đề trong kiểm soát thông số tài chính</h3>
                <p>Nhiều doanh nghiệp tại Việt Nam gặp khó khăn trong quá trình kiểm soát các thông số tài chính. Việc không kiểm soát được các chỉ số này khiến chủ doanh nghiệp không thể đưa ra quyết định kinh doanh chính xác.</p>
              </div>
              <div class="card-image">
                <img class="img-fluid" src="{{ asset('image/img-advertisement-7.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-feature pt-96">
        <div class="container">
          <div class="wrap">
            <h3 class="section-title text-center">BossStack giúp <span class="highlight">“chẩn đoán"</span> và <span class="highlight">“giải quyết”</span> khó khăn, giúp tăng tốc cho sự phát triển của doanh nghiệp</h3>
          </div>
        </div>
      </section>

      <section class="section section-feature section-review">
        <div class="container">
          <div class="wrap">
            <div class="card-advertisement">
              <div class="card-body">
                <h3>Giúp chủ doanh nghiệp đánh giá tình trạng tài chính</h3>
                <p>Phần mềm BossStack cung cấp bộ template giúp doanh nghiệp đánh giá chính xác tổng quan tình trạng tài chính, tạo cơ sở cho việc đưa ra chiến lược phát triển.</p>
                <p>BossStack còn cung cấp công cụ cho doanh nghiệp kiểm soát dòng vốn chủ sở hữu và sử dụng đòn bẩy tài chính một cách hiệu quả.</p>
              </div>
              <div class="card-image">
                <img class="img-fluid" src="{{ asset('image/img-advertisement-8.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-feature section-system">
        <div class="container">
          <div class="wrap">
            <div class="card-advertisement reverse">
              <div class="card-body">
                <h3>Cung cấp hệ thống vận hành mẫu</h3>
                <p>BossStack sẽ giúp chủ doanh nghiệp tìm ra lỗ hổng trong quản lý tài chính nhờ phân tích số liệu. </p>
                <p>Dữ liệu đầu ra từ phần mềm BossStack sẽ đảm bảo độ chính xác và hỗ trợ đắc lực trong quá trình ra quyết định và lập kế hoạch kinh doanh.</p>
              </div>
              <div class="card-image">
                <img class="img-fluid" src="{{ asset('image/img-advertisement-9.png') }}" alt="">
              </div>
            </div>
          </div>
          <img class="img-fluid circle-disc-gray" src="https://bossstack.com.vn/image/circle-disc-gray.png" alt="">
        </div>
      </section>
      
      <section class="section section-feature section-tool">
        <div class="container">
          <div class="wrap">
            <div class="card-advertisement">
              <div class="card-body">
                <h3>Công cụ kiểm soát dòng tiền cho các Start-Up</h3>
                <p>Lý do lớn nhất dẫn đến sự thất bại của các doanh nghiệp Start-up là từ việc không kiểm soát được dòng tiền dẫn đến cạn vốn.</p>
                <p>Vậy nên:<br/>Công cụ <span class="highlight">"Hỗ trợ quyết định"</span> của BossStack có thể giúp doanh nghiệp Start-up đưa ra các chiến lược đúng đắn nhờ kiểm soát chặt chẽ dòng tiền.</p>
                <a href="#" class="btn btn-primary btn-contact">Liên hệ</a>
              </div>
              <div class="card-image">
                <img class="img-fluid" src="{{ asset('image/img-advertisement-10.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
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
          document.querySelector("body").offsetWidth - widthBannerImg
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