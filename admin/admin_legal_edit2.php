<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?>
      <!--##/nosearch##-->
      <div class="unit size-col-d-admin">
              <h1>Add Navigation</h1>
    <?php
	include "../config/connect.php";
	//$name=$_POST[name];
	//$name_th=$_POST[name_th];
	$mainmenu=$_POST[mainmenu];
	$submenu=$_POST[submenu];
	$id_edit=$_POST[id_edit];
	
	$xhide=$submenu;
	if ($xhide=='')$xhide=$mainmenu;
	
	$no=0;
	$sql4="SELECT *  FROM `tb_legal` WHERE id_article='$xhide'";
	$result4=mysql_db_query($dbname,$sql4);
	while($rs4=mysql_fetch_array($result4)){
		$no++;
	}
	if(no==0){
	
	if ($xhide!=''){
	$sql="SELECT *  FROM `tb_menu` WHERE id_menu='$xhide'";
	$result=mysql_db_query($dbname,$sql);
	$rs=mysql_fetch_array($result);
	$name_menu=$rs[name_menu];
	
	$ndate=date('Y-m-d H:i:s');
	
	$sql21="UPDATE tb_legal set id_article='$xhide', name_menu='$name_menu', mod_date='$ndate' where id_legal='$id_edit' ";
	$result21=mysql_db_query($dbname,$sql21) or die(mysql_error());
	if ($result21){
		echo"<h3>You have edited new Legal Menu successfully.</h3><br />";
		echo"<p><span class='txtnormal'>Click <a href='admin_legal.php'>here</a> for back to Legal Navigation main page.</span></p>";
	}else{			
		echo"<p><span style='color:#F00'>You cannot edit a Legal Navigation, Please kindly try again or contact your IT team.</span></p><br />";
		echo"<p><span class='txtnormal'>Click <a href='admin_legal.php'>here</a> for back to Legal Navigation main page.</span></p>";
	}
	}else{			
		echo"<p><span style='color:#F00'>You cannot edit a Legal Navigation, Please kindly try again or contact your IT team.</span></p><br />";
		echo"<p><span class='txtnormal'>Click <a href='admin_legal.php'>here</a> for back to Legal Navigation main page.</span></p>";
	}
	}else{
		echo"<h3>This Menu has added to Legal Menu already</h3></br>";
		echo"<p><span class='txtnormal'>Click <a href='admin_legal.php'>here</a> for back to Legal Navigation main page.</span></p>";
	}
	mysql_close();
	?>

 	 <div class="spacer"></div>
     <div class="spacer"></div>
     <div class="spacer"></div>
     <div class="spacer"></div>
     <div class="spacer"></div>
     <div class="spacer"></div>
     <div class="spacer"></div>
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
                <h1 class="h5">Create Legal Navigation</h1>
                <hr>
                <div class="mlnk"><a href="admin_legal_add.php">Add new Legal Navigation</a></div>
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