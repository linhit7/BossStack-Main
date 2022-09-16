<form role="form" action="<?php echo e(route('customers-register'), false); ?>" method="post" id="frm">
<?php echo e(csrf_field(), false); ?>

<input type='hidden' name='typereport' value=''>
<div class="row">
    <div class="col-md-3 col-12">
        <div class="card card-price-list">
            <div class="card-header">
                <p class="name" style="color: #10aa25;"><b>Mở Tài khoản</b></p>
                <p class="percent"><span style="font-size: 35px;">Miễn Phí</span></p>
            </div>
            <div class="card-body">
                <ul>
                    <li>Bảo mật an toàn</li>
                    <li>Quản lý ví tài chính từ<br>1.000 đồng</li>
                    <li>Tính số tiền nghỉ hưu</li>
                    <li>Cập nhật thu chi ví tổng</li>
                    <li>Theo dõi danh mục tài sản</li>
                    <li>Dịch vụ hỗ trợ 24/7</li>
                </ul>
            </div>
            <div class="card-footer">
                <a onclick="processReports('frm', '4')" class="btn btn-primary btn-buy" style="background-color: #10aa25; transform: translate(0, 87%);">Mở tài khoản</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-12">
        <div class="card card-price-list">
            <div class="card-header">
                <p class="name"><b>Gói Cá nhân</b></p>
                <p class="percent"><span>99.000</span><br>đồng/tháng</p>
            </div>
            <div class="card-body">
                <ul>
                    <li>Dùng Gói Mở tài khoản Miễn phí ++</li>
                    <li>Thiết lập ví tài chính</li>
                    <li>Thiết lập ví đầu tư</li>
                    <li>Quản lý và phát triển Dòng tiền cá nhân</li>
                    <li>Giảm 50% khi đăng ký mua gói 12 tháng</li>
                </ul>
            </div>
            <div class="card-footer">
                <select class="form-control select2" name="producttypes_1">
                    <option value="0">Chọn gói thời gian</option>
                    <?php $__currentLoopData = $producttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key > 0): ?>
                            <?php if($key == old('producttypes_1')): ?>
                                <option value="<?php echo e($key, false); ?>" selected><?php echo e($value['month'], false); ?> tháng (giảm <?php echo e($value['discount'], false); ?>%)</option>
                            <?php else: ?>
                                <option value="<?php echo e($key, false); ?>"><?php echo e($value['month'], false); ?> tháng (giảm <?php echo e($value['discount'], false); ?>%)</option>      
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <a onclick="processReports('frm', '1')" class="btn btn-primary btn-buy">Mua ngay</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-12">
        <div class="card card-price-list">
            <div class="card-header">
                <p class="name"><b>Gói Doanh nghiệp</b></p>
                <p class="percent"><span>99.000</span><br>đồng/tháng/user</p>
                <!-- <p class="discount">
                    <span><small>715.000</small></span>
                    <span><small style="padding-left: 10px;"><font color="red"><b>-30%</b></font></small></span>
                </p> -->
            </div>
            <div class="card-body">
                <ul>
                    <li>Dùng Gói Mở tài khoản Miễn phí ++</li>
                    <li>Sử dụng các tính năng Gói Cá nhân ++</li>
                    <li>Thực hiện coaching doanh nghiệp (4 giờ)</li>
                    <li>Tặng 3 user VIP cho Doanh nghiệp đăng ký từ 100+ user</li>
                    <li>Giảm 50% khi đăng ký mua gói 12 tháng</li>
                </ul>
            </div>
            <div class="card-footer">
                <select class="form-control select2" name="producttypes_2">
                    <option value="0">Chọn gói thời gian</option>
                    <?php $__currentLoopData = $producttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key > 0): ?>
                            <?php if($key == old('producttypes_2')): ?>
                                <option value="<?php echo e($key, false); ?>" selected><?php echo e($value['month'], false); ?> tháng (giảm <?php echo e($value['discount'], false); ?>%)</option>
                            <?php else: ?>
                                <option value="<?php echo e($key, false); ?>"><?php echo e($value['month'], false); ?> tháng (giảm <?php echo e($value['discount'], false); ?>%)</option>      
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <a onclick="processReports('frm', '2')" class="btn btn-primary btn-buy">Mua ngay</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-12">
        <div class="card card-price-list">
            <div class="card-header">
                <p class="name"><b>Gói VIP</b></p>
                <p class="percent"><span>999.000</span><br>đồng/tháng</p>
                <!-- <p class="discount">
                    <span><small>8.580.000</small></span>
                    <span><small style="padding-left: 10px;"><font color="red"><b>-43%</b></font></small></span>
                </p> -->
            </div>
            <div class="card-body">
                <ul>
                    <li>Dùng Gói Mở tài khoản Miễn phí ++</li>
                    <li>Sử dụng các tính năng Gói Cá nhân ++</li>
                    <li>Cập nhật Kiến thức Đầu tư</li>
                    <li>Nhận định chứng khoán dài hạn</li>
                    <li>Giảm 50% khi đăng ký mua gói 12 tháng</li>
                </ul>
            </div>
            <div class="card-footer">
                <select class="form-control select2" name="producttypes_3">
                    <option value="0">Chọn gói thời gian</option>
                    <?php $__currentLoopData = $producttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($key > 0): ?>
                            <?php if($key == old('producttypes_3')): ?>
                                <option value="<?php echo e($key, false); ?>" selected><?php echo e($value['month'], false); ?> tháng (giảm <?php echo e($value['discount'], false); ?>%)</option>
                            <?php else: ?>
                                <option value="<?php echo e($key, false); ?>"><?php echo e($value['month'], false); ?> tháng (giảm <?php echo e($value['discount'], false); ?>%)</option>      
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <a onclick="processReports('frm', '3')" class="btn btn-primary btn-buy">Mua ngay</a>
            </div>
        </div>
    </div>
</div>
</form>