<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BossStack</title>
  <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon">

  <!-- Library -->
  <link 
    rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" 
  />
  <link rel="stylesheet" href="{{ asset('assets/lib/bootstrap/bootstrap.min.css') }}">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/font.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/component.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

  <!-- Component -->
  <link rel="stylesheet" href="{{ asset('assets/css/component/banner.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/component/cardList.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/component/cardAdvertisement.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/component/formContact.css') }}">

  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('assets/css/page/home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/page/aboutus.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/page/feature.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/page/recruitment.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/page/client.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/page/contact.css') }}">

  @yield('head')
</head>

<body>
  @include('home.header')

  <div class="main">
    @yield('content')
  </div>
  
  @include('home.footer')

  <!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/lib/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="{{ asset('assets/js/db.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  @yield('scripts')
</body>
</html>