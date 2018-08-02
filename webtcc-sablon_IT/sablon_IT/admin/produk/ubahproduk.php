<h2>Ubah Produk</h2>
<?php 
//mengambil dari url pakai $_GET
$id_produk=$_GET['id'];
//obyek  mengakses fungsi ambil_produk(id darim url)
$dataproduk = $produk->ambil_produk($id_produk);
echo "<pre>";
print_r($dataproduk);
echo "</pre>";

//obyek  jenis mengakses fungsi jenis()
$datajenis = $jenis->tampil_jenis();
echo "<pre>";
print_r($datajenis);
echo "</pre>";

?>
<form method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-md-2 control-label">Jenis</label>
		<div class="col-md-8">
			<select class="form-control" name="id_jenis"><option value="">Pilih Jenis</option>
			<?php foreach ($datajenis as $key => $value): ?>
			<option value="<?php echo $value["id_jenis"]; ?>" <?php if($value["id_jenis"]==$dataproduk["id_jenis"]){echo "selected";} ?>><?php echo $value["nama_jenis"] ;?>
				
			</option>
			<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Nama Produk</label>
		<div class="col-md-8">
			<input type="text" class="form-control" name="nama" value="<?php echo $dataproduk["nama_produk"] ;?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Harga</label>
		<div class="col-md-8">
			<input type="number" class="form-control" name="harga" value="<?php echo $dataproduk["harga_produk"] ;?>">
		</div>
	</div>
	<div class="form-group">
		<div class="col-md-8 col-md-offset-2">
			<img src="../foto_produk/<?php echo $dataproduk['foto_produk'] ;?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Foto</label>
		<div class="col-md-8">
			<input type="file"  name="foto">
		</div>
	</div>
	<div class="col-md-8 col-md-offset-2"><button class="btn btn-primary" name="ubah">ubah</button></div>
</form>
<?php 
//jika ada tombol ubah,maka
if (isset($_POST["ubah"]))
{
	//obyek produk akses fungsi ubah_produk(inputan dari formulir berdasarkan id dari url)
	$produk->ubah_produk($_POST['id_jenis'],$_POST['nama'],$_POST['harga'],$_FILES["foto"],$id_produk);
	//echo "<script>alert('produk diubah');</script>";
	//echo "<script>location='index.php?halaman=produk';</script>";
}

 ?>