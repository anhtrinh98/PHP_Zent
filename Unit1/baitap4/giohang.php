<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Giỏ hàng</title>
</head>
<body>
	<table border="1">
		<tr>
			<td colspan="6">
			</td>
			<td>
				<a href="list_sp.php">Tiếp tục mua hàng</a>	
			</td>
		</tr>
		<tr>
			<td colspan="7">Thông tin giỏ hàng</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Tên sản phẩm</th>
			<th>Số lượng</th>
			<th>Đơn giá</th>
			<th>Thành tiền</th>
			<th>Thời gian cập nhật</th>
			<th></th>
		</tr>
		<?php 
			$code=$_GET['code'];
			if (isset( $_SESSION['info'][$code])){
				foreach ($info as $key => $sanpham) {
				
		 ?>
		<tr>
			<td><?php echo $sanpham['id']; ?></td>
			<td><?php echo $sanpham['name']; ?></td>
			<td>1</td>
			<td><?php echo $sanpham['price']; ?></td>
			<td><?php echo $sanpham['price']; ?></td>
			<td><?php echo date('H:i:s d/m/Y') ?></td>
			<td>
				<a href="xoasp.php" class="btn btn-danger">Xóa khỏi giỏ hàng</a>
			</td>
		</tr>
		<?php 
				}
			}
		 ?>
	</table>
</body>
</html>