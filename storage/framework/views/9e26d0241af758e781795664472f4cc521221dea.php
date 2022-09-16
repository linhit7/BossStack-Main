<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FIINVES</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="route" content="<?php echo e(request()->route()->getName(), false); ?>">

    <link rel="icon" type="image/png" href="<?php echo e(asset('img/fiinves-f-logo-tab.png'), false); ?>" sizes="32x32" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap CSS -->

	<!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Fontawesome CSS -->

    <link rel="stylesheet" href="<?php echo e(asset('css/style.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/style_fund.css'), false); ?>">

	<!-- Font Family -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <!-- Font Family -->

    <!-- Carousel CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css'), false); ?>">
    <!-- Carousel CSS -->

    <?php echo $__env->yieldContent('head'); ?>
    @laravelPWA
</head>

<body>
	
	<div id="header-fund">
		
		<!-- Menu -->
        <?php echo $__env->make('home.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- End Menu -->

		<!-- Banner -->
        <div class="banner-default-fund">
            <div class="container"></div>
        </div>
        <!-- End Banner -->

	</div>

	<div id="main-fund">
		<?php echo $__env->yieldContent('content'); ?>
	</div>

	<?php echo $__env->make('home.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- Jquery Script -->
	<script src="<?php echo e(asset('bower_components/jquery/dist/jquery.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('bower_components/jquery-ui/jquery-ui.min.js'), false); ?>"></script>
    <!-- Jquery Script -->

    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>

    <!-- Bootstrap Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!-- Bootstrap Script -->

    <!-- Carousel JS -->
    <script src="<?php echo e(asset('js/owl.carousel.min.js'), false); ?>"></script>
    <!-- Carousel JS -->

    <!-- Fund JS -->
    <script src="<?php echo e(asset('js/fund.js'), false); ?>"></script>
    <!-- Fund JS -->

    <script>
        
        var url = window.location.href;

        if(url == "https://fiinves.vn/about-us" || url == "https://fiinves.vn/public/about-us"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>VỀ CHÚNG TÔI</font></h1>" );

        }else if(url == "https://fiinves.vn/intro-products" || url == "https://fiinves.vn/public/intro-products"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>COACHING VỀ TIỀN</font></h1>" );

        }else if(url == "https://fiinves.vn/invest" || url == "https://fiinves.vn/public/invest"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>ĐẦU TƯ</font></h1>" );

        }else if(url == "https://fiinves.vn/personalcash" || url == "https://fiinves.vn/public/personalcash"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>HỆ THỐNG QUẢN LÝ TÀI CHÍNH FIINVES</font></h1>" );

        }else if(url == "https://fiinves.vn/predictindex" || url == "https://fiinves.vn/public/predictindex"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>FIINVES - COACHING 1:1</font></h1>" );

        }else if(url == "https://fiinves.vn/saving" || url == "https://fiinves.vn/public/saving"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>FIINVES BUSINESS</font></h1>" );

        }else if(url == "https://fiinves.vn/advisory" || url == "https://fiinves.vn/public/advisory"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>DỊCH VỤ HỖ TRỢ</font></h1>" );

        }else if(url == "https://fiinves.vn/recruitment" || url == "https://fiinves.vn/public/recruitment"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>TUYỂN DỤNG</font></h1>" );

        }else if(url == "https://fiinves.vn/contact" || url == "https://fiinves.vn/public/contact"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>LIÊN HỆ</font></h1>" );

        }else if(url == "https://fiinves.vn/payment-method" || url == "https://fiinves.vn/public/payment-method"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>PHƯƠNG THỨC THANH TOÁN</font></h1>" );

        }else if(url == "https://fiinves.vn/privacy-policy" || url == "https://fiinves.vn/public/privacy-policy"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>CHÍNH SÁCH BẢO MẬT</font></h1>" );

        }else if(url == "https://fiinves.vn/terms-of-service" || url == "https://fiinves.vn/public/terms-of-service"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>ĐIỀU KHOẢN DỊCH VỤ</font></h1>" );

        }else if(url == "https://fiinves.vn/TheDefinitionOfInvesting" || url == "https://fiinves.vn/public/TheDefinitionOfInvesting"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>KHÁI NIỆM ĐẦU TƯ</font></h1>" );

        }else if(url == "https://fiinves.vn/WhyYouShouldInvest" || url == "https://fiinves.vn/public/WhyYouShouldInvest"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>TẠI SAO BẠN NÊN ĐẦU TƯ</font></h1>" );

        }else if(url == "https://fiinves.vn/EffectiveBudgeting" || url == "https://fiinves.vn/public/EffectiveBudgeting"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>QUẢN LÝ CHI TIÊU HIỆU QUẢ</font></h1>" );

        }else if(url == "https://fiinves.vn/FinancialPlanning" || url == "https://fiinves.vn/public/FinancialPlanning"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>KẾ HOẠCH TÀI CHÍNH TƯƠNG LAI</font></h1>" );

        }else if(url == "https://fiinves.vn/SavingMethod" || url == "https://fiinves.vn/public/SavingMethod"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>PHƯƠNG THỨC TIẾT KIỆM</font></h1>" );

        }else if(url == "https://fiinves.vn/HowToGrowYourCashFlow" || url == "https://fiinves.vn/public/HowToGrowYourCashFlow"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>TĂNG TRƯỞNG DÒNG TIỀN CÁ NHÂN</font></h1>" );

        }else if(url == "https://fiinves.vn/customers/addCustomer?continue=true" || url == "https://fiinves.vn/public/customers/addCustomer?continue=true"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>PHƯƠNG THỨC THANH TOÁN</font></h1>" );
        }else if(url == "https://fiinves.vn/coaching-money" || url == "https://fiinves.vn/public/coaching-money"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>COACHING VỀ TIỀN</font></h1>" );
        }else if(url == "https://fiinves.vn/fiinves-money" || url == "https://fiinves.vn/public/fiinves-money"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>FIINVES MONEY PRO</font></h1>" );
        }else if(url == "https://fiinves.vn/fiinves-business" || url == "https://fiinves.vn/public/fiinves-business"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>FIINVES BUSINESS</font></h1>" );
        }else if(url == "https://fiinves.vn/fiinves-coaching-1" || url == "https://fiinves.vn/public/fiinves-coaching-1"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>COACHING 1:1 - XỬ LÝ DÒNG TIỀN</font></h1>" );
        }else if(url == "https://fiinves.vn/fiinves-coaching-2" || url == "https://fiinves.vn/public/fiinves-coaching-2"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>COACHING 1:1 - TIỀN ĐẺ RA TIỀN</font></h1>" );
        }else if(url == "https://fiinves.vn/fiinves-coaching-3" || url == "https://fiinves.vn/public/fiinves-coaching-3"){
            $( ".banner-default-fund .container" ).html( "<h1 class='text-center'><font size='7' color='#fff'>COACHING 1:1 - TĂNG TRƯỞNG ĐA DÒNG TIỀN</font></h1>" );
        }

    </script>
	
	<?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>