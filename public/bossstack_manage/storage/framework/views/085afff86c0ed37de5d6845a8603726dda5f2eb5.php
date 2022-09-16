<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">

<style type="text/css">
    label{
        font-size: 12px;
    }

    .select2-container .selection .select2-selection--single{
        height: 34px !important;
        padding: 6px 12px !important;
    }

    .select2-container .selection .select2-selection--single .select2-selection__arrow{
        height: 28px !important;
    }

    @media  only screen and (max-width: 768px){
        .box-cashplans.box-customer .help > div{
            display: block;
            justify-content: normal;
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
    <form role="form" action="<?php echo e(route('cashplans-process'), false); ?>?continue=true" method="post" id="frm" enctype="multipart/form-data">


        <div class="col-md-12">
            <div class="box box-cashplans box-customer">
                <?php echo e(csrf_field(), false); ?>

                <input type='hidden' name='typereport' value=''>
                <input type='hidden' name='customer_id' value='<?php echo e($customer_id, false); ?>'>
                <input type="hidden" name="currentamountunittype" id="currentamountunittype" value="1">
                <input type="hidden" name="requireamountunittype" id="requireamountunittype" value="1">
                                
                <div class="box-body">
                    <font style="font-size:11pt;">Thông tin thiết lập các kế hoạch tài chính của khách hàng. Để xem lại thông tin chi tiết các mục tiêu tài chính khách hàng vui lòng xem <a href="<?php echo e(route('cashplans-index'), false); ?>"><b><font color="#FFA500">tại đây</font></b></a>.</font><br><br><br>
                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-3 col-xs-5" style="align-self: center;">
                                <label>MỤC TIÊU <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7">
                                <select class="form-control select2" name="plantype" id="plantype">
                                    <?php $__currentLoopData = $plantypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key == old('plantype')): ?>
                                            <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                        <?php else: ?>
                                            <?php if(Auth()->user()->service_product_id == 3): ?>
                                                <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>
                                            <?php else: ?>
                                                <?php if($key == 9 or $key == 13): ?>
                                                    
                                                <?php else: ?>
                                                    <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>                                                    
                                                <?php endif; ?>
                                            <?php endif; ?>                                                                  
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>                                
                            </div>  
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-3 col-xs-5" style="align-self: center;">
                                <label>Chi tiết <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7">
                                <input type="text" class="form-control" name="description" value="<?php echo e(old('description'), false); ?>">
                                <?php if($errors->has('description')): ?><span class="text-danger"><?php echo e($errors->first('description'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-3 col-xs-5" style="align-self: center;">
                                <label>Ngày lập <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7">
                                <input type='text' class="form-control" name="plandate" id='plandate' value="<?php echo e(old('plandate') == "" ? $plandate : old('plandate'), false); ?>"/>
                                <?php if($errors->has('plandate')): ?><span class="text-danger"><?php echo e($errors->first('plandate'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-3 col-xs-5" style="align-self: center;">
                                <label>Tuổi hiện tại <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7">
                                <input type="text" class="form-control" name="currentage" id="currentage" value="<?php echo e(($currentage == null ? old('currentage') : $currentage), false); ?>" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                <?php if($errors->has('currentage')): ?><span class="text-danger"><?php echo e($errors->first('currentage'), false); ?></span><?php endif; ?>
                            </div>                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-3 col-xs-5" style="align-self: center;">
                                <label>Tuổi hoàn thành mục tiêu <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7" style="align-self: center;">
                                <input type="text" class="form-control" value="<?php echo e(old('planage') == "" ? "" : old('planage'), false); ?>" name="planage" id="planage">
                                <?php if($errors->has('planage')): ?><span class="text-danger"><?php echo e($errors->first('planage'), false); ?></span><?php endif; ?>
                            </div>  
                        </div>
                    </div>

                    <div class="form-group" style="display: none;">
                        <div class="row" style="display: flex;">
                            <div class="col-md-3 col-xs-5" style="align-self: center;">
                                <label>Liên kết ví tiền <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7">
                                <select class="form-control select2" name="accountno" id="accountno">                        
                                    <option value="">Chọn ví tiền mà bạn muốn liên kết</option>
                                    <?php $__currentLoopData = $listaccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $item->id == old('accountno') ): ?>
                                            <option value="<?php echo e($item->id . '_' . $item->amount, false); ?>" selected><?php echo e('Tài khoản '. $item->accountno . ' - Số dư: ' . formatNumber($item->amount, 1, 0, 0), false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id . '_' . $item->amount, false); ?>"><?php echo e('Tài khoản '. $item->accountno . ' - Số dư:  ' . formatNumber($item->amount, 1, 0, 0), false); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="display: none;">
                        <div class="row" style="display: flex;">
                            <div class="col-md-3 col-xs-5" style="align-self: center;">
                                <label>Vốn đầu tư hiện tại <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7" style="align-self: center;">
                                <input type="text" class="form-control" value="<?php echo e(old('currentamount') == "" ? 0 : old('currentamount'), false); ?>" name="currentamount" id="currentamount" onkeyup='this.value=formatNumberDecimal(this.value)'>
                            </div>                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-3 col-xs-5" style="align-self: center;">
                                <label>Số tiền mục tiêu <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-4 col-xs-7" style="align-self: center;">
                                <input type="text" class="form-control" value="<?php echo e(old('requireamount') == "" ? 0 : old('requireamount'), false); ?>" name="requireamount" id="requireamount" onkeyup='this.value=formatNumberDecimal(this.value)'>
                            </div>                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-3 col-xs-5" style="align-self: center;">
                                <label>Ngày dự kiến hoàn thành :</label>
                            </div>
                            <div class="col-md-4 col-xs-7">
                                <input type='text' class="form-control" name="finishdate" id='finishdate' value=""/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="display: none;">
                        <div class="row" style="display: flex;">
                            <div class="col-md-3 col-xs-5" style="align-self: center;">
                                <label>Số tiền tích lũy hiện tại:</label>
                            </div>
                            <div class="col-md-4 col-xs-7" style="text-align: right; align-self: center;">
                                <font size="3" color='red'><b><span id="totalcurrentamountlabel"></span> </b></font>
                                <input type='hidden' name='totalcurrentamount' id='totalcurrentamount' value='<?php echo e(old('totalcurrentamount'), false); ?>'>                
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-6" style="text-align: left; align-self: center;">
                                <font size="3" color='red'><b><span id="checkamountlabel"></span></b></font>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-3 col-xs-12" style="align-self: center;">
                                <label>Hóa đơn, chứng từ kèm theo :</label>
                            </div>
                            <div class="col-md-7 col-xs-12" style="align-self: center;">
                                <div class="box-body">
                                    <input type="file" name="fImages" style="width: 100%">
                                    <p class="text-danger" style="margin-top: 10px;"><u>Lưu ý:</u> gửi kèm các hóa đơn, chứng từ ... kèm theo</p>
                                </div>
                            </div>
                        </div>
                    </div>
     
                    <button class="btn btn-success" style="background-color: #ff7f0e; border: 1px solid #ff7f0e;" onclick="processReports('frm', 'process')">Thêm mục tiêu</button>
                       

                    <br><br><br><br><br>

                    <h5>HỖ TRỢ</h5>
                    
                    <font size="2" style="text-align: justify;"><b>Nếu bạn cần tư vấn để gia tăng thu nhập và hoàn thành mục tiêu tài chính, xin hãy liên hệ với chúng tôi để nhận được những lời khuyên tốt nhất. Hotline: 0918.905.500 (Zalo/Viber/Skype) hoặc Email: info@fiinves.vn.</b></font>

                    <div class="help">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4" style="text-align: center;">
                                <a href="https://fiinves.vn/public/advisorys/formAdvisory">
                                    <div class="icon" style="margin-bottom: 10px;">
                                        <img src="<?php echo e(asset('img/icon-10.png'), false); ?>">
                                    </div>
                                    <div class="name"><font size="3" color="#2d3194"><b>HỖ TRỢ TƯ VẤN</b></font></div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4" style="text-align: center;">
                                <a href="https://fiinves.vn/public/invests">
                                    <div class="icon" style="margin-bottom: 10px;">
                                        <img src="<?php echo e(asset('img/icon-11.png'), false); ?>">
                                    </div>
                                    <div class="name"><font size="3" color="#2d3194"><b>TIN TỨC ĐẦU TƯ</b></font></div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4" style="text-align: center;">
                                <a href="https://fiinves.vn/public/cashs/process">
                                    <div class="icon" style="margin-bottom: 10px;">
                                        <img src="<?php echo e(asset('img/icon-12.png'), false); ?>">
                                    </div>
                                    <div class="name"><font size="3" color="#2d3194"><b>DÒNG TIỀN CÁ NHÂN</b></font></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.cashplan.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>