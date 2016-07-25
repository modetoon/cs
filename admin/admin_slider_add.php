<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?> 
		<section>        
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Slider :: Create</h1>
              <div class="form-horizontal">
              
   <form action="admin_slider_add2.php" method="post" name="form2">
  	<div class="spacer-half"></div>
  
  	<div class="control-group">
    	<label class="control-label" id="usernameLabel" for="username">Please input new slider name</label>
    	<div class="controls">
      	<input type="text" class="input-large" id="username" name="name">
    	</div>
  	</div>
    <div class="control-group">
    <label class="control-label" for="language">Please select language</label>
    <div class="controls">
      <select class="input-large" id="laender" name="language">
        <option selected="selected" value="">Please select language</option>
        <option value="1">English</option>
        <option value="2">Thai</option>
      </select><br />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" id="laenderLabel" for="laender">Slide Quantity:</label>
    <div class="controls">
      
      <select class="input-large" id="laender" name="quantity">
     	<option selected="selected" value="">Please select number</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>
      <label for="vorname" class="orange">** Maximum is 6 slides per page</label>
    </div>
  </div>
  
    <div class="buttons">
      <button type="reset" class="btn">Reset</button>
      <button type="submit" alt="Submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    			<div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
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
</body>
</html>