<?php 
    include("../../dbo.php"); 

    $kd_kat = $_POST['kd_kat'];
    $kategori = $_POST['kategori'];
    $sql = mysql_query("update tbkategori set kategori='$kategori' "
            . " where kd_kat='$kd_kat' " ) 
            or die("Query failed with error: ".mysql_error());
    if ($sql) {
            header("location:../../index.php?page=kategori&insert=success");	
    }
?>

