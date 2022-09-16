<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/pages/style_admin.css'), false); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<form role="form" action="<?php echo e(route('dashboard-manage'), false); ?>" method="get" name="frm">
<?php echo e(csrf_field(), false); ?>

<input type='hidden' name='typereport' value=''>
<input type='hidden' name='searchdate' value='<?php echo e($searchdate, false); ?>'>

<div class="status">
    <b class="alert alert-warning">Tổng số khách hàng: <?php echo e($totalCustomer, false); ?></b>        
    <b class="alert alert-success">Khách hàng mới: <?php echo e($totalNewCustomer, false); ?></b>        
    <b class="alert alert-danger">Thông tin chờ xử lý: <?php echo e($totalWaitCustomer, false); ?></b> 
</div>

<div class="row">
	<div class="col-md-6">
		<div class="box">                   
            <div class="box-body">
            	<div class="form-group">
                    <div class="row" style="display: flex; margin-bottom: 20px;">
                        <div class="col-md-8" style="align-self: center;">
                            <h3>Thống kê dữ liệu khách hàng đăng ký</h3>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control select2" name="periodtype" id="periodtype" onchange='document.frm.submit();'>
                                <?php $__currentLoopData = $periodtypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($key == $periodtype): ?>
                                        <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>                                                                    
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>                  
                        </div>  
                    </div>
            		<div id="rptcustomer"></div>
            	</div>
            </div>
        </div>
	</div>
	<div class="col-md-6">
		<div class="box">                   
            <div class="box-body">
            	<div class="form-group">
                    <div class="row" style="display: flex; margin-bottom: 20px;">
                        <div class="col-md-8" style="align-self: center;">
                            <h3>Thống kê gói sản phẩm đăng ký</h3>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control select2" name="productperiodtype" id="productperiodtype" onchange='document.frm.submit();'>
                                <?php $__currentLoopData = $periodtypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($key != 'd'): ?>
                                        <?php if($key == $productperiodtype): ?>
                                            <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>                                                                    
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>                  
                        </div>  
                    </div>
            		<div id="rptproduct"></div>
            	</div>
            </div>
        </div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="box">                   
            <div class="box-body" style="max-height: 437px;">
            	<div class="form-group">
            		<?php echo $__env->make('dashboard.partials.search-form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="text-align: center;" class="text-nowrap" width="1%">STT</th>
                                <th style="text-align: center;" class="text-nowrap" width="20%">TÊN KHÁCH HÀNG</th>
                                <th style="text-align: center;" class="text-nowrap">TUỔI</th>
                                <th style="text-align: center;" class="text-nowrap">EMAIL</th>
                                <th style="text-align: center;" class="text-nowrap">ĐIỆN THOẠI</th>
                                <th style="text-align: center;" class="text-nowrap">ĐĂNG KÝ</th>
                                <th style="text-align: center;" class="text-nowrap">ĐỐI TƯỢNG</th>
                                <th style="text-align: center;" class="text-nowrap">SỐ DƯ TK(VND)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($listcustomertype->count() === 0): ?>
                            <tr>
                                <td colspan="7"><b>Không có dữ liệu!!!</b></td>
                            </tr>
                            <?php endif; ?>
                            <?php
                                $i = 1
                            ?>                        
                            <?php $__currentLoopData = $listcustomertype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="table-customer">
                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                    <td style="text-align: left;" class="text-nowrap"><?php echo e($customer->fullname, false); ?></td>
                                    <td style="text-align: center;" class="text-nowrap"><?php echo e((Carbon\Carbon::now()->year) - (substr($customer->birthday, 0, 4)), false); ?></td>
                                    <td style="text-align: left;" class="text-nowrap"><?php echo e($customer->email, false); ?></td>
                                    <td style="text-align: left;" class="text-nowrap"><?php echo e($customer->phone, false); ?></td>
                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($customer->created_at == null ? "" : ConvertSQLDate($customer->created_at), false); ?></td>
                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($customertype[$customer->customertype], false); ?></td>
                                    <td style="text-align: right;" class="text-nowrap"><?php echo e(formatNumber(0, 1, 0, 0), false); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    
                    <div class="box-footer clearfix text-right">
                        <?php echo e($listcustomertype->links(), false); ?>

                    </div>
            	</div>
            </div>
        </div>
	</div>
	<!-- <div class="col-md-5">
		<div class="box">                   
            <div class="box-body">
            	<div class="form-group">
            		<h3 style="margin-bottom: 20px;">Tổng tiền đầu tư</h3>
            		<div id="chart3"></div>
            	</div>
            </div>
        </div>
	</div> -->
</div>

</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('dashboard.partials.script_manage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>