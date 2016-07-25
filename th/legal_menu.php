<?php
	include "../config/connect.php";
	$sql2="SELECT * FROM tb_legal ORDER BY id_legal ASC";
	$result2=mysql_db_query($dbname,$sql2);
	while($rs2=mysql_fetch_array($result2)) {
		$name_menu=$rs2[name_menu];
		$id_article=$rs2[id_article];
		
		$sql3="select * from tb_menu WHERE id_menu='$id_article'";
		$result3=mysql_db_query($dbname,$sql3);
		$rs3=mysql_fetch_array($result3);
		$name_menu2=$rs3[name_menu];
		if($name_menu2==Overview){
			echo'<li><a href="subhomepage_c.php?ID='.$id_article.'" title="'.$name_menu.'">'.$name_menu.'</a></li>';
		}else{
			echo'<li><a href="contentpage_c.php?ID='.$id_article.'" title="'.$name_menu.'">'.$name_menu.'</a></li>';
		}
	}
	mysql_close();
?>