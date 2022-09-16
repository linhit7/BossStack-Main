<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">

<style type="text/css">
    .table-cashplan tbody tr td:last-child a{
        margin-right: 10px;
    }

    .table-cashplan tbody tr td:last-child a.btn-delete{
        margin-right: 0;
    }

    .table-cashplan tfoot tr td{
        border: 1px solid #a6a6a6;
    }

    @media  only screen and (min-width: 769px) and (max-width: 1024px){
        .box-body{
            overflow-x: auto
        }

        .table-cashplan{
            width: 1500px;
        }

        .table-cashplan tbody tr td:last-child a{
            margin-right: 10px;
        }
    }

    @media  only screen and (max-width: 768px){
        .box .box-header .box-tools{
            right: 0;
        } 

        .box .box-body{
            overflow-x: auto;
        }

        .box .box-body table{
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
    <?php echo $__env->make('layouts.partials.messages.infor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <p style="margin-left:5px;margin-top:10px;font-size:11pt;">
                Chức năng quản lý các ví tài chính của phần mềm Fiinves là công cụ hữu ích để hỗ trợ bạn đánh giá và xem lại việc quản lý tài chính của mình.
            </p>

            <div class="row" style="padding: 10px 0;">
                <div class="col-md-2 col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-size: 16px; color: #312f90;" class="text-nowrap"><b>SỐ VÍ MỤC TIÊU:</b></td>
                                        <td style="text-align: right; font-size: 15px; color: #10aa25;" class="text-nowrap"><b><?php echo e($collections->count(), false); ?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-size: 16px; color: #312f90;" class="text-nowrap"><b>TỔNG SỐ TIỀN MỤC TIÊU:</b></td>
                                        <td style="text-align: right; font-size: 15px; color: #10aa25;" class="text-nowrap"><b><?php echo formatNumberColor($collections->sum('requireamount'), 1, 0, 0); ?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-size: 16px; color: #312f90;" class="text-nowrap"><b>TỔNG SỐ TIỀN ĐANG THỰC HIỆN:</b></td>
                                        <td style="text-align: right; font-size: 15px; color: #10aa25;" class="text-nowrap"><b><?php echo formatNumberColor($collections->sum('amount'), 1, 0, 1); ?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="text-align: left; font-size: 16px; color: #312f90;" class="text-nowrap"><b>TỔNG SỐ TIỀN CÒN LẠI:</b></td>
                                        <td style="text-align: right; font-size: 15px; color: #10aa25;" class="text-nowrap"><b><?php echo formatNumberColor(($collections->sum('requireamount')-$collections->sum('amount')), 1, 0, 1); ?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-header">
                <h3 class="box-title">&nbsp;</h3>
                <div class="box-tools">
                    <div class="btn-group btn-group-sm">
                        <a href="<?php echo e(route('cashplans-add'), false); ?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm ví mục tiêu</a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-hover table-cashplan">
                    <thead>
                        <tr>
                            <th style="text-align: center;" class="text-nowrap" width="1%">STT</th>
                            <th style="text-align: center;" class="text-nowrap" width="10%">KẾ HOẠCH</th>
                            <th style="text-align: center;" class="text-nowrap" width="10%">VÍ MỤC TIÊU</th>
                            <th style="text-align: center;" width="6%" class="text-nowrap">NGÀY LẬP</th>
                            <th style="text-align: center;" width="7%" class="text-nowrap">SỐ TUỔI <br> HIỆN TẠI</th>
                            <th style="text-align: center;" width="7%" class="text-nowrap">SỐ TUỔI ĐẠT <br> MỤC TIÊU</th>
                            <th style="text-align: center;" width="5%" class="text-nowrap">SỐ TIỀN <br> MỤC TIÊU</th>
                            <th style="text-align: center;" width="7%" class="text-nowrap">ĐANG THỰC HIỆN</th>
                            <th style="text-align: center;" width="5%" class="text-nowrap">CÒN LẠI</th>
                            <th style="text-align: center;" width="5%" class="text-nowrap">TRẠNG THÁI</th>                            
                            <th style="text-align: center;" width="6%">CHỨC NĂNG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($collections->count() === 0): ?>
                        <tr>
                            <td colspan="9"><b>Không có dữ liệu!!!</b></td>
                        </tr>
                        <?php endif; ?>
                        <?php
                            $i = 1;
                        ?>                        
                        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($cashplan->description, false); ?> &nbsp;&nbsp;&nbsp;
                                    <?php if($cashplan->document != ''): ?>
                                        <a style="color: #1b1464;" target="_blank" href="<?php echo e($pathdocument . $cashplan->document, false); ?>" title='Hình ảnh, hóa đơn, chứng từ ...'><i class="fa fa-paperclip" style="margin-right: 10px;"></i></a>
                                    <?php endif; ?> 
                                </td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($plantypes[$cashplan->plantype], false); ?></td>
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($cashplan->plandate == null ? "" : ConvertSQLDate($cashplan->plandate), false); ?></td>
                                <td style="text-align: center;" class="text-nowrap"><?php echo e(formatNumber($cashplan->currentage, 1, 0, 0), false); ?></td>
                                <td style="text-align: center;" class="text-nowrap"><?php echo e(formatNumber($cashplan->planage, 1, 0, 0), false); ?></td>
                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColor($cashplan->requireamount, 1, 0, 0); ?></td>
                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColor($cashplan->amount, 1, 0, 1); ?></td>
                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColor(($cashplan->requireamount-$cashplan->amount), 1, 0, 1); ?></td>
                                <td style="text-align: center;">
                                    <?php if($cashplan->finish == 1): ?>
                                        <b class="alert-danger text-nowrap"><?php echo e($accountstatustype[$cashplan->finish], false); ?></b>        
                                    <?php else: ?>
                                        <b class="alert-success text-nowrap"><?php echo e($accountstatustype[$cashplan->finish], false); ?></b>        
                                    <?php endif; ?> 
                                </td>
                                <td style="text-align: center;" class="text-nowrap">
                                    <a style="color: #1b1464;" href="<?php echo e(route('cashplans-analysis',['id'=> $cashplan->id]), false); ?>" title='Phân tích'><i class="fa fa-line-chart"></i></a> 
                                    <?php if($cashplan->finish != 1): ?>
                                        <a style="color: #1b1464;" href="javascript:void(0)" data-id="<?php echo e($cashplan->id, false); ?>" class="btn-delete" title='Xóa'><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <form name="form-delete-<?php echo e($cashplan->id, false); ?>" method="post" action="<?php echo e(route('cashplans-delete', ['id' => $cashplan->id ]), false); ?>">
                                                <?php echo e(csrf_field(), false); ?>

                                                <?php echo e(method_field('delete'), false); ?>

                                            </form>
                                    <?php endif; ?> 

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix text-right">
                <?php echo e($collections->links(), false); ?>

            </div>
            <p style="margin-left:5px;margin-top:0px;margin-bottom:10px;font-size:11pt;">
                <font color='#ff0000'><u>Một số lưu ý khi thao tác : </u></font><br>
                - Bạn có thể thiết lập, chỉnh sửa và xem lại các ví tài chính sau khi lập.<br>
                - Số dư hiện có trong ví tài chính sẽ mặc định được chuyển về ví tổng sau khi bạn thực hiện thao tác xóa ví tài chính.<br><br>
            </p>
        </div>
        <!-- /.box -->
    </div>
</div>

<a href="<?php echo e(route('cash-index'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>
  

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.cashplan.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>