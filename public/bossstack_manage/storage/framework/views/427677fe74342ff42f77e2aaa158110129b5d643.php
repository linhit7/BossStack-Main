<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('contracts-storeProduct'), false); ?>?continue=true" method="post" id="frm">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-home" aria-hidden="true"></i> / <?php echo e($title->sub_heading, false); ?></h3>
                </div>
                <?php echo e(csrf_field(), false); ?>

                <input type='hidden' name='typereport' value=''>
                <div class="box-body">
                    <div class="row">

                        <div class="col-md-5">
                            <div class="panel panel-default panel-info-account">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Thông tin tài khoản</h3>

                                    <a href="<?php echo e(route('customers-editCustomer'), false); ?>" class="text-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <b>Chỉnh sửa</b></a>
                                </div>

                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <b>Họ và tên:</b>
                                            </div>
                                            <div class="col-md-7">
                                                <p class="text-primary"><?php echo e($customer->fullname, false); ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <b>Địa chỉ email:</b>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="text-primary"><?php echo e($customer->email, false); ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <b>Địa chỉ liên hệ:</b>
                                            </div>
                                            <div class="col-md-7">
                                                <p class="text-primary"><?php echo e($customer->address, false); ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <b>Điện thoại:</b>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="text-primary"><?php echo e($customer->phone, false); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-7">
                            <div class="panel panel-default panel-order">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Thông tin đơn hàng</h3> 
                                </div>

                                <div class="panel-body">

                                    <input type='hidden' name='service_product_id' value='<?php echo e($service_product_id, false); ?>'>                
                                    <input type='hidden' name='producttypes_numtime' value='<?php echo e($producttypes_numtime, false); ?>'>
                                    <input type='hidden' name='producttypes_discount' value='<?php echo e($producttypes_discount, false); ?>'>                
                                    <input type='hidden' name='producttypes_amount' value='<?php echo e($producttypes_amount, false); ?>'>                

                                    <table class="table table-hover" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="40%"><b>Dịch vụ</b></th>
                                                <th class="text-center" width="15%"><b>Thời hạn (tháng)</b></th>
                                                <th class="text-center" width="15%"><b>Giảm giá (%)</b></th>                                                
                                                <th class="text-center" width="30%"><b>Số tiền thanh toán (đồng)</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><b><?php echo e($service_product_name, false); ?></b> <br> Giá: <?php echo e(formatNumber($service_product_price, 1, 0, 0), false); ?> đồng/tháng</td>
                                                <td class="text-center"><?php echo e($producttypes_numtime, false); ?></td>
                                                <td class="text-center"><?php echo e($producttypes_discount, false); ?></td>
                                                <td class="text-right"><?php echo e(formatNumber($producttypes_amount, 1, 0, 0), false); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="3"><b>THÀNH TIỀN</b></td>
                                                <td class="text-right"><?php echo e(formatNumber($producttypes_amount, 1, 0, 0), false); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 

                    </div>                    

                </div>

            </div>
            
            <div class="button-function clearfix">
                <a class="btn btn-default clearfix" href="<?php echo e(route('contracts-addContract'), false); ?>">
                    <span class="icon"><i class="fa fa-arrow-left"></i></span>
                    <span class="text">Quay lại</span>
                </a>
                <button class="btn btn-primary btn-pay clearfix" onclick="processReports('frm', 'store')" style="background-color: rgba(235, 161, 52); border: 1px solid rgba(235, 161, 52);">
                    <span class="text">Tiếp tục thanh toán</span>
                    <span class="icon"><i class="fa fa-arrow-right"></i></span>
                </button>
            </div>
               
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.contract.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>