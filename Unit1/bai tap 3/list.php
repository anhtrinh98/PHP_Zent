<?php 
    session_start();
    // unset($_SESSION['info']['125']);
    if (isset($_SESSION['info'])){
        $data_arr=$_SESSION['info'];

    }else{
        $data_arr=array();
    }

    echo "<pre>";
    var_dump($_SESSION['info']);
    echo "</pre>";
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
        <h3 align="center">DANH SÁCH NGƯỜI DÙNG</h3>
        <a href="add.php" class="btn btn-primary">Thêm mới</a>
        <?php 
        if (isset($_COOKIE['msg'])) {
        ?>
        <div class="alert-success">
            <strong>Thông báo</strong><?php echo $_COOKIE['msg']; ?>   
        </div> 
    <?php } ?>   
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Mã sinh viên</th>
                <th>Họ tên</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i=0;
            foreach ($data_arr as $value) {
                 $i++;
             ?>
             <tr>
                 <td><?php echo $i ?></td>
                 <td><?php echo $value['ma'] ?></td>
                 <td><?php echo $value['ten'] ?></td>
                 <td>
                     <a href="detail.php?malk=<?php echo $value['ma']; ?> " class="btn btn-success">Detail</a>
                     <a href="delete.php?malk=<?php echo $value['ma']; ?> " class="btn btn-danger">Delete</a>
                 </td>
             </tr>
         <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
