<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="Form đăng ký">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>insert data to MySQL by PHP</title>
</head>
<body>
<div>
	<div class="login">
		<div class="container">
			<div class="row justify-content-around">
				<form action="insert.php" class="col-md-9 bg-light p-3 my-3 was-validated" method="post">
					<h1 class="text-center text-uppercase h3">Đăng ký tài khoản</h1>
					<div class="form-row mb-3">
					    <div class="form-group col-md-6">
							<label for="username">Tên đăng nhập</label>
							<input type="text" name="username" class="form-control is-invalid" id="username" required>
						</div>
						<div class="form-group col-md-6">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" id="password" required>
						</div>
					</div>
					<div class="form-group">
						<label for="fullname">Họ và tên</label>
						<input type="text" name="fullname" id="fullname" class="form-control"required>
					</div>
					<div class="mb-1">
						<label> Giới tính </label>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="nam" name="gioitinh" class="custom-control-input" value="Nam" required>
							<label class="custom-control-label" for="nam"> Nam</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="nu" name="gioitinh" class="custom-control-input" value="Nữ" required>
							<label class="custom-control-label" for="nu">Nữ</label>
						</div>
					</div>
					<div class="form-group">
						<label for="birthday">Ngày sinh</label>
						<input type="date" name="ngaysinh" class="form-control mb-2 mr-sm-2" id="birthday" required>
					</div>
					<div class="form-group">
						<label for="address">Địa chỉ</label>
						<input type="text" name="diachi" id="address" class="form-control"required>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" id="email" required>
						</div>
						<div class="form-group col-md-6">
							<label for="sdt">Số điện thoại</label>
							<input type="text" name="sdt" class="form-control" id="sdt" required>
						</div>
					</div>
				<div>
				<center><button type="sumbit" name="note" class="btn btn-primary btn-block" value="Đã đăng ký">Đăng ký</button></center>
				<center><a href="hienthidanhsach.php" type="sumbit" class="btn mt-2">Cancel</a></center>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>