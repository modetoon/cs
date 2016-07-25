<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>

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
  xmlhttp.open("GET","updatepress.php?q="+str,true);
  xmlhttp.send();
}
function clickupload()
{
if ( document.getElementById('input-one2').value.length == 0 )
{
alert( 'Please input new menu' ) ;
return false ;
}
return true ;
}
</script>
</head>
<?php
	$chkpage=$_GET[chkpage];
	$perpage=$_GET[perpage];
	$refsh=$_GET[refsh];
	if ($chkpage=='' or $chkpage<0)$chkpage=1;
	if ($perpage=='')$perpage=10;
	if ($refsh==1)echo '<meta HTTP-EQUIV="REFRESH" content="0; url=user_content.php?chkpage='.$chkpage.'&perpage='.$perpage.'">';
?>
<?php include"header_name_user.php"; ?>
        <section>             
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Press Lists</h1>
   
		 
         <?php
		 include "../config/connect.php";
	
		$sql="select * from tb_press_backup order by id_press ASC";
		$result=mysql_db_query($dbname,$sql);
		$result2=mysql_db_query($dbname,$sql);
		$number=mysql_num_rows($result);
		$no=1;
	//if($number<>0) {
	///////////////// Pagination //////////////////////
	echo '<div class="navLinks"><p>';
	
	$sql="select * from tb_press_backup order by id_press ASC";
	$result=mysql_db_query($dbname,$sql);
	$count=0;
	while($cs=mysql_fetch_array($result)) {
		$count++;
	}
	$nextpage=$chkpage+$perpage;
	$prepage=$chkpage-$perpage;
	$chkpage2=(int)($chkpage/10+0.9);
	if ($chkpage==1 && $count>$nextpage){
		echo '<a href="user_press.php?chkpage='.$nextpage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a>';
	}else if($chkpage==1 && $count<$nextpage){
	}else if($chkpage>((int)(($count+9)/10))*10-$perpage){
		echo '<a href="user_press.php?chkpage='.$prepage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a>';
	}else{
		echo '<a href="user_press.php?chkpage='.$prepage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <a href="user_press.php?chkpage='.$nextpage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a>';
	}
	
	echo '</p></div>';
	///////////////////////////////////////////////
	echo"			
		<table class='table txtR'>
                <colgroup>
                <col width='22%'>
                <col width='54%'>
				<col width='24%'>
                </colgroup>
                <tbody>
                  <tr>
                    <th class='txtL' colspan='6'>Lists of all press</th>
                  </tr>
                  <tr class='borderblue'>
                    <td >No.</td>
                    <td class='em'>Menu</td>
                    <td>Edit</td>
                  </tr>" ;
			while($rs2=mysql_fetch_array($result2)) {
			$id_menu2=$rs2[id_press] ;
			$name_menu2=$rs2[topline] ;
			$public_press=$rs2[public_press] ;
			$oldedit=false;
			
			$sql5="select * from tb_press where id_press='$id_menu2'";
			$result5=mysql_db_query($dbname,$sql5);
			if ($rs5=mysql_fetch_array($result5)){
				$public_press=$rs5[public_press] ;
				$name_menu2=$rs5[topline] ;
				$oldedit=true;
			}
			
			$chkshow++; ///////////////// add for page
			if ($chkshow >= $chkpage2*10-9 && $chkshow <= ($chkpage2+($perpage/10-1))*10){ //////////add for page
			echo"	<tr>                  
					<td>$chkshow</td>
					<td class='em'>$name_menu2</td>
					<td><a href=\"user_press_edit_update.php?id_edit=$id_menu2\"> Edit</a></td></tr>" ;
			}
				$no++;
			}//////////add for page
				echo "</tbody>
              </table>" ;
				mysql_close();
				?>

    			<div class="spacer"></div>
				<div class="spacer"></div>
                <div class="spacer"><p>Show per page <select id="selectbox" name="" onChange="javascript:location.href = this.value;">
     <?php
	 echo '<option value="" selected>Select</option>';
    echo '<option value="user_press.php?chkpage='.$chkpage.'&perpage=10">10</option>';
    echo '<option value="user_press.php?chkpage='.$chkpage.'&perpage=20">20</option>';
    echo '<option value="user_press.php?chkpage='.$chkpage.'&perpage=30">30</option>';
	?>
</select></p></div><!--//////////add for page-->
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
    		</div>
            
           <!--##/Right Menu##--> 
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Create Press</h1>
                <hr>
                <div class="mlnk"><a href="user_press_add.php">Add new press</a></div>
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
</body>
</html>