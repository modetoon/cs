<?php 
	include "../config/connect.php";
	$call_arti_calldate=$_GET[ID];
	if($call_arti_calldate==''){
		$sql_calldate="SELECT `upload_date` FROM `tb_job` ORDER BY `tb_job`.`upload_date` DESC ";
	}else{
		$sql_calldate="SELECT `upload_date` FROM `tb_job` WHERE id_job='$call_arti_calldate'";
	}
	$result_calldate=mysql_db_query($dbname,$sql_calldate);
	if ($rs_calldate=mysql_fetch_array($result_calldate)){
	$upload_date=$rs_calldate[upload_date];
	$exp = explode(" ",$upload_date);
	$t = explode(":",$exp[1]);
	$d = explode("-",$exp[0]);
	$timestamp = mktime($t[0], $t[1], $t[2], $d[1], $d[2], $d[0]);
	//echo date("M d, Y", $timestamp);
	echo (int)$d[2];
	
	if ($d[1]==1){
		echo ' มกราคม ';
	}else if($d[1]==2){
		echo ' กุมภาพันธ์ ';
	}else if($d[1]==3){
		echo ' มีนาคม ';
	}else if($d[1]==4){
		echo ' เมษายน ';
	}else if($d[1]==5){
		echo ' พฤษภาคม ';
	}else if($d[1]==6){
		echo ' มิถุนายน ';
	}else if($d[1]==7){
		echo ' กรกฎาคม ';
	}else if($d[1]==8){
		echo ' สิงหาคม ';
	}else if($d[1]==9){
		echo ' กันยายน ';
	}else if($d[1]==10){
		echo ' ตุลาคม ';
	}else if($d[1]==11){
		echo ' พฤศจิกายน ';
	}else if($d[1]==12){
		echo ' ธันวาคม ';
	}
	
	echo $d[0]+543;
	}
	mysql_close();
?>