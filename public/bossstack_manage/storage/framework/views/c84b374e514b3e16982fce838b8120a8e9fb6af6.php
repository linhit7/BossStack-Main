<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">

<style type="text/css">
	@media  only screen and (max-width: 768px){
		.news-related{
			margin-top: 20px;
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

<div class="news">
	<div class="news-list">
		<div class="news-latest">
			<h3 class="title-category"><span>NHẬN ĐỊNH CHỨNG KHOÁN</span></h3>
			<div class="news-wrap">
            	<?php
                    $i = 0;
                ?>
                <?php $__currentLoopData = $collections_0; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $i++;
                    if ($i >= 7){
                    	break;
                    }
                ?>
            	<div class="items">
					<a href="<?php echo e(route('invests-detail', ['id'=> $model->id]), false); ?>">
                        <?php if($model->newsimage != ""): ?>
						<div class="image">
                            <img src="<?php echo e(asset($pathimage . $model->newsimage), false); ?>" width="100%">
						</div>
						<div class="info">
							<h4 class="name"><?php echo e($model->newstitle, false); ?></h4>
							<div class="editor">
								<span class="author"><?php echo e($model->author, false); ?></span><span class="date"><?php echo e(ConvertSQLDate($model->newsdate), false); ?></span>
							</div>
							<div class="des"><?php echo $model->shortcontent; ?></div>
						</div>
                        <?php else: ?>
                        <div class="image">
                            <img src="https://fiinves.vn/public/funds_manage/public/newfiles/files/No_Image_Available.jpg" width="100%">
						</div>
                        <div class="info">
                            <h4 class="name"><?php echo e($model->newstitle, false); ?></h4>
                            <div class="editor">
                                <span class="author"><?php echo e($model->author, false); ?></span><span class="date"><?php echo e(ConvertSQLDate($model->newsdate), false); ?></span>
                            </div>
                            <div class="des"><?php echo $model->shortcontent; ?></div>
                        </div>
                        <?php endif; ?>                          
					</a>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			</div>
		</div>

		<div class="news-feed">
			<h3 class="title-category"><span>KIẾN THỨC TÀI CHÍNH ĐẦU TƯ</span></h3>
			<div class="news-wrap">
                <?php
                    $i = 0;
                ?>
                <?php $__currentLoopData = $collections_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $i++;
                    if ($i >= 10){
                        break;
                    }
                ?>
				<div class="items">
					<a href="<?php echo e(route('invests-detail', ['id'=> $model->id]), false); ?>">
                        <?php if($model->newsimage != ""): ?>
                        <div class="image">
                            <?php if($model->newsimage != ""): ?>
                                <img src="<?php echo e(asset($pathimage . $model->newsimage), false); ?>" width="100%">
                            <?php endif; ?>                          
                        </div>
                        <div class="info">
                            <h4 class="name"><?php echo e($model->newstitle, false); ?></h4>
                            <div class="editor">
                                <span class="author"><?php echo e($model->author, false); ?></span><span class="date"><?php echo e(ConvertSQLDate($model->newsdate), false); ?></span>
                            </div>
                            <div class="des"><?php echo $model->shortcontent; ?></div>
                        </div>
                        <?php else: ?>
                        <div class="image">
                            <img src="https://fiinves.vn/public/funds_manage/public/newfiles/files/No_Image_Available.jpg" width="100%">
						</div>
                        <div class="info">
                            <h4 class="name"><?php echo e($model->newstitle, false); ?></h4>
                            <div class="editor">
                                <span class="author"><?php echo e($model->author, false); ?></span><span class="date"><?php echo e(ConvertSQLDate($model->newsdate), false); ?></span>
                            </div>
                            <div class="des"><?php echo $model->shortcontent; ?></div>
                        </div>
                        <?php endif; ?>                          
					</a>
				</div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>

	<div class="news-related">
		<h3 class="title-category"><span>SỰ KIỆN</span></h3>
		<div class="news-wrap">
            <?php
                $i = 0;
            ?>
            <?php $__currentLoopData = $collections_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $i++;
                if ($i >= 5){
                    break;
                }
            ?>
			<div class="items">
                <?php if($model->newsimage != ""): ?>
				<div class="image">
                    <img src="<?php echo e(asset($pathimage . $model->newsimage), false); ?>" width="100%">
				</div>
				<div class="info">
					<h4 class="name"><?php echo e($model->newstitle, false); ?></h4>
					<div class="editor">
						<span class="author"><?php echo e($model->author, false); ?></span><span class="dash">-</span><span class="date"><?php echo e(ConvertSQLDate($model->newsdate), false); ?></span>
					</div>
					<a href="<?php echo e(route('invests-detail', ['id'=> $model->id]), false); ?>">Xem chi tiết &#62;&#62;</a>
				</div>
                <?php else: ?>
                <div class="image">
                    <img src="https://fiinves.vn/public/funds_manage/public/newfiles/files/No_Image_Available.jpg" width="100%">
				</div>
                <div class="info">
                    <h4 class="name"><?php echo e($model->newstitle, false); ?></h4>
                    <div class="editor">
                        <span class="author"><?php echo e($model->author, false); ?></span><span class="dash">-</span><span class="date"><?php echo e(ConvertSQLDate($model->newsdate), false); ?></span>
                    </div>
                    <a href="<?php echo e(route('invests-detail', ['id'=> $model->id]), false); ?>">Xem chi tiết &#62;&#62;</a>
                </div>
                <?php endif; ?>                          
			</div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    $(function () {
        var width_img = $(".news-list .image").width();

        $(".news-list .image").css("height", width_img);
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>