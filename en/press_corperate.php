<?php
	header ("Last-Modified: " . gmdate ("D, d M Y H:i:s") . " GMT");
	header ("Pragma: no-cache");
	header ("Cache: no-cache");

	$call_arti=$_GET[ID];
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
<title>Global News- Bayer</title>


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
        <li><a href="contact.php" class="mcontact">Contact</a></li>
        <li class="mlang"><a href="<?php echo"../th/press_corperate.php?ID=$call_arti";?>" class="mlang">TH</a></li>
      </ul>
    </nav>
     <nav role="navigation" class="navigation">
      <ul id="mega-menu" class="megamenu">
      	<!--<li rel="8142" class="n1 selected&#xA;"><a href="/bayer/index.php">Home</a></li>-->
        <li rel="8142" class="n1 selected&#xA;"><a href="index.php">Home</a></li>
        <?php
	include "top_menu_press.php";	?>
        
        </li>
      </ul>
    </nav>
    <!--##/nosearch##-->
    <div role="main" class="main">
      <div class="service">
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="last"><a href="press_corperate.php" class="last">Global News</a></li>
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
            <li><?php include "left_menu_press.php"; ?></li>
            <li class="selected"><a href="press_corperate.php" class="selected">Global News</a></li>
          </ul>
        </nav>
        <!--##/nosearch##-->
        <div class="unit size-col-d">
			  
				  <?php

					$xml=("http://www.bayer.com/module/xml/corporate-country-news-en.xml");

					$xmlDoc = new DOMDocument();
					$xmlDoc->load($xml);

					$rss = simplexml_load_file($xml);
					echo '
              		<h1>'. $rss->channel->title .'</h1>
            		<div class="Content"><p>'. $rss->channel->description.'</p></div><br />
            		';
					
					//echo '<h1>'. $rss->channel->title . '</h1>';
					//echo '<p>'. $rss->channel->description . '</p>';
					$no=0;
					 foreach ($rss->channel->item as $item) 
					 {
					   if($no<=5){
					   	$item=$rss->channel->item[$no];
					   	$namespaces = $item->getNameSpaces(true);
					   	$bayer = $item->children($namespaces['bayer']);
						$ndate=$item->pubDate;
						$ndate= date("M d, Y", strtotime($ndate));
						$ndate=strtoupper($ndate);

					   	$showimg=(string)$item->enclosure['url'][0];
						$height=(string)$item->enclosure['height'][0];
						$width=(string)$item->enclosure['width'][0];
					  	if($showimg==''){
							echo '<hr class="hr">
							<article class="media">
      						<div class="bd">
       						<div class="newsdate">'.$ndate.'</div>
        					<div class="newstopline">'.$bayer->topline.'</div>
        					<h3 class="hdln"><a href="'.$item->guid.'">'.$item->title.'<span class="txtnormal"><br>'.$item->description.'</span> <span class="more">more</span></a></h3>
     		 				</div>
    						</article>
    						
  						'; 
						}else{
							echo '<hr class="hr">
							<article class="media">
      						<a class="img" href="'.$item->guid.'"><img class="newsimg" alt="" src="'.$showimg.'"></a>
      						<div class="bd">
       							<div class="newsdate">'.$ndate.'</div>
        						<div class="newstopline">'.$bayer->topline.'</div>
        						<h3 class="hdln"><a href="'.$item->guid.'">'.$item->title.'<span class="txtnormal"><br></span>
								<span class="txtnormal">'.$item->description.'</span>
								<span class="more">more</span></a></h3>
     		 				</div>
    						</article>
    						
  						'; 
						
					   		}
						}
					   $no++;
					
				}
