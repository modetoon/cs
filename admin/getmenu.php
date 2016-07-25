<?php

$q = intval($_GET['f']);
include "../config/connect.php" ;
$con = mysqli_connect($host,$user,$pw,$dbname);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM tb_menu WHERE sub_of = '".$q."'";
$result = mysqli_query($con,$sql);

echo '<label class="control-label" id="firstnameLabel" for="vorname">Select, if need add to sub menu :</label>
            	<div class="controls">
			<select id="submenu" name="submenu" class="input-large">
            	<option selected="selected" value="">Please select Menu before choose Sub Menu</option>';
if ($q!=0){
while($row = mysqli_fetch_array($result)) {
	if ($row[1]==Overview){
  		echo '<option value="'.$row[0].'">'.$row[1].'</option>';
	}
}
$sql="SELECT * FROM tb_menu WHERE sub_of = '".$q."'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
if ($row[1]!=Overview){
  echo '<option value="'.$row[0].'">'.$row[1].'</option>';
  if ($row[4]==1){
		$sql2="SELECT * FROM tb_menu WHERE sub_of = '".$row[0]."'";
		$result2 = mysqli_query($con,$sql2);
		while($row2 = mysqli_fetch_array($result2)) {
			if ($row2[1]==Overview){
				echo '<option value="'.$row2[0].'"> -- '.$row2[1].'</option>';
			}
		}
		$sql2="SELECT * FROM tb_menu WHERE sub_of = '".$row[0]."'";
		$result2 = mysqli_query($con,$sql2);
		while($row2 = mysqli_fetch_array($result2)) {
			if ($row2[1]!=Overview){
			echo '<option value="'.$row2[0].'"> -- '.$row2[1].'</option>';
			if ($row2[4]==1){
				$sql3="SELECT * FROM tb_menu WHERE sub_of = '".$row2[0]."'";
				$result3 = mysqli_query($con,$sql3);
				while($row3 = mysqli_fetch_array($result3)) {
					if ($row3[1]==Overview){
						echo '<option value="'.$row3[0].'"> ---- '.$row3[1].'</option>';
					}
				}
				$sql3="SELECT * FROM tb_menu WHERE sub_of = '".$row2[0]."'";
				$result3 = mysqli_query($con,$sql3);
				while($row3 = mysqli_fetch_array($result3)) {
					if ($row3[1]!=Overview){
						echo '<option value="'.$row3[0].'"> ---- '.$row3[1].'</option>';
					}
				}
  			}
			}
		}
  }
}
}
}
echo "</select>";

mysqli_close($con);
?> 