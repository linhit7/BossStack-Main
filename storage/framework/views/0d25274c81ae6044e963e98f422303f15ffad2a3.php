<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BOSSSTACK</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="route" content="<?php echo e(request()->route()->getName(), false); ?>">

    <?php echo $__env->yieldContent('head'); ?>
    
</head>
<body>

    <div class="user-mobile">
        <a class="sign-in" href="<?php echo e(route('login'), false); ?>">
            <span><b>Đăng nhập</b></span>
        </a>
    </div>

    <H3>TRANG CHỦ BOSSSTACK</H3>

</body>
</html>