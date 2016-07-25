<?php
	include "checksession.php";	
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
<script type="text/javascript">
function clickupload()
{
if ( document.getElementById('input-one2').value.length == 0 )
{
alert( 'Please input your Username' ) ;
return false ;
}
if ( document.getElementById('input-one2').value.length == 0 )
{
alert( 'Please input your Password' ) ;
return false ;
}
return true ;
}
</script>
</head>
<?php include"header_name.php"; ?>
        <section>         
            <!--##/nosearch##--> 
            
            <div class="unit size-col-d-admin">
              <h1>Right Menu</h1>
              <div class="form-horizontal">
    <?php
	include "../config/connect.php" ;
	
	$name_menu=$_POST[name_menu];
	$name_rmenu_th=$_POST[name_rmenu_th];
	$name_rmenu_backend=$_POST[name_rmenu_backend];
	$content_right_menu_th= mysql_real_escape_string($_POST['content_right_menu_th']);
	$content_right_menu= mysql_real_escape_string($_POST['content_right_menu']);
	
	$ndate=date('Y-m-d H:i:s');

	//$upload_path="defualt";
	
	$sql="SELECT * FROM `bayer`.`tb_right_menu` WHERE name_rmenu = '$name' LIMIT 1;";
	$objQuery = mysql_query($sql) or die ("Error Query [".$sql."]");
	$result = mysql_fetch_array($objQuery);
	if ($result){
		echo"<h3 class='orange'>CANNOT add new RIGHT menu !!<span class='txtnormal'> <a href='admin_right_cate.php' >Please try again</a></span></h3>
			";
	}else{
		$sql21="INSERT INTO `bayer`.`tb_right_menu` (`id_rmenu` ,`name_rmenu` ,`name_rmenu_backend` ,`content_right_menu` ,`date_mod_rmenu`)VALUES ('', '$name_menu', '$name_rmenu_backend', '$content_right_menu', '$ndate');";   
		$result21=mysql_db_query($dbname,$sql21) or die(mysql_error());
		$sql22="INSERT INTO `bayer`.`tb_right_menu_th` (`id_rmenu` ,`name_rmenu` ,`name_rmenu_backend` ,`content_right_menu` ,`date_mod_rmenu`)VALUES ('', '$name_rmenu_th', '$name_rmenu_backend', '$content_right_menu_th', '$ndate');";  
		$result22=mysql_db_query($dbname,$sql22) or die(mysql_error());
		
		if ($result21){
			echo"<div class='unit size-col-d'>
				<div class='topline'>User Manager</div>
				<h1>Create user</h1>
				<div class='form-horizontal'>
				<h3><a href='admin_right_cate.php'>Back to Add RIHGT Menu page</a></h3>
			</div>
	</div>";
		}else{			
			echo"<div class='unit size-col-d'>
				<div class='topline'>User Manager</div>
				<h1>Create user</h1>
				<div class='form-horizontal'>
				<h3>Cannot add new RIGHT menu<span class='txtnormal'> <a href='admin_right_cate.php'>Please try again</a></span></h3>
			</div>
	</div>";
		}
	}
/*}else echo 'ไม่สามารถอัพโหลดได้';
}else{
echo 'กรุณาใช้ไฟล์รูปภาพเท่านั้น';
}
}else{
echo 'ท่านยังไม่ได้อัพโหลดไฟล์';
}
}*/
	/*}else{
		echo "อัพโหลดรูปผิดชนิดครับ";
	}*/
	/*
		$update=getdate();
  		$updateday=$update["year"]."-".$update["mon"]."-".$update["mday"];
 		$sql3="INSERT INTO test Values(null,'$name2','$updateday')";   
  		$result3=mysql_db_query($dbname,$sql2) or die(mysql_error());
  	if ($result3)  {
  	}else{
   		echo"Cannot add new Industry";
  	}*/
	mysql_close();
	
	?>
					</div>
			</div>
			
</div>

            </section>
<?php include"footer.php"; ?> 