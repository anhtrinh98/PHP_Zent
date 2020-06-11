<!-- Thiết kế lớp bài viết bao gồm các thông tin sau:

Thuộc tính:tiêu đề, đường dẫn, mô tả, nội dung
Phương thức: In ra thông tin bài viết-->
<?php 
	class baiviet{
		var $tieude="";
		var $duongdan="";
		var $mota="";
		var $noidung="";
		function inthongtin(){
			echo "<br>Tiêu đề:" .$this->tieude;
			echo "<br>Đường dẫn:" .$this->duongdan;
			echo "<br>Mô tả:" .$this->mota;
			echo "<br>Nội dung:" .$this->noidung;
		}
	}
	echo "Bài viết 1";
	echo "<br>";
	$baiviet1=new baiviet();
	$baiviet1->tieude="Chủ đề học sinh";
	$baiviet1->duongdan="http://google.com.vn";
	$baiviet1->mota="Chuẩn bị cho kì thi trung học PTQG";
	$baiviet1->noidung="Kì thi THPTQG dự kiến sẽ bắt đầu vào 15/7 với ba môn thi: Toán, Ngữ Văn, Ngoại Ngữ";
	$baiviet1->inthongtin();
	echo "<br>";
	echo "<br>";
	echo "Bài viết 2";
	echo "<br>";
	$baiviet2=new baiviet();
	$baiviet2->tieude="Chủ đề học sinh 2 ";
	$baiviet2->duongdan="http://google.com.vn 2";
	$baiviet2->mota="Chuẩn bị cho kì thi trung học PTQG 2";
	$baiviet2->noidung="Kì thi THPTQG dự kiến sẽ bắt đầu vào 15/7 với ba môn thi: Toán, Ngữ Văn, Ngoại Ngữ 2";
	$baiviet2->inthongtin();
	echo "<br>";
	echo "<br>";
	echo "Bài viết 3";
	echo "<br>";
	$baiviet3=new baiviet();
	$baiviet3->tieude="Chủ đề học sinh3";
	$baiviet3->duongdan="http://google.com.vn";
	$baiviet3->mota="Chuẩn bị cho kì thi trung học PTQG 3";
	$baiviet3->noidung="Kì thi THPTQG dự kiến sẽ bắt đầu vào 15/7 với ba môn thi: Toán, Ngữ Văn, Ngoại Ngữ 3";
	$baiviet3->inthongtin();
 ?>