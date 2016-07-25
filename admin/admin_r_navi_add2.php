<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?>
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Add Right Navigation</h1>
    <?php
	include "../config/connect.php" ;
	
	$name_menu=$_POST[name_menu];
	$name_rmenu_th=$_POST[name_rmenu_th];
	$name_rmenu_backend=$_POST[name_rmenu_backend];
	$content_right_menu_th= mysql_real_escape_string($_POST['content_right_menu_th']);
	$content_right_menu= mysql_real_escape_string($_POST['content_right_menu']);
	
	$ndate=date('Y-m-d');
	//$upload_path="defualt";
	
	$sql="SELECT * FROM `tb_right_menu` WHERE name_rmenu_backend = '$name_rmenu_backend' LIMIT 1;";
	$objQuery = mysql_query($sql) or die ("Error Query [".$sql."]");
	$result = mysql_fetch_array($objQuery);
	if ($result){
		echo"<p><span style='color:#F00'>You cannot add new RIGHT Navigation !! Because it have this right navigation name in the system already.</span></p><br />";
		echo"<p><span class='txtnormal'>Click <a href='admin_r_navi_add.php'>here</a> to try again</a></span></p>";
	}else{
		$sql21="INSERT INTO `tb_right_menu` (`id_rmenu` ,`name_rmenu` ,`name_rmenu_backend` ,`content_right_menu` ,`date_mod_rmenu`)VALUES ('', '$name_menu', '$name_rmenu_backend', '$content_right_menu', '$ndate');";   
		$result21=mysql_db_query($dbname,$sql21) or die(mysql_error());
		$sql22="INSERT INTO `tb_right_menu_th` (`id_rmenu` ,`name_rmenu` ,`name_rmenu_backend` ,`content_right_menu` ,`date_mod_rmenu`)VALUES ('', '$name_rmenu_th', '$name_rmenu_backend', '$content_right_menu_th', '$ndate');";  
		$result22=mysql_db_query($dbname,$sql22) or die(mysql_error());
		
		if ($result21){
			echo"<h3>You have added new Right Navigation successfully.</h3><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_r_navi.php'>here</a> for back to Right Navigation main page.</span></p>";
		}else{			
			echo"<p><span style='color:#F00'>You cannot add a new Article, Please kindly try again or contact your IT team.</span></p><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_r_navi.php'>here</a> for back to Right Navigation main page.</span></p>";
		}
	}
/*}else echo 'ไม่สามารถอัพโหลดได้';
}else{
echo 'กรุณาใช้ไฟล์รูปภาพเท่านั้น';
}
}else{
echo 'ท่านยังไม่ได้อัพโหลดไฟล์';
}
}*/
	/*}else{
		echo "อัพโหลดรูปผิดชนิดครับ";
	}*/
	/*
		$update=getdate();
  		$updateday=$update["year"]."-".$update["mon"]."-".$update["mday"];
 		$sql3="INSERT INTO test Values(null,'$name2','$updateday')";   
  		$result3=mysql_db_query($dbname,$sql2) or die(mysql_error());
  	if ($result3)  {
  	}else{
   		echo"Cannot add new Industry";
  	}*/
	mysql_close();
	
	?>
		<div class="spacer"></div>
		<div class="spacer"></div>
        <div class="spacer"></div>
		<div class="spacer"></div>
        <div class="spacer"></div>
		<div class="spacer"></div>
        <div class="spacer"></div>
		<div class="spacer"></div>
        <div class="spacer"></div>
		<div class="spacer"></div>
        <div class="spacer"></div>
		<div class="spacer"></div>

</div>

        <!--##/Right Menu##--> 
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Add Right Navigation</h1>
                <hr>
                <div class="mlnk"><a href="admin_r_navi_add.php">Add new rigth navigation</a></div>
              </div>
              
            </aside>
            <!--##/END-Right Menu##-->

        </section>
    <footer id="page">
        <div class="copyright">
          <div class="cright "><span>
            <!-- REPLACE: current date[Month D, YYYY] -->
            </span> <span>Copyright © Bayer Thai Co., Ltd.
            <!-- REPLACE: copyright owner-->
            </span></div>
          <ul class="pagefunctions nvgtn">
            <li><a href="#header">Top</a></li>
          </ul>
          <div class="printfooter">
            <!-- REPLACE: current URL -->
          </div>
        </div>
    </footer>
  </div>
  <!--##nosearch##-->
</div>
<nav id="fatfooter"> </nav>
</div>
<!--##/nosearch##-->
<div id="modal" class="reveal-modal">
  <h1></h1>
  <div class="modalbody"></div>
  <a class="close-reveal-modal">close<span class="close">×</span></a> </div>
<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../scripts/standard.js"></script>
</body></html>