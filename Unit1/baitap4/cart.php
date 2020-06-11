<?php 
	session_start();
	$products=$_SESSION['cart'];
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
		<?php 
		if (isset($_COOKIE['msg'])) {
			?>
			<div class="alert-success">
				<strong>Thông báo</strong><?php echo $_COOKIE['msg']; ?>   
			</div> 
		<?php } ?>
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
		$tong=0;
		foreach ($products as $product){
			$tong +=$product['price'];
		 ?>
			
		
		<tr>
			<td><?php echo  $product['id']; ?></td>
			<td><?php echo  $product['name']; ?></td>
			<td>1</td>
			<td><?php echo  $product['price']; ?></td>
			<td><?php echo  $product['price']; ?></td>
			<td><?php echo date('H:i:s d/m/Y') ?></td>
			<td>
				<a href="delete.php?MaSp=<?= $product['id'] ?>" class="btn btn-danger">Xóa khỏi giỏ hàng</a>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="4">Sum Amount</td>
			<td align="right"><?= number_format($tong) ?></td>
		</tr>
	</table>
</body>
</html>