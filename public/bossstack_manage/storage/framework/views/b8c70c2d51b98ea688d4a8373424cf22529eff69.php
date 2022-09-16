<h1>DANH SÁCH TÀI KHOẢN QUẢN TRỊ HỆ THỐNG</h1>
<br>
<table>
	<tbody>
		<tr>
			<th>STT</th>
			<th>Tên Khách hàng</th>
			<th>Email</th>
            <th>Quyền truy cập</th>
			<th>Trạng thái tài khoản</th>
            <th>Ngày đăng ký</th>
		</tr>
        <?php
            $i = 1;
        ?>                        
		<?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($i++, false); ?></td>
			<td><?php echo e($customer['name'], false); ?></td>
			<td><?php echo e($customer['email'], false); ?></td>
            <td><?php echo e($customer['role'], false); ?></td>
			<td><?php echo e($customer['blocked'], false); ?></td>
            <td><?php echo e($customer['created_at'] == null ? "" : ConvertSQLDate($customer['created_at'], 1), false); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>