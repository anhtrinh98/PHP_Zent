<?php 
	session_start();
	//session_destroy();
	require_once('product.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Giỏ hàng</title>
</head>
<body>
	<form>
		<table border="1">
			<tr>
				<td colspan="3">
					DANH SÁCH SẢN PHẨM
				</td>
				<td colspan="3">
					<a href="giohang.php">XEM GIỎ HÀNG</a>

				</td>

			</tr>
			<tr>
				<th>Mã sản phẩm</th>
				<th>Tên sản phẩm</th>
				<th>Đơn giá</th>
				<th>Hành động</th>
			</tr>
			<?php 
			foreach ($products as $product) {
				?>
				<tr>
					<td><?php echo $product['id']; ?></td>
					<td><?php echo $product['name']; ?></td>
					<td><?php echo number_format($product['price']); ?></td>
					<td>
						<a href="giohang.php?code=<?php echo $product['id']; ?>" class="btn btn-danger">Add to cart</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</form>
</body>
</html>