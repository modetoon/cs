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
<link rel="icon" type="../image/vnd.microsoft.icon" href="/favicon.ico" /> 
<script type="text/javascript">
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
	$sql11="Select * from tb_article where id_article='$id_edit'";
	$result11=mysql_db_query($dbname,$sql11);
	$rs11=mysql_fetch_array($result11);
	
	$menu_article=$rs11[menu_article];
	$topic_article=$rs11[topic_article];
	$content_article=$rs11[content_article];
	$show_rmenu=$rs11[show_rmenu];
	$content_slider=$rs11[content_slider];
	//$position_rmenu=$rs11[position_rmenu];
	
	$rmenu=explode(",", $show_rmenu);
	//$position=explode(",", $position_rmenu);
	
	$sql12="Select * from tb_article_th where id_article='$id_edit'";
	$result12=mysql_db_query($dbname,$sql12);
	$rs12=mysql_fetch_array($result12);
	
	$topic_article_th=$rs12[topic_article];
	$content_article_th=$rs12[content_article];
	$content_slider_th=$rs12[content_slider];
	
	$sql9="SELECT * from tb_slider_cate WHERE id_slider='$content_slider'";
	$result9=mysql_db_query($dbname,$sql9);
	$rs=mysql_fetch_array($result9);

	//$id_slider=$rs[id_slider];
	$slider_language=$rs[slider_language];
