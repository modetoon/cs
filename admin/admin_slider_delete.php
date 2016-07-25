<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?>
        <section>         
            <!--##/nosearch##--> 
            
        <div class="unit size-col-d-admin">
        	  <h1>Remove Slider</h1>

    <?php
    $id_del=$_GET[id_del];
    include "../config/connect.php";
	$sql="DELETE from tb_slider_cate where id_slider='$id_del'";
	$result=mysql_db_query($dbname,$sql) or die(mysql_error());
	
	$sql2="DELETE from tb_slider_show where id_slider_cate='$id_del'";
	$result2=mysql_db_query($dbname,$sql2);
	if ($result) {
			echo"<h3>You have removed this slider successfully.</span></h3><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_slider.php'>here</a> for back to slider main page.</span></p>";
	} else {
			echo"<p><span style='color:#F00'>You cannot remove this slider, Please kindly try again or contact your IT team.</span></p><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_slider.php'>here</a> for back to slider main page.</span></p>";
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
		
    </div>
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