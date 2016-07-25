<?php
	 	include "../config/connect.php";
		$sql_btm="select * from tb_menu_th WHERE public_menu=1 order by menu_sequence ASC";
		$result_btm=mysql_db_query($dbname,$sql_btm);
		
		while($rs_btm=mysql_fetch_array($result_btm)) {
			$s1_id_menu_btm=$rs_btm[id_menu] ;
			$s1_name_menu_btm=$rs_btm[name_menu] ;
			$s1_level_btm=$rs_btm[level] ;
			
			$sql14="select id_menu from tb_menu_th WHERE sub_of='$s1_id_menu_btm' AND name_menu='ภาพรวม' AND public_menu=1;";
			$result14=mysql_db_query($dbname,$sql14);
			$rs14=mysql_fetch_array($result14);
			$s14_id_menu_btm=$rs14[id_menu] ;
			
			if ($s1_level_btm==1){
				echo '<li class="fctgry unit n2"><a href="subhomepage.php?ID='.$s14_id_menu_btm.'" class="fhead">'.$s1_name_menu_btm.'</a>';
				echo '<ul>';
				$sql5_btm="select * from tb_menu_th where public_menu=1 order by menu_sequence ASC" ;;
				$result5_btm=mysql_db_query($dbname,$sql_btm);
				while($rs5_btm=mysql_fetch_array($result5_btm)) {
					$s2_id_menu_btm=$rs5_btm[id_menu] ;
					$s2_sub_of_btm=$rs5_btm[sub_of] ;
					$s2_name_menu_btm=$rs5_btm[name_menu] ;
					if($s2_sub_of_btm==$s1_id_menu_btm && $s2_name_menu_btm!="ภาพรวม"){
						////////////////////////////////////////////////// Sub LV1 overview
						echo '<li><a href="contentpage.php?ID='.$s2_id_menu_btm.'">'.$s2_name_menu_btm.'</a></li>';
					}
				}
				echo '</ul>';
				echo '</li>';
			}
		}
		mysql_close();
?>