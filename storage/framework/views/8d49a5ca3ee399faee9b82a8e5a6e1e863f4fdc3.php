<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(config('app.name'), false); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="route" content="<?php echo e(request()->route()->getName(), false); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('img/fiinves-f-logo-tab.png'), false); ?>" sizes="32x32" />

    <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap/dist/css/bootstrap.min.css'), false); ?>" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-datetimepicker-master/build/css/bootstrap-datetimepicker.min.css'), false); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/font-awesome/css/font-awesome.min.css'), false); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/Ionicons/css/ionicons.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/common.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/pages/style_fund.css'), false); ?>">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <?php echo $__env->yieldContent('head'); ?>
    @laravelPWA
</head>

<body style="font-family: 'Roboto', sans-serif !important;">

    <?php if(session()->has('success')): ?>
        <?php echo $__env->make('layouts.partials.messages.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>


    <div id="header-fund">


        <!-- Register -->
        <div class="register">

            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="card-group">
                            <div class="card card-left">
                                <img class="card-img" src="<?php echo e(asset('img/signup-hinh.png'), false); ?>" alt="">
                            </div>
                            <div class="card card-right">
                                <div class="card-body">
                                    <form role="form" action="<?php echo e(route('customers-addCustomer'), false); ?>?continue=true" method="post" id="frm">
                            
                                        <div class="box box-primary" style="margin-bottom: 30px;">
                                            <div class="box-header text-center">
                                                <img src="<?php echo e(asset('img/logo-finves.png'), false); ?>" alt="" width="30%">
                                            </div>
                                            <?php echo e(csrf_field(), false); ?>

                                            <div class="box-body">
                                                
                                                <h2 class="text-center"><font color="#2a3b8e">THÔNG TIN CÁ NHÂN</font></h2>

                                                <div class="form-group">
                                                    <label>Họ & tên <small class="text-danger text"> (*)</small>:</label>
                                                    <input type="text" class="form-control" name="fullname" value="<?php echo e(old('fullname'), false); ?>">
                                                    <?php if($errors->has('fullname')): ?><span class="text-danger"><?php echo e($errors->first('fullname'), false); ?></span><?php endif; ?>
                                                </div>

                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Ngày sinh <small class="text-danger text"> (*)</small>:</label>
                                                            <input type='text' class="form-control" name="birthday" id='birthday' value="<?php echo e(old('birthday'), false); ?>"/>
                                                            <?php if($errors->has('birthday')): ?><span class="text-danger"><?php echo e($errors->first('birthday'), false); ?></span><?php endif; ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Giới tính <small class="text-danger text"> (*)</small>:</label>
                                                            <select class="form-control select2" name="gender">
                                                                <option value=""></option>
                                                                <?php $__currentLoopData = $gendertype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($key == old('gender')): ?>
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
                                                    <label>Địa chỉ <small class="text-danger text"> (*)</small>:</label>
                                                    <input type="text" class="form-control" name="address" value="<?php echo e(old('address'), false); ?>">
                                                    <?php if($errors->has('address')): ?><span class="text-danger"><?php echo e($errors->first('address'), false); ?></span><?php endif; ?>
                                                </div>

                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Điện thoại <small class="text-danger text"> (*)</small>:</label>
                                                            <input type="text" class="form-control" tabindex="5" name="phone" value="<?php echo e(old('phone'), false); ?>"> 
                                                            <?php if($errors->has('phone')): ?><span class="text-danger"><?php echo e($errors->first('phone'), false); ?></span><?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email <small class="text-danger text"> (*)</small>:</label>
                                                            <input type="text" class="form-control" name="email" value="<?php echo e(old('email'), false); ?>">
                                                            <?php if($errors->has('email')): ?><span class="text-danger"><?php echo e($errors->first('email'), false); ?></span><?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Người liên hệ khi cần:</label>
                                                            <input type="text" class="form-control" tabindex="5" name="contactname" value="<?php echo e(old('contactname'), false); ?>"> 
                                                            <?php if($errors->has('contactname')): ?><span class="text-danger"><?php echo e($errors->first('contactname'), false); ?></span><?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Điện thoại:</label>
                                                            <input type="text" class="form-control" tabindex="5" name="contactphone" value="<?php echo e(old('contactphone'), false); ?>"> 
                                                            <?php if($errors->has('contactphone')): ?><span class="text-danger"><?php echo e($errors->first('contactphone'), false); ?></span><?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Nhóm khách hàng <small class="text-danger text"> (*)</small>:</label>
                                                    <select class="form-control select2" name="customertype">
                                                        <option value=""></option>
                                                        <?php $__currentLoopData = $customertype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($key == old('customertype')): ?>
                                                                <option value="<?php echo e($key, false); ?>" selected><?php echo e($value, false); ?></option>
                                                            <?php else: ?>
                                                                <option value="<?php echo e($key, false); ?>"><?php echo e($value, false); ?></option>      
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <?php if($errors->has('customertype')): ?><span class="text-danger"><?php echo e($errors->first('customertype'), false); ?></span><?php endif; ?>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Thông tin sản phẩm <small class="text-danger text"> (*)</small>:</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <select class="form-control select2" name="typereport" id="typereport" onchange='onChangeSelect();'>
                                                                <?php $__currentLoopData = $service_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($item->id == old('typereport') or $item->id == $typereport): ?>
                                                                        <?php if($item->id == 4): ?>
                                                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->name, false); ?></option>
                                                                        <?php else: ?>
                                                                            <option value="<?php echo e($item->id, false); ?>" selected><?php echo e($item->name, false); ?> (<?php echo e(formatNumber($item->price, 1, 0, 1), false); ?> đồng/tháng)</option>                                                                        
                                                                        <?php endif; ?>
                                                                    <?php else: ?>
                                                                        <?php if($item->id == 4): ?>
                                                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->name, false); ?></option>
                                                                        <?php else: ?>
                                                                            <option value="<?php echo e($item->id, false); ?>"><?php echo e($item->name, false); ?> (<?php echo e(formatNumber($item->price, 1, 0, 1), false); ?> đồng/tháng)</option>      
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <?php if($errors->has('typereport')): ?><span class="text-danger"><?php echo e($errors->first('typereport'), false); ?></span><?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
 
                                                <div id="producttypelabel" style="">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <select class="form-control select2" name="producttype" id="producttype" onchange='onChangeSelect();'>
                                                                    <option value="0">Chọn gói thời gian</option>
                                                                    <?php $__currentLoopData = $producttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($key > 0): ?>
                                                                            <?php if($key == old('producttype') or $key == $producttype): ?>
                                                                                <option value="<?php echo e($key, false); ?>" selected><?php echo e($value['month'], false); ?> tháng (giảm <?php echo e($value['discount'], false); ?>%)</option>
                                                                            <?php else: ?>
                                                                                <option value="<?php echo e($key, false); ?>"><?php echo e($value['month'], false); ?> tháng (giảm <?php echo e($value['discount'], false); ?>%)</option>      
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </select>
                                                                <?php if($errors->has('producttype')): ?><span class="text-danger"><?php echo e($errors->first('producttype'), false); ?></span><?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                 &nbsp;Số tiền thanh toán: <font size="3" color='red'><b><span id="amountlabel"></span></font> đồng.</b>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success btn-register"><b>ĐĂNG KÝ</b></button>   
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Register -->

        

    </div> 

    <script src="<?php echo e(asset('bower_components/jquery/dist/jquery.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('bower_components/moment/min/moment.min.js'), false); ?>"></script>
    <script src="<?php echo e(asset('bower_components/bootstrap/dist/js/bootstrap.min.js'), false); ?>"></script>

    <script src="<?php echo e(asset('js/commons.js'), false); ?>"></script>
    
    <script src="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'), false); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'), false); ?>" />
    <script src="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.vi.min.js'), false); ?>"></script>


    <!-- Fund JS -->
    <script src="<?php echo e(asset('js/fund.js'), false); ?>"></script>
    <!-- Fund JS -->

    <script type="text/javascript">
            $(function () {
                param = {   format: "dd/mm/yyyy",
                            autoclose: true,
                            daysOfWeekHighlighted: "0,6",
                            todayHighlight: true,
                            todayBtn: "linked",
                            language: "vi",
                        };
                $('#birthday').datepicker(param);
            });
    </script>
    <script type="text/javascript">
        var dataProduct = [];
        <?php $__currentLoopData = $service_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          dataProduct[<?php echo e($item['id'], false); ?>] = ['<?php echo e($item['name'], false); ?>', <?php echo e($item['price'], false); ?>];
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        var dataProductType = [];
        <?php $__currentLoopData = $producttypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          dataProductType[<?php echo e($key, false); ?>] = [<?php echo e($value['month'], false); ?>, <?php echo e($value['discount'], false); ?>];
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        function onChangeSelect(){
            if (document.getElementById("typereport").value == 4){
                document.getElementById("producttypelabel").style.display = 'none';
            }else{
                document.getElementById("producttypelabel").style.display = 'block';

                typereport_id = document.getElementById("typereport").value;
                producttype_id = document.getElementById("producttype").value;
                price = dataProduct[typereport_id][1];
                month = dataProductType[producttype_id][0];
                discount = dataProductType[producttype_id][1];
                
                amount = (price - (price*discount/100))*month; 
                document.getElementById("amountlabel").innerHTML = formatCurrency(amount);  
            } 
        }            

        if (document.getElementById("typereport").value == 4){
            document.getElementById("producttypelabel").style.display = 'none';
        }else{
            document.getElementById("producttypelabel").style.display = 'block';

            typereport_id = document.getElementById("typereport").value;
            producttype_id = document.getElementById("producttype").value;
            price = dataProduct[typereport_id][1];
            month = dataProductType[producttype_id][0];
            discount = dataProductType[producttype_id][1];
            
            amount = (price - (price*discount/100))*month; 
            document.getElementById("amountlabel").innerHTML = formatCurrency(amount);  
        } 
    </script>

</body>
</html>
