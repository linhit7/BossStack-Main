<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">DANH SÁCH ĐĂNG KÝ KHÓA HỌC</h3>
                <div class="box-tools">
                    <div class="btn-group btn-group-sm">
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;" class="text-nowrap" width="1%">STT</th>
                            <th style="text-align: center;" class="text-nowrap" width="20%">TÊN KHÁCH HÀNG</th>
                            <th style="text-align: center;" class="text-nowrap">EMAIL</th>
                            <th style="text-align: center;" class="text-nowrap">ĐIỆN THOẠI</th>
                            <th style="text-align: center;" class="text-nowrap">NGÀY ĐĂNG KÝ</th>
                            <th style="text-align: center;" class="text-nowrap">KHÓA HỌC</th>
                            <th style="text-align: center;" class="text-nowrap">TIÊU ĐỀ</th>
                            <th style="text-align: center;" class="text-nowrap">NỘI DUNG</th>
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
                        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="table-customer">
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($customer->fullname, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($customer->email, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($customer->phone, false); ?></td>
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($customer->registerdate == null ? "" : ConvertSQLDate($customer->registerdate), false); ?></td>
                                <td style="text-align: left;" class="text-nowrap">
                                  <?php echo e($coursetype[$customer->course], false); ?>        
                                </td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($customer->title, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($customer->content, false); ?></td>
                                <td style="text-align: center;" class="text-nowrap">
                                    <a href="javascript:void(0)" data-id="<?php echo e($customer->id, false); ?>" class="btn-delete" title='Xóa'><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <form name="form-delete-<?php echo e($customer->id, false); ?>" method="post" action="<?php echo e(route('report-delete', ['id' => $customer->id ]), false); ?>">
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

<a href="<?php echo e(route('dashboard'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.report.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>