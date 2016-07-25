<?php 	include"checksession.php"; ?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
</head>
<?php include"header_name.php"; ?>
      <!--##/nosearch##-->
            <div class="unit size-col-d-admin">
              <h1>User Manager</h1>
              <div class="spacer"></div>
       <?php
	include "../config/connect.php";
	///////////////// Pagination //////////////////////
	echo '<div class="navLinks"><p>';
	$chkpage=$_GET[chkpage];
	$sql="select * from tb_admin order by id_admin asc";
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
	echo '<img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage=1">';
		if ($chkpage<=10){
			echo '<b> 1 - 10 </b>';
		}else{
			echo ' 1 - 10 ';
		}
	if($count<=20){
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage=11">';
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
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage=11">';
		if ($chkpage>=11 && $chkpage<=20){
			echo '<b> 11 - 20 </b>';
		}else{
			echo ' 11 - 20 ';
		}
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage=21">';
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
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage=21">';
		if ($chkpage>=21 && $chkpage<=30){
			echo '<b> 21 - 30 </b>';
		}else{
			echo ' 21 - 30 ';
		}
		echo '</a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage=31">';
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
			echo '<img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_show_user.php?chkpage=1"><b> 1 - 10 </b></a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage=11"> 11 - 20 </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage=21"> 21 - 30 </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage=31"> 31 - 40 </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_show_user.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a> <a href="admin_show_user.php?chkpage='.$count.'"><img class="viewnavicon" src="../img/nav-last.gif" border=0 alt=""></a>';
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
			echo '<a href="admin_show_user.php?chkpage=1"><img class="viewnavicon" src="../img/nav-first.gif" border=0 alt=""></a> <a href="admin_show_user.php?chkpage='.$prepage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_show_user.php?chkpage='.$min1.'"> '.$min1.' - '.$max1.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min2.'"> '.$min2.' - '.$max2.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min3.'"> '.$min3.' - '.$max3.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min4.'"><b>';
			if ($count%10!=1){
				echo $min4.' - ';
			}
			echo $count.'</b></a> <img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt="">';
		}else if($count-$chkpage<=19){
			$min1= (((int)(($chkpage-1)/10)-2)*10)+1;
			$max1= $min1+9;
			$min2= (((int)(($chkpage-1)/10-1))*10)+1;
			$max2= $min2+9;
			$min3= (((int)(($chkpage-1)/10))*10)+1;
			$max3= $min3+9;
			$min4= (((int)(($chkpage-1)/10)+1)*10)+1;
			$max4= $min4+9;
			echo '<a href="admin_show_user.php?chkpage=1"><img class="viewnavicon" src="../img/nav-first.gif" border=0 alt=""></a> <a href="admin_show_user.php?chkpage='.$prepage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min1.'"> '.$min1.' - '.$max1.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min2.'"> '.$min2.' - '.$max2.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min3.'"><b> '.$min3.' - '.$max3.' </b></a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min4.'"> ';
			if ($count%10!=1){
				echo $min4.' - ';
			}
			echo $count.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_show_user.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a> <a href="admin_show_user.php?chkpage='.$count.'"><img class="viewnavicon" src="../img/nav-last.gif" border=0 alt=""></a>';
		}else if($count-$chkpage<=29){
			$min1= (((int)(($chkpage-1)/10)-1)*10)+1;
			$max1= $min1+9;
			$min2= (((int)(($chkpage-1)/10))*10)+1;
			$max2= $min2+9;
			$min3= (((int)(($chkpage-1)/10)+1)*10)+1;
			$max3= $min3+9;
			$min4= (((int)(($chkpage-1)/10)+2)*10)+1;
			$max4= $min4+9;
			echo '<a href="admin_show_user.php?chkpage=1"><img class="viewnavicon" src="../img/nav-first.gif" border=0 alt=""></a> <a href="admin_show_user.php?chkpage='.$prepage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min1.'"> '.$min1.' - '.$max1.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min2.'"><b> '.$min2.' - '.$max2.' </b></a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min3.'"> '.$min3.' - '.$max3.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min4.'"> ';
			if ($count%10!=1){
				echo $min4.' - ';
			}
			echo $count.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_show_user.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a> <a href="admin_show_user.php?chkpage='.$count.'"><img class="viewnavicon" src="../img/nav-last.gif" border=0 alt=""></a>';
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
				echo '<a href="admin_show_user.php?chkpage=1"><img class="viewnavicon" src="../img/nav-first.gif" border=0 alt=""></a> <a href="admin_show_user.php?chkpage='.$prepage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min1.'"> '.$min1.' - '.$max1.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min2.'"><b> '.$min2.' - '.$max2.' </b></a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min3.'"> '.$min3.' - '.$max3.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min4.'"> '.$min4.' - '.$max4.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_show_user.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a> <a href="admin_show_user.php?chkpage='.$count.'"><img class="viewnavicon" src="../img/nav-last.gif" border=0 alt=""></a>';
			}else{
				$min1= (((int)(($chkpage-1)/10)-2)*10)+1;
				$max1= $min1+9;
				$min2= (((int)(($chkpage-1)/10)-1)*10)+1;
				$max2= $min2+9;
				$min3= (((int)(($chkpage-1)/10))*10)+1;
				$max3= $min3+9;
				$min4= (((int)(($chkpage-1)/10)+1)*10)+1;
				$max4= $min4+9;
				echo '<a href="admin_show_user.php?chkpage=1"><img class="viewnavicon" src="../img/nav-first.gif" border=0 alt=""></a> <a href="admin_show_user.php?chkpage='.$prepage.'"><img class="viewnavicon" src="../img/nav-previous.gif" border=0 alt=""></a> <img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min1.'"> '.$min1.' - '.$max1.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min2.'"> '.$min2.' - '.$max2.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min3.'"><b> '.$min3.' - '.$max3.' </b></a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""><a href="admin_show_user.php?chkpage='.$min4.'"> '.$min4.' - '.$max4.' </a><img class="viewnavdelimiter" src="../img/nav-delimiter.gif" border=0 alt=""> <a href="admin_show_user.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="../img/nav-next.gif" border=0 alt=""></a> <a href="admin_show_user.php?chkpage='.$count.'"><img class="viewnavicon" src="../img/nav-last.gif" border=0 alt=""></a>';
			}
		}
		}
	}
	echo '</p></div>';
	///////////////////////////////////////////////
	$sql2="select * from tb_admin order by id_admin asc";
	$result2=mysql_db_query($dbname,$sql2);
	$number=mysql_num_rows($result2);
	$no=1;
	if($number<>0) {
	echo"		
	<table class='table txtR'>
                <colgroup>
                <col width='15%'>
                <col width='20%'>
                <col width='15%'>
                <col width='15%'>
                <col width='15%'>
                <col width='10%'>
				<col width='10%'>
                </colgroup>
                <tbody>
                  <tr>
                    <th class='txtL' colspan='7'>Lists of authorised users</th>
                  </tr>
                  <tr class='borderblue'>
                    <td class='em'>Username</td>
                    <td >Name</td>
                    <td>Email</td>
                    <td>Group</td>
                    <td>Registration Date</td>
                    <td>Edit</td>
					<td>Delete</td>
                  </tr>" ;
			while($rs=mysql_fetch_array($result2)) {
			$id_admin=$rs[id_admin] ;
			$title_admin=$rs[title_admin] ;
			$username_admin=$rs[username_admin] ;
			$password_admin=$rs[password_admin] ;
			$name_admin=$rs[name_admin] ;
			$email_admin=$rs[email_admin] ;
			$roles_admin=$rs[roles_admin] ;
			$create_admin=$rs[create_admin] ;
			$modify_admin=$rs[modify_admin] ;
			$chkshow++;
			if ($chkshow >= $chkpage2*10-9 && $chkshow <= $chkpage2*10){ 
			echo"
					<tr>                  
					<td class='em'>$username_admin</td>
					<td>$name_admin</td>
					<td>$email_admin</td>
					<td>$roles_admin</td>					
					<td>$create_admin</td>
					<td><a href=\"admin_regis_edit.php?id_edit=$id_admin\"> Edit</a></td>
					<td><a href=\"admin_regis_delete.php?id_del=$id_admin\"   onclick=\" return confirm ('Click OK if you want to delete $name_admin from you data. ')\"  > Delete</a></td>
				</tr>";
			}
				$no++;
				}echo "</tbody>
              </table>" ;
				mysql_close();
				}				
				?>
                
    			<div class="spacer"></div>
				<div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
                <div class="spacer"></div>
 	 </div>
    
			<aside class="unit size-col-a margi">
              <div class="margiblock">
                <h1 class="h5">Create User</h1>
                <hr>
                <div class="mlnk"><a href="admin_regis_form.php">Create new user</a></div>
              </div>
              
            </aside>
            
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