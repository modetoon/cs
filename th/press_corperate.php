<?php
	header ("Last-Modified: " . gmdate ("D, d M Y H:i:s") . " GMT");
	header ("Pragma: no-cache");
	header ("Cache: no-cache");

	$call_arti=$_GET[ID];
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
<title>Global News - Bayer</title>
<link rel="stylesheet" type="text/css" href="../styles/global/standard.css"/>
<link rel="stylesheet" type="text/css" href="../styles/relaunch.css"/>
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
        <li><a href="contact.php" class="mcontact">ติดต่อ</a></li>
        <li class="mlang"><a href="<?php echo"../en/press_corperate.php?ID=$call_arti";?>" class="mlang">EN</a></li>
      </ul>
    </nav>
     <nav role="navigation" class="navigation">
      <ul id="mega-menu" class="megamenu">
      	<!--<li rel="8142" class="n1 selected&#xA;"><a href="/bayer/index.php">Home</a></li>-->
        <li rel="8142" class="n1 selected&#xA;"><a href="index.php">หน้าหลัก</a></li>
        <?php
	include "top_menu.php";
	?>
        </li>
      </ul>
    </nav>
    <!--##/nosearch##-->
    <div role="main" class="main">
      <div class="service">
        <ul class="breadcrumb">
          <li><a href="index.php">หน้าหลัก</a></li>
          <li class="last"><a href="press_corperate.php" class="last">Global News</a></li>
          <?php 
			//include"top_sup_menu_c.php";
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
          	<li><a href="press_content.php">ข่าว</a>
            <li class="selected"><a href="press_corperate.php" class="selected">Global News</a></li>
            <?php
			//include "left_menu_press.php";
			?>
          </ul>
        </nav>
        <!--##/nosearch##-->
        <div class="unit size-col-d">
          <div class="margin">
<!--              <div class="press-cat-nav">
                <form method="GET" action="../id/760B0B3B9410F64DC1257AC300726756" class="submit" name="pressareasearch">
                  <input type="hidden" name="open" value="">
                  <input type="hidden" name="relaunch" value="1" class="submitval">
                  <input type="hidden" name="token" value="" class="submitval">
                  <div class="search box">
                    <input type="text" name="q" validate="true" default="Search News" value="Search News" class="input submitval">
                    <button class="btn submitbtn" type="button">Go</button>
                  </div>
                </form>
                <div class="clear">
                  <!-- IE -->
             <!--   </div>
              </div>
              <div class="navLinks"> <img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="#"><b>1 - 10</b></a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="#">11 - 20</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="#">21 - 30</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="#">31 - 40</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="#"><img class="viewnavicon" src="img/nav-next.gif" border=0 alt=""></a><a href="#"><img class="viewnavicon" src="img/nav-last.gif" border=0 alt=""></a> </div>
              <div class="viewList">
                <div class="NewsViewEntryLine">&nbsp;</div>
                <div class="clear">-->
                  
				  
				  <?php

					$xml=("http://www.bayer.com/module/xml/corporate-country-news-en.xml");

					$xmlDoc = new DOMDocument();
					$xmlDoc->load($xml);

					$rss = simplexml_load_file($xml);
					echo '<div class="headline_wrap">
              		<h1>'. $rss->channel->title .'</h1>
            		</div>
            		<div class="Content"><p>'. $rss->channel->description . '</p></div>
            		<div class="Content">
					<div class="viewList">
					<div class="NewsViewEntryLine">&nbsp;</div>
   					<div class="clear">';
					
					//echo '<h1>'. $rss->channel->title . '</h1>';
					//echo '<p>'. $rss->channel->description . '</p>';
					$no=0;
					 foreach ($rss->channel->item as $item) 
					 {
					   if($no<=6){
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
							echo '<div class="clear">
								  <p>'.$ndate.'<br /> 
									<a class="NewsViewEntryTopline" href="'.$item->guid.'">'.$bayer->topline.'</a><br /> 
									<a class="NewsViewEntryHeadline" href="'.$item->guid.'">'.$item->title.'</a><br /> 
									<a class="NewsViewEntryUnderline" href="'.$item->guid.'">'.$item->description.'</a>
									<a href="'.$item->guid.'"><span class="more">more</span></a>
								  </div>
								  <div class="NewsViewEntryLine">&nbsp;</div>'; 
						}else{
							echo '<div class="clear">
									<p><a class="picLink picLinkQ">
									<img class="NewsViewEntryImg" src="'.$showimg.'" alt="" height="120" border="0" /></a></p>
									<p>'.$ndate.'<br />
									<a class="NewsViewEntryTopline" href="'.$item->guid.'">'.$bayer->topline.'</a><br />
									<a class="NewsViewEntryHeadline" href="'.$item->guid.'">'.$item->title.'</a><br />
									<a class="NewsViewEntryUnderline" href="'.$item->guid.'">'.$item->description.'</a>
									<a href="'.$item->guid.'"><span class="more">more</span></a>
								  </div>
								  <div class="NewsViewEntryLine">&nbsp;</div>'; 
							//<p><a class="picLink picLinkQ">
							//<img class="rss-image portrait" src="'.$showimg.'" alt="" height="'.$height.'" border="0" /></a></p>
							//echo "<p><img src=\"" .$showimg. "\"></p>";	
						
					   		}
						}
					   $no++;
					
				}
