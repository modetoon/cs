<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?>
      <!--##/nosearch##-->
      <div class="unit size-col-d-admin">
              <h1>Job & Career</h1>

   
    <?php
    $id_del=$_GET[id_del];
    include "../config/connect.php";
	$sql2="DELETE from tb_job where id_job='$id_del'";
	$result2=mysql_db_query($dbname,$sql2);
	if ($result2) {
		echo"<h3>You have deleted a Job&Career successfully.</h3><br />";
		echo"<p><span class='txtnormal'>Click <a href='admin_job.php'>here</a> for back to Job&Career main page.</span></p>";
	} else {
		echo"<p><span style='color:#F00'>You cannot delete a Job&Career, Please kindly try again or contact your IT team.</span></p><br />";
		echo"<p><span class='txtnormal'>Click <a href='admin_job.php'>here</a> for back to Job&Career main page.</span></p>";
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

</div>
			<!--##/Right Menu##--> 
             <aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Create Job&amp;Career</h1>
                <hr>
                <div class="mlnk"><a href="admin_job.php">Add new Job&amp;Career</a></div>
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