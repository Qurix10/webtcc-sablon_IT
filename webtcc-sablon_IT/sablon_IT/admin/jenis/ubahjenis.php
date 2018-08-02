<h2>Ubah Data Jenis</h2>
<?php 
//mengambil dari url pakai $_GET['nama kotak']
$idjenis=$_GET['kd'];
//obyek jenis mengakses fungsin ubah_jenis(idP)
$hasiljenis = $jenis->ambil_jenis($idjenis);
echo "<pre>";
print_r($hasiljenis);
echo "</pre>";
?>
<form method="post">
	<div class="form-group">
		<label>jenis</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $hasiljenis['nama_jenis'];?>">

	</div>
	<button class="btn btn-primary" name="ubah">Ubah </button>
</form>
<?php 
// jika ada tobmol ubah,maka
if (isset($_POST['ubah']))
{
// obyek jenis akses fungsi ubah_jenisi(nama dari formulir berdasarkan id dari url)
	$jenis->ubah_jenis($_POST["nama"],$idjenis);

	echo "<script>alert ('data terubah')</script>";
	echo "<script>location='index.php?halaman=jenis';</script>";
}
?>
 