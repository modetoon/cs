<?php

$q = intval($_GET['q']);
include "../config/connect.php" ;
$con = mysqli_connect($host,$user,$pw,$dbname);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="Select * from tb_press where id_press ='$q'";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
$public_press=$rs[public_press] ;

if ($public_press==1){
	$public_press=0;
}else{
	$public_press=1;
}
$sql2="UPDATE tb_press set public_press='$public_press' where id_press='$q'";
$result2 = mysqli_query($con,$sql2);

$sql3="UPDATE tb_press_th set public_press='$public_press' where id_press='$q'";
$result3 = mysqli_query($con,$sql3);

echo'<label class="control-label" id="firstnameLabel" for="vorname">------ '.$q.' ------ </label>';

mysqli_close($con);
?> 