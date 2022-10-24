<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name') }}</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
    name="viewport">
  <meta name="route" content="{{ request()->route()->getName() }}">

  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <link rel="stylesheet"
    href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet"
    href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css') }}">
  <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet"
    href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet"
    href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <link rel="stylesheet"
    href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css') }}">

  <!-- Carousel CSS -->
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/admin/main.css') }}">
  {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}

  @yield('head')

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Header Navbar: style can be found in header.less -->
      {{-- <nav class="navbar-desktop">
        <div class="navbar-custom-menu">
          @include('layouts.partials.navigations.top')
        </div>
      </nav> --}}

      <nav class="navbar navbar-mobile navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <i class="fa fa-bars" aria-hidden="true"></i>
          {{-- <span class="sr-only">Toggle navigation</span> --}}
        </a>
        <div class="navbar-custom-menu">
          @include('layouts.partials.navigations.top')
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    @include('layouts.partials.navigations.left')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content-top">
        <div class="search">
          <form action="" method="post">
            <i class="fas fa-search"></i>
            <input type="text" name="searchInput" id="searchInput" placeholder="Search....">
          </form>
        </div>
        <div class="avatar-sm">
          <img src="{{ asset('image/leader-img-2.jpg') }}" alt="BossStack">
        </div>
        <div class="sign-out">
          <a href="{{ route('logout') }}" title="Đăng xuất"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <img src="{{ asset('image/icon-signout.svg') }}" alt="">
            <span>Đăng xuất</span>
          </a>
          <form type="hidden" id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
          </form>
        </div>
      </section>

      <section class="content-header">
        <h1>
          <img src="{{ asset('image/circle-disc-blue-1.png') }}" alt="">
          {{ $title->heading }}
        </h1>
      </section>

      <section class="content">
        @yield('content')
      </section>

      <img class="bg-circle" src="{{ asset('image/circle.png') }}" alt="">
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer" style="display: none;"></footer>
  </div>
  <div class="loading-wrapper">
    <div class="loading">
      <img src="{{ asset('image/loading.svg') }}">
    </div>
  </div>
  <!-- ./wrapper -->






  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery.tabledit.js') }}"></script>
  <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('bower_components/ckeditor/ckfinder/ckfinder.js') }}"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('bower_components/raphael/raphael.min.js') }}"></script>
  <script src="{{ asset('bower_components/morris.js/morris.min.js') }}"></script>
  <script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}">
  </script>
  <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
  <script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
  <script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}">
  </script>
  <script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js') }}">
  </script>
  <script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
  <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
  <script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
  <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
  <script src="{{ asset('js/libs/sweetalert.min.js') }}"></script>

  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/commons.js') }}"></script>

  {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> --}}
  <script type="text/javascript"
    src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <script src="{{ asset('js/libs/bootstrap3-typeahead.min.js') }}"></script>
  <script src="{{ asset('js/libs/bootstrap-multiselect.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('js/libs/bootstrap-multiselect.css') }}" />

  <link rel="stylesheet" href="{{ asset('css/c3.css') }}">
  <script src="{{ asset('js/d3.v5.min.js') }}"></script>
  <script src="{{ asset('js/c3.js') }}"></script>

  <!-- Carousel JS -->
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>


  @yield('scripts')

  <script
    src="{{ asset('bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.vi.min.js') }}">
  </script>
  <script
    src="{{ asset('bower_components/bootstrap-datetimepicker-master/build/js/bootstrap-datetimepicker.min.js') }}">
  </script>
  <link rel="stylesheet"
    href="{{ asset('bower_components/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.min.css') }}" />


</body>

</html>
