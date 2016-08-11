<?php
$base_url = base_url();
$base_url = str_replace('/cropscience','',$base_url);
?><!doctype html>
<html class="no-js rwd" lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="description" content="<?php echo $meta_description;?>">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:image" content="">
<meta name="keywords" content="<?php echo $meta_keyword;?>">
<meta name="abstract" content="">
<meta name="author" content="">
<meta name="publisher" content="">
<meta name="robots" content="Index,Follow">
<meta name="revisit-after" content="14 days">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<title><?php echo $page_title;?></title>

<link rel="stylesheet" type="text/css" href="//shared.bayer.com/api/402/bayer.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>styles/custom.css"/>
<script src="//shared.bayer.com/js/modernizr.js"></script>
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $base_url;?>favicon.ico" /> 
</head>

<!--[if lt IE 9]>
<body class="subhm en lt-ie9"> 
<![endif]-->
<!--[if gt IE 8]><!-->
<body class="contnt crop en">
<!--<![endif]-->

<!--##nosearch##-->
<div class="wrapper">
  <div class="page">
    <header id="header">
      <!--[if lt IE 9]><img src="../img/header/naming-area.png" alt="Bayer: Science For A Better Life" class="namingarea"/><![endif]-->
      <!--[if gt IE 8]><!-->
      <img src="<?php echo $base_url;?>img/header/naming-area.svg" class="namingarea" alt="Bayer: Science For A Better Life"/>
      <!--<![endif]-->

      <a href="http://www.bayer.com" title="To the Bayer Group Portal" class="logo">
      	<!--[if lt IE 9]><img src="//shared.bayer.com/img/logo.png" title="To the Bayer Group Portal" alt="The Bayer Cross"/>
        <![endif]--><!--[if gt IE 8]><!-->
         <object type="image/svg+xml" data="//shared.bayer.com/img/logo.svg"></object>
        <!--<![endif]-->
      </a>
    </header>

    <?php echo $top_menu;?>

    <!--##/nosearch##-->
      <div role="main" class="main">
        <div class="service">
          <ul class="breadcrumb">
             

            <li><a href="index.php">Home</a></li>
            <li><a title="Products" href="crp-product-list.php">Products</a></li>
            <li><a title="Fungicides" href="crp-product-list.php">Fungicides</a></li>
            <li class="last"><a title="Luna Experience" href="crp-product-details.php">Luna Experience</a></li>           

          </ul>
          <nav class="servicenav">
            <ul class="nobulls">
              <li><a href="#print">Print</a></li>
              <li><a href="#share" class="last">Share</a></li>
            </ul>
          </nav>
        </div>
        <section>
            
			<?php echo $left_menu_content;?>

            <!-- <nav id="lefthand" class="unit size-col-a lfthnd">
              <ul class="lfthndnavi">
					  <li><a href="crp-product-list.php">Overview</a></li>
					  <li class="selected"><a class="selected" href="crp-product-details.php"> Fungicides</a>
								  <ul>
									<li class="selected"><a class="sf-with-ul selected" href="crp-product-details.php">Luna Experience</a></li>
									<li><a href="crp-product-details.php">Luna Sensation</a></li>
									<li><a href="crp-product-details.php">Antracol</a></li>
									<li><a href="crp-product-details.php">Nativo 75 WG</a></li>
									<li><a href="crp-product-details.php">Profiler</a></li>
									<li><a href="crp-product-details.php">Flint</a></li>
									<li><a href="crp-product-details.php">Folicur 250 EW</a></li>
									<li><a href="crp-product-details.php">Folicur 430 SC</a></li>
									<li><a href="crp-product-details.php">Invento 66.8 WP</a></li>
									<li><a href="crp-product-details.php">Aliette 80 WG</a></li>
									<li><a href="crp-product-details.php">Ethrel 48 PGR</a></li>
									<li><a href="crp-product-details.php">Ethrel 10 LS</a></li>
								  </ul>
					  </li>
					  <li class="haschildren"><a href="crp-product-details.php"> Herbicides</a></li>
					  <li class="haschildren"><a href="crp-product-details.php"> Insecticides</a></li>         
					  <li class="haschildren"><a href="crp-product-details.php"> Seeds</a></li>         
					  <li><a href="crp-product-details.php"> Compendium</a></li>        
              </ul>
            </nav> -->