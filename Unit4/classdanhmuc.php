<!-- Thiết kế lớp danh mục bao gồm các thông tin sau:

Thuộc tính: tên, đường dẫn,danh mục cha, ảnh hiển thị, mô tả
Phương thức: In ra thông tin danh mục -->
<?php 
	class DanhMuc{
		var $ten;
		var $duongdan;
		var $danhmuccha;
		var $anh;
		var $mota;
		function Inthongtin()
		{
			echo "Tên danh mục: " .$this->ten;
			echo "<br>Đường dẫn:" .$this->duongdan;
			echo "<br>Danh mục cha:" .$this->danhmuccha;
			echo "<br>Ảnh hiển thị:" .$this->anh;
			echo "<br>Mô tả:" .$this->mota;
		}
	}
	$dm1=new DanhMuc();
	$dm1->ten="Tiêu dùng";
	$dm1->duongdan="www.hangtieudung.vn";
	$dm1->danhmuccha="Mặt hàng";
	$dm1->anh="http://anh.jpg";
	$dm1->mota="bánh, kẹo, sữa, đường";
	$dm1->Inthongtin();

	$dm2=new DanhMuc();
	$dm2->ten="Tiêu dùng 2";
	$dm2->duongdan="www.hangtieudung.vn";
	$dm2->danhmuccha="Mặt hàng 2";
	$dm2->anh="http://anh.jpg";
	$dm2->mota="bánh, kẹo, sữa, đường 2";
	$dm2->Inthongtin();

	$dm3=new DanhMuc();
	$dm3->ten="Tiêu dùng 3";
	$dm3->duongdan="www.hangtieudung.vn";
	$dm3->danhmuccha="Mặt hàng 3";
	$dm3->anh="http://anh.jpg";
	$dm3->mota="bánh, kẹo, sữa, đường 3";
	$dm3->Inthongtin();
 ?>