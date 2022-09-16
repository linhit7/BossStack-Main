<?php $__env->startSection('head'); ?>
<style type="text/css">
    
    @media  only screen and (max-width: 768px){
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

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-home" aria-hidden="true"></i> / <?php echo e($title->sub_heading, false); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;" class="text-nowrap" width="1%">STT</th>
                            <th style="text-align: center;" class="text-nowrap">MÃ ĐƠN HÀNG</th>
                            <th style="text-align: center;" class="text-nowrap">TÊN DỊCH VỤ</th>
                            <th style="text-align: center;" class="text-nowrap">THỜI GIAN TẠO</th>
                            <th style="text-align: center;" class="text-nowrap">THANH TOÁN</th>
                            <th style="text-align: center;" class="text-nowrap">TÌNH TRẠNG</th>
                            <th style="text-align: center;" width="10%">THAO TÁC</th>
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
                        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contract): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="table-contract">
                                <td style="text-align: center; vertical-align: middle;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                <td style="text-align: left; vertical-align: middle;" class="text-nowrap"><?php echo e($contract->contractno, false); ?></td>
                                <td style="text-align: left; vertical-align: middle;" class="text-nowrap">
                                        - <b>Gói</b>: <?php echo e($contract->service_product_name, false); ?> (<?php echo e(formatNumber($contract->service_product_price, 1, 0, 1), false); ?> đồng/tháng)<br>        
                                        - <b>Thời hạn</b>: <?php echo e(formatNumber($contract->term, 1, 0, 1), false); ?> tháng, giảm <?php echo e(formatNumber($contract->discount, 1, 0, 1), false); ?> %<br>
                                        - <b>Số tiền</b>: <?php echo e(formatNumber($contract->amount, 1, 0, 1), false); ?> đồng<br>
                                        - <b>Thời hạn từ</b>: <?php echo e($contract->contractdate == null ? "" : ConvertSQLDate($contract->contractdate), false); ?> - <?php echo e(($contract->lastcontractdate == null or $contract->contractdate == $contract->lastcontractdate) ? "Không thời hạn" : ConvertSQLDate($contract->lastcontractdate), false); ?><br>
                                </td>
                                <td style="text-align: center; vertical-align: middle;" class="text-nowrap"><?php echo e($contract->created_at == null ? "" : ConvertSQLDate($contract->created_at, 1), false); ?></b></td>
                                <td style="text-align: center; vertical-align: middle;" class="text-nowrap">
                                    <?php if($contract->service_product_price != 0): ?>
                                        <?php if($contract->payment == null or $contract->payment == '0'): ?>
                                            <b class="alert-danger"><?php echo e($paymenttype[0], false); ?></b>        
                                        <?php elseif($contract->payment == '1'): ?>
                                            <b class="alert-success"><?php echo e($paymenttype[1], false); ?></b>        
                                        <?php endif; ?>  
                                    <?php endif; ?> 
                                </td>
                                <td style="text-align: center; vertical-align: middle;" class="text-nowrap">
                                    <?php if($contract->contractstatustype == 1): ?>
                                        <b class="alert-warning"><?php echo e($contractstatustype[$contract->contractstatustype], false); ?></b>        
                                    <?php elseif($contract->contractstatustype == 2): ?>
                                        <b class="alert-success"><?php echo e($contractstatustype[$contract->contractstatustype], false); ?></b>        
                                    <?php else: ?> 
                                        <b class="alert-danger"><?php echo e($contractstatustype[$contract->contractstatustype], false); ?></b>        
                                    <?php endif; ?> 
                                </td>
                                <td style="text-align: center; vertical-align: middle;" class="text-nowrap">
                                    <a style="color: #1b1464;" href="<?php echo e(route('contracts-detailContract',['id'=> $contract->id]), false); ?>" title='Xem chi tiết'><i class="fa fa-bars" style="margin-right: 10px;"></i></a> 
                                    <?php if($contract->approvestatustype != 'A'): ?>
                                        <a style="color: #1b1464;" href="javascript:void(0)" data-id="<?php echo e($contract->id, false); ?>" class="btn-delete" title='Xóa'><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <form name="form-delete-<?php echo e($contract->id, false); ?>" method="post" action="<?php echo e(route('contracts-deleteContract', ['id' => $contract->id ]), false); ?>">
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
        </div>
        <!-- /.box -->
    </div>
</div>

<hr>
<a href="<?php echo e(route('dashboard'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.contract.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>