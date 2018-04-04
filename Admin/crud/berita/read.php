<?php 
include("../../dbo.php");

$sql = mysql_query("select * from tbberita a, tbkategori b where a.kd_kat=b.kd_kat" )
			or die ("Query failed with error: ".mysql_error());
$arraydata = array();

while($baris = mysql_fetch_assoc($sql))
	 {
		$arraydata[]=$baris;
	}
	
	echo json_encode($arraydata);
?>