<h2>Buat Akun Pelanggan</h2>
<hr>

<form method="post">
	
	<div class="form-group">
		<label>Nama</label>
			<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
			<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Username</label>
			<input type="username" name="username" class="form-control">
	</div>
	<div class="form-group">
		<label>Password</label>
			<input type="password" name="password" class="form-control">
	</div>
	<div class="form-group">
		<label>Telepon</label>
			<input type="text" name="telp" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
			<textarea name="alamat" class="form-control"></textarea>
	</div>
	<button class="btn btn-danger" name="simpan">Simpan</button>
</form>
<?php 
if(isset($_POST['simpan']))
{
	//obyek pelanggan mengakses fungsi simpan_pelanggan(input dari formulir)
	$pelanggan->simpan_pelanggan($_POST['nama'],$_POST['email'],$_POST['username'],$_POST['password'],$_POST['telp'],$_POST['alamat']);
	echo "<script>alert('data pelanggan tersimpan');</script>";
	echo "<script>location='index.php?halaman=pelanggan';</script>";
}

 ?>