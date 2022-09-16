<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">

<style type="text/css">
    label{
        font-size: 12px;
    }

    .select2-container .selection .select2-selection--single{
        height: 34px !important;
        padding: 6px 12px !important;
    }

    .select2-container .selection .select2-selection--single .select2-selection__arrow{
        height: 28px !important;
    }

    @media  only screen and (max-width: 768px){
        .box-cashplans.box-customer .help > div{
            display: block;
            justify-content: normal;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(isset($infor)): ?>
<div class="alert alert-success">
    <?php echo e($infor, false); ?>

</div>
<?php endif; ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<div class="row">
    <form role="form" action="<?php echo e(route('retireplans-process'), false); ?>?continue=true" method="post" id="frm" enctype="multipart/form-data">


        <div class="col-md-12">
            <div class="box box-cashplans box-customer">
                <?php echo e(csrf_field(), false); ?>

                <input type='hidden' name='typereport' value=''>
                <input type='hidden' name='customer_id' value='<?php echo e($customer_id, false); ?>'>
                                
                <div class="box-body">
                    <font style="font-size:11pt;">Thông tin nghỉ hưu của khách hàng. Để xem lại thông tin chi tiết các mục tiêu tài chính khách hàng vui lòng xem <a href="<?php echo e(route('retireplans-index'), false); ?>"><b><font color="#FFA500">tại đây</font></b></a>.</font><br><br><br>



                    
                </div>
            </div>
            
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.cashplan.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>