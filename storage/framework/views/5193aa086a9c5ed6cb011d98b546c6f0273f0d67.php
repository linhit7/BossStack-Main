<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">

<style type="text/css">
	@media  only screen and (min-width: 320px) and (max-width: 575px){
		.content-wrapper .bg-top{
			display: none;
		}

		.content-wrapper .content-header{
			display: none;
		}

		.content-wrapper .content{
			padding-top: 0;
		}
	}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<form role="form" action="<?php echo e(route('dashboard-customer'), false); ?>" method="get" name="frm" id="frm">
<?php echo e(csrf_field(), false); ?>

<input type='hidden' name='typereport' value=''>

<div class="row">

 <BR><BR><H3>TRANG TIN KHÁCH HÀNG</H3>
 
</div>

</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('dashboard.partials.script_customer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>