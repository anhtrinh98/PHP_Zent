<?php 
	session_start();
	$malk=$_GET['malk'];
	echo "<pre>";
	var_dump($malk);
	echo "<pre>";
	if(isset($_SESSION['info'][$malk])) {
		echo 'Mã sinh viên: ' .$_SESSION['info'][$malk]['ma']. '<br>';
		echo "Họ và tên: " .$_SESSION['info'][$malk]['ten'].'<br>';
		echo "Số điện thoại: ".$_SESSION['info'][$malk]['phone']. '<br>';
		echo "Email: ".$_SESSION['info'][$malk]['email']. '<br>';
		echo "Giới tính:".$_SESSION['info'][$malk]['gioitinh']. '<br>';
		echo "Địa chỉ: ".$_SESSION['info'][$malk]['diachi']. '<br>';
		//print_r($_SESSION['info']);
	}
	
 ?>