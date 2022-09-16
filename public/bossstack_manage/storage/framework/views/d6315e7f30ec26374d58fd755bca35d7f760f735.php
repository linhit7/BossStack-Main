<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('contracts-processPaymentMomo'), false); ?>?continue=true" method="post" id="frm">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-home" aria-hidden="true"></i> / <?php echo e($title->sub_heading, false); ?></h3>
                </div>
                <?php echo e(csrf_field(), false); ?>

                <div class="form-group">
                <br>
                <?php if($errorCode == '0'): ?>
                    <p class="text-success" style="line-height: 2"><font size='3'><b><?php echo e($infor, false); ?></b></font></p>                    
                <?php else: ?> 
                    <h3><?php echo e($infor, false); ?></h3>      
                <?php endif; ?> 
                <br>
                </div>
            </div>

            <div class="button-function" style="text-align: center;">
                <a class="btn btn-default" href="<?php echo e(route('dashboard-customer'), false); ?>" style="float: inherit;">
                    <span class="text" style="float: inherit;">Trở về trang chủ</span>
                </a>
            </div>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.contract.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>