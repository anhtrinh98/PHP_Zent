<?php 
	class Connection{
		var $conn;
		function __construct(){
			//Thông số kết nối CSDL
			$servername="localhost";// địa chỉ IP của máy chủ chứa CSDL

			$username="root";//Tên đăng nhập

			$password="";//Mật khẩu truy cập

			$dbname="blogs";//Tên CSDL muốn kết nối


			//Tạo kết nối đến CSDL

			$this->conn=new mysqli($servername,$username,$password,$dbname);

			$this->conn->set_charset("utf8");//set utf8 để đọc dữ liệu tiếng việt



			//Check connection
			if ($this->conn->connect_error) {
				die("Connection failed:" .$this->conn->connect_error);
			}


		}
	}
 ?>