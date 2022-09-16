<?php $__env->startSection('head'); ?>
<style type="text/css">
    #main-fund{
        background-color: #e8e8e8;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="coaching-money">
    <section class="element-section element-section-course course-intro">
        <div class="container">
            <div class="wrap bg-white">
                <div class="row">
                    <font size="5" color="#1a1f53">
                        CHÚC MỪNG BẠN ĐÃ ĐĂNG KÝ THÔNG TIN THÀNH CÔNG !
                    </font>
                </div>
            </div>
        </div>
    </section>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo $__env->make('home.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>