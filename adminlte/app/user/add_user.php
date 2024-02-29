<?php
include('../../conf/config.php');
$id         = $_GET['id'];
$nama = $_GET['nama'];
$username    = $_GET['username'];
$password      = $_GET['password'];
$level     = $_GET['level'];
$query = mysqli_query($koneksi,"INSERT INTO tb_user (id,nama,username,password,level) VALUES('$id','$nama','$username','$password','$level')");
header('Location:../index.php?page=user-management');
?>