<?php 
	session_start();
	//session_destroy();
	require_once('product.php');
	//b1: lấy mã sản phẩm được chọn
	$codesp=$_GET['code'];
	echo "<pre>";
		print_r($codesp);
	echo "</pre>";
	//b2: lấy thông tin sản phẩm
	$product=$products[$codesp];
	echo "<pre>";
		print_r($product);	
	echo "</pre>";
	//b3: add vào giỏ hàng
	$_SESSION['cart'][$codesp]=$product;

	header("Location: cart.php");
 ?>
