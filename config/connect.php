<?php
/*$host="wh-db51.csloxinfo.com";
$user="bayer2";
$pw="?fc804Ui";*/
$host="localhost";
$user="root";
$pw="";
$dbname="bayerdb2";
$c=@mysql_connect($host,$user,$pw);
mysql_set_charset('utf8', $c);
	if(!$c) {
		echo"Cannot connect into database";
		exit();
		}
?> 
