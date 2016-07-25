<?php
	/* set the cache limiter to 'private' */

	session_start();
	//mysql_connect("localhost","root","");
	//mysql_select_db("bayer");
	mysql_connect("wh-db51.csloxinfo.com","bayer2","?fc804Ui");
	mysql_select_db("bayerdb2");
	//include "../config/connect.php";
	
	$emailStr = mysql_real_escape_string($_POST['email']);
	$passwordStr = mysql_real_escape_string($_POST['password']);

	$saltQuery = "SELECT salt_admin FROM tb_admin WHERE email_admin = '$emailStr';";
	$resultB = mysql_query($saltQuery);
		if (!$resultB) {
    	$message  = 'Invalid query: ' . mysql_error() . "\n";
    	$message .= 'Whole query: ' . $saltQuery;
		die($message);
		}
	$row = mysql_fetch_assoc($resultB);
	$salt = $row['salt_admin'];
	
	$saltedPW = $passwordStr . $salt;
	$hashedPW = hash('sha256', $saltedPW);

	//$strSQL = "SELECT * FROM tb_admin WHERE email_admin = '$emailStr' and password_admin = '$passwordStr'; ";
	$strSQL = "SELECT * FROM tb_admin WHERE email_admin = '$emailStr' and password_admin = '$hashedPW';";
	$objQuery = mysql_query($strSQL);
	$resultZ = mysql_fetch_array($objQuery);
	if(!$resultZ)
	{
			echo "Username and Password Incorrect!";
			/*echo "['$emailStr']";
			echo "['$hashedPW']<br />";
			echo "['$salt']<br />";
			echo "['$saltedPW']";	*/
	}
	else
	{
			$_SESSION["id_admin"] = $resultZ["id_admin"];
			$_SESSION["roles_admin"] = $resultZ["roles_admin"];

			session_write_close();
			
			if($resultZ["roles_admin"] == "Administrator")
			{
				header("location:admin_home.php");
			}
			else if($resultZ["roles_admin"] == "HR")
			{
				header("location:hr_home.php");
			}
			else
			{
				header("location:user_home.php");
			}
	}
	mysql_close();
?>