<?php
	include "../config/connect.php";
	
	$call_arti=$_GET[ID];
	$call_left_menu=$call_arti;
	
	$sql_L1="SELECT *  FROM `tb_menu` WHERE id_menu='$call_arti' AND public_menu=1";
	$result_L1=mysql_db_query($dbname,$sql_L1);
	$rs_L1=mysql_fetch_array($result_L1);
	$sub_of_L1=$rs_L1[sub_of];
	$level_L1=$rs_L1[level];
	$call_left_menu=$call_arti;
	
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
		}
	}
				
				$sql5="select * from tb_menu WHERE public_menu=1 order by menu_sequence ASC" ;
				$result51=mysql_db_query($dbname,$sql5);
				$result52=mysql_db_query($dbname,$sql5);
				while($rs5=mysql_fetch_array($result51)) {
					$s2_id_menu=$rs5[id_menu] ;
					$s2_sub_of=$rs5[sub_of] ;
					$s2_name_menu=$rs5[name_menu] ;
					$s1_Have_sub=$rs5[Have_sub] ;
					if($s2_sub_of==$call_left_menu && $s2_name_menu==Overview){
						////////////////////////////////////////////////// Sub LV1 overview
						if($s2_id_menu==$keep_select2){
							echo '<li class="selected"><a href="subhomepage.php?ID='.$s2_id_menu.'" class="selected">Overview</a></li>';
						}else{
							echo '<li><a href="subhomepage.php?ID='.$s2_id_menu.'">Overview</a></li>';
						}
						$optionlv2++;
					}
				}
				////////////////////////////////////////
				
				while($rs5=mysql_fetch_array($result52)) {
					$s2_id_menu=$rs5[id_menu] ;
					$s2_sub_of=$rs5[sub_of] ;
					$s2_name_menu=$rs5[name_menu] ;
					$s2_level=$rs5[level] ;
					$s2_Have_sub=$rs5[have_sub] ;
					if($s2_sub_of==$call_left_menu && $s2_name_menu!=Overview){
						////////////////////////////////////////////////// Sub LV1
						if ($s2_Have_sub==1){
							if($s2_id_menu==$keep_select2){
								echo '<li class="haschildren selected"><a href="contentpage.php?ID='.$s2_id_menu.'" class="selected">'.$s2_name_menu.'</a><ul>';
							}else{
								echo '<li class="haschildren"><a href="contentpage.php?ID='.$s2_id_menu.'">'.$s2_name_menu.'</a><ul>';
							}
						
							$sql6="select * from tb_menu WHERE public_menu=1 order by menu_sequence ASC" ;
							$result61=mysql_db_query($dbname,$sql6);
							$result62=mysql_db_query($dbname,$sql6);
							while($rs6=mysql_fetch_array($result61)) {
								$s3_id_menu=$rs6[id_menu] ;
								$s3_sub_of=$rs6[sub_of] ;
								$s3_name_menu=$rs6[name_menu] ;
								if($s3_sub_of==$s2_id_menu && $s3_name_menu==Overview){
								////////////////////////////////////////////////// Sub LV2 overview
									if($s3_id_menu==$keep_select3){
										echo '<li class="selected"><a href="subhomepage.php?ID='.$s3_id_menu.'" class="selected">-- Overview</a></li>';
									}else{
										echo '<li><a href="subhomepage.php?ID='.$s3_id_menu.'">-- Overview</a></li>';
									}
								}
							}
							while($rs6=mysql_fetch_array($result62)) {
								$s3_id_menu=$rs6[id_menu] ;
								$s3_sub_of=$rs6[sub_of] ;
								$s3_name_menu=$rs6[name_menu] ;
								$s3_level=$rs6[level] ;
								$s3_Have_sub=$rs6[have_sub] ;
								if($s3_sub_of==$s2_id_menu && $s3_name_menu!=Overview){
								////////////////////////////////////////////////// Sub LV2
									if ($s3_Have_sub==1){
										if($s3_id_menu==$keep_select3){
											echo '<li class="haschildren selected"><a href="contentpage.php?ID='.$s3_id_menu.'" class="selected">'.$s3_name_menu.'</a><ul>';
										}else{
											echo '<li class="haschildren"><a href="contentpage.php?ID='.$s3_id_menu.'">'.$s3_name_menu.'</a><ul>';
										}
									
									$sql7="select * from tb_menu WHERE public_menu=1 order by menu_sequence ASC" ;
									$result71=mysql_db_query($dbname,$sql7);
									$result72=mysql_db_query($dbname,$sql7);
									while($rs7=mysql_fetch_array($result71)) {
										$s4_id_menu=$rs7[id_menu] ;
										$s4_sub_of=$rs7[sub_of] ;
										$s4_name_menu=$rs7[name_menu] ;
										if($s4_id_menu==$s3_id_menu && $s4_name_menu==Overview){
										////////////////////////////////////////////////// Sub LV3 overview
											if($s4_id_menu==$keep_select4){
												echo '<li class="selected"><a href="subhomepage.php?ID='.$s4_id_menu.'" class="selected">Overview</a></li>';
											}else{
												echo '<li><a href="subhomepage.php?ID='.$s4_id_menu.'">Overview</a></li>';
											}
										}
									}
								
									while($rs7=mysql_fetch_array($result72)) {
										$s4_id_menu=$rs7[id_menu] ;
										$s4_sub_of=$rs7[sub_of] ;
										$s4_name_menu=$rs7[name_menu] ;
										$s4_level=$rs7[level] ;
										if($s4_sub_of==$s3_id_menu && $s4_name_menu!=Overview){
										////////////////////////////////////////////////// Sub LV3
											if($s4_id_menu==$keep_select4){
												echo '<li class="selected"><a href="contentpage.php?ID='.$s4_id_menu.'" class="selected">'.$s4_name_menu.'</a></li>';
											}else{
												echo '<li><a href="contentpage.php?ID='.$s4_id_menu.'">'.$s4_name_menu.'</a></li>';
											}
										}
									
									}
									echo '</ul></li>';
									}else{
										if($s3_id_menu==$keep_select3){
											echo '<li class="selected"><a href="contentpage.php?ID='.$s3_id_menu.'" class="selected">'.$s3_name_menu.'</a></li>';
										}else{
											echo '<li><a href="contentpage.php?ID='.$s3_id_menu.'">'.$s3_name_menu.'</a></li>';
										}
									}
								}
							}
							echo '</ul></li>';
						}else{
							if($s2_id_menu==$keep_select2){
								echo '<li class="selected"><a href="contentpage.php?ID='.$s2_id_menu.'" class="selected"> '.$s2_name_menu.'</a></li>';
							}else{
								echo '<li><a href="contentpage.php?ID='.$s2_id_menu.'"> '.$s2_name_menu.'</a></li>';
							}
						}
						
					}		
				}
	mysql_close();			
			?>