<?php 
	session_start();
	$malk=$_GET['malk'];
	unset($_SESSION['info'][$malk]);
	setcookie('msg','Xóa thành công',time()+2);
	header('Location: list.php');
 ?>