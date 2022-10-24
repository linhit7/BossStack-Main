<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <a href="#" class="sidebar-logo">
      <img src="{{ asset('image/logo.svg') }}" alt="">
    </a>

    <div class="user-panel">
      <div class="user-panel-avt">
        <img src="{{ asset('image/leader-img-2.jpg') }}" alt="BossStack">
        {{-- @if (Auth::user()->customer()->first() !=
        null and
    Auth::user()->customer()->first()->avatar !=
        '')
          <img src="{{ asset(Auth::user()->customer()->first()->avatar) }}"
            alt="{{ Auth::user() == null ? '' : mb_strtoupper(mb_substr(Auth::user()->name, 0, 1)) }}">
        @else
          <p>
            {{ Auth::user() == null ? '' : mb_strtoupper(mb_substr(Auth::user()->name, 0, 1)) }}
          </p>
        @endif --}}
      </div>

      <div class="user-panel-info">
        <div class="info">
          <h2>{{ Auth::user() == null ? '' : Auth::user()->name }}</h2>
        </div>
        <p class="role">Admin</p>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="list-menu">
        <a href="{{ route('dashboard-customer') }}" data-name="dashboard-customer">
          <img src="{{ asset('image/icon-ad-dashboard.svg') }}" alt="">
          Tổng Quan
        </a>
      </li>

      <li class="header header-system">
        <h2>Resources</h2>
      </li>
      <li class="list-menu">
        <a href="{{ route('blogs-manage') }}" data-name="">
          <img src="{{ asset('image/icon-ad-blog.svg') }}" alt="">
          Blog
        </a>
      </li>
      <li class="list-menu">
        <a href="{{ route('customers-index') }}" data-name="">
          <img src="{{ asset('image/icon-ad-client.svg') }}" alt="">
          Khách hàng
        </a>
      </li>

      <li class="header header-system">
        <h2>Tuyển dụng</h2>
      </li>
      <li class="list-menu">
        <a href="{{ route('careers-manage') }}" data-name="">
          <img src="{{ asset('image/icon-ad-recruitment.svg') }}" alt="">
          Danh sách tuyển dụng
        </a>
      </li>
      <li class="list-menu">
        <a href="{{ route('careers-index') }}" data-name="">
          <img src="{{ asset('image/icon-ad-apply.svg') }}" alt="">
          Tin tuyển dụng
        </a>
      </li>
    </ul>

    {{-- <ul class="sidebar-menu" data-widget="tree">
      @if (isset($leftmenu) and count($leftmenu) != 0)
        @foreach ($leftmenu as $module)
          <li class="header header-system">{{ $module['name'] }}</li>

          @foreach ($module['applicationfunctiongroups'] as $functiongroups)
            <li class="treeview">
              @if (isset($functiongroups['filename']) and $functiongroups['filename'] != '')
            <li class="list-menu">
              <a href="{{ route($functiongroups['filename']) }}"
                data-name="{{ $functiongroups['filename'] }}">
                <i class="{{ $functiongroups['image'] }}"></i>
                {{ $functiongroups['name'] }}
              </a>
            </li>
          @else
            <a href="#">
              <i class="{{ $functiongroups['image'] }}"></i>
              <span>{{ $functiongroups['name'] }}</span>
              @if (isset($functiongroups['functionassignment']) and count($functiongroups['functionassignment']) != 0)
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              @endif
            </a>
          @endif

          <ul class="treeview-menu">
            @foreach ($functiongroups['functionassignment'] as $functionassignment)
              <li>
                <a href="{{ route($functionassignment['filename']) }}"
                  data-name="{{ $functiongroups['filename'] }}">
                  <i class="{{ $functionassignment['image'] }}"></i>
                  {{ $functionassignment['name'] }}
                </a>
              </li>
            @endforeach
          </ul>
          </li>
        @endforeach
      @endforeach
      @endif
    </ul> --}}
  </section>
  <!-- /.sidebar -->

  <img class="bg-circle" src="{{ asset('image/circle.png') }}" alt="">
</aside>
