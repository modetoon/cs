<?php include"checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
</head>
<?php include"header_name.php"; ?>           
            <!--##/nosearch##-->             
            <div class="unit size-col-d-admin">
            	<div class='topline'>User Manager</div>
				<h1>Edit user</h1>  
<?php
	$id_edit=$_POST[id_edit];
	$username=$_POST[username];
	$username2= htmlspecialchars($username, ENT_QUOTES);
	
	$firstname=$_POST[firstname];
	$firstname2= htmlspecialchars($firstname, ENT_QUOTES);
	$email=$_POST[email];
	$email2= htmlspecialchars($email, ENT_QUOTES);
	$role=$_POST[role];
	date_default_timezone_set('Asia/Bangkok');
	$today = date("Y-m-d H:i:s"); 
	include "../config/connect.php" ;
	$sql3="UPDATE tb_admin SET username_admin='$username2', name_admin='$firstname2', email_admin='$email2', roles_admin='$role', modify_admin='$today' WHERE id_admin='$id_edit' ";
	$result3=mysql_db_query($dbname,$sql3);
	if ($result3)  {
			echo"
            <h3>You have edited a user successfully.</h3><br />
			<p><span class='txtnormal'>Click <a href='admin_show_user.php'>here</a> for back to User Manager main page.</span></p>";
			}else{
			echo"<p>You cannot edit user, Please contact IT support.</p>";
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