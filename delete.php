<?php
require "ketnoi.php";
?>
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
$sql = "DELETE FROM thongtinnhanvien WHERE id = $id";
$qr = mysqli_query($conn,$sql);
header('Location: hienthidanhsach.php');
}
?>