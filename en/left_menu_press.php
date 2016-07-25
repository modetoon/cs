<?php
	/*include "connect.php";
	
	$call_arti=$_GET[ID];
	
	$sql_L1="SELECT *  FROM `tb_press` WHERE id_press='$call_arti'";
	$result_L1=mysql_db_query($dbname,$sql_L1);
	$rs_L1=mysql_fetch_array($result_L1);
	$name_menu=$rs_L1[name_menu];
	
	if ($call_arti!=''){			
		echo '<class="selected"><a href="http://110.92.118.183/bayer_beta/press.php" class="selected">'.$name_menu.'</a><ul>';
	}else{*/
		echo '<class="select"><a href="press_content.php" class="select">Press</a>';
	//}
	//mysql_close();			
			?>