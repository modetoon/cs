<?php
	header ("Last-Modified: " . gmdate ("D, d M Y H:i:s") . " GMT");
	header ("Pragma: no-cache");
	header ("Cache: no-cache");

	$call_arti=$_GET[ID];
	include "../config/connect.php";
	
	
	$sql="SELECT *  FROM `tb_press_th` WHERE id_press='$call_arti'";
	$result=mysql_db_query($dbname,$sql);
	$rs=mysql_fetch_array($result);
	$topline=$rs[topline];
	$press_content=$rs[press_content];
	
	mysql_close();
?>
<!doctype html>
<html class="no-js rwd" lang="th">
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
<title><?php echo"$topline"; ?> - Bayer</title>
<link rel="stylesheet" type="text/css" href="../styles/global/standard.css"/>
<script src="../scripts/modernizr.js"></script>
<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico" />
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
    <div class="pageheader">
      <!--[if lt IE 9]><img src="../img/header/naming-area-th.png" alt="Bayer: Science For A Better Life" class="namingarea"/><![endif]-->
      <!--[if gt IE 8]><!--><img src="../img/header/naming-area-th.svg" class="namingarea" alt="Bayer: Science For A Better Life"/><!--<![endif]-->
      <a href="/en/homepage.aspx" class="logo">
        <!--[if lt IE 9]><img src="../img/header/logo-print.png" alt=""/><![endif]-->
        <!--[if gt IE 8]><!--><object type="image/svg+xml" data="../img/header/logo.svg"></object><!--<![endif]-->
        </a></div>
    </header>
    <nav class="mobilenav">
      <ul class="nobulls">
        <li><a href="#nav" class="mnav">Menu</a></li>
        <li><a href="#search" class="msearch">Search</a></li>
        <li><a href="#contact" class="mcontact">Contact</a></li>
        <li class="mlang"><a href="<?php echo"../en/press.php?ID=$call_arti";?>" class="mlang">EN</a></li>
      </ul>
    </nav>
     <nav role="navigation" class="navigation">
      <ul id="mega-menu" class="megamenu">
      	<!--<li rel="8142" class="n1 selected&#xA;"><a href="/bayer/index.php">Home</a></li>-->
        <li rel="8142" class="n1 selected&#xA;"><a href="index.php">หน้าหลัก</a></li>
        
        <?php
	include "top_menu_press.php";
	?>
    	
        </li>
        
      </ul>
    </nav>
    <!--##/nosearch##-->
      <div role="main" class="main">
        <div class="service">
        
          <ul class="breadcrumb">
            <li><a href="index.php">หน้าหลัก</a></li>
            
            <?php 
			include"top_sup_menu_c.php";
			?>
            
          </ul>
          <nav class="servicenav">
            <ul class="nobulls">
              <li><a href="#print">Print</a></li>
              <li><a href="#share" class="last">Share</a></li>
            </ul>
          </nav>
        </div>
        <section>            
            <!--##nosearch##-->
            <nav id="lefthand" class="unit size-col-a lfthnd"> 
              <ul class="lfthndnavi">
            <?php
			//include "left_menu_c.php";
			?>
              </ul>
            </nav>
            
            <!--##/nosearch##--> 
            
            <div class="unit size-col-d">
            	<div class="topline">ข่าว</div>
            	<h1><?php echo $topline;?></h1>
                   <?php echo $press_content;?>
    
              	<div class="spacer"></div>

			</div>


            <aside class="unit size-col-a margi">
      			<?php include "right_menu.php"; ?>
            </aside>

        </section>
      <footer id="page">
      
        <div class="copyright">
          <div class="cright "><span>ข้อมูลล่าสุด: <?php include "date_mod_press.php"; ?></span> <span>Copyright © Bayer Thai Co., Ltd.</span></div>
          
          <ul class="pagefunctions nvgtn">
            <li><a href="#print" class="icnPrint">Print</a></li>
            <li><a href="#share" class="icnShare">Share</a></li>
            <li class="onlymobile"><a href="#contact" class="icnContact">Contact us</a></li>
            <li><a href="#header" class="icnTop">Top</a></li>
          </ul>
          
          <div class="printfooter"><!-- REPLACE: current URL --></div>
        </div>
        <nav class="legal">
          <ul class="nvgtn clearfix">
            <?php
				include "legal_menu.php";
			?>
          </ul>
        </nav>
      </footer>
    </div>
    
    <!--##nosearch##--> 
    <!-- Support Navigation -->
    <nav class="meta">
      <ul class="nobulls">
        <li><a href="#contact">ติดต่อ</a></li>
        <li><a href="map.php">แผนที่</a></li>
        <li><a href="sitemap.php">Sitemap</a></li>
        <li><a href="<?php echo"../en/press.php?ID=$call_arti";?>" class="last">English</a></li>
        <li><a href="http://bayer.com" class="last lnk">Bayer Group</a></li>
      </ul>
    </nav>
    <!-- /Support Navigation -->
  </div>

  <nav id="fatfooter">
    <div class="shdw"></div>
    <ul class="nvgtn fatfooter">
      <?php
	 	include "btm_menu.php";
	 ?>
    </ul>
    <div class="clear"></div>
  </nav>
</div>

<!--##/nosearch##-->

<div id="modal" class="reveal-modal">
  <h1></h1>
  <div class="modalbody"></div>
  <a class="close-reveal-modal">close<span class="close">×</span></a>
</div>

<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../scripts/relaunch.js"></script>
<script src="../scripts/standard.js"></script>
<script>
	//add page specific JS here
</script>
</body>
</html>