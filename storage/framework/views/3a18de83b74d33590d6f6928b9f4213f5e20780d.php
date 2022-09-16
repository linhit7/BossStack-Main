<?php $__env->startSection('content'); ?>
<?php if(isset($infor)): ?>
    <?php if($checkAmount == 1): ?>
        <div class="alert alert-danger">
            <?php echo e($infor, false); ?>

        </div>
    <?php else: ?>
        <div class="alert alert-success">
            <?php echo e($infor, false); ?>

        </div>
    <?php endif; ?>
<?php endif; ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('cashtranfers-store'), false); ?>?continue=true" method="post" id="frm">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">CHUYỂN TIỀN</h3>
                </div>
                <div class="box-header with-border">
                    <font style="font-size:10pt;color='#000'">Thông tin ví tiền, số dư dùng để quản lý dòng tiền cá nhân. Để xem lại thông tin chi tiết các ví tiền vui lòng xem <a href="<?php echo e(route('cashaccounts-index'), false); ?>" style="color: #FFA500;"><b>tại đây</b></a>.</font>
                </div>

                <?php echo e(csrf_field(), false); ?>

                <input type='hidden' name='typereport' value=''>
                <input type='hidden' name='customer_id' value='<?php echo e($customer_id, false); ?>'>
                <input type='hidden' name='accountno_primary' value='<?php echo e($accountno_primary, false); ?>'>                
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5">
                                <label>Ngày giao dịch <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7">
                                <input type='text' class="form-control" name="tranferdate" id='tranferdate' value="<?php echo e(old('tranferdate') == "" ? $tranferdate : old('tranferdate'), false); ?>"/>
                                <?php if($errors->has('tranferdate')): ?><span class="text-danger"><?php echo e($errors->first('tranferdate'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5">
                                <label>Ví tiền nguồn<small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7">
                                <select class="form-control select2" name="cashaccount_id_send" onChange="processSubmitOpenWindow('frm', 'view', '_top', '<?php echo e(route('cashtranfers-process'), false); ?>', '1')">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $listaccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->id == $cashaccount_id_send or $item->id == old('cashaccount_id_send')): ?>
                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->accountno . " - " . $item->accountname, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->accountno . " - " . $item->accountname, false); ?></option>                                                                    
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>                                    
                                <?php if($errors->has('cashaccount_id_send')): ?><span class="text-danger"><?php echo e($errors->first('cashaccount_id_send'), false); ?></span><?php endif; ?>
                            </div>                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5">
                                <label>Số dư khả dụng:</label>
                            </div>
                            <div class="col-md-4 col-xs-7" style="text-align: right;">
                                <input type='hidden' name='cashaccount_amount_send' value='<?php echo e($cashaccount_amount_send, false); ?>'>
                                <font style="font-size: 17px;font-weight:normal"><?php echo $cashaccount_amount_send === '' ? '' : formatNumberColor($cashaccount_amount_send, 1, 0, 1); ?></font>
                            </div>                            
                        </div>
                    </div>

                    <?php
                        $check = "";
                    ?>
                    <?php if($cashaccount_id_send != '' and $accountno_primary != $cashaccount_id_send): ?>
                    <?php
                        $amount = formatNumber($cashaccount_amount_send, 1, 0, 1);
                        $check = "readonly";
                    ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-7 col-xs-5">
                                <font style="font-size: 17px;font-weight:normal;color:#ff0000">Quý khách đang thực hiện chuyển tiền từ ví mục tiêu. Để có thể tiếp tục thực hiện chuyển tiền từ ví mục tiêu này, hệ thống sẽ tự động kết thúc kế hoạch ví mục tiêu quý khách đang chọn để thực hiện thao tác chuyển tiền này !</font>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5">
                                <label>Thông tin ví tiền hưởng<small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7">
                                <select class="form-control select2" name="cashaccount_id_receive">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $listaccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->id != $cashaccount_id_send): ?>
                                            <?php if( $item->id == $cashaccount_id_receive or $item->id == old('cashaccount_id_receive') ): ?>
                                                <?php if($item->requireamount == 0): ?>
                                                    <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->accountno . " - " . $item->accountname . " (Số dư: " . formatNumber($item->amount, 1, 0, 1) . ")", false); ?></option>                                                                    
                                                <?php else: ?>
                                                    <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->accountno . " - " . $item->accountname . " (Kế hoạch: " . formatNumber($item->requireamount, 1, 0, 0) . ", Số dư: " . formatNumber($item->amount, 1, 0, 1) . ")", false); ?></option>                                                                    
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if($item->requireamount == 0): ?>
                                                    <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->accountno . " - " . $item->accountname . " (Số dư: " . formatNumber($item->amount, 1, 0, 1) . ")", false); ?></option>                                                                    
                                                <?php else: ?>
                                                    <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->accountno . " - " . $item->accountname . " (Kế hoạch: " . formatNumber($item->requireamount, 1, 0, 0) . ", Số dư: " . formatNumber($item->amount, 1, 0, 1) . ")", false); ?></option>                                                                    
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>                                    
                                <?php if($errors->has('cashaccount_id_receive')): ?><span class="text-danger"><?php echo e($errors->first('cashaccount_id_receive'), false); ?></span><?php endif; ?>
                            </div>                            
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5">
                                <label>Số tiền <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7">
                                <input type="text" class="form-control" name="amount" <?php echo e($check, false); ?> value="<?php echo e(old('amount') == "" ? $amount : old('amount'), false); ?>" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                <?php if($errors->has('amount')): ?><span class="text-danger"><?php echo e($errors->first('amount'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5">
                                <label>Nội dung: </label>
                            </div>
                            <div class="col-md-4 col-xs-7">
                                <input type="text" class="form-control" name="description" value="<?php echo e(old('description') == "" ? $description : old('description'), false); ?>">
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
            
            <button class="btn btn-success btn-bg-blue" onclick="processSubmitOpenWindow('frm', 'add', '_top', '<?php echo e(route('cashtranfers-store'), false); ?>?continue=true', '1')">Chuyển tiền</button>
            <br><hr>
            <a href="<?php echo e(route('cashaccounts-index'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.cashtranfer.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>