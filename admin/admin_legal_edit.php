<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<script type="text/javascript">
//First Menu
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
  xmlhttp.open("GET","getmenu.php?f="+str,true);
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
              <h1>Edit Legal Navigation</h1>
              <div class="form-horizontal">
              <form action="admin_legal_edit2.php" method="post" name="form1">
  			<div class="spacer-half"></div>
  			<div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Select Main Menu :</label>
            	<div class="controls">
			<select class="input-large" id="mainmenu" name="mainmenu" onChange="showUser2(this.value)">
        		
                <?php
					include "../config/connect.php";
					$id_edit=$_GET[id_edit];
					$sql15="Select * from tb_legal where id_legal='$id_edit'";
					$result15=mysql_db_query($dbname,$sql15);
					$rs15=mysql_fetch_array($result15);
					$id_article=$rs15[id_article];
					
					$menu_article=$id_article;
					
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
            <div class="buttons">
          <input name="id_edit" id="id_edit" type="hidden" value="<?php echo$id_edit?>">
              <button type="reset" class="btn">Reset</button>
      <button type="submit" class="btn btn-primary" alt="Submit" name="submit" value="Submit" onClick="insertInput();">Submit</button>
      
      <!--<input type="submit" alt="Submit" name="submit" value="Submit" class="submit-text" onClick="insertInput();"/>-->
  </div>
    </form> 

 	 <div class="spacer"></div>
     <div class="spacer"></div>
     <div class="spacer"></div>
     <div class="spacer"></div>
     <div class="spacer"></div>
     <div class="spacer"></div>
     <div class="spacer"></div>

</div></div>
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