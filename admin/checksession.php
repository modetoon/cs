<?php
	//header ("Last-Modified: " . gmdate ("D, d M Y H:i:s") . " GMT");
	header ("Pragma: no-cache");
	//header ("Cache: no-cache");

	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	//header("Content-Type: application/xml; charset=utf-8");
	
	/*session_cache_limiter('private');
	$cache_limiter = session_cache_limiter();

	 set the cache expire to 15 minutes */
	/*session_cache_expire(1);
	$cache_expire = session_cache_expire();*/
	
	/* start the session */
	session_start();
	if($_SESSION['id_admin'] == "")
	{
		echo "Please Login!";
		exit();
	}
	
	mysql_connect("wh-db51.csloxinfo.com","bayer2","?fc804Ui");
	mysql_select_db("bayerdb2");
	$strSQL = "SELECT * FROM tb_admin WHERE id_admin = '".$_SESSION['id_admin']."' ";
	$objQuery = mysql_query($strSQL);
	$resultZ= mysql_fetch_array($objQuery);
?>


