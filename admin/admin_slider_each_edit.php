<?php 
	include "checksession.php";

	$id_slide=$_GET[id_edit_each];
	include "../config/connect.php";
	$sql="Select * from tb_slider_cate where id_slider='$id_slide'";
	$result=mysql_db_query($dbname,$sql);
	$rs=mysql_fetch_array($result);

	$id_slider=$rs[id_slider];
	$slider_name=$rs[slider_name];
	$slider_language=$rs[slider_language];
	$slider_quantity=0;
	$sql8="select * from tb_slider_show where id_slider_cate=$id_slider";
    $result8=mysql_db_query($dbname,$sql8);
	while($rs8=mysql_fetch_array($result8)) {
		$slider_quantity++;
	}
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?> 
        <section>         
            <!--##/nosearch##--> 
            
            <div class="unit size-col-d-admin">
              <h1>Slider : Add each slider</h1>
              <div class="form-horizontal">
              <?php
				$m=1;
				$z=0;
				/*foreach( $topline as $key => $z ) {
	
  	echo " $m The name is '$id_slider', Side is '$position[$key]', color is '$color[$key]', topline '$topline[$key]', headerline '$headerline[$key]', description '$description[$key]', linkto '$linkto[$key]'<br />";
	$m++;
}*/
            
            
            ?>
			<form action="admin_slider_each_edit2.php" enctype="multipart/form-data" method="post" name="form1">
			<div class='generate-ui-tab'>
				<ul>
            <?php
				$n=0;
	 			for($i=1;$i<=$slider_quantity;$i++)
				{
				echo"
                  <li><a href='#EEFA-$i'>Image No.$i</a></li>
				  ";
				$n++;
				}	
				echo"</ul>";	
				
				$n=0;
				$i=1;
				
				$sql2="Select * from tb_slider_show where id_slider_cate='$id_slide' order by Order_slider_each";
				$result2=mysql_db_query($dbname,$sql2);
				while($rs2=mysql_fetch_array($result2)) {
					$id_slider_show=$rs2['id_slider_show'];
					$id_slider_cate=$rs2['id_slider_cate'];
					$Order_slider_each=$rs2['Order_slider_each'];
					$position=$rs2['position'];
					$color=$rs2['color'];
					$image_slider=$rs2['image_slider'];
					$topline=$rs2['topline'];
					$headerline=$rs2['headerline'];
					$description=$rs2['description'];
					$link_slider=$rs2['link_slider'];
				echo"
                  <div class='supertab' id='EEFA-$i'>
                  <h2 class='supertab-head'><span>Tab $i</span></h2>
                  <div class='p'>
<!-- ============================== Fieldset 1 ============================== -->
	  			<p></p>
	  			<div class='control-group'>
        <label id='firstnameLabel3' for='vorname'>Add Image :</label>
        			<div class='controls'>
        <input type='file' name='file1$n' id='file'/>
        <label id='firstnameLabel3' for='vorname'>Old Image : ";
			if ($image_slider!=""){
				echo '<img src="../'.$image_slider.'" width="170" height="100" />';
			}else{
				echo 'None';
			}
        echo"</label>
	  			<label for='vorname' class='orange'>** Request resolution : Index page are 995*315 px, Overview page are 800*253 px.</label>
	  				</div>
	  			</div>

	  			<div class='control-group'>
      			<label class='control-label' for='side'>Please choose side of the text</label>
	  				<div class='controls'>
      			<select class='input-large' id='laender' name='side[$n]'>
        			<option value=''>Please select side</option>";
					if ($position=='stageleft'){
				echo"<option value='stageleft' selected='selected'>Left</option>
					 <option value='stageright'>Right</option>";
					}else{
        		echo"<option value='stageleft'>Left</option>
					 <option value='stageright' selected='selected'>Right</option>";
					}
				echo"
      			</select>
	  				</div>
	  			</div>";
	// <!--============================== Fieldset 3 ============================== --> 
	  			echo"<div class='control-group'>
      			<label class='control-label' for='color'>Please select color of the box</label>
	  				<div class='controls'>
      			<select class='input-large' id='laender' name='color[$n]'>
        			<option value=''>Please select color</option>";
					if ($color=='invert bluestage'){
        		echo"<option value='invert bluestage' selected='selected' >Blue</option>
					 <option value='invert brownstage'>Brown</option>
					 <option value='invert bcsstage'>Grey</option>
					 <option value=''>White</option>";
					}elseif ($color=='invert brownstage'){
        		echo"<option value='invert bluestage'>Blue</option>
					 <option value='invert brownstage' selected='selected'>Brown</option>
					 <option value='invert bcsstage'>Grey</option>
					 <option value=''>White</option>";
					}elseif ($color=='invert bcsstage'){
        		echo"<option value='invert bluestage'>Blue</option>
					 <option value='invert brownstage'>Brown</option>
					 <option value='invert bcsstage' selected='selected'>Grey</option>
					 <option value=''>White</option>";
					}else {
        		echo"<option value='invert bluestage'>Blue</option>
					 <option value='invert brownstage'>Brown</option>
					 <option value='invert bcsstage'>Grey</option>
					 <option value='' selected='selected'>White</option>";
					}
				echo"
      			</select>
	  				</div>
	  			</div>";		
// <!--============================== Fieldset 4 ============================== -->
	  			echo"<div class='control-group'>
	  			<label class='control-label' id='firstnameLabel' for='topline'>Topline</label>
	  				<div class='controls'>
      			<input type='text' class='input-large' id='topline' name='topline[$n]' value='$topline'>
	  				</div>
	  			</div>				
<!-- ============================== Fieldset 5 ============================== -->
	  			<div class='control-group'>
	  			<label class='control-label' id='firstnameLabel' for='headerline'>Headerline</label>
	  				<div class='controls'>
      			<input type='text' class='input-large' id='headerline' name='headerline[$n]' value='$headerline'>
	  				</div>
	  			</div>	
<!-- ============================== Fieldset 6 ============================== -->
	  			<div class='control-group'>
	  			<label class='control-label' id='messageLabel' for='message'>Description text</label>
	  				<div class='controls'>
      			<textarea class='input-large' required cols='1' rows='6' id='message' name='description[$n]'>$description</textarea>
	  				</div>
	  			</div>				
<!-- ============================== Fieldset 7 End============================== -->
	  			<div class='control-group'>
	 			<label class='control-label' id='firstnameLabel' for='linkto'>Link to</label>
	  				<div class='controls'>
      			<input type='text' class='input-large' id='linkto' name='linkto[$n]' value='$link_slider'><br /> 
	  				</div>
	 			</div>
<!-- ==============================  End  ============================== -->								
				
                  </div>
                  <div class='spacer'></div>
				  <input name='id_slider_show[$n]' type='hidden' value='$id_slider_show'/>
				  </div>
				  ";
				$n++;
				$i++;
				}				
			?>
               </div> 
    
    <div class="buttons">
      <button type="reset" class="btn">Reset</button>
      <button type="submit" alt="Submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
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