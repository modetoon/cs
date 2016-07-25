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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<title>Administrator: Bayer</title>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.js"></script>
<script type="text/javascript" src="tinymce/filemanager/plugin.min.js"></script>
<?php include"header.php"; ?>
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
<section>
<body class="twoColFixRtHdr">
<div id="container">
  <div style="height:5px; background-color:#df0909; width:100%"></div>

  <!-- end header -->
  <div id="backendContent">
    <?php include("admin_menu.php");?>
    <br />
    <form action="admin_rcate_edit2.php" enctype="multipart/form-data" method="post" name="form1">
    <input name="id_rmenu" type="hidden" value="<?php echo$id_edit; ?>"/>
    <legend>Edit your Menu and Page</legend>
      <hr class="formik" />
      <label for="input-one">Please input your new English menu</label>
      <input name="name_menu" type="text" size="50" id="input-one2" class="text" value="<?php echo$name_rmenu?>"/>
      <label for="input-one">Please input your new Thai menu</label>
      <input name="name_rmenu_th" type="text" size="50" id="input-one2" class="text" value="<?php echo$name_rmenu_th?>"/>
      
      <label for="input-one">Please edit your backend menu name</label>
      <input name="name_rmenu_backend" type="text" size="50" id="input-one2" class="text" value="<?php echo$name_rmenu_backend?>"/>
      
      <div class="spacer"></div>
              <div class="generate-ui-tab">
                <ul>
                  <li><a href="#EEFA-1">English Content</a></li>
                  <li><a href="#EEFA-2">Thai Content</a></li>
                </ul>
               <div class="supertab defaulttab" id="EEFA-1">
                  <h2 class="supertab-head"><span>English Content</span></h2>
                  <div class="p">
                  
    	<div id="1" class="control-group">
   		<textarea name="content_right_menu" id="content_right_menu" style="width:100%"><?php echo$content_right_menu?></textarea>
    	</div>
        
       			 </div>
                  <div class="spacer"></div>
                </div>
                <div class="supertab" id="EEFA-2">
                  <h2 class="supertab-head"><span>Thai Content</span></h2>
                  <div class="p">
                  
        <div id="2" class="control-group">
   		<textarea name="content_right_menu_th" id="content_right_menu_th" style="width:100%"><?php echo$content_right_menu_th2?></textarea>
    	</div>
                  
                  </div>
                  <div class="spacer"></div>
                </div>
       </div>
      
      <input type="submit" alt="Submit" name="submit" value="Submit" class="submit-text"/>
      </form>
    <!-- end #mainContent -->
</section>
  <?php include"footer.php"; ?>