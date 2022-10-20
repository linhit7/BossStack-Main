<header>
  <div class="container">
    <div class="wrap">
      <a href="{{ route('home') }}" class="logo"><img class="img-fluid"
          src="{{ asset('image/logo.svg') }}" alt=""></a>

      <ul class="menu">
        <li class="menu-item">
          <a href="#" class="menu-link">
            Tính năng
            <img src="{{ asset('image/icon-down.svg') }}" alt="">
          </a>
          <ul class="menu-child">
            <li class="menu-child__item">
              <a href="{{ route('loss-control') }}" class="menu-child__link">Kiểm soát thất
                thoát</a>
            </li>
            <li class="menu-child__item">
              <a href="{{ route('coaching') }}" class="menu-child__link">Coaching</a>
            </li>
            <li class="menu-child__item">
              <a href="{{ route('decision-support') }}" class="menu-child__link">Hỗ trợ quyết
                định</a>
            </li>
          </ul>
        </li>

        <li class="menu-item">
          <a href="#" class="menu-link">
            Về chúng tôi
            <img src="{{ asset('image/icon-down.svg') }}" alt="">
          </a>
          <ul class="menu-child">
            <li class="menu-child__item">
              <a href="{{ route('about-us') }}" class="menu-child__link">Về BossStack</a>
            </li>
            <li class="menu-child__item">
              <a href="{{ route('recruitment') }}" class="menu-child__link">Tuyển dụng</a>
            </li>
            <li class="menu-child__item">
              <a href="{{ route('contact') }}" class="menu-child__link">Liên hệ</a>
            </li>
          </ul>
        </li>

        <li class="menu-item">
          <a href="#" class="menu-link">
            Resources
            <img src="{{ asset('image/icon-down.svg') }}" alt="">
          </a>
          <ul class="menu-child">
            <li class="menu-child__item">
              <a href="#" class="menu-child__link">Blog</a>
            </li>
            <li class="menu-child__item d-none">
              <a href="{{ route('client') }}" class="menu-child__link">Khách hàng</a>
            </li>
          </ul>
        </li>

        <li class="menu-item">
          <a href="{{ route('recruitment') }}" class="menu-link">Tuyển dụng</a>
        </li>

        <li class="menu-item">
          <a href="{{ route('contact') }}" class="menu-link btn btn-primary">Liên hệ</a>
        </li>
      </ul>

      <button type="button" class="btn btn-light nav-bars">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
  </div>
</header>
