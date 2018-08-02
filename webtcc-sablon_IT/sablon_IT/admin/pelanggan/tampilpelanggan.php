<h2>Data Pelanggan</h2>
<?php 
$datapelanggan = $pelanggan->tampil_pelanggan();
echo "<pre>";
print_r($datapelanggan);
echo "</pre>";
 ?>
 <table class="table table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama </th>
 			<th>Email</th>
 			<th>Username</th>
 			<th>Telepon</th>
 			<th>Alamat</th>
 			<th>Proses</th>

 		</tr>
 		
 	</thead>
 	<tbody>
 		<?php foreach ($datapelanggan as $key => $value): ?>
 		<tr>
 			<td><?php echo $key+1; ?></td>
 			<td><?php echo $value["nama_pelanggan"]; ?></td>
 			<td><?php echo $value["email_pelanggan"]; ?></td>
 			<td><?php echo $value["username_pelanggan"]; ?></td>
 			<td><?php echo $value["telepon_pelanggan"]; ?></td>
 			<td><?php echo $value["alamat_pelanggan"]; ?></td>
 			<td>
 				<a href="index.php?halaman=ubahpelanggan&id=<?php echo $value['id_pelanggan'] ;?>" class="btn btn-warning">Ubah</a>
 				<a href="index.php?halaman=hapuspelanggan&id=<?php echo $value['id_pelanggan']; ?>" class="btn btn-danger">Hapus</a>
 			</td>
 		</tr>
 	<?php endforeach ?>
 	</tbody>
 </table>
 <a href="index.php?halaman=tambahpelanggan" class="btn btn-primary">Daftar pelanggan</a>