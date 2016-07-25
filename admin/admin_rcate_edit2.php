<?php
	include "checksession.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<title>Administrator: Bayer</title>
</head>
<body class="twoColFixRtHdr">
<div id="container">
  <div style="height:5px; background-color:#df0909; width:100%"></div>
  <!-- end header -->
  <div id="backendContent">
    <? include("admin_menu.php");?>
    <br />
    <br />
    <?php 
	$id_rmenu=$_POST[id_rmenu];
	$name_menu=$_POST[name_menu];
	$name_rmenu_th=$_POST[name_rmenu_th];
	$name_rmenu_backend=$_POST[name_rmenu_backend];
	$content_right_menu=$_POST[content_right_menu];
	$content_right_menu_th=$_POST[content_right_menu_th];
	//echo $name_menu.$name_rmenu_th.$name_rmenu_backend.$content_right_menu.$content_right_menu_th;
	
	$ndate=date('Y-m-d H:i:s');

	include"../connect.php";
	$sql="UPDATE tb_right_menu set name_rmenu='$name_menu', name_rmenu_backend='$name_rmenu_backend', content_right_menu='$content_right_menu' where id_rmenu='$id_rmenu' ";
	$result=mysql_db_query($dbname,$sql);
	
	$sql2="UPDATE tb_right_menu_th set name_rmenu='$name_rmenu_th', name_rmenu_backend='$name_rmenu_backend', content_right_menu='$content_right_menu_th' where id_rmenu='$id_rmenu' ";
	$result2=mysql_db_query($dbname,$sql2);
	if ($result)  {
		echo"Edit name menu successfully<br />";
		echo"<a href='admin_right_cate.php'>Back to Add Right Menu page</a>";
	}else{
		echo"Cannot Edit Industry";
	}
			/*$update=getdate();
  			$updateday=$update["year"]."-".$update["mon"]."-".$update["mday"];
 			$sql2="INSERT INTO test Values(null,'$name2','$updateday')";   
  			$result2=mysql_db_query($dbname,$sql2) or die(mysql_error());
  			if ($result2)  {
  			}else{
   				 echo"Cannot add new Industry";
  			}*/
	mysql_close();
	?>
    <br />
    <br />
    <!-- end #mainContent -->
  </div>
  <div id="imgContent"><img src="../img/FE113_L.jpg"  width="300px"/></div>
  <br class="clearfloat" />
  <!-- end #container -->
  <div id="footer">
    <!--  <h1></h1>    -->
    <div id="backendContent2"></div>
  </div>
</div>
</body>
</html>
