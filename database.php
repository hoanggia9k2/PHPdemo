<?php  
if(isset($_POST['id'])){
	require 'db/ketnoi.php';
	$sql = "SELECT * FROM thongtinnhanvien WHERE id= ?";
}
?>