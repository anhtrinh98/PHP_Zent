<!-- Thiết kế lớp người dùng bao gồm các thông tin sau:

Thuộc tính:tên, email, mật khẩu, ảnh đại diện
Phương thức: In ra thông tin người dùng
Sau đó khởi tạo 3 đối tượng, gán thông tin cho các thuộc tính và gọi phương thức in thông tin cho từng đối tượng.  -->
<?php 
	class NguoiDung{
		var $ten;
		var $email;
		var $matkhau;
		var $anhdaidien;
		function Thongtinnguoidung(){
			echo "<br> Tên người dùng:".$this->ten;
			echo "<br> Email người dùng:".$this->email;
			echo "<br> Mật khẩu người dùng:".$this->matkhau;
			echo "<br> Ảnh đại diện người dùng:".$this->anhdaidien;
			echo "<br>";
		}
	}
	$nguoidung1=new NguoiDung();
	$nguoidung1->ten="Nguyễn Vân Anh";
	$nguoidung1->email="nguyenvananh@gmail.com";
	$nguoidung1->matkhau="123";
	$nguoidung1->anhdaidien="http:\\anhdaidien.jpg";
	$nguoidung1->Thongtinnguoidung();

	$nguoidung2=new NguoiDung();
	$nguoidung2->ten="Nguyễn Viet Anh";
	$nguoidung2->email="nguyenvietanh@gmail.com";
	$nguoidung2->matkhau="123";
	$nguoidung2->anhdaidien="http:\\anhdaidien2.jpg";
	$nguoidung2->Thongtinnguoidung();

	$nguoidung3=new NguoiDung();
	$nguoidung3->ten="Nguyễn Lan Anh";
	$nguoidung3->email="nguyenLananh@gmail.com";
	$nguoidung3->matkhau="123";
	$nguoidung3->anhdaidien="http:\\anhdaidien3.jpg";
	$nguoidung3->Thongtinnguoidung();

 ?>