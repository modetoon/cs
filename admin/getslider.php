<?php

$q = intval($_GET['q']);
include "../config/connect.php" ;
$con = mysqli_connect($host,$user,$pw,$dbname);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM tb_slider_cate WHERE slider_language = '".$q."'";
$result = mysqli_query($con,$sql);

echo "
            <label class='control-label' id='firstnameLabel' for='vorname'>Choose slider</label>
            	<div class='controls'>
			<select id='slider' name='slider' class='input-large'>
            	<option selected='selected' value=''>Please select Language before choose slider</option>
          
            ";

while($row = mysqli_fetch_array($result)) {
  echo '<option value="'.$row[0].'">'.$row[1].'</option>';
}
echo "</select>
		</div>";

mysqli_close($con);
?> 