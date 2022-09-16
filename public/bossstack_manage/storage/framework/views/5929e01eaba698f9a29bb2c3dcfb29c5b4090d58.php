<div class="box box-default">
    <form action="<?php echo e(route('usercustomers-index')); ?>" method="GET">
    <?php echo e(csrf_field()); ?>

        <div class="box-header with-border">
            <h3 class="box-title">Tìm kiếm</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-8">
                    <label>Từ khóa:</label>
                    <input type="text" class="form-control" name="searchValue" value="<?php echo e($searchValue); ?>">
                </div>
                <div class="col-md-4">
                    <label>Tìm kiếm nhanh:</label>
                    <?php
                       $fieldnames = array('name'=>_('Họ tên'), 
                                       'email'=>_('Email')); 
                    ?> 
                    <select class="form-control select" name="searchField">                        
                        <?php $__currentLoopData = $fieldnames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if( $key == $searchField ): ?>
                                <option value="<?php echo e($key); ?>" selected><?php echo e($value); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-right">
            <button class="btn btn-primary btn-search">Tìm kiếm</button>
            <a href="<?php echo e(route('users-index')); ?>" class="btn btn-default">Xóa form</a>
        </div>
    </form>
</div>