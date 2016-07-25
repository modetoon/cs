<?php
include "checksession.php";
$id_edit=$_GET[id_edit];
include "../config/connect.php";
$sql="Select * from tb_right_menu where id_rmenu='$id_edit'";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);

$id_rmenu=$rs[id_rmenu];
$name_rmenu=$rs[name_rmenu];
$name_rmenu_backend=$rs[name_rmenu_backend];
$content_right_menu=$rs[content_right_menu];

$sql2="Select * from tb_right_menu_th where id_rmenu='$id_edit'";
$result2=mysql_db_query($dbname,$sql2);
$rs2=mysql_fetch_array($result2);
$name_rmenu_th=$rs2[name_rmenu];
$content_right_menu_th2=$rs2[content_right_menu];
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.js"></script>
<script type="text/javascript" src="tinymce/filemanager/plugin.min.js"></script>
<script type="text/javascript">
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
</script>
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
              <h1>Edit Right Navigation</h1>
              <div class="form-horizontal">
   			<form action="admin_r_navi_edit2.php" enctype="multipart/form-data" method="post" name="form1">
        	<div class="spacer-half"></div>
    		<input name="id_rmenu" type="hidden" value="<?php echo$id_edit; ?>"/>
              
        	<div class="control-group">
      		<label class="control-label">Please input your new Right Navigation Name in backend</label>
            	   <div class="controls">
      		<input name="name_rmenu_backend" type="text" size="50" id="input-one2" class="input-large" value="<?php echo$name_rmenu_backend?>"/>
            <label for="vorname" class="orange">This text will show in backend only.</label>
            		</div>
            </div>
      
      <div class="spacer"></div>
           <div class="generate-ui-tab">
                <ul>
                  <li><a href="#EEFA-1">English Content</a></li>
                  <li><a href="#EEFA-2">Thai Content</a></li>
                </ul>
            <div class="supertab defaulttab" id="EEFA-1">
                  <h2 class="supertab-head"><span>English Content</span></h2>
                  <div class="control-group">
                <label class="control-label" for="input-one">Please input your new Thai menu</label>
      				<div class="controls">
      			<input name="name_rmenu" type="text" size="50" id="input-one2" class="input-large" value="<?php echo$name_rmenu?>"/>
                <label for="vorname" class="orange">(example: Brands, Links, Publications and etc..)</label>
                    </div>
				</div>
            <div class="p">
                <div class="spacer"></div>
    		<div id="1">
   				<textarea name="content_right_menu" id="content_right_menu" style="width:100%"><?php echo$content_right_menu?></textarea>
    		</div>
        
       		</div>
                <div class="spacer"></div>
           </div>
           <div class="supertab" id="EEFA-2">
                 <h2 class="supertab-head"><span>Thai Content</span></h2>
                 <div class="control-group">
   				<label class="control-label" for="input-one">Please input your new Thai menu</label>
        			<div class="controls">
      			<input name="name_rmenu_th" type="text" size="50" id="input-one2" class="input-large" value="<?php echo$name_rmenu_th?>"/>
                <label for="vorname" class="orange">(example: ตราสินค้า, ลิงค์, สื่อสิ่งพิมพ์)</label>
                	</div>
                 </div>
        <div class="p">
                  <div class="spacer"></div>
        <div id="2">
   		<textarea name="content_right_menu_th" id="content_right_menu_th" style="width:100%"><?php echo$content_right_menu_th2?></textarea>
    	</div>
                  
        </div>
                  <div class="spacer"></div>
           </div>
       </div>
      <div class="buttons">
      <button type="reset" class="btn">Reset</button>
      <button type="submit" alt="Submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
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
  <a class="close-reveal-modal">close<span class="close">×</span></a> </div>
<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../scripts/standard.js"></script>
</body></html>