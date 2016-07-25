<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<head>
<script src="http://www.bayer.com/scripts/4/modernizr.js"></script>
<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/jquery.codify.min.js"></script>
<script type="text/javascript" src="../js/htmlbox.full.js"></script>
<script type="text/javascript" src="../js/htmlbox.colors.js"></script>
<script type="text/javascript" src="../js/htmlbox.styles.js"></script>
<script type="text/javascript" src="../js/htmlbox.syntax.js"></script>
<script type="text/javascript" src="../js/htmlbox.undoredomanager.js"></script>
<script type="text/javascript" src="../js/htmlbox.min.js"></script>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.js"></script>
<script type="text/javascript" src="tinymce/filemanager/plugin.min.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="calendar/jsDatePick_ltr.min.css" />
<link rel="icon" type="../image/vnd.microsoft.icon" href="/favicon.ico" />
<script type="text/javascript" src="calendar/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
			});
	};
tinymce.init({
    selector: "textarea",theme: "modern",width: 760,height: 500,
	elements : "blogentry_body,blogentry_body_en",
	entity_encoding : "raw",
        // menubar: false,
        subfolder:"content",
        plugins: [
            "link image media anchor responsivefilemanager", 
            "code", "table", "preview", "template", "wordcount", "media", "searchreplace",
        ],
		toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
		toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor | searchreplace | print preview code | template",
        image_advtab: true,
	 //mode : "textareas", | styleselect
     //theme : "advanced",
		templates: [ 
        {title: 'accordion', description: 'This page for creating accordion part', url: 'tinymce/templates/accordion-template.html'}, 
        {title: 'image-gallery-template', description: 'This page for creating image slider gallery', url: 'tinymce/templates/image-gallery-template.html'},  
		{title: 'multiple-columns-template', description: 'This page for creating multiple columns', url: 'tinymce/templates/multiple-columns-template.html'}, 
		{title: 'subhomepage', description: 'This page for creating OVERVIEW page', url: 'tinymce/templates/subhomepage.html'}, 
		{title: 'table-template', description: 'This page for creating TABLE', url: 'tinymce/templates/table-template.html'}, 
		{title: 'tab-template', description: 'This page for creating TAB', url: 'tinymce/templates/tab-template.html'}, 
		{title: 'video-template', description: 'This page for creating video template', url: 'tinymce/templates/video-template.html'}, 
    	],
   // Example content CSS (should be your site CSS)
      //content_css : "css/example.css",
	  	
		content_css : "../styles/global/standard.css",
		relative_urls:false,
		external_filemanager_path:"tinymce/filemanager2/",
   		filemanager_title:"Filemanager" ,
   		external_plugins: { "filemanager" : "tinymce/filemanager2/plugin.min.js"}
      
 });
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getslider.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<?php
	include "../config/connect.php";
	$id_edit=$_GET[id_edit];
	$sql11="Select * from tb_job where id_job='$id_edit'";
	$result11=mysql_db_query($dbname,$sql11);
	$rs11=mysql_fetch_array($result11);
	
	$job_name =$rs11[job_name];
	$job_date =$rs11[job_date];
	$job_content=$rs11[job_content];
	$job_link=$rs11[link];
	$job_link_name = substr($job_link,21);
	
	$news_date=explode("-",$job_date);
	if($news_date[1]==1){
		$news_date[1]=JAN;
	}else if($news_date[1]==2){
		$news_date[1]=FEB;
	}else if($news_date[1]==3){
		$news_date[1]=MAR;
	}else if($news_date[1]==4){
		$news_date[1]=APR;
	}else if($news_date[1]==5){
		$news_date[1]=MAY;
	}else if($news_date[1]==6){
		$news_date[1]=JUN;
	}else if($news_date[1]==7){
		$news_date[1]=JUL;
	}else if($news_date[1]==8){
		$news_date[1]=AUG;
	}else if($news_date[1]==9){
		$news_date[1]=SEP;
	}else if($news_date[1]==10){
		$news_date[1]=OCT;
	}else if($news_date[1]==11){
		$news_date[1]=NOV;
	}else if($news_date[1]==12){
		$news_date[1]=DEC;
	}
	$job_date=substr($news_date[2],0,2).'-'.$news_date[1].'-'.$news_date[0];
?>
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
            <li class="last"></li>
          </ul>
          <?php include "username.php"; ?>
        </div>
        <section>             
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Job</h1>
              <div class="form-horizontal">
    <form action="admin_job_edit2.php" method="post" enctype="multipart/form-data" name="form1">
      <!-- ============================== Fieldset 1 ============================== -->
                
  
  			<div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Name :</label>
            	<div class="controls">
      		<input type="text" id="job_name" name="job_name" class="input-large" value="<?php echo$job_name;?>"/>
                </div>
  			</div>
            <div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Date of Job :</label>
            	<div class="controls">
            <input id="inputField" name="job_date" type="text" class="input-large" value="<?php echo$job_date;?>">
                </div>
  			</div>
            <!--2 Language TABs-->
                <div class="control-group">
                <label id="firstnameLabel3" for="vorname">Add File :</label>                
        <div class="controls">
        		<input type="file" name="file" id="file"/>
				<br>Old file : 
                <?php 
					if($job_link!=""){
						echo "<a href='$job_link' target='_blank'>$job_link_name</a>";
					}else{
						echo "None";
					}
                ?>
                
                <label for="vorname"><span style='color:#F00'>**File size request: Not more than 5MB</span></label>
        </div>
  		</div>

      		<!-- Button -->
            <input name="id_edit" id="id_edit" type="hidden" value="<?php echo$id_edit?>">
      	<div class="buttons">
      	<button type="reset" class="btn">Reset</button>
      	<button type="submit" alt="Submit" name="submit" value="Submit" class="btn btn-primary" onSubmit="return Check_txt()" onClick="insertInput();">Submit</button>
    	</div>
    </form>
        <!-- end #mainContent -->
	</div>
    <div class="spacer"></div>
    <div class="spacer"></div>

</div>
			<!--##/Right Menu##--> 
         <aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Create Legal Navigation</h1>
                <hr>
                <div class="mlnk"><a href="admin_legal_add.php">Add new Legal Navigation</a></div>
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