<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<head>
<link rel="icon" type="../image/vnd.microsoft.icon" href="favicon.ico" /> 
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
              <h1>Article</h1>
              <div class="form-horizontal">
    <form action="user_content_add2.php" method="post" enctype="multipart/form-data" name="form1">
      <!-- ============================== Fieldset 1 ============================== -->
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
      		<input type="text" id="topicnews" name="topicnews" class="input-large" required />
                </div>
  			</div>
            
            <div class="control-group" id="txtHint">
            <label class="control-label" id="firstnameLabel" for="vorname">Select slider :<span style="color:#F00">*</span></label>
            	<div class="controls">
			<select id="slider" name="slider" class="input-large">
            	<option selected='selected' value=''>Please select slider</option>
                <?php
				include "../config/connect.php" ;
				$con = mysqli_connect($host,$user,$pw,$dbname);
				if (!$con) {
  					die('Could not connect: ' . mysqli_error($con));
				}

				mysqli_select_db($con,"bayer");
				$sql="SELECT * FROM tb_slider_cate WHERE slider_language = '1'";
				$result = mysqli_query($con,$sql); 
				while($row = mysqli_fetch_array($result)) {
  					echo '<option value="'.$row[0].'">'.$row[1].'</option>';
				}
				?>
            </select><br /><br />
            <p><span style="color:#F00">* (If this page is not "Overview" page, Please kindly do not choose a slider.)</span></p>
            	</div>
      		</div>
            
            <!--2 Language TABs-->          
             <div class="p">
             		<div class="spacer"></div>
                  
    			<div id="1" >
   				<textarea name="content_article" id="content_article" style="width:100%"></textarea>
    			</div>
              </div>
                  <div class="spacer"></div>
                </div>
                
                <div class="supertab" id="EEFA-2">
                  <h2 class="supertab-head"><span>Thai Content</span></h2>
                  <div class="spacer-half"></div>
            		<div class="control-group">
      				<label class="control-label" id="anredeLabel" for="anrede">Thai Topic :</label>
            			<div class="controls">
      				<input type="text" id="topicnews" name="topicnews_th" class="input-large"/>
               		 	</div>
  					</div>
            
            		<div class="control-group" id="txtHint">
            		<label class="control-label" id="firstnameLabel" for="vorname">Choose slider :<span style="color:#F00">*</span></label>
            			<div class="controls">
					<select id="slider_th" name="slider_th" class="input-large">
            		<option selected='selected' value=''>Please select slider</option>
                <?php
				include "../config/connect.php" ;
				$con2 = mysqli_connect($host,$user,$pw,$dbname);
				if (!$con2) {
  					die('Could not connect: ' . mysqli_error($con2));
				}

				mysqli_select_db($con2,"bayer");
				$sql2="SELECT * FROM tb_slider_cate WHERE slider_language = '2'";
				$result2 = mysqli_query($con2,$sql2); 
				while($row2 = mysqli_fetch_array($result2)) {
  					echo '<option value="'.$row2[0].'">'.$row2[1].'</option>';
				}
				?>
            		</select><br /><br />
            		<p><span style="color:#F00">* (If this page is not "Overview" page, Please kindly do not choose a slider.)</span></p>
            				</div>
      				</div>
                 <div class="p">
             		<div class="spacer"></div>
        		<div id="2" >
   				<textarea name="content_article_th" id="content_article2" style="width:100%"></textarea>
    			</div>
                </div>
                  
                  </div>
                </div>
                
                <!--Select Navigation--> 
                <div class="spacer"></div>
             <h2>Select Navigation</h2>
             <div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Choose Topic Type :</label>
            	<div class="controls">
			<select class="input-large" id="mainmenu" name="mainmenu" onChange="showUser2(this.value)">
        	<option value="0">Please select Menu</option>	
                <?php
					$sql7="select * from tb_menu WHERE level = 1 order by id_menu ASC" ;
					$result7=mysql_db_query($dbname,$sql7);
					while($rs7=mysql_fetch_array($result7)) {
						$s4_id_menu=$rs7[id_menu] ;
						$s4_name_menu=$rs7[name_menu] ;
						echo '<option value="'.$s4_id_menu.'">'.$s4_name_menu.'</option>';
					}
				?>
      		</select>
				</div>
            </div>
			
            <div class="control-group" id="txtHint2">
            <label class="control-label" id="firstnameLabel" for="vorname">Select, if need add to sub menu :</label>
            	<div class="controls">
			<select id="submenu" name="submenu" class="input-large">
            <option selected="selected" value="0">Please select Menu before choose Sub Menu</option>
            </select>
            	</div>
      		</div>
            
            <!--Right Menu--> 
             <div class="spacer"></div>
             <h2>Select Right Menu</h2>
                  <div class="p">
                  
                    <?php
			$sql8="select * from tb_right_menu order by id_rmenu ASC";
			$result8=mysql_db_query($dbname,$sql8);
			while($rs8=mysql_fetch_array($result8)) {
			$name_rmenu_backend8=$rs8[name_rmenu_backend] ;
			$id_rmenu8=$rs8[id_rmenu] ;
			echo'<input type="checkbox" id="checkbx" name="checkbx[]" value="'.$id_rmenu8.'">&nbsp;'.$name_rmenu_backend8.' &nbsp;';
			
			}				
				?>
                  </div>
           <!--END - Right Menu--> 
            
      
      		<!-- Button -->
      	<input name="hidAction" id="hidAction" type="hidden" value="Add">
      	<div class="buttons">
      	<button type="reset" class="btn">Reset</button>
      	<button type="submit" alt="Submit" name="submit" value="Submit" class="btn btn-primary" onSubmit="return Check_txt()" onClick="insertInput();">Submit</button>
    	</div>
    </form>
        <!-- end #mainContent -->
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
	$("#form").validate();
</script>
</body>
</html>