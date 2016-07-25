<?php
	include "../config/connect.php";
	
	$call_arti=$_GET[ID];
	$call_left_menu=$call_arti;
	
	$sql_L1="SELECT *  FROM `tb_menu` WHERE id_menu='$call_arti' AND public_menu=1";
	$result_L1=mysql_db_query($dbname,$sql_L1);
	$rs_L1=mysql_fetch_array($result_L1);
	$sub_of_L1=$rs_L1[sub_of];
	$level_L1=$rs_L1[level];
	$ori_level=$level_L1;
	$call_left_menu=$call_arti;
	
	$keep_select1=$call_arti;
	$keep_select2=$call_arti;
	$keep_select3=$call_arti;
	$keep_select4=$call_arti;
	
	while ($level_L1!=1){
		$sql_L2="SELECT *  FROM `tb_menu` WHERE id_menu='$sub_of_L1' AND public_menu=1";
		$result_L2=mysql_db_query($dbname,$sql_L2);
		$rs_L2=mysql_fetch_array($result_L2);
		
		$sub_of_L1=$rs_L2[sub_of];
		
		$call_left_menu=$rs_L2[id_menu];
		
		$level_L1=$rs_L2[level];
		
		if ($level_L1==3){
			$keep_select3=$call_left_menu;
		}else if($level_L1==2){
			$keep_select2=$call_left_menu;
		}else{
			$keep_select1=$call_left_menu;
		}
	}
				
		$sql51="SELECT *  FROM `tb_menu` WHERE sub_of='$keep_select1' AND name_menu='Overview'";
		$result51=mysql_db_query($dbname,$sql51);
		$rs51=mysql_fetch_array($result51);
		$id_menu51=$rs51[id_menu];
		$sql51="SELECT *  FROM `tb_menu` WHERE id_menu='$keep_select1' AND public_menu=1";
		$result51=mysql_db_query($dbname,$sql51);
		$rs51=mysql_fetch_array($result51);
		$name_menu51=$rs51[name_menu];
		
		$sql52="SELECT *  FROM `tb_menu` WHERE id_menu='$keep_select2' AND public_menu=1";
		$result52=mysql_db_query($dbname,$sql52);
		$rs52=mysql_fetch_array($result52);
		$name_menu52=$rs52[name_menu];
		$id_menu52=$rs52[id_menu];
		
		$sql53="SELECT *  FROM `tb_menu` WHERE id_menu='$keep_select3' AND public_menu=1";
		$result53=mysql_db_query($dbname,$sql53);
		$rs53=mysql_fetch_array($result53);
		$name_menu53=$rs53[name_menu];
		$id_menu53=$rs53[id_menu];
		
		$sql54="SELECT *  FROM `tb_menu` WHERE id_menu='$keep_select4' AND public_menu=1";
		$result54=mysql_db_query($dbname,$sql54);
		$rs54=mysql_fetch_array($result54);
		$name_menu54=$rs54[name_menu];
		$id_menu54=$rs54[id_menu];
		if ($ori_level==4){
			echo '<li><a title="'.$name_menu51.'" href="subhomepage.php?ID='.$id_menu51.'">'.$name_menu51.'</a></li>';
			if ($name_menu52==Overview){
				echo '<li><a title="'.$name_menu52.'" href="subhomepage.php?ID='.$id_menu52.'">'.$name_menu52.'</a></li>';
			}else{
				echo '<li><a title="'.$name_menu52.'" href="contentpage.php?ID='.$id_menu52.'">'.$name_menu52.'</a></li>';
			}
			if ($name_menu53==Overview){
				echo '<li><a title="'.$name_menu53.'" href="subhomepage.php?ID='.$id_menu53.'">'.$name_menu53.'</a></li>';
			}else{
				echo '<li><a title="'.$name_menu53.'" href="contentpage.php?ID='.$id_menu53.'">'.$name_menu53.'</a></li>';
			}
			if ($name_menu54==Overview){
				echo '<li class="last"><a title="'.$name_menu54.'" href="subhomepage.php?ID='.$id_menu54.'">'.$name_menu54.'</a></li>';
			}else{
				echo '<li class="last"><a title="'.$name_menu54.'" href="contentpage.php?ID='.$id_menu54.'">'.$name_menu54.'</a></li>';
			}
		}else if($ori_level==3){
			echo '<li><a title="'.$name_menu51.'" href="subhomepage.php?ID='.$id_menu51.'">'.$name_menu51.'</a></li>';
			if ($name_menu52==Overview){
				echo '<li><a title="'.$name_menu52.'" href="subhomepage.php?ID='.$id_menu52.'">'.$name_menu52.'</a></li>';
			}else{
				echo '<li><a title="'.$name_menu52.'" href="contentpage.php?ID='.$id_menu52.'">'.$name_menu52.'</a></li>';
			}
			if ($name_menu53==Overview){
				echo '<li class="last"><a title="'.$name_menu53.'" href="subhomepage.php?ID='.$id_menu53.'">'.$name_menu53.'</a></li>';
			}else{
				echo '<li class="last"><a title="'.$name_menu53.'" href="contentpage.php?ID='.$id_menu53.'">'.$name_menu53.'</a></li>';
			}
		}else if($ori_level==2){
			echo '<li><a title="'.$name_menu51.'" href="subhomepage.php?ID='.$id_menu51.'">'.$name_menu51.'</a></li>';
			if ($name_menu52==Overview){
				echo '<li class="last"><a title="'.$name_menu52.'" href="subhomepage.php?ID='.$id_menu52.'">'.$name_menu52.'</a></li>';
			}else{
				echo '<li class="last"><a title="'.$name_menu52.'" href="contentpage.php?ID='.$id_menu52.'">'.$name_menu52.'</a></li>';
			}
		}else{
				echo '<li class="last"><a title="'.$name_menu51.'" href="subhomepage.php?ID='.$id_menu51.'">'.$name_menu51.'</a></li>';
		}
						
	mysql_close();
			?>