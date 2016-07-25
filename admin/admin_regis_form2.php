<?php include"checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
</head>
<?php include"header_name.php"; ?>           
            <!--##/nosearch##-->             
            <div class="unit size-col-d-admin">
            	<div class='topline'>User Manager</div>
				<h1>Create user</h1>

<?php
	$usernameStr = mysql_real_escape_string($_POST['username']);
	$passwordStr = mysql_real_escape_string($_POST['password']);
	
	$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
	$saltedPW = $passwordStr . $salt;
	$hashedPW = hash('sha256', $saltedPW);
	
	$firstnameStr = mysql_real_escape_string($_POST['firstname']);
	$emailStr = mysql_real_escape_string($_POST['email']);
	$role=$_POST[role];
	$mystring=date(“Y-m-d”);
	date_default_timezone_set('Asia/Bangkok');
	$today = date("Y-m-d H:i:s");
	
	include "../config/connect.php" ;
	$sql="INSERT INTO tb_admin values(null,'$usernameStr','$hashedPW','$salt','$firstnameStr','$emailStr','$role','$today','','')";
	$result=mysql_db_query($dbname,$sql) ;
		if ($result!='')  {
			echo"
				<h3>You have created new authorised user successfully.</h3><br />
				<p><span class='txtnormal'>Click <a href='admin_show_user.php'>here</a> for back to User Manager main page.</span></p>
				";
			}else{
				echo"<p>You cannot create user, Please contact IT support.</p>";
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