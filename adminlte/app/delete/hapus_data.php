<?php
include('../../conf/config.php');
$id         = $_GET['id'];
$query = mysqli_query($koneksi,"DELETE FROM tb_kas WHERE id='$id'");
header('Location:../index.php?page=buku-kas-umum');
?>