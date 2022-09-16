<?php $__env->startSection('head'); ?>

<style type="text/css">
    .box-body .form-group .row{
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .box-body .form-group .row .item:nth-child(2n-1){
        align-self: center;
        margin-bottom: 10px;
    }

    @media  only screen and (max-width: 768px){
        .box-body .form-group{
            margin-bottom: 0;
        }

        .box-body .form-group .row .item:nth-child(2n+2){
            margin-bottom: 15px;
        }

        .box-body .form-group .row .item label{
            margin-bottom: 0;
        }

        .box-body .form-group:last-child .row .item label{
            margin-bottom: 5px;
        }
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(isset($infor)): ?>
    <?php if(isset($checkError) and $checkError == 1): ?>
        <?php echo $__env->make('layouts.partials.messages.warning', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('layouts.partials.messages.infor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>    
    <?php endif; ?>
<?php endif; ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('cashincomes-update', ['id' => $model->id]), false); ?>?continue=true" method="post" id="frm" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">CHỈNH SỬA THÔNG TIN <?php echo e(mb_strtoupper($incomestatustypes[$model->incomestatustype]), false); ?></h3>
                </div>
                <div class="box-header with-border">
                    <font style="font-size:10pt;color='#000'">Thông tin các khoản thu nhập/chi phí và các khoản nợ cá nhân. Để xem lại thông tin chi tiết các khoản vui lòng xem <a href="<?php echo e(route('cashincomes-index'), false); ?>" style="color: #FFA500;"><b>tại đây</b></a>.</font>
                </div>
                <?php echo e(csrf_field(), false); ?>

                <?php echo e(method_field('put'), false); ?>

                <input type='hidden' name='typereport' value=''>
                <input type='hidden' name='incomestatustype' value='<?php echo e($incomestatustype, false); ?>'>
                <input type='hidden' name='cashaccount_id' value='<?php echo e($cashaccount_id, false); ?>'>
                <input type='hidden' name='cashaccount_amount' value='<?php echo e($cashaccount_amount, false); ?>'>                
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Ngày giao dịch<small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4">
                                <input type='text' class="form-control" name="incomedate" id='incomedate' value="<?php echo e(ConvertSQLDate($model->incomedate), false); ?>"/>
                                <?php if($errors->has('incomedate')): ?><span class="text-danger"><?php echo e($errors->first('incomedate'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Ví tiền:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item" style="text-align: left;">
                                <?php echo e($cashaccount_name . " [ " . $cashaccountno . " ]", false); ?>

                            </div>                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Số dư khả dụng:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item" style="text-align: right;">
                                <font style="font-size: 17px;font-weight:normal"><?php echo formatNumberColor($cashaccount_amount, 1, 0, 1); ?></font>
                            </div>                            
                        </div>
                    </div>
                    <hr>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-4 item">
                                <label>Loại <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-5 item">
                                <select class="form-control select2" name="incometype" onChange="processSubmitOpenWindow('frm', 'edit', '_top', '<?php echo e(route('cashincomes-update', ['id' => $model->id]), false); ?>', '1')">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $incometypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->id == $incometype): ?>
                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->name, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->name, false); ?></option>                                                                    
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>                                    
                                <?php if($errors->has('incometype')): ?><span class="text-danger"><?php echo e($errors->first('incometype'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-4 item">
                                <label>Chi tiết :</label>
                            </div>
                            <div class="col-md-4 col-xs-8 item">
                                <select class="form-control select2" name="incometypedetail" onChange="processSubmitOpenWindow('frm', 'edit', '_top', '<?php echo e(route('cashincomes-update', ['id' => $model->id]), false); ?>', '1')">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $incometypedetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->id == $incometypedetail): ?>
                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->name, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->name, false); ?></option>                                                                    
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>                                    
                                <?php if($errors->has('incometypedetail')): ?><span class="text-danger"><?php echo e($errors->first('incometypedetail'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <?php if($incometypedetaillevels->count() > 0): ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-4 item">
                                <label>Phân loại :</label>
                            </div>
                            <div class="col-md-4 col-xs-8 item">
                                <select class="form-control select2" name="incometypedetaillevel">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $incometypedetaillevels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->id == $incometypedetaillevel): ?>
                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->name, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->name, false); ?></option>                                                                    
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>                                    
                                <?php if($errors->has('incometypedetaillevel')): ?><span class="text-danger"><?php echo e($errors->first('incometypedetaillevel'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Nội dung :</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <select class="form-control select2" name="cashassetid">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $cashassets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->id == $model->cashasset_id): ?>
                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->assetname, false); ?> - Số tiền còn phải thanh toán: <?php echo e(formatNumber($item->remainamount, 1, 0, 1), false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->assetname, false); ?> - Số tiền còn phải thanh toán: <?php echo e(formatNumber($item->remainamount, 1, 0, 1), false); ?></option>                                                                    
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>                                    
                                <?php if($errors->has('cashassetid')): ?><span class="text-danger"><?php echo e($errors->first('cashassetid'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Số tiền <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="amount" value="<?php echo e(formatNumber($model->amount, 1, 0, 0), false); ?>" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                <?php if($errors->has('amount')): ?><span class="text-danger"><?php echo e($errors->first('amount'), false); ?></span><?php endif; ?>
                            </div>                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Ghi chú: </label>
                            </div>
                            <div class="col-md-4">
                                <textarea class="form-control" name="description" rows="2"><?php echo e($model->description, false); ?></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-12 item">
                                <label>Hóa đơn, chứng từ kèm theo :</label>
                            </div>
                            <div class="col-md-7 col-xs-12 item">
                                <input type="hidden" name="document" value="<?php echo e($model->document, false); ?>">
                                <div class="box-body">
                                    <input type="file" name="fImages" style="width: 100%">
                                    <p class="text-danger" style="margin-top: 10px;"><u>Lưu ý:</u> gửi kèm các hóa đơn, chứng từ ... kèm theo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <button class="btn btn-success" style="width: 15%;" onclick="processReports('frm', 'update')">Lưu</button>
            <br><hr>
            <a href="<?php echo e(route('cashincomes-index'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   
            
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.cashincome.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>