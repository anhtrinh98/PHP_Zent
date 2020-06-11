<?php
session_start();  //Session có thể sử dụng sau khi chèn đoạn này
?>
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
        if (isset($_POST['submit'])) {
            $ma=$_POST['masv'];
            $ten=$_POST['name'];
            $dt=$_POST['phone'];
            $em=$_POST['email'];
            $gt=$_POST['gioitinh'];
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
                if (!isset( $_SESSION['info'][$ma])) {
                    $_SESSION['info'][$ma]=array(
                        'ma'=>$ma,
                        'ten'=>$ten,
                        'phone'=>$dt,
                        'email'=>$em,
                        'gioitinh'=>$gt,
                        'diachi'=>$dc
                    );
                } else{
                    header('Location: add.php');
                }  
                header('location: list.php');
            }
        } 
     ?>
    </div>
</body>
</html>
