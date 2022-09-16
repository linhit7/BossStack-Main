<?php $__env->startSection('head'); ?>
<style type="text/css">
    
    @media  only screen and (max-width: 768px){
        .box .box-body table tbody tr td{
            vertical-align: middle;
        }

        .pagination > li > a, 
        .pagination > li > span{
            padding: 5px 7px;
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
            <div class="box-body no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;" class="text-nowrap" width="5%">STT</th>
                            <th style="text-align: center;" class="text-nowrap" width="25%">Tên truy cập</th>
                            <th style="text-align: center;" class="text-nowrap" width="40%">Nội dung</th>
                            <th style="text-align: center;" class="text-nowrap">Thời gian</th>
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
                        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($item->description, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($item->logresult, false); ?></td>
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($item->created_at == null ? "" : ConvertSQLDate($item->created_at, 1), false); ?></td>
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
            <a href="<?php echo e(route('dashboard'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>        
        <!-- /.box -->
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>