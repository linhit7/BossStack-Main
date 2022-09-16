<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('coupons-store'), false); ?>?continue=true" method="post" id="customer-form">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo e(('Tạo mới mã giảm giá'), false); ?></h3>
                </div>
                <?php echo e(csrf_field(), false); ?>

                <div class="box-body">
                    <div class="form-group">
                        <label><?php echo e(('Loại'), false); ?></label>
                        <select class="form-control select" name="typecoupon">                        
                            <?php $__currentLoopData = $coupontypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if( $key == old('typecoupon') ): ?>
                                    <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>                        
                    </div>
                    <div class="form-group<?php echo e(($errors->has('key')) ? ' has-error' : '', false); ?>">
                        <label><?php echo e(('Mã giảm giá'), false); ?></label>
                        <input type="text" class="form-control" placeholder="<?php echo e(('Mã giảm giá'), false); ?>" name="key">
                        <?php if($errors->has('key')): ?><span class="help-block"><?php echo e($errors->first('key'), false); ?></span><?php endif; ?>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label><?php echo e(('% giảm giá'), false); ?></label>
                        <input type="text" class="form-control" placeholder="<?php echo e(('% giảm giá'), false); ?>" name="percent" onkeyup='this.value=formatNumberDecimal(this.value)'>
                        <?php if($errors->has('percent')): ?><span class="text-danger"><?php echo e($errors->first('percent'), false); ?></span><?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(('Số lượng'), false); ?></label>
                        <input type="text" class="form-control" placeholder="<?php echo e(('Số lượng'), false); ?>" name="quantity" onkeyup='this.value=formatNumberDecimal(this.value)'>
                        <?php if($errors->has('quantity')): ?><span class="text-danger"><?php echo e($errors->first('quantity'), false); ?></span><?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label><?php echo e(('Ghi chú'), false); ?></label>
                        <input type="text" class="form-control" placeholder="<?php echo e(('Ghi chú'), false); ?>" name="description">
                        <?php if($errors->has('description')): ?><span class="text-danger"><?php echo e($errors->first('description'), false); ?></span><?php endif; ?>
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

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>