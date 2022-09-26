<footer>
  <div class="container">
    <div class="wrap">
      <div class="footer-item">
        <a href="{{ route('home') }}" class="logo"><img class="img-fluid" src="{{ asset('image/logo.svg') }}" alt=""></a>
        <div class="content">
          <p><span>Address:</span> LM81 - 42.OT04 (Officetel), Landmark 81 Vinhomes Central Park, 720A Điện Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh.</p>
          <p><span>Hotline:</span> +84 918 90 55 00</p>
          <p><span>Email:</span> info@bossstack.vn</p>
        </div>
      </div>

      <div class="footer-item">
        <h4 class="footer-title">Tính năng</h4>
        <ul class="menu">
          <li class="menu-item">
            <a href="{{ route('loss-control') }}" class="menu-link">Kiểm soát thất thoát</a>
          </li>

          <li class="menu-item">
            <a href="{{ route('coaching') }}" class="menu-link">Coaching</a>
          </li>

          <li class="menu-item">
            <a href="{{ route('decision-support') }}" class="menu-link">Hỗ trợ ra quyết định</a>
          </li>
        </ul>
      </div>

      <div class="footer-item">
        <h4 class="footer-title">Về chúng tôi</h4>
        <ul class="menu">
          <li class="menu-item">
            <a href="{{ route('about-us') }}" class="menu-link">Về BossStack</a>
          </li>

          <li class="menu-item">
            <a href="{{ route('recruitment') }}" class="menu-link">Tuyển dụng</a>
          </li>

          <li class="menu-item">
            <a href="{{ route('contact') }}" class="menu-link">Liên hệ</a>
          </li>
        </ul>
      </div>

      <div class="footer-item">
        <h4 class="footer-title">Resources</h4>
        <ul class="menu">
          <li class="menu-item">
            <a href="#" class="menu-link">Blog</a>
          </li>

          <li class="menu-item">
            <a href="{{ route('client') }}" class="menu-link">Khách hàng</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>