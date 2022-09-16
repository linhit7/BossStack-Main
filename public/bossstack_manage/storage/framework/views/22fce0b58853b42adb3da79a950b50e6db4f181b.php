<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php echo $__env->make('company-manage.applicationresources.partials.search-form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Danh sách trang truy cập</h3>
                <div class="box-tools">
                    <a href="<?php echo e(route('applicationresources-add'), false); ?>" class="btn btn-default"><i class="fa fa-plus" aria-hidden="true"></i> Tạo mới</a>
                </div>
            </div>

            <div class="box-body no-padding">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%" style="text-align: center;">STT</th>
                            <th width="15%" style="text-align: center;">Mã trang truy cập</th>
                            <th width="25%" style="text-align: center;">Tên hiển thị menu</th>
                            <th width="20%" style="text-align: center;">File name</th>
                            <th width="15%" style="text-align: center;">Prefix</th>
                            <th width="10%" style="text-align: center;">Phân quyền</th>
                            <th style="text-align: center;">Thao tác</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if($collections->count() === 0): ?>
                            <tr>
                                <td colspan="8"><b>Không có dữ liệu</b></td>
                            </tr>
                        <?php endif; ?>
                        <?php
                            $i = 1
                        ?>
                        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="text-align: center;"><?php echo e($i++, false); ?></td>
                                <td style="text-align: left;"><?php echo e($model->code, false); ?></td>
                                <td style="text-align: left;"><?php echo e($model->name, false); ?></td>
                                <td style="text-align: left;"><?php echo e($model->filename, false); ?></td>
                                <td style="text-align: left;"><?php echo e($model->prefix, false); ?></td>
                                <td style="text-align: center;"><a href="<?php echo e(route('securityresources-index', ['applicationresourceid'=>$model->code]), false); ?>">Phân quyền</a></td>
                                <td style="text-align: center;">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Thao tác <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="<?php echo e(route('applicationresources-edit', ['id'=> $model->id]), false); ?>"><i class="fas fa-pencil-alt" style="margin-right: 10px;"></i> Chỉnh sửa</a></li>
                                            <li><a href="javascript:void(0)" data-id="<?php echo e($model->id, false); ?>" class="btn-delete"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                                <form style="margin: 0;" name="form-delete-<?php echo e($model->id, false); ?>" method="post" action="<?php echo e(route('applicationresources-delete', ['id' => $model->id]), false); ?>">
                                                    <?php echo e(csrf_field(), false); ?>

                                                    <?php echo e(method_field('delete'), false); ?>

                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix text-right">
                <?php echo e($collections->appends(array('searchprefix'=>$searchprefix,'searchfilename'=>$searchfilename))->links(), false); ?>                
            </div>
        </div>
    </div>
</div>

<p style="margin-left:3px;font-size:11pt;">Để cập nhật thêm trang truy cập từ các route mới bổ sung, nhấn nút <b>Cập nhật thêm trang truy cập từ các route mới bổ sung</b> để thêm mới tự động các route mới chưa có trong danh sách trang truy cập.</p>
<form role="form" action="<?php echo e(route('applicationresources-getApplicationResources'), false); ?>?index=true" method="post" name="frm" id="frm">
<?php echo e(csrf_field(), false); ?>

<input type='hidden' name='typereport' value=''>
<button class="btn btn-success" style="width: 35%;" onclick="processReports('frm', 'getApplicationResources')">Cập nhật thêm trang truy cập từ các route mới bổ sung</button>&nbsp;&nbsp;
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('company-manage.applicationresources.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>