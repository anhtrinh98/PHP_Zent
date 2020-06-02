<?php 
	session_start();
	$malk=$_GET['malk'];
	unset($_SESSION['info'][$malk]);
	header('Location: list.php');
	setcookie('msg','Xóa thành công',time()+60);
 ?>