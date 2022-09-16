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
    }

    @media  only screen and (max-width: 768px){
        .box-body .form-group .row .item label{
            margin-bottom: 0;
        }
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('cashplans-update', ['id' => $model->id]), false); ?>?continue=true" method="post" id="frm" name="frm" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">THÔNG TIN MỤC TIÊU</h3><br><br>
                    <h4 class="box-title"><font color='#000080'>Chỉnh sửa</font></h4>
                </div>
                <?php echo e(csrf_field(), false); ?>

                <?php echo e(method_field('put'), false); ?>

                <input type='hidden' name='typereport' value=''>
                <input type='hidden' name='customer_id' value='<?php echo e($model->customer_id, false); ?>'>                
                <input type="hidden" name="currentamountunittype" id="currentamountunittype" value="1">
                <input type="hidden" name="requireamountunittype" id="requireamountunittype" value="1">

                <div class="box-body">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-xs-5 item">
                                <label>MỤC TIÊU <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <select class="form-control select2" name="plantype" id="plantype">
                                    <?php $__currentLoopData = $plantypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key == $model->plantype): ?>
                                            <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                        <?php else: ?>
                                            <?php if(Auth()->user()->service_product_id == 3): ?>
                                                <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>
                                            <?php else: ?>
                                                <?php if($key == 9 or $key == 13): ?>
                                                    
                                                <?php else: ?>
                                                    <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>                                                    
                                                <?php endif; ?>
                                            <?php endif; ?>                                                                  
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>                                
                            </div>  
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-xs-5 item">
                                <label>Tên ví mục tiêu <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <input type="text" class="form-control" name="planname" value="<?php echo e($model->planname, false); ?>" disabled>
                                <?php if($errors->has('planname')): ?><span class="text-danger"><?php echo e($errors->first('planname'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-xs-5 item">
                                <label>Chi tiết <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <input type="text" class="form-control" name="description" value="<?php echo e($model->description, false); ?>">
                                <?php if($errors->has('description')): ?><span class="text-danger"><?php echo e($errors->first('description'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-xs-5 item">
                                <label>Ngày lập<small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <input type='text' class="form-control" name="plandate" id='plandate' value="<?php echo e($model->plandate == "" ? "" : ConvertSQLDate($model->plandate), false); ?>"/>
                                <?php if($errors->has('plandate')): ?><span class="text-danger"><?php echo e($errors->first('plandate'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-xs-5 item">
                                <label>Tuổi hiện tại <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <input type="text" class="form-control" name="currentage" id="currentage" value="<?php echo e($model->currentage, false); ?>" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                <?php if($errors->has('currentage')): ?><span class="text-danger"><?php echo e($errors->first('currentage'), false); ?></span><?php endif; ?>
                            </div>                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-xs-5 item">
                                <label>Tuổi hoàn thành mục tiêu <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <input type="text" class="form-control" value="<?php echo e($model->planage == "" ? 50 : $model->planage, false); ?>" name="planage" id="planage"  onkeyup='this.value=formatNumberDecimal(this.value)'>
                                <?php if($errors->has('planage')): ?><span class="text-danger"><?php echo e($errors->first('planage'), false); ?></span><?php endif; ?>
                            </div>                            
                        </div>
                    </div>

                    <div class="form-group" style="display: none;">
                        <div class="row">
                            <div class="col-md-4 col-xs-5 item">
                                <label>Liên kết ví tiền <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <select class="form-control select2" name="accountno" id="accountno">                        
                                    <option value="0_0"></option>
                                    <?php $__currentLoopData = $listaccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $item->id == $model->accountno ): ?>
                                            <option value="<?php echo e($item->id . '_' . $item->amount, false); ?>" selected><?php echo e('Tài khoản '. $item->accountno . ' - Số dư: ' . formatNumber($item->amount, 1, 0, 0), false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id . '_' . $item->amount, false); ?>"><?php echo e('Tài khoản '. $item->accountno . ' - Số dư:  ' . formatNumber($item->amount, 1, 0, 0), false); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="display: none;">
                        <div class="row">
                            <div class="col-md-4 col-xs-5 item">
                                <label>Vốn đầu tư hiện tại <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <input type="text" class="form-control" value="<?php echo e($model->currentamount == "" ? 0 : formatNumber($model->currentamount, 1, 0, 0), false); ?>" name="currentamount" id="currentamount"  onkeyup='this.value=formatNumberDecimal(this.value)'>
                                <?php if($errors->has('currentamount')): ?><span class="text-danger"><?php echo e($errors->first('currentamount'), false); ?></span><?php endif; ?>
                            </div>                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-xs-5 item">
                                <label>Số tiền mục tiêu <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <input type="text" class="form-control" value="<?php echo e($model->requireamount == "" ? 0 : formatNumber($model->requireamount, 1, 0, 0), false); ?>" name="requireamount" id="requireamount"  onkeyup='this.value=formatNumberDecimal(this.value)'>
                                <?php if($errors->has('requireamount')): ?><span class="text-danger"><?php echo e($errors->first('requireamount'), false); ?></span><?php endif; ?>
                            </div>                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-xs-5 item">
                               <label>Ngày dự kiến hoàn thành :</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <input type='text' class="form-control" name="finishdate" id='finishdate' value="<?php echo e($model->finishdate == "" ? "" : ConvertSQLDate($model->finishdate), false); ?>"/>
                                <?php if($errors->has('finishdate')): ?><span class="text-danger"><?php echo e($errors->first('finishdate'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="display: none;">
                        <div class="row">
                            <div class="col-md-4 col-xs-5 item">
                                <label>Số tiền tích lũy hiện tại:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item" style="text-align: right; align-self: center;">
                                <font size="3" color='red'><b><span id="totalcurrentamountlabel"></span> VNĐ</b></font>
                                <input type='hidden' name='totalcurrentamount' id='totalcurrentamount' value='<?php echo e($model->totalcurrentamount, false); ?>'>                
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="display: none;">
                        <div class="row">
                            <div class="col-md-6" style="text-align: left;">
                                <font size="3" color='red'><b><span id="checkamountlabel"></span></b></font>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4 col-xs-12 item">
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

            <button class="btn btn-success btn-bg-blue" onclick="processReports('frm', 'update')">Chỉnh sửa</button>
            <br><hr>
            <a href="<?php echo e(route('cashplans-index'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   
            
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.cashplan.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>