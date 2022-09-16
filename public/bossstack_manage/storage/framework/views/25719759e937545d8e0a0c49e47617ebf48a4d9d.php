<?php $__env->startSection('head'); ?>
<style type="text/css">
    .box.cashaccount .box-body{
        padding: 15px 35px; 
        background: #eeeeee; 
        border: 1px solid #b7b7b7;
    }

    .box-body > .table {
        font-size: 14px;
    }

    .box-body > .table thead{
        border-top: none;
    }

    .box-body > .table thead tr th{
        border-bottom-color: #b7b7b7;
    }

    .box-body > .table tbody tr td{
        border-top-color: #b7b7b7;
    }

    @media  only screen and (max-width: 768px){
        .box.cashaccount .box-body{
            padding: 0;
            background: transparent; 
            border: none;
        }

        .box-body{
            overflow-x: auto;
        }

        .box-body > .table {
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
            <div class="box-header with-border">
                <h3 class="box-title">DANH SÁCH CÁC VÍ TIỀN</h3>
            </div>
            <div class="box-header">
                <h3 class="box-title"></h3>
                <div class="box-tools" style="right: 0;">
                    <div class="btn-group btn-group-sm">
                        <a href="<?php echo e(route('cashtranfers-add'), false); ?>" class="btn btn-success" style="color: #fff;"><i class="fa fa-refresh" aria-hidden="true"></i> Chuyển tiền</a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;" class="text-nowrap" width="1%">STT</th>
                            <th style="text-align: center;" class="text-nowrap" width="15%">SỐ VÍ TIỀN</th>
                            <th style="text-align: center;" class="text-nowrap">TÊN VÍ MỤC TIÊU</th>
                            <th style="text-align: center;" class="text-nowrap">SỐ DƯ</th>
                            <th style="text-align: center;" class="text-nowrap" width="4%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($collections->count() === 0): ?>
                        <tr>
                            <td colspan="7"><b>Không có dữ liệu!!!</b></td>
                        </tr>
                        <?php endif; ?>
                        <?php
                            $i = 1
                        ?>                        
                        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashaccount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="table-cashaccount">
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($cashaccount->accountno, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($cashaccount->accountname, false); ?></td>
                                <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColor($cashaccount->amount, 1, 0, 1); ?></td>
                                <td style="text-align: center;" class="text-nowrap">
                                    <a href="<?php echo e(route('cashaccounts-viewAccount',['id'=> $cashaccount->id]), false); ?>" title='Xem'><i class="far fa-file"></i></a> 
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
        </div>
        <!-- /.box -->
    </div>
</div>

<a href="<?php echo e(route('cash-index'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.cashaccount.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>