?>
				<p class="lnk">
            	<a id="maincontent_0_countrylistcontent_2_RssFeedLink" class="more-news-link" href="http://www.news.bayer.com/baynews/baynews.nsf/id/news-overview-category-search-en" target="_blank">More news from the Bayer Group</a>
        		</p>
                </div>
                </p>
                <div class="spacer"></div>
              </div>
            </div>
          </div>
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
			<div class="mlnk"><a href="http://www.annualreport2013.bayer.com/" target="_blank">Annual Report 2013</a></div>
			<div class="mlnk"><a href="http://www.investor.bayer.de/en/nc/events/stockholders-meeting/overview/" target="_blank">Annual Stockholders’ Meeting 2013</a></div>
			<div class="mlnk"><a href="http://www.bayer.com/en/publications.aspx" target="_blank">Financial Reports</a></div>
			<div class="mlnk"><a href="http://www.bayer.com/en/Names-Figures-Facts.aspx" target="_blank">Name, Figures, Facts</a></div>
			<div class="mlnk"><a href="http://www.research.bayer.com/" target="_blank"><em>research</em> – The Bayer Scientific Magazine</a></div>
			<div class="mlnk"><a href="http://www.sustainability2012.bayer.com/" target="_blank">Sustainability Development Report 2013</a></div>
			<div class="mimg"><img src="/bayer_beta/img/upload/source/RIGHT Menu/childenbook_th.jpg" alt="Bayer HealthCare" width="160" height="190" /></div>
			<div class="mlnk"><a href="/bayer_beta/img/upload/source/download/ChildrensBookEN.pdf" target="_blank">Children book – What’s up with the Earth?</a></div>
			<h6><a href="/bayer_beta/img/upload/source/download/ChildrenbookThai.pdf" target="_blank">Thai</a></h6>
			<h6><a href="/bayer_beta/img/upload/source/download/ChildrensBookEN.pdf" target="_blank">English</a></h6>
			<h6><a href="/bayer_beta/img/upload/source/download/ChildrenBookChinese.pdf" target="_blank">Chinese</a></h6>
			</div></div><div><div class="margiblock">
			<h1 class="h5">Quicklinks</h1>
			<hr />
			<ul class="mlnk">
				<li><a href="#nowhere" target="_blank">Solar airplane: Nothing but sunshine in the tank</a></li>
			</ul>
			</div></div>
           <div></div>            
          <!--<div class="margiblock dontprint">
            <h1 class="h5">Publications</h1>
            <hr>
            <div class="mcontent mlnk">
              <div class="marginPublications marginBarContent">
                <div class="green">
                <a class="margin-image" href="#" target="_top"><img src="../files/content/$file/ab2q14_en.png" alt="" border=0></a>
                <a href="#"  class="marginAdvancedSearchLink" target="_top"><span>Newsletter</span></a>
                </div>
                <a class="margin-image" href="#" target="_top"></a>
                <a href="#"  class="marginAdvancedSearchLink"   target="_top"><span>Report</span></a>
                <a class="margin-image" href="#" target="_top"></a>
                <a href="#"  class="marginAdvancedSearchLink" target="_top"><span class="marginAdvancedSearchLinkText">research</span></a>
                <a class="margin-image" href="#" target="_top"></a><a href="#"  class="marginAdvancedSearchLink"  target="_top"><span>Sustainable</span></a>
                <a href="#"  class="marginAdvancedSearchLink"  target="_top"><span>Publications Overview</span></a> </div>
            </div>
          </div>-->
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
          <div class="cright "><span>ข้อมูลล่าสุด: <?php include "date_mod_press.php"; ?></span> <span>Copyright © Bayer Thai Co., Ltd.</span></div>
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
        <li><a href="contact.php">ติดต่อ</a></li>
		<li><a href="map.php">แผนที่</a></li>
        <li><a href="sitemap.php">Sitemap</a></li>
        <li><a href="<?php echo"../en/press_corperate.php?ID=$call_arti";?>" class="last">English</a></li>
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
<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../scripts/relaunch.js"></script>
<script src="../scripts/standard.js"></script>
<script>
	//add page specific JS here
</script>
</body></html>