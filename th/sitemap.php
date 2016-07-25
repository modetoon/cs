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
<!--Version 2.1-->
<title>Sitemap - Bayer</title>


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
      <!--[if lt IE 9]><img src="../img/header/Naming_Thailand_thai_995.png" alt="Bayer: Science For A Better Life" class="namingarea"/><![endif]-->
      <!--[if gt IE 8]><!-->
      <img src="../img/header/Naming_Thailand_thai_995-460.svg" class="namingarea" alt="Bayer: Science For A Better Life"/>
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
        <li class="mlang"><a href="../en/sitemap.php" class="mlang">EN</a></li>
      </ul>
    </nav>
     <nav role="navigation" class="navigation">
      <ul id="mega-menu" class="megamenu">
      	<!--<li rel="8142" class="n1 selected&#xA;"><a href="/bayer/index.php">Home</a></li>-->
        <li rel="8142" class="n1 selected&#xA;"><a href="index.php">หน้าหลัก</a></li>
        
        <?php
	include "top_menu_index.php";
	?>
    	<?php
			include "../config/connect.php";
			$sql27="select * from tb_menu_th WHERE name_menu='Press'";
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
             <li><a href="index.php">หน้าหลัก</a></li>
            <li class="last"><a href="sitemap.php" class="last">Sitemap</a></li>
            <?php 
			//include"top_sup_menu.php";
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
            
            <!--##/nosearch##--> 
            
              <div class="line sitemap">          
