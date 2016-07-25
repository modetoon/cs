<?php
	include"checksession.php";
	$id_edit=$_GET[id_edit];
	include "../config/connect.php";
	$sql2="Select * from tb_admin where id_admin='$id_edit'";
	$result2=mysql_db_query($dbname,$sql2);
	$rs=mysql_fetch_array($result2);

	$id_admin=$rs[id_admin];
	$title_admin=$rs[title_admin];
	$username_admin=$rs[username_admin];
	$name_admin=$rs[name_admin];
	$email_admin=$rs[email_admin];
	$roles_admin=$rs[roles_admin];
	$create_admin=$rs[create_admin];
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
</head>
<?php include"header_name.php"; ?>
      <!--##/nosearch##-->
            
            <div class="unit size-col-d">
              <div class="topline">User Manager</div>
              <h1>Edit user</h1>
              <div class="form-horizontal">
              <h3>Register Form<span class="txtnormal" style="color:#F00"> (Boxes marked * are mandatory.)</span></h3>
   <form action="admin_regis_edit2.php" method="post" name="form2">
  <div class="spacer-half"></div>
  <div class="control-group">
    <label class="control-label" id="usernameLabel" for="username">Name: <span style="color:#F00">*</span></label>
    <div class="controls">
      <input name="username" type="text" class="input-large" id="username" value="<?php echo $rs["username_admin"];?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" id="firstnameLabel" for="firstname">Full Name: <span style="color:#F00">*</span></label>
    <div class="controls">
      <input name="firstname" type="text" class="input-large" id="firstname" value="<?php echo $rs["name_admin"];?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" id="emailLabel" for="email">Bayer E-mail: <span style="color:#F00">* (This email will be username automatically.)</span></label>
    <div class="controls">
      <input name="email" type="email" required class="input-large" id="email" value="<?php echo $rs["email_admin"];?>" size="1" maxlength="40">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" id="laenderLabel" for="laender">Role: <span style="color:#F00">*</span></label>
    <div class="controls">
      <select class="input-large" id="laender" name="role">
        <option selected="selected" value="">Please select a role</option>
                <?php				
				if ($roles_admin==Administrator) {
					echo "<option value='Administrator' selected='selected'>Administrator</option>
					<option value='User'>User</option>
					<option value='HR'>Human Resource</option>";
					}
					elseif ($roles_admin==User)	{
					echo "<option value='Administrator'>Administrator</option>
					<option value='User' selected='selected'>User</option>
					<option value='HR'>Human Resource</option>";
					}
					else {
					echo "<option value='Administrator'>Administrator</option>
					<option value='User'>User</option>
					<option value='HR' selected='selected'>Human Resource</option>";
					}
				
				?>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" id="emailLabel" for="email">Registration Date:</label>
    <div class="controls">
      <label class="control-label" id="emailLabel" for="email"><?php echo $rs["create_admin"];?></label>
    </div>
  </div>
  
    <div class="buttons">
      <button type="reset" class="btn">Reset</button>
      <button type="submit" class="btn btn-primary">Submit</button>
      <input name="id_edit" type="hidden" value="<?php echo $id_edit?>"/>
    </div>
    </form>
  </div>
</div>

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