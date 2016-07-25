<!doctype html>
<html class="no-js rwd" lang="en">
<?php include"header.php"; ?>
</head>

<!--[if lt IE 7]>
<body class="contnt en lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
<body class="contnt en lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
<body class="contnt en lt-ie9"> 
<![endif]-->
<!--[if gt IE 8]><!-->
<body class="contnt en">
<!--<![endif]-->

<!--##nosearch##-->
<div class="wrapper">
  <div class="page">
    <header id="header">
      <!--[if lt IE 9]><img src="img/header/naming-area.png" alt="Bayer: Science For A Better Life" class="namingarea"/><![endif]-->
      <!--[if gt IE 8]><!-->
      <img src="../img/header/naming-area_admin.svg" class="namingarea" alt="Bayer: Science For A Better Life"/>
      <!--[endif]-->

      <a href="http://www.bayer.com" title="To the Bayer Group Portal" class="logo">
      	<!--[if lt IE 9]><img src="img/header/logo.png" title="To the Bayer Group Portal" alt="The Bayer Cross"/>
        <![endif]--><!--[if gt IE 8]><!-->
         <object type="image/svg+xml" data="../img/header/logo.svg"></object>
        <!--<![endif]-->
      </a>
    </header>	
    <!--##/nosearch##-->
      <div role="main" class="main">
        <div class="service">
          <ul class="breadcrumb">
            <li><a href="#home"></a></li>
          </ul>
        </div>       
        <section>
        
        <div class="unit size-col-d-admin">
        <h1>Get back into your account</h1>
            <div class="form-horizontal">


<?php
	include "../config/connect.php";
	
	$newpass = $_POST['newpass'];
	$newpass1 = $_POST['newpass1'];
	
	//$post_username = $_POST['username'];
	$code = $_GET['code'];
		
	if($newpass == $newpass1)
	{
		$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
		$saltedPW = $newpass . $salt;
		$hashedPW = hash('sha256', $saltedPW);
		
		$sql="UPDATE tb_admin SET password_admin='$hashedPW', salt_admin='$salt', passreset='0' WHERE passreset='$code'";
		$result=mysql_db_query($dbname,$sql);
		if ($result)  {
			echo "<p>Your password has been updated</p>
			<p><a href='http://www.bayer.co.th/admin/'>Click here to login</a></p>";
			}
	}
	else
	{
		echo "<p>Password must match</p>
		<p><a href='http://www.bayer.co.th/admin/forgot2.php?code=$code$username=$post_username'>Click here to go back</a></p>";
	}

?>

          </div>
    </div> 
</div> 

            </section>
<?php include"footer.php"; ?> 