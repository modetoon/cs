<?php
include "checksession.php";
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?> 
		<section>        
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Create each of sliders</h1>
<?php

	$id_slider = $_POST['id_slider'];
	$checkimg=0;
	
	$file11= $_POST[file10];
	$file12= $_POST[file11];
	$file13= $_POST[file12];
	$file14= $_POST[file13];
	$file15= $_POST[file14];
	$file16= $_POST[file15];	
	
	$position = $_POST['side'];
	$color = $_POST['color'];
	$topline= $_POST['topline'];
	$headerline= $_POST['headerline'];
	$description= $_POST['description'];
	$linkto = $_POST['linkto'];
	$funny = $position;
	include "../config/connect.php" ;
	$sql8="select * from tb_slider_show where id_slider_cate=$id_slider";
    $result8=mysql_db_query($dbname,$sql8);
	while($rs8=mysql_fetch_array($result8)) {
		$checkimg++;
	}
	$n=$checkimg;
	$m=$checkimg+1;
	
	foreach ($topline as $value) {
		$topline[$n]= mysql_real_escape_string($value);
		$n++;
	}
	$n=$checkimg;
	foreach ($headerline as $value) {
		$headerline[$n]= mysql_real_escape_string($value);
		$n++;
	}
	$n=$checkimg;
	foreach ($description as $value) {
		$description[$n]= mysql_real_escape_string($value);
		$n++;
	}
	
	$ndate=date('Y-m-d');
	
	$date = date("U");	
	
	$folder = "../img/stage/";
	$folder2 = "../img/stage/";
	///////////////////////////// upload file 1
	$ftype1 = pathinfo( $_FILES["file10"]["name"] , PATHINFO_EXTENSION );
	if($ftype1!=""){
		$image1 = $date."_pic1_img.".$ftype1;
		$_FILES["file10"]["name"]=$image1;
		$path1[0] = $folder.$_FILES["file10"]["name"];
		$path2[0] = $folder2.$_FILES["file10"]["name"];
		}

	if ($ftype1=="jpg" or $ftype1=="jpeg" or $ftype1=="gif" or $ftype1=="png" or $ftype1=="pdf" or $ftype1==""){
	
	move_uploaded_file($_FILES["file10"]["tmp_name"] , $path1[0]);
	}
	///////////////////////////// upload file 2
	$ftype2 = pathinfo( $_FILES["file11"]["name"] , PATHINFO_EXTENSION );
	if($ftype2!=""){
		$image2 = $date."_pic2_img.".$ftype2;
		$_FILES["file11"]["name"]=$image2;
		$path1[1] = $folder.$_FILES["file11"]["name"];
		$path2[1] = $folder2.$_FILES["file11"]["name"];
		}

	if ($ftype2=="jpg" or $ftype2=="jpeg" or $ftype2=="gif" or $ftype2=="png" or $ftype2=="pdf" or $ftype2==""){
	
	move_uploaded_file($_FILES["file11"]["tmp_name"] , $path1[1]);
	}
	///////////////////////////// upload file 3
	$ftype3 = pathinfo( $_FILES["file12"]["name"] , PATHINFO_EXTENSION );
	if($ftype3!=""){
		$image3 = $date."_pic3_img.".$ftype3;
		$_FILES["file12"]["name"]=$image3;
		$path1[2] = $folder.$_FILES["file12"]["name"];
		$path2[2] = $folder2.$_FILES["file12"]["name"];
		}

	if ($ftype3=="jpg" or $ftype3=="jpeg" or $ftype3=="gif" or $ftype3=="png" or $ftype3=="pdf" or $ftype3==""){
	
	move_uploaded_file($_FILES["file12"]["tmp_name"] , $path1[2]);
	}
	///////////////////////////// upload file 4
	$ftype4 = pathinfo( $_FILES["file13"]["name"] , PATHINFO_EXTENSION );
	if($ftype4!=""){
		$image4 = $date."_pic4_img.".$ftype4;
		$_FILES["file13"]["name"]=$image4;
		$path1[3] = $folder.$_FILES["file13"]["name"];
		$path2[3] = $folder2.$_FILES["file13"]["name"];
		}

	if ($ftype4=="jpg" or $ftype4=="jpeg" or $ftype4=="gif" or $ftype4=="png" or $ftype4=="pdf" or $ftype4==""){
	
	move_uploaded_file($_FILES["file13"]["tmp_name"] , $path1[3]);
	}
	///////////////////////////// upload file 5
	$ftype5 = pathinfo( $_FILES["file14"]["name"] , PATHINFO_EXTENSION );
	if($ftype5!=""){
		$image5 = $date."_pic5_img.".$ftype5;
		$_FILES["file14"]["name"]=$image5;
		$path1[4] = $folder.$_FILES["file14"]["name"];
		$path2[4] = $folder2.$_FILES["file14"]["name"];
		}

	if ($ftype5=="jpg" or $ftype5=="jpeg" or $ftype5=="gif" or $ftype5=="png" or $ftype5=="pdf" or $ftype5==""){
	
	move_uploaded_file($_FILES["file14"]["tmp_name"] , $path1[4]);
	}
	///////////////////////////// upload file 6
	$ftype6 = pathinfo( $_FILES["file15"]["name"] , PATHINFO_EXTENSION );
	if($ftype6!=""){
		$image6 = $date."_pic6_img.".$ftype6;
		$_FILES["file15"]["name"]=$image6;
		$path1[5] = $folder.$_FILES["file15"]["name"];
		$path2[5] = $folder2.$_FILES["file15"]["name"];
		}

	if ($ftype6=="jpg" or $ftype6=="jpeg" or $ftype6=="gif" or $ftype6=="png" or $ftype6=="pdf" or $ftype6==""){
	
	move_uploaded_file($_FILES["file15"]["tmp_name"] , $path1[5]);
	}
	///////////////////////////// end upload file
	$max=0;
	foreach ($topline as $value) {
		$max++;
	}
	$max=$max+$checkimg-1;
	
	for($n=$checkimg;$n<$max;$n++)
	{
		//$escapedArray .= mysql_real_escape_string($funny);
		$sql = "INSERT INTO tb_slider_show (id_slider_show, id_slider_cate, Order_slider_each, position, color, image_slider, topline, headerline, description, link_slider) VALUES ('','$id_slider', '$m' , '$position[$n]', '$color[$n]', '$path2[$n]', '$topline[$n]', '$headerline[$n]', '$description[$n]', '$linkto[$n]')";
		$result=mysql_db_query($dbname,$sql) or die('Could not connect: ' . mysql_error());
		$m++;
	}
			if ($result)  {
			echo"<h3>You have created each of sliders successfully.</h3><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_slider.php'>here</a> for back to Article main page.</span></p>";
		}else{
			echo"<p><span style='color:#F00'>You cannot create each of sliders, Please kindly try again or contact your IT team.</span></p><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_slider.php'>here</a> for back to Slider main page.</span></p>";
		}
	
			mysql_close();
	
	/*foreach( $topline as $key => $n ) {
	
  	echo " $m The name is '$id_slider', Side is '$position[$key]', color is '$color[$key]', topline '$topline[$key]', headerline '$headerline[$key]', description '$description[$key]', linkto '$linkto[$key]'<br />";
	$m++;
}*/

?>
		<div class="spacer"></div>
        <div class="spacer"></div>
		<div class="spacer"></div>
        <div class="spacer"></div>
		<div class="spacer"></div>

</div>

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