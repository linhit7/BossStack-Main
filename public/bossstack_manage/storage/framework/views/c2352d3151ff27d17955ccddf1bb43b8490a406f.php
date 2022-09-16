<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">

<style type="text/css">

	.box-coaching .cash-analysis .row{
		display: -webkit-box;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-flex-wrap: wrap;
	    flex-wrap: wrap;
	}

	.box-coaching .cash-analysis .row div{
		margin-bottom: 10px;
	}

	@media  only screen and (max-width: 768px){
	    .box.box-coaching .coaching-form .form-group{
	    	margin-bottom: 0;
	    }

	    .box.box-coaching .coaching-form input,
		.box.box-coaching .coaching-form textarea{
	    	margin-bottom: 15px;
	    }
	}

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<?php if(isset($infor)): ?>
    <?php echo $__env->make('layouts.partials.messages.infor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>



<div class="row">
    <div class="col-xs-12">
        <div class="box box-coaching">
        	<br>
			<div class="cash-analysis" style="display: none;">
                <div class="row">
                    <div class="col-md-2 col-xs-12" style="align-self: center;">
                       <label style="color: #2d3194; margin-bottom: 0;">Thời gian từ:</label>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <input type='text' class="form-control" name="fromDate" id='fromDate' value="<?php echo e(old('fromDate') == "" ? $fromDate : old('fromDate'), false); ?>"/>
                    </div>
                    <div class="col-md-1 col-xs-12" style="align-self: center;">
                        <label style="color: #2d3194; margin-bottom: 0;">đến:</label>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <input type='text' class="form-control" name="toDate" id='toDate' value="<?php echo e(old('toDate') == "" ? $toDate : old('toDate'), false); ?>"/>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <button class="btn btn-primary btn-search" style="width: 100%; background-color: #ff7f0e; border: 1px solid #ff7f0e;">Yêu cầu phân tích</button>
                    </div>
                </div>
        	</div>
        	<br>
        	<div class="coaching-form">
				<p style="text-align: justify;"><font size="3">Tham gia chương trình <b>coaching</b> 1:1 nhằm xây dựng và gia tăng dòng tiền của bạn, vui lòng gửi thông tin cho chúng tôi:</font></p>
                <form role="form" action="<?php echo e(route('report-store'), false); ?>?continue=true" method="post" id="frm">
                <?php echo e(csrf_field(), false); ?>

					<div class="form-group">
						<div class="row">
							<div class="col-md-4 col-xs-12">
								<input class="form-control" type="text" name="fullname" placeholder="Họ tên" value="<?php echo e(old('fullname'), false); ?>">
                                <?php if($errors->has('fullname')): ?><span class="text-danger"><?php echo e($errors->first('fullname'), false); ?></span><?php endif; ?>
							</div>
							<div class="col-md-4 col-xs-12">
								<input class="form-control" type="text" name="email" placeholder="Email" value="<?php echo e(old('email'), false); ?>">
                                <?php if($errors->has('email')): ?><span class="text-danger"><?php echo e($errors->first('email'), false); ?></span><?php endif; ?>
							</div>
							<div class="col-md-4 col-xs-12">
								<input class="form-control" type="text" name="phone" placeholder="Số điện thoại" value="<?php echo e(old('phone'), false); ?>">
                                <?php if($errors->has('phone')): ?><span class="text-danger"><?php echo e($errors->first('phone'), false); ?></span><?php endif; ?>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<input class="form-control" type="text" name="address" placeholder="Địa chỉ" value="<?php echo e(old('address'), false); ?>">
                                <?php if($errors->has('address')): ?><span class="text-danger"><?php echo e($errors->first('address'), false); ?></span><?php endif; ?>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<input class="form-control" type="text" name="title" placeholder="Tiêu đề"  value="<?php echo e(old('title'), false); ?>">
                                <?php if($errors->has('title')): ?><span class="text-danger"><?php echo e($errors->first('title'), false); ?></span><?php endif; ?>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<textarea class="form-control" rows="10" name="content" placeholder="Thông điệp của bạn....."><?php echo e(old('content'), false); ?></textarea>
                                <?php if($errors->has('content')): ?><span class="text-danger"><?php echo e($errors->first('content'), false); ?></span><?php endif; ?>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-send">Gửi yêu cầu</button>
				</form>
			</div>
        	<br>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('product-manage.report.partials.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>