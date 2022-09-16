<?php $__env->startSection('head'); ?>

<style type="text/css">
    .content-wrapper .content-header > h1 {
        font-size: 21px;
    }
    
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
<div class="alert alert-success">
    <?php echo e($infor, false); ?>

</div>
<?php endif; ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('cashassets-store'), false); ?>?continue=true" method="post" id="frm" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">THÊM MỚI <?php echo e(mb_strtoupper($assetstatustypes[$assetstatustype]), false); ?></h3>
                </div>
                <div class="box-header with-border">
                    <font style="font-size:10pt;color='#000'">Nhập thông tin chi tiết các tài sản - nợ của khách hàng. Để xem lại thông tin chi tiết các tài sản - nợ vui lòng xem <a href="<?php echo e(route('cashassets-index'), false); ?>">tại đây</a>.</font>
                </div>

                <?php echo e(csrf_field(), false); ?>

                <input type='hidden' name='typereport' value=''>
                <input type='hidden' name='customer_id' value='<?php echo e($customer_id, false); ?>'>                
                <input type='hidden' name='assetstatustype' value='<?php echo e($assetstatustype, false); ?>'>                
                <input type='hidden' name='cashaccount_id' value='<?php echo e($cashaccount_id, false); ?>'>
                <input type='hidden' name='cashaccount_amount' value='<?php echo e($cashaccount_amount, false); ?>'>                
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-4 item">
                                <label>Ngày <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-2 col-xs-8 item">
                                <input type='text' class="form-control" name="assetdate" id='assetdate' value="<?php echo e(old('assetdate') == "" ? $assetdate : old('assetdate'), false); ?>"/>
                                <?php if($errors->has('assetdate')): ?><span class="text-danger"><?php echo e($errors->first('assetdate'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-4 item">
                                <label>Tài sản <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-8 item">
                                <input type='text' class="form-control" name="assetname" id='assetname' value="<?php echo e(old('assetname') == "" ? $assetname : old('assetname'), false); ?>"/>
                                <?php if($errors->has('assetname')): ?><span class="text-danger"><?php echo e($errors->first('assetname'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-4 item">
                                <label>Loại <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-8 item">
                                <select class="form-control select2" name="assettype" onChange="processSubmitOpenWindow('frm', 'view', '_top', '<?php echo e(route('cashassets-process', ['assetstatustype' => $assetstatustype]), false); ?>', '1')">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $assettypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->id == $assettype or $item->id == old('assettype')): ?>
                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->name, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->name, false); ?></option>                                                                    
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>                                    
                                <?php if($errors->has('assettype')): ?><span class="text-danger"><?php echo e($errors->first('assettype'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-4 item">
                                <label>Chi tiết :</label>
                            </div>
                            <div class="col-md-4 col-xs-8 item">
                                <select class="form-control select2" name="assettypedetail">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $assettypedetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->id == $assettypedetail or $item->id == old('assettypedetail')): ?>
                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->name, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->name, false); ?></option>                                                                    
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>                                    
                                <?php if($errors->has('assettypedetail')): ?><span class="text-danger"><?php echo e($errors->first('assettypedetail'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-4 item">
                                <label>Số tiền <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-2 col-xs-8 item">
                                <input type="text" class="form-control" name="amount" value="<?php echo e(old('amount') == "" ? $amount : old('amount'), false); ?>" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                <?php if($errors->has('amount')): ?><span class="text-danger"><?php echo e($errors->first('amount'), false); ?></span><?php endif; ?>
                            </div>                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-12 item">
                                <label>Ghi chú: </label>
                            </div>
                            <div class="col-md-5 col-xs-12 item">
                                <textarea class="form-control" name="description" rows="2"><?php echo e(old('description'), false); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2 col-xs-12 item">
                                <label>Hóa đơn, chứng từ kèm theo :</label>
                            </div>
                            <div class="col-md-7 col-xs-12 item">
                                <div class="box-body">
                                    <input type="file" name="fImages" style="width: 100%">
                                    <p class="text-danger" style="margin-top: 10px;"><u>Lưu ý:</u> gửi kèm các hóa đơn, chứng từ ... kèm theo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
            
            <button class="btn btn-success btn-bg-blue" style="width: 15%;" onclick="processSubmitOpenWindow('frm', 'add', '_top', '<?php echo e(route('cashassets-store'), false); ?>?continue=true', '1')">Lưu</button>
            <br><hr>
            <a href="<?php echo e(route('cashassets-index'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.cashasset.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>