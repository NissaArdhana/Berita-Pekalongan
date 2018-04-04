<?php 
    include("../../dbo.php"); 

    $id_user = $_POST['id_user'];
    $nama_user = $_POST['nama_user'];
    $pass = md5($_POST['pass']);
    $lev_user = $_POST['lev_user'];
    $sql = mysql_query("update tbuser set "
            . " nama_user='$nama_user', "
            . " pass='$pass', "
            . " lev_user='$lev_user' "
            . " where id_user='$id_user' " ) 
            or die("Query failed with error: ".mysql_error());
    if ($sql) {
            header("location:../../index.php?page=user&insert=success");	
    }
?>