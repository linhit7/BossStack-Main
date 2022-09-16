<?php $__env->startSection('content'); ?>
<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php echo $__env->make('product-manage.contract.partials.search-form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">DANH SÁCH</h3>

                <div class="box-tools">
                    <div class="btn-group btn-group-sm">
                        <a href="javascript:processReports('frm', '1')" class="btn btn-warning"><i class="fa fa-file-text" aria-hidden="true"></i> Mới mở</a>
                        <a href="javascript:processReports('frm', '2')" class="btn btn-success"><i class="fa fa-hdd-o" aria-hidden="true"></i> Hoạt động</a>
                        <a href="javascript:processReports('frm', '3')" class="btn btn-danger"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tất toán</a>
                    </div>
                </div>


            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;" class="text-nowrap" width="1%">STT</th>
                            <th style="text-align: center;" class="text-nowrap" width="15%">TÊN KHÁCH HÀNG</th>
                            <th style="text-align: center;" class="text-nowrap">MÃ ĐƠN HÀNG</th>
                            <th style="text-align: center;" class="text-nowrap">TÊN DỊCH VỤ</th>
                            <th style="text-align: center;" class="text-nowrap">THỜI GIAN TẠO</th>
                            <th style="text-align: center;" class="text-nowrap">TÌNH TRẠNG</th>
                            <th style="text-align: center;" class="text-nowrap">PHÊ DUYỆT</th>
                            <th style="text-align: center;" width="10%">CHỨC NĂNG</th>
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
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($contract->fullname, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($contract->contractno, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap">
                                        - Gói: <?php echo e($contract->service_product_name, false); ?><br>        
                                        - Giá: <?php echo e(formatNumber($contract->service_product_price, 1, 0, 1), false); ?> đồng<br>
                                        - Thời hạn từ: <?php echo e($contract->contractdate == null ? "" : ConvertSQLDate($contract->contractdate), false); ?> - <?php echo e($contract->lastcontractdate == null ? "" : ConvertSQLDate($contract->lastcontractdate), false); ?><br>
                                        <?php if($contract->service_product_price == 0): ?>
                                        - Thanh toán: Gói miễn phí<br>
                                        <?php else: ?> 
                                        - Thanh toán: <?php echo e($paymenttype[$contract->payment == null ? "0" : $contract->payment], false); ?><br>        
                                        <?php endif; ?> 
                                </td>
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($contract->created_at == null ? "" : ConvertSQLDate($contract->created_at, 1), false); ?></td>
                                <td style="text-align: center;" class="text-nowrap">
                                    <?php if($contract->contractstatustype == 1): ?>
                                        <b class="alert-warning"><?php echo e($contractstatustype[$contract->contractstatustype], false); ?></b>        
                                    <?php elseif($contract->contractstatustype == 2): ?>
                                        <b class="alert-success"><?php echo e($contractstatustype[$contract->contractstatustype], false); ?></b>        
                                    <?php elseif($contract->contractstatustype == 3): ?> 
                                        <b class="alert-danger"><?php echo e($contractstatustype[$contract->contractstatustype], false); ?></b>        
                                    <?php endif; ?> 
                                </td>
                                <td style="text-align: center;" class="text-nowrap">
                                    <?php if($contract->approvestatustype == 'P'): ?>
                                        <b class="alert-warning"><?php echo e($approvestatustype[$contract->approvestatustype], false); ?></b>        
                                    <?php elseif($contract->approvestatustype == 'A'): ?>
                                        <b class="alert-success"><?php echo e($approvestatustype[$contract->approvestatustype], false); ?></b>        
                                    <?php elseif($contract->approvestatustype == 'R'): ?> 
                                        <b class="alert-danger"><?php echo e($approvestatustype[$contract->approvestatustype], false); ?></b>        
                                    <?php endif; ?> 
                                </td>
                                <td style="text-align: center;" class="text-nowrap">
                                    <a href="<?php echo e(route('contracts-edit',['id'=> $contract->id]), false); ?>" title='Sửa'><i class="fas fa-pencil-alt" style="margin-right: 10px;"></i></a> 
                                    <a href="javascript:void(0)" data-id="<?php echo e($contract->id, false); ?>" class="btn-delete" title='Xóa'><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <form name="form-delete-<?php echo e($contract->id, false); ?>" method="post" action="<?php echo e(route('contracts-delete', ['id' => $contract->id ]), false); ?>">
                                            <?php echo e(csrf_field(), false); ?>

                                            <?php echo e(method_field('delete'), false); ?>

                                        </form>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.contract.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>