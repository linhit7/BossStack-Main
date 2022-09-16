<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(config('app.name'), false); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="route" content="<?php echo e(request()->route()->getName(), false); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/fiinves-f-logo-tab.png'), false); ?>" sizes="32x32" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?php echo e(asset('bower_components/font-awesome/css/font-awesome.min.css'), false); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/Ionicons/css/ionicons.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/common.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/style_fund.css'), false); ?>">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <?php echo $__env->yieldContent('head'); ?>

</head>

<body style="font-family: 'Roboto', sans-serif !important;">

    <div id="header-fund">

        <div class="login">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="login-box">
                            <div class="card">
                                <div class="card-body d-flex">
                                    <div class="row">
                                        <div class="col-md-6 text-center mb-4 mb-sm-0">
                                            
                                        </div>
                                        <div class="col-md-6 align-self-center">
                                            <div class="login-logo text-center">
                                                <img src="<?php echo e(asset('img/logo-finves.png'), false); ?>" alt="" width="30%">
                                            </div>

                                            <?php if(count($errors)>0): ?>
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="form-group has-feedback">
                                                <font color='#ff0000'><b><?php echo e($error, false); ?></b></font>
                                                </div>                  
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>                                        
                                            <?php if(Session::has('infor')): ?>
                                                <div class="form-group has-feedback">
                                                <font color='#ff0000'><b><?php echo e(Session::get('infor'), false); ?></b></font>
                                                </div>                  
                                            <?php endif; ?>
                                            <form action="<?php echo e(route('login'), false); ?>" method="post">
                                                <?php echo e(csrf_field(), false); ?>

                                                <div class="form-group has-feedback">
                                                    <input type="email" class="form-control" placeholder="Email" name="email" required="required" value="<?php echo e(env('TEST_USERNAME'), false); ?>">
                                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="required" value="<?php echo e(env('TEST_PASSWORD'), false); ?>">
                                                         <div class="input-group-addon">
                                                            <a href="" style="color:#777;"><i style="margin: 10px 10px 5px 10px;" class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                          </div>
                                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <input type="captchacode" class="form-control" placeholder="Mã kiểm tra" name="captchacode" required="required" value="">
                                                    </div>
                                                    <div class="col-md-4 col-4">
                                                        <img id="captcha" name="captcha" src="<?php echo e(route('apiadmin-getCaptcha'), false); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <div class="forgot-password">
                                                        <a href="<?php echo e(route('customers-forgotPassword'), false); ?>" class="card-link"><b>Quên mật khẩu?</b></a>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary btn-login" style="width: 100%;"><b>ĐĂNG NHẬP</b></button>
                                            </form>

                                            <p class="text-center" style="margin: 20px 0;"><b>Bạn có tài khoản chưa?</b></p>

                                            <a href="<?php echo e(route('customers-register', ['service_product_id' => 1]), false); ?>" class="btn btn-primary btn-register" style="width: 100%; font-size: 1rem !important;"><b>ĐĂNG KÝ</b></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('bower_components/jquery/dist/jquery.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('bower_components/jquery-ui/jquery-ui.min.js'), false); ?>"></script>

    <!-- Bootstrap Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Bootstrap Script -->

    <script>
        $(function() {
            var height_window = $( window ).height();
            var login_box_height = $(".login-box").height();
            var total = (height_window - login_box_height) / 2;
            var string_padding_login = total + "px";

            $(".login").css({
                "padding-top": string_padding_login,
                "padding-bottom": string_padding_login
            });

            // var height_login = $(".login").innerHeight();
            // $(".login-box").css({
            //     "min-height": height_login,
            //     "display": "flex",
            //     "flex-direction": "column",
            //     "justify-content": "center",
            //     "align-items": "center",
            //     "text-align": "center",
            // });

        });

        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if($('#show_hide_password input').attr("type") == "text"){
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass( "fa-eye-slash" );
                    $('#show_hide_password i').removeClass( "fa-eye" );
                }else if($('#show_hide_password input').attr("type") == "password"){
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass( "fa-eye-slash" );
                    $('#show_hide_password i').addClass( "fa-eye" );
                }
            });
        });

    </script>

    <!-- Fund JS -->
    <script src="<?php echo e(asset('js/fund.js'), false); ?>"></script>
    <!-- Fund JS -->
    
</body>
</html>
