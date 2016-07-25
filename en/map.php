<?php
	header ("Last-Modified: " . gmdate ("D, d M Y H:i:s") . " GMT");
	header ("Pragma: no-cache");
	header ("Cache: no-cache");

	$call_arti=$_GET[ID];
	include "../config/connect.php";
	
	$sql="SELECT *  FROM `tb_article` WHERE topic_article='Map'";
	$result=mysql_db_query($dbname,$sql);
	while($rs=mysql_fetch_array($result)) {
		$id_article=$rs[id_article];
		$topic_article=$rs[topic_article];
		$content_article=$rs[content_article];
		//$show_rmenu=$rs[show_rmenu];
	}
	mysql_close();
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
<!--Version 2.1-->
<title><?php echo"$topic_article"; ?> - Bayer</title>
<link rel="stylesheet" type="text/css" href="//shared.bayer.com/api/bayer.css"/>
<script src="../scripts/modernizr.js"></script>
<!--<script src="//shared.bayer.com/js/modernizr.js"></script>-->
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
      <!--[if lt IE 9]><img src="../img/header/Naming_Thailand_en_995.png" alt="Bayer: Science For A Better Life" class="namingarea"/><![endif]-->
      <!--[if gt IE 8]><!-->
      <img src="../img/header/Naming_Thailand_en_995-460.svg" class="namingarea" alt="Bayer: Science For A Better Life"/>
      <!--<![endif]-->

      <a href="http://www.bayer.com" title="To the Bayer Group Portal" class="logo">
      	<!--[if lt IE 9]><img src="//shared.bayer.com/img/logo.png" title="To the Bayer Group Portal" alt="The Bayer Cross"/>
        <![endif]--><!--[if gt IE 8]><!-->
         <object type="image/svg+xml" data="//shared.bayer.com/img/logo.svg"></object>
        <!--<![endif]-->
      </a>
    </header>
    <nav class="mobilenav">
      <ul class="nobulls">
        <li><a href="#nav" class="mnav">Menu</a></li>
        <li><a href="#search" class="msearch">Search</a></li>
        <li><a href="map.php" class="mcontact"><?php echo"$topic_article"; ?></a></li>
        <li class="mlang"><a href="<?php echo"../th/map.php";?>" class="mlang">TH</a></li>
      </ul>
    </nav>
     <nav role="navigation" class="navigation">
      <ul id="mega-menu" class="megamenu">
      	<!--<li rel="8142" class="n1 selected&#xA;"><a href="/bayer/index.php">Home</a></li>-->
        <li rel="8142" class="n1 selected&#xA;"><a href="index.php">Home</a></li>
        
        <?php
	include "top_menu_index.php";
	include "count_article.php";
	?>
        	<?php
			include "../config/connect.php";
			$sql27="select * from tb_menu WHERE name_menu='Press'";
			$result27=mysql_db_query($dbname,$sql27);
			$rs27=mysql_fetch_array($result27);
			$s27_id_menu=$rs27[id_menu] ;
			//$s1_name_menu=$rs[name_menu] ;
			//$s1_level=$rs[level] ;
			$s27_menu_image=$rs27[menu_image] ;
			$s27_menu_intro=$rs27[menu_intro] ;
			mysql_close();
		?>
        
      </ul>
    </nav>
    <!--##/nosearch##-->
      <div role="main" class="main">
        <div class="service">
        
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="last"><a title="Contact" href="map.php"><?php echo"$topic_article"; ?></a></li>            
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
              	<li class="selected"><a href="map.php" class="selected"><?php echo"$topic_article"; ?></a></li>
              </ul>
            </nav>
            
            <!--##/nosearch##--> 
            
            <div class="unit size-col-d">
              <p><?php
				
				echo $content_article; 
			?></p>
    
              <div class="spacer"></div>

</div>


            <aside class="unit size-col-a margi">
      			<?php include "right_menu.php"; ?>
            </aside>

        </section>
      <footer id="page">
      
        <div class="copyright">
          <div class="cright "><span>Last updated: <?php include "date_mod.php"; ?></span> <span>Copyright © Bayer Thai Co., Ltd.</span></div>
          
          <ul class="pagefunctions nvgtn">
            <li><a href="#print" class="icnPrint">Print</a></li>
            <li><a href="#share" class="icnShare">Share</a></li>
            <li class="onlymobile"><a href="map.php" class="icnContact"><?php echo"$topic_article"; ?></a></li>
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
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="map.php">Map</a></li>
        <li><a href="sitemap.php">Sitemap</a></li>
        <li><a href="<?php echo"../th/map.php";?>" class="last">Thai</a></li>
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

<!--<script src="//shared.bayer.com/api/bayer.js"></script>
<script src="scripts/search.js"></script>-->
<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../scripts/standard.js"></script>
<script>
	//add page specific JS here
</script>
</body>
</html>