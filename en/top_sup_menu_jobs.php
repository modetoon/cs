<?php
	/*include "connect.php";
	
	$call_arti=$_GET[ID];
	
	$sql_L1="SELECT *  FROM `tb_press` WHERE id_press='$call_arti'";
	$result_L1=mysql_db_query($dbname,$sql_L1);
	$rs_L1=mysql_fetch_array($result_L1);
	$name_menu=$rs_L1[name_menu];
	if ($call_arti!=''){
		echo '<li><a title="'.$name_menu.'" href="http://110.92.118.183/bayer_beta/jobs_content.php">'.$name_menu.'</a></li>';
	}else{*/
		echo '<li class="last"><a title="Jobs" href="jobs_content.php">Job & Career</a></li>';
	/*}
	mysql_close();*/			
			?>