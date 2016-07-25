<?php
include "checksession.php";
?>
<!doctype html>
<html class="no-js rwd" lang="en">
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
              <h1>Right Menu</h1>
              <div class="form-horizontal">
    <form action="admin_right_cate_add.php" enctype="multipart/form-data" method="post" name="form1">
      <!-- ============================== Fieldset 1 ============================== -->
  		<div class="spacer-half"></div>
  
  		<div class="control-group">
      	<label class="control-label" >Please input your new RIGHT English menu</label>
        	<div class="controls">
      	<input name="name_menu" type="text" size="50" id="input-one2" class="input-large" />
        	</div>
		</div>
        
        <div class="control-group">
      	<label class="control-label" >Please input your new Thai RIGHT menu</label>
        	<div class="controls">
      	<input name="name_rmenu_th" type="text" size="50" id="input-one2" class="input-large" />
        	</div>
		</div>
        
        <div class="control-group">
      	<label class="control-label" >Please input your new RIGHT menu name in backend</label>
        	<div class="controls">
      	<input name="name_rmenu_backend" type="text" size="50" id="input-one2" class="input-large" />
        	</div>
		</div>
      <!-- ============================== Fieldset 2 ============================== -->
        
      <!-- ============================== Fieldset 3 ============================== -->
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
   		<textarea name="content_right_menu" id="content_right_menu" style="width:100%"></textarea>
    	</div>
        </div>
                  <div class="spacer"></div>
                </div>
                <div class="supertab" id="EEFA-2">
                  <h2 class="supertab-head"><span>Thai Content</span></h2>
                  <div class="p">
                  
        <div id="2" class="control-group">
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
    <hr class="formik" />
    <!-- end #mainContent -->
    <?php
	include "../config/connect.php";
	$sql="select * from tb_right_menu order by id_rmenu ASC";
	$result2=mysql_db_query($dbname,$sql);
	$number=mysql_num_rows($result2);
	$no=1;
	//if($number<>0) {
	echo"			
	<table class='table txtR'>
                <colgroup>
                <col width='5%'>
                <col width='60%'>
                <col width='15%'>				
                <col width='10%'>
				<col width='10%'>
                </colgroup>
                <tbody>
                  <tr>
                    <th class='txtL' colspan='5'>Lists of all RIGHT MENU</th>
                  </tr>
                  <tr class='borderblue'>
                    <td>No.</td>
                    <td class='em'>Right Menu Name</td>
					<td >Language</td>
					<td >Edit</td>
					<td >Delete</td>
                  </tr>";
			while($rs2=mysql_fetch_array($result2)) {
			$id_rmenu2=$rs2[id_rmenu] ;
			$name_rmenu2=$rs2[name_rmenu] ;
			echo"
					<tr > 
					<td >$no</td>
					<td class='em'>$name_rmenu2</td>
					<td >$language</td>
					<td><a href=\"admin_rcate_edit.php?id_edit=$id_rmenu2\"> Edit</a></td>
					<td><a href=\"admin_rcate_delete.php?id_del=$id_rmenu2\"   onclick=\" return confirm ('Click OK if you want to delete $name_rmenu2 from you data. ')\"  > Delete</a></td>
					</tr>" ;
					$no++;
					}
				echo"</table>";
				mysql_close();
	?>
					</div>
			</div>
			
</div>

            </section>
<?php include"footer.php"; ?> 