<h1>Sitemap</h1>

  <?php
	include "../config/connect.php";
	
	$sql="select * from tb_menu_th WHERE public_menu=1 order by menu_sequence ASC";
	$result=mysql_db_query($dbname,$sql);
	while($rs=mysql_fetch_array($result)) {
			$s1_id_menu=$rs[id_menu] ;
			$s1_name_menu=$rs[name_menu] ;
			$s1_level=$rs[level] ;
			
			if ($s1_name_menu!=Press){
			
			$sql14="select id_menu from tb_menu_th WHERE sub_of='$s1_id_menu' AND name_menu='Overview';";
			$result14=mysql_db_query($dbname,$sql14);
			while($rs14=mysql_fetch_array($result14)) {
			$s14_id_menu=$rs14[id_menu] ;
			}
			
			if ($s1_level==1){
			///////////////////////////////////// Main Menu
			echo '<ul class="nobulls unit size1of4">
  <li class="" style="display:none">
    <a href="/en/Homepage.aspx">Home </a>
  </li>
  <li class="grp"><a href="subhomepage.php?ID='.$s14_id_menu.'">'.$s1_name_menu.'</a>';
			
			$sql5="select * from tb_menu_th WHERE public_menu=1 order by menu_sequence ASC" ;
			$result51=mysql_db_query($dbname,$sql5);
			$result52=mysql_db_query($dbname,$sql5);
				echo '<ul>';
				////////////////////////////////////////////////// Start LV1 loop
				while($rs5=mysql_fetch_array($result51)) {
					$s2_id_menu=$rs5[id_menu] ;
					$s2_sub_of=$rs5[sub_of] ;
					$s2_name_menu=$rs5[name_menu] ;
					if($s2_sub_of==$s1_id_menu && $s2_name_menu==Overview){
						////////////////////////////////////////////////// Sub LV1 overview
						echo '<li>
        <a href="subhomepage.php?ID='.$s2_id_menu.'">Overview</a>';
					}
				}
				while($rs5=mysql_fetch_array($result52)) {
					$s2_id_menu=$rs5[id_menu] ;
					$s2_sub_of=$rs5[sub_of] ;
					$s2_name_menu=$rs5[name_menu] ;
					$s2_level=$rs5[level] ;
					$s2_have_sub=$rs5[have_sub] ;
					if($s2_sub_of==$s1_id_menu && $s2_name_menu!=Overview){
						////////////////////////////////////////////////// Sub LV1
						if($s2_have_sub==1){
						echo '<li>
            <a href="contentpage.php?ID='.$s2_id_menu.'">'.$s2_name_menu.'</a>';
						
						$sql6="select * from tb_menu_th WHERE public_menu=1 order by menu_sequence ASC" ;
						$result61=mysql_db_query($dbname,$sql6);
						$result62=mysql_db_query($dbname,$sql6);
						echo '<ul>';
						////////////////////////////////////////////////// Start LV2 loop
						while($rs6=mysql_fetch_array($result61)) {
							$s3_id_menu=$rs6[id_menu] ;
							$s3_sub_of=$rs6[sub_of] ;
							$s3_name_menu=$rs6[name_menu] ;
							if($s3_sub_of==$s2_id_menu && $s3_name_menu==Overview){
								////////////////////////////////////////////////// Sub LV2 overview
								echo '<li>
            <a href="subhomepage.php?ID='.$s3_id_menu.'">Overview</a>';
							}
						}
						while($rs6=mysql_fetch_array($result62)) {
							$s3_id_menu=$rs6[id_menu] ;
							$s3_sub_of=$rs6[sub_of] ;
							$s3_name_menu=$rs6[name_menu] ;
							$s3_level=$rs6[level] ;
							$s3_have_sub=$rs6[have_sub] ;
							if($s3_sub_of==$s2_id_menu && $s3_name_menu!=Overview){
								////////////////////////////////////////////////// Sub LV2
								if($s3_have_sub==1){
									echo '<li>
            <a href="contentpage.php?ID='.$s3_id_menu.'">'.$s3_name_menu.'</a>';
								
								$sql7="select * from tb_menu_th WHERE public_menu=1 order by menu_sequence ASC" ;
								$result71=mysql_db_query($dbname,$sql7);
								$result72=mysql_db_query($dbname,$sql7);
								echo'<ul>';
								////////////////////////////////////////////////// Start LV3 loop
								while($rs7=mysql_fetch_array($result71)) {
									$s4_id_menu=$rs7[id_menu] ;
									$s4_sub_of=$rs7[sub_of] ;
									$s4_name_menu=$rs7[name_menu] ;
									if($s4_sub_of==$s3_id_menu && $s4_name_menu==Overview){
										////////////////////////////////////////////////// Sub LV3 overview
										echo'<li>
            <a href="subhomepage.php?ID='.$s4_id_menu.'">Overview</a></li>';
									}
								}
								
								while($rs7=mysql_fetch_array($result72)) {
									$s4_id_menu=$rs7[id_menu] ;
									$s4_sub_of=$rs7[sub_of] ;
									$s4_name_menu=$rs7[name_menu] ;
									$s4_level=$rs7[level] ;
									if($s4_sub_of==$s3_id_menu && $s4_name_menu!=Overview){
										////////////////////////////////////////////////// Sub LV3
										echo '<li>
        <a href="contentpage.php?ID='.$s4_id_menu.'">'.$s4_name_menu.'</a></li>';
									}
								}
								////////////////////////////////////////////////// End LV3 loop
								echo '</ul>';
								}else{
									echo '<li><a href="contentpage.php?ID='.$s3_id_menu.'">'.$s3_name_menu.'</a></li>';
								}
							}
						}
						////////////////////////////////////////////////// End LV2 loop
						echo '</ul></li>';
						}else{
							echo '<li><a href="contentpage.php?ID='.$s2_id_menu.'">'.$s2_name_menu.'</a></li>';
						}
					}
				}////////////////////////////////////////////////// End LV1 loop
			echo '</ul></li></ul>';
			}
		}
		
	}
	mysql_close();
?>   
              <div class="spacer"></div>

</div>


            <aside class="unit size-col-a margi">
      			<?php include "right_menu.php"; ?>
            </aside>

        </section>
      <footer id="page">
      
        <div class="copyright">
          <div class="cright "><span>ข้อมูลล่าสุด: <?php include "date_mod.php"; ?></span> <span>Copyright © Bayer Thai Co., Ltd.</span></div>
          
          <ul class="pagefunctions nvgtn">
            <li><a href="#print" class="icnPrint">Print</a></li>
            <li><a href="#share" class="icnShare">Share</a></li>
            <li class="onlymobile"><a href="contact.php" class="icnContact">ติดต่อ</a></li>
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
        <li><a href="contact.php">ติดต่อ</a></li>
        <li><a href="map.php">แผนที่</a></li>
        <li><a href="sitemap.php">Sitemap</a></li>
        <li><a href="../en/sitemap.php" class="last">English</a></li>
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