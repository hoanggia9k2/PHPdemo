<?php
require'ketnoi.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>Sửa thông tin</title>
	<style type="text/css">
		button {text-decoration: none;}
	</style>
</head>
<body>
<?php
if (isset($_GET['id'])){
	$id = $_GET['id'];
}?>
<?php
$sql = "SELECT * FROM thongtinnhanvien WHERE id= $id";
$qr = mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($qr);
if(isset($_POST['sua'])){
	$fullname = $_POST['fullname'];
	$gioitinh = $_POST['gioitinh'];
	$ngaysinh = $_POST['ngaysinh'];
	$diachi = $_POST['diachi'];
	$email = $_POST['email'];
	$sdt = $_POST['sdt'];
	print_r($_POST);
	if ($fullname != "" && $gioitinh != "" && $ngaysinh != "" && $diachi != "" && $email != "" && $sdt != "" ) {
		$sql = "UPDATE thongtinnhanvien SET fullname = '$fullname', gioitinh = '$gioitinh', ngaysinh = '$ngaysinh', diachi = '$diachi', email = '$email' WHERE id = $id";
		$qr = mysqli_query($conn,$sql);
	header('Location: hienthidanhsach.php');
	}
}
?>
<form method="POST">
	<div class="form-group">
		<div class="form-group col-md-6">
			<label for="fullname">Họ và tên</label>
			<input type="text" class="form-control" name="fullname" id="fullname" value="<?php echo $rows['fullname']; ?>" required>
		</div>
		<div class="mb-1 ml-3" required>
			<label> Giới tính </label>
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" id="nam" name="gioitinh" class="custom-control-input" value="<?php echo $rows['gioitinh']; ?>" required>
				<label class="custom-control-label" for="nam" value="Nam"> Nam</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" id="nu" name="gioitinh" class="custom-control-input" value="<?php echo $rows['gioitinh']; ?>" required>
				<label class="custom-control-label" for="nu" value="Nữ">Nữ</label>
			</div>
		</div>
		<div class="form-group col-md-6">
			<label for="birthday">Ngày sinh</label>
			<input type="date" name="ngaysinh" class="form-control" id="birthday" required>
		</div>
		<div class="form-group col-md-6">
			<label for="diachi">Địa chỉ</label>
			<input type="text" class="form-control" name="diachi" id="diachi" value="<?php echo $rows['diachi']; ?>" required>
		</div>
		<div class="form-group col-md-6">
			<label for="email">Email</label>
			<input type="email" class="form-control" name="email" id="email" value="<?php echo $rows['email']; ?>"required>
		</div>
		<div class="form-group col-md-6">
			<label for="sdt">Số điện thoại</label>
			<input type="text" class="form-control" name="sdt" id="sdt" value="<?php echo $rows['sdt']; ?>"required>
		</div>
	</div>
	<div class="form-group row col-sm-9 ml-1">
		<button type="submit" name="sua" class="btn btn-primary">Sửa</button>
		<a href="hienthidanhsach.php" type="sumbit" class="btn ml-2">Cancel</a>
	</div>
</form>
</body>
</html>