<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?>
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Edit Right Navigation</h1>
    <?php 
	$id_rmenu=$_POST[id_rmenu];
	$name_menu=$_POST[name_rmenu];
	$name_rmenu_th=$_POST[name_rmenu_th];
	$name_rmenu_backend=$_POST[name_rmenu_backend];
	$content_right_menu= mysql_real_escape_string($_POST['content_right_menu']);
	$content_right_menu_th= mysql_real_escape_string($_POST['content_right_menu_th']);
	//echo $name_menu.$name_rmenu_th.$name_rmenu_backend.$content_right_menu.$content_right_menu_th;
	
	$ndate=date('Y-m-d');

	include"../config/connect.php";
	$sql="UPDATE tb_right_menu SET name_rmenu='$name_menu', name_rmenu_backend='$name_rmenu_backend', content_right_menu='$content_right_menu' WHERE id_rmenu='$id_rmenu' ";
	$result=mysql_db_query($dbname,$sql);
	
	$sql2="UPDATE tb_right_menu_th SET name_rmenu='$name_rmenu_th', name_rmenu_backend='$name_rmenu_backend', content_right_menu='$content_right_menu_th' WHERE id_rmenu='$id_rmenu' ";
	$result2=mysql_db_query($dbname,$sql2);
	if ($result)  {
		echo"<h3>You have edited Right Navigation successfully.</h3><br />";
		echo"<p><span class='txtnormal'>Click <a href='admin_r_navi.php'>here</a> for back to Right Navigation main page.</span></p>";
	}else{
		echo"<p><span style='color:#F00'>You cannot edit a Right Navigation, Please kindly try again or contact your IT team.</span></p><br />";
		echo"<p><span class='txtnormal'>Click <a href='admin_r_navi.php'>here</a> for back to Right Navigation main page.</span></p>";
	}
			/*$update=getdate();
  			$updateday=$update["year"]."-".$update["mon"]."-".$update["mday"];
 			$sql2="INSERT INTO test Values(null,'$name2','$updateday')";   
  			$result2=mysql_db_query($dbname,$sql2) or die(mysql_error());
  			if ($result2)  {
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
	<div class="spacer"></div>

</div>

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
