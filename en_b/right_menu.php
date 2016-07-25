<?php
				  include "../config/connect.php";
				  ///////////////////////////////////// Right Menu 1
				  $rmenu = explode(',', $show_rmenu);
				  //$position= explode(',', $position_rmenu);
				  $no=0;
				  ///////////////////////////////////// ลูบนับจำนวน rmenu
				  
				  while($no<count($rmenu)) {
					echo '<div>';
					//$chkposition=$position[$no];
					
							$sql32="SELECT * FROM `tb_right_menu` WHERE id_rmenu='$rmenu[$no]'";
							$result32=mysql_db_query($dbname,$sql32);
							$rs32=mysql_fetch_array($result32);
							if($rs32[content_right_menu]!=''){
								echo $rs32[content_right_menu];
							}
							$no++;
						/////////////////////////////////
					echo '</div>';
					}
				  mysql_close();
				  
?>