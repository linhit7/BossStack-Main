@extends('home.index')

@section('content')
  @include('home.banner.client')

  <div class="main-clientDetail">
    <div class="section section-clientDetail section-parameter">
      <div class="container">
        <div class="wrap">
          <div class="parameter-item">
            <span class="number">
              <img class="img-fluid" src="{{ asset('image/icon-equivalent.svg') }}" alt="">
              4%
            </span>
            <span class="text">Tăng tỷ suất lợi nhuận</span>
          </div>
          <div class="parameter-item">
            <span class="number">
              <img class="img-fluid" src="{{ asset('image/icon-greater.svg') }}" alt="">
              2%
            </span>
            <span class="text">Tối thiểu lãi suất vay giảm được</span>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-clientDetail section-clientDetail-about">
      <div class="container">
        <div class="wrap">
          <div class="card-advertisement">
            <div class="card-body">
              <img class="img-fluid logo-client" src="{{ asset('image/logo-ton-van.svg') }}" alt="">
              <p>Công ty TNHH Nút áo Tôn Văn là doanh nghiệp chuyên sản xuất, gia công nút áo, đồ mỹ nghệ gia dụng bằng vỏ ốc, sò, gỗ, đá, kim loại. Công ty có nhà xưởng rộng tới 10.000 m2 và hơn 120 công nhân lành nghề.</p>
            </div>
            <div class="card-image">
              <img class="img-fluid" src="{{ asset('image/client-2.jpg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-clientDetail section-clientDetail-difficult">
      <div class="container">
        <div class="wrap">
          <div class="card-advertisement reverse">
            <div class="card-body">
              <h3>Case Study - Khó khăn</h3>
              <ul class="advertisement-list">
                <li>
                  <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                  Quy trình làm việc chưa rõ ràng
                </li>
                <li>
                  <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                  Kho và bãi cơ khí chưa được sử dụng tối ưu. Công ty có dự định mở rộng máy móc về mảng cơ khí, tuy nhiên chưa có kế hoạch cụ thể
                </li>
                <li>
                  <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                  Lãi suất vay và dư nợ doanh nghiệp cao
                </li>
                <li>
                  <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                  Quản lý nhân sự và quản lý đầu vào chưa tốt
                </li>
              </ul>
            </div>
            <div class="card-image">
              <img class="img-fluid" src="{{ asset('image/client-3.jpg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-clientDetail section-clientDetail-result">
      <div class="container">
        <div class="wrap">
          <div class="card-advertisement">
            <div class="card-body">
              <h3>Kết quả</h3>
              <ul class="advertisement-list">
                <li>
                  <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                  Sử dụng phần mềm BossStack xây dựng quy trình làm việc chuẩn, tăng công suất nhà xưởng và tăng năng suất dây chuyền.
                </li>
                <li>
                  <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                  Sử dụng phần mềm BossStack xây dựng lại hệ thống quản lý tài chính doanh nghiệp: quản lý các hoạt động tài chính, các khoản giải ngân cần duyệt.  
                </li>
                <li>
                  <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                  Giảm hết các khoản lãi vay không cần thiết bằng cách lựa chọn ngân hàng, điều chỉnh hồ sơ vay (giảm tối thiểu 2% lãi suất/năm). Rà soát chi phí quản lý nhân sự, nguyên vật liệu.
                </li>
                <li>
                  <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                  Bosstack làm tăng tỷ suất lợi nhuận của công ty TNHH Tôn Văn gần 4%
                </li>
                <li>
                  <img class="img-fluid" src="{{ asset('image/icon-right-sm.svg') }}" alt="">
                  Xây dựng kế hoạch trả nợ từng năm để giảm nợ của công ty
                </li>
              </ul>
            </div>
            <div class="card-image">
              <img class="img-fluid" src="{{ asset('image/client-4.jpg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section section-client section-client-story">
      <div class="container">
        <div class="wrap">
          <h3>Câu chuyện khách hàng</h3>
          <div class="client-news">
            <div class="client-list">
              <div class="card">
                <img src="{{ asset('image/client-1.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-title">Công ty TNHH Nút áo Tôn Văn</p>
                  <p class="card-text">Công ty TNHH Nút áo Tôn Văn là doanh nghiệp chuyên sản xuất, gia công nút áo, đồ mỹ nghệ gia dụng bằng vỏ ốc, sò, gỗ, đá, kim loại. Công ty có nhà xưởng rộng tới 10.000 m2 và hơn 120 công nhân lành nghề.</p>
                  <a href="{{ route('client-detail') }}" class="btn-readmore">Xem thêm</a>
                </div>
              </div>

              <div class="card">
                <img src="{{ asset('image/client-1.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-title">Công ty TNHH Nút áo Tôn Văn</p>
                  <p class="card-text">Công ty TNHH Nút áo Tôn Văn là doanh nghiệp chuyên sản xuất, gia công nút áo, đồ mỹ nghệ gia dụng bằng vỏ ốc, sò, gỗ, đá, kim loại. Công ty có nhà xưởng rộng tới 10.000 m2 và hơn 120 công nhân lành nghề.</p>
                  <a href="{{ route('client-detail') }}" class="btn-readmore">Xem thêm</a>
                </div>
              </div>

              <div class="card">
                <img src="{{ asset('image/client-1.jpg') }}" class="card-img-top" alt="">
                <div class="card-body">
                  <p class="card-title">Công ty TNHH Nút áo Tôn Văn</p>
                  <p class="card-text">Công ty TNHH Nút áo Tôn Văn là doanh nghiệp chuyên sản xuất, gia công nút áo, đồ mỹ nghệ gia dụng bằng vỏ ốc, sò, gỗ, đá, kim loại. Công ty có nhà xưởng rộng tới 10.000 m2 và hơn 120 công nhân lành nghề.</p>
                  <a href="{{ route('client-detail') }}" class="btn-readmore">Xem thêm</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection