
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">ZENT GROUP - PHP - Thực hành về gửi dữ liệu dùng POST</h3>
    <hr>
    <h3 align="center">THÔNG TIN SINH VIÊN</h3>
    <?php 
    	$ma=$_POST['masv'];
    	$ten=$_POST['name'];
    	$dt=$_POST['phone'];
    	$em=$_POST['email'];
    	$dc=$_POST['address'];
    	if (empty($ma)){
    		echo 'Bạn chưa nhập mã sinh viên';
		}elseif (empty($ten)){
    		echo 'Bạn chưa nhập họ và tên sinh viên';
		}
		elseif (empty($dt)){
    		echo 'Bạn chưa nhập số điện thoại';
		}
		elseif (empty($em)){
    		echo 'Bạn chưa nhập email';
		}
		elseif (empty($dc)){
    		echo 'Bạn chưa nhập địa chỉ';
		}
    	else
    	{
        	echo 'Mã sinh viên: ' .$ma. '<br>';
        	echo "Họ và tên: " .$ten.'<br>';
        	echo "Số điện thoại: ".$dt. '<br>';
        	echo "Email: ".$em. '<br>';
        	echo "Giới tính:".$_POST['gioitinh']. '<br>';
        	echo "Địa chỉ: ".$dc. '<br>';
    	}
     ?>
    </div>
</body>
</html>
