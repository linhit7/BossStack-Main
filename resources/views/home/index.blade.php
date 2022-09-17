<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BossStack</title>

  <!-- Library -->
  <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/bootstrap.min.css') }}">

  <!-- Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/component.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/banner.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('assets/css/page/home.css') }}">

  @yield('head')
</head>

<body>
  @include('home.header')

  <div class="main">
    @yield('content')
  </div>
  
  @include('home.footer')

  <!-- Bootstrap -->
  <script src="{{ asset('assets/lib/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  @yield('scripts')
</body>
</html>