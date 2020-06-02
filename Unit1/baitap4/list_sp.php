<?php 
	session_start();
	$info=array();
	$info[]=array(
		'id'=>'SP1',
		'name'=>'Iphone 4 32GB',
		'price'=>'5000000'
	);
	$info[]=array(
		'id'=>'SP2',
		'name'=>'Ipad mini 16GB',
		'price'=>'8000000'
	);
	$info[]=array(
		'id'=>'SP3',
		'name'=>'Iphone 5 32GB',
		'price'=>'7000000'
	);
	$info[]=array(
		'id'=>'SP4',
		'name'=>'Iphone 6 32GB',
		'price'=>'10000000'
	);
	$info[]=array(
		'id'=>'SP5',
		'name'=>'Iphone 6 plus 32GB',
		'price'=>'15000000'
	);
	
	$_SESSION['info']=$info;
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
			foreach ($info as $key=> $value) {
				?>
				<tr>
					<td><?php echo $value['id']; ?></td>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['price']; ?></td>
					<td>
						<a href="giohang.php?code=<?php echo $value['id']; ?> " class="btn btn-danger">Add to cart</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</form>
</body>
</html>