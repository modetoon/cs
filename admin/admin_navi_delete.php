<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?>            
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Navigation</h1>
    <? include("admin_menu.php");?>

    <?php
    $id_del=$_GET[id_del];
    include "../config/connect.php";
	$sql="Select `sub_of` from tb_menu where id_menu='$id_del'";   
	$result=mysql_db_query($dbname,$sql);
	$rs=mysql_fetch_array($result);
	$sub_of=$rs[sub_of];
	
	$sql21="DELETE from tb_menu where id_menu='$id_del'";
	$result21=mysql_db_query($dbname,$sql21);
	$sql22="DELETE from tb_menu_th where id_menu='$id_del'";
	$result22=mysql_db_query($dbname,$sql22);
	
	if ($result21) {
		$sql3="Select * from tb_menu where id_menu='$sub_of'";   
		$result3=mysql_db_query($dbname,$sql3) or die(mysql_error());
		$no=0;
		while($rs5=mysql_fetch_array($result3)) {
			$no++;
		}
		if ($no>1){
			echo"<h3>You have deleted a Navigation successfully.</h3><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_navi.php'>here</a> for back to Navigation main page.</span></p>";
		}else{
			$sql41="UPDATE `tb_menu` SET `have_sub`=0 WHERE `id_menu`='$sub_of' LIMIT 1 ;";   
			$result41=mysql_db_query($dbname,$sql41) or die(mysql_error());
			
			$sql42="UPDATE `tb_menu_th` SET `have_sub`=0 WHERE `id_menu`='$sub_of' LIMIT 1 ;";   
			$result42=mysql_db_query($dbname,$sql42) or die(mysql_error());
			
			echo"<h3>You have deleted a Navigation successfully.</h3><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_navi.php'>here</a> for back to Navigation main page.</span></p>";
		}
	} else {
		echo "<p>Cannot delete this menu</p>";
	}
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
                <div class="spacer"></div>
</div>
			<!--##/Right Menu##--> 
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Add Navigation</h1>
                <hr>
                <div class="mlnk"><a href="admin_navi_add.php">Add new navigation</a></div>
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
</body>
</html>
