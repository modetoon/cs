<?php
	include "checksession.php";
	$id_edit=$_GET[id_edit];
	include "../config/connect.php";
	$sql9="SELECT * from tb_slider_cate WHERE id_slider='$id_edit'";
	$result9=mysql_db_query($dbname,$sql9);
	$rs=mysql_fetch_array($result9);

	$id_slider=$rs[id_slider];
	$slider_name=$rs[slider_name];
	$slider_language=$rs[slider_language]; 	
	$slider_quantity=$rs[slider_quantity];
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?>
        <section>         
            <!--##/nosearch##--> 
            
        <div class="unit size-col-d-admin">
              <h1>Slider :: Edit</h1>
              <div class="form-horizontal">
      <form action="admin_slider_edit2.php" method="post" name="form2">
  <div class="spacer-half"></div>
  
  <div class="control-group">
  	<input name="id_edit" id="id_edit" type="hidden" value="<?php echo$id_slider?>"/>
    <label class="control-label" id="usernameLabel" for="name">Please input new slider name</label>
    <div class="controls">
      <input type="text" class="input-large" id="name" name="name" value="<?php echo$slider_name?>" />
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="language">Please select language</label>
    <div class="controls">
    <select class="input-large" id="laender" name="language">
      <?php if($slider_language==1){
		echo "<option value=''>Please select language</option>
        <option selected='selected' value='1'>English</option>
        <option value='2'>Thai</option>
	  	";}
		elseif($slider_language==2){
		echo "<option value=''>Please select language</option>
        <option value='1'>English</option>
        <option selected='selected' value='2'>Thai</option>
	  	";}	
		else{
		echo "<option value=''>Please select language</option>
        <option value='1'>English</option>
        <option value='2'>Thai</option>
	  	";}	
		?>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" id="laenderLabel" for="laender">Slide Quantity:</label>
    <div class="controls">
      
<select class="input-large" id="laender" name="quantity">
        <option <?php if($slider_quantity=="")echo "selected='selected'"?> value="">Please select number</option>
        <option <?php if($slider_quantity==1)echo "selected='selected'"?> value='1'>1</option>
        <option <?php if($slider_quantity==2)echo "selected='selected'"?> value='2'>2</option>
        <option <?php if($slider_quantity==3)echo "selected='selected'"?> value='3'>3</option>
        <option <?php if($slider_quantity==4)echo "selected='selected'"?> value='4'>4</option>
        <option <?php if($slider_quantity==5)echo "selected='selected'"?> value='5'>5</option>
        <option <?php if($slider_quantity==6)echo "selected='selected'"?> value='6'>6</option>
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
</body></html>