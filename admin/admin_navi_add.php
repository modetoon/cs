<?php 	include"checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>

<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
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
function clickupload()
{
if ( document.getElementById('input-one2').value.length == 0 )
{
alert( 'Please input new menu' ) ;
return false ;
}
if (document.getElementById("chkgo").innerHTML =='<b></b>'){
alert( 'Please change sequence of menu' ) ;
return false ;
}
return true ;
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
<?php
	include "../config/connect.php";
	
	$sql="select * from tb_menu order by id_menu ASC";
	$result=mysql_db_query($dbname,$sql);
	$result2=mysql_db_query($dbname,$sql);
	$number=mysql_num_rows($result);

	$optionlv1=1;
	$optionlv2=1;
	if($number<>0) {
		echo "<script language='javascript' type='text/javascript'>";
		echo "var option = new Array();";
		echo "option[0] = new Array();";
		echo "option[0][0] = new Array('#','Select an option');";
		while($rs=mysql_fetch_array($result)) {
			$s1_id_menu=$rs[id_menu] ;
			$s1_name_menu=$rs[name_menu] ;
			$s1_level=$rs[level] ;
			if($s1_level==1){
				echo"option[".$optionlv1."] = new Array();";
				echo"option[".$optionlv1."][0] = new Array('#','Select an option');";
				echo"option[0][".$optionlv1."] = new Array('".$optionlv1."','".$s1_name_menu."','".$s1_id_menu."');";
								
				$sql5="select * from tb_menu order by id_menu ASC" ;
				$result51=mysql_db_query($dbname,$sql5);
				$result52=mysql_db_query($dbname,$sql5);
				
				while($rs5=mysql_fetch_array($result51)) {
					$s2_id_menu=$rs5[id_menu] ;
					$s2_sub_of=$rs5[sub_of] ;
					$s2_name_menu=$rs5[name_menu] ;
					if($s2_sub_of==$s1_id_menu && $s2_name_menu==Overview){
						echo"option[".$optionlv1."][".$optionlv2."] = new Array('".$optionlv2."','".$s2_name_menu."','".$s2_id_menu."');";
						$optionlv2++;
					}
				}
				while($rs5=mysql_fetch_array($result52)) {
					$s2_id_menu=$rs5[id_menu] ;
					$s2_sub_of=$rs5[sub_of] ;
					$s2_name_menu=$rs5[name_menu] ;
					$s2_level=$rs5[level] ;
					if($s2_sub_of==$s1_id_menu && $s2_name_menu!=Overview){
						echo"option[".$optionlv1."][".$optionlv2."] = new Array('".$optionlv2."','".$s2_name_menu."','".$s2_id_menu."');";
						$optionlv2++;
						
						$sql6="select * from tb_menu order by id_menu ASC" ;
						$result61=mysql_db_query($dbname,$sql6);
						$result62=mysql_db_query($dbname,$sql6);
						
						while($rs6=mysql_fetch_array($result61)) {
							$s3_id_menu=$rs6[id_menu] ;
							$s3_sub_of=$rs6[sub_of] ;
							$s3_name_menu=$rs6[name_menu] ;
							if($s3_sub_of==$s2_id_menu && $s3_name_menu==Overview){
								echo"option[".$optionlv1."][".$optionlv2."] = new Array('".$optionlv2."',' - - ".$s3_name_menu."','".$s3_id_menu."');";
								$optionlv2++;
							}
						}
						
						while($rs6=mysql_fetch_array($result62)) {
							$s3_id_menu=$rs6[id_menu] ;
							$s3_sub_of=$rs6[sub_of] ;
							$s3_name_menu=$rs6[name_menu] ;
							$s3_level=$rs6[level] ;
							if($s3_sub_of==$s2_id_menu && $s3_name_menu!=Overview){
								echo"option[".$optionlv1."][".$optionlv2."] = new Array('".$optionlv2."',' - - ".$s3_name_menu."','".$s3_id_menu."');";
								$optionlv2++;
								
								$sql7="select * from tb_menu order by id_menu ASC" ;
								$result71=mysql_db_query($dbname,$sql7);
								$result72=mysql_db_query($dbname,$sql7);
								
								while($rs7=mysql_fetch_array($result71)) {
									$s4_id_menu=$rs7[id_menu] ;
									$s4_sub_of=$rs7[sub_of] ;
									$s4_name_menu=$rs7[name_menu] ;
									if($s4_sub_of==$s3_id_menu && $s4_name_menu==Overview){
										echo"option[".$optionlv1."][".$optionlv2."] = new Array('".$optionlv2."',' - - - - ".$s4_name_menu."','".$s4_id_menu."');";
										$optionlv2++;
									}
								}
								
								while($rs7=mysql_fetch_array($result72)) {
									$s4_id_menu=$rs7[id_menu] ;
									$s4_sub_of=$rs7[sub_of] ;
									$s4_name_menu=$rs7[name_menu] ;
									$s4_level=$rs7[level] ;
									if($s4_sub_of==$s3_id_menu && $s4_name_menu!=Overview){
										echo"option[".$optionlv1."][".$optionlv2."] = new Array('".$optionlv2."',' - - - - ".$s4_name_menu."','".$s4_id_menu."');";
										$optionlv2++;
									}
								}
							}
						}
					}
				}
				$optionlv1++;
				$optionlv2=1;
			}
		}
	echo "</script>";
?>
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
              <h1>Add Navigation</h1>
              <div class="form-horizontal">
              <form action="admin_navi_add2.php" enctype="multipart/form-data" method="post" name="form1" onSubmit="return clickupload();">
  			<div class="spacer-half"></div>
  		<div class="control-group">
    			<label class="control-label" id="usernameLabel" for="input-one">Please input your new English menu name</label>
    		<div class="controls">
   				<input name="name" type="text" placeholder="Please insert your EN navigation name here" class="input-large" id="input-one2"/>    
    		</div>
  		</div>
        <div class="control-group">
    			<label class="control-label" id="thaiLabel" for="input-one">Please input your new Thai menu name</label>
    		<div class="controls">
   				<input name="name_th" type="text" class="input-large" id="input-one2"/>    
    		</div>
  		</div>
    	<div class="control-group">
      		<label class="control-label" id="anredeLabel" for="anrede">Select Topic Type :</label>
            	<div class="controls">
			<select class="input-large" id="mainmenu" name="mainmenu" onChange="showUser(this.value)">
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
			
            <div class="control-group" id="txtHint">
            <label class="control-label" id="firstnameLabel" for="vorname">Select, if need add to sub menu :</label>
            	<div class="controls">
			<select id="submenu" name="submenu" class="input-large">
            <option selected="selected" value="0">Please select Menu before choose Sub Menu</option>
            </select>
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
							echo	"<input type=\"radio\" name=\"sequence\" value=\"$sq_chk\" />$sq_chk &nbsp; &nbsp;";
							if ($n==0) echo "<input name=\"lesssequence\" type=\"hidden\" value=\"$sq_chk\">";
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
                <label id="firstnameLabel3" for="vorname">Add Image :</label>                
            <div class="controls">             	
        		<input type="file" name="file" id="file"/>
                <label for="vorname" class="orange">**Resolution request: Width 170px, Height 100px</label>
            </div>
  		</div>
        <div class="control-group">
        		<label id="firstnameLabel3" for="vorname" class="control-label">Insert English intro text here :(if any)</label>
    		<div class="controls">
            	<textarea name="menu_intro" class="input-large" cols="1" rows="6" ></textarea>
    		</div>
  		</div>
        <div class="control-group">
        		<label id="firstnameLabel3" for="vorname" class="control-label">Insert  Thai intro text here :(if any)</label>
    		<div class="controls">
            	<textarea name="menu_intro_th" class="input-large" cols="1" rows="6" ></textarea>
    		</div>
  		</div>

  
    <div class="buttons">
      <button type="reset" class="btn">Reset</button>
      <button type="submit" class="btn btn-primary" alt="Submit" name="submit" value="Submit">Submit</button>
      
      <!--<input type="submit" alt="Submit" name="submit" value="Submit" class="submit-text" onClick="insertInput();"/>-->
    </div>
    </form> 

      		
	<?php
	/*$no=1;
	if($number<>0) {
	echo"			
		<table class='table txtR'>
                <colgroup>
                <col width='15%'>
                <col width='55%'>
                <col width='15%'>
                <col width='15%'>
                </colgroup>
                <tbody>
                  <tr>
                    <th class='txtL' colspan='4'><h2>List of NAVIGATION name</h2></th>
                  </tr>
                  <tr class='borderblue'>
                    <td >No.</td>
                    <td class='em'>Menu</td>
                    <td>Edit</td>
					<td>Remove</td>
                  </tr>" ;
			while($rs2=mysql_fetch_array($result2)) {
			$id_menu2=$rs2[id_menu] ;
			$name_menu2=$rs2[name_menu] ;
			echo"
					<tr>                  
					<td>$no</td>
					<td class='em'>$name_menu2</td>
					<td><a href=\"admin_cate_edit.php?id_edit=$id_menu2\"> Edit</a></td>
					<td><a href=\"admin_cate_delete.php?id_del=$id_menu2\"   onclick=\" return confirm ('Click OK if you want to delete $name_menu2 from you data. ')\"  > Remove</a>
					</tr>" ;
				$no++;
				}
				echo "</tbody>
              </table>" ;*/
				mysql_close();
			}
				?>
 	 <div class="spacer"></div>
	</div>
</div>
            
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