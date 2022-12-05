<?php 
include '../config.php';

$nama = $_POST['fullname'];
$testi = $_POST['testimoni'];

    mysqli_query($koneksi, "insert into testimoni (fullname,testimoni) values ('$nama','$testi')");
    header('location:kelolatesti.php');

?>