<?php

$q = intval($_GET['q']);
include "../config/connect.php" ;
$con = mysqli_connect($host,$user,$pw,$dbname);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="Select * from tb_menu where id_menu ='$q'";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
$public_menu=$rs[public_menu] ;

if ($public_menu==1){
	$public_menu=0;
}else{
	$public_menu=1;
}
$sql2="UPDATE tb_menu set public_menu='$public_menu' where id_menu='$q'";
$result2 = mysqli_query($con,$sql2);
$sql3="UPDATE tb_menu_th set public_menu='$public_menu' where id_menu='$q'";
$result3 = mysqli_query($con,$sql3);

$sql9="SELECT * FROM `tb_menu` WHERE id_menu = '$q' LIMIT 1";
$result9=mysql_db_query($dbname,$sql9);
$rs2=mysql_fetch_array($result9);
$id_menu=$rs2[sub_of] ;

		$sql8="SELECT * FROM `tb_menu` WHERE sub_of = '$id_menu' LIMIT 1";
		$result8=mysql_db_query($dbname,$sql8);
		$no=0;
		while($rs8=mysql_fetch_array($result8)) {
			$pb_menu=$rs8[public_menu] ;
			$id_chk=$rs8[id_menu] ;
			if($pb_menu==1)$no++;
		}
		if ($no==0){
			$sql51="UPDATE tb_menu SET `have_sub`=0 WHERE `id_menu`='$id_menu' LIMIT 1 ;";
			$result51=mysql_db_query($dbname,$sql51);
			$sql52="UPDATE `tb_menu_th` SET `have_sub`=0 WHERE `id_menu`='$id_menu' LIMIT 1 ;";
			$result52=mysql_db_query($dbname,$sql52);
		}else{
			$sql51="UPDATE tb_menu SET `have_sub`=1 WHERE `id_menu`='$id_menu' LIMIT 1 ;";
			$result51=mysql_db_query($dbname,$sql51);
			$sql52="UPDATE `tb_menu_th` SET `have_sub`=1 WHERE `id_menu`='$id_menu' LIMIT 1 ;";
			$result52=mysql_db_query($dbname,$sql52);
		}

echo'<label class="control-label" id="firstnameLabel" for="vorname">------ '.$q.' ------ </label>';

mysqli_close($con);
?> 