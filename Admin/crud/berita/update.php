<?php 
	include("../../dbo.php");
	error_reporting(0);
 $id_berita = $_POST['id_berita'];	
 $kd_kat = $_POST['kode_kat'];
 $tanggal = $_POST['tanggal'];
 $judul = $_POST['judul'];
 $isi_berita = $_POST['isi_berita'];
 $image_source = $_FILES['gambar']['tmp_name'];
 $path = '../../img/';
 $gambar = $_FILES['gambar']['name'];
	$sql = mysql_query("update tbberita set kd_kat='$kd_kat', tanggal='$tanggal', judul='$judul', isi_berita='$isi_berita', gambar='$gambar' "
			. " where id_berita='$id_berita' " )
			or die("Query failed with error: ".mysql_error());
	
move_uploaded_file($image_source, $path.$gambar);
	if ($sql) {
		header("location:../../index.php?page=berita&insert=success");
	}
?>
