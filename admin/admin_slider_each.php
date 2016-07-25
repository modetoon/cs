<?php 
	include "checksession.php";

	$id_slide=$_GET[id_slide];
	include "../config/connect.php";
	$sql="Select * from tb_slider_cate where id_slider='$id_slide'";
	$result=mysql_db_query($dbname,$sql);
	$rs=mysql_fetch_array($result);

	$id_slider=$rs[id_slider];
	$slider_name=$rs[slider_name];
	$slider_language=$rs[slider_language];
	$slider_quantity=$rs[slider_quantity];
	$checkimg=0;
	$sql8="select * from tb_slider_show where id_slider_cate=$id_slider";
    $result8=mysql_db_query($dbname,$sql8);
	while($rs8=mysql_fetch_array($result8)) {
		$checkimg++;
	}
	$checkimg++;
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?> 
		<section>        
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Slider :: Create each of sliders</h1>
              <div class="form-horizontal">
			<div class="spacer"></div>
			<form action="admin_slider_each2.php" enctype="multipart/form-data" method="post" name="form1">
			<div class='generate-ui-tab'>
				<ul>
            <?php
				$n=$checkimg;
	 			for($i=$checkimg;$i<=$slider_quantity;$i++)
				{
				echo"
                  <li><a href='#EEFA-$i'>Image No.$i</a></li>
				  ";
				$n++;
				}	
				echo"</ul>";			
			?>

            <?php
				$n=$checkimg;
	 			for($i=$checkimg;$i<=$slider_quantity;$i++)
				{
				$n2=$n-1;
				echo"
                  <div class='supertab' id='EEFA-$i'>
                  <h2 class='supertab-head'><span>Tab $i</span></h2>
                  <div class='p'>
<!-- ============================== Fieldset 1 ============================== -->
	  			<p></p>
	  			<div class='control-group'>
	  			<label class='control-label' id='firstnameLabel' for='image'>Choose Image No.$i :</label>
	  				<div class='controls'>
      			<input type='file' name='file1$n2' id='file'/>
	  			<label for='vorname'><span style='color:#F00'>** Request resolution : Index page are 995*315 px, Overview page are 800*253 px.</span></label>
	  				</div>
	  			</div>
<!-- ============================== Fieldset 2 ============================== -->	 
	  			<div class='control-group'>
      			<label class='control-label' for='side'>Please choose side of the text</label>
	  				<div class='controls'>
      			<select class='input-large' id='laender' name='side[$n2]'>
        			<option selected='selected' value=''>Please select side</option>
        			<option value='stageleft'>Left</option>
        			<option value='stageright'>Right</option>
      			</select>
	  				</div>
	  			</div>
<!-- ============================== Fieldset 3 ============================== -->	 
	  			<div class='control-group'>
      			<label class='control-label' for='color'>Please select color of the box</label>
	  				<div class='controls'>
      			<select class='input-large' id='laender' name='color[$n2]'>
        			<option selected='selected' value=''>Please select color</option>
        			<option value='invert bluestage'>Blue</option>
        			<option value='invert brownstage'>Brown</option>
					<option value='invert bcsstage'>Grey</option>
					<option value=''>White</option>
      			</select>
	  				</div>
	  			</div>			
<!-- ============================== Fieldset 4 ============================== -->
	  			<div class='control-group'>
	  			<label class='control-label' id='firstnameLabel' for='topline'>Topline</label>
	  				<div class='controls'>
      			<input type='text' class='input-large' id='topline' name='topline[$n]'>
	  				</div>
	  			</div>				
<!-- ============================== Fieldset 5 ============================== -->
	  			<div class='control-group'>
	  			<label class='control-label' id='firstnameLabel' for='headerline'>Headerline</label>
	  				<div class='controls'>
      			<input type='text' class='input-large' id='headerline' name='headerline[$n]' required >
	  				</div>
	  			</div>	
<!-- ============================== Fieldset 6 ============================== -->
	  			<div class='control-group'>
	  			<label class='control-label' id='messageLabel' for='message'>Description text</label>
	  				<div class='controls'>
      			<textarea placeholder='Please insert your description text in the following space' class='input-large' required cols='1' rows='6' id='message' name='description[$n]' required ></textarea>
	  				</div>
	  			</div>				
<!-- ============================== Fieldset 7 End============================== -->
	  			<div class='control-group'>
	 			<label class='control-label' id='firstnameLabel' for='linkto'>Link to</label>
	  				<div class='controls'>
      			<input type='text' class='input-large' id='linkto' name='linkto[$n2]'><br /> 
	  				</div>
	 			</div>
<!-- ==============================  End  ============================== -->								
				
                  </div>
                  <div class='spacer'></div>
				  </div>
				  ";
				$n++;
				}				
			?>
               </div> 

    <input name='id_slider' type='hidden' value='<?php echo$id_slider;?>'/>
    
    <div class="buttons">
      <button type="reset" class="btn">Reset</button>
      <button type="submit" alt="Submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>
			
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
<script>
	//add page specific JS here
	$("#form").validate();
</script>
</body>
</html>