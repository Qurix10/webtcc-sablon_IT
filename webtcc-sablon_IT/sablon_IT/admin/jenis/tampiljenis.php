<?php 
$datajenis = $jenis->tampil_jenis();
echo "<pre>";
print_r($datajenis);
echo "</pre>";
 ?>
<h2>Data Jenis</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Proses</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($datajenis as $key => $value) :?>
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $value["nama_jenis"]; ?></td>
			<td>
				<a href="index.php?halaman=ubahjenis&kd=<?php echo $value['id_jenis'] ?>" class="btn btn-warning">Ubah</a>
				<a href="index.php?halaman=hapusjenis&id=<?php echo $value['id_jenis'] ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahjenis" class="btn btn-primary">Tambah Data</a>