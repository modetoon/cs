<?php include"checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
</head>
<?php include"header_name.php"; ?>           
            <!--##/nosearch##--> 
            <div class="unit size-col-d">
              <div class="topline">User Manager</div>
              <h1>Create user</h1>
              <div class="form-horizontal">
                <h3>Register Form<span class="txtnormal" style="color:#F00"> (Boxes marked * are mandatory.)</span></h3>
   <form action="admin_regis_form2.php" method="post" name="form2">
  <div class="spacer-half"></div>
  
  <div class="control-group">
    <label class="control-label" id="usernameLabel" for="username">Name: <span style="color:#F00">*</span></label>
    <div class="controls">
      <input type="text" class="input-large" id="username" name="username">
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" id="passwordLabel" for="password">Password: <span style="color:#F00">*</span></label>
    <div class="controls">
      <input type="password" class="input-large" id="password" name="password">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" id="firstnameLabel" for="firstname">Full Name: <span style="color:#F00">*</span></label>
    <div class="controls">
      <input type="text" class="input-large" id="firstname" name="firstname">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" id="emailLabel" for="email">Bayer E-mail: <span style="color:#F00">* (This email will be username automatically.)</span></label>
    <div class="controls">
      <input type="email" class="input-large" size="1" maxlength="40" required id="email" name="email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" id="laenderLabel" for="laender">Roles: <span style="color:#F00">*</span></label>
    <div class="controls">
      <select class="input-large" id="laender" name="role">
        <option selected="selected" value="">Please select a role</option>
        <option value="Administrator">Administrator</option>
        <option value="User">User</option>
        <option value="HR">Human Resource</option>
      </select>
    </div>
  </div>
  
    <div class="buttons">
      <button type="reset" class="btn">Reset</button>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
  <!--</div>-->
</div>
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
<?php //echo "<a href=\"javascript:history.go(-1)\"><< Back</a>";?>