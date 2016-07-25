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
    selector: "textarea",theme: "modern",width: 680,height: 300,
	elements : "blogentry_body,blogentry_body_en",
	entity_encoding : "raw",
        // menubar: false,
        subfolder:"content",
        plugins: [
            "link image media anchor responsivefilemanager", 
            "code", "table", "preview", "template"
        ],

		toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
       toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code | template",
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
		external_filemanager_path:"tinymce/filemanager/",
   		filemanager_title:"Filemanager" ,
   		external_plugins: { "filemanager" : "tinymce/filemanager/plugin.min.js"}
      
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

function showUser2(str) {
  if (str=="") {
    document.getElementById("txtHint2").innerHTML="";
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
      document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getmenu.php?f="+str,true);
  xmlhttp.send();
}
</script>

<?php
	include "../config/connect.php";
	
	$id_edit=$_GET[id_edit];
	
	$sql="select * from tb_press_backup where id_press='$id_edit'";
	$result=mysql_db_query($dbname,$sql);
	$rs=mysql_fetch_array($result);
	$press_type=$rs[press_type] ;
	$topline=$rs[topline] ;
	$headerline=$rs[headerline] ;
	$introtext=$rs[intro_content] ;
	$show_type=$rs[show_type] ;
	$press_pic=$rs[press_pic] ;
	$press_content=$rs[press_content] ;
	$press_date=$rs[news_date] ;
	
	$news_date=explode("-",$press_date);
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
	$press_date=$news_date[2].'-'.$news_date[1].'-'.$news_date[0];
	
	$sql2="select * from tb_press_th_backup where id_press='$id_edit'";
	$result2=mysql_db_query($dbname,$sql2);
	$rs2=mysql_fetch_array($result2) ;
	$topline_th=$rs2[topline] ;
	$headerline_th=$rs2[headerline] ;
	$introtext_th=$rs[intro_content] ;
	$press_content_th=$rs2[press_content] ;
?>
</head>
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
              <h1>Press :: Edit</h1>
          <div class="form-horizontal">
              
    <form action="admin_press_edit_update2.php" method="post" enctype="multipart/form-data" name="form1" onSubmit="return clickupload();">
      <!-- ============================== Fieldset 1 ============================== -->
		  <div class="spacer-half"></div>
            <!--5TABs-->
        <div class="spacer"></div>
              <div class="generate-ui-tab">
                <ul>
                  <li><a href="#EEFA-1">English Content</a></li>
                  <li><a href="#EEFA-2">Thai Content</a></li>
                </ul>
               <div class="supertab defaulttab" id="EEFA-1">
                  <h2 class="supertab-head"><span>English Content</span></h2>
                  <div class="p">
                  
                  <div class="control-group">
      				<label class="control-label" id="anredeLabel" for="anrede">Input English Topic :</label>
            	  <div class="controls">
      		<input type="text" id="topline" name="topline" class="input-large" value="<?php echo$topline?>"/>
                  </div>
  				  </div>
                  
                  <div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Input Header :</label>
            	  <div class="controls">
			<input name="headerline" type="text" class="input-large" value="<?php echo$headerline?>">
				  </div>
            	  </div>
                  
            <!--Intro Text  -->     
                 <div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Input Intro Text :</label>
            	 <div class="controls">
			<input name="introtext" type="text" class="input-large" value="<?php echo$introtext?>">
				  </div>
            	  </div> 
                  
    	<div id="1" class="control-group">
   		<textarea name="content_article" id="content_article" style="width:100%"><?php echo$press_content?></textarea>
    	</div>
        
       			 </div>
                </div>
                
                <div class="supertab" id="EEFA-2">
                  <h2 class="supertab-head"><span>Thai Content</span></h2>
                  <div class="p">
                  
                <div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Input Thai Topic :</label>
            	<div class="controls">
      		<input type="text" id="topline_th" name="topline_th" class="input-large" value="<?php echo$topline_th?>"/>
                </div>
  				</div>
                
                <div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Input Header :</label>
            	<div class="controls">
            <input name="headerline_th" type="text" class="input-large" value="<?php echo$headerline_th?>">
            	</div>
                </div>
            <!--Intro Text  -->     
                 <div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Input Intro Text :</label>
            	 <div class="controls">
			<input name="introtext_th" type="text" class="input-large" value="<?php echo$introtext_th?>">
				  </div>
            	  </div> 
                            
                <div id="2" class="control-group">
   		<textarea name="content_article_th" id="content_article_th" style="width:100%"><?php echo$press_content_th?></textarea>
    	</div>
                  
            </div>
            </div>
            
            <!-- ============================== Fieldset 3 end ============================== -->
				<div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
            
            <div class="control-group">
      			<label class="control-label" id="anredeLabel" for="anrede">Input Date of Press :</label>
            <div class="controls">
      			<input id="inputField" name="press_date" type="text" class="input-large" value="<?php echo$press_date?>">
            </div>
  			</div>
            

            <div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Select type of news :</label>
            	<div class="controls">
      		<input name="show_type" type="radio" value="1" <?php if($show_type==1)echo'checked'?>>  Text only &nbsp;&nbsp; <input name="show_type" type="radio" value="2" <?php if($show_type==2)echo'checked'?>> Both of text and image
                </div>
  			</div>
        <div class="control-group">
        <label id="firstnameLabel3" for="vorname">Old Image : <?php
			if ($press_pic!=""){
				echo '<img src="../'.$press_pic.'" width="170" height="100" />';
			}else{
				echo '<span style="color:#F00">None</span>';
			}
		?>
        </label>
        </div>
            
        <div class="control-group">
                <label id="firstnameLabel3" for="vorname">Edit Image :</label>                
        <div class="controls">    
        		<input type="file" name="file" id="file"/>
                <label for="vorname" class="orange">**Resolution request: Width 170px, Height 100px</label>
        </div>
  		</div>
        <input name="id_edit" type="hidden" value="<?php echo$id_edit?>"/>
        <input name="press_pic" type="hidden" value="<?php echo$press_pic?>"/>
               
       
      <!-- ============================== Fieldset 3 end ============================== -->
      	<input name="hidAction" id="hidAction" type="hidden" value="Add">
        <div class="buttons">
      	<input name="approve" type="checkbox" value="1"> Please click check box, If you want to approve</div>
      	<div class="buttons">
      	<button type="reset" class="btn">Reset</button>
      	<button type="submit" alt="Submit" name="submit" value="Submit" class="btn btn-primary" onSubmit="return Check_txt()" onClick="insertInput();">Submit</button>
    	</div>
    </form>    
         <!-- end #mainContent --></div>
	</div>
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
<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../scripts/standard.js"></script>
<!--<script src="../styles/jquery.jquery-ui.min.js"></script>
<script src="../styles/global/standard.js"></script>-->
<script>
	//add page specific JS here
</script>
</body>
</html>