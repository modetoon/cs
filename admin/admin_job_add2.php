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
            <li class="last"></li>
          </ul>
          <?php include "username.php"; ?>
        </div>
        <section>             
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Add Navigation</h1>
    <?php
	include "../config/connect.php" ;

	$job_name= mysql_real_escape_string($_POST['job_name']);
	$job_date=$_POST['job_date'];
	
	$news_date=explode("-",$job_date);
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
	
	$folder = "../img/resume/upload/";
	//$folder2 = "../img/resume/thumbs/";
	$folder2 = $folder;
	///////////////////////////// upload file 1
	$ftype = pathinfo( $_FILES["file"]["name"] , PATHINFO_EXTENSION );
	if($ftype!=""){
		//$image = $date."_pic1_img.".$ftype1;
		$_FILES["file"]["name"]=pathinfo( $_FILES["file"]["name"] , PATHINFO_BASENAME );
		//$filename = $_FILES["file"]["name"];
		$path1 = $folder.$_FILES["file"]["name"];
		$path2 = $folder2.$_FILES["file"]["name"];
		$size = $_FILES["file"]["size"];
	}

	if ($ftype=="doc" or $ftype=="docx" or $ftype=="jpeg" or $ftype=="pdf"){
	if ($size<=5242880){
		move_uploaded_file($_FILES["file"]["tmp_name"] , $path1);
		$target_path = $path2;
		chmod($target_path, 0644);
	}
	}
	
	if ($ftype=="doc" or $ftype=="docx" or $ftype=="jpeg" or $ftype=="pdf" or $ftype==""){
	if ($size<=5242880){
	$job_date=$news_date[2].'-'.$news_date[1].'-'.$news_date[0];

	$ndate=date('Y-m-d H:i:s');
	
	$sql21="INSERT INTO `tb_job` (`id_job` ,`job_name` ,`job_date` ,`link`,`upload_date`)VALUES ('', '$job_name', '$job_date', '$path2', '$ndate');";   
	$result21=mysql_db_query($dbname,$sql21) or die(mysql_error());
	if ($result21){
		echo"<h3>You have added a Job&Career successfully.</h3><br />";
		echo"<p><span class='txtnormal'>Click <a href='admin_job.php'>here</a> for back to Job&Career main page.</span></p>";
	}else{			
		echo"<p><span style='color:#F00'>You cannot add a Job&Career, Please kindly try again or contact your IT team.</span></p><br />";
		echo"<p><span class='txtnormal'>Click <a href='admin_job.php'>here</a> for back to Job&Career main page.</span></p>";
	}
	}else{
		echo"<p><span style='color:#F00'>You cannot edit a Job&Career, You are wrong upload file please try again.</span></p><br />";
		echo"<p><span class='txtnormal'>Click <a href='admin_job.php'>here</a> for back to Job&Career main page.</span></p>";
	}
	}else{
		echo"<p><span style='color:#F00'>You cannot edit a Job&Career, You are wrong upload file please try again.</span></p><br />";
		echo"<p><span class='txtnormal'>Click <a href='admin_job.php'>here</a> for back to Job&Career main page.</span></p>";
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

</div>
			<!--##/Right Menu##--> 
             <aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Create Job&amp;Career</h1>
                <hr>
                <div class="mlnk"><a href="admin_job.php">Add new Job&amp;Career</a></div>
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
</body></html>