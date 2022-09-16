<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<?php if(session()->has('errors')): ?>
    <?php echo $__env->make('layouts.partials.messages.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php echo $__env->make('product-manage.coupon.partials.search-form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?php echo e(('Danh sách mã giảm giá'), false); ?></h3>
                <div class="box-tools">
                    <div class="btn-group btn-group-sm">
                        <a href="<?php echo e(route('coupons-add'), false); ?>" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> <?php echo e(('Tạo mới'), false); ?></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;" class="text-nowrap" width="2.5%"><?php echo e(('STT'), false); ?></th>
                            <th style="text-align: center;" class="text-nowrap" width="10%"><?php echo e(('Loại'), false); ?></th>
                            <th style="text-align: center;" class="text-nowrap" width="10%"><?php echo e(('Mã giảm giá'), false); ?></th>
                            <th style="text-align: center;" class="text-nowrap" width="10%"><?php echo e(('% giảm giá'), false); ?></th>
                            <th style="text-align: center;" class="text-nowrap" width="17%"><?php echo e(('Số lượng'), false); ?></th>
                            <th style="text-align: center;" class="text-nowrap" width="15%"><?php echo e(('Ghi chú'), false); ?></th>
                            <th style="text-align: center;" class="text-nowrap" width="13%"><?php echo e(('Trạng thái'), false); ?></th>
                            <th style="text-align: center;" class="text-nowrap" width="10%"><?php echo e(('Gửi mail'), false); ?></th>
                            <th style="text-align: center;" class="text-nowrap"><?php echo e(('Chức năng'), false); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($collections->count() === 0): ?>
                        <tr>
                            <td colspan="9"><b><?php echo e(('Không có dữ liệu'), false); ?>!!!</b></td>
                        </tr>
                        <?php endif; ?>
                        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="table-customer">
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($coupon->id, false); ?></td>
                                <td class="text-nowrap"><?php echo e($coupontypes[$coupon->typecoupon], false); ?></td>
                                <td class="text-nowrap"><?php echo e($coupon->key, false); ?></td>
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($coupon->percent, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap">- Tổng: <?php echo e($coupon->quantity, false); ?> <br> - Đã sử dụng: <?php echo e(($coupon->quantity-$coupon->quantitied), false); ?> <br> - Chưa sử dụng: <?php echo e(($coupon->quantitied), false); ?></td>
                                <td class="text-nowrap"><?php echo e($coupon->description, false); ?></td>
                                <td style="text-align: center;" class="text-nowrap">
                                    <?php if($coupon->status == 1): ?>
                                        <b class="btn-success"><?php echo e($couponstatus[$coupon->status], false); ?></b>
                                    <?php elseif($coupon->status == 2): ?>
                                        <b class="btn-danger"><?php echo e($couponstatus[$coupon->status], false); ?></b>
                                    <?php else: ?>
                                        <b class="btn-info"><?php echo e($couponstatus[$coupon->status], false); ?></b>
                                    <?php endif; ?>
                                </td>
                                <td style="text-align: center;" class="text-nowrap">
                                    <?php if($coupon->quantitied > 0): ?>
                                        <a href="<?php echo e(route('coupons-mail',['id'=> $coupon->id]), false); ?>" title='Gửi mail mã coupon'><i class="fa fa-envelope" style="margin-right: 10px;"></i></a>
                                    <?php endif; ?>                                        
                                </td>
                                <td style="text-align: center;" class="text-nowrap">
                                    <div class="btn-group">
                                        <a href="<?php echo e(route('coupons-edit',['id'=> $coupon->id]), false); ?>" title='Sửa'><i class="fas fa-pencil-alt" style="margin-right: 10px;"></i></a>
                                        <a href="javascript:void(0)" data-id="<?php echo e($coupon->id, false); ?>" title='Xóa' class="btn-delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <form name="form-delete-<?php echo e($coupon->id, false); ?>" method="post" action="<?php echo e(route('coupons-delete', ['id' => $coupon->id ]), false); ?>">
                                                <?php echo e(csrf_field(), false); ?>

                                                <?php echo e(method_field('delete'), false); ?>

                                            </form>
                                    </div>
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
<script>
    $(function() {
        $('.btn-delete').click(function(){
            var id = $(this).data('id');
            swal({
                title: "<?php echo e(trans('home.Bạn có chắc không?'), false); ?>",
                text: "<?php echo e(trans('home.Nội dung xóa sẽ được đưa vào thùng rác'), false); ?>",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((value) => {
                console.log(value);
                if(value) {
                    document.forms['form-delete-'+id].submit();
                }
            });
        });
        
        <?php if(!empty($filter['searchFields'])): ?>
        $('#searchFields').val('<?php echo e($filter['searchFields'], false); ?>').trigger('change');
        <?php endif; ?>
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>