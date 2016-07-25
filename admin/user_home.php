<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name_user.php"; ?>
      <!--##/nosearch##-->
      <div class="unit size-col-d">
        <div class="topline">Welcome to Bayer Thailand CMS</div>
      </div>
        <div class="spacer"></div>
        <div class="spacer"></div>
            <div class="line">
           <div class="unit size1of2">
           <h2>Most viewed article</h2>
             <?php
		 include "../config/connect.php";
	
		$sql="select * from tb_article order by view_count DESC LIMIT 0 , 10";
		$result=mysql_db_query($dbname,$sql);
		$result2=mysql_db_query($dbname,$sql);
		$number=mysql_num_rows($result);
		$no=1;
	//if($number<>0) {
	echo"			
		<table class='table txtR'>
                <colgroup>
                <col width='10%'>
                <col width='65%'>
                <col width='25%'>
                </colgroup>
                <tbody>
                  <tr>
                    <th class='txtL' colspan='3'>Ranking 1-10</th>
                  </tr>
                  <tr class='borderblue'>
                    <td >No.</td>
                    <td class='em'><center>Article Topic</center></td>
                    <td><center>Total view</center></td>
                  </tr>" ;
			while($rs2=mysql_fetch_array($result2)) {
			$name_menu=$rs2[topic_article] ;
			$view_count=$rs2[view_count] ;
			echo"	<tr>                  
					<td>$no</td>
					<td class='em'><div style='text-align:left'>$name_menu</div></td>
					<td><div style='text-align:left'>$view_count</div></td>
					</tr>" ;
				$no++;
			}
				echo "</tbody>
              </table>" ;
				mysql_close();
				?>
           </div>
           <div class="unit size1of2 lastUnit">
           <h2>Most viewed press </h2>
              <?php
		 		include "../config/connect.php";
	
				$sql3="select * from tb_press order by view_count DESC LIMIT 0 , 10";
				$result3=mysql_db_query($dbname,$sql3);
				$result4=mysql_db_query($dbname,$sql3);
				$number2=mysql_num_rows($result3);
				$no=1;
	//if($number<>0) {
				echo"			
				<table class='table txtR'>
                <colgroup>
                <col width='10%'>
                <col width='65%'>
                <col width='25%'>
                </colgroup>
                <tbody>
                  <tr>
                    <th class='txtL' colspan='3'>Ranking 1-10</th>
                  </tr>
                  <tr class='borderblue'>
                    <td >No.</td>
                    <td class='em'><center>Press Topic</center></td>
                    <td><center>Total view</center></td>
                  </tr>" ;
					while($rs4=mysql_fetch_array($result4)) {
					$name_menu2=$rs4[topline] ;
					$view_count2=$rs4[view_count] ;
				echo"	<tr>                  
					<td>$no</td>
					<td class='em'><div style='text-align:left'>$name_menu2</div></td>
					<td><div style='text-align:left'>$view_count2</div></td>
					</tr>" ;
				$no++;
					}
				echo "<tr class='nohover'>
                    <td colspan='3' class='legend'><p>Start keep recorded on July 2014.</p>
                    </td>
                  </tr>
				</tbody>
              </table>" ;
				mysql_close();
				?>
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