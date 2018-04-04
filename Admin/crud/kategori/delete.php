<?php
    include '../../dbo.php';
    $id=$_GET["id"];
    $query = "delete from tbkategori where kd_kat='$id'";
    $result = mysql_query($query) or die("Query failed with error: ".mysql_error());
    if ($result) {
        header("location:../../index.php?page=kategori&delete=success");	
    }
?>

