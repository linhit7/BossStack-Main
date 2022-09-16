<?php $__env->startSection('head'); ?>

<style type="text/css">
    .personal-info-wrap .form-group .row{
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .personal-info-wrap .form-group .row .item:nth-child(2n-1){
        align-self: center;
    }

    .personal-info-wrap .form-group .row .item:nth-child(3){
        text-align: right;
    }

    #customer-form .btn-success.update{
        width: 15%;
    }

    @media  only screen and (max-width: 768px){
        .personal-info-wrap .form-group,
        .personal-info-wrap .form-group .row .item label{
            margin-bottom: 0;
        }

        .personal-info-wrap .form-group .row .item:nth-child(3){
            text-align: left;
        }

        .personal-info-wrap .form-group .row .item:nth-child(2n-1){
            margin-top: -15px;
        }

        .personal-info-wrap .form-group .row .item:nth-child(2n+2){
            margin-bottom: 15px;
        }

        .personal-info-wrap .form-group:last-child .row .item{
            margin-top: auto;
            align-self: normal;
        }

        .relationship .box-body{
            max-height: 300px;
            overflow: auto;
        }

        .relationship .box-body .table-relationship{
            width: 1000px;
        }

        #customer-form .btn-success.update{
            width: 30%;
        }
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('customers-updateCustomer', ['id' => $model->id]), false); ?>?continue=true" method="post" id="customer-form" enctype="multipart/form-data">
        <div class="col-md-12">
            <div class="box box-primary">
                <?php echo e(csrf_field(), false); ?>

                <?php echo e(method_field('put'), false); ?>


                <div class="box-body">

                    <div class="personal-info-wrap">
                        
                        <p class="text-primary" style="line-height: 2"><font size='3'><b>I. Thông tin cá nhân</b></font></p>
                                
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2 col-xs-5 item">
                                    <label>Họ & tên <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-7 col-xs-7 item">
                                    <input type="text" class="form-control" name="fullname" value="<?php echo e($model->fullname, false); ?>">
                                    <?php if($errors->has('fullname')): ?><span class="text-danger"><?php echo e($errors->first('fullname'), false); ?></span><?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2 col-xs-5 item">
                                    <label>Ngày sinh <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-3 col-xs-7 item">
                                    <input type='text' class="form-control" name="birthday" id='birthday' value="<?php echo e(ConvertSQLDate($model->birthday), false); ?>"/>
                                    <?php if($errors->has('birthday')): ?><span class="text-danger"><?php echo e($errors->first('birthday'), false); ?></span><?php endif; ?>
                                </div>
                                <div class="col-md-1 col-xs-5 item">
                                    <label>Giới tính <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-3 col-xs-7 item">
                                    <select class="form-control select2" name="gender">
                                        <option value=""></option>
                                        <?php $__currentLoopData = $gendertype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($key == $model->gender): ?>
                                                <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>                                                                    
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('gender')): ?><span class="text-danger"><?php echo e($errors->first('gender'), false); ?></span><?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2 col-xs-5 item">
                                    <label>Địa chỉ <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-7 col-xs-7 item">
                                    <input type="text" class="form-control" name="address" value="<?php echo e($model->address, false); ?>">
                                    <?php if($errors->has('address')): ?><span class="text-danger"><?php echo e($errors->first('address'), false); ?></span><?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2 col-xs-5 item">
                                    <label>Điện thoại <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-3 col-xs-7 item">
                                    <input type="text" class="form-control" tabindex="5" name="phone" value="<?php echo e($model->phone, false); ?>"> 
                                    <?php if($errors->has('phone')): ?><span class="text-danger"><?php echo e($errors->first('phone'), false); ?></span><?php endif; ?>
                                </div>
                                <div class="col-md-1 col-xs-5 item">
                                    <label>Email <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-3 col-xs-7 item">
                                    <input type="text" class="form-control" readonly name="email" value="<?php echo e($model->email, false); ?>">
                                    <?php if($errors->has('email')): ?><span class="text-danger"><?php echo e($errors->first('email'), false); ?></span><?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2 col-xs-5 item">
                                    <label>Người liên hệ khi cần:</label>
                                </div>
                                <div class="col-md-3 col-xs-7 item">
                                    <input type="text" class="form-control" tabindex="5" name="contactname" value="<?php echo e($model->contactname, false); ?>"> 
                                    <?php if($errors->has('contactname')): ?><span class="text-danger"><?php echo e($errors->first('contactname'), false); ?></span><?php endif; ?>
                                </div>
                                <div class="col-md-1 col-xs-5 item">
                                    <label>Điện thoại:</label>
                                </div>
                                <div class="col-md-3 col-xs-7 item">
                                    <input type="text" class="form-control" tabindex="5" name="contactphone" value="<?php echo e($model->contactphone, false); ?>"> 
                                    <?php if($errors->has('contactphone')): ?><span class="text-danger"><?php echo e($errors->first('contactphone'), false); ?></span><?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2 col-xs-5 item">
                                    <label>Nhóm khách hàng <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-7 col-xs-7 item">
                                    <select class="form-control select2" name="customertype">
                                        <option value=""></option>
                                        <?php $__currentLoopData = $customertype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($key == $model->customertype): ?>
                                                <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>                                                                    
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('customertype')): ?><span class="text-danger"><?php echo e($errors->first('customertype'), false); ?></span><?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2 col-xs-12 item">
                                    <label>Ảnh đại diện <small class="text-danger text"> (*)</small>:</label>
                                </div>
                                <div class="col-md-7 col-xs-12 item">
                                    <input type="hidden" name="avatar" value="<?php echo e($model->avatar, false); ?>">
                                    <div class="box-body">
                                        <div class="avatar-demo">
                                            <img src="<?php echo e(asset(empty($model->avatar) ? NO_IMAGE_URL : $model->avatar), false); ?>" class="img-circle" width="100%" height="100%" type="file" name="be_image" value="<?php echo e($model->avatar, false); ?>">
                                        </div>
                                        <input type="file" name="fImages" style="width: 100%">
                                        <p class="text-danger" style="margin-top: 10px;"><?php echo e('Lưu ý: Tải hình ảnh có kích thước 500 x 500 (px) và dung lượng hình dưới 2MB', false); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <p class="text-primary" style="line-height: 2"><font size='3'><b>II. Nguồn thông tin biết đến chương trình</b></font></p>
                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-2 col-xs-5" style="align-self: center;">
                                <label>Facebook:</label>
                            </div>
                            <div class="col-md-7 col-xs-7">
                                <input type="text" class="form-control" name="introduction_facebook" value="<?php echo e($model->introduction_facebook, false); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-2 col-xs-5" style="align-self: center;">
                                <label>Email:</label>
                            </div>
                            <div class="col-md-7 col-xs-7">
                                <input type="text" class="form-control" name="introduction_email" value="<?php echo e($model->introduction_email, false); ?>">
                                <?php if($errors->has('introduction_email')): ?><span class="text-danger"><?php echo e($errors->first('introduction_email'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-2 col-xs-5" style="align-self: center;">
                                <label>Giới thiệu:</label>
                            </div>
                            <div class="col-md-7 col-xs-7">
                                <input type="text" class="form-control" name="introduction_user" value="<?php echo e($model->introduction_user, false); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row" style="display: flex;">
                            <div class="col-md-2 col-xs-5" style="align-self: center;">
                                <label>Khác:</label>
                            </div>
                            <div class="col-md-7 col-xs-7">
                                <input type="text" class="form-control" name="introduction_orther" value="<?php echo e($model->introduction_orther, false); ?>">
                            </div>
                        </div>
                    </div>
                    
                    <p class="text-primary" style="line-height: 2"><font size='3'><b>III. Mối quan hệ</b></font></p>
                    <div class="form-group relationship">
                        <div class="row">
                            <div class="col-xs-12">
                                <div >
                                    <div class="box-header">
                                        <h3 class="box-title">&nbsp;</h3>
                                        <div class="box-tools" style="right: 0;">
                                            <div class="btn-group btn-group-sm">
                                                <a href="<?php echo e(route('customers-addFamilyRelationship'), false); ?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Thêm mối quan hệ</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <table class="table table-hover table-relationship">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;" class="text-nowrap" width="1%">STT</th>
                                                    <th style="text-align: center;" class="text-nowrap" width="15%">HỌ VÀ TÊN</th>
                                                    <th style="text-align: center;" class="text-nowrap">MỐI QUAN HỆ</th>
                                                    <th style="text-align: center;" class="text-nowrap">NGÀY SINH</th>
                                                    <th style="text-align: center;" class="text-nowrap">NGHỀ NGHIỆP</th>
                                                    <th style="text-align: center;" class="text-nowrap" width="10%">NGƯỜI PHỤ THUỘC</th>
                                                    <th style="text-align: center;" class="text-nowrap">NGÀY LẬP</th>
                                                    <th style="text-align: center;">CHỨC NĂNG</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if($listFamilyRelationship->count() === 0): ?>
                                                <tr>
                                                    <td colspan="7"><b>Không có dữ liệu !</b></td>
                                                </tr>
                                                <?php endif; ?>
                                                <?php
                                                    $i = 1;
                                                ?>                        
                                                <form name="form-delete-0" method="post" action="<?php echo e(route('customers-deleteFamilyRelationship', ['id' => 0 ]), false); ?>"></form>

                                                <?php $__currentLoopData = $listFamilyRelationship; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <tr>
                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($i++, false); ?></td>
                                                    <td style="text-align: left;" class="text-nowrap"><?php echo e($item->fullname, false); ?></td>
                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($relationshiptype[$item->relation], false); ?></td>
                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($item->birthday == null ? "" : ConvertSQLDate($item->birthday), false); ?></td>
                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($item->work, false); ?></td>
                                                    <td style="text-align: center;" class="text-nowrap">
                                                    <?php if($item->dependent == 1): ?>
                                                        <img src="<?php echo e(asset('image/check.gif'), false); ?>">        
                                                    <?php endif; ?>                                                        
                                                    </td>
                                                    <td style="text-align: center;" class="text-nowrap"><?php echo e($item->created_at == null ? "" : ConvertSQLDate($item->created_at), false); ?></td>
                                                    <td style="text-align: center;" class="text-nowrap">
                                                        <a style="color: #1b1464;" href="<?php echo e(route('customers-editFamilyRelationship',['id'=> $item->id]), false); ?>" title='Sửa'><i class="fas fa-pencil-alt" style="margin-right: 10px;"></i></a> 
                                                        <a style="color: #1b1464;" href="javascript:void(0)" data-id="<?php echo e($item->id, false); ?>" class="btn-delete" title='Xóa'><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                            <form name="form-delete-<?php echo e($item->id, false); ?>" method="post" action="<?php echo e(route('customers-deleteFamilyRelationship', ['id' => $item->id ]), false); ?>">
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
                                </div>
                            </div>
                        </div>
                    </div>   
                    
                </div>

            </div>
            
            <button type="submit" class="btn btn-success update">Cập nhật</button>
            <br><hr>
            <a href="<?php echo e(route('dashboard'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   
            
        </div>


                                                   
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.customer.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>