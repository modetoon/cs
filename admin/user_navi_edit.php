<?php
	include "checksession.php";
	$id_edit=$_GET[id_edit];
	
	include "../config/connect.php";
	
	$sql11="Select * from tb_menu where id_menu='$id_edit'";
	$result11=mysql_db_query($dbname,$sql11);
	$rs11=mysql_fetch_array($result11);
	
	$menu_intro=$rs11[menu_intro];
	$menu_image=$rs11[menu_image];
	$name_menu=$rs11[name_menu];
	$root_name_menu=$rs11[name_menu];
	$root_sub_of=$rs11[sub_of];
	$ori_sub_of=$id_edit;
	$ori_level=$rs11[level];
	$level=$ori_level;
	$ori_menu_sequence=$rs11[menu_sequence];
	
	$sql12="Select * from tb_menu_th where id_menu='$id_edit'";
	$result12=mysql_db_query($dbname,$sql12);
	$rs12=mysql_fetch_array($result12);
	$name_menu_th=$rs12[name_menu];
	$menu_intro_th=$rs12[menu_intro];

	if ($level==1){
		$root_sub_of=$id_edit;
	}
	while($level>2){
		$sql_L2="SELECT *  FROM `tb_menu` WHERE id_menu='$root_sub_of'";
		$result_L2=mysql_db_query($dbname,$sql_L2);
		$rs_L2=mysql_fetch_array($result_L2);
		$root_name_menu=$rs_L2[name_menu];
		$root_sub_of=$rs_L2[sub_of];	
		$level=$rs_L2[level];
			
		$sql_L3="SELECT *  FROM `tb_menu` WHERE id_menu='$root_sub_of'";
		$result_L3=mysql_db_query($dbname,$sql_L3);
		$rs_L3=mysql_fetch_array($result_L3);
		$root_name_menu2=$rs_L3[name_menu];
		
	}
	
	$sql="select * from tb_menu order by id_menu ASC";
	$result=mysql_db_query($dbname,$sql);
	$result2=mysql_db_query($dbname,$sql);
	$number=mysql_num_rows($result);
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<!--##Header##-->
<?php include"header.php"; ?>
<script type="text/javascript">
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
////////////////////////////
var HttPRequest = false;

	   function doCallAjax() {
		  HttPRequest = false;
		  if (window.XMLHttpRequest) { // Mozilla, Safari,...
			 HttPRequest = new XMLHttpRequest();
			 if (HttPRequest.overrideMimeType) {
				HttPRequest.overrideMimeType('text/html');
			 }
		  } else if (window.ActiveXObject) { // IE
			 try {
				HttPRequest = new ActiveXObject("Msxml2.XMLHTTP");
			 } catch (e) {
				try {
				   HttPRequest = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			 }
		  } 
		  
		  if (!HttPRequest) {
			 alert('Cannot create XMLHTTP instance');
			 return false;
		  }
		
		  var url = 'chksequence.php';
		  var pmeters = "tUsername=" + encodeURI( document.getElementById("txtsequence").value);
			HttPRequest.open('POST',url,true);

			HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			HttPRequest.setRequestHeader("Content-length", pmeters.length);
			HttPRequest.setRequestHeader("Connection", "close");
			HttPRequest.send(pmeters);
			
			
			HttPRequest.onreadystatechange = function()
			{

				if(HttPRequest.readyState == 3)  // Loading Request
				{
					document.getElementById("mySpan").innerHTML = "..";
				}

				if(HttPRequest.readyState == 4) // Return Request
				{
					if(HttPRequest.responseText == 'Y')
					{
						window.location = 'chksequence.php';
					}
					else
					{
						document.getElementById("mySpan").innerHTML = HttPRequest.responseText;
					}
				}
				
			}

	   }
</script>
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
    <?php include"user_menu.php";?>
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
              <h1>Edit Navigation</h1>
              <div class="form-horizontal">
    <form action="user_navi_edit2.php" method="post" name="form1" onSubmit="return clickupload();" enctype="multipart/form-data">
      <div class="spacer-half"></div>
  		<div class="control-group">
      <label class="control-label" id="usernameLabel" for="input-one">Edit your Eng menu</label>
      			<div class="controls">
      <input name="name_menu" type="text" id="input-one2" class="input-large" value="<?php echo$name_menu?>"/>
          		</div>
  		</div>
        <div class="control-group">
      <label label class="control-label" id="thaiLabel" for="input-one">Edit your Thai menu</label>
      			<div class="controls">
      <input name="name_menu_th" type="text" id="input-one2" class="input-large" value="<?php echo$name_menu_th?>"/>  
      <input name="id_edit" type="hidden" value="<?php echo$id_edit?>"/>
           		</div>
		</div>
        <div class="control-group">
      		<label label class="control-label" id="thaiLabel" for="input-one">Sequence menu</label>
      			<div class="controls">
            <?php
					$n=0;
					$sq_chk=1;
					$sq_a[3];
					while($n<4) {
						$sql9="select * from tb_menu where menu_sequence = $sq_chk" ;
						$result9=mysql_db_query($dbname,$sql9) or die(mysql_error());
						$rs9=mysql_fetch_array($result9);
						$menu_sequence=$rs9[menu_sequence] ;
						if ($menu_sequence!=$sq_chk) {
							if ($n==0) {
								echo	"<input type=\"radio\" name=\"sequence\" value=\"$ori_menu_sequence\" checked/>$ori_menu_sequence (old sequence)&nbsp; &nbsp;<input name=\"lesssequence\" type=\"hidden\" value=\"$sq_chk\">";
								$n++;
								echo "<input type=\"radio\" name=\"sequence\" value=\"$sq_chk\" />$sq_chk &nbsp; &nbsp;";
							}else{
								echo	"<input type=\"radio\" name=\"sequence\" value=\"$sq_chk\" />$sq_chk &nbsp; &nbsp;";
							}
							$n++;
						}
						$sq_chk++;
					}
			?>
            <br><input type="radio" name="sequence" value="other" />other
            <input name="txtsequence" type="text"  id="txtsequence" onKeyUp="JavaScript:doCallAjax();" /> <span id="mySpan"></span>
           		</div>
			</div>
		<div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Select Topic Type :</label>
            	<div class="controls">
			<select class="input-large" id="mainmenu" name="mainmenu" onChange="showUser2(this.value)">

                <?php
					//$id_edit=$_GET[id_edit];
					$sql9="Select * from tb_menu where id_menu='$id_edit'";
					$result9=mysql_db_query($dbname,$sql9);
					$rs9=mysql_fetch_array($result9);
					$ori_menu=$rs9[sub_of];
					$root_menu=$rs9[sub_of];
					$ori_level=$rs9[level];
					$level=$rs9[level];
					while($level>2){
						$sql10="Select * from tb_menu where id_menu='$root_menu'";
						$result10=mysql_db_query($dbname,$sql10);
						$rs10=mysql_fetch_array($result10);
						$root_menu=$rs10[sub_of];
						$level=$rs10[level];
					}
					if ($ori_level==1){
						echo'<option selected="selected" value="0">Please select main navigation</option>';
					}else{
						echo'<option value="0">Please select main navigation</option>';
					}
					
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
					if ($ori_level==2){
						echo'<option selected="selected" value="0">Please select main navigation before choose sub navigation</option>';
					}else{
						echo'<option value="0">Please select main navigation before choose sub navigation</option>';
					}
					
					$sql12="select * from tb_menu WHERE sub_of = ".$root_menu." order by id_menu ASC" ;
					$result12=mysql_db_query($dbname,$sql12);
					while($rs12=mysql_fetch_array($result12)) {
						//if ($row[1]!=Overview){
						$s2_id_menu=$rs12[id_menu] ;
						$s2_name_menu=$rs12[name_menu] ;
						if ($s2_id_menu==$ori_menu){
							echo '<option selected="selected" value="'.$s2_id_menu.'">'.$s2_name_menu.'</option>';
						}else{
							echo '<option value="'.$s2_id_menu.'">'.$s2_name_menu.'</option>';
						}
						$sql13="select * from tb_menu WHERE sub_of = ".$s2_id_menu." order by id_menu ASC" ;
						$result13=mysql_db_query($dbname,$sql13);
						while($rs13=mysql_fetch_array($result13)) {
							$s3_id_menu=$rs13[id_menu] ;
							$s3_name_menu=$rs13[name_menu] ;
							if ($s3_id_menu==$ori_menu){
							echo '<option selected="selected" value="'.$s3_id_menu.'"> -- '.$s3_name_menu.'</option>';
							}else{
								echo '<option value="'.$s3_id_menu.'"> -- '.$s3_name_menu.'</option>';
							}
							$sql14="select * from tb_menu WHERE sub_of = ".$s3_id_menu." order by id_menu ASC" ;
							$result14=mysql_db_query($dbname,$sql14);
							while($rs14=mysql_fetch_array($result14)) {
								$s4_id_menu=$rs14[id_menu] ;
								$s4_name_menu=$rs14[name_menu] ;
								if ($s4_id_menu==$ori_menu){
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
            <div class="control-group">
        <label id="firstnameLabel3" for="vorname"class="control-label">Insert Intro text here :(if any)</label>
        			<div class="controls">
        <textarea name="menu_intro"  class="input-large" cols="1" rows="8"><?php echo$menu_intro?></textarea>
                  </div>
      		</div>
            <div class="control-group">
        <label id="firstnameLabel3" for="vorname"class="control-label">Insert Intro text here :(if any)</label>
        			<div class="controls">
        <textarea name="menu_intro_th"  class="input-large" cols="1" rows="8"><?php echo$menu_intro_th?></textarea>
                  </div>
      		</div>
            <div class="control-group">
        <label id="firstnameLabel3" for="vorname">Add Image :</label>
        			<div class="controls">
        <input type="file" name="file" id="file"/>
        <label id="firstnameLabel3" for="vorname">Old Image : <?php
			if ($menu_image!=""){
				echo '<img src="'.$menu_image.'" width="170" height="100" />';
			}else{
				echo 'None';
			}
		?>
        </label>
                  </div>
      		</div>
        <div class="buttons">
        <button type="reset" class="btn">Reset</button>
        <button type="submit" class="btn btn-primary" alt="Submit" name="submit" value="Submit" onClick="insertInput();"/>Submit</button>
    	</div>
    </form> 
    <div class="spacer"></div>
	</div>
</div>
			<!--##/Right Menu##--> 
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Add Navigation</h1>
                <hr>
                <div class="mlnk"><a href="user_navi_add.php">Add new navigation</a></div>
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