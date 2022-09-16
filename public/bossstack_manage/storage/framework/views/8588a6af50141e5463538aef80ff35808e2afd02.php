<?php $__env->startSection('title', 'Error'); ?>

<?php $__env->startSection('message'); ?>
    Thông tin nhập vào không chính xác. Hệ thống không thể xử lý.
    
    <br/><br/>
    <!--Please refresh and try again.-->
    Vui lòng kiểm tra lại.
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>