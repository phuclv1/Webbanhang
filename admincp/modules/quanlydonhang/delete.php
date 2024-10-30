
<?php
$servername = "localhost";
$username = "root";
$password = "25112003";
$dbname = "banquanao";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['order_id'];

$sql = "DELETE FROM tbl_donhang WHERE order_id=$id";
$conn->query($sql);
$sql = "DELETE FROM tbl_chitietdonhang WHERE order_id=$id";
$conn->query($sql);
header('Location:../../index.php?action=quanlydonhang');
?>