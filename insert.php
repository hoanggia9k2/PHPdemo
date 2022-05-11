<?php
require 'ketnoi.php';
if(isset($_POST['note'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fullname = $_POST['fullname'];
	$gioitinh = $_POST['gioitinh'];
	$ngaysinh = $_POST['ngaysinh'];
	$diachi = $_POST['diachi'];
	$email = $_POST['email'];
	$sdt = $_POST['sdt'];
	$note = $_POST['note'];
	if (!empty($username)&&!empty($password)&&!empty($fullname)&&!empty($gioitinh)&&!empty($ngaysinh)&&!empty($diachi)&&!empty($email)&&!empty($sdt)) {
		echo "<pre>";
		print_r($_POST);
		$sql = "INSERT INTO `thongtinnhanvien`(`fullname`,`gioitinh`,`ngaysinh`,`diachi`,`email`,`sdt`,`note`) VALUES ('$fullname','$gioitinh','$ngaysinh','$diachi','$email','$sdt','$note')";
		if ($conn->query($sql)===true) {
			header('Location: hienthidanhsach.php'); //Quay lại trang
		}else{
			echo "Lỗi:" .$conn->error;
		}
	}else{
		echo "Bạn cần nhập đủ thông tin";
	}
}
?>