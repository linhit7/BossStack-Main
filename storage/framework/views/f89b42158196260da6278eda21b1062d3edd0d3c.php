<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php echo $__env->make('product-manage.customer.partials.search-form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">DANH SÁCH</h3>
                <div class="box-tools">
                    <div class="btn-group btn-group-sm">
                        <a href="<?php echo e(route('customers-add'), false); ?>" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Tạo mới</a>
                        <a class="btn btn-default" href="<?php echo e(route('customers-export'), false); ?>"><i class="fa fa-download"></i> Xuất excel</a>
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
                            <th style="text-align: center;" class="text-nowrap">TUỔI</th>
                            <th style="text-align: center;" class="text-nowrap">EMAIL</th>
                            <th style="text-align: center;" class="text-nowrap">ĐIỆN THOẠI</th>
                            <th style="text-align: center;" class="text-nowrap">NGÀY <br> ĐĂNG KÝ</th>
                            <th style="text-align: center;" class="text-nowrap">SẢN PHẨM <br> ĐĂNG KÝ</th>
                            <th style="text-align: center;" class="text-nowrap">TÌNH TRẠNG</th>
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
                                <td style="text-align: center;" class="text-nowrap"><?php echo e((Carbon\Carbon::now()->year) - (substr($customer->birthday, 0, 4)), false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($customer->email, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($customer->phone, false); ?></td>
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($customer->created_at == null ? "" : ConvertSQLDate($customer->created_at, 1), false); ?></td>
                                <td style="text-align: left;" class="text-nowrap">
                                    <b><?php echo e($customer->userCustomer()->first() == null ? '' : $serviceproduct->find($customer->userCustomer()->first()->service_product_id)->name, false); ?></b><br/>
                                    <?php if($customer->userCustomer()->first() != null and $customer->userCustomer()->first()->service_product_id != 4): ?>
                                    Thời hạn từ: <br><font size='2'><?php echo e($customer->userCustomer()->first() == null ? '' : ConvertSQLDate($customer->userCustomer()->first()->begin_at_product), false); ?> - <?php echo e($customer->userCustomer()->first() == null ? '' : ConvertSQLDate($customer->userCustomer()->first()->finish_at_product), false); ?></font>
                                    <?php endif; ?> 
                                </td>
                                <td style="text-align: center;" class="text-nowrap">
                                      <?php if($customer->customerstatustype == 1): ?>
                                            <b class="alert-warning"><?php echo e(mb_strtoupper($customerstatustype[$customer->customerstatustype]), false); ?></b>        
                                        <?php elseif($customer->customerstatustype == 2): ?>
                                            <b class="alert-success"><?php echo e(mb_strtoupper($customerstatustype[$customer->customerstatustype]), false); ?></b>        
                                        <?php else: ?> 
                                            <b class="alert-danger"><?php echo e(mb_strtoupper($customerstatustype[$customer->customerstatustype]), false); ?></b>        
                                        <?php endif; ?>                                 
                                </td>
                                <td style="text-align: center;" class="text-nowrap">
                                    <a href="<?php echo e(route('customers-edit',['id'=> $customer->id]), false); ?>" title='Sửa'><i class="fas fa-pencil-alt" style="margin-right: 10px;"></i></a> 
                                    <a href="javascript:void(0)" data-id="<?php echo e($customer->id, false); ?>" class="btn-delete" title='Xóa'><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <form name="form-delete-<?php echo e($customer->id, false); ?>" method="post" action="<?php echo e(route('customers-delete', ['id' => $customer->id ]), false); ?>">
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
<?php echo $__env->make('product-manage.customer.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>