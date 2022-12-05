<?php 
include('../config.php');
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM testimoni WHERE fullname='$id'") or die(mysql_error());

header("location:kelolatesti.php");
?>