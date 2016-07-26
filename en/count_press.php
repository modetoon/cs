<?php
	include "../config/connect.php";
	$call_arti=$_GET[ID];
	$sql71="select * from tb_press WHERE id_press='$call_arti'";
	$result71=mysql_db_query($dbname,$sql71);
	$rs71=mysql_fetch_array($result71);
	$view_count=$rs71[view_count] ;
	$view_count++;
	$sql72="UPDATE tb_press set view_count='$view_count' where id_press='$call_arti' ";
	$result72=mysql_db_query($dbname,$sql72) or die(mysql_error());
	mysql_close();
	echo '';
?>