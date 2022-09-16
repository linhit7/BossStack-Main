<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/pages/products.css'), false); ?>">

<style type="text/css">
	@media  only screen and (min-width: 320px) and (max-width: 575px){
		.content-wrapper .bg-top{
			display: none;
		}

		.content-wrapper .content-header{
			display: none;
		}

		.content-wrapper .content{
			padding-top: 0;
		}
	}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>

<form role="form" action="<?php echo e(route('dashboard-customer'), false); ?>" method="get" name="frm" id="frm">
<?php echo e(csrf_field(), false); ?>

<input type='hidden' name='typereport' value=''>

<div class="row">

	<div class="banner-dashboard">
		<div class="images">
			<!-- <h1>DÒNG TIỀN CÁ NHÂN</h1> -->
			<img src="https://fiinves.vn/public/img/text-4.png" width="50%">
			<!-- <p>Kiểm soát đời sống tài chính và gia tăng thu nhập ngay bây giờ!</p> -->
		</div>

		<div class="banner-icon clearfix">
            <div class="icon">
                <a href="<?php echo e(route('retireplans-index'), false); ?>" title="TÍNH SỐ TIỀN NGHỈ HƯU">
                    <img src="<?php echo e(asset('img/icon-20.png'), false); ?>" width="100">
                    <h3>TÍNH SỐ TIỀN<br>NGHỈ HƯU</h3>
                </a>
            </div>

			<div class="icon">
				<a href="<?php echo e(route('cash-index'), false); ?>" title="CẬP NHẬT THU CHI VÍ TỔNG">
					<img src="<?php echo e(asset('img/icon-18.png'), false); ?>" width="100">
					<h3>CẬP NHẬT THU CHI<br>VÍ TỔNG</h3>
				</a>
			</div>

			<div class="icon">
				<a href="<?php echo e(route('cashplans-index'), false); ?>" title="THIẾT LẬP VÍ TÀI CHÍNH">
					<img src="<?php echo e(asset('img/icon-19.png'), false); ?>" width="100">
					<h3>THIẾT LẬP VÍ<br>TÀI CHÍNH</h3>
				</a>
			</div>

            <div class="icon">
                <a href="<?php echo e(route('cashplans-index'), false); ?>" title="THIẾT LẬP VÍ ĐẦU TƯ">
                    <img src="<?php echo e(asset('img/icon-21.png'), false); ?>" width="100">
                    <h3>THIẾT LẬP VÍ<br>ĐẦU TƯ</h3>
                </a>
            </div>

            <div class="icon">
                <a href="<?php echo e(route('invests-index'), false); ?>" title="ĐẦU TƯ">
                    <img src="<?php echo e(asset('img/icon-15.png'), false); ?>" width="100">
                    <h3>ĐẦU TƯ</h3>
                </a>
            </div>

			<div class="icon">
				<a href="<?php echo e(route('cash-process'), false); ?>" title="DÒNG TIỀN CÁ NHÂN">
					<img src="<?php echo e(asset('img/icon-16.png'), false); ?>" width="100">
					<h3>DÒNG TIỀN<br>CÁ NHÂN</h3>
				</a>
			</div>

			<div class="icon">
				<a href="<?php echo e(route('cashassets-index'), false); ?>" title="THEO DÕI DANH MỤC TÀI SẢN">
					<img src="<?php echo e(asset('img/icon-17.png'), false); ?>" width="100">
					<h3>THEO DÕI DANH MỤC<br>TÀI SẢN</h3>
				</a>
			</div>

            <div class="icon">
                <a href="<?php echo e(route('report-index'), false); ?>" title="YÊU CẦU COACHING">
                    <img src="<?php echo e(asset('img/icon-22.png'), false); ?>" width="100">
                    <h3>YÊU CẦU<br>COACHING</h3>
                </a>
            </div>
			
		</div>
	</div>

	<div class="col-md-12">

		<div class="box box-dashboard box-customer" style="padding-top: 0px; margin-top: 20px;">
			<div class="box-body">

				<div class="title clearfix">
					<div class="row">
						<div class="col-lg-6 col-md-4 col-xs-12" style="align-self: center;">
							<div class="title-1">
								<h3><b>DÒNG TIỀN CỦA TÔI</b></h3>
							</div>
						</div>
						<div class="col-lg-6 col-md-8 col-xs-12" style="align-self: center;">
							<div class="title-2">
	                        	<div class="filter-date">
                                    <div class="items">
                                        <label>Thời gian từ:</label>
	                        		</div>
	                        		<div class="items">
                                        <input type='text' class="form-control" name="fromDate" id='fromDate' value="<?php echo e(old('fromDate') == "" ? $fromDate : old('fromDate'), false); ?>"/>
	                        		</div>
	                        		<div class="items">
	                        			<label style="color: #2d3194; text-align: center;">đến:</label>
	                        		</div>
	                        		<div class="items">
                                        <input type='text' class="form-control" name="toDate" id='toDate' value="<?php echo e(old('toDate') == "" ? $toDate : old('toDate'), false); ?>"/>
	                        		</div>
	                        		<div class="items">
				                        <button class="btn btn-primary btn-search" style="background-color: #ff7f0e; border: 1px solid #ff7f0e;">
                                            <span class="text">Lọc</span>
                                            <span class="icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                        </button>
				                    </div>
	                        	</div>
		                    </div>
						</div>
					</div>
				</div>
				<div class="my-cash">
                    <div id="chart5"></div>
				</div>

				<h3><b>VÍ MỤC TIÊU TÀI CHÍNH</b></h3>

                <div class="financial-planning">
                    <div class="row">
                        <div class="col-md-12" style="text-align: right;">
                            <font size='2' color='#ff0000'>(ĐVT: VND)&nbsp;&nbsp;</font>
                        </div>
                    </div>
                    <div class="financial-planning-list">
                        <div class="wrap">
                            <div class="financial-planning-item">
                                <a class="btn btn-default add-objective" href="<?php echo e(route('cashplans-add'), false); ?>" title="">
                                    <i class="fas fa-plus-circle"></i> 
                                    <p><b>THÊM VÍ MỤC TIÊU</b></p>
                                </a>
                            </div>
                            
                            <?php
                                $i = 0;
                            ?>  
                            <?php $__currentLoopData = $listcashplans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="financial-planning-item">
                                    
                                    <table width="100%" style="display: none;">
                                        <tbody>
                                        	<tr style="border-top: 0; border-bottom: 0;">
                                                <th colspan="2" width="100%"><h4><b>VÍ <?php echo e(mb_strtoupper($plantypes[$item->plantype]), false); ?></b></h6></th>
                                            </tr>
                                            <tr style="border-top: 0;">
                                                <th width="50%"><b><font size='3' color='red'><?php echo e($item->planage, false); ?></font> TUỔI</b></th>
                                                <td width="50%" class="text-right"><b><font size='3' color='#ff423e'><?php echo e(formatNumber($item->requireamount * $item->requireamountunittype, 1, 0, 0), false); ?></font></b></td>
                                            </tr>
                                            <tr>
                                                <th width="50%"><b><font size='3'>Vốn hiện tại</font></b></th>
                                                <td width="50%" class="text-right"><font size='3' color='#1eb40f'><?php echo e(formatNumber($item->totalcurrentamount, 1, 0, 0), false); ?></font> </td>
                                            </tr>
                                            <tr>
                                                <th width="50%"><b><font size='3'>Số tiền còn thiếu</font></b></th>
                                                <td width="50%" class="text-right"><font size='3' color='#ff423e'><?php echo e(formatNumber(($item->requireamount*intval($item->requireamountunittype) - $item->totalcurrentamount), 1, 0, 0), false); ?></font> </td>
                                            </tr>
                                            <tr>
                                                <th width="50%"><b><font size='3'>Thời gian hoàn thiện</font></b></th>
                                                <td width="50%" class="text-right"><b><font color='red'><?php echo e($item->planage - $item->currentage, false); ?></font>&nbsp; NĂM</b></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h4><b>VÍ <?php echo e(mb_strtoupper($plantypes[$item->plantype]), false); ?></b></h4>
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <th><b>Số tuổi mục tiêu</b></th>
                                                <td class="text-right"><b><font color='red'><?php echo e($item->planage, false); ?></font> TUỔI</b></td>
                                            </tr>
                                            <tr>
                                                <th><b>Số tiền mục tiêu</b></th>
                                                <td class="text-right"><b><font color='red'><?php echo e(formatNumber($item->requireamount * $item->requireamountunittype, 1, 0, 0), false); ?></font></b></td>
                                            </tr>
                                            <tr>
                                                <th><b>Vốn hiện tại</b></th>
                                                <td class="text-right"><b><font color='#1eb40f'><?php echo e(formatNumber($item->totalcurrentamount, 1, 0, 0), false); ?></font></b></td>
                                            </tr>
                                            <tr>
                                                <th><b>Số tiền còn thiếu</b></th>
                                                <td class="text-right"><b><font color='#ff423e'><?php echo e(formatNumber(($item->requireamount*intval($item->requireamountunittype) - $item->totalcurrentamount), 1, 0, 0), false); ?></font></b></td>
                                            </tr>
                                            <tr>
                                                <th><b>Thời gian hoàn thiện</b></th>
                                                <td class="text-right"><b><font color='red'><?php echo e($item->planage - $item->currentage, false); ?></font> NĂM</b></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="financial-planning-btn">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <a class="btn btn-primary btn-income" target="blank" href="<?php echo e(route('cashplans-edit',['id'=> $item->id]), false); ?>"><b>CHỈNH SỬA</b></a>
                                            </div>
                                            <div class="col-md-6 col-xs-6">
                                                <a class="btn btn-primary btn-analytical" target="blank" href="<?php echo e(route('cashplans-analysis',['id'=> $item->id]), false); ?>"><b>PHÂN TÍCH</b></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    $i++;
                                    if ($i == 10){
                                        break;
                                    }
                                ?>                                                 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                <div class="title-myAssets">
                	<div class="row">
                		<div class="col-md-6"><h3><b>THEO DÕI CÁC TÀI SẢN</b></h3></div>
                        <div class="col-md-6" style="text-align: right;"><a href="<?php echo e(route('cashassets-index'), false); ?>" target="blank">Xem chi tiết &gt;&gt;</a></div>
                	</div>
                </div>
                
                <div class="my-assets">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="report">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12" style="text-align: center;">
                                        <div id="rptasset1" style="margin-bottom: 12px;"></div>
                                        <font size='3' color="#2d3194"><b>Nợ</b></font>
                                    </div>
                                    <div class="col-md-4 col-xs-12" style="text-align: center;">
                                        <div id="rptasset2" style="margin-bottom: 12px;"></div>
                                        <font size='3' color="#2d3194"><b>Tài sản</b></font>
                                    </div>
                                    <div class="col-md-4 col-xs-12" style="text-align: center;">
                                        <div id="rptasset3" style="margin-bottom: 12px;"></div>
                                        <font size='3' color="#2d3194"><b>Tổng tài sản thực</b></font>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>


			</div>
		</div>
	</div>
</div>

</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('dashboard.partials.script_customer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>