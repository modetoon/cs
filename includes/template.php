<?php 	session_start() ;	define("ROOT_DIR", "/KTPBOOK/") ;
require_once("function.php");  	 
  ?>
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
<title>Homepage - Bayer</title>

<link rel="stylesheet" type="text/css" href="styles/global/standard.css"/>
<script src="style/modernizr.js"></script>
<link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" /> 
</head>

<!--[if lt IE 7]>
<body class="homepage en lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
<body class="homepage en lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
<body class="homepage en lt-ie9"> 
<![endif]-->
<!--[if gt IE 8]><!-->
<body class="homepage en">
<!--<![endif]-->

<!--##nosearch##-->
<div class="wrapper">
  <div class="page">
    <header id="header">
      <!--[if lt IE 9]><img src="img/header/naming-area.png" alt="Bayer: Science For A Better Life" class="namingarea"/><![endif]-->
      <!--[if gt IE 8]><!-->
      <img src="img/header/naming-area.svg" class="namingarea" alt="Bayer: Science For A Better Life"/>
      <!--[endif]-->

      <a href="http://www.bayer.com" title="To the Bayer Group Portal" class="logo">
      	<!--[if lt IE 9]><img src="img/header/logo.png" title="To the Bayer Group Portal" alt="The Bayer Cross"/>
        <![endif]--><!--[if gt IE 8]><!-->
         <object type="image/svg+xml" data="img/header/logo.svg"></object>
        <!--<![endif]-->
      </a>
    </header>
    <nav class="mobilenav">
      <ul class="nobulls">
        <li><a href="#nav" class="mnav">Menu</a></li>
        <li><a href="#search" class="msearch">Search</a></li>
        <li><a href="#contact" class="mcontact">Contact</a></li>
        <li class="mlang"><a href="#language" class="mlang">DE</a></li>
      </ul>
    </nav>





<?php function show_menu() { ?>
    <!--##/nosearch##-->
    <div role="main" class="main">
      <div class="service">
        <ul class="breadcrumb">
          <li class="last"><a title="Home" href="#home">Home</a></li>
        </ul>
        <nav class="servicenav">
          <ul class="nobulls">
            <li><a href="#print">Print</a></li>
            <li><a href="#share" class="last">Share</a></li>
          </ul>
        </nav>
      </div>
      <section>        <?php  } 	?>













<?php	function show_footer( ) { ?>   
      <footer id="page">
        <div class="copyright">
          <div class="cright "><span>Last updated: Month 7, 2013</span> <span>Copyright © Bayer AG</span></div>
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
            <li><a href="#conditions-of-use" title="Conditions of Use">Conditions of Use</a></li>
            <li><a href="#privacy-statement" title="Privacy Statement">Privacy Statement</a></li>
            <li><a href="#imprint" title="Imprint">Imprint</a></li>
            <li class="last"><a href="#technical-details" title="Technical Details">Technical Details</a></li>
          </ul>
        </nav>
      </footer>
    </div>
    
    <!--##nosearch##--> 
    <!-- Support Navigation -->
    <nav class="meta">
      <ul class="nobulls">
        <li><a href="#contact">Contact us</a></li>
        <li><a href="#sitemap">Sitemap</a></li>
        <li><a href="#language" class="last">other language</a></li>
        <li><a href="http://bayer.com" class="last lnk">Bayer Group</a></li>
      </ul>
    </nav>
    <!-- /Support Navigation --> 
  </div>

  <nav id="fatfooter">
    <div class="shdw"></div>
    <ul class="nvgtn fatfooter">
      <li class="fctgry unit n2"><a href="#nowhere" class="fhead">About</a>
        <ul>
          <li><a href="#nowhere">Aliquam Tincidunt</a> </li>
          <li><a href="#nowhere">Vestibulum & Auctor</a></li>
          <li><a href="#nowhere">Dapibusneque</a></li>
        </ul>
      </li>
      <li class="fctgry unit n3"><a href="#nowhere" class="fhead">Loremipsum</a>
        <ul>
          <li><a href="#nowhere">Morbi</a></li>
          <li><a href="#nowhere">Aliquam & Pellentesque</a></li>
          <li class="lst"><a href="#nowhere">Vestibulum Auctor</a></li>
        </ul>
      </li>
      <li class="fctgry unit n4"><a href="#nowhere" class="fhead">Consectetur</a>
        <ul>
          <li><a href="#nowhere">Malesuada Fames</a> </li>
          <li><a href="#nowhere">Commodo & Sodales</a></li>
          <li><a href="#nowhere">Tortor neque</a></li>
        </ul>
      </li>
      <li class="fctgry unit n5"><a href="#nowhere" class="fhead">Faucibus</a> </li>
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

<script src="http://www.bayer.com/scripts/4/jquery.jquery-ui.min.js"></script>
<script src="scripts/global/standard.js"></script>

<script>
Modernizr.load([{
  // share price
	load: 'http://www.bayer.com/scripts/4/shareprice.js',
	callback: function (url, result, key) {
		$('#shareprice').bayerSharePrice({lang: 'en'});
	}
}]);

	//add page specific JS here
</script>
</body>
</html>
<?php } ?>  