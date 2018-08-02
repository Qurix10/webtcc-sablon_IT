<h2>Data Produk</h2>
<?php 
$semuaproduk = $produk->tampil_produk();
echo "<pre>";
print_r($semuaproduk);
echo "</pre>";
 ?>
 <table class="table table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama Jenis</th>
 			<th>Produk</th>
 			<th>Harga</th>
 			<th>Foto</th>
 			<th>Proses</th>

 		</tr>
 		
 	</thead>
 	<tbody>
 		<?php foreach ($semuaproduk as $key => $value): ?>
 		<tr>
 			<td><?php echo $key+1; ?></td>
 			<td><?php echo $value["nama_jenis"]; ?></td>
 			<td><?php echo $value["nama_produk"]; ?></td>
 			<td><?php echo $value["harga_produk"]; ?></td>
 			<td><?php echo $value["foto_produk"]; ?></td>
 			<td>
 				<a href="index.php?halaman=ubahproduk&id=<?php echo $value['id_produk'] ;?>" class="btn btn-warning">Ubah</a>
 				<a href="index.php?halaman=hapusproduk&id=<?php echo $value['id_produk']; ?>" class="btn btn-danger">Hapus</a>
 			</td>
 		</tr>
 	<?php endforeach ?>
 	</tbody>
 </table>
 <a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data</a>