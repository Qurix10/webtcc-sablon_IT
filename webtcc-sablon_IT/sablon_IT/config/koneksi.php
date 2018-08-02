<?php 
 
//membuat koneksi ke database
//server = "127.0.0.1"
//user = "root"
//password = ""
//dbname = "kaos_sablonit"
//skrip membuat koneksi database
$mysqli = new  mysqli("127.0.0.1","root","","kaos_sablonit");

class jenis
{
	public $koneksi;
	function __construct($mysqli)
	{
		$this->koneksi = $mysqli;
	}
	function tampil_jenis()
	{
		//1.mengambil data dari jenis
		$ambil = $this->koneksi->query("SELECT * FROM jenis");
		//2.pecah ke array dan diperulangkan
		while($pecah = $ambil->fetch_assoc())
		{
			//3.gabungan array ke semuadata (array multidemensi)
			$semuadata[] = $pecah;
		}
		//4.outputkan semua sebagai hasil akhir
		return $semuadata;
	}
	function simpan_jenis($nama)
	{
		$this->koneksi->query("INSERT INTO jenis(nama_jenis)VALUES('$nama')");
	}
	function hapus_jenis($id)
	{
		$this->koneksi->query("DELETE FROM jenis WHERE id_jenis='$id'");
	}
	function ambil_jenis($id)
	{
		//mengambil 1 data jenis yg id nya $id
		$ambil = $this->koneksi->query("SELECT * FROM jenis WHERE id_jenis='$id'");
		//pecah ke array
		$pecah = $ambil->fetch_assoc();
		//outputkan hasilnya
		return $pecah;
	}
	function ubah_jenis($nama,$id)
	{
		$this->koneksi->query("UPDATE jenis SET nama_jenis='$nama' WHERE id_jenis='$id'");
	}
}
class pelanggan
{
	public $koneksi;
	function __construct($mysqli)
	{
		$this->koneksi = $mysqli;
	}
	function tampil_pelanggan()
	{
		//1.mengambil data dari pelanggan
		$ambildata = $this->koneksi->query("SELECT * FROM pelanggan");
		//2.pecah ke array dan diperulangkan
		while($pecahdata = $ambildata->fetch_assoc())
		{
			//3.gabungan array ke semuadata (array multidemensi)
			$semuadata[] = $pecahdata;
		}
		//4.outputkan semua sebagai hasil akhir
		return $semuadata;
	}
	function simpan_pelanggan($nama,$email,$username,$pass,$telp,$alamat)
	{
		//rename dengan waktu
		$waktu = date("Y_m_d_H_i_s");
		$this->koneksi->query("INSERT INTO pelanggan(nama_pelanggan,email_pelanggan,username_pelanggan,password_pelanggan,telepon_pelanggan,alamat_pelanggan)VALUES('$nama','$email','$username','$pass','$telp','$alamat')");
	}
}
class produk
{
	public $koneksi;
	function __construct($mysqli)
	{
		$this->koneksi = $mysqli;
	}
	function tampil_produk()
	{
		//1.akses query ke tabel produk
		$ambil = $this->koneksi->query("SELECT * FROM produk JOIN jenis ON produk.id_jenis=jenis.id_jenis");
		//2.pecah ke array dan diperulangkan
		while($pecah = $ambil->fetch_assoc())
		{
			//3.gabungan array ke semuadata (array multidemensi)
			$semuadata[] = $pecah;
		}
		//4.outputkan semua sebagai hasil akhir
		return $semuadata;
	}
	function simpan_produk($idjen,$nama,$harga,$foto)
	{
		echo "<pre>";
		print_r($foto);
		echo "</pre>";
		//mengambil nama foto
		$namafoto = $foto['name'];
		//mengambil lokasi foto
		$lokasifoto = $foto['tmp_name'];
		//mengupload dari lokasi ke../foto_produk/namafoto
		move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");
		//query simpan ke tabel produk
		$this->koneksi->query("INSERT INTO produk(id_jenis,nama_produk,harga_produk,foto_produk)VALUES('$idjen','$nama','$harga','$namafoto')");

	}
	function ambil_produk($id_produk)
	{
		
		$ambil = $this->koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
		//selanjutnya pecah ke array bentuk fetch_assoc
		$pecah = $ambil->fetch_assoc();

		return $pecah;
	}
	function hapus_produk($id_produk)
	{
		$this->koneksi->query("DELETE FROM produk WHERE id_produk='$id_produk'");
	}
	function ubah_produk($idjen,$nama,$harga,$foto)
	{
		echo "<pre>";
		print_r($foto);
		echo "</pre>";
		//mengambil nama foto
		$namafoto = $foto['name'];
		//mengambil lokasi foto
		$lokasifoto = $foto['tmp_name'];
		//jiak kosong lokasi gambar
		if(empty($lokasifoto))
		//query ubah data  produk tdk termasuk gambar
		{
		$this->koneksi->query("UPDATE produk SET id_jenis='$idjen',nama_produk='$nama',harga_produk='$harga'WHERE id_produk='$id_produk'");
		}
		//selain itu foto dirubah
		else
		{
			//upload foto yang baru dari lokasi ke gambar folder../foto_produk/namafoto
			move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");
			$this->koneksi->query("UPDATE produk SET id_jenis='$idjen',nama_produk='$nama',harga_produk='$harga',foto_produk='$namafoto'WHERE id_produk='$id_produk'");
		}
	}

}

$jenis = new jenis($mysqli);
$pelanggan = new pelanggan($mysqli);
$produk = new produk($mysqli);
 ?>