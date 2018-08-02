<?php 
//mengambil dari url pakai $_GET['nama kotak']
$id_produk = $_GET['id'];
//produk kan punya gambar, maka dari itu kita harus tau namagambar,perlu ambil produk(idnya yang ada di url)
//obyek jenis akses fungsi ambil_produk (id dari url)
 $dataproduk = $produk->ambil_produk($id_produk);
 //mendapatkan nama gambar produk
 $foto = $dataproduk["foto_produk"];
 //hapus file dari produk
 unlink("../foto_produk/$foto");
 //obyek produk akses fungsi hapus_produk(id dari url)
 $produk->hapus_produk($id_produk);
 echo "<script>alert('produk terhapus');</script>";
 echo "<script>location='index.php?halaman=produk';</script>";
 ?>