<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('coupons-update', ['id' => $model->id]), false); ?>?continue=true" method="post" id="coupons-form">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo e(('Chỉnh sửa mã giảm giá'), false); ?></h3>
                </div>
                <?php echo e(csrf_field(), false); ?>

                <?php echo e(method_field('put'), false); ?>

                <div class="box-body">
                    <div class="form-group">
                        <label><?php echo e(('Loại'), false); ?></label>
                        <select class="form-control select" name="typecoupon">                        
                            <?php $__currentLoopData = $coupontypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if( $key == $model->typecoupon ): ?>
                                    <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>                        
                    </div>
                    <div class="form-group<?php echo e(($errors->has('key')) ? ' has-error' : '', false); ?>">
                        <label><?php echo e(('Mã giảm giá'), false); ?></label>
                        <input type="text" class="form-control" name="key"value="<?php echo e($model->key, false); ?>" tabindex="1">
                        <?php if($errors->has('key')): ?><span class="help-block"><?php echo e($errors->first('key'), false); ?></span><?php endif; ?>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label><?php echo e(('% giảm giá'), false); ?></label>
                        <input type="text" class="form-control" name="percent" value="<?php echo e($model->percent, false); ?>" tabindex="2" onkeyup='this.value=formatNumberDecimal(this.value)'>
                        <?php if($errors->has('percent')): ?><span class="text-danger"><?php echo e($errors->first('percent'), false); ?></span><?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(('Số lượng'), false); ?></label>
                        <input type="text" class="form-control" name="quantity" value="<?php echo e($model->quantity, false); ?>" tabindex="3" onkeyup='this.value=formatNumberDecimal(this.value)'>
                        <?php if($errors->has('quantity')): ?><span class="text-danger"><?php echo e($errors->first('quantity'), false); ?></span><?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(('Số lượng chưa sử dụng'), false); ?></label>
                        <input type="text" class="form-control" name="quantitied" value="<?php echo e($model->quantitied, false); ?>" tabindex="3" onkeyup='this.value=formatNumberDecimal(this.value)'>
                        <?php if($errors->has('quantitied')): ?><span class="text-danger"><?php echo e($errors->first('quantitied'), false); ?></span><?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(('Ghi chú'), false); ?></label>
                        <input type="text" class="form-control" name="description" value="<?php echo e($model->description, false); ?>" tabindex="4">
                        <?php if($errors->has('description')): ?><span class="text-danger"><?php echo e($errors->first('description'), false); ?></span><?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(('Tình trạng'), false); ?></label>
                        <select class="form-control select" name="status">                        
                            <?php $__currentLoopData = $couponstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if( $key == $model->status ): ?>
                                    <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>                        
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
                    <button type="submit" class="btn btn-primary btn-save" tabindex="9"><?php echo e(('Lưu'), false); ?></button>
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

        $('#chk-continue').on('ifChecked', function() {
            $('#coupons-form').attr('action', '<?php echo e(route('coupons-edit', ['id' => $model->id]), false); ?>?continue=true');
        });

        $('#chk-continue').on('ifUnchecked', function() {
            $('#coupons-form').attr('action', '<?php echo e(route('coupons-edit', ['id' => $model->id]), false); ?>');
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>