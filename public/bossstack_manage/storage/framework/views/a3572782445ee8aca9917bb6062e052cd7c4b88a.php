<div class="box box-primary">
    <form action="<?php echo e(route('customers-index'), false); ?>">
        <div class="box-header with-border">
            <h3 class="box-title">QUẢN LÝ KHÁCH HÀNG</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Tìm kiếm nhanh:</label>
                                <?php
                                   $fieldnames = array('fullname'=>_('Họ tên khách hàng'), 
                                                   'customercode'=>_('Mã khách hàng'),
                                                   'phone'=>_('Số điện thoại'),
                                                   'email'=>_('Email')); 
                                ?>  
                                <select class="form-control select2" name="searchField">                        
                                    <option value=""></option>
                                    <?php $__currentLoopData = $fieldnames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $key == $searchField ): ?>
                                            <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Từ khóa:</label>
                                <input type="text" class="form-control" name="searchValue" value="<?php echo e($searchValue, false); ?>">
                            </div>
                            <div class="col-md-2">
                                <label>Tình trạng khách hàng:</label>
                                <select class="form-control select2" name="searchCustomerStatusType">                        
                                    <option value=""></option>
                                    <?php $__currentLoopData = $customerstatustype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $key == $searchCustomerStatusType ): ?>
                                            <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>&nbsp;</label><br>
                                <button class="btn btn-primary btn-search" style="width: 45%;">Tìm kiếm</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>