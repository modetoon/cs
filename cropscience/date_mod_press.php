<?php 
	include "../config/connect.php";
	$call_arti_calldate=$_GET[ID];
	if($call_arti_calldate==''){
		$sql_calldate="SELECT `mod_date` FROM `tb_press` ORDER BY `tb_press`.`mod_date` ASC";
	}else{
		$sql_calldate="SELECT `mod_date` FROM `tb_press` WHERE id_press='$call_arti_calldate'";
	}
	$result_calldate=mysql_db_query($dbname,$sql_calldate);
	$rs_calldate=mysql_fetch_array($result_calldate);
	$modify_article=$rs_calldate[mod_date];
	$exp = explode(" ",$modify_article);
	$t = explode(":",$exp[1]);
	$d = explode("-",$exp[0]);
	$timestamp = mktime($t[0], $t[1], $t[2], $d[1], $d[2], $d[0]);
	echo date("M d, Y", $timestamp);
	mysql_close();
?>