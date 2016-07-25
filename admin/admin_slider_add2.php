<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?> 
		<section>        
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Slider</h1>
	<?php
	//$name2= $_POST['name'];
	$name2= mysql_real_escape_string($_POST['name']);
	//$name2= htmlspecialchars($name, ENT_QUOTES);
	$language=$_POST[language];
	$quantity=$_POST[quantity];	
	if($name2=="")  {
		echo"<p class='orange'><h3>Please add new slider</h3></p>" ;
		exit();
		}
		include "../config/connect.php" ;
		$sql="INSERT INTO tb_slider_cate Values(null,'$name2','$language','$quantity')";   
		$result=mysql_db_query($dbname,$sql) or die(mysql_error());
		if ($result)  {
					echo"<h3>You have created slider successfully.</h3><br />";
					echo"<p><span class='txtnormal'>Click <a href='admin_slider.php'>here</a> for back to Article main page.</span></p>";
			}else{
					echo"<p><span style='color:#F00'>You cannot create slider, Please kindly try again or contact your IT team.</span></p>";
					echo"<p><span class='txtnormal'>Click <a href='admin_slider.php'>here</a> for back to Article main page.</span></p>";
			}
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
                <div class="spacer"></div>
                <div class="spacer"></div>
    		</div>
            
           <!--##/Right Menu##--> 
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Create Article</h1>
                <hr>
                <div class="mlnk"><a href="admin_content_add.php">Add new article</a></div>
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