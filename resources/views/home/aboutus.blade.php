@extends('home.index')

@section('content')
  @include('home.banner.default')

  <div class="main-about">
    <div class="about-general overflow-hidden">
      <img class="bg-circle" src="{{ asset('image/circle.png') }}" alt="">
      <div class="section section-about section-mission pt-96 pb-96">
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
      <div class="section section-about section-product section-second-cl">
        <div class="container">
          <div class="wrap">
            <h3>Sản phẩm ngành</h3>
            <ul class="product-list">
              <li class="product-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-product-1.svg') }}" alt="">
                </span>
                <span class="text">Nông sản</span>
              </li>

              <li class="product-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-product-2.svg') }}" alt="">
                </span>
                <span class="text">Logistic</span>
              </li>

              <li class="product-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-product-3.svg') }}" alt="">
                </span>
                <span class="text">Bất động sản</span>
              </li>

              <li class="product-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-product-4.svg') }}" alt="">
                </span>
                <span class="text">Xây dựng</span>
              </li>

              <li class="product-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-product-5.svg') }}" alt="">
                </span>
                <span class="text">Năng lượng</span>
              </li>

              <li class="product-item">
                <span class="icon">
                  <img src="{{ asset('image/icon-product-6.svg') }}" alt="">
                </span>
                <span class="text">Ngành khác</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <img class="bg-circle" src="{{ asset('image/circle.png') }}" alt="">
    </div>

    <div class="company-general">
      <div class="section section-about section-about-company">
        <div class="container">
          <div class="wrap">
            <div class="card-advertisement">
              <div class="card-body">
                <h3>Về BossStack</h3>
                <p>BossStack ra đời vào năm 2015 với mục đích đưa công nghệ vào doanh nghiệp, nhằm hỗ trợ thực thi dự án, kiểm soát thất thoát và giải quyết các vấn đề chuyên sâu về tài chính.</p>
                <p>Áp dụng BossStack, hệ thống doanh nghiệp sẽ được vận hành một cách tự động hiệu quả, đồng thời giúp chủ doanh nghiệp thực sự <span class="highlight">"giải phóng"</span> ra khỏi các <span class="highlight">"business"</span> của mình.</p>
              </div>
              <div class="card-image">
                <img class="img-fluid" src="{{ asset('image/img-advertisement.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section section-about section-about-leadership">
        <div class="container">
          <div class="wrap">
            <h3>Thành phần Ban Lãnh Đạo</h3>
            <div class="card-leadership">
              <div class="card-item">
                <div class="card-image">
                  <img class="img-fluid" src="{{ asset('image/leader-img-2.jpg') }}" alt="">
                </div>
                <div class="card-body">
                  <h4 class="leadership-name">
                    Chau Pham
                    <a href="#"><img class="img-fluid" src="{{ asset('image/linkedin.svg') }}" alt=""></a>
                  </h4>
                  <p class="leadership-des">CEO/Founder</p>
                  <div class="leadership-content">
                    <p>Hơn 15 năm kinh nghiệm về tài chính, đầu tư và 10 năm kinh nghiệm trong ngành ngân hàng</p>
                    <ul>
                      <li>2015 - Hiện tại: CEO, Founder Fiinves</li>
                      <li>2015 - HIện tại: CEO, Founder Lamstech</li>
                      <li>2014 - Hiện tại: CEO, Founder Rbooks</li>
                      <li>2012 - 2017: Giám đốc PGD, Phó Giám đốc Chi nhánh Ngân hàng.</li>
                    </ul>
                  </div>
                </div>
              </div>
            
              <div class="card-item">
                <div class="card-image">
                  <img class="img-fluid" src="{{ asset('image/leader-img-1.jpg') }}" alt="">
                </div>
                <div class="card-body">
                  <h4 class="leadership-name">
                    Tu Nguyen
                    <a href="#"><img class="img-fluid" src="{{ asset('image/linkedin.svg') }}" alt=""></a>
                  </h4>
                  <p class="leadership-des">Cố vấn Tài chính</p>
                  <div class="leadership-content">
                    <p>Giám đốc điều hành V Lotus</p>
                    <p>Chuỗi nhà hàng cao cấp và nổi tiếng trong ngành F&B như:</p>
                    <ul>
                      <li>Ussina Sky 77</li>
                      <li>Ushi Mania</li>
                      <li>Conservo (Japanese Bread)</li>
                      <li>Yoshinoya (World famous beef bowl since 1899)</li>
                      <li>CocoIchibanya (Japan No1 Curry)</li>
                      <li>Marukame Udon (Japan No1 Udon)</li>
                    </ul>
                    <p>2013 - 2019: CEO-CFO VFS Co ltd</p>
                    <p>Chuỗi các thương hiệu đồ ăn nhanh của Mỹ trong ngành F &B như:</p>
                    <ul>
                      <li>Burger King</li>
                      <li>Domino Pizza</li>
                      <li>Popeyes Chicken</li>
                      <li>Dunkin Donuts</li>
                    </ul>
                    <p>2007 - 2012:</p>
                    <ul>
                      <li>Giám đốc tài chính: new world</li>
                      <li>
                        <p>Tổng giám đốc điều hành:</p>
                        <ul>
                          <li>Westfield factory</li>
                          <li>Công ty NWFG của Tập đoàn UK với Garment factory & Industry Park.</li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="card-item">
                <div class="card-image">
                  <img class="img-fluid" src="{{ asset('image/leader-img-3.jpg') }}" alt="">
                </div>
                <div class="card-body">
                  <h4 class="leadership-name">
                    Radim Berka
                    <a href="#"><img class="img-fluid" src="{{ asset('image/linkedin.svg') }}" alt=""></a>
                  </h4>
                  <p class="leadership-des">IT Director</p>
                  <div class="leadership-content">
                    <p>Hơn 20 năm kinh nghiệm trong ngành công nghệ thông tin và Fin-tech</p>
                    <ul>
                      <li>2020: Dự án Blockchain XIXO​</li>
                      <li>2019 - 2020: Triển khai hệ thống ERP (SAGE) tại REDA - Stricker</li>
                      <li>2017 - 2018: Phòng công nghệ thông tin và quản lý: Dự án Digital Banking TP Bank</li>
                      <li>2014 - 2015: Quản lý hệ thống công nghệ thông tin cho dự án nhà cửa VPBank.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <img class="img-fluid circle-disc" src="{{ asset('image/circle-disc.png') }}" alt="">
      </div>

      <div class="section section-about section-about-history overflow-hidden">
        <div class="container">
          <div class="wrap">
            <h3>Lịch sử hình thành và phát triển</h3>
            <div class="history-list">
              <div class="history-item">
                <span class="year">2014</span>
                <img class="img-fluid icon" src="{{ asset('image/history-icon-1.png') }}" alt="">
              </div>

              <div class="history-item">
                <span class="year">2015</span>
                <img class="img-fluid icon" src="{{ asset('image/history-icon-2.png') }}" alt="">
              </div>

              <div class="history-item">
                <span class="year">2018</span>
                <img class="img-fluid icon" src="{{ asset('image/history-icon-3.png') }}" alt="">
                <div class="feature">
                  <h4>Tính năng Dòng Tiền Cá Nhân</h4>
                  <p>Chủ doanh nghiệp</p>
                </div>
              </div>

              <div class="history-item">
                <span class="year">2022</span>
                <img class="img-fluid icon" src="{{ asset('image/history-icon-4.png') }}" alt="">
                <div class="feature">
                  <h4>Tính năng Chính</h4>
                  <p>Kiểm soát thất thoát</p>
                  <p>Coaching</p>
                  <p>Hỗ trợ ra quyết định</p>
                </div>
              </div>
            </div>
            <img class="img-fluid history-tree" src="{{ asset('image/history-tree.png') }}" alt="">
          </div>
        </div>
        <img class="bg-circle" src="{{ asset('image/circle.png') }}" alt="">
      </div>
    </div>

    <div class="section section-about section-accede">
      <div class="container">
        <div class="wrap">
          <div class="accede-content">
            <h3>Gia nhập BossStack</h3>
            <p>BossStack luôn quan tâm, đầu tư vào việc phát triển con người và xem đây cũng là một trong những chiến lược phát triển lâu dài của công ty.</p>
          </div>

          <a class="btn btn-primary btn-apply" href="#">Ứng tuyển</a>
        </div>
      </div>

      <div class="bg-trapezium-sm"></div>
    </div>
  </div>
@endsection