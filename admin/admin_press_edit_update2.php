<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?>         
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
             <h1>Press</h1>
    <?php
	$id_edit=$_POST[id_edit];
	include "../config/connect.php" ;
	
	$topline= mysql_real_escape_string($_POST['topline']);
	$topline_th= mysql_real_escape_string($_POST['topline_th']);
	$press_type=$_POST[press_type];
	$headerline= mysql_real_escape_string($_POST['headerline']);
	$headerline_th= mysql_real_escape_string($_POST['headerline_th']);
	$introtext= mysql_real_escape_string($_POST['introtext']);
	$introtext_th= mysql_real_escape_string($_POST['introtext_th']);
	$show_type=$_POST[show_type];
	$content_article= mysql_real_escape_string($_POST['content_article']);
	$content_article_th= mysql_real_escape_string($_POST['content_article_th']);
	$press_date=$_POST[press_date];
	$approve=$_POST[approve];
	$press_pic=$_POST[press_pic];
	
	$news_date=explode("-",$press_date);
	if($news_date[1]==JAN){
		$news_date[1]=1;
	}else if($news_date[1]==FEB){
		$news_date[1]=2;
	}else if($news_date[1]==MAR){
		$news_date[1]=3;
	}else if($news_date[1]==APR){
		$news_date[1]=4;
	}else if($news_date[1]==MAY){
		$news_date[1]=5;
	}else if($news_date[1]==JUN){
		$news_date[1]=6;
	}else if($news_date[1]==JUL){
		$news_date[1]=7;
	}else if($news_date[1]==AUG){
		$news_date[1]=8;
	}else if($news_date[1]==SEP){
		$news_date[1]=9;
	}else if($news_date[1]==OCT){
		$news_date[1]=10;
	}else if($news_date[1]==NOV){
		$news_date[1]=11;
	}else if($news_date[1]==DEC){
		$news_date[1]=12;
	}
	$press_date=$news_date[2].'-'.$news_date[1].'-'.$news_date[0];
		
	$date = date("U");
	
	$SAVE_PATH2 = $_SERVER['DOCUMENT_ROOT']."/httpdocs/img/press/"; //พาสที่ต้องการนำไฟล์ไปเก็บไว้
	$SAVE_PATH = "../img/press/"; 
	$SAVE_PATH_DB = "../img/press/";
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

	//$upload_path="defualt";
	$ftype = pathinfo( $_FILES["file"]["name"] , PATHINFO_EXTENSION );
	if ($ftype!=""){
		$upload_path=$SAVE_PATH_DB.$date.'_image.'.$ftype;
	}else{
		$upload_path=$press_pic;
	}
	if(isset($_FILES["file"])){
	$newfilename = uploadResizeTo($_FILES["file"], $SAVE_PATH, $date.'_image', 
170, 100);
	chmod($upload_path, 0777);
	
	$sql="select * from tb_press where `id_press` = $id_edit";
	$result=mysql_db_query($dbname,$sql);
	$count=0;
	while($cs=mysql_fetch_array($result)) {
		$count++;
	}
	
	$ndate=date('Y-m-d H:i:s');
	if ($count==1){ //////////////////////ตาราง press มีของเก่าอยู่แล้ว

	if ($upload_path==""){	
	$sql21="UPDATE tb_press_backup set press_type='$press_type', topline='$topline', headerline='$headerline', intro_content='$introtext', news_date='$press_date', show_type='$show_type', show_type='$show_type', press_content='$content_article', mod_date='$ndate' where id_press='$id_edit' ";   
	$result21=mysql_db_query($dbname,$sql21) or die(mysql_error());
	$sql22="UPDATE tb_press_th_backup set press_type='$press_type', topline='$topline_th', headerline='$headerline_th', intro_content='$introtext_th', news_date='$press_date', show_type='$show_type', press_content='$content_article_th', mod_date='$ndate' where id_press='$id_edit' ";  
	$result22=mysql_db_query($dbname,$sql22) or die(mysql_error());
	if ($approve==1){	
	$sql31="UPDATE tb_press set press_type='$press_type', topline='$topline', headerline='$headerline', intro_content='$introtext', news_date='$press_date', show_type='$show_type', show_type='$show_type', press_content='$content_article', mod_date='$ndate' where id_press='$id_edit' ";   
	$result31=mysql_db_query($dbname,$sql31) or die(mysql_error());
	$sql32="UPDATE tb_press_th set press_type='$press_type', topline='$topline_th', headerline='$headerline_th', intro_content='$introtext_th', news_date='$press_date', show_type='$show_type', press_content='$content_article_th', mod_date='$ndate' where id_press='$id_edit' ";  
	$result32=mysql_db_query($dbname,$sql32) or die(mysql_error());
	}
	}else{
	$sql21="UPDATE tb_press_backup set press_type='$press_type', topline='$topline', headerline='$headerline', intro_content='$introtext', news_date='$press_date', show_type='$show_type', press_pic='$upload_path', press_content='$content_article', mod_date='$ndate' where id_press='$id_edit' ";   
	$result21=mysql_db_query($dbname,$sql21) or die(mysql_error());
	$sql22="UPDATE tb_press_th_backup set press_type='$press_type', topline='$topline_th', headerline='$headerline_th', intro_content='$introtext_th', news_date='$press_date', show_type='$show_type', press_pic='$upload_path', press_content='$content_article_th', mod_date='$ndate' where id_press='$id_edit' ";  
	$result22=mysql_db_query($dbname,$sql22) or die(mysql_error());
	if ($approve==1){	
	$sql31="UPDATE tb_press set press_type='$press_type', topline='$topline', headerline='$headerline', intro_content='$introtext', news_date='$press_date', show_type='$show_type', press_pic='$upload_path', press_content='$content_article', mod_date='$ndate' where id_press='$id_edit' ";   
	$result31=mysql_db_query($dbname,$sql31) or die(mysql_error());
	$sql32="UPDATE tb_press_th set press_type='$press_type', topline='$topline_th', headerline='$headerline_th',  intro_content='$introtext_th', news_date='$press_date', show_type='$show_type', press_pic='$upload_path', press_content='$content_article_th', mod_date='$ndate' where id_press='$id_edit' ";  
	$result32=mysql_db_query($dbname,$sql32) or die(mysql_error());
	}
	}
	
	}else{  //////////////////////ตาราง press ยังไม่มี
	
	if ($upload_path==""){	
	$sql21="UPDATE tb_press_backup set press_type='$press_type', topline='$topline', headerline='$headerline', intro_content='$introtext', news_date='$press_date', show_type='$show_type', show_type='$show_type', press_content='$content_article', mod_date='$ndate' where id_press='$id_edit' ";   
	$result21=mysql_db_query($dbname,$sql21) or die(mysql_error());
	$sql22="UPDATE tb_press_th_backup set press_type='$press_type', topline='$topline_th', headerline='$headerline_th', intro_content='$introtext_th', news_date='$press_date', show_type='$show_type', press_content='$content_article_th', mod_date='$ndate' where id_press='$id_edit' ";  
	$result22=mysql_db_query($dbname,$sql22) or die(mysql_error());
	
	}else{
	$sql21="UPDATE tb_press_backup set press_type='$press_type', topline='$topline', headerline='$headerline', intro_content='$introtext', news_date='$press_date', show_type='$show_type', press_pic='$upload_path', press_content='$content_article', mod_date='$ndate' where id_press='$id_edit' ";   
	$result21=mysql_db_query($dbname,$sql21) or die(mysql_error());
	$sql22="UPDATE tb_press_th_backup set press_type='$press_type', topline='$topline_th', headerline='$headerline_th', intro_content='$introtext_th', news_date='$press_date', show_type='$show_type', press_pic='$upload_path', press_content='$content_article_th', mod_date='$ndate' where id_press='$id_edit' ";  
	$result22=mysql_db_query($dbname,$sql22) or die(mysql_error());
	
	}
	
	if ($approve==1){		
	$sql31="INSERT INTO `tb_press` (`id_press` ,`press_type` ,`topline` ,`headerline` ,`intro_content` ,`news_date` ,`show_type` ,`press_pic` ,`press_content` ,`view_count` ,`upload_date` ,`mod_date` ,`public_press`)VALUES ($id_edit, '$press_type', '$topline', '$headerline', '$introtext', '$press_date', '$show_type', '$upload_path', '$content_article', '0', '$ndate', '$ndate', '0'); ";   
	$result31=mysql_db_query($dbname,$sql31) or die(mysql_error());
	$sql32="INSERT INTO `tb_press_th` (`id_press` ,`press_type` ,`topline` ,`headerline` ,`intro_content` ,`news_date` ,`show_type` ,`press_pic` ,`press_content` ,`view_count` ,`upload_date` ,`mod_date` ,`public_press`)VALUES ($id_edit, '$press_type', '$topline_th',  '$headerline_th', '$introtext_th', '$press_date', '$show_type', '$upload_path', '$content_article_th', '0', '$ndate', '$ndate', '0'); ";  
	$result32=mysql_db_query($dbname,$sql32) or die(mysql_error());
	}
	}
	
	if ($result21){
			echo"<h3>You have edited Press successfully.</h3><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_press.php'>here</a> for back to Press main page.</span></p>";
	}else{			
			echo"<p><span style='color:#F00'>You cannot edit Press, Please kindly try again or contact your IT team.</span></p><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_press.php'>here</a> for back to Press main page.</span></p>";
	}
	
	}else{
			echo"<p><span style='color:#F00'>You cannot edit Press, Please kindly try again or contact your IT team.</span></p><br />";
			echo"<p><span class='txtnormal'>Click <a href='admin_press.php'>here</a> for back to Press main page.</span></p>";
	}

	mysql_close();
	
	?>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
    		</div>
            
           <!--##/Right Menu##--> 
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Create Press</h1>
                <hr>
                <div class="mlnk"><a href="admin_press_add.php">Add new press</a></div>
              </div>
              
            </aside>
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