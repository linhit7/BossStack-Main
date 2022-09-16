<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<div class="row">
    <form role="form" action="<?php echo e(route('customers-update', ['id' => $model->id]), false); ?>?continue=true" method="post" id="customer-form">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">THÔNG TIN TÀI KHOẢN</h3><br><br>
                    <h4 class="box-title"><font color='#000080'>Chỉnh sửa</font></h4>
                </div>
                <?php echo e(csrf_field(), false); ?>

                <?php echo e(method_field('put'), false); ?>


                <div class="box-body">
                    <div class="form-group">
                        <label><h5><u>I. THÔNG TIN CÁ NHÂN:</u></h5></label>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>MÃ KHÁCH HÀNG <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="customercode" value="<?php echo e($model->customercode, false); ?>">
                                <?php if($errors->has('customercode')): ?><span class="text-danger"><?php echo e($errors->first('customercode'), false); ?></span><?php endif; ?>
                            </div>
                            <div class="col-md-2 text-red text-right">
                                <label><u>TÀI KHOẢN ĐĂNG NHẬP</u> <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control select2" name="user_id">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $usersLogin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item->id == $model->user_id): ?>
                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->email, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->email, false); ?></option>                                                                    
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('user_id')): ?><span class="text-danger"><?php echo e($errors->first('user_id'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Họ & tên <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="fullname" value="<?php echo e($model->fullname, false); ?>">
                                <?php if($errors->has('fullname')): ?><span class="text-danger"><?php echo e($errors->first('fullname'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Ngày sinh <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-2">
                                <input type='text' class="form-control" name="birthday" id='birthday' value="<?php echo e(ConvertSQLDate($model->birthday), false); ?>"/>
                                <?php if($errors->has('birthday')): ?><span class="text-danger"><?php echo e($errors->first('birthday'), false); ?></span><?php endif; ?>
                            </div>
                            <div class="col-md-2 text-right">
                                <label>Giới tính <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-2">
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
                            <div class="col-md-2">
                                <label>Địa chỉ <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="address" value="<?php echo e($model->address, false); ?>">
                                <?php if($errors->has('address')): ?><span class="text-danger"><?php echo e($errors->first('address'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Điện thoại <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" tabindex="5" name="phone" value="<?php echo e($model->phone, false); ?>"> 
                                <?php if($errors->has('phone')): ?><span class="text-danger"><?php echo e($errors->first('phone'), false); ?></span><?php endif; ?>
                            </div>
                            <div class="col-md-1  text-right">
                                <label>Email <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="email" value="<?php echo e($model->email, false); ?>">
                                <?php if($errors->has('email')): ?><span class="text-danger"><?php echo e($errors->first('email'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Người liên hệ khi cần:</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" tabindex="5" name="contactname" value="<?php echo e($model->contactname, false); ?>"> 
                                <?php if($errors->has('contactname')): ?><span class="text-danger"><?php echo e($errors->first('contactname'), false); ?></span><?php endif; ?>
                            </div>
                            <div class="col-md-1 text-right">
                                <label>Điện thoại:</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" tabindex="5" name="contactphone" value="<?php echo e($model->contactphone, false); ?>"> 
                                <?php if($errors->has('contactphone')): ?><span class="text-danger"><?php echo e($errors->first('contactphone'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Nhóm khách hàng <small class="text-danger text"> (*)</small>:</label>
                            </div>
                            <div class="col-md-3">
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
                    
                    <hr>
                    <div class="form-group">
                        <label><h5><u>II. NGUỒN THÔNG TIN BIẾT ĐẾN CHƯƠNG TRÌNH:</u></h5></label>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Facebook:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="introduction_facebook" value="<?php echo e($model->introduction_facebook, false); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Email:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="introduction_email" value="<?php echo e($model->introduction_email, false); ?>">
                                <?php if($errors->has('introduction_email')): ?><span class="text-danger"><?php echo e($errors->first('introduction_email'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Giới thiệu:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="introduction_user" value="<?php echo e($model->introduction_user, false); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Khác:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="introduction_orther" value="<?php echo e($model->introduction_orther, false); ?>">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <label><h5><u>III. MỐI QUAN HỆ:</u></h5></label>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Họ tên cha:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="fathername" value="<?php echo e($model->fathername, false); ?>">
                            </div>
                            <div class="col-md-1">
                                <label>Ngày sinh:</label>
                            </div>
                            <div class="col-md-2">
                                <input type='text' class="form-control" name="fatherbirthday" id='fatherbirthday' value="<?php echo e(ConvertSQLDate($model->fatherbirthday), false); ?>"/>
                            </div>
                            <div class="col-md-1">
                                <label>Nghề nghiệp:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="fatherwork" value="<?php echo e($model->fatherwork, false); ?>">
                            </div>
                            <div class="col-md-1">
                                <label>Người phụ thuộc: </label>
                            </div>
                            <div class="col-md-1">
                                <input type="checkbox" tabindex="4" name="fatherdependentperson" value="1" id="chk-fatherdependentperson" <?php echo e($model->fatherdependentperson==1 ? 'checked="checked"' : '', false); ?>>
                            </div>
                        </div>
                    </div>   
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Họ tên mẹ:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="mothername" value="<?php echo e($model->mothername, false); ?>">
                            </div>
                            <div class="col-md-1">
                                <label>Ngày sinh:</label>
                            </div>
                            <div class="col-md-2">
                                <input type='text' class="form-control" name="motherbirthday" id='motherbirthday' value="<?php echo e(ConvertSQLDate($model->motherbirthday), false); ?>"/>
                            </div>
                            <div class="col-md-1">
                                <label>Nghề nghiệp:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="motherwork" value="<?php echo e($model->motherwork, false); ?>">
                            </div>
                            <div class="col-md-1">
                                <label>Người phụ thuộc: </label>
                            </div>
                            <div class="col-md-1">
                                <input type="checkbox" tabindex="4" name="motherdependentperson" value="1" id="chk-motherdependentperson" <?php echo e($model->motherdependentperson==1 ? 'checked="checked"' : '', false); ?>>
                            </div>
                        </div>
                    </div>   
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Họ tên vợ/chồng:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="familyname" value="<?php echo e($model->familyname, false); ?>">
                            </div>
                            <div class="col-md-1">
                                <label>Ngày sinh:</label>
                            </div>
                            <div class="col-md-2">
                                <input type='text' class="form-control" name="familybirthday" id='familybirthday' value="<?php echo e(ConvertSQLDate($model->familybirthday), false); ?>"/>
                            </div>
                            <div class="col-md-1">
                                <label>Nghề nghiệp:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="familywork" value="<?php echo e($model->familywork, false); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Con cái:</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="childrenname" value="<?php echo e($model->childrenname, false); ?>">
                            </div>
                        </div>
                    </div>
                </div>

                    <hr>
                    <div class="form-group">
                        <label><h5><u>THÔNG TIN PHÊ DUYỆT:</u></h5></label>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Tình trạng khách hàng :</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control select2" name="customerstatustype">
                                    <?php $__currentLoopData = $customerstatustype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key == $model->customerstatustype): ?>
                                            <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>                                                                    
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('customerstatustype')): ?><span class="text-danger"><?php echo e($errors->first('customerstatustype'), false); ?></span><?php endif; ?>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                                <label>Nhân viên kinh doanh:</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control select2" name="officer_user_id">                        
                                    <option value=""></option>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $item->id == $model->officer_user_id ): ?>
                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->name, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->name, false); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Trạng thái duyệt:</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control select2" name="approvestatustype">
                                    <option value=""></option>
                                    <?php $__currentLoopData = $approvestatustype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($key == $model->approvestatustype): ?>
                                            <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>                                                                    
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('statustype')): ?><span class="text-danger"><?php echo e($errors->first('statustype'), false); ?></span><?php endif; ?>
                            </div>
                            <div class="col-md-1"></div>                            
                            <div class="col-md-2">
                                <label>Kiểm soát phê duyệt:</label>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control select2" name="approved_user_id">                        
                                    <option value=""></option>
                                    <?php $__currentLoopData = $approvedusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $item->id == $model->approved_user_id ): ?>
                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->name, false); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->name, false); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label>Ngày duyệt:</label>
                            </div>
                            <div class="col-md-2">
                                <input type='text' class="form-control" name="approved_at" id='approved_at' value="<?php echo e(ConvertSQLDate($model->approved_at), false); ?>"/>
                                <?php if($errors->has('approved_at')): ?><span class="text-danger"><?php echo e($errors->first('approved_at'), false); ?></span><?php endif; ?>
                            </div>
                        </div>
                    </div>

                <div class="form-group">
                    <div class="row">

                    </div>
                </div>                
            </div>
            
            <button type="submit" class="btn btn-success" style="width: 15%;">Lưu</button>
            <br><hr>
            <a href="<?php echo e(route('customers-index'), false); ?>" style="width: 16%;"><i class="fa fa-arrow-left"></i> Quay lại</a>   
            
        </div>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.customer.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>