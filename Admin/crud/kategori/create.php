<?php 
error_reporting(0);
    include("../../dbo.php"); 
    
    $kd_kat = $_POST['kd_kat'];
    $kategori = $_POST['kategori'];
    $sql = mysql_query("insert INTO tbkategori VALUES ('$kd_kat', '$kategori')" ) 
            or die("Query failed with error: ".mysql_error());
    if ($sql) {
            header("location:../../index.php?page=kategori&insert=success");	
    }
?>

