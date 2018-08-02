<?php 

include '../config/koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/admin/admin.css">
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".sidebar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">SABLON</a>

		</div>
	</nav>
	<aside class="sidebar sidebar-collapse">
		<div class="menu">

			<ul class="menu-content">
				<li>
					<a href="index.php"><i class="fa fa-home"></i><span>Home</span></a>
				</li>
				<li>
					<a href="#"> <i class="fa fa-cube"></i> <span>Data Master</span><i class="fa fa-angle-down pull-right"></i></a>
					<ul>
						<li>
							<a href="index.php?halaman=jenis">Daftar Jenis</a>
						</li>
						<li>
							<a href="index.php?halaman=produk">Daftar Barang</a>
						</li>
						<li>
							<a href="index.php?halaman=pelanggan">Daftar Pelanggan</a>
						</li>
						<li>
							<a href="index.php?halaman=pesan">Daftar Pesan</a>
						</li>

					</ul>
					
				</li>
				<li>
					<a href=""> <i class="fa fa-shopping-basket"></i><span>foto</span></a>
				</li>
				
					<li>
						<a href=""> <i class="fa fa-sign-out"></i><span>login</span></a>
					</li>
			
			</ul>
		</div>
	</aside>
	<section class="content">
		<div class="inner">
			<?php 
			//jika ada parameter halaman  halaman url maka
			if(!isset($_GET['halaman']))
			{
  			// panggil file home.php
				include 'home.php';
			}
  			// selain itu ada parameter halaman(index.php)
			else
			{
				//jika ada halaman sama dengan jenis, maka panggil folder jenis/tampil jenis.php
				if($_GET['halaman']=="jenis")
				{
					include'jenis/tampiljenis.php';
				}
				elseif($_GET['halaman']=="tambahjenis")
				{
					include'jenis/tambahjenis.php';
				}
				elseif($_GET['halaman']=="ubahjenis")
				{
					include'jenis/ubahjenis.php';
				}
				elseif($_GET['halaman']=="hapusjenis")
				{
					include'jenis/hapusjenis.php';
				}
				if($_GET['halaman']=="produk")
				{
					include'produk/tampilproduk.php';
				}
				elseif($_GET['halaman']=="tambahpelanggan")
				{
					include'pelanggan/tambahpelanggan.php';
				}
				elseif($_GET['halaman']=="tambahproduk")
				{
					include'produk/tambahproduk.php';
				}
				elseif($_GET['halaman']=="hapusproduk")
				{
					include'produk/hapusproduk.php';
				}
				elseif($_GET['halaman']=="ubahproduk")
				{
					include'produk/ubahproduk.php';
				}
				if($_GET['halaman']=="pelanggan")
				{
					include'pelanggan/tampilpelanggan.php';
				}
				if($_GET['halaman']=="pesan")
				{
					include'pesan/tampilpesan.php';
				}
			}


		?>
		</div>

	</section>
</div>
<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center" >
					<h1>SABLON</h1>
					<p>Jln seturan raya <br> Sleman Yogyakarta <br>
						<i class="fa fa-mobile"></i>081244152220 <br><i class="fa fa-envelope"></i> @malutstory.com
					</p>
					<hr class="small">
					<p>Copyright <strong>sablon</strong> 2018. ALL right reserved </p>
				</div>
			</div>
		</div>
	</footer>
	<!--jquery.min.js wajib agar bootstrap.min.js dapat bekerja-->
	<script src="dist/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="dist/js/admin.js"></script>
</body>
</html>