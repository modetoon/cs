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
<title>Crop Calendar-Details <?php //echo "$topic_article";?> - Bayer</title>

<link rel="stylesheet" type="text/css" href="//shared.bayer.com/api/402/bayer.css"/>
<link rel="stylesheet" type="text/css" href="../styles/custom.css"/>
<script src="//shared.bayer.com/js/modernizr.js"></script>
<link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" /> 
</head>

<!--[if lt IE 9]>
<body class="subhm en lt-ie9"> 
<![endif]-->
<!--[if gt IE 8]><!-->
<body class="contnt crop en crop-calendar">
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
      <ul id="mega-menu" class="megamenu">

        <li class="n1"><a href="index.php">Home</a></li> 

        <?php //include "top_menu.php"; ?>
        
        <li class="n2">
          <a class="haschild" href="crp-content.php">Business Operations</a>
          <ul class="newsub">
            <li class="megaTsrBx">
              <h2 class="thdln">Business Operations</h2>
              <a href="crp-content.php"><img width="170" height="100" data-original="../img/top_menu/image_ar2015_284.jpg" alt="" src="../img/top_menu/image_ar2015_284.jpg" class="lazy"></a>
                <p>The activities of Bayer Thai are concentrated in three business subgroups: Bayer HealthCare (BHC), Bayer CropScience (BCS). Moreover, Bayer Thai also take care of an agency business representing third parties.</p>
                <div class="lnk"><a href="crp-content.php">Overview</a></div>
              </li>
              <li class="newlevel2">
                <ul>
                  <li><a href="crp-content.php">Crop Protections</a></li>
                  <li><a href="crp-content.php">Seeds</a></li>
                  <li><a href="crp-content.php">Environmental Science</a></li>
                </ul>
              </li>
            </ul>
          </li>

        <li class="n2">
          <a class="haschild" href="crp-product-list.php">Products</a>
          <ul class="newsub">
            <li class="megaTsrBx">
              <h2 class="thdln">Products</h2>
              <a href="crp-product-list.php"><img width="170" height="100" data-original="../img/top_menu/produkte_v1_300x176.jpg" alt="" src="../img/top_menu/produkte_v1_300x176.jpg" class="lazy"></a>
              <p>Bayer is a global enterprise with core competencies in the Life Science fields of health care and agriculture. </p>
              <div class="lnk"><a href="crp-product-list.php">Overview</a></div>
            </li>
            <li class="newlevel2">
              <ul>
                  <li class="haschild"><a href="crp-product-list.php">Fungicides</a>
                      <ul>
                        <li><a href="crp-product-details.php">Luna Experience</a></li>
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
                  <li class="haschild"><a href="crp-product-list.php">Herbicides</a>
                      <ul>
                        <li><a href="crp-product-details.php">Ronstar</a></li>
                        <li><a href="crp-product-details.php">Basta X</a></li>
                        <li><a href="crp-product-details.php">Tiller</a></li>
                        <li><a href="crp-product-details.php">Ricestar</a></li>
                        <li><a href="crp-product-details.php">Whip 7.5</a></li>
                        <li><a href="crp-product-details.php">Sunrice</a></li>
                        <li><a href="crp-product-details.php">Sencor</a></li>
                        <li><a href="crp-product-details.php">Balance flexx</a></li>
                        <li><a href="crp-product-details.php">Alion</a></li>
                      </ul>
                  </li>
                  <li class="haschild"><a href="crp-product-list.php">Insecticides</a>
                      <ul>
                        <li><a href="crp-product-details.php">Belt Expert</a></li>
                        <li><a href="crp-product-details.php">Alanto</a></li>
                        <li><a href="crp-product-details.php">Curbix</a></li>
                        <li><a href="crp-product-details.php">Provado</a></li>
                        <li><a href="crp-product-details.php">Decis</a></li>
                        <li><a href="crp-product-details.php">Politec 025 EC</a></li>
                        <li><a href="crp-product-details.php">Oberon</a></li>
                      </ul>
                  </li>
                  <li class="haschild"><a href="crp-product-list.php">Seeds</a>
                      <ul>
                        <li><a href="crp-product-details.php">Gaucho 70 WS</a></li>
                      </ul>
                  </li>
                  <li><a href="crp-product-list.php">Compendium</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="n2">
          <a class="haschild selected" href="crp-calendar-list.php">Crop Calendar</a>
          <ul class="newsub">
            <li class="megaTsrBx">
              <h2 class="thdln">Crop Calendar</h2>
              <a href="crp-calendar-list.php"><img width="170" height="100" data-original="../img/top_menu/quality_check_in_the_field-300x200.jpg" alt="" src="../img/top_menu/quality_check_in_the_field-300x200.jpg" class="lazy"></a>
              <p>Bayer is a global enterprise with core competencies in the Life Science fields of health care and agriculture. </p>
              <div class="lnk"><a href="crp-calendar-list.php">Overview</a></div>
            </li>
            <li class="newlevel2">
              <ul>
                  <li><a href="crp-calendar-details.php">Rice (Dry Direct Seeded Rice)</a></li>
                  <li><a href="crp-calendar-details.php">Rice (Pre-germinated Direct Seeded Rice)</a></li>
                  <li><a href="crp-calendar-details.php">Bulb Crop</a></li>
                  <li><a href="crp-calendar-details.php">Chili</a></li>
                  <li><a href="crp-calendar-details.php">Asparagus</a></li>
                  <li><a href="crp-calendar-details.php">Watermelon</a></li>
                  <li><a href="crp-calendar-details.php">Tomato</a></li>
                  <li><a href="crp-calendar-details.php">Orange</a></li>
                  <li><a href="crp-calendar-details.php">Cabbage</a></li>
                  <li><a href="crp-calendar-details.php">Cucumber</a></li>
                  <li><a href="crp-calendar-details.php">Roselle</a></li>
              </ul>
            </li>
            <li class="newlevel2">
              <ul>
                  <li><a href="crp-calendar-details.php">Longan</a></li>
                  <li><a href="crp-calendar-details.php">Durian</a></li>
                  <li><a href="crp-calendar-details.php">Grape</a></li>
                  <li><a href="crp-calendar-details.php">Mango</a></li>
                  <li><a href="crp-calendar-details.php">Orchid</a></li>
                  <li><a href="crp-calendar-details.php">Pineapple</a></li>
                  <li><a href="crp-calendar-details.php">Potato</a></li>
                  <li><a href="crp-calendar-details.php">Negrito</a></li>
                  <li><a href="crp-calendar-details.php">Corn</a></li>
                  <li><a href="crp-calendar-details.php">Sugar cane</a></li>
                  <li><a href="crp-calendar-details.php">Soybean</a></li>
              </ul>
            </li>            
          </ul>
        </li>

        <li class="n2">
          <a class="haschild" href="crp-research-list.php">Production & Research</a>
          <ul class="newsub">
            <li class="megaTsrBx">
              <h2 class="thdln">Production & Research</h2>
              <a href="crp-research-list.php"><img width="170" height="100" data-original="../img/top_menu/leaves_under_microscope-300x200.jpg" alt="" src="../img/top_menu/leaves_under_microscope-300x200.jpg" class="lazy"></a>
              <p>Bayer is a global enterprise with core competencies in the Life Science fields of health care and agriculture. </p>
              <div class="lnk"><a href="crp-research-list.php">Overview</a></div>
            </li>
            <li class="newlevel2">
              <ul>
                  <li><a href="crp-research.php">Crop Science Bangpoo production Site</a></li>
                  <li><a href="crp-research.php">Research Center</a></li>
              </ul>
            </li>
          </ul>
        </li>


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
             
            <?php //include"top_sup_menu.php";?>

            <li><a href="index.php">Home</a></li>
            <li><a title="Crop Calendar" href="crp-calendar-details.php">Crop Calendar</a></li>
            <li class="last"><a title="Soybean" href="crp-calendar-details.php">Soybean</a></li>           

          </ul>
          <nav class="servicenav">
            <ul class="nobulls">
              <li><a href="#print">Print</a></li>
              <li><a href="#share" class="last">Share</a></li>
            </ul>
          </nav>
        </div>
        <section>
            
            <nav id="lefthand" class="unit size-col-a lfthnd">
              <ul class="lfthndnavi">

              <?php //include "left_menu.php"; ?>

              <li><a href="crp-calendar-details.php">Overview</a></li>
              <li><a href="crp-calendar-details.php"> Rice (Dry Direct Seeded Rice)</a></li>
              <li><a href="crp-calendar-details.php"> Rice (Pre-germinated Direct Seeded Rice)</a></li>         
              <li><a href="crp-calendar-details.php"> Bulb Crop</a></li>         
              <li><a href="crp-calendar-details.php"> Chili</a></li>
              <li><a href="crp-calendar-details.php"> Asparagus</a></li>         
              <li><a href="crp-calendar-details.php"> Watermelon</a></li>         
              <li><a href="crp-calendar-details.php"> Tomato</a></li>         
              <li><a href="crp-calendar-details.php"> Orange</a></li>         
              <li><a href="crp-calendar-details.php"> Cabbage</a></li>         
              <li><a href="crp-calendar-details.php"> Cucumber</a></li>         
              <li><a href="crp-calendar-details.php"> Roselle</a></li>         
              <li><a href="crp-calendar-details.php"> Longan</a></li>         
              <li><a href="crp-calendar-details.php"> Durian</a></li>         
              <li><a href="crp-calendar-details.php"> Grape</a></li>         
              <li><a href="crp-calendar-details.php"> Mango</a></li>         
              <li><a href="crp-calendar-details.php"> Orchid</a></li>
              <li><a href="crp-calendar-details.php"> Pineapple</a></li>
              <li><a href="crp-calendar-details.php"> Potato</a></li>
              <li><a href="crp-calendar-details.php"> Negrito</a></li>
              <li><a href="crp-calendar-details.php"> Corn</a></li>
              <li><a href="crp-calendar-details.php"> Sugar cane</a></li>
              <li class="selected"><a class="selected" href="crp-calendar-details.php"> Soybean</a></li>       

              </ul>
            </nav>
            <!--##/nosearch##--> 
            
            <!--##/center##--> 
            <div class="unit size-col-d">
               <?php
        				//include "../config/connect.php";
        		
        				//$sql="SELECT *  FROM `tb_article` WHERE menu_article='$call_arti'";
        				//$result=mysql_db_query($dbname,$sql);
        				//while($rs=mysql_fetch_array($result)) {
        				//$content_article=$rs[content_article];
        				//$show_rmenu=$rs[show_rmenu];
        				//$position_rmenu=$rs[position_rmenu];
        				//}
        				//echo $content_article; 
        				//mysql_close();
			         ?> 
              
              <div class="topline">Crop Calendar</div>
              <h1>Soybean</h1>

                         

                  <table class="table-calendar-hd kborder2">
                    <thead>
                      <tr>
                        <th class="title">ระยะการเจริญเติบโต ผลิตภัณฑ์ที่แนะนำ</th>
                        <th><img alt="" src="../img/crop-calendar/Soybean_Hd.jpg"></th>
                        <th class="title-qu1">อัตราการใช้ต่อน้ำ 20 ลิตร</th>
                      </tr>
                    </thead> 

                    <tbody>
                      <tr>
                        <td colspan="3" class="spacer-td"></td>
                      </tr>

                      <tr>
                        <td class="title-logo"><img alt="" src="../img/crop-calendar/prd-kao-show.jpg"></td>
                        <td class="blue-c"><div class="percent-blue" style="width:18%"><span>แมลงปากดูด</span></div></td>
                        <td class="title-qu2">5 กรัมต่อเมล็ด 1 กิโลกรัม</td>
                      </tr>

                      <tr>
                        <td class="title-logo"><img alt="" src="../img/crop-calendar/prd-pro-va-do.jpg"></td>
                        <td><div class="percent-blue" style="margin-left: 18%; width: 25%;"><span>เพลี้ยอ่อน/เพลี้ยจั๊กจั่น/เพลี้ยไฟ</span></div></td>
                        <td class="title-qu2">4 กรัม</td>
                      </tr>

                      <tr>
                        <td class="title-logo"><img alt="" src="../img/crop-calendar/prd-pro-va-do.jpg"></td>
                        <td class="blue-c"><div class="percent-blue" style="margin-left: 18%; width: 25%;"><span>แมลงหวี่ขาว</span></div></td>
                        <td class="title-qu2">6 กรัม</td>
                      </tr> 

                      <tr>
                        <td class="title-logo"><img alt="" src="../img/crop-calendar/prd-seg-kor.jpg"></td>
                        <td><div class="percent-orange" style="width:18%"><span>คุมวัชพืชทั่วไป</span></div></td>
                        <td class="title-qu2">120 กรัม ต่อไร่</td>
                      </tr>

                      <tr>
                        <td class="title-logo"><img alt="" src="../img/crop-calendar/prd-bi-po-lan.jpg"></td>
                        <td class="blue-c"><div class="percent-violet" style="width:50%"><span>เร่งการเจริญเติบโต</span></div></td>
                        <td class="title-qu2">50 ซีซี</td>
                      </tr>

                    </tbody>

                  </table>                            

                  <table class="table-calendar-hd kborder2">
                    <tbody>
                      <tr>
                        <td colspan="3" class="spacer-td"></td>
                      </tr>                        
                      <tr>
                        <td class="title-logo"></td>
                        <td><img alt="" src="../img/crop-calendar/scale-bottom.png"></td>
                        <td class="title-qu2"></td>
                      </tr>                                                                                                                             
                    </tbody>
                  </table>  
    
              <div class="spacer"></div>

            </div>
            
            <aside class="unit size-col-a margi">
      			
            <?php //include "right_menu.php"; ?>

                <div class="margiblock">
                  <h1 class="h5">Quicklinks</h1>
                  <hr>
                  <ul class="mlnk">
                    <li><a target="_blank" href="/img/upload/source/download/supplier-code-of-conduct-englisch.pdf">Supplier Code of Conduct</a></li>
                    <li><a target="_blank" href="/img/upload/source/download/Bayer Thais General Purchase Conditions 2006 Rev 03 (2).pdf">Conditions of Purchase of Bayer Thai </a></li>
                  </ul>
                </div>

                <div class="margiblock socialmediablock">
                    <h1 class="h5">Follow us</h1>
                    <hr>
                    <ul class="nvgtn socialmedia">
                      <li><a data-original-title="Follow Us on Facebook" class="ir fb" target="_blank" data-rel="tooltip" href="http://www.facebook.com/Bayer">Facebook</a></li>
                      <li><a data-original-title="Follow Us on Twitter" class="ir tw" target="_blank" data-rel="tooltip" href="http://twitter.com/bayer">Twitter</a></li>
                      <li><a class="ir yt" target="_blank" data-rel="tooltip" title="Follow Us on YouTube" href="http://www.youtube.com/user/BayerTVinternational">YouTube</a></li>
                      <li><a data-original-title="Follow Us on LinkedIn" class="ir li" target="_blank" data-rel="tooltip" href="http://www.linkedin.com/company/bayer">LinkedIn</a></li>
                      <li><a data-placement="left" class="ir ig" target="_blank" data-rel="tooltip" title="Follow Us on Instagram" href="http://instagram.com/bayerofficial">Instagram</a></li>
                      <li><a data-original-title="RSS Feed" data-placement="left" class="ir rss" target="_blank" data-rel="tooltip" href="http://www.bayer.com/en/rss.aspx">RSS</a></li>
                    </ul>
                </div>                          

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
            <?php include "legal_menu.php"; ?>         
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
        <li class="hide-lt1024"><a href="sitemap.php">Sitemap</a></li>
        <li><a href="<?php echo"../th/subhomepage.php?ID=$call_arti";?>" class="last">Thai</a></li>
      </ul>
    </nav>
    <!-- /Support Navigation --> 
  </div>

  <nav id="fatfooter">
    <div class="shdw"></div>
    <ul class="nvgtn fatfooter">
      <?php include "btm_menu.php"; ?>
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