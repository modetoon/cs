<?php
	include "../config/connect.php";
	$call_arti=$_GET[ID];	

	$sql="select * from tb_menu_th WHERE public_menu=1 order by menu_sequence ASC";
	$result=mysql_db_query($dbname,$sql);
	while($rs=mysql_fetch_array($result)) {
			$s1_id_menu=$rs[id_menu] ;
			$s1_name_menu=$rs[name_menu] ;
			$s1_level=$rs[level] ;
			$s1_menu_image=$rs[menu_image] ;
			$s1_menu_intro=$rs[menu_intro] ;
			
						
			$sql14="select id_menu from tb_menu_th WHERE sub_of='$s1_id_menu' AND name_menu='ภาพรวม' AND public_menu=1 AND public_menu=1;";
			$result14=mysql_db_query($dbname,$sql14);
			while($rs14=mysql_fetch_array($result14)) {
			$s14_id_menu=$rs14[id_menu] ;
			}
			
			if ($s1_level==1){
			///////////////////////////////////// Main Menu
			echo '<li class="n2"><a href="subhomepage.php?ID='.$s14_id_menu.'" class="haschild ">'.$s1_name_menu.'</a>';
			echo '<ul class="newsub">';
			echo '<li class="megaTsrBx">';
			echo '<h2 class="thdln">'.$s1_name_menu.'</h2>';
			echo '<a href="subhomepage.php?ID='.$s14_id_menu.'"><img class="lazy" width="170" height="100" src="'.$s1_menu_image.'" alt="" data-original="'.$s1_menu_image.'"/></a>';
			echo '<p>'.$s1_menu_intro.'</p>';
			echo '<div class="lnk"><a href="subhomepage.php?ID='.$s14_id_menu.'">ภาพรวม</a></div>';
			echo '</li>';
			
			
			echo '<li class="newlevel2">';
			$sql5="select * from tb_menu_th WHERE public_menu=1 order by menu_sequence ASC" ;;
			$result51=mysql_db_query($dbname,$sql5);
			$result52=mysql_db_query($dbname,$sql5);
			echo '<ul>';
				while($rs5=mysql_fetch_array($result51)) {
					$s2_id_menu=$rs5[id_menu] ;
					$s2_sub_of=$rs5[sub_of] ;
					$s2_name_menu=$rs5[name_menu] ;
					if($s2_sub_of==$s1_id_menu && $s2_name_menu==ภาพรวม){
						////////////////////////////////////////////////// Sub LV1 overview
						echo '<li class="notmobile"><a href="subhomepage.php?ID='.$s2_id_menu.'">ภาพรวม</a></li>';
					}
				}
				while($rs5=mysql_fetch_array($result52)) {
					$s2_id_menu=$rs5[id_menu] ;
					$s2_sub_of=$rs5[sub_of] ;
					$s2_name_menu=$rs5[name_menu] ;
					$s2_level=$rs5[level] ;
					$s2_have_sub=$rs5[have_sub] ;
					if($s2_sub_of==$s1_id_menu && $s2_name_menu!=ภาพรวม){
						////////////////////////////////////////////////// Sub LV1
						if($s2_have_sub==1){
						echo '<li class="haschild"><a href="contentpage.php?ID='.$s2_id_menu.'">'.$s2_name_menu.'</a><ul>';
						
						$sql6="select * from tb_menu_th WHERE public_menu=1 order by menu_sequence ASC" ;
						$result61=mysql_db_query($dbname,$sql6);
						$result62=mysql_db_query($dbname,$sql6);
						while($rs6=mysql_fetch_array($result61)) {
							$s3_id_menu=$rs6[id_menu] ;
							$s3_sub_of=$rs6[sub_of] ;
							$s3_name_menu=$rs6[name_menu] ;
							if($s3_sub_of==$s2_id_menu && $s3_name_menu==ภาพรวม){
								////////////////////////////////////////////////// Sub LV2 overview
								echo '<li class="notmobile"><a href="subhomepage.php?ID='.$s3_id_menu.'">ภาพรวม</a></li>';
							}
						}
						while($rs6=mysql_fetch_array($result62)) {
							$s3_id_menu=$rs6[id_menu] ;
							$s3_sub_of=$rs6[sub_of] ;
							$s3_name_menu=$rs6[name_menu] ;
							$s3_level=$rs6[level] ;
							$s3_have_sub=$rs6[have_sub] ;
							if($s3_sub_of==$s2_id_menu && $s3_name_menu!=ภาพรวม){
								////////////////////////////////////////////////// Sub LV2
								if($s3_have_sub==1){
									echo '<li class="haschild"><a href="contentpage.php?ID='.$s3_id_menu.'">'.$s3_name_menu.'</a><ul>';
								
								$sql7="select * from tb_menu_th WHERE public_menu=1 order by menu_sequence ASC" ;
								$result71=mysql_db_query($dbname,$sql7);
								$result72=mysql_db_query($dbname,$sql7);
								while($rs7=mysql_fetch_array($result71)) {
									$s4_id_menu=$rs7[id_menu] ;
									$s4_sub_of=$rs7[sub_of] ;
									$s4_name_menu=$rs7[name_menu] ;
									if($s4_sub_of==$s3_id_menu && $s4_name_menu==ภาพรวม){
										////////////////////////////////////////////////// Sub LV3 overview
										echo '<li class="notmobile"><a href="subhomepage.php?ID='.$s4_id_menu.'">ภาพรวม</a></li>';
									}
								}
								
								while($rs7=mysql_fetch_array($result72)) {
									$s4_id_menu=$rs7[id_menu] ;
									$s4_sub_of=$rs7[sub_of] ;
									$s4_name_menu=$rs7[name_menu] ;
									$s4_level=$rs7[level] ;
									if($s4_sub_of==$s3_id_menu && $s4_name_menu!=ภาพรวม){
										////////////////////////////////////////////////// Sub LV3
										echo '<li class="notmobile"><a href="contentpage.php?ID='.$s4_id_menu.'">'.$s4_name_menu.'</a></li>';
									}
								}
								echo '</ul></li>';
								}else{
									echo '<li><a href="contentpage.php?ID='.$s3_id_menu.'" class="haschild">'.$s3_name_menu.'</a></li>';
								}
							}
						}
						echo '</ul></li>';
						}else{
							echo '<li class="notmobile"><a href="contentpage.php?ID='.$s2_id_menu.'">'.$s2_name_menu.'</a></li>';
						}
					}
				}
			
			echo '</ul>';
			
			echo '</li>';
			echo '</ul>';
			echo '</li>';
			}
		}
		
	///////////////////////////Press/////////////////
			$sql27="select * from tb_menu_th WHERE name_menu='ข่าว'";
			$result27=mysql_db_query($dbname,$sql27);
			$rs27=mysql_fetch_array($result27);
			$s27_id_menu=$rs27[id_menu] ;
			//$s1_name_menu=$rs[name_menu] ;
			//$s1_level=$rs[level] ;
			$s27_menu_image=$rs27[menu_image] ;
			$s27_menu_intro=$rs27[menu_intro] ;
			
		
    	echo '<li class="n2 "><a href="press_content.php" class="haschild ">ข่าว</a>
          <ul class="newsub">
            <li class="megaTsrBx">
              <h2 class="thdln">ข่าว</h2>
              <a href="press_content.php"><img class="lazy" width="170" height="100" src="img/sys/ph.png" alt="" data-original="'.$s27_menu_image.'"/></a>
			 
              <p>'.$s27_menu_intro.'</p>
              <div class="lnk"><a href="press_content.php">ภาพรวม</a></div>
            </li>
            
            <li class="newlevel2">
              <ul>
              <li class="notmobile"><a href="press_content.php">ข่าว</a></li>
			  <li class="notmobile"><a href="press_corperate.php">Global News</a></li>
              </ul>
            </li>
          </ul>
        </li>';
		
		///////////////////////////Job & Career/////////////////
			$sql28="select * from tb_menu_th WHERE name_menu='สมัครงาน'";
			$result28=mysql_db_query($dbname,$sql28);
			$rs28=mysql_fetch_array($result28);
			$s28_id_menu=$rs28[id_menu] ;
			//$s1_name_menu=$rs[name_menu] ;
			//$s1_level=$rs[level] ;
			$s28_menu_image=$rs28[menu_image] ;
			$s28_menu_intro=$rs28[menu_intro] ;
			mysql_close();
		
    	echo '
        
        <li class="n2"><a href="jobs_content.php" class="haschild ">สมัครงาน</a>
          <ul class="newsub">
            <li class="megaTsrBx">
              <h2 class="thdln">สมัครงาน</h2>
              <a href="jobs_content.php"><img class="lazy" width="170" height="100" src="img/sys/ph.png" alt="" data-original="'.$s28_menu_image.'"/></a>
              <p>'.$s28_menu_intro.'</p>
              <div class="lnk"><a href="jobs_content.php">ภาพรวม</a></div>
            </li>
            <li class="newlevel2">
              <ul>
			  <li class="notmobile"><a href="jobs_content.php">สมัครงาน</a></li>
              </ul>
            </li>
          </ul>
        </li>';
		?>