?>				<hr>
				<p class="lnk">
            	<a id="maincontent_0_countrylistcontent_2_RssFeedLink" class="more-news-link" href="http://www.news.bayer.com/baynews/baynews.nsf/id/news-overview-category-search-en" target="_blank">More news from the Bayer Group</a>
        		</p>
              </div>
           
        
        
        <div class="unit size-col-a margi">
          <!-- Begin MarginElements-->
           <div><div class="margiblock">
			<h1 class="h5">Calendar </h1>
			<hr />
			<ul class="mlnk">
			<li><a href="http://www.bayer.com/en/Calendar.aspx" target="_blank">Calendar Overview</a></li>
			</ul>
			</div>
           </div>
           <div><div class="margiblock">
			<h1 class="h5">Publications</h1>
			<hr />
			<div class="mlnk"><a href="http://www.annualreport2013.bayer.com/" target="_blank">Annual Report 2013 Augment Version</a></div>
<div class="mlnk"><a href="http://www.investor.bayer.de/en/nc/events/stockholders-meeting/overview/" target="_blank">Annual Stockholders’ Meeting 2013</a></div>
<div class="mlnk"><a href="http://www.bayer.com/en/publications.aspx" target="_blank">Financial Reports</a></div>
<div class="mlnk"><a href="http://www.bayer.com/en/Names-Figures-Facts.aspx" target="_blank">Name, Figures, Facts</a></div>
<div class="mlnk"><a href="http://www.research.bayer.com/" target="_blank"><em>research</em> – The Bayer Scientific Magazine</a></div>
<div class="mlnk"><a href="http://www.sustainability2012.bayer.com/" target="_blank">Sustainability Development Report 2013</a></div>
<div class="mlnk"><a href="/img/upload/source/download/ChildrensBookEN.pdf" download="">Children book – What’s up with the Earth? (PDF, 10.1 MB)</a></div>
<div class="mimg"><img src="/img/upload/source/RIGHT Menu/childenbook_th.jpg" alt="Bayer HealthCare" width="160" height="190" /></div>
<h6><a href="/img/upload/source/download/ChildrenbookThai.pdf" download="">Thai (PDF, 11.9 MB)</a></h6>
<h6><a href="/img/upload/source/download/ChildrensBookEN.pdf" download="">English (PDF, 10.1 MB)</a></h6>
<h6><a href="/img/upload/source/download/ChildrenBookChinese.pdf" download="">Chinese (PDF, 9.4 MB)</a></h6>
			</div></div>
           <div></div>  

          <!-- END MarginElements-->
          <!-- Begin marginRTFContent BODY -->
          <div class="marginRTFContent"> </div>
          <!-- END marginRTFContent BODY -->
          <!-- END Right-Colu	mn //-->
          <!--##BODYEND_start##-->
        </div>
      </section>
      <footer id="page">
        <div class="copyright">
          <div class="cright "><span>Last updated:
          	<?php $no=0;
					 foreach ($rss->channel->item as $item) 
					 {
					   if($no<1){
						$ndate=$item->pubDate;
						$ndate= date("M d, Y", strtotime($ndate));
					  	echo $ndate;							
						}
					   $no++;					
				}
			?>			
            </span> <span>Copyright © Bayer Thai Co., Ltd.</span></div>
          <ul class="pagefunctions nvgtn">
            <li><a href="#print" class="icnPrint">Print</a></li>
            <li><a href="#share" class="icnShare">Share</a></li>
            <li><a href="#header" class="icnTop">Top</a></li>
          </ul>
          <div class="printfooter">
            <!-- REPLACE: current URL -->
          </div>
        </div>
        <nav class="legal">
          <ul class="nvgtn clearfix">
            <?php include "legal_menu.php";	?>
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
        <li><a href="<?php echo"../th/press_corperate.php";?>" class="last">Thai</a></li>
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
  <a class="close-reveal-modal">close<span class="close">×</span></a> </div>
<!--<script src="//shared.bayer.com/api/bayer.js"></script>
<script src="scripts/search.js"></script>-->
<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../scripts/standard.js"></script>
<script>
	//add page specific JS here
</script>
</body></html>