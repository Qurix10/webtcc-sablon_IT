<?php 
$datajenis = $jenis->tampil_jenis();
echo "<pre>";
print_r($datajenis);
echo "</pre>";

 ?>
<h2>Tambah Data</h2>
<form method="post" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-md-2 control-label">Jenis</label>
		<div class="col-md-8">
			<select class="form-control" name="id_jenis"><option value="">Pilih Jenis</option>
			<?php foreach ($datajenis as $key => $value): ?>
			<option value="<?php echo $value["id_jenis"]; ?>"><?php echo $value["nama_jenis"] ;?>
				
			</option>
			<?php endforeach ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Nama Produk</label>
		<div class="col-md-8">
			<input type="text" class="form-control" name="nama">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Harga</label>
		<div class="col-md-8">
			<input type="number" class="form-control" name="harga">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-2 control-label">Foto</label>
		<div class="col-md-8">
			<input type="file"  name="foto">
		</div>
	</div>
	<div class="col-md-8 col-md-offset-2"><button class="btn btn-primary" name="simpan">simpan</button></div>
</form>
<?php 
//jika ada tombol simpan,maka
if (isset($_POST['simpan']))
{
	//obyek produk akses fungsi simpan_produk(inputan dari formulir)
	$produk->simpan_produk($_POST['id_jenis'],$_POST['nama'],$_POST['harga'],$_FILES['foto']);
	echo "<script>alert('produk tersimpan');</script>";
	echo "<script>location='index.php?halaman=produk';</script>";
}

 ?>
