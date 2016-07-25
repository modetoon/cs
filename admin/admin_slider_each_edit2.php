<?php
include "checksession.php";
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<!--##Header##-->
<?php include"header.php"; ?>
<!--##END-Header##-->
<!--[if lt IE 7]>
<body class="contnt en lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
<body class="contnt en lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
<body class="contnt en lt-ie9">
<![endif]-->
<!--[if gt IE 8]><!-->
<body class="contnt en">
<!--<![endif]-->

<!--##nosearch##-->
<div class="wrapper">
  <div class="page">
  	<!--##Header-id##-->
    <?php include"header-id.php"; ?>
    <!--##END-Header-id##-->
    
<!--    <nav class="mobilenav">
      <ul class="nobulls">
        <li><a href="#nav" class="mnav">Menu</a></li>
        <li><a href="#search" class="msearch">Search</a></li>
        <li><a href="#contact" class="mcontact">Contact</a></li>
      </ul>
    </nav>-->
    <!--##/Navigation bar##-->
    <?php include"admin_menu.php";?>
    <!--##/END-Navigation bar##-->
    
    <!--##/Top menu##-->
      <div role="main" class="main">
        <div class="service">
          <ul class="breadcrumb">
            <li><a href="#home"></a></li>
          </ul>
          <?php include "username.php"; ?>
        </div>
        <section>             
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Add each of Slider</h1>
<?php

	$id_slider_show = $_POST['id_slider_show'];
	$m=1;
	$n=0;
	//$file1 = $_POST[file1];
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
	$n=0;
	foreach ($topline as $value) {
		$topline[$n]= mysql_real_escape_string($value);
		$n++;
	}
	$n=0;
	foreach ($headerline as $value) {
		$headerline[$n]= mysql_real_escape_string($value);
		$n++;
	}
	$n=0;
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
	include "../config/connect.php" ;
	foreach ($topline as $n => $funny)
	{
		//$escapedArray .= mysql_real_escape_string($position);
		if ($path2[$n]==''){
		$sql = "UPDATE tb_slider_show set position='$position[$n]', topline='$topline[$n]', headerline='$headerline[$n]', description='$description[$n]', link_slider='$linkto[$n]' where id_slider_show='$id_slider_show[$n]'";
		}else{
		$sql = "UPDATE tb_slider_show set position='$position[$n]', image_slider='$path2[$n]', topline='$topline[$n]', headerline='$headerline[$n]', description='$description[$n]', link_slider='$linkto[$n]' where id_slider_show='$id_slider_show[$n]'";
		}
		$result=mysql_db_query($dbname,$sql) or die('Could not connect: ' . mysql_error());
		$m++;
	}
			if ($result)  {
			
			echo"
              <p><h3>Edit Slider complete</h3></p><br/><a href='admin_slider.php'><p>Back to Slider mainpage</a></p></h3>
			  
			</div>
	</div>";
		}else{
			echo"<p class='orange'>Cannot add each of Slider, please try again.</p>";
		}
	
			mysql_close();
	
	/*foreach( $topline as $key => $n ) {
	
  	echo " $m The name is '$id_slider', Side is '$position[$key]', color is '$color[$key]', topline '$topline[$key]', headerline '$headerline[$key]', description '$description[$key]', linkto '$linkto[$key]'<br />";
	$m++;
}*/

?>

		<div class="spacer"></div>
		<div class="spacer"></div>

</div>

            <!--##/END-Right Menu##-->

        </section>
       <!--##/Footer##--> 
		<?php include"footer.php"; ?> 
      <!--##/END-Footer##-->
    </div>
    
    <!--##nosearch##--> 
  </div>

  
</div>

<!--##/nosearch##-->

<div id="modal" class="reveal-modal">
  <h1></h1>
  <div class="modalbody"></div>
  <a class="close-reveal-modal">close<span class="close">×</span></a>
</div>

<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../scripts/standard.js"></script>
<script src="../styles/jquery.jquery-ui.min.js"></script>
<script src="../styles/global/standard.js"></script>
<script>
	//add page specific JS here
</script>
</body>
</html>