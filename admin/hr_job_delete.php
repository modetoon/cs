<?php
	include"checksession.php";
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="abstract" content="">
<meta name="author" content="">
<meta name="publisher" content="">
<meta name="robots" content="Index,Follow">
<meta name="revisit-after" content="14 days">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>Content Page - Bayer</title>

<link rel="stylesheet" type="text/css" href="../styles/global/standard.css"/>
<script src="../styles/modernizr.js"></script>
<link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" /> 
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
	<?php include"hr_menu.php";?>
    <!--##/nosearch##-->
      <div role="main" class="main">
        <div class="service">
          <ul class="breadcrumb">
            <li><a href="#home">Home</a></li>
            <li><a title="About" href="#nowhere">About</a></li>
            <li><a title="Aliquam Tincidunt" href="#nowhere">Aliquam Tincidunt</a></li>
            <li class="last"><a title="Overview" href="#nowhere">Overview</a></li>
          </ul>
          <nav class="servicenav">
            <ul class="nobulls">
              <li>Welcome</li>
              <li><a href="#print" class="last">  <?php echo $result["name_admin"];?></a></li>
              </ul>
          </nav>
        </div>
        <section>            
            <!--##/nosearch##--> 
   
    <?php
    $id_del=$_GET[id_del];
    include "../config/connect.php";
	$sql2="DELETE from tb_job where id_job='$id_del'";
	$result2=mysql_db_query($dbname,$sql2);
	if ($result2) {
		 echo "<div class='unit size-col-d'>
              <h1>Delete Jobs</h1>
              <div class='form-horizontal'>
			  <h3>Delete jobs complete<span class='txtnormal'> <a href='hr_job.php'>Back to home page</a></span></h3>
			</div>
			</div>";
	} else {
		echo "Cannot delete jobs";
	}
	mysql_close();
	?>
    </div>

            </section>
      <footer id="page">
      
        <div class="copyright">
          <div class="cright "><span>Last updated: <?php echo date("F d,Y H:i:s"); ?> <!-- REPLACE: current date[Month D, YYYY] --></span> <span>Copyright © <!-- REPLACE: copyright owner--></span></div>
          
          <ul class="pagefunctions nvgtn">
            <li class="onlymobile"><a href="#contact" class="icnContact">Contact us</a></li>
            <li><a href="#header" class="icnTop">Top</a></li>
          </ul>
          
          <div class="printfooter"><!-- REPLACE: current URL --></div>
        </div>
       </footer>
    </div>
    
    <!--##nosearch##--> 

  </div>

  <nav id="fatfooter">

  </nav>
</div>

<!--##/nosearch##-->

<div id="modal" class="reveal-modal">
  <h1></h1>
  <div class="modalbody"></div>
  <a class="close-reveal-modal">close<span class="close">×</span></a>
</div>

<script src="../styles/jquery.jquery-ui.min.js"></script>
<script src="../styles/global/standard.js"></script>
<script>
	//add page specific JS here
</script>
</body>
</html>