<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name_user.php"; ?>         
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Article</h1>
    <?php
	include "../config/connect.php";

	$lang_article=$_POST[lang_article];
	$type_article=$_POST[type_article];
	
	$topicnews= mysql_real_escape_string($_POST['topicnews']);
	$topicnews_th= mysql_real_escape_string($_POST['topicnews_th']);
	$checkbx=$_POST[checkbx];
	$content_slider=$_POST[slider];
	$content_slider_th=$_POST[slider_th];
	
	$mainmenu=$_POST[mainmenu];
	$submenu=$_POST[submenu];
	
	$xhide=$submenu;
	if($submenu==0){
		$xhide=$mainmenu;
	}
	
	$content_article= mysql_real_escape_string($_POST['content_article']);
	$content_article_th= mysql_real_escape_string($_POST['content_article_th']);
	$hidAction=$_POST[hidAction];
	$ndate=date('Y-m-d H:i:s');
	//if ($xhide=='' or $xhide==undefined)$xhide=0;
	$sqlchk="select * from tb_article WHERE menu_article =$xhide;";
	$objQuery = mysql_query($sqlchk) or die ("Error Query [".$sqlchk."]");
	$objResult = mysql_fetch_array($objQuery);
	if ($objResult && $xhide!=0)  {
		echo'<p><span style="color:#F00">Cannot add this Article to this navigation because it have duplicated with the old one.</span></p><br />
		<p><span class="txtnormal">Please <a href="user_content_add.php">back</a> to previous page and select Navigation again.</span></p>';
	}else{
	///////////////////////////////เช็ค option กับเมนูขวาว่าเลือกตรงกันไหม
	//$totalposition='';
	$totalmenu='';
	//////////////////////////// เช็คค่าซ้ำ

	///////////////////////////////////////////เก็บค่า
	if($checkbx!=''){
		$num=0;
		while($num<count($checkbx)) {
			if ($checkbx[$num]!=''){
			$totalmenu=$totalmenu.$checkbx[$num].',';
			//$totalposition=$totalposition.'1,';
			}
			$num++;
		}
	}

	if($hidAction == "Add"){               //เช็คค่า hidAction ที่ส่งมาถ้าเท่ากับ Add ให้โปรแกรทำงานต่อ

	////////////////////////////// เช็คว่าเมนูซ้ำไหม
	
				
				$sql="INSERT INTO `tb_article_backup` (`id_article` ,`lang_article` ,`menu_article` ,`type_article` ,`topic_article` , `content_slider` , `content_article` ,`show_rmenu` ,`create_article` ,`modify_article`)VALUES ('', '$lang_article', '$xhide', '$type_article', '$topicnews', '$content_slider', '$content_article', '$totalmenu', '$ndate', '$ndate');";
				$result=mysql_db_query($dbname,$sql) or die(mysql_error());
				
				$sql2="INSERT INTO `tb_article_th_backup` (`id_article` ,`lang_article` ,`menu_article` ,`type_article` ,`topic_article` , `content_slider` , `content_article` ,`show_rmenu` ,`create_article` ,`modify_article`)VALUES ('', '$lang_article', '$xhide', '$type_article', '$topicnews_th', '$content_slider_th', '$content_article_th', '$totalmenu', '$ndate', '$ndate');";
				$result2=mysql_db_query($dbname,$sql2) or die(mysql_error());
				
				if ($result)  {
					echo"<h3>You have added new Article successfully.</h3><br />";
					echo"<p><span class='txtnormal'>Click <a href='user_content.php'>here</a> for back to Article main page.</span></p>";
				}else{
					echo"<p><span style='color:#F00'>You cannot add a new Article, Please kindly try again or contact your IT team.</span></p><br />";
					echo"<p><span class='txtnormal'>Click <a href='user_content.php'>here</a> for back to Article main page.</span></p>";
				}
		}else{
			echo'<p>Right Menu and check box are not match.</p>';
		}
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
                <div class="spacer"></div>
                <div class="spacer"></div>
    		</div>
            
           <!--##/Right Menu##--> 
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Create Article</h1>
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