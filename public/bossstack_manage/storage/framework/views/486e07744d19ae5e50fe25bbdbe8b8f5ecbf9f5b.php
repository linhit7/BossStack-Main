<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHẦN MỀM FIINVES</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="route" content="<?php echo e(request()->route()->getName(), false); ?>">

    <link rel="icon" type="image/png" href="<?php echo e(asset('img/fiinves-f-logo-tab.png'), false); ?>" sizes="32x32" />

    <link rel="stylesheet" href="<?php echo e(asset('bower_components/font-awesome/css/font-awesome.min.css'), false); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/Ionicons/css/ionicons.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/common.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/style_fund.css'), false); ?>">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Carousel CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css'), false); ?>">

    @laravelPWA
    <!-- Carousel CSS -->

    <?php echo $__env->yieldContent('head'); ?>
    
</head>

<body>
    
    <div id="header-fund">

        <!-- Menu -->

        <?php echo $__env->make('home.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <!-- End Menu -->

        <!-- Banner -->
        <div class="banner-home-fund">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-12">
                        <div class="banner-home-fund-left">
                            <div class="align-self-center">
                                <img src="<?php echo e(asset('img/text-1-w.png'), false); ?>">
                                <h1>DÒNG TIỀN CÁ NHÂN</h1>
                                <p>Kiểm soát đời sống tài chính và gia tăng thu nhập ngay bây giờ!</p>
                                <div class="button-banner">
                                    <!-- <a class="btn btn-primary btn-banner" href="<?php echo e(route('personalcash'), false); ?>">Tìm hiểu ngay</a> -->
                                    <a class="btn btn-primary btn-banner" href="<?php echo e(route('customers-register'), false); ?>">Mở Tài Khoản Miễn Phí</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-12 mt-5 mt-sm-0">
                        <img src="<?php echo e(asset('img/home-banner-right.png'), false); ?>" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->

    </div>

    <div id="main-fund">

        <!-- Về LAMs -->
        <section class="element-section element-bg-16 element-about-lams">
            <div class="container">

                <div class="about-lams-1">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="box-1 mb-4 mb-sm-0 clearfix">
                                <div class="box-left align-self-center">
                                    <img src="<?php echo e(asset('img/icon-3.png'), false); ?>">
                                </div>
                                <div class="box-right align-self-center">
                                    <h1>Quản Lý <br>Dòng Tiền Thu Chi</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="box-2 mb-4 mb-sm-0 clearfix">
                                <div class="box-left align-self-center">
                                    <img src="<?php echo e(asset('img/icon-1.png'), false); ?>">
                                </div>
                                <div class="box-right align-self-center">
                                    <h1>Thiết Lập <br>Mục Tiêu Tài Chính</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="box-3 mb-4 mb-sm-0 clearfix">
                                <div class="box-left align-self-center">
                                    <img src="<?php echo e(asset('img/icon-2.png'), false); ?>">
                                </div>
                                <div class="box-right align-self-center">
                                    <h1>Đầu Tư <br>Gia Tăng Thu Nhập</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-lams-2">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="logo mb-4">
                                <img src="<?php echo e(asset('img/text-3.png'), false); ?>">
                            </div>
                            <p>Được thành lập năm 2018, <b>Công ty TNHH Lamian Trading</b> là một trong những công ty uy tín trong việc cung cấp các giải pháp hỗ trợ khách hàng quản lý và gia tăng dòng tiền cá nhân. Với đội ngũ lãnh đạo, nhân viên có kinh nghiệm sâu sắc và chuyên môn cao trong lĩnh vực quản lý tài chính, <b>Công ty TNHH Lamian Trading</b> đã phát triển hệ thống Dòng Tiền Cá Nhân, một phần mềm hiệu quả, nơi mọi đồng vốn của khách hàng đều được quản lý và tăng trưởng bền vững.</p>
                            <a href="<?php echo e(route('about-us'), false); ?>">Tìm hiểu thêm <i class="fa fa-arrow-right"></i></a>
                        </div>
                        <!-- <div class="col-md-6">
                            <img src="<?php echo e(asset('img/about-lams.jpg'), false); ?>" width="100%">
                        </div> -->
                    </div>
                </div>
                
            </div>
        </section>
        <!-- End Về LAMs -->

        <!-- TẠI SAO BẠN NÊN CHỌN CHÚNG TÔI? -->
        <section class="element-section element-why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <img class="mb-5 mb-sm-0" src="<?php echo e(asset('img/why-choose-us.png'), false); ?>" width="100%">
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="why-choose-us-right">
                            <img src="<?php echo e(asset('img/text-2.png'), false); ?>">
                            <ul>
                                <li class="clearfix">
                                    <span class="icon"><img src="<?php echo e(asset('img/icon-4.png'), false); ?>"></span>
                                    <span class="text align-self-center">Bám Sát Các Mục Tiêu Tài Chính Mọi Lúc Mọi Nơi</span>
                                </li>
                                <li class="clearfix">
                                    <span class="icon"><img src="<?php echo e(asset('img/icon-4.png'), false); ?>"></span>
                                    <span class="text align-self-center">Quản Lý Thông Minh, Đơn Giản Hóa và Dễ Sử Dụng</span>
                                </li>
                                <li class="clearfix">
                                    <span class="icon"><img src="<?php echo e(asset('img/icon-4.png'), false); ?>"></span>
                                    <span class="text align-self-center">Kiểm Soát Thu Chi Hàng Ngày Nhanh Chóng Với Thao Tác Đơn Giản</span>
                                </li>
                                <li class="clearfix">
                                    <span class="icon"><img src="<?php echo e(asset('img/icon-4.png'), false); ?>"></span>
                                    <span class="text align-self-center">Quản Lý Tất Cả Dòng Tiền Về Thu, Chi, Đầu Tư, Tiết Kiệm, Lợi Nhuận, Thua Lỗ, ... Chi Tiết.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End TẠI SAO BẠN NÊN CHỌN CHÚNG TÔI? -->

        <!-- Ưu điểm của hệ thống -->
        <section class="element-section element-bg-1 element-advantages position-relative">
            <div class="element-advantages-img"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <ul>
                            <li class="clearfix">
                                <span class="icon"><img src="<?php echo e(asset('img/icon-5.png'), false); ?>"></span>
                                <span class="text align-self-center">Giao diện bắt mắt và thân thiện với người dùng.</span>
                            </li>
                            <li class="clearfix">
                                <span class="icon"><img src="<?php echo e(asset('img/icon-6.png'), false); ?>"></span>
                                <span class="text align-self-center">Hệ thống thông báo giúp bạn không phải lo về các khoản thu phí định kỳ.</span>
                            </li>
                            <li class="clearfix">
                                <span class="icon"><img src="<?php echo e(asset('img/icon-7.png'), false); ?>"></span>
                                <span class="text align-self-center">Biểu đồ chi tiết hỗ trợ bạn theo dõi cuộc sống tài chính của mình.</span>
                            </li>
                            <li class="clearfix">
                                <span class="icon"><img src="<?php echo e(asset('img/icon-8.png'), false); ?>"></span>
                                <span class="text align-self-center">Thiết lập kế hoạch tài chính tương lai với phân tích chi tiết.</span>
                            </li>
                            <li class="clearfix">
                                <span class="icon"><img src="<?php echo e(asset('img/icon-9.png'), false); ?>"></span>
                                <span class="text align-self-center">Dịch vụ tư vấn, hỗ trợ cải thiện dòng tiền cá nhân.</span>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="bg-advantages">
                            <img src="<?php echo e(asset('img/advantages-system.png'), false); ?>">
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- End Ưu điểm của hệ thống -->

        <!-- Bảng giá phần mềm -->
        <section class="element-section element-price-list">
            <div class="container">
                <?php echo $__env->make('home.package', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </section>
        <!-- End Bảng giá phần mềm -->

        <!-- Liên hệ
        <section class="element-section element-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact">
                            <h1>BẠN CẦN HỖ TRỢ?</h1>
                            <p>Hãy liên hệ với chúng tôi để nhận được tư vấn sử dụng dịch vụ và gia tăng dòng tiền cá nhân.</p>
                            <a href="<?php echo e(route('contact'), false); ?>" class="btn btn-primary btn-contact">Liên hệ</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        End Liên hệ -->

        <!-- Nhận xét -->
        <section class="element-section element-review">
            <div class="container">

                <h1 class="text-center mb-5"><font size="6">ĐÁNH GIÁ SẢN PHẨM</font></h1>
                
                <div class="carousel-review">
                    <div class="owl-carousel owl-theme carousel-review-items">
                        <div class="item">
                            <div class="avatar mb-3">
                                <img src="<?php echo e(asset('img/user-2.jpg'), false); ?>">
                            </div>
                            <div class="name mb-2">Nguyễn Đỗ Cẩm Bình</div>
                            <div class="subject mb-2">Trưởng phòng kinh doanh, Công ty BĐS Him Lam</div>
                            <div class="content">
                                <p>Tôi từng nghĩ các ứng dụng quản lý tiền có thể chỉ là là một công cụ nhưng Fiinves đã cho tôi cách nhìn khác. Đây thật sự là một phần mềm có thể tính toán từng đồng tiền nhỏ cho đến số tiền lớn, mà tính toán thủ công sẽ không khả thi. Nó trở thành một người bạn đáng tin cậy khi giữ gìn và phát triển tiền bạc của tôi tốt hơn. Tôi chú ý nhất đến phần tính số tiền còn thiếu hụt cho kỳ hưu trí. Về dòng tiền, tôi thiết lập các mục tiêu tài chính chi tiết, quản lý thu chi hằng ngày, quản lý tài sản và nợ, phân tích và theo dõi tiến độ thực hiện các kế hoạch dòng tiền, và điểm đặc biệt là các gợi ý đầu tư dài hạn phù hợp.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="avatar mb-3">
                                <img src="<?php echo e(asset('img/user-1.jpg'), false); ?>">
                            </div>
                            <div class="name mb-2">Lê Hoài Ân, CFA</div>
                            <div class="subject mb-2">Tác giả cuốn sách bán chạy #1: 20 Năm Lịch Sử Thị Trường Chứng Khoán Việt Nam</div>
                            <div class="content">
                                <p>Ứng dụng Fiinves là công cụ giúp cụ thể hóa những ý tưởng và phương pháp quản lý được trình bày trong các sách tài chính cá nhân. Với Fiinves, bạn sẽ có thể theo dõi và kiểm soát được các mục tiêu tài chính đã đề ra để từng bước đạt được mục tiêu tự do tài chính. Ngoài ra, bạn có thể sử dụng ứng dụng như một công cụ để quản lý toàn bộ các khoản đầu tư của mình trên thị trường chứng khoán một cách chi tiết cụ thể từng lệnh giao dịch. Các kiến thức đầu tư cũng là một trong những ưu điểm của Fiinves mà bạn nên sử dụng. </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="avatar mb-3">
                                <img src="<?php echo e(asset('img/user.jpg'), false); ?>">
                            </div>
                            <div class="name mb-2">Huỳnh Thu Ái</div>
                            <div class="subject mb-2">Nhà cố vấn - Đào Tạo Quản Lý Hệ Thống Doanh Nghiệp AMS</div>
                            <div class="content">
                                <p>Sau một thời gian sử dụng Fiinves, tôi đã xem đây như là một công cụ để thực hiện lên kế hoạch phân bổ tài sản đến phân bổ các dòng tiền lợi nhuận và các ví mục tiêu tài chính khác nhau. Đồng thời, theo dõi phân tích và đánh giá tiến độ thực hiện cũng là một trong những tính năng giúp tôi dễ dàng quản lý toàn bộ danh mục đầu tư của mình. Tôi nói với nhiều người rằng, tôi kiếm được nhiều tiền hơn nữa khi dùng Fiinves. Đơn giản vì nếu các nguồn tiền được phân bổ hợp lý, tiền được sử dụng đúng. Và trong từng mục thu chi, từng mục tiêu tài chính, tôi có thể thấy chúng được tối ưu chưa. Sẽ có hai điều mà tôi phải thực hiện cùng lúc, một là cần phải kiếm thêm tiền để đổ thêm vào các mục tiêu, hai là tôi phải cắt giảm đi những chi phí ẩn hay chi phí không cần thiết mà trước đây mình không để ý đến. Mọi thứ điều nằm trong tầm kiểm soát, như thế tôi có được an toàn tài chính.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Nhận xét -->

    </div>

    <?php echo $__env->make('home.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script src="<?php echo e(asset('bower_components/jquery/dist/jquery.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('bower_components/jquery-ui/jquery-ui.min.js'), false); ?>"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="<?php echo e(asset('bower_components/bootstrap/dist/js/bootstrap.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('bower_components/moment/min/moment.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'), false); ?>"></script>

    <script src="<?php echo e(asset('js/commons.js'), false); ?>"></script>

    

    <script src="<?php echo e(asset('js/libs/bootstrap3-typeahead.min.js'), false); ?>"></script>      
    <script src="<?php echo e(asset('js/libs/bootstrap-multiselect.js'), false); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('js/libs/bootstrap-multiselect.css'), false); ?>" />

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Carousel JS -->
    <script src="<?php echo e(asset('js/owl.carousel.min.js'), false); ?>"></script>
    <!-- Carousel JS -->

    <!-- Fund JS -->
    <script src="<?php echo e(asset('js/fund.js'), false); ?>"></script>
    <!-- Fund JS -->

    <?php echo $__env->yieldContent('scripts'); ?>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60504f44067c2605c0b8c7c8/1f0srb9eh';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>