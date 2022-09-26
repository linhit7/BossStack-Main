@extends('home.index')

@section('content')
  @include('home.banner.client')

  <div class="main-client">
    <div class="section section-client section-client-story">
      <div class="container">
        <div class="wrap">
          <h3>Câu chuyện khách hàng</h3>
          <div class="client-news">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="manufacturing-enterprises-tab" data-bs-toggle="pill" data-bs-target="#manufacturing-enterprises" type="button" role="tab" aria-controls="manufacturing-enterprises" aria-selected="true">Doanh nghiệp Sản xuất</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="commercial-businesses-tab" data-bs-toggle="pill" data-bs-target="#commercial-businesses" type="button" role="tab" aria-controls="commercial-businesses" aria-selected="false">Doanh nghiệp Thương mại</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="manufacturing-enterprises" role="tabpanel" aria-labelledby="manufacturing-enterprises-tab">
                <div class="client-list">
                  <div class="card">
                    <img src="{{ asset('image/client-1.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                      <p class="card-title">Công ty TNHH Nút áo Tôn Văn</p>
                      <p class="card-text">Công ty TNHH Nút áo Tôn Văn là doanh nghiệp chuyên sản xuất, gia công nút áo, đồ mỹ nghệ gia dụng bằng vỏ ốc, sò, gỗ, đá, kim loại. Công ty có nhà xưởng rộng tới 10.000 m2 và hơn 120 công nhân lành nghề.</p>
                      <a href="#" class="btn-readmore">Xem thêm</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="{{ asset('image/client-1.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                      <p class="card-title">Công ty TNHH Nút áo Tôn Văn</p>
                      <p class="card-text">Công ty TNHH Nút áo Tôn Văn là doanh nghiệp chuyên sản xuất, gia công nút áo, đồ mỹ nghệ gia dụng bằng vỏ ốc, sò, gỗ, đá, kim loại. Công ty có nhà xưởng rộng tới 10.000 m2 và hơn 120 công nhân lành nghề.</p>
                      <a href="#" class="btn-readmore">Xem thêm</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="{{ asset('image/client-1.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                      <p class="card-title">Công ty TNHH Nút áo Tôn Văn</p>
                      <p class="card-text">Công ty TNHH Nút áo Tôn Văn là doanh nghiệp chuyên sản xuất, gia công nút áo, đồ mỹ nghệ gia dụng bằng vỏ ốc, sò, gỗ, đá, kim loại. Công ty có nhà xưởng rộng tới 10.000 m2 và hơn 120 công nhân lành nghề.</p>
                      <a href="#" class="btn-readmore">Xem thêm</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="commercial-businesses" role="tabpanel" aria-labelledby="commercial-businesses-tab">
                <div class="client-list">
                  <div class="card">
                    <img src="{{ asset('image/client-1.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                      <p class="card-title">Công ty TNHH Nút áo Tôn Văn</p>
                      <p class="card-text">Công ty TNHH Nút áo Tôn Văn là doanh nghiệp chuyên sản xuất, gia công nút áo, đồ mỹ nghệ gia dụng bằng vỏ ốc, sò, gỗ, đá, kim loại. Công ty có nhà xưởng rộng tới 10.000 m2 và hơn 120 công nhân lành nghề.</p>
                      <a href="#" class="btn-readmore">Xem thêm</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="{{ asset('image/client-1.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                      <p class="card-title">Công ty TNHH Nút áo Tôn Văn</p>
                      <p class="card-text">Công ty TNHH Nút áo Tôn Văn là doanh nghiệp chuyên sản xuất, gia công nút áo, đồ mỹ nghệ gia dụng bằng vỏ ốc, sò, gỗ, đá, kim loại. Công ty có nhà xưởng rộng tới 10.000 m2 và hơn 120 công nhân lành nghề.</p>
                      <a href="#" class="btn-readmore">Xem thêm</a>
                    </div>
                  </div>

                  <div class="card">
                    <img src="{{ asset('image/client-1.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                      <p class="card-title">Công ty TNHH Nút áo Tôn Văn</p>
                      <p class="card-text">Công ty TNHH Nút áo Tôn Văn là doanh nghiệp chuyên sản xuất, gia công nút áo, đồ mỹ nghệ gia dụng bằng vỏ ốc, sò, gỗ, đá, kim loại. Công ty có nhà xưởng rộng tới 10.000 m2 và hơn 120 công nhân lành nghề.</p>
                      <a href="#" class="btn-readmore">Xem thêm</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection