<?php 
include('../config.php');
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM contact WHERE email='$id'") or die(mysql_error());

header("location:kelolapesan.php.php");
?>