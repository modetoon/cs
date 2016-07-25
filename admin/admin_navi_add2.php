<?php
	include "checksession.php";	
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<!--##Header##-->
<?php include"header.php"; ?>
<!--##END-Header##-->
<script type="text/javascript">
//First Menu
function clickupload()
{
if ( document.getElementById('input-one2').value.length == 0 )
{
alert( 'Please input your Username' ) ;
return false ;
}
if ( document.getElementById('input-one2').value.length == 0 )
{
alert( 'Please input your Password' ) ;
return false ;
}
return true ;
}
</script>
</head>
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
<body class="contnt en" onload="make_list('List1',0)">
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
            <li class="last"><a href="#home"></a></li>
          </ul>
          <?php include "username.php"; ?>
        </div>
        <section>             
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Add Navigation</h1>
    <?php
	include "../config/connect.php" ;
	$name=$_POST[name];
	$name_th=$_POST[name_th];
	$mainmenu=$_POST[mainmenu];
	$submenu=$_POST[submenu];
	$menu_sequence=$_POST[txtsequence];
	$sequence=$_POST[sequence];
	$lesssequence=$_POST[lesssequence];
	
	if ($sequence==""){
		if ($menu_sequence=="")$menu_sequence=$lesssequence;
	} else if ($sequence=="other"){
	} else{
		$menu_sequence=$sequence;
	}
	
	$xhide=$submenu;
	if($submenu==0){
		$xhide=$mainmenu;
	}
	
	$menu_intro=$_POST[menu_intro];
	$menu_intro_th=$_POST[menu_intro_th];
	
	$date = date("U");
	
	if ($name==Overview){
		$sqlchk="SELECT name_menu, sub_of FROM tb_menu WHERE name_menu='Overview' AND sub_of=$xhide";
		$objQuery = mysql_query($sqlchk) or die ("Error Query [".$sqlchk."]");
		$objResult = mysql_fetch_array($objQuery);
	
		if ($objResult)  {
			echo'This menu has overview page already.';
			exit();
		}
	}
		if ($xhide!=0){
			$sql="SELECT * FROM `tb_menu` WHERE id_menu = $xhide LIMIT 1";
			$result=mysql_db_query($dbname,$sql);
			while($rs=mysql_fetch_array($result)) {
				$sid=$rs[id_menu] ;
				$slevel=$rs[level]+1 ;
			}
		}else{
			$sid=0 ;
			$slevel=1 ;
		}

	if ($slevel<5){
	
	
	
	$SAVE_PATH2 = $_SERVER['DOCUMENT_ROOT']."/httpdocs/img/top_menu/"; //พาสที่ต้องการนำไฟล์ไปเก็บไว้
	$SAVE_PATH = "../img/top_menu/"; 
	$SAVE_PATH_DB = "../img/top_menu/";
/**
* ฟังก์ชั่นตรวจสอบว่าเป็นไฟล์รูปภาพหรือไม่
* bool isImage(resource $file_obj)
*/
	function isImage($file_obj){
	$IMG_TYPE = array('image/pjpeg', 'image/jpeg', 'image/gif', 'image/png', 
	'image/x-png');
	$file_type = $file_obj['type'];
	return(in_array($file_type, $IMG_TYPE));
	}
/**
* ฟั่งชั่น resize รูปภาพโดยกำหนด ความกว้าง,สูง สูงสุด
* $save_filename ชื่อไฟล์ไม่ต้องมีนามสกุล
* $ww ความกว้าง สูงสุด
* $hh ความสูง สูงสุด
* return เป็นชื่อไฟล์ที่ถูกเก็บ
* string uploadResizeTo(resource $file_obj,string $save_path,string 
$save_filename[,int $ww,int $hh])
*/
function uploadResizeTo($file_obj, $save_path, $save_filename, $ww=170, $hh=100){
	$file_name = $file_obj['name'];
	$file_type = $file_obj['type'];
	$tmp_name = $file_obj['tmp_name'];
	switch($file_type){
	case "image/pjpeg" :
	case "image/jpeg" :
	$images_orig = ImageCreateFromJPEG($tmp_name);
	break;
	case "image/gif":
	$images_orig = ImageCreateFromGIF($tmp_name);
	break;
	case "image/png":
	case "image/x-png":
	$images_orig = ImageCreateFromPNG($tmp_name);
	break;
	case "image/bmp":
	$images_orig = ImageCreateFromWBMP($tmp_name);
	break;
	default:
	return(false);
	}
	$orig_width = ImagesX($images_orig);
	$orig_height = ImagesY($images_orig);
	if($orig_width > $ww || $orig_height>$hh){
		if($orig_width > $orig_height){
			$hh = ($ww/$orig_width)*$orig_height;
		}else{
			$ww = ($hh/$orig_height)*$orig_width;
		}
	}else{
		$hh = $orig_height;
		$ww = $orig_width;
	}
	$images_fin = ImageCreateTrueColor($ww, $hh);
	@imagecopyresized($images_fin, $images_orig, 0, 0, 0, 0, $ww, $hh, $orig_width, $orig_height);$ext = end(explode(".", $file_name));
	$newfilename = $save_filename.".".$ext;
	$save = $save_path.$newfilename;
	switch($file_type){
	case "image/pjpeg" :
	case "image/jpeg" :
	case "image/jpg" :
	ImageJPEG($images_fin, $save ,100); // image quality = 100
	break;
	case "image/gif":
	ImageGIF($images_fin,$save);
	break;
	case "image/png":
	case "image/x-png":
	ImagePNG($images_fin,$save);
	break;
	case "image/bmp":
	imageWBMP($images_fin,$save);
	default:
	return(false);
	}
	ImageDestroy($images_orig);
	ImageDestroy($images_fin);
	return($newfilename);}
/**
* เริ่มต้นการใช้งาน
*
*/
	//$upload_path="defualt";
	$ftype = pathinfo( $_FILES["file"]["name"] , PATHINFO_EXTENSION );
	if ($ftype!=""){
		$upload_path=$SAVE_PATH_DB.$date.'_image.'.$ftype;
	}else{
		$upload_path="";
	}
	if(isset($_FILES["file"])){
	
	$name2= htmlspecialchars($name, ENT_QUOTES);
	if($name==""){
		echo"Please add new Navigation name";
		exit();
	}
	$newfilename = uploadResizeTo($_FILES["file"], $SAVE_PATH, $date.'_image', 
170, 100);
	$ndate=date('Y-m-d H:i:s');
	$sql21="INSERT INTO `tb_menu` (`id_menu` ,`name_menu` ,`level` ,`sub_of` ,`menu_image` ,`menu_intro` ,`id_language` ,`update_day` ,`public_menu` ,`menu_sequence`)VALUES ('', '$name', '$slevel', '$sid', '$upload_path', '$menu_intro', '1', '$ndate', '0', '$menu_sequence');";   
	$result21=mysql_db_query($dbname,$sql21) or die(mysql_error());
	$sql22="INSERT INTO `tb_menu_th` (`id_menu` ,`name_menu` ,`level` ,`sub_of` ,`menu_image` ,`menu_intro` ,`id_language` ,`update_day` ,`public_menu` ,`menu_sequence`)VALUES ('', '$name_th', '$slevel', '$sid', '$upload_path', '$menu_intro_th', '1', '$ndate', '0', '$menu_sequence');";   
	$result22=mysql_db_query($dbname,$sql22) or die(mysql_error());
	if ($result21){
			echo"<h3>You have added new Navigation successfully.</h3><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_navi.php'>here</a> for back to Press main page.</span></p>";
		/*if ($sid!=""){
			$sql31="UPDATE `tb_menu` SET `have_sub`=1 WHERE `id_menu`='$sid' LIMIT 1 ;";   
			$result31=mysql_db_query($dbname,$sql31) or die(mysql_error());
			$sql32="UPDATE `tb_menu_th` SET `have_sub`=1 WHERE `id_menu`='$sid' LIMIT 1 ;";   
			$result32=mysql_db_query($dbname,$sql32) or die(mysql_error());
		}*/
	}else{			
		echo"<p>Cannot add new Menu<p></br>";
		echo"<p><a href='admin_navi.php'>Back to Add Menu page</a><p>";
	}
	}else{
		echo"<p>Can't create Menu</br>";
		echo"<p><a href='admin_navi.php'>Back to Add Menu page</a><p>";
	}
	}else{
		echo"<p>Can't create Menu Sub level is limited</br>";
		echo"<p><a href='admin_navi.php'>Back to Add Menu page</a><p>";
	}
	/*
		$update=getdate();
  		$updateday=$update["year"]."-".$update["mon"]."-".$update["mday"];
 		$sql3="INSERT INTO test Values(null,'$name2','$updateday')";   
  		$result3=mysql_db_query($dbname,$sql2) or die(mysql_error());
  	if ($result3)  {
  	}else{
   		echo"Cannot add new Industry";
  	}*/
	mysql_close();
	
	?>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>

</div>
			<!--##/Right Menu##--> 
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
</body></html>