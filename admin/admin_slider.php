<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
</head>
<?php include"header_name.php"; ?>
        <section>         
            <!--##/nosearch##--> 
            
            <div class="unit size-col-d-admin">
              <h1>Slider</h1>
              <div class="form-horizontal">
              <?php
              include "../config/connect.php";
			  ///////////////// Pagination //////////////////////
	echo '<div class="navLinks"><p>';
	$chkpage=$_GET[chkpage];
	$perpage=$_GET[perpage];
	$refsh=$_GET[refsh];
	if ($chkpage=='' or $chkpage<0)$chkpage=1;
	if ($perpage=='')$perpage=10;
	if ($refsh==1)echo '<meta HTTP-EQUIV="REFRESH" content="0; url=admin_slider.php?chkpage='.$chkpage.'&perpage='.$perpage.'">';
	
	$sql="select * from tb_slider_cate order by id_slider ASC";
	$result=mysql_db_query($dbname,$sql);
	$count=0;
	while($cs=mysql_fetch_array($result)) {
		$count++;
	}
	$nextpage=$chkpage+$perpage;
	$prepage=$chkpage-$perpage;
	$chkpage2=(int)($chkpage/10+0.9);
	if ($chkpage==1 && $count>$nextpage){
		echo '<a href="admin_slider.php?chkpage='.$nextpage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a>';
	}else if($chkpage==1 && $count<$nextpage){
	}else if($chkpage>((int)(($count+9)/10))*10-$perpage){
		echo '<a href="admin_slider.php?chkpage='.$prepage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a>';
	}else{
		echo '<a href="admin_slider.php?chkpage='.$prepage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <a href="admin_slider.php?chkpage='.$nextpage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a>';
	}
	echo '</p></div>';
	///////////////////////////////////////////////
              $sql="select * from tb_slider_cate order by id_slider ASC";
              $result=mysql_db_query($dbname,$sql);
              $number=mysql_num_rows($result);
              $no=1;
              if($number<>0) {
              echo"	
              <table class='table txtR'>
                <colgroup>
                <col width='5%'>
                <col width='30%'>
                <col width='8%'>
                <col width='10%'>
                <col width='10%'>
				<col width='17%'>
                <col width='10%'>
				<col width='10%'>
                </colgroup>
                <tbody>
                  <tr>
                    <th class='txtL' colspan='8'>Lists of all slider</th>
                  </tr>
                  <tr class='borderblue'>
                    <td>No.</td>
                    <td class='em'>Slider Name</td>
					<td>Language</td>
                    <td>Slider Quantity</td>
					<td >Edit</td>
					<td >Add image</td>
					<td >Edit image</td>
					<td >Remove</td>
                  </tr>";
              while($rs=mysql_fetch_array($result)) {
              $id_slider=$rs[id_slider] ;
              $name_slider=$rs[slider_name] ;
			  $chkshow++;
              $slider_language=$rs[slider_language] ;
              $slider_quantity=$rs[slider_quantity] ;
			  $checkimg=0;
			
              if($slider_language==1){
				$slider_language="English";
              }
              elseif($slider_language==2){
				$slider_language="Thai";
              }	
			if ($chkshow >= $chkpage2*10-9 && $chkshow <= ($chkpage2+($perpage/10-1))*10){ //////////add for page
              echo"
					<tr> 
					<td>$chkshow</td>
					<td class='em'>$name_slider</td>
					<td>$slider_language</td>
					<td>$slider_quantity</td>
					<td><a href=\"admin_slider_edit.php?id_edit=$id_slider\">Edit</a></td>
					<td>";
					
					$sql8="select * from tb_slider_show where id_slider_cate=$id_slider";
              		$result8=mysql_db_query($dbname,$sql8);
              		//$number=mysql_num_rows($result8);
					while($rs8=mysql_fetch_array($result8)) {
						$checkimg++;
					}
					if ($checkimg<$slider_quantity){
						echo "<a href=\"admin_slider_each.php?id_slide=$id_slider\"> Add image to slider</a>";
					}else{
						echo "Add all image already";
					}
					echo "</td>
					<td><a href=\"admin_slider_each_edit.php?id_edit_each=$id_slider\"> Edit image</a></td>
					<td><a href=\"admin_slider_delete.php?id_del=$id_slider\"   onclick=\" return confirm ('Click OK if you want to delete $name_menu from you data. ')\"  > Remove</a></td>
					</tr>" ;
			  }
					$no++;
					}
				echo"</table>";
				mysql_close();
              }
              ?>
					</div>
			<div class="spacer"></div>
            <div class="spacer"><p>Show per page <select id="selectbox" name="" onchange="javascript:location.href = this.value;">
     <?php
	 echo '<option value="" selected>Select</option>';
    echo '<option value="admin_slider.php?chkpage='.$chkpage.'&perpage=10">10</option>';
    echo '<option value="admin_slider.php?chkpage='.$chkpage.'&perpage=20">20</option>';
    echo '<option value="admin_slider.php?chkpage='.$chkpage.'&perpage=30">30</option>';
	?>
</select></p></div><!--//////////add for page-->

</div>
			<!--##/Right Menu##--> 
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Create Slider</h1>
                <hr>
                <div class="mlnk"><a href="admin_slider_add.php">Add new slider</a></div>
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