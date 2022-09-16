<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <div class="col-md-8">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Chỉnh sửa người dùng</h3>
            </div>
            <form  method="post" action="<?php echo e(route('usercustomers-update', ['id' => $model->id ]), false); ?>" role="form" id="frm">
                <?php echo e(csrf_field(), false); ?>

                <?php echo e(method_field('put'), false); ?>

                <input type='hidden' name='typereport' value=''>
                <div class="box-body">
                    <div class="form-group">
                        <label>MÃ KHÁCH HÀNG <small class="text-danger text"> (*)</small></label>
                        <select class="form-control" name="customer_id" id="customer_id" onchange="processChanged(this)">
                            <option value=""></option>
                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->id == $model->customer_id): ?>
                                    <option value="<?php echo e($item->id . '-' . $item->fullname . '-' . $item->email, false); ?>" selected><?php echo e("[" . $item->customercode . "] " . $item->fullname . " - " . $item->email, false); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($item->id . '-' . $item->fullname . '-' . $item->email, false); ?>"><?php echo e("[" . $item->customercode . "] " . $item->fullname . " - " . $item->email, false); ?></option>                                                                    
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group <?php echo e(($errors->has('name')) ? ' has-error' : '', false); ?>">
                        <label>Tên người dùng <small class="text-danger text"> (*)</small></label>
                        <input type="text" class="form-control" name="name" id="name" tabindex="1" value="<?php echo e($model->name, false); ?>">
                        <?php if($errors->has('name')): ?><span class="help-block"><?php echo e($errors->first('name'), false); ?></span><?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Email đăng nhập <small class="text-danger text"> (*)</small></label>
                        <input type="text" class="form-control" name="email" id="email" tabindex="2" value="<?php echo e($model->email, false); ?>">
                        <?php if($errors->has('email')): ?><span class="help-block"><?php echo e($errors->first('email'), false); ?></span><?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Đặt lại mật khẩu</label>
                        <input type="password" class="form-control" name="password" tabindex="3" value="">
                    </div>
                    <div class="form-group">
                        <label>Quyền truy cập <small class="text-danger text"> (*)</small></label>
                        <select class="form-control" name="role">
                            <option value=""></option>
                            <?php $__currentLoopData = $applicationroles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->code == $model->role): ?>
                                    <option value="<?php echo e($item->code, false); ?>" selected><?php echo e($item->code . '. ' . $item->name, false); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($item->code, false); ?>"><?php echo e($item->code . '. ' . $item->name, false); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái tài khoản <small class="text-danger text"> (*)</small></label>
                        <select class="form-control select" name="blocked">
                            <?php $__currentLoopData = $accounttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($key == $model->blocked): ?>
                                    <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>                                                                    
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if($errors->has('blocked')): ?><span class="text-danger"><?php echo e($errors->first('blocked'), false); ?></span><?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Thời hạn từ ngày <small class="text-danger text"> (*)</small></label>
                            </div>
                            <div class="col-md-3">
                                <input type='text' class="form-control" name="begin_at" id='begin_at' value="<?php echo e(ConvertSQLDate($model->begin_at), false); ?>"/>
                                <?php if($errors->has('begin_at')): ?><span class="text-danger"><?php echo e($errors->first('begin_at'), false); ?></span><?php endif; ?>
                            </div>
                            <div class="col-md-2">
                                <label>đến ngày <small class="text-danger text"> (*)</small></label>
                            </div>
                            <div class="col-md-3">
                                <input type='text' class="form-control" name="finish_at" id='finish_at' value="<?php echo e(ConvertSQLDate($model->finish_at), false); ?>"/>
                                <?php if($errors->has('finish_at')): ?><span class="text-danger"><?php echo e($errors->first('finish_at'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Gói dịch vụ đang kích hoạt</label>
                            </div>
                            <div class="col-md-12">
                                <select class="form-control select" name="service_product_id">
                                    <?php $__currentLoopData = $serviceproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->id == old('service_product_id') or $item->id == $model->service_product_id): ?>
                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->name, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->name, false); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('service_product_id')): ?><span class="text-danger"><?php echo e($errors->first('service_product_id'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái gói dịch vụ </label>
                        <select class="form-control select" name="approved_product">
                            <?php $__currentLoopData = $accountproductstatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($key == $model->approved_product): ?>
                                    <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                <?php else: ?>
                                    <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>                                                                    
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if($errors->has('approved_product')): ?><span class="text-danger"><?php echo e($errors->first('approved_product'), false); ?></span><?php endif; ?>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Thời hạn gói dịch vụ từ ngày</label>
                            </div>
                            <div class="col-md-3">
                                <input type='text' class="form-control" name="begin_at_product" id='begin_at_product' value="<?php echo e(ConvertSQLDate($model->begin_at_product), false); ?>"/>
                                <?php if($errors->has('begin_at_product')): ?><span class="text-danger"><?php echo e($errors->first('begin_at_product'), false); ?></span><?php endif; ?>
                            </div>
                            <div class="col-md-2">
                                <label>đến ngày</label>
                            </div>
                            <div class="col-md-3">
                                <input type='text' class="form-control" name="finish_at_product" id='finish_at_product' value="<?php echo e(ConvertSQLDate($model->finish_at_product), false); ?>"/>
                                <?php if($errors->has('finish_at_product')): ?><span class="text-danger"><?php echo e($errors->first('finish_at_product'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <br><br>                    
                    <div class="form-group">
                        <font size='2' color='#000000'><b><u>Ghi chú:</u></font></b><br>
                        <font size='2' color='#000000'>&nbsp;- Nhấn nút <font color='#ff0000'><b>Lưu</b></font> hệ thống sẽ lưu thông tin chỉnh sửa tài khoản vào hệ thống.</font><br>
                        <font size='2' color='#000000'>&nbsp;- Nhấn nút <font color='#ff0000'><b>Lưu & Gửi mail</b></font> hệ thống sẽ lưu và gửi mail thông báo mật khẩu đăng nhập mới về địa chỉ email đăng nhập của khách hàng đã đăng ký.</font>
                    </div>
                                                            
                </div>
        </div>

        <button type="submit" style="width: 20%;" class="btn btn-primary btn-save" tabindex="9" onclick="processReports('frm', 'save')">Lưu</button>
        <button type="submit" style="width: 20%;" class="btn btn-primary btn-save" tabindex="10" onclick="processReports('frm', 'mail')">Lưu & Gửi mail</button>
        <a href="<?php echo e(route('usercustomers-index'), false); ?>" style="width: 20%;" class="btn btn-default btn-cancel" tabindex="11">Trở về</a>
        </form>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('user-employees.user.user_account_customer.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>