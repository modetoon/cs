<?php include"checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<head>
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
  xmlhttp.open("GET","updatenavi.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<?php include"header_name.php"; ?>           
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Main Navigation</h1>
	<?php
	include "../config/connect.php";
	///////////////// Pagination //////////////////////
	echo '<div class="navLinks"><p>';
	$chkpage=$_GET[chkpage];
	$perpage=$_GET[perpage];
	$refsh=$_GET[refsh];
	if ($chkpage=='' or $chkpage<0)$chkpage=1;
	if ($perpage=='')$perpage=10;
	if ($refsh==1)echo '<meta HTTP-EQUIV="REFRESH" content="0; url=admin_navi.php?chkpage='.$chkpage.'&perpage='.$perpage.'">';
	
	$sql="SELECT * FROM tb_menu ORDER BY name_menu ASC";
	$result=mysql_db_query($dbname,$sql);
	$count=0;
	while($cs=mysql_fetch_array($result)) {
		$count++;
	}
	$nextpage=$chkpage+$perpage;
	$prepage=$chkpage-$perpage;
	$chkpage2=(int)($chkpage/10+0.9);
	if ($chkpage==1 && $count>$nextpage){
		echo '<a href="admin_navi.php?chkpage='.$nextpage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a>';
	}else if($chkpage==1 && $count<$nextpage){
	}else if($chkpage>((int)(($count+9)/10))*10-$perpage){
		echo '<a href="admin_navi.php?chkpage='.$prepage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a>';
	}else{
		echo '<a href="admin_navi.php?chkpage='.$prepage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <a href="admin_navi.php?chkpage='.$nextpage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a>';
	}
	echo '</p></div>';
	///////////////////////////////////////////////
	
	$sql2="SELECT * FROM tb_menu ORDER BY name_menu ASC";
	$result2=mysql_db_query($dbname,$sql2);
	$number=mysql_num_rows($result2);
	$no=1;
	if($number<>0) {
	echo"	
		<table class='table txtR'>
                <colgroup>
                <col width='5%'>
                <col width='45%'>
                <col width='20%'>
                <col width='5%'>
                <col width='15%'>
				<col width='10%'>
                </colgroup>
                <tbody>
                  <tr>
                    <th class='txtL' colspan='6'>List of Main Navigation name</th>
                  </tr>
                  <tr class='borderblue'>
                    <td>No.</td>
                    <td class='em'><center>Navigation name</center></td>
					<td><center>Main Navigation name</center></td>
                    <td>Edit</td>
					<td>Publish</td>
					<td>Remove</td>
                  </tr>" ;
			while($rs2=mysql_fetch_array($result2)) {
			$id_menu=$rs2[id_menu] ;
			$name_menu=$rs2[name_menu] ;
			$sub_of=$rs2[sub_of] ;
			$level=$rs2[level] ;
			$public_menu=$rs2[public_menu] ;
			$chkshow++;
			if ($chkshow >= $chkpage2*10-9 && $chkshow <= ($chkpage2+($perpage/10-1))*10){ //////////add for page
			echo"
					<tr>                  
					<td>$chkshow</td>
					<td class='em'><div style='text-align:left'>$name_menu</div></td>
					";
			if ($level==1){		
				echo"<td></td>";
			}else{
				while ($level>1){
					$sql4="SELECT * FROM `tb_menu` WHERE id_menu='$sub_of'";
					$result4=mysql_db_query($dbname,$sql4);
					$rs4=mysql_fetch_array($result4);

					$sub_of=$rs4[sub_of];
					$m_name_menu=$rs4[name_menu];
					$level=$rs4[level];
				}
				echo"<td><div style='text-align:left'>$m_name_menu</div></td>";
			}
			echo	"<td><a href=\"admin_navi_edit.php?id_edit=$id_menu\"> Edit</a></td>";
			if ($public_menu==0){
				echo	"<td> Publish <input name=\"\" type=\"checkbox\" value=\"$id_menu\" onChange=\"showUser(this.value)\"></td>";
			}else{
				echo	"<td> Published <input name=\"\" type=\"checkbox\" value=\"$id_menu\" onChange=\"showUser(this.value)\" checked></td>";
			}
			echo	"<td><a href=\"admin_navi_delete.php?id_del=$id_menu\"   onclick=\" return confirm ('Click OK if you want to delete $name_menu from you data. ')\"  > Remove</a>
					
					</tr>" ;
			}
				$no++;
			}
				echo "</tbody>
              </table>" ;
				mysql_close();
			}
				?>
 			<div class="spacer"></div>
            <div class="spacer"><p>Show per page <select id="selectbox" name="" onChange="javascript:location.href = this.value;">
     <?php
	 echo '<option value="" selected>Select</option>';
    echo '<option value="admin_navi.php?chkpage='.$chkpage.'&perpage=10">10</option>';
    echo '<option value="admin_navi.php?chkpage='.$chkpage.'&perpage=20">20</option>';
    echo '<option value="admin_navi.php?chkpage='.$chkpage.'&perpage=30">30</option>';
	?>
</select></p></div><!--//////////add for page-->
            <div class="spacer"></div>
            <div class="spacer"></div>
            <div class="spacer"></div>
            <div class="spacer"></div>

</div>
			<!--##/Right Menu##--> 
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Add Navigation</h1>
                <hr>
                <div class="mlnk"><a href="admin_navi_add.php">Add new navigation</a></div>
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