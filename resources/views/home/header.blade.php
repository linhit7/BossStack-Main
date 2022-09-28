<header>
  <div class="container">
    <div class="wrap">
      <a href="{{ route('home') }}" class="logo"><img class="img-fluid" src="{{ asset('image/logo.svg') }}" alt=""></a>
      <ul class="menu">
        <li class="menu-item">
          <a href="#" class="menu-link">
            Tính năng
            <img src="{{ asset('image/icon-down.svg') }}" alt="">
          </a>
          <ul class="menu-child">
            <li class="menu-child__item">
              <a href="{{ route('loss-control') }}" class="menu-link">Kiểm soát thất thoát</a>
            </li>
            <li class="menu-child__item">
              <a href="{{ route('coaching') }}" class="menu-link">Coaching</a>
            </li>
            <li class="menu-child__item">
              <a href="{{ route('decision-support') }}" class="menu-link">Hỗ trợ ra quyết định</a>
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
              <a href="{{ route('about-us') }}" class="menu-link">Về BossStack</a>
            </li>
            <li class="menu-child__item">
              <a href="{{ route('recruitment') }}" class="menu-link">Tuyển dụng</a>
            </li>
            <li class="menu-child__item">
              <a href="{{ route('contact') }}" class="menu-link">Liên hệ</a>
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
              <a href="#" class="menu-link">Blog</a>
            </li>
            <li class="menu-child__item">
              <a href="{{ route('client') }}" class="menu-link">Khách hàng</a>
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
    </div>
  </div>
</header>