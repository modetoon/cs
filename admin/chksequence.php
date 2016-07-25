<?php
	/*** By Weerachai Nukitram ***/
	/***  http://www.ThaiCreate.Com ***/

	$strUsername = trim($_POST["tUsername"]);

	if(trim($strUsername) == "")
	{
		echo "";
		exit();
	}

	if ( is_numeric($strUsername)){
	include "../config/connect.php";
	//$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	$objDB = mysql_select_db($dbname);

	//*** Check Username (already exists) ***//

	$strSQL = "SELECT * FROM tb_menu WHERE menu_sequence = '".$strUsername."' ";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
		echo "<font color=\"#FF0000\">Please change number</font><span id=\"chkgo\"><b></b></span>";
	}
	else
	{
		echo "<font color=\"#FF0000\">You can use this number</font><span id=\"chkgo\"><b></b></span>";
	}
	}else{
		echo "<font color=\"#FF0000\">Please use only number</font><span id=\"chkgo\"><b></b></span>";
	}
?>