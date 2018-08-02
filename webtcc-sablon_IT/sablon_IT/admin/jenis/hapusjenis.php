<?php 
//mengambil dari url pakai $_GET['nama kotak']
$idjenis = $_GET['id'];
//obyek jenis akses fungsi hapus_jenis(id dari url)
 $jenis->hapus_jenis($idjenis);
 echo "<script>alert('data terhapus');</script>";
 echo "<script>location='index.php?halaman=jenis';</script>";
 ?>
