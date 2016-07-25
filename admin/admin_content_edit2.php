<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?>         
            <!--##/Main Content##-->
            
             <div class="unit size-col-d-admin">
              <h1>Edit Article</h1>
    <?php
	include "../config/connect.php";
	
	$id_edit=$_POST[id_edit];

	$lang_article=$_POST[lang_article];
	$type_article=$_POST[type_article];
	
	$topic_article= mysql_real_escape_string($_POST['topicnews']);
	$topic_article_th= mysql_real_escape_string($_POST['topicnews_th']);
	$checkbx=$_POST[checkbx];
	
	$mainmenu=$_POST[mainmenu];
	$submenu=$_POST[submenu];
	
	$content_slider=$_POST[slider];
	

	$content_article= mysql_real_escape_string($_POST['content_article']);
	$content_article_th= mysql_real_escape_string($_POST['content_article_th']);
	$content_slider_th=$_POST[slider_th];
	
	$hidAction=$_POST[hidAction];
	$ndate=date('Y-m-d H:i:s');
	
	$totalmenu='';
	
	$xhide=$submenu;
	if($submenu==0){
		$xhide=$mainmenu;
	}
	
	
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
	///////////////////////////////////////////เก็บค่า
	
	if($hidAction == "Add"){               //เช็คค่า hidAction ที่ส่งมาถ้าเท่ากับ Add ให้โปรแกรทำงานต่อ

				$sql="UPDATE tb_article set menu_article='$xhide', topic_article='$topic_article', content_slider='$content_slider', content_article='$content_article', show_rmenu='$totalmenu', modify_article='$ndate' where id_article='$id_edit' ";
				$result=mysql_db_query($dbname,$sql) or die(mysql_error());
				
				$sql2="UPDATE tb_article_th set menu_article='$xhide', topic_article='$topic_article_th', content_slider='$content_slider_th', content_article='$content_article_th', show_rmenu='$totalmenu', modify_article='$ndate' where id_article='$id_edit' ";
				$result2=mysql_db_query($dbname,$sql2) or die(mysql_error());
				if ($result)  {
					echo"<h3>You have edited an Article successfully.</h3><br />";
					echo"<p><span class='txtnormal'>Click <a href='admin_content.php'>here</a> for back to Article main page.</span></p>";
				}else{
					echo"<p><span style='color:#F00'>You cannot edit an Article, Please kindly try again or contact your IT team.</span></p>";
					echo"<p><span class='txtnormal'>Click <a href='admin_content.php'>here</a> for back to Article main page.</span></p>";
				}
			mysql_close();
	}
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
                <div class="mlnk"><a href="admin_content_add.php">Add new article</a></div>
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