<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<form role="form" action="<?php echo e(route('dashboard-customer')); ?>" method="get" name="frm" id="frm">
<?php echo e(csrf_field()); ?>

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