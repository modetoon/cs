<?php include"checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
</head>
<?php include"header_name.php"; ?>           
            <!--##/nosearch##-->             
            <div class="unit size-col-d-admin">
            	<div class='topline'>User Manager</div>
				<h1>Remove user</h1>
   
    <?php
    $id_del=$_GET[id_del];
    include "../config/connect.php";
	$sql2="DELETE from tb_admin where id_admin='$id_del'";
	$result2=mysql_db_query($dbname,$sql2);
	if ($result2) {
		 echo "<h3>You have removed user successfully.</h3><br />
				<p><span class='txtnormal'>Click <a href='admin_show_user.php'>here</a> for back to User Manager main page.</span></p>";
	} else {
		echo "You cannot remove this account.";
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

            </section>
            <aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Create User</h1>
                <hr>
                <div class="mlnk"><a href="admin_regis_form.php">Create new user</a></div>
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