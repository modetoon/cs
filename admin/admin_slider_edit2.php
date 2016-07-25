<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?>
        <section>         
            <!--##/nosearch##--> 
            
        <div class="unit size-col-d-admin">
        	  <h1>Edit Slider</h1>
            
           
<?php
	$id_edit=$_POST[id_edit];
	//$slider_name2=$_POST[name];
	$slider_name2= mysql_real_escape_string($_POST['name']);
	$language=$_POST[language];
	$quantity=$_POST[quantity];
	
	
	
	include "../config/connect.php" ;
	
	$sql8="select * from tb_slider_cate where id_slider=$id_edit";
    $result8=mysql_db_query($dbname,$sql8);
	$rs8=mysql_fetch_array($result8);
	$slider_quantity=$rs8[slider_quantity];
	
	while($slider_quantity>$quantity) {
		$sql81="DELETE from tb_slider_show where Order_slider_each='$slider_quantity' AND id_slider_cate='$id_edit'";
		$result81=mysql_db_query($dbname,$sql81) or die(mysql_error());
		$slider_quantity--;
	}
	
	$sql3="UPDATE tb_slider_cate SET slider_name='$slider_name2', slider_language='$language', slider_quantity='$quantity' WHERE id_slider='$id_edit' ";
	$result3=mysql_db_query($dbname,$sql3) or die(mysql_error());
	//$result3=mysql_db_query($dbname,$sql3) or die('Could not connect: ' . mysql_error());
	if ($result3)  {
			echo"<h3>You have edited slider successfully.</h3><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_slider.php'>here</a> for back to Slider main page.</span></p>";
			}else{
			echo"<p><span style='color:#F00'>You cannot edit this slider, Please kindly try again or contact your IT team.</span></p><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_slider.php'>here</a> for back to Slider main page.</span></p>";
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
		 
    </div>
    
    
    		<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Create slider</h1>
                <hr>
                <div class="mlnk"><a href="admin_slider_add.php">Add slider</a></div>
              </div>
              
            </aside>
    
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