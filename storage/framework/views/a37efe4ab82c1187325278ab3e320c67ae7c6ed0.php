<h1>DANH SÁCH KHÁCH HÀNG</h1>
<br>
<table>
	<tbody>
		<tr>
			<th>STT</th>
			<th>Tên Khách hàng</th>
			<th>Ngày sinh</th>
			<th>Email</th>
            <th>Số điện thoại</th>
			<th>Địa chỉ</th>
            <th>Ngày đăng ký</th>
            <th>Gói dịch vụ</th>
            <th>Tình trạng</th>
		</tr>
        <?php
            $i = 1;
        ?>                        
		<?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($i++, false); ?></td>
			<td><?php echo e($customer['fullname'], false); ?></td>
			<td><?php echo e($customer['birthday'] == null ? "" : ConvertSQLDate($customer['birthday']), false); ?></td>
			<td><?php echo e($customer['email'], false); ?></td>
            <td><?php echo e($customer['phone'], false); ?></td>
			<td><?php echo e($customer['address'], false); ?></td>
            <td><?php echo e($customer['created_at'] == null ? "" : ConvertSQLDate($customer['created_at'], 1), false); ?></td>
            <td><?php echo e($customer['product'], false); ?></td>
            <td><?php echo e($customer['product_status'], false); ?></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>