<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">

<style type="text/css">
    @media  only screen and (max-width: 768px){
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
    <?php if(isset($checkError) and $checkError == 1): ?>
        <?php echo $__env->make('layouts.partials.messages.warning', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('layouts.partials.messages.infor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>    
    <?php endif; ?>
<?php endif; ?>
<?php echo $__env->make('product-manage.cashincome.partials.search-form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>
                <div class="box-tools" style="right: 0;">
                    <div class="btn-group btn-group-sm">
                        <a href="<?php echo e(route('cashtranfers-add'), false); ?>" class="btn btn-primary"><i class="fa fa-refresh" aria-hidden="true"></i> Chuyển tiền</a>
                        <a href="<?php echo e(route('cashincomes-process', ['incomestatustype' => 0]), false); ?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thu nhập</a>
                        <a href="<?php echo e(route('cashincomes-process', ['incomestatustype' => 1]), false); ?>" class="btn btn-danger"><i class="fa fa-plus" aria-hidden="true"></i> Chi phí</a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <font style="font-weight: bold;font-size:12pt;">&nbsp;Số dư ví tổng: &nbsp;<?php echo formatNumberColorCustom($cashaccount_amount, 1, 0, 0, 0); ?></font><br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" rowspan='2' class="text-nowrap" width="1%">STT</th>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" rowspan='2' class="text-nowrap" width="15%">LOẠI</th>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" rowspan='2' class="text-nowrap" width="15%">CHI TIẾT</th>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" rowspan='2' class="text-nowrap" width="15%">NỘI DUNG</th>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" rowspan='2' class="text-nowrap" width="15%">NGÀY</th>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" colspan='2' class="text-nowrap" width="30%">SỐ TIỀN</th>
                            <th style="text-align: center;vertical-align: middle; color: #2d3194;" rowspan='2' class="text-nowrap" width="9%">CHỨC NĂNG</th>
                        </tr>
                        <tr>
                            <th style="text-align: center; color: #2d3194;" class="text-nowrap" width="15%">THU NHẬP</th>
                            <th style="text-align: center; color: #2d3194;" class="text-nowrap" width="15%">CHI PHÍ</th>
                        </tr>                        
                    </thead>
                    <tbody>
                        <?php if($collections->count() === 0): ?>
                        <tr>
                            <td colspan="8"><b>Không có dữ liệu!!!</b></td>
                        </tr>
                        <?php endif; ?>
                        <?php
                            $i = 1;
                            $total_income = 0; $total_expense = 0;
                        ?>                        
                        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cashincome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                if($cashincome->incomestatustype == 0){
                                    $total_income += $cashincome->amount;
                                }elseif($cashincome->incomestatustype == 1){
                                    $total_expense += $cashincome->amount;
                                }elseif($cashincome->incomestatustype == 2){
                                    $total_expense += $cashincome->amount;
                                } 
                            ?>                         
                            <tr class="table-cashincome">
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($cashincome->config_types_name, false); ?> &nbsp;&nbsp;&nbsp;
                                <?php if($cashincome->document != ''): ?>
                                    <a target="_blank" href="<?php echo e($pathdocument . $cashincome->document, false); ?>" title='Hình ảnh, hóa đơn, chứng từ ...'><i class="fa fa-paperclip"></i></a>
                                <?php endif; ?> 
                                </td>                                
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($cashincome->config_type_details_name, false); ?></td>
                                <td style="text-align: left;" class="text-nowrap"><?php echo e($cashincome->assetname, false); ?></td>
                                <td style="text-align: center;" class="text-nowrap"><?php echo e($cashincome->incomedate == null ? "" : ConvertSQLDate($cashincome->incomedate), false); ?></td>
                                <?php if($cashincome->incomestatustype == 0): ?>
                                    <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($cashincome->amount, 1, 0, 0, 0); ?></td>
                                    <td style="text-align: right;" class="text-nowrap"></td>
                                <?php elseif($cashincome->incomestatustype == 1 or $cashincome->incomestatustype == 2): ?>
                                    <td style="text-align: right;" class="text-nowrap"></td>
                                    <td style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($cashincome->amount, 1, 0, 0, 1); ?></td>
                                <?php endif; ?> 
                                <td style="text-align: center;" class="text-nowrap">
                                    <a style="color: #1b1464;" href="<?php echo e(route('cashincomes-edit',['id'=> $cashincome->id]), false); ?>" title='Sửa'><i class="fas fa-pencil-alt" style="margin-right: 10px;"></i></a> 
                                    <a style="color: #1b1464;" href="javascript:void(0)" data-id="<?php echo e($cashincome->id, false); ?>" class="btn-delete" title='Xóa'><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        <form name="form-delete-<?php echo e($cashincome->id, false); ?>" method="post" action="<?php echo e(route('cashincomes-delete', ['id' => $cashincome->id ]), false); ?>">
                                            <?php echo e(csrf_field(), false); ?>

                                            <?php echo e(method_field('delete'), false); ?>

                                        </form>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th style="text-align: left; border-left: 1px solid #a6a6a6;" colspan='5' class="text-nowrap">TỔNG CỘNG</th>
                            <th style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($total_income, 1, 0, 0, 0); ?></th>
                            <th style="text-align: right;" class="text-nowrap"><?php echo formatNumberColorCustom($total_expense, 1, 0, 0, 1); ?></th>
                            <th style="text-align: left; border-left: 1px solid #a6a6a6;" class="text-nowrap"></th>
                        </tr>                          
                        
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
<?php echo $__env->make('product-manage.cashincome.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>