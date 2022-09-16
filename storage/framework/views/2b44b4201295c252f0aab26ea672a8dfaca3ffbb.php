<?php $__env->startSection('head'); ?>

<style type="text/css">
    @media  only screen and (max-width: 768px){
        .content-wrapper .content-header > h1{
            font-size: 21px;
        }

        .report > .row .col-md-4{
            margin-bottom: 20px;
        }

        .detailed-property .box-header{
            height: 90px;
        }

        .detailed-property .box-header .box-tools{
            bottom: 10px;
            top: auto;
        }

        .detailed-property .box-body{
            overflow-x: auto;
        }

        .detailed-property .box-body table{
            width: 1000px;
        }
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php if(isset($infor)): ?>
    <?php if($error == 1): ?>
        <?php echo $__env->make('layouts.partials.messages.warning', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('layouts.partials.messages.infor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
<?php endif; ?>

<div class="row">
    <form role="form" action="<?php echo e(route('cashassets-modify'), false); ?>?continue=true" method="post" id="frm">
    <?php echo e(csrf_field(), false); ?>

    <div class="col-xs-12">
        <div class="box">
            <br>
            <p style="margin-left:10px;font-size:11pt;">
                Chức năng quản lý tài sản - nợ của phần mềm Fiinves là công cụ hữu ích để hỗ trợ bạn đánh giá và xem lại việc quản lý tài sản của mình.
            </p>
            <p style="margin-left:10px;font-size:14pt;color:#ff0000; text-transform: uppercase; font-weight: bold;">Biểu đồ tỷ trọng tài sản</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="report">
                        <div class="row">
                            <div class="col-md-4 col-xs-12" style="text-align: center;">
                                <div id="rptasset1" style="margin-bottom: 12px;"></div>
                                <font size='3' color="#2d3194"><b>Nợ</b></font>
                            </div>
                            <div class="col-md-4 col-xs-12" style="text-align: center;">
                                <div id="rptasset2" style="margin-bottom: 12px;"></div>
                                <font size='3' color="#2d3194"><b>Tài sản</b></font>
                            </div>
                            <div class="col-md-4 col-xs-12" style="text-align: center;">
                                <div id="rptasset3" style="margin-bottom: 12px;"></div>
                                <font size='3' color="#2d3194"><b>Tổng tài sản thực</b></font>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            
            <div class="detailed-property">
                <div class="box-header">
                    <p style="margin-left:0px;font-size:14pt;color:#ff0000; text-transform: uppercase; font-weight: bold;">Danh sách chi tiết tài sản</p>
                    <div class="box-tools" style="right: 0;">
                        <div class="btn-group btn-group-sm">
                            <a href="<?php echo e(route('cashassets-process', ['assetstatustype' => 3]), false); ?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Nợ</a>
                            <a href="<?php echo e(route('cashassets-process', ['assetstatustype' => 4]), false); ?>" class="btn btn-warning"><i class="fa fa-plus" aria-hidden="true"></i> Tài sản</a>
                            <button class="btn btn-danger" onclick="processReports('frm', 'modify')">Điều chỉnh tài sản</button>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th width="1%" rowspan='2'></th>
                                <th style="text-align: center;vertical-align: middle;" rowspan='2' class="text-nowrap" width="1%">STT</th>
                                <th style="text-align: center;vertical-align: middle;" rowspan='2' class="text-nowrap" width="20%">TÀI SẢN</th>
                                <th style="text-align: center;vertical-align: middle;" rowspan='2' class="text-nowrap" width="15%">LOẠI</th>
                                <th style="text-align: center;vertical-align: middle;" rowspan='2' class="text-nowrap" width="15%">CHI TIẾT</th>
                                <th style="text-align: center;vertical-align: middle;" rowspan='2' class="text-nowrap">NGÀY</th>
                                <th style="text-align: center;vertical-align: middle;" colspan='2' class="text-nowrap">TÀI SẢN</th>
                                <th style="text-align: center;vertical-align: middle;" rowspan='2' width="10%">CHỨC NĂNG</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;" class="text-nowrap">NỢ</th>
                                <th style="text-align: center;" class="text-nowrap">CÓ</th>
                            </tr>                        
                        </thead>
                        <tbody>
                            <?php if($collections->count() === 0): ?>
                            <tr>
                                <td colspan="7"><b>Không có dữ liệu!!!</b></td>
                            </tr>
                            <?php endif; ?>
                            <?php
                                $i = 1;
                                $total_asset = 0; $total_expense = 0;
                            ?>                        
                            <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashasset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    if($cashasset->assetstatustype == 3){
                                        $total_asset += $cashasset->remainamount;
                                    }elseif($cashasset->assetstatustype == 4){
                                        $total_expense += $cashasset->remainamount;
                                    }
                                ?>                         
                                    <tr class="table-cashasset">
                                    <td>
                                        <label>
                                            <input type="checkbox" name="assetid" value="<?php echo e($cashasset->id, false); ?>" onclick="selectOnlyThis(this)">
                                        </label>
                                    </td>
                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                    <td style="text-align: left;" class="text-nowrap"><?php echo e($cashasset->assetname, false); ?> &nbsp;&nbsp;&nbsp;
                                    <?php if($cashasset->document != ''): ?>
                                        <a style="color: #1b1464;" target="_blank" href="<?php echo e($pathdocument . $cashasset->document, false); ?>" title='Hình ảnh, hóa đơn, chứng từ ...'><i class="fa fa-paperclip" style="margin-right: 10px;"></i></a>
                                    <?php endif; ?>
                                    <br>Số tiền: <?php echo e(formatNumber($cashasset->amount, 1, 0, 1), false); ?> 
                                    </td>
                                    <td style="text-align: left;" class="text-nowrap"><?php echo e($cashasset->config_types_name, false); ?></td>                                
                                    <td style="text-align: left;" class="text-nowrap"><?php echo e($cashasset->config_type_details_name, false); ?></td>
                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($cashasset->assetdate == null ? "" : ConvertSQLDate($cashasset->assetdate), false); ?></td>
                                    <?php if($cashasset->assetstatustype == 3): ?>
                                        <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($cashasset->remainamount, 1, 0, 0, 1); ?></td>
                                        <td style="text-align: right;" class="text-nowrap"></td>
                                    <?php elseif($cashasset->assetstatustype == 4): ?>
                                        <td style="text-align: right;" class="text-nowrap"></td>
                                        <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($cashasset->remainamount, 1, 0, 0, 0); ?></td>
                                    <?php endif; ?> 
                                    <td style="text-align: center;" class="text-nowrap">
                                        <a style="color: #1b1464;" href="<?php echo e(route('cashassets-edit',['id'=> $cashasset->id]), false); ?>" title='Sửa'><i class="fas fa-pencil-alt" style="margin-right: 10px;"></i></a> 
                                        <a style="color: #1b1464;" href="javascript:void(0)" data-id="<?php echo e($cashasset->id, false); ?>" class="btn-delete" title='Xóa'><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <form name="form-delete-<?php echo e($cashasset->id, false); ?>" method="post" action="<?php echo e(route('cashassets-delete', ['id' => $cashasset->id ]), false); ?>">
                                                <?php echo e(csrf_field(), false); ?>

                                                <?php echo e(method_field('delete'), false); ?>

                                            </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php $__currentLoopData = $listaccounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashasset): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                     $total_expense += $cashasset->amount;

                                     $requireamount = 0; $cashname = "Ví mục tiêu"; 
                                     if($cashasset->accountno == $primaryaccount){
                                         $requireamount = $cashasset->amount;
                                         $cashname = "Ví tổng";
                                     }else{
                                         $requireamount = $cashasset->requireamount;
                                         $cashname = "Ví mục tiêu";
                                     }
                                ?>                         
                                    <tr class="table-cashasset">
                                    <td></td>
                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                    <td style="text-align: left;" class="text-nowrap"><?php echo e($cashasset->accountname, false); ?> &nbsp;&nbsp;&nbsp;
                                    <br>Số tiền: <?php echo e(formatNumber($requireamount, 1, 0, 1), false); ?>

                                    </td>
                                    <td style="text-align: left;" class="text-nowrap"><?php echo e($cashname, false); ?></td>                                
                                    <td style="text-align: left;" class="text-nowrap">Mã ví <?php echo e($cashasset->accountno, false); ?> </td>
                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($cashasset->accountdate == null ? "" : ConvertSQLDate($cashasset->accountdate), false); ?></td>
                                    <td style="text-align: right;" class="text-nowrap"></td>
                                    <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($cashasset->amount, 1, 0, 0, 0); ?></td>
                                    <td style="text-align: center;" class="text-nowrap">
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th style="text-align: left; border-left: 1px solid #a6a6a6;" colspan='6' class="text-nowrap">TỔNG CỘNG</th>
                                <th style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($total_asset, 1, 0, 0, 1); ?></th>
                                <th style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($total_expense, 1, 0, 0, 0); ?></th>
                                <th></th>
                            </tr>                          
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix text-right">
                    <?php echo e($collections->links(), false); ?>

                </div>
            </div>

            <p style="margin-left:10px;font-size:14pt;color:#ff0000; text-transform: uppercase; font-weight: bold;">Tổng quan về tài sản</p>

            <div class="row">
                <div class="col-md-3 col-xs-6" style="text-align: center;">
                    <img src="<?php echo e(asset('img/saving-2.png'), false); ?>" width="50" height="50"> 
                    <p style="font-size:12pt; margin-top: 10px; color: #1b1464;"><b>TỔNG NỢ</b></p>
                    <p style="font-size:12pt;font-weight: bold;"><?php echo e(formatNumber($total_asset, 1, 0, 1), false); ?></p>
                </div>
                <div class="col-md-3 col-xs-6" style="text-align: center;">
                    <img src="<?php echo e(asset('img/cash-personal-3.png'), false); ?>" width="50" height="50"> 
                    <p style="font-size:12pt; margin-top: 10px; color: #1b1464;"><b>TỔNG TÀI SẢN</b></p>
                    <p style="font-size:12pt;font-weight: bold;"><?php echo e(formatNumber($total_expense, 1, 0, 1), false); ?></p>
                </div>
                <div class="col-md-3 col-xs-6" style="text-align: center;">
                    <img src="<?php echo e(asset('img/cash-personal-2.png'), false); ?>" width="50" height="50"> 
                    <p style="font-size:12pt; margin-top: 10px; color: #1b1464;"><b>TỈ LỆ NỢ/TÀI SẢN</b></p>
                    <p style="font-size:12pt;font-weight: bold;"><?php echo e(($total_expense == 0 ? 0 : formatNumber(($total_asset/$total_expense)*100, 1, 0, 1)), false); ?> %</p>
                </div>
                <div class="col-md-3 col-xs-6" style="text-align: center;">
                    <img src="<?php echo e(asset('img/saving-1.png'), false); ?>" width="50" height="50"> 
                    <p style="font-size:12pt; margin-top: 10px; color: #1b1464;"><b>TỔNG TÀI SẢN THỰC</b></p>
                    <p style="font-size:12pt;font-weight: bold;"><?php echo e(formatNumber($total_expense-$total_asset, 1, 0, 1), false); ?></p>
                </div>
            </div>

            <br><br>            
        </div>
        <!-- /.box -->
    </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.cashasset.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>