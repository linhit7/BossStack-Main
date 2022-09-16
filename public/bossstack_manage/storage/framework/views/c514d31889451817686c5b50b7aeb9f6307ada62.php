<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(isset($infor) and $error == 1): ?>
<div class="alert <?php echo e($alert, false); ?>">
    <?php echo e($infor, false); ?>

</div>
<?php endif; ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<div class="row">
    <form role="form" action="<?php echo e(route('retireplans-process'), false); ?>?continue=true" method="post" id="frm">
        <div class="col-md-12">
            <div class="box box-customer box-retireplan">
                <?php echo e(csrf_field(), false); ?>

                <input type='hidden' name='typereport' value=''>
                                
                <div class="box-body">

                    <div class="insertData">
                        <h3><b><font color="#2d3194">Mục nhập số liệu tính toán</font></b></h3>

                        <div class="info">Nhập thông tin để tính số tiền nghỉ hưu tương lai của bạn.</div>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Tuổi hiện tại của bạn <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <input type="text" class="form-control" name="currentage" id="currentage" value="<?php echo e(($currentage == null ? old('currentage') : formatNumber($currentage, 1, 0, 0)), false); ?>" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                    <span class="properties">tuổi</span>
                                    <?php if($errors->has('currentage')): ?><span class="text-danger"><?php echo e($errors->first('currentage'), false); ?></span><?php endif; ?>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Tuổi nghỉ hưu dự kiến <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <input type="text" class="form-control" name="retirementage" id="retirementage" value="<?php echo e(($retirementage == null ? old('retirementage') : formatNumber($retirementage, 1, 0, 0)), false); ?>" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                    <span class="properties">tuổi</span>
                                    <?php if($errors->has('retirementage')): ?><span class="text-danger"><?php echo e($errors->first('retirementage'), false); ?></span><?php endif; ?>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Tuổi thọ dự kiến <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <input type="text" class="form-control" name="longevity" id="longevity" value="<?php echo e(($longevity == null ? old('longevity') : formatNumber($longevity, 1, 0, 0)), false); ?>" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                    <span class="properties">tuổi</span>
                                    <?php if($errors->has('longevity')): ?><span class="text-danger"><?php echo e($errors->first('longevity'), false); ?></span><?php endif; ?>
                                </div>  
                            </div>
                        </div>
                                            
                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Thu nhập hiện tại (tháng) <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <input type="text" class="form-control" name="currentincome" id="currentincome" value="<?php echo e(($currentincome == null ? old('currentincome') : formatNumber($currentincome, 1, 0, 0)), false); ?>" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                    <span class="properties">đồng</span>
                                    <?php if($errors->has('currentincome')): ?><span class="text-danger"><?php echo e($errors->first('currentincome'), false); ?></span><?php endif; ?>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Chi phí hiện tại (tháng) <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <input type="text" class="form-control" name="currentcost" id="currentcost" value="<?php echo e(($currentcost == null ? old('currentcost') : formatNumber($currentcost, 1, 0, 0)), false); ?>" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                    <span class="properties">đồng</span>
                                    <?php if($errors->has('currentcost')): ?><span class="text-danger"><?php echo e($errors->first('currentcost'), false); ?></span><?php endif; ?>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Tiền đóng góp hưu trí (tháng) <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <input type="text" class="form-control" name="retirementsavings" id="retirementsavings" value="<?php echo e(($retirementsavings == null ? old('retirementsavings') : formatNumber($retirementsavings, 1, 0, 0)), false); ?>" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                    <span class="properties">đồng</span>
                                    <?php if($errors->has('retirementsavings')): ?><span class="text-danger"><?php echo e($errors->first('retirementsavings'), false); ?></span><?php endif; ?>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group" style="display: none;">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Tiền cho các mục tiêu tài chính khác (tháng):</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <span class="result" id="otherplanlabel">
                                    <?php if($otherplan > 0): ?>
                                        <?php echo formatNumberColorCustom($otherplan, 1, 0, 1, 2); ?>

                                    <?php else: ?>
                                        <?php echo formatNumberColorCustom($otherplan, 1, 0, 1, 3); ?>

                                    <?php endif; ?> 
                                    </span>
                                    <span class="properties">đồng</span>
                                    <input type='hidden' name='otherplan' id='otherplan' value='<?php echo e($otherplan, false); ?>'>
                                </div>  
                            </div>
                        </div>
                            
                        <button class="btn btn-success" style="background-color: #ff7f0e; border: 1px solid #ff7f0e;" onclick="processReports('frm', 'process')">Phân tích</button>
                    </div>

                    <hr>

                    <div class="exportData">
                        <h3><b><font color="#2d3194">Mục xuất số liệu tính toán</font></b></h3>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Số năm còn làm việc:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <span class="result"><?php echo e($workage_d, false); ?></span>
                                    <span class="properties">năm</span>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Số năm nghỉ hưu:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <span class="result"><?php echo e($retirementyear_e, false); ?></span>
                                    <span class="properties">năm</span>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Tổng số tiền đóng góp dự kiến cho kỳ hưu trí:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <span class="result"><?php echo formatNumberColorCustom($retirementamount_j, 1, 0, 1, 2); ?></span>
                                    <span class="properties">đồng</span>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Tiền chi phí dự kiến để sống khi nghỉ hưu (tháng):</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <span class="result"><?php echo formatNumberColorCustom($expenseretirementamount_k, 1, 0, 1, 2); ?></span>
                                    <span class="properties">đồng</span>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Tổng số tiền sinh hoạt phí dự kiến chúng ta cần cho kỳ nghỉ hưu sẽ là:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <span class="result"><?php echo formatNumberColorCustom($totalexpenseretirementamount_l, 1, 0, 1, 2); ?></span>
                                    <span class="properties">đồng</span>
                                </div>  
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-4 col-xs-5" style="align-self: center;">
                                    <label>Số tiền thiếu hụt khi nghỉ hưu:</label>
                                </div>
                                <div class="col-lg-4 col-md-6 col-xs-7" style="align-self: center;">
                                    <span class="result">
                                    <?php if($totalamount_m <= 0): ?>
                                        <?php echo formatNumberColorCustom($totalamount_m, 1, 0, 1, 3); ?>

                                    <?php else: ?>
                                        <?php echo formatNumberColorCustom($totalamount_m, 1, 0, 0, 2); ?>

                                    <?php endif; ?> 
                                    </span>
                                    <span class="properties">đồng</span>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <?php if(isset($infor) and $error == 2): ?>
                    <div class="alert <?php echo e($alert, false); ?>" role="alert"><b><?php echo e($infor, false); ?></b></div>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.retireplan.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>