<!doctype html>
<head>
	<!-- Basics -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Bayer CMS Login</title>
	<!-- CSS -->
	<link rel="stylesheet" href="../styles/global/reset.css">
	<link rel="stylesheet" href="../styles/global/animate.css">
	<link rel="stylesheet" href="../styles/global/styles_admin.css">
    
    <script type="text/javascript">
		function clickupload()
		{
			if ( document.getElementById('input-user').value.length == 0 )
		{
			alert( 'Please input your Username' ) ;
			return false ;
		}
			if ( document.getElementById('input-pass').value.length == 0 )
		{
			alert( 'Please input your Password' ) ;
			return false ;
		}
		return true ;
		}
	</script>
	
</head>
	<!-- Main HTML -->
	<body>
		<!-- Begin Page Content -->
		<div id="container">
    	<div align="center"><img src="../img/header/logo.png" border="0" style="padding-top:15px"></div>
		
		<form action="admin_check.php" method="post" name="form1" onSubmit="return clickupload();">
		
		<label for="username">Username:</label>
		<input name="email" type="name" id="input-user" >
		
		<label for="password">Password:</label>
		<p><a href="forgot2.php">Forgot your password?</a>
		<input name="password" type="password" id="input-pass">
		
		<div id="lower">
		<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
		<input type="submit" alt="Log In" name="submit" value="Log In" class="submit-text" />
		</div>		
		</form>
		
	</div>
	<!-- End Page Content -->
	
</body>

</html>