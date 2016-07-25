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
    <br />
    <?php
    $id_del=$_GET[id_del];
    include "../config/connect.php";
	$sql="DELETE from tb_right_menu where id_rmenu='$id_del'";
	$result=mysql_db_query($dbname,$sql);
	$sql="DELETE from tb_right_menu_th where id_rmenu='$id_del'";
	$result=mysql_db_query($dbname,$sql);
	if ($result) {
		echo "Delete right menu complete <br />";
		echo "<a href='admin_right_cate.php'>Back to Add RIHGT Menu page</a>";
	} else {
		echo "Cannot delete right menu";
	}
	mysql_close();
	?>
    <br />
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
