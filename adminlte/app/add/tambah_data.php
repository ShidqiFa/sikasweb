<?php
include('../../conf/config.php');
$id         = $_GET['id'];
$keterangan = $_GET['keterangan'];
$tanggal    = $_GET['tanggal'];
$debit      = $_GET['debit'];
$kredit     = $_GET['kredit'];
$query = mysqli_query($koneksi,"INSERT INTO tb_kas (id,Keterangan,Tanggal,Debit,Kredit) VALUES('$id','$keterangan','$tanggal','$debit','$kredit')");
header('Location:../index.php?page=buku-kas-umum');
?>