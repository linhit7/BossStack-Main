<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('cashaccounts-detailAccount'), false); ?>" method="post" id="frm" name="frm">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title"><font color='#000080'>Chi tiết ví tiền</font></h4>
                </div>
                <?php echo e(csrf_field(), false); ?>

                <input type='hidden' name='typereport' value=''>
                <div class="box-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-xs-4 item">
                                <label>Ví tiền :</label>
                            </div>
                            <div class="col-md-5 col-xs-8 item">
                                <select class="form-control select2" name="cashaccount" id="cashaccount">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $listaccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->id == $cashaccount or $item->id == old('cashaccount')): ?>
                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->accountno . " - " . $item->accountname, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->accountno . " - " . $item->accountname, false); ?></option>                                                                    
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>                                    
                            </div>                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Số tiền hiện tại:</label>
                            </div>
                            <div class="col-md-5" style="text-align: right;">
                                <?php echo formatNumberColor($model->amount, 1, 0, 1); ?> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Ngày mở :</label>
                            </div>
                            <div class="col-md-5" style="text-align: right;">
                                <?php echo e(ConvertSQLDate($model->accountdate), false); ?>

                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <div class="filter-date">
                            <div class="items">
                                <label>Thời gian từ:</label>
                            </div>
                            <div class="items">
                                <input type='text' class="form-control" name="fromDate" id='fromDate' value="<?php echo e(old('fromDate') == "" ? $fromDate : old('fromDate'), false); ?>"/>
                            </div>
                            <div class="items">
                                <label style="color: #2d3194; text-align: center;">đến:</label>
                            </div>
                            <div class="items">
                                <input type='text' class="form-control" name="toDate" id='toDate' value="<?php echo e(old('toDate') == "" ? $toDate : old('toDate'), false); ?>"/>
                            </div>
                            <div class="items">
                                <button class="btn btn-primary btn-search" style="background-color: #ff7f0e; border: 1px solid #ff7f0e;">
                                    <span class="text">Tìm kiếm</span>
                                    <span class="icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class="row" style="display: none;">
                            <div class="col-md-4 col-xs-12">
                                <label>Thời gian từ :</label>
                                <input type='text' class="form-control" name="fromDate" id='fromDate' value="<?php echo e(old('fromDate') == "" ? $fromDate : old('fromDate'), false); ?>"/>                    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <label>đến :</label>
                                <input type='text' class="form-control" name="toDate" id='toDate' value="<?php echo e(old('toDate') == "" ? $toDate : old('toDate'), false); ?>"/>                    
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <label></label><br>
                                <button class="btn btn-primary btn-search btn-bg-blue" style="width: 45%;">Tìm kiếm</button>
                            </div>                
                        </div>
                    </div>
                                                            
                    <div class="form-group">
                        <div class="row">         
                            <div class="box-header">
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a data-toggle="pill" class="hash-tab" href="#rptall"><b>Tất cả</b></a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" class="hash-tab" href="#rptincome"><b>Tiền vào</b></a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" class="hash-tab" href="#rptexpense"><b>Tiền ra</b></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-body">            
                                <div class="tab-content">
                                    <div id="rptall" class="tab-pane fade in active">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-7 text-center">
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <?php $__currentLoopData = $listCashTransaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php
                                                                    $indent = ''; $bgcolor = '';
                                                                    if($item->incomestatustype == 0 or ($item->incomestatustype == 2 and $item->incometype == 0)){
                                                                        $bgcolor = '#1eb40f';
                                                                        $indent = '+';
                                                                    }else{
                                                                        $bgcolor = '#ff423e';
                                                                        $indent = '-';
                                                                    }                                                                     
                                                                ?>                        
                                                                <tr>
                                                                    <td style="text-align: left;"><?php echo e(ConvertSQLDate($item->transactiondate), false); ?> <br> <?php echo e($item->content, false); ?></td>
                                                                    <td style="text-align: right;" class="text-nowrap"><br><font style="color: <?php echo e($bgcolor, false); ?>"><?php echo e($indent, false); ?> <?php echo e(formatNumber($item->amount, 1, 0, 1), false); ?></font></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>

                                    <div id="rptincome" class="tab-pane fade">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-7 text-center">
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <?php $__currentLoopData = $listCashTransactionIncome; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php
                                                                    $indent = ''; $bgcolor = '';
                                                                    if($item->incomestatustype == 0  or ($item->incomestatustype == 2 and $item->incometype == 0)){
                                                                        $bgcolor = '#1eb40f';
                                                                        $indent = '+';
                                                                    }else{
                                                                        $bgcolor = '#ff423e';
                                                                        $indent = '-';
                                                                    }                                                                     
                                                                ?>                        
                                                                <tr>
                                                                    <td style="text-align: left;"><?php echo e(ConvertSQLDate($item->transactiondate), false); ?> <br> <?php echo e($item->content, false); ?></td>
                                                                    <td style="text-align: right;" class="text-nowrap"><br><font style="font-style: bold; color: <?php echo e($bgcolor, false); ?>"><?php echo e($indent, false); ?> <?php echo e(formatNumber($item->amount, 1, 0, 1), false); ?></font></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>

                                    <div id="rptexpense" class="tab-pane fade">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-7 text-center">
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <?php $__currentLoopData = $listCashTransactionExpense; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php
                                                                    $indent = ''; $bgcolor = '';
                                                                    if($item->incomestatustype == 0  or ($item->incomestatustype == 2 and $item->incometype == 0)){
                                                                        $bgcolor = '#1eb40f';
                                                                        $indent = '+';
                                                                    }else{
                                                                        $bgcolor = '#ff423e';
                                                                        $indent = '-';
                                                                    }                                                                     
                                                                ?>                        
                                                                <tr>
                                                                    <td style="text-align: left;"><?php echo e(ConvertSQLDate($item->transactiondate), false); ?> <br> <?php echo e($item->content, false); ?></td>
                                                                    <td style="text-align: right;" class="text-nowrap"><br><font style="font-style: bold; color: <?php echo e($bgcolor, false); ?>"><?php echo e($indent, false); ?> <?php echo e(formatNumber($item->amount, 1, 0, 1), false); ?></font></td>
                                                                </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                </div>
            </div>

            <a href="<?php echo e(route('cashaccounts-index'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   
            
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.cashaccount.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>