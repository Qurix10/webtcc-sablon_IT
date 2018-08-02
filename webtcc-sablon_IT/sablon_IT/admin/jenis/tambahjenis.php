<h2>DATA JENIS</h2>
<form method="post">
	<div class="form-group">
		<label>Nama Jenis</label>
		<input type="text"  class="form-control" name="nama">
	</div>
	
	<button class="btn btn-primary" name="simpan">simpan</button>

</form>
<?php 
//jiak ada tombol,simpan,maka
if(isset($_POST['simpan']))
{
	echo "kadal";
	//obyek jenis akses fungsi simpan_jenis(inputan dr formulir)
	$jenis->simpan_jenis($_POST["nama"]);
	
	echo "<script>alert('Jenis tersimpan');</script>";
	echo "<script>location='index.php?halaman=jenis';</script>";
}
?>