?>
</head>
<body class="contnt en" onLoad="make_list('List1',0)">
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
    <?php include"user_menu.php";?>
    <!--##/END-Navigation bar##-->
    
    <!--##/Top menu##-->
      <div role="main" class="main">
        <div class="service">
          <ul class="breadcrumb">
            <li class="last"></li>
          </ul>
          <nav class="servicenav">
            <ul class="nobulls">
              <li>Welcome</li>
              <li><a href="#share" class="last"><?php echo $resultZ["name_admin"];?></a></li>
            </ul>
          </nav>
        </div>
        <section>             
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Edit Article :: Old Version</h1>
              <div class="form-horizontal">
              
    <form action="admin_content_edit_old2.php" method="post" enctype="multipart/form-data" name="form1">
      <!-- ============================== Fieldset 1 ============================== -->
		  <div class="spacer-half"></div>
          
            <!--2 language TABs-->
          <div class="spacer"></div>
              <div class="generate-ui-tab">
                <ul>
                  <li><a href="#EEFA-1">English Content</a></li>
                  <li><a href="#EEFA-2">Thai Content</a></li>
                </ul>
               <div class="supertab defaulttab" id="EEFA-1">
               	  <h2 class="supertab-head"><span>English Content</span></h2>
		  			<div class="spacer-half"></div>
  					<div class="control-group">
      				<label class="control-label" id="anredeLabel" for="anrede">English Topic :</label>
            	<div class="controls">
      		<input type="text" id="topicnews" name="topicnews" class="input-large" value="<?php echo$topic_article?>"/>
                </div>
  			</div>
            	<div class="control-group" id="txtHint">
            <label class="control-label" id="firstnameLabel" for="vorname">Select slider :</label>
            	<div class="controls">
			<select id="slider" name="slider" class="input-large">
            <option value="">Please select English slider</option>
            <?php
				$sql14="SELECT * FROM tb_slider_cate WHERE slider_language = '1'";
				$result14=mysql_db_query($dbname,$sql14);
				while($rs14=mysql_fetch_array($result14)) {
					$id_slider_start=$rs14[id_slider];
					$slider_name_start=$rs14[slider_name];
					if ($id_slider_start==$content_slider){
  						echo '<option selected="selected" value="'.$id_slider_start.'">'.$slider_name_start.'</option>';
					}else{
						echo '<option value="'.$id_slider_start.'">'.$slider_name_start.'</option>';
					}
				}
            	
			?>                
            </select>
            	</div>
      		</div>  
                    
            <div class="p">
             	<div class="spacer"></div>                  
    			<div id="1" >
   		<textarea name="content_article" id="content_article" style="width:100%"><?php echo$content_article?></textarea>
    			</div>
            </div>
        
                  <div class="spacer"></div>
                </div>
                
        <!--2 Language TABs-->     
              <div class="supertab" id="EEFA-2">
                  <h2 class="supertab-head"><span>Thai Content</span></h2>
                  <div class="spacer-half"></div>
                  <div class="control-group">
      				<label class="control-label" id="anredeLabel" for="anrede">Thai Topic :</label>
            		<div class="controls">
      				<input type="text" id="topicnews" name="topicnews_th" class="input-large" value="<?php echo$topic_article_th?>"/>
               		</div>
  				</div>   
                
                <div class="control-group" id="txtHint">
            		<label class="control-label" id="firstnameLabel" for="vorname">Select slider :</label>
            		<div class="controls">
					<select id="slider_th" name="slider_th" class="input-large">
            		<option selected='selected' value=''>Please select Thai slider</option>
                <?php
				$sql15="SELECT * FROM tb_slider_cate WHERE slider_language = '2'";
				$result15=mysql_db_query($dbname,$sql15);
				while($rs15=mysql_fetch_array($result15)) {
					$id_slider_start=$rs15[id_slider];
					$slider_name_start=$rs15[slider_name];
					if ($id_slider_start==$content_slider_th){
  						echo '<option selected="selected" value="'.$id_slider_start.'">'.$slider_name_start.'</option>';
					}else{
						echo '<option value="'.$id_slider_start.'">'.$slider_name_start.'</option>';
					}
				}
            	
			?>  
            		</select>
            				</div>
      				</div>      
                    
                <div class="p">
             	<div class="spacer"></div>
        		<div id="2" >
   		<textarea name="content_article_th" id="content_article2" style="width:100%"><?php echo$content_article_th?></textarea>
    	        </div>
                </div>
                
             </div>
       
       <!--Select Navigation--> 
                <div class="spacer"></div>
             <h2>Select Navigation</h2>
             <div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Select Main Menu :</label>
            	<div class="controls">
			<select class="input-large" id="mainmenu" name="mainmenu" onChange="showUser2(this.value)">
        		
                <?php
					//$id_edit=$_GET[id_edit];
					$sql9="Select * from tb_menu where id_menu='$menu_article'";
					$result9=mysql_db_query($dbname,$sql9);
					$rs9=mysql_fetch_array($result9);
					$ori_level=$rs9[level];
					$level=$rs9[level];
					if ($level!=1){
						$ori_menu=$rs9[sub_of];
						$root_menu=$rs9[sub_of];
					}else{
						$ori_menu=$rs9[id_menu];
						$root_menu=$rs9[id_menu];
					}
					while($level>2){
						$sql10="Select * from tb_menu where id_menu='$root_menu'";
						$result10=mysql_db_query($dbname,$sql10);
						$rs10=mysql_fetch_array($result10);
						$root_menu=$rs10[sub_of];
						$level=$rs10[level];
					}
						echo'<option value="0">Please select Menu</option>';

					
					$sql7="select * from tb_menu WHERE level = 1 order by id_menu ASC" ;
					$result7=mysql_db_query($dbname,$sql7);
					while($rs7=mysql_fetch_array($result7)) {
						$s4_id_menu=$rs7[id_menu] ;
						$s4_name_menu=$rs7[name_menu] ;
						if ($s4_id_menu==$root_menu){
							echo '<option selected="selected" value="'.$s4_id_menu.'">'.$s4_name_menu.'</option>';
						}else{
							echo '<option value="'.$s4_id_menu.'">'.$s4_name_menu.'</option>';
						}
					}
				?>
      		</select>
				</div>
            </div>
            
			<div class="control-group" id="txtHint2">
            <label class="control-label" id="firstnameLabel" for="vorname">Select, if need add to sub menu :</label>
            	<div class="controls">
			<select id="submenu" name="submenu" class="input-large">
            	<?php
					if ($ori_level==1){
						echo'<option selected="selected" value="0">Please select Menu before choose Sub Menu</option>';
					}else{
						echo'<option value="0">Please select Menu before choose Sub Menu</option>';
					}
					
					$sql12="select * from tb_menu WHERE sub_of = ".$root_menu." order by id_menu ASC" ;
					$result12=mysql_db_query($dbname,$sql12);
					while($rs12=mysql_fetch_array($result12)) {
						//if ($row[1]!=Overview){
						$s2_id_menu=$rs12[id_menu] ;
						$s2_name_menu=$rs12[name_menu] ;
						if ($s2_id_menu==$menu_article){
							echo '<option selected="selected" value="'.$s2_id_menu.'">'.$s2_name_menu.'</option>';
						}else{
							echo '<option value="'.$s2_id_menu.'">'.$s2_name_menu.'</option>';
						}
						$sql13="select * from tb_menu WHERE sub_of = ".$s2_id_menu." order by id_menu ASC" ;
						$result13=mysql_db_query($dbname,$sql13);
						while($rs13=mysql_fetch_array($result13)) {
							$s3_id_menu=$rs13[id_menu] ;
							$s3_name_menu=$rs13[name_menu] ;
							if ($s3_id_menu==$menu_article){
							echo '<option selected="selected" value="'.$s3_id_menu.'"> -- '.$s3_name_menu.'</option>';
							}else{
								echo '<option value="'.$s3_id_menu.'"> -- '.$s3_name_menu.'</option>';
							}
							$sql14="select * from tb_menu WHERE sub_of = ".$s3_id_menu." order by id_menu ASC" ;
							$result14=mysql_db_query($dbname,$sql14);
							while($rs14=mysql_fetch_array($result14)) {
								$s4_id_menu=$rs14[id_menu] ;
								$s4_name_menu=$rs14[name_menu] ;
								if ($s4_id_menu==$menu_article){
									echo '<option selected="selected" value="'.$s4_id_menu.'"> ---- '.$s4_name_menu.'</option>';
								}else{
									echo '<option value="'.$s4_id_menu.'"> ---- '.$s4_name_menu.'</option>';
								}
							}
						}

					}
				?>
            </select>
            	</div>
      		</div>
        	<p id="xhide"></p>
                   
       <!--END - Select Navigation--> 
       
       <!--Right Menu--> 
             <div class="spacer"></div>
             <h2>Select Right Menu</h2>
                </div>
       
       	<!--END - Right Menu--> 
       
       
      <!-- Button -->
      	<input name="hidAction" id="hidAction" type="hidden" value="Add">
        <input name="id_edit" id="id_edit" type="hidden" value="<?php echo$id_edit?>">
      	<div class="buttons">
      	<button type="reset" class="btn">Reset</button>
      	<button type="submit" alt="Submit" name="submit" value="Submit" class="btn btn-primary" onSubmit="return Check_txt()" onClick="insertInput();">Update</button>
        <!-- end #mainContent --></div></div>
	</div>
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
<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../scripts/standard.js"></script>
<!--<script src="../styles/jquery.jquery-ui.min.js"></script>
<script src="../styles/global/standard.js"></script>-->
<script>
	//add page specific JS here
</script>
</body>
</html>