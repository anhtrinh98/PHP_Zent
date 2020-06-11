<?php 
	session_start();
	$maid=$_GET['MaSp'];
	unset($_SESSION['cart'][$maid]);
	header("location: giohang.php");
 ?>