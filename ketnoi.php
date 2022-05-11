<?php
$servername = "localhost";
$user = "root";
$pass = "";
$data = "quanlycongty";
$conn = new mysqli($servername, $user, $pass, $data);
if($conn->connect_error) {
  die("Kết nối xịt : ".$conn->connect_error);
}
?>