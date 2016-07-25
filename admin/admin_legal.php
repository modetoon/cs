<?php include "checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<?php include"header_name.php"; ?>
      <!--##/nosearch##-->
      <div class="unit size-col-d-admin">
              <h1>Legal Navigation</h1>
	<?php
	include "../config/connect.php";
	///////////////// Pagination //////////////////////
	echo '<div class="navLinks"><p>';
	$chkpage=$_GET[chkpage];
	$sql="SELECT * FROM tb_legal ORDER BY id_legal ASC";
	$result=mysql_db_query($dbname,$sql);
	$count=0;
	while($cs=mysql_fetch_array($result)) {
		$show_type=$cs[show_type];
		$count++;
	}
	if ($chkpage=='')$chkpage=1;
	$nextpage=$chkpage+10;
	$prepage=$chkpage-10;
	$chkpage2=(int)($chkpage/10+0.9);
	if ($count>=11 && $count<=40){
	echo '<img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage=1">';
		if ($chkpage<=10){
			echo '<b> 1 - 10 </b>';
		}else{
			echo ' 1 - 10 ';
		}
	if($count<=20){
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage=11">';
		if($count==11){
			if ($chkpage==11){
				echo '<b> 11 </b>';
			}else{
				echo ' 11 ';
			}
		}else{
			if ($chkpage>=11){
				echo '<b> 11 - '.$count.' </b>';
			}else{
				echo ' 11 - '.$count.' ';
			}
		}
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""></div>';
	}else if($count<=30){
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage=11">';
		if ($chkpage>=11 && $chkpage<=20){
			echo '<b> 11 - 20 </b>';
		}else{
			echo ' 11 - 20 ';
		}
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage=21">';
		if($count==21){
			if ($chkpage==21){
				echo '<b> 21 </b>';
			}else{
				echo ' 21 ';
			}
		}else{
			if ($chkpage>=21){
				echo '<b> 21 - '.$count.' </b>';
			}else{
				echo ' 21 - '.$count.' ';
			}
		}
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""></div>';
	}else{
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage=21">';
		if ($chkpage>=21 && $chkpage<=30){
			echo '<b> 21 - 30 </b>';
		}else{
			echo ' 21 - 30 ';
		}
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage=31">';
		if($count==31){
			if ($chkpage==31){
				echo '<b> 31 </b>';
			}else{
				echo ' 31 ';
			}
		}else{
			if ($chkpage>=31){
				echo '<b> 31 - '.$count.' </b>';
			}else{
				echo ' 31 - '.$count.' ';
			}
		}
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt="">';
	}
	}else if($count>=41){
		if ($chkpage<=10){
			echo '<img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_legal.php?chkpage=1"><b> 1 - 10 </b></a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage=11"> 11 - 20 </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage=21"> 21 - 30 </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage=31"> 31 - 40 </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_legal.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a> <a href="admin_legal.php?chkpage='.$count.'"><img class="viewnavicon" src="../img/nav-last.gif" border=0 alt=""></a>';
		}else{
			
		if($count-$chkpage<=9){
			$min1= (((int)(($chkpage-1)/10)-3)*10)+1;
			$max1= $min1+9;
			$min2= (((int)(($chkpage-1)/10-2))*10)+1;
			$max2= $min2+9;
			$min3= (((int)(($chkpage-1)/10)-1)*10)+1;
			$max3= $min3+9;
			$min4= (((int)(($chkpage-1)/10))*10)+1;
			$max4= $min4+9;
			echo '<a href="admin_legal.php?chkpage=1"><img class="viewnavicon" src="../img/nav-first.gif" border=0 alt=""></a> <a href="admin_legal.php?chkpage='.$prepage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_legal.php?chkpage='.$min1.'"> '.$min1.' - '.$max1.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min2.'"> '.$min2.' - '.$max2.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min3.'"> '.$min3.' - '.$max3.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min4.'"><b> ';
			if ($count%10!=1){
				echo $min4.' - ';
			}
			echo $count.' </b></a> <img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt="">';
		}else if($count-$chkpage<=19){
			$min1= (((int)(($chkpage-1)/10)-2)*10)+1;
			$max1= $min1+9;
			$min2= (((int)(($chkpage-1)/10-1))*10)+1;
			$max2= $min2+9;
			$min3= (((int)(($chkpage-1)/10))*10)+1;
			$max3= $min3+9;
			$min4= (((int)(($chkpage-1)/10)+1)*10)+1;
			$max4= $min4+9;
			echo '<a href="admin_legal.php?chkpage=1"><img class="viewnavicon" src="../img/nav-first.gif" border=0 alt=""></a> <a href="admin_legal.php?chkpage='.$prepage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min1.'"> '.$min1.' - '.$max1.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min2.'"> '.$min2.' - '.$max2.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min3.'"><b> '.$min3.' - '.$max3.' </b></a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min4.'"> ';
			if ($count%10!=1){
				echo $min4.' - ';
			}
			echo $count.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_legal.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a> <a href="admin_legal.php?chkpage='.$count.'"><img class="viewnavicon" src="../img/nav-last.gif" border=0 alt=""></a>';
		}else if($count-$chkpage<=29){
			$min1= (((int)(($chkpage-1)/10)-1)*10)+1;
			$max1= $min1+9;
			$min2= (((int)(($chkpage-1)/10))*10)+1;
			$max2= $min2+9;
			$min3= (((int)(($chkpage-1)/10)+1)*10)+1;
			$max3= $min3+9;
			$min4= (((int)(($chkpage-1)/10)+2)*10)+1;
			$max4= $min4+9;
			echo '<a href="admin_legal.php?chkpage=1"><img class="viewnavicon" src="../img/nav-first.gif" border=0 alt=""></a> <a href="admin_legal.php?chkpage='.$prepage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min1.'"> '.$min1.' - '.$max1.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min2.'"><b> '.$min2.' - '.$max2.' </b></a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min3.'"> '.$min3.' - '.$max3.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min4.'"> ';
			if ($count%10!=1){
				echo $min4.' - ';
			}
			echo $count.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_legal.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a> <a href="admin_legal.php?chkpage='.$count.'"><img class="viewnavicon" src="../img/nav-last.gif" border=0 alt=""></a>';
		}else{
			$chkodd=((int)(($chkpage-1)/10))%2;
			if ($chkodd==1){
				$min1= (((int)(($chkpage-1)/10)-1)*10)+1;
				$max1= $min1+9;
				$min2= (((int)(($chkpage-1)/10))*10)+1;
				$max2= $min2+9;
				$min3= (((int)(($chkpage-1)/10)+1)*10)+1;
				$max3= $min3+9;
				$min4= (((int)(($chkpage-1)/10)+2)*10)+1;
				$max4= $min4+9;
				echo '<a href="admin_legal.php?chkpage=1"><img class="viewnavicon" src="../img/nav-first.gif" border=0 alt=""></a> <a href="admin_legal.php?chkpage='.$prepage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min1.'"> '.$min1.' - '.$max1.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min2.'"><b> '.$min2.' - '.$max2.' </b></a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min3.'"> '.$min3.' - '.$max3.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min4.'"> '.$min4.' - '.$max4.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_legal.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a> <a href="admin_legal.php?chkpage='.$count.'"><img class="viewnavicon" src="../img/nav-last.gif" border=0 alt=""></a>';
			}else{
				$min1= (((int)(($chkpage-1)/10)-2)*10)+1;
				$max1= $min1+9;
				$min2= (((int)(($chkpage-1)/10)-1)*10)+1;
				$max2= $min2+9;
				$min3= (((int)(($chkpage-1)/10))*10)+1;
				$max3= $min3+9;
				$min4= (((int)(($chkpage-1)/10)+1)*10)+1;
				$max4= $min4+9;
				echo '<a href="admin_legal.php?chkpage=1"><img class="viewnavicon" src="../img/nav-first.gif" border=0 alt=""></a> <a href="admin_legal.php?chkpage='.$prepage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min1.'"> '.$min1.' - '.$max1.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min2.'"> '.$min2.' - '.$max2.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min3.'"><b> '.$min3.' - '.$max3.' </b></a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_legal.php?chkpage='.$min4.'"> '.$min4.' - '.$max4.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_legal.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a> <a href="admin_legal.php?chkpage='.$count.'"><img class="viewnavicon" src="../img/nav-last.gif" border=0 alt=""></a>';
			}
		}
		}
	}
	echo '</p></div>';
	///////////////////////////////////////////////
	$sql2="SELECT * FROM tb_legal ORDER BY id_legal ASC";
	$result2=mysql_db_query($dbname,$sql2);
	$number=mysql_num_rows($result2);
	$no=1;
	if($number<>0) {
	echo"			
		<table class='table txtR'>
                <colgroup>
                <col width='10%'>
                <col width='60%'>
                <col width='15%'>
                <col width='15%'>
                </colgroup>
                <tbody>
                  <tr>
                    <th class='txtL' colspan='4'><h3>List of Legal menu</h3></th>
                  </tr>
                  <tr class='borderblue'>
                    <td>No.</td>
                    <td class='em'>Menu name</td>
                    <td>Edit</td>
					<td>Remove</td>
                  </tr>" ;
			while($rs2=mysql_fetch_array($result2)) {
			$id_legal=$rs2[id_legal] ;
			$name_menu=$rs2[name_menu] ;
			$chkshow++;
			if ($chkshow >= $chkpage2*10-9 && $chkshow <= $chkpage2*10){ 
			echo"
					<tr>                  
					<td>$chkshow</td>
					<td class='em'>$name_menu</td>
					";
			echo	"<td><a href=\"admin_legal_edit.php?id_edit=$id_legal\"> Edit</a></td>
					<td><a href=\"admin_legal_delete.php?id_del=$id_legal\" onclick=\" return confirm ('Click OK if you want to delete $name_menu from you data. ')\"  > Remove</a>
					
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
                <h1 class="h5">Add Legal Menu</h1>
                <hr>
                <div class="mlnk"><a href="admin_legal_add.php">Add new Legal Menu</a></div>
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
