<?php
	include "../config/connect.php";
	
	$call_arti=$_GET[ID];
	
	$sql_L1="SELECT *  FROM `tb_menu` WHERE id_menu='$call_arti'";
	$result_L1=mysql_db_query($dbname,$sql_L1);
	$rs_L1=mysql_fetch_array($result_L1);
	$name_menu=$rs_L1[name_menu];
				
	echo '<class="selected"><a href="contentpage_press.php?ID='.$call_arti.'" class="selected">'.$name_menu.'</a><ul>';
	mysql_close();			
			?>