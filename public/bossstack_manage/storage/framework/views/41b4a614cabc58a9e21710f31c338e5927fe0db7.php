<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('contracts-processPaymentMomo'), false); ?>?continue=true" method="post" id="frm">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-home" aria-hidden="true"></i> / <?php echo e($title->sub_heading, false); ?></h3>
                </div>
                <?php echo e(csrf_field(), false); ?>

                <input type='hidden' name='typereport' value=''>
                <input type='hidden' name='cid' value='<?php echo e($id, false); ?>'>
                <div class="box-body">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="panel panel-default panel-info-account">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Thông tin tài khoản</h3>

                                    <a href="<?php echo e(route('customers-editCustomer'), false); ?>" class="text-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <b>Chỉnh sửa</b></a>
                                </div>

                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <b>Họ và tên:</b>
                                            </div>
                                            <div class="col-md-7">
                                                <p class="text-primary"><?php echo e($customer->fullname, false); ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <b>Địa chỉ email:</b>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="text-primary"><?php echo e($customer->email, false); ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <b>Địa chỉ liên hệ:</b>
                                            </div>
                                            <div class="col-md-7">
                                                <p class="text-primary"><?php echo e($customer->address, false); ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <b>Điện thoại:</b>
                                            </div>
                                            <div class="col-md-3">
                                                <p class="text-primary"><?php echo e($customer->phone, false); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-8">
                            <div class="panel panel-default panel-order">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Thông tin đơn hàng</h3> 
                                </div>

                                <div class="panel-body">
                                    <table class="table table-hover" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="40%"><b>Dịch vụ</b></th>
                                                <th class="text-center" width="15%"><b>Thời hạn (tháng)</b></th>
                                                <th class="text-center" width="15%"><b>Giảm giá (%)</b></th>                                                
                                                <th class="text-center" width="30%"><b>Số tiền thanh toán (đồng)</b></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><b><?php echo e($service_product_name, false); ?></b> <br> Giá: <?php echo e(formatNumber($service_product_price, 1, 0, 0), false); ?> đồng/tháng</td>
                                                <td class="text-center"><?php echo e($producttypes_numtime, false); ?></td>
                                                <td class="text-center"><?php echo e($producttypes_discount, false); ?></td>
                                                <td class="text-right"><?php echo e(formatNumber($producttypes_amount, 1, 0, 0), false); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="3"><b>THÀNH TIỀN</b></td>
                                                <td class="text-right"><?php echo e(formatNumber($producttypes_amount, 1, 0, 0), false); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 

                    </div>    

                    <hr>                

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default panel-payments">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Chọn hình thức thanh toán</h3>
                                </div>

                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="title-check">
                                            <label>
                                                <input type="radio" name="ord_payment_method" value="0" checked="checked">
                                               <font color="#1a1f53"><b>TRỰC TIẾP TẠI VĂN PHÒNG</b></font>
                                            </label>
                                        </div>
                                        <div class="content">
                                            <h3><font color="#1a1f53">CÔNG TY TNHH LAMIAN TRADING</font></h3>
                                            <p><b>Địa chỉ:</b> L81-24.OT10 (OFFICETEL), Tòa Landmark 81 Vinhomes Central Park, Số 720A Điện Biên Phủ, Phường 22, Quận Bình Thạnh, Tp Hồ Chí Minh</p>
                                            <p><b>Điện thoại: </b>0918.905.500 (Zalo/Viber/Skype)</p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="title-check">
                                            <label>
                                                <input type="radio" name="ord_payment_method" value="1">
                                                <font color="#1a1f53"><b>CHUYỂN KHOẢN NGÂN HÀNG</b></font>
                                            </label>
                                        </div>

                                        <div class="content">
                                            <p><b>Bước 1: Thông tin tài khoản</b></p>
                                            <p><b>Tên ngân hàng:</b> Ngân hàng TMCP Ngoại Thương Việt Nam (Vietcombank)</p>
                                            <p><b>Số tài khoản:</b> 0071001284926</p>
                                            <p><b>Tên chủ tài khoản:</b> CÔNG TY TNHH LAMIAN TRADING</p>
                                            <p><b>Chi nhánh:</b> Hồ Chí Minh, TP.HCM</p>

                                            <p><b>Bước 2:</b></p>
                                            <p>Bạn hãy chuyển tiền vào tài khoản ngân hàng khi được cung cấp thông tin ở bước 1. Bạn lưu ý ghi rõ thông tin dịch vụ như Tên dịch vụ/ Mã đơn hàng/ Mã hợp đồng trong nội dung chuyển tiền.</p> 
                                            <p>Ví dụ: “Đăng ký dịch vụ Tháng”, “Thanh toán đơn hàng ORD123456”</p> 
                                            <p>(Nếu chuyển qua ATM bạn chụp ảnh biên lai chuyển tiền và gửi email về info@fiinves.vn cùng với thông tin dịch vụ).</p>

                                            <p><b>Bước 3:</b></p>
                                            <p>Nhận được số tiền chuyển khoản, hệ thống Fiinves sẽ kích hoạt dịch vụ và gửi thông tin quản trị qua email cho bạn. Trường hợp bạn chưa nhận được thông tin trong vòng 24h, bạn vui lòng gọi số hotline 0918905500 hoặc email đến info@fiinves.vn để được hỗ trợ.</p>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="title-check" tab_open="pay_visa">
                                            <label>
                                                <input type="radio" name="ord_payment_method" value="2">
                                                <font color="#1a1f53"><b>THANH TOÁN QUA MOMO</b></font>
                                            </label>
                                        </div>

                                        <div class="content">
                                            <div class="content text-center">
                                                <a href="#">
                                                    <img src="<?php echo e(asset('img/qr-momo.jpg'), false); ?>" width="50%">
                                                </a>
                                                <p style="display: none;">Thanh toán trực tuyến qua MOMO (<a target="_blank" href="https://momo.vn/tin-tuc/tin-tuc-su-kien/huong-dan-su-dung-hinh-thuc-thanh-toan-quet-ma-va-ma-thanh-toan-673">Xem hướng dẫn</a>)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>                    

                    
                </div>
            </div>

            <div class="button-function clearfix">
                <a class="btn btn-default clearfix" href="<?php echo e(route('contracts-addProduct', ['service_product_id' => $service_product_id]), false); ?>">
                    <span class="icon"><i class="fa fa-arrow-left"></i></span>
                    <span class="text">Quay lại</span>
                </a>
                <button class="btn btn-success clearfix" onclick="processReports('frm', 'process')">
                    <span class="text">Thanh toán</span>
                    <span class="icon"><i class="fa fa-arrow-right"></i></span>
                </button>
            </div>  
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.contract.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>