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
	
		if($_GET['code'])
		{
		//$get_username = $_GET['username_admin'];
		$get_code = $_GET['code'];
		
		$sql3 = "SELECT * FROM tb_admin WHERE passreset='$get_code'";
		$query3 = mysql_db_query($dbname,$sql3);
		$numrow = mysql_num_rows($query3);
		
		if ($numrow!=0)
					{
						while($row = mysql_fetch_assoc($query3))
						{
							$db_code = $row['passreset'];
							//$db_username = $row['username_admin'];
						}
					}
		if($get_code == $db_code)
		{
			echo "
			<form action='pass_reset_complete.php?code=$get_code' method='POST' name='form3'>
			<div class='control-group'>
			<label class='control-label' id='passwordLabel' for='password'>Enter a new password</label>
				<div class='controls'>
			<input type='password' name='newpass' class='input-large'>
				</div>
			</div>
			<div class='control-group'>
			<label class='control-label' id='passwordLabel' for='password'>Re-enter your password</label>
				<div class='controls'>
			<input type='password' name='newpass1' class='input-large'>
				</div>
			</div>
			<input type='hidden' name='name' value='$db_username'>			
			<div class='buttons'>
			<button type='submit' class='btn btn-primary' value='Update Password' name='submit'>Submit</button>
			</div>
			</form>
			";
		}
	}
	if(!$_GET['code'])
	{
   			echo"
    		<p>We can help you reset your password. First, please enter your name and Bayer email.</p><br>
			<p><span class='txtnormal' style='color:#F00'> (Boxes marked * are mandatory.)</span></p><br>
			<form action='forgot2.php' method='POST' name='form2'>
				<div class='control-group'>
				<label class='control-label' id='nameLabel' for='name'>Input your name<span style='color:#F00'>*</span> (Only name)</label>
					<div class='controls'>
    			<input type='text' class='input-large' size='20' maxlength='40' required id='name' name='name'>
					</div>
  				</div>
				<div class='control-group'>  
   		 		<label class='control-label' id='nameLabel' for='email'>Your Bayer Email<span style='color:#F00'>*</span></label>
					<div class='controls'>
    			<input type='email' class='input-large' size='20' maxlength='40' name='email'>
  					</div> 
				</div>   
    		<div class='buttons'>
      			<button type='submit' class='btn btn-primary' value='submit' name='submit'>Submit</button>
               
    		</div>
    		</form>";
			
			 if(isset($_POST['submit']))
			 {
				$nameStr = mysql_real_escape_string($_POST['name']);
				$emailStr = mysql_real_escape_string($_POST['email']);
				$sql = "SELECT * FROM tb_admin WHERE username_admin='$nameStr'";
				$query = mysql_db_query($dbname,$sql);
     			$numrow = mysql_num_rows($query);
				
				if ($numrow!=0)
					{
						while($row = mysql_fetch_assoc($query))
							 {
								$db_email= $row['email_admin'];
							 }
						if($emailStr == $db_email)
							{
								$saltedPW = $nameStr . rand(10000,1000000);
								$code = hash('sha256', $saltedPW);
								//$code = rand(10000,1000000);
								$to = $db_email;
								$subject = "Password Reset";
								$body = "This is an automated email. Please DO NOT reply this email.
Click the link below or copy and paste it into your browser.
http://www.bayer.co.th/admin/forgot2.php?code=$code
														
								";
								$headers = 'From: no-reply-admin@bayer.co.th' . "\r\n" .
    'Reply-To: admin@bayer.co.th' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
								
								$sql2 = "UPDATE tb_admin SET passreset='$code' WHERE username_admin='$nameStr'";
								$query = mysql_db_query($dbname,$sql2);
								mail($to,$subject,$body,$headers);
								echo "<p><h3>We have sent the URL for reseting your password now. Please check your email.</h3></p>";
							}
							else
							{
								echo "<p style='color:red'>Your Bayer Email is incorrect.<p>";
							}
						}
					else
						{
						echo "<p style='color:red'>Your name does not exist. Please try to input you name again.<p>";
						}
			}
	}
			?>
           </div>
    </div> 
</div> 

            </section>
<?php include"footer.php"; ?> 
            
          