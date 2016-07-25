<?php
				  include "connect.php";
				  ///////////////////////////////////// Right Menu 1
				  $rmenu = explode(',', $show_rmenu);
				  $position= explode(',', $position_rmenu);
				  $no=0;
				  ///////////////////////////////////// ลูบนับจำนวน rmenu
				  while($no<count($rmenu)) {
					$chkposition=$position[$no];
					if($chkposition==0){
						$no2=0;
						echo '<div class="margiblock">
                				<h1 class="h5">Links</h1>
                				<hr>
									<ul class="mlnk">';
				  		while($no2<count($rmenu)) {
							$sql3="SELECT * FROM `tb_right_menu` WHERE id_rmenu='$rmenu[$no2]'";
							$result32=mysql_db_query($dbname,$sql3);
							$rs3=mysql_fetch_array($result32);
							$name_rmenu=$rs3[name_rmenu];
							$link_rmenu=$rs3[link_rmenu];
							$type_rmenu=$rs3[type_rmenu];
							$pic_link_rmenu=$rs3[pic_link_rmenu];
							if($rmenu[$no2]!=''){
								if ($type_rmenu==0){
									echo '<a href="'.$link_rmenu.'"><img src="'.$pic_link_rmenu.'" /></a>';
								}else if ($type_rmenu==1){
									echo '<ul class="mlnk"><li><a href="'.$link_rmenu.'">'.$name_rmenu.'</a> </li></ul>';
								}else{
									echo '<a href="'.$link_rmenu.'"><img src="'.$pic_link_rmenu.'" /></a><ul class="mlnk"><li><a href="'.$link_rmenu.'">'.$name_rmenu.'</a></li></ul>';
								}
							}
							$no2++;
				  		}
						echo '</ul></div>';
						$no=30;
					}
					$no++;
				  } 
				  ///////////////////////////////////// Right Menu 2
				  
				  $no=0;
				  while($no<count($rmenu)) {
				  	$chkposition=$position[$no];
					if($chkposition==1){
						$no2=0;
						echo '<div class="margiblock">
                				<h1 class="h5">Publications</h1>
                				<hr>
								';
				  		while($no2<count($rmenu)) {
							$sql3="SELECT * FROM `tb_right_menu` WHERE id_rmenu='$rmenu[$no2]'";
							$result32=mysql_db_query($dbname,$sql3);
							$rs3=mysql_fetch_array($result32);
							$name_rmenu=$rs3[name_rmenu];
							$link_rmenu=$rs3[link_rmenu];
							$type_rmenu=$rs3[type_rmenu];
							$pic_link_rmenu=$rs3[pic_link_rmenu];
							if($rmenu[$no2]!=''){
								if ($type_rmenu==0){
									echo '<a href="'.$link_rmenu.'"><img src="'.$pic_link_rmenu.'" /></a>';
								}else if ($type_rmenu==1){
									echo '<ul class="mlnk"><li><a href="'.$link_rmenu.'">'.$name_rmenu.'</a> </li></ul>';
								}else{
									echo '<a href="'.$link_rmenu.'"><img src="'.$pic_link_rmenu.'" /></a><ul class="mlnk"><li><a href="'.$link_rmenu.'">'.$name_rmenu.'</a></li></ul>';
								}
							}
							$no2++;
				  		}
						echo '</div>';
						$no=30;
					}
					$no++;
				  } 
				  //////////////////////////Right Menu 3
				  
				  $no=0;
				  while($no<count($rmenu)) {
				  	$chkposition=$position[$no];
					if($chkposition==2){
						$no2=0;
						echo '<div class="margiblock">
                				<h1 class="h5">New Revolution in Agriculture</h1>
                				<hr>
									';
				  		while($no2<count($rmenu)) {
							$sql3="SELECT * FROM `tb_right_menu` WHERE id_rmenu='$rmenu[$no2]'";
							$result32=mysql_db_query($dbname,$sql3);
							$rs3=mysql_fetch_array($result32);
							$name_rmenu=$rs3[name_rmenu];
							$link_rmenu=$rs3[link_rmenu];
							$type_rmenu=$rs3[type_rmenu];
							$pic_link_rmenu=$rs3[pic_link_rmenu];
							if($rmenu[$no2]!=''){
								if ($type_rmenu==0){
									echo '<a href="'.$link_rmenu.'"><img src="'.$pic_link_rmenu.'" /></a>';
								}else if ($type_rmenu==1){
									echo '<ul class="mlnk"><li><a href="'.$link_rmenu.'">'.$name_rmenu.'</a></li></ul>';
								}else{
									echo '<a href="'.$link_rmenu.'"><img src="'.$pic_link_rmenu.'" /></a><ul class="mlnk"><li><a href="'.$link_rmenu.'">'.$name_rmenu.'</a></li></ul>';
								}
							}
							$no2++;
				  		}
						echo '</div>';
						$no=30;
					}
					$no++;
				  } 
				  /////////////////////////////////Right Menu 4
				  
				  $no=0;
				  while($no<count($rmenu)) {
				  	$chkposition=$position[$no];
					if($chkposition==3){
						$no2=0;
						echo '<div class="margiblock">
                				<h1 class="h5">New Revolution in Agriculture</h1>
                				<hr>
									';
				  		while($no2<count($rmenu)) {
							$sql3="SELECT * FROM `tb_right_menu` WHERE id_rmenu='$rmenu[$no2]'";
							$result32=mysql_db_query($dbname,$sql3);
							$rs3=mysql_fetch_array($result32);
							$name_rmenu=$rs3[name_rmenu];
							$link_rmenu=$rs3[link_rmenu];
							$type_rmenu=$rs3[type_rmenu];
							$pic_link_rmenu=$rs3[pic_link_rmenu];
							if($rmenu[$no2]!=''){
								if ($type_rmenu==0){
									echo '<a href="'.$link_rmenu.'"><img src="'.$pic_link_rmenu.'" /></a>';
								}else if ($type_rmenu==1){
									echo '<ul class="mlnk"><li><a href="'.$link_rmenu.'">'.$name_rmenu.'</a></li></ul>';
								}else{
									echo '<a href="'.$link_rmenu.'"><img src="'.$pic_link_rmenu.'" /></a><ul class="mlnk"><li><a href="'.$link_rmenu.'">'.$name_rmenu.'</a></li></ul>';
								}
							}
							$no2++;
				  		}
						echo '</div>';
						$no=30;
					}
					$no++;
				  } 
				  //////////////////////////////// Right Menu 5
				  $no=0;
				  while($no<count($rmenu)) {
				  	$chkposition=$position[$no];
					if($chkposition==4){
						$no2=0;
						echo '<div class="margiblock">
                				<h1 class="h5">New Revolution in Agriculture</h1>
                				<hr>
									';
				  		while($no2<count($rmenu)) {
							$sql3="SELECT * FROM `tb_right_menu` WHERE id_rmenu='$rmenu[$no2]'";
							$result32=mysql_db_query($dbname,$sql3);
							$rs3=mysql_fetch_array($result32);
							$name_rmenu=$rs3[name_rmenu];
							$link_rmenu=$rs3[link_rmenu];
							$type_rmenu=$rs3[type_rmenu];
							$pic_link_rmenu=$rs3[pic_link_rmenu];
							if($rmenu[$no2]!=''){
								if ($type_rmenu==0){
									echo '<a href="'.$link_rmenu.'"><img src="'.$pic_link_rmenu.'" /></a>';
								}else if ($type_rmenu==1){
									echo '<ul class="mlnk"><li><a href="'.$link_rmenu.'">'.$name_rmenu.'</a></li></ul>';
								}else{
									echo '<a href="'.$link_rmenu.'"><img src="'.$pic_link_rmenu.'" /></a><ul class="mlnk"><li><a href="'.$link_rmenu.'">'.$name_rmenu.'</a></li></ul>';
								}
							}
							$no2++;
				  		}
						echo '</div>';
						$no=30;
					}
					$no++;
				  } 
				  mysql_close();
?>