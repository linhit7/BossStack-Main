<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('coupons-sendMail', ['id' => $model->id]), false); ?>?continue=true" method="post" id="coupons-form">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo e(('Gửi mail khách hàng mã khuyến mãi'), false); ?></h3>
                </div>
                <?php echo e(csrf_field(), false); ?>

                <?php echo e(method_field('put'), false); ?>

                <input type="hidden" name="quantitied" value="<?php echo e($model->quantitied, false); ?>">
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Loại:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <?php $__currentLoopData = $coupontypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if( $key == $model->typecoupon ): ?>
                                        <?php echo e($value, false); ?>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group<?php echo e(($errors->has('key')) ? ' has-error' : '', false); ?>">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Mã giảm giá:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <?php echo e($model->key, false); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>% giảm giá:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <?php echo e($model->percent, false); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Số lượng:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <?php echo e($model->quantity, false); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Số lượng chưa sử dụng:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <?php echo e($model->quantitied, false); ?>

                            </div>
                        </div>
                    </div>                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Ghi chú:</label>
                            </div>
                            <div class="col-md-4 col-xs-7 item">
                                <?php echo e($model->description, false); ?>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-5 item">
                                <label>Email nhận:</label>
                            </div>
                            <div class="col-md-8 col-xs-7 item">
                                <input type="text" class="form-control" name="email" value="" tabindex="1">
                                <?php if($errors->has('email')): ?><span class="text-danger"><?php echo e($errors->first('email'), false); ?></span><?php endif; ?>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo e(('Chức năng'), false); ?></h3>
                </div>
                <div class="box-body">
                    <button type="submit" class="btn btn-primary btn-save" tabindex="9"><?php echo e(('Gửi mail'), false); ?></button>
                    <a href="<?php echo e(route('coupons-index'), false); ?>" class="btn btn-default btn-cancel" tabindex="10"><?php echo e(('Trở về'), false); ?></a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $(function() {
        $('.btn-save').click(function() {
            $('#coupons-form').submit();
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>