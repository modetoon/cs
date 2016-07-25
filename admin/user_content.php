<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name_user.php"; ?>         
            <!--##/Main Content##-->
<?php
	$chkpage=$_GET[chkpage];
	$perpage=$_GET[perpage];
	$refsh=$_GET[refsh];
	if ($chkpage=='' or $chkpage<0)$chkpage=1;
	if ($perpage=='')$perpage=10;
	if ($refsh==1)echo '<meta HTTP-EQUIV="REFRESH" content="0; url=user_content.php?chkpage='.$chkpage.'&perpage='.$perpage.'">';
?>
              <div class="unit size-col-d-admin">
              <h1>Article</h1>
              <div class="spacer"></div>
	<?php
	include "../config/connect.php";
	$sql12="select * from tb_article_backup order by topic_article ASC";
	$result12=mysql_db_query($dbname,$sql12);
	$no=1;
	//$perpage=20;
	//if($number<>0) {
	
	///////////////// Pagination //////////////////////
	echo '<div class="navLinks"><p>';
	
	$sql="select * from tb_article_backup order by topic_article ASC";
	$result=mysql_db_query($dbname,$sql);
	$count=0;
	while($cs=mysql_fetch_array($result)) {
		$count++;
	}
	$nextpage=$chkpage+$perpage;
	$prepage=$chkpage-$perpage;
	$chkpage2=(int)($chkpage/10+0.9);
	if ($chkpage==1 && $count>$nextpage){
		echo '<a href="user_content.php?chkpage='.$nextpage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a>';
	}else if($chkpage==1 && $count<$nextpage){
	}else if($chkpage>((int)(($count+9)/10))*10-$perpage){
		echo '<a href="user_content.php?chkpage='.$prepage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a>';
	}else{
		echo '<a href="user_content.php?chkpage='.$prepage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <a href="user_content.php?chkpage='.$nextpage.'&perpage='.$perpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a>';
	}
	
	echo '</p></div>';
	///////////////////////////////////////////////
	echo"			
	<table class='table txtR'>
                <colgroup>
                <col width='5%'>
                <col width='40%'>
                <col width='40%'>				
                <col width='15%'>
                </colgroup>
                <tbody>
				<tr>
                    <th class='txtL' colspan='6'>Lists of all ARTICLE</th>
                </tr>
				<tr class='borderblue'>
                    <td>No.</td>
                    <td class='em'>Article Name</td>
					<td >Navigation Name</td>
					<td >Edit</td>
                  </tr>";
			while($rs12=mysql_fetch_array($result12)) {
			$chkshow++; ///////////////// add for page
			$id_article=$rs12[id_article] ;
			$topic_article=$rs12[topic_article] ;
			$menu_article=$rs12[menu_article] ;
			$oldedit=false;
			
			$sql5="select * from tb_article where id_article='$id_article'";
			$result5=mysql_db_query($dbname,$sql5);
			if ($rs5=mysql_fetch_array($result5)){
			$topic_article=$rs5[topic_article] ;
			$oldedit=true;
			}
			
			$sql4="SELECT * FROM `tb_menu` WHERE id_menu='$menu_article'";
			$result4=mysql_db_query($dbname,$sql4);
			$rs4=mysql_fetch_array($result4);

			$m_name_menu=$rs4[name_menu];
			if ($chkshow >= $chkpage2*10-9 && $chkshow <= ($chkpage2+($perpage/10-1))*10){ //////////add for page
			echo"
					<tr> 
					<td >$chkshow</td>
					<td class='em'>$topic_article</td>
					<td >$m_name_menu</td>
					<td><a href=\"user_content_edit_update.php?id_edit=$id_article\"> Edit</a></td></tr>" ;
			}
					$no++;
			}//////////add for page
				echo"</table>";
				mysql_close();
	?>			

    			<div class="spacer"></div>
				<div class="spacer"></div>
                <div class="spacer"><p>Show per page <select id="selectbox" name="" onchange="javascript:location.href = this.value;">
     <?php
	 echo '<option value="" selected>Select</option>';
    echo '<option value="user_content.php?chkpage='.$chkpage.'&perpage=10">10</option>';
    echo '<option value="user_content.php?chkpage='.$chkpage.'&perpage=20">20</option>';
    echo '<option value="user_content.php?chkpage='.$chkpage.'&perpage=30">30</option>';
	?>
</select></p></div><!--//////////add for page-->
                <div class="spacer"></div>
                <div class="spacer"></div>
    		</div>
            
           <!--##/Right Menu##--> 
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Add Article</h1>
                <hr>
                <div class="mlnk"><a href="user_content_add.php">Add new article</a></div>
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