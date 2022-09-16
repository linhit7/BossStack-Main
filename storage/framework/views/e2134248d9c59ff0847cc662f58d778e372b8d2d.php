<?php $__env->startSection('head'); ?>

<style type="text/css">
    .box-body .financial-analysis .form-group .row,
    .help > div{
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .help > div{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    .box-body .financial-analysis .form-group .row .item:nth-child(2n-1){
        align-self: center;
    }

    @media  only screen and (max-width: 768px){
        .box-body .financial-analysis .form-group .row .item label{
            margin-bottom: 0;
        }
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('cashplans-update', ['id' => $model->id]), false); ?>?continue=true" method="post" id="frm" name="frm">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <br><font size="4" color='#2d3194'><b>PHÂN TÍCH TÀI CHÍNH</b></font><br>
                </div>
                <?php echo e(csrf_field(), false); ?>

                <?php echo e(method_field('put'), false); ?>

                <input type='hidden' name='typereport' value=''>
                <input type='hidden' name='customer_id' value='<?php echo e($model->customer_id, false); ?>'>                
                <input type="hidden" name="currentamountunittype" id="currentamountunittype" value="1">
                <input type="hidden" name="requireamountunittype" id="requireamountunittype" value="1">

                <div class="box-body">

                    <div class="financial-analysis">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 col-xs-5 item">
                                    <label>MỤC TIÊU <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-4 col-xs-7 item">
                                    <b><?php echo e(mb_strtoupper($plantypes[$model->plantype]), false); ?></b>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-3 col-xs-5" style="align-self: center;">
                                    <label>Ví <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-4 col-xs-7">
                                    <input type="text" class="form-control" name="name" value="<?php echo e($model->accountno, false); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row" style="display: flex;">
                                <div class="col-md-3 col-xs-5" style="align-self: center;">
                                    <label>Tên ví mục tiêu <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-4 col-xs-7">
                                    <input type="text" class="form-control" name="name" value="<?php echo e($model->planname, false); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 col-xs-5 item">
                                    <label>Chi tiết <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-4 col-xs-7 item">
                                    <input type="text" class="form-control" name="description" value="<?php echo e($model->description, false); ?>">
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 col-xs-5 item">
                                    <label>Ngày lập<small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-4 col-xs-7 item">
                                    <input type="text" class="form-control" name="plandate" id='plandate' value="<?php echo e($model->plandate == "" ? "" : ConvertSQLDate($model->plandate), false); ?>">
                                    <?php if($errors->has('plandate')): ?><span class="text-danger"><?php echo e($errors->first('plandate'), false); ?></span><?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 col-xs-5 item">
                                    <label>Tuổi hiện tại <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-4 col-xs-7 item">
                                    <input type="text" class="form-control" name="currentage" value="<?php echo e($model->currentage, false); ?>">
                                </div>                            
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 col-xs-5 item">
                                    <label>Tuổi hoàn thành mục tiêu <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-4 col-xs-7 item">
                                    <input type="text" value="<?php echo e($model->planage == "" ? 50 : $model->planage, false); ?>" class="form-control" name="planage" id="planage" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                    <?php if($errors->has('planage')): ?><span class="text-danger"><?php echo e($errors->first('planage'), false); ?></span><?php endif; ?>
                                </div> 
                            </div>
                        </div>

                        <div class="form-group" style="display: none;">
                            <div class="row">
                                <div class="col-md-3 col-xs-5 item">
                                    <label>Liên kết ví tiền <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-4 col-xs-7 item">
                                    <select class="form-control select2" name="accountno" id="accountno">                        
                                        <option value="0_0"></option>
                                        <?php $__currentLoopData = $listaccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if( $item->id == $model->accountno ): ?>
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
                            <div class="row">
                                <div class="col-md-3 col-xs-5 item">
                                    <label>Vốn đầu tư hiện tại <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-4 col-xs-7 item">
                                    <input type="text" value="<?php echo e($model->currentamount == "" ? 0 : formatNumber($model->currentamount, 1, 0, 0), false); ?>" class="form-control" name="currentamount" id="currentamount" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                    <?php if($errors->has('currentamount')): ?><span class="text-danger"><?php echo e($errors->first('currentamount'), false); ?></span><?php endif; ?>
                                </div>                            
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 col-xs-5 item">
                                    <label>Số tiền mục tiêu <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-4 col-xs-7 item">
                                    <input type="text" value="<?php echo e($model->requireamount == "" ? 0 : formatNumber($model->requireamount, 1, 0, 0), false); ?>" class="form-control" name="requireamount" id="requireamount" onkeyup='this.value=formatNumberDecimal(this.value)'>
                                    <?php if($errors->has('requireamount')): ?><span class="text-danger"><?php echo e($errors->first('requireamount'), false); ?></span><?php endif; ?>
                                </div>                            
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 col-xs-5 item">
                                    <label>Ngày dự kiến hoàn thành:</label>
                                </div>
                                <div class="col-md-4 col-xs-7 item">
                                    <input type="text" class="form-control" name="finishdate" id='finishdate' value="<?php echo e($model->finishdate == "" ? "" : ConvertSQLDate($model->finishdate), false); ?>">
                                    <?php if($errors->has('finishdate')): ?><span class="text-danger"><?php echo e($errors->first('finishdate'), false); ?></span><?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style="display: none;">
                            <div class="row">
                                <div class="col-md-3 col-xs-5 item">
                                    <label>Số tiền tích lũy hiện tại:</label>
                                </div>
                                <div class="col-md-4 col-xs-7 item" style="text-align: right;">
                                    <font size="3" color='red'><b><span id="totalcurrentamountlabel"></span></b></font>
                                    <input type='hidden' name='totalcurrentamount' id='totalcurrentamount' value='<?php echo e($model->totalcurrentamount, false); ?>'>                
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

                    </div>

                    <hr>
                                        
                    <div class="form-group">
                        <div class="row">         
                            <div class="box-header">
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a data-toggle="pill" class="hash-tab" href="#rptchart"><b>BIỂU ĐỒ</b></a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" class="hash-tab" href="#schedulemonth"><b>KẾ HOẠCH TÍCH LŨY THÁNG</b></a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" class="hash-tab" href="#scheduleyear"><b>KẾ HOẠCH TÍCH LŨY NĂM</b></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body">            
                                <div class="tab-content">
                                    <div id="rptchart" class="tab-pane fade in active">
                                         <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <font size="2">&nbsp;&nbsp;&nbsp;Để đạt được mục tiêu tài chính <b><font color="red"><?php echo e(formatNumber($model->requireamount, 1, 0, 0), false); ?> VND</font> </b>, bạn cần tích lũy <b><font color="red"><?php echo e(formatNumber($savingamountplan/12, 1, 0, 1), false); ?> VND/tháng</font> </b> trong <b><font color="red"><?php echo e($timeplan, false); ?> Năm</font></b></font><br><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 text-left">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<font color="#000">Đơn vị tính: VNĐ</font><br><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10 text-center">
                                                    <div id="chart"></div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>

                                    <div id="schedulemonth" class="tab-pane fade">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <font size="2">&nbsp;&nbsp;&nbsp;Để đạt được mục tiêu tài chính <b><font color="red"><?php echo e(formatNumber($model->requireamount, 1, 0, 0), false); ?> VND</font> </b>, bạn cần tích lũy <b><font color="red"><?php echo e(formatNumber($savingamountplan/12, 1, 0, 1), false); ?> VND/tháng </font></b> trong <b><font color="red"><?php echo e($timeplan, false); ?> Năm</font></b></font><br><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <font size="2">&nbsp;&nbsp;&nbsp;Số tiền tích lũy đầu kỳ <b><font color="red"><?php echo e(formatNumber($model->totalcurrentamount, 1, 0, 0), false); ?> VND</font></b></font>
                                                </div>
                                            </div>
                                        </div>                    
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-8 text-center">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align: center;" class="text-nowrap" width="5%">STT</th>
                                                                <th style="text-align: center;" class="text-nowrap" width="8%">THÁNG</th>
                                                                <th style="text-align: center;" class="text-nowrap" width="15%">TIỀN TÍCH LŨY MỖI THÁNG</th>
                                                                <th style="text-align: center;" class="text-nowrap" width="15%">SỐ DƯ CUỐI KỲ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $i = 1;
                                                                $savingamountplanmonth = round($savingamountplan/12,0);
                                                                $totalsavingamountplan = $model->totalcurrentamount;
                                                                $plandate = ($model->plandate == "" ? getCurrentDate('d') : ConvertSQLDate($model->plandate)); 
                                                            ?>                        
                                                            <?php for($item=1; $item <= $timeplan*12; $item++): ?>
                                                                <?php
                                                                    $totalsavingamountplan += $savingamountplanmonth; 
                                                                    $totalsavingamountplan = ($totalsavingamountplan>$requireamount ? $requireamount : $totalsavingamountplan);
                                                                    $planmonth = DateAdd ($plandate,'m',$item);
                                                                ?>                        
                                                                <tr class="table-cashplan">
                                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($planmonth, false); ?></td>
                                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e(formatNumber($savingamountplanmonth, 1, 0, 0), false); ?></td>
                                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e(formatNumber($totalsavingamountplan, 1, 0, 0), false); ?></td>
                                                                </tr>
                                                            <?php endfor; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>

                                    <div id="scheduleyear" class="tab-pane fade">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <font size="2">&nbsp;&nbsp;&nbsp;Để đạt được mục tiêu tài chính <b><font color="red"><?php echo e(formatNumber($model->requireamount, 1, 0, 0), false); ?> VND</font> </b>, bạn cần tích lũy <b><font color="red"><?php echo e(formatNumber($savingamountplan/12, 1, 0, 1), false); ?> VND/tháng</font> </b> trong <b><font color="red"><?php echo e($timeplan, false); ?> Năm</font></b></font><br><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <font size="2">&nbsp;&nbsp;&nbsp;Số tiền tích lũy đầu kỳ <b><font color="red"><?php echo e(formatNumber($model->totalcurrentamount, 1, 0, 0), false); ?> VND</font></b></font>
                                                </div>
                                            </div>
                                        </div>                    
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-8 text-center">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align: center;" class="text-nowrap" width="5%">STT</th>
                                                                <th style="text-align: center;" class="text-nowrap" width="8%">TUỔI</th>
                                                                <th style="text-align: center;" class="text-nowrap" width="15%">TIỀN TÍCH LŨY MỖI NĂM</th>
                                                                <th style="text-align: center;" class="text-nowrap" width="15%">SỐ DƯ CUỐI KỲ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $i = 1;
                                                                $totalsavingamountplan = $model->totalcurrentamount; 
                                                            ?>                        
                                                            <?php for($item=$model->currentage+1; $item <= $model->planage; $item++): ?>
                                                                <?php
                                                                    $totalsavingamountplan += $savingamountplan; 
                                                                    $totalsavingamountplan = ($totalsavingamountplan>$requireamount ? $requireamount : $totalsavingamountplan);
                                                                ?>                        
                                                                <tr class="table-cashplan">
                                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($item, false); ?></td>
                                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e(formatNumber($savingamountplan, 1, 0, 0), false); ?></td>
                                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e(formatNumber($totalsavingamountplan, 1, 0, 0), false); ?></td>
                                                                </tr>
                                                            <?php endfor; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                    
                                </div>
                             </div>
                         </div>
                     </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                <font size="4" color='#2d3194'><b>HỖ TRỢ</b></font>
                            </div>
                        </div>
                    </div>                    

                    
                    <div class="form-group">
                        <font size="2" style="text-align: justify;"><b>Nếu bạn cần tư vấn để gia tăng thu nhập và hoàn thành mục tiêu tài chính, xin hãy liên hệ với chúng tôi để nhận được những lời khuyên tốt nhất. Hotline: 0918.905.500 (Zalo/Viber/Skype) hoặc Email: info@fiinves.vn.</b></font>
                    </div>
                    
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
                    
                    <br>
                    
                </div>
            </div>

            <a href="<?php echo e(route('cashplans-index'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   
            
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.cashplan.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('product-manage.cashplan.partials.script_customer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>