<div class="box box-search">
    <form action="<?php echo e(route('applicationresources-index')); ?>">
        <div class="box-header with-border">
            <h3 class="box-title">QUẢN LÝ TRANG TRUY CẬP</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-4">
                    <label>Route Prefix :</label>
                    <select id="searchprefix" class="form-control" name="searchprefix">
                        <option value=""></option>
                        <?php $__currentLoopData = $listprefix; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if( $value->prefix == $searchprefix ): ?>
                                <option value="<?php echo e($value->prefix); ?>" selected><?php echo e($value->prefix); ?></option>
                            <?php else: ?>
                                <option value="<?php echo e($value->prefix); ?>"><?php echo e($value->prefix); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                      
                    </select>
                </div>
                <div class="col-xs-3">
                    <label>File name :</label>
                    <input type="text" class="form-control" name="searchfilename" value="<?php echo e($searchfilename); ?>">
                </div>
                <div class="col-xs-3">
                    <label>&nbsp;</label><br>
                    <button class="btn btn-primary btn-search" style="width: 45%;">Tìm kiếm</button>
                </div>                
            </div>
            <!-- /.row -->
        </div>

    </form>
</div>