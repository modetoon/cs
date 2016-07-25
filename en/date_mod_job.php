<?php 
	include "../config/connect.php";
	$call_arti_calldate=$_GET[ID];
	if($call_arti_calldate==''){
		$sql_calldate="SELECT * FROM `tb_job` ORDER BY `tb_job`.`upload_date` DESC";
	}else{
		$sql_calldate="SELECT * FROM `tb_job` WHERE id_job='$call_arti_calldate'";
	}
	$result_calldate=mysql_db_query($dbname,$sql_calldate);
	$rs_calldate=mysql_fetch_array($result_calldate);
	
	$upload_date=$rs_calldate[upload_date];
	$exp = explode(" ",$upload_date);
	$t = explode(":",$exp[1]);
	$d = explode("-",$exp[0]);
	$timestamp = mktime($t[0], $t[1], $t[2], $d[1], $d[2], $d[0]);
	echo date("M d, Y", $timestamp);
	mysql_close();
?>