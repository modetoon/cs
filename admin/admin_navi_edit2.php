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
              <h1>Edit Navigation</h1>
    <?php 
	include"../config/connect.php";
	$menu_intro=$_POST[menu_intro];
	$menu_intro_th=$_POST[menu_intro_th];
	$name_menu=$_POST[name_menu];
	$name_menu_th=$_POST[name_menu_th];
	$id_edit=$_POST[id_edit];
	$menu_sequence=$_POST[txtsequence];
	$sequence=$_POST[sequence];
	$lesssequence=$_POST[lesssequence];
	
	if ($sequence==""){
		if ($menu_sequence=="")$menu_sequence=$lesssequence;
	} else if ($sequence=="other"){
	} else{
		$menu_sequence=$sequence;
	}
	
	$mainmenu=$_POST[mainmenu];
	$submenu=$_POST[submenu];

	$ndate=date('Y-m-d H:i:s');
	
	$date = date("U");
	
	$xhide=$submenu;
	if($submenu==0){
		$xhide=$mainmenu;
	}
	$sub_of=$xhide ;
	
	$slevel=0;
	$sql71="SELECT * FROM `tb_menu` WHERE id_menu = $xhide LIMIT 1";
	$result71=mysql_db_query($dbname,$sql71);
	$rs71=mysql_fetch_array($result71);
	$slevel=$rs71[level];
	$slevel++;
	
	$sql72="SELECT * FROM `tb_menu` WHERE id_menu = $id_edit LIMIT 1";
	$result72=mysql_db_query($dbname,$sql72);
	$rs72=mysql_fetch_array($result72);
	$old_sub_of=$rs72[sub_of];
	$public_menu=$rs72[public_menu];
	
if ($sub_of!=$id_edit){
	if ($slevel<5){
	
$SAVE_PATH2 = $_SERVER['DOCUMENT_ROOT']."/images/"; //พาสที่ต้องการนำไฟล์ไปเก็บไว้
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
function uploadResizeTo($file_obj, $save_path, $save_filename, $ww=170, 
$hh=100){
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
@imagecopyresized($images_fin, $images_orig, 0, 0, 0, 0, $ww, $hh, 
$orig_width, $orig_height);$ext = end(explode(".", $file_name));
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
if($_FILES["file"]["size"]>0){

if(!file_exists($SAVE_PATH)) mkdir($SAVE_PATH); //สร้าง Folder ปลายทางเมื่อไม่พบ
if(isImage($_FILES["file"])){ //ตรวจสอบว่าเป็นไฟล์รูปภาพ
//เรียกฟังก์ชั่น Resize
if($newfilename = uploadResizeTo($_FILES["file"], $SAVE_PATH, $date.'_image', 
170, 100)){
}
}
}
}

//$SAVE_PATH=$SAVE_PATH+$newfilename;
	

	if($upload_path!=""){
		if ($xhide!=0){		
			$sql1="UPDATE tb_menu set name_menu='$name_menu', menu_intro='$menu_intro', menu_image='$upload_path', update_day='$ndate', menu_sequence='$menu_sequence' where id_menu='$id_edit' ";
			$sql2="UPDATE tb_menu_th set name_menu='$name_menu_th', menu_intro='$menu_intro_th', menu_image='$upload_path', update_day='$ndate', menu_sequence='$menu_sequence' where id_menu='$id_edit' ";
		}else{
			$sql1="UPDATE tb_menu set name_menu='$name_menu', level='$slevel', sub_of='$sub_of', menu_intro='$menu_intro', menu_image='$upload_path', update_day='$ndate', menu_sequence='$menu_sequence' where id_menu='$id_edit' ";
			$sql2="UPDATE tb_menu_th set name_menu='$name_menu_th', level='$slevel', sub_of='$sub_of', menu_intro='$menu_intro_th', menu_image='$upload_path', update_day='$ndate', menu_sequence='$menu_sequence' where id_menu='$id_edit' ";
		}
	}else{
		$sql1="UPDATE tb_menu set name_menu='$name_menu', level='$slevel', sub_of='$sub_of', menu_intro='$menu_intro', update_day='$ndate', menu_sequence='$menu_sequence' where id_menu='$id_edit' ";
		$sql2="UPDATE tb_menu_th set name_menu='$name_menu_th', level='$slevel', sub_of='$sub_of', menu_intro='$menu_intro_th', update_day='$ndate', menu_sequence='$menu_sequence' where id_menu='$id_edit' ";
	}
	$result1=mysql_db_query($dbname,$sql1);
	$result2=mysql_db_query($dbname,$sql2);
	if ($result1)  {	
		$sql8="SELECT * FROM `tb_menu` WHERE sub_of = '$old_sub_of' LIMIT 1";
		$result8=mysql_db_query($dbname,$sql8);
		$no=0;
		while($rs8=mysql_fetch_array($result8)) {
			$no++;
		}
		if ($no>0){
		}else{
			$sql51="UPDATE tb_menu SET `have_sub`=0 WHERE `id_menu`='$old_sub_of' LIMIT 1 ;";
			$result51=mysql_db_query($dbname,$sql51);
			$sql52="UPDATE `tb_menu_th` SET `have_sub`=0 WHERE `id_menu`='$old_sub_of' LIMIT 1 ;";
			$result52=mysql_db_query($dbname,$sql52);
		}
		
		$sql9="SELECT * FROM `tb_menu` WHERE sub_of = '$sub_of' LIMIT 1";
		$result9=mysql_db_query($dbname,$sql9);
		$no=0;
		while($rs9=mysql_fetch_array($result9)) {
			$no++;
		}
		if ($no>0 && $public_menu==1){
			$sql36="UPDATE `tb_menu` SET `have_sub`=1 WHERE `id_menu`='$sub_of' LIMIT 1 ;";
			$result36=mysql_db_query($dbname,$sql36) or die(mysql_error());
			$sql37="UPDATE `tb_menu_th` SET `have_sub`=1 WHERE `id_menu`='$sub_of' LIMIT 1 ;";   
			$result37=mysql_db_query($dbname,$sql37) or die(mysql_error());
		}
		/*if ($xhide!=0){
			$sql31="UPDATE `tb_menu` SET `have_sub`=1 WHERE `id_menu`='$sub_of' LIMIT 1 ;";
			$result31=mysql_db_query($dbname,$sql31) or die(mysql_error());
			$sql32="UPDATE `tb_menu_th` SET `have_sub`=1 WHERE `id_menu`='$sub_of' LIMIT 1 ;";   
			$result32=mysql_db_query($dbname,$sql32) or die(mysql_error());
		}*/
			echo"<p>Edit menu successfully<br /></p>";
			echo"<p><a href='admin_navi.php'>Back to Main Navigation page</a></p>";
	}else{
			echo"<p>Cannot Edit menu</p>";
			echo"<p><a href='admin_navi.php'>Back to Main Navigation page</a></p>";
	}
	}
}else{
			echo"<p>Cannot Edit menu</p>";
			echo"<p><a href='admin_navi.php'>Back to Main Navigation page</a></p>";
}
			mysql_close();
	?>
    <div class="spacer"></div>

</div>
			<!--##/Right Menu##--> 
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Add Navigation</h1>
                <hr>
                <div class="mlnk"><a href="admin_navi_add.php">Add new navigation</a></div>
              </div>
              
            </aside>
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