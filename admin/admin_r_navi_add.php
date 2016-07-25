<?php
include "checksession.php";
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<!--##Header##-->
<?php include"header.php"; ?>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.js"></script>
<script type="text/javascript" src="tinymce/filemanager/plugin.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",theme: "modern",width: 760,height: 350,
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
        {title: 'RIGHT menu (Text only)', description: 'This page for creating RIGHT menu', url: 'tinymce/templates/Right Menu-template.html'}, 
        {title: 'RIGHT menu (Text and Image)', description: 'This page for creating RIGHT menu with image', url: 'tinymce/templates/Right Menu with Image-template.html'},
		{title: 'RIGHT menu (Text and Video)', description: 'This page for creating RIGHT menu with video', url: 'tinymce/templates/Right Menu with Video-template.html'},
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
<?php include"header_name.php"; ?>
        <section>         
            <!--##/nosearch##--> 
            
            <div class="unit size-col-d-admin">
              <h1>Add Right Navigation</h1>
              <div class="form-horizontal">
    <form action="admin_r_navi_add2.php" enctype="multipart/form-data" method="post" name="form1">
      <!-- ============================== Fieldset 1 ============================== -->
  		<div class="spacer-half"></div>  
        <div class="control-group">
      			<label class="control-label" >Please input your new Right Navigation Name in backend</label>
        			<div class="controls">
      			<input name="name_rmenu_backend" type="text" size="50" id="input-one2" class="input-large" />
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
      			<label class="control-label" >Please input your new Head Topic </label>
        			<div class="controls">
      			<input name="name_menu" type="text" size="50" id="input-one2" class="input-large" />
       			 <label for="vorname" class="orange">(example: Brands, Links, Publications and etc..)</label>
        			</div>
				</div>
                  <div class="p">
                  <div class="spacer"></div>
        <div id="1">
   		<textarea name="content_right_menu" id="content_right_menu" style="width:100%"></textarea>
    	</div>
        </div>
                  <div class="spacer"></div>
                </div>
                <div class="supertab" id="EEFA-2">
                  <h2 class="supertab-head"><span>Thai Content</span></h2>
               <div class="control-group">
      	<label class="control-label" >Please input your new Head Topic</label>
        			<div class="controls">
      	<input name="name_rmenu_th" type="text" size="50" id="input-one2" class="input-large" />
        <label for="vorname" class="orange">(example: ตราสินค้า, ลิงค์, สื่อสิ่งพิมพ์)</label>
        			</div>
				</div>
                  <div class="p">
                  <div class="spacer"></div>
        <div id="2">
   		<textarea name="content_right_menu_th" id="content_right_menu_th" style="width:100%"></textarea>
    	</div>
      <!-- ============================== Fieldset 4 ============================== -->
      </div>
                  <div class="spacer"></div>
                </div>
       </div>           
      <!-- ============================== Fieldset 5 end ============================== -->
      <div class="buttons">
      <button type="reset" class="btn">Reset</button>
      <button type="submit" alt="Submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
    	</div>
    </form>    
					
			</div>
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
