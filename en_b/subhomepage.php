<?php
	header ("Last-Modified: " . gmdate ("D, d M Y H:i:s") . " GMT");
	header ("Pragma: no-cache");
	header ("Cache: no-cache");
	
	$call_arti=$_GET[ID];
	include "../config/connect.php";
		
	$sql="SELECT *  FROM `tb_article` WHERE menu_article='$call_arti'";
	$result=mysql_db_query($dbname,$sql);
	while($rs=mysql_fetch_array($result)) {
	$content_article=$rs[content_article];
	$topic_article=$rs[topic_article];
	$show_rmenu=$rs[show_rmenu];
	$position_rmenu=$rs[position_rmenu];
	}
	
	mysql_close();	
?>
<!doctype html>
<html class="no-js rwd" lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="description" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:image" content="">
<meta name="keywords" content="">
<meta name="abstract" content="">
<meta name="author" content="">
<meta name="publisher" content="">
<meta name="robots" content="Index,Follow">
<meta name="revisit-after" content="14 days">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<!--Version 4.0.2-->
<title><?php echo "$topic_article";?> - Bayer</title>

<link rel="stylesheet" type="text/css" href="//shared.bayer.com/api/402/bayer.css"/>
<link rel="stylesheet" type="text/css" href="../styles/custom.css"/>
<script src="//shared.bayer.com/js/modernizr.js"></script>
<link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" /> 
</head>

<!--[if lt IE 9]>
<body class="subhm en lt-ie9"> 
<![endif]-->
<!--[if gt IE 8]><!-->
<body class="subhm en">
<!--<![endif]-->

<!--##nosearch##-->
<div class="wrapper">
  <div class="page">
    <header id="header">
      <!--[if lt IE 9]><img src="../img/header/naming-area.png" alt="Bayer: Science For A Better Life" class="namingarea"/><![endif]-->
      <!--[if gt IE 8]><!-->
      <img src="../img/header/naming-area.svg" class="namingarea" alt="Bayer: Science For A Better Life"/>
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
        <li><a href="contact.php" class="mcontact">Contact</a></li>
        <li><a href="#socialbar" class="mshare">Share</a></li>
        <li><a href="#search" class="msearch">Search</a></li>
        <li class="mlang"><a href="<?php echo"../th/subhomepage.php?ID=$call_arti";?>" class="mlang">TH</a></li>
      </ul>
    </nav>
    <nav role="navigation" class="navigation">
      <ul id="mega-menu-1" class="megamenu">
      	<!--<li rel="8142" class="n1 selected&#xA;"><a href="/bayer/index.php">Home</a></li>-->
        <li class="n1"><a href="index.php">Home</a></li>        
        <?php
				include "top_menu.php";
		?>
        </ul>
            <ul class="nobulls extra-nav "><!-- change V4 -->
            	<li><a href="search_content.php" class="ir icon-search">Search</a></li>
        	</ul>
        	<ul class="nobulls extra-nav meta-btns">
            	<li><a href="#showpanel2">Locations</a></li>
            	<li><a href="#showpanel1">Our Businesses</a></li>
            	<li><a href="#showpanel3">Websites</a></li>
            	<li><a href="#YourContactURL">Contact us</a></li>
        	</ul>
      
    </nav>
    <!--##/nosearch##-->
      <div role="main" class="main">
        <div class="service">
          <ul class="breadcrumb">
             <?php 
				include"top_sup_menu.php";
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
			 <!--Slider Start-->
            
            <div class="stage01">
              <div id="slider" class="flexslider">
                <ul class="slides">
                <?php 	include "../config/connect.php";
						
						$sqlA="SELECT *  FROM `tb_article` WHERE menu_article='$call_arti'";
						$resultA=mysql_db_query($dbname,$sqlA);
						$rsA=mysql_fetch_array($resultA);
				
						$content_slider=$rsA[content_slider];
				
						$sqlB="SELECT * FROM tb_slider_cate WHERE id_slider='$content_slider' and slider_language='1'";
						$resultB=mysql_db_query($dbname,$sqlB);
						$rsB=mysql_fetch_array($resultB);

						$id_slider=$rsB[id_slider];
						$slider_name=$rsB[slider_name];
						$slider_language=$rsB[slider_language];
						$slider_quantity=$rsB[slider_quantity];
					
									
						$sqlC="SELECT * from tb_slider_show WHERE id_slider_cate='$id_slider' ORDER BY id_slider_show";
						$resultC=mysql_db_query($dbname,$sqlC);
						$numberC=mysql_num_rows($resultC);
						
						while($rsC=mysql_fetch_array($resultC)) {
						$id_slider_cate=$rsC[id_slider_cate] ;
						$Order_slider_each=$rsC[Order_slider_each] ;
						$position=$rsC[position] ;
						$image_slider=$rsC[image_slider] ;
						$topline=$rsC[topline] ;
						$headerline=$rsC[headerline] ;
						$description=$rsC[description] ;
						$link_slider=$rsC[link_slider] ;
						$Order_slider_each=1;					
						echo"
						<li>
               				<div style='width:253px;' class='stagetext $position'>
                  				<div class='stagetopline'>$topline</div>
                  				<h1 class='stagehdln'>$headerline</h1>
                 				<div>
                    				<p>$description</p>
                    			<a href='$link_slider' class='more'>more</a></div>
                			</div>
                			<img src='$image_slider' alt=''/>
						</li>";
						
						$Order_slider_each++;
						}
						mysql_close();
						?>
                </ul>
              </div>
            </div>
            <!--Slider End-->
            
            <!--##nosearch##-->
            <nav id="lefthand" class="unit size-col-a lfthnd">
              <ul class="lfthndnavi">
              	<?php
					include "left_menu.php";
              	?>
              </ul>
            </nav>
            <!--##/nosearch##--> 
            
            <!--##/center##--> 
            <div class="unit size-col-d">
              <?php
				include "../config/connect.php";
		
				$sql="SELECT *  FROM `tb_article` WHERE menu_article='$call_arti'";
				$result=mysql_db_query($dbname,$sql);
				while($rs=mysql_fetch_array($result)) {
				$content_article=$rs[content_article];
				$show_rmenu=$rs[show_rmenu];
				$position_rmenu=$rs[position_rmenu];
				}
				echo $content_article; 
				mysql_close();
			  ?>
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
            <li class="onlymobile"><a href="contact.php" class="icnContact">Contact us</a></li>
            <li><a href="#header" class="icnTop">Top</a></li>
          </ul>
          <div class="printfooter">www.bayer.co.th</div>
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
        <!--<li><a href="map.php">Map</a></li>-->
        <li class="hide-lt1024"><a href="sitemap.php">Sitemap</a></li>
        <li><a href="<?php echo"../th/subhomepage.php?ID=$call_arti";?>" class="last">Thai</a></li>
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

<script src="../js_b/bayer.js"></script>
<script src="../js_b/custom.js"></script>
<script src="../js_b/bayerworldwide.js"></script>
<script src="../js_b/placeholder.js"></script>
<script>
	//add page specific JS here
</script>
</body>
</html>