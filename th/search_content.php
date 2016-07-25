<?php
	header ("Last-Modified: " . gmdate ("D, d M Y H:i:s") . " GMT");
	header ("Pragma: no-cache");
	header ("Cache: no-cache");

	$call_arti=$_GET[ID];
	$viewstate=$_POST[suchfeld2];
	$ccha = strlen($viewstate)
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
<title>ค้นหา - Bayer</title>


<link rel="stylesheet" type="text/css" href="../styles/relaunch.css"/>
<link rel="stylesheet" type="text/css" href="//shared.bayer.com/api/bayer.css"/>
<script src="../scripts/modernizr.js"></script>
<script src="//shared.bayer.com/js/modernizr.js"></script>
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
        <li><a href="#search" class="msearch">ค้นหา</a></li>
        <li><a href="contact.php" class="mcontact">ติดต่อ</a></li>
        <li class="mlang"><a href="<?php echo"../en/search_content.php?ID=$call_arti";?>" class="mlang">EN</a></li>
      </ul>
    </nav>
     <nav role="navigation" class="navigation">
      <ul id="mega-menu" class="megamenu">
      	<!--<li rel="8142" class="n1 selected&#xA;"><a href="/bayer/index.php">Home</a></li>-->
        <li rel="8142" class="n1 selected&#xA;"><a href="index.php">หน้าหลัก</a></li>
        <?php
	include "top_menu_search.php";
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
            <li class="selected"><a href="#nowhere" class="selected">ค้นหา</a></li>
			<?php
			
			//include "left_menu_press.php";
			?>
          </ul>
        </nav>
        <!--##/nosearch##-->
        <div class="unit size-col-d">
          <div class="margin">
            <div class="headline_wrap">
              <h1>
              ค้นหา
              </h1>
            </div>
            				<!--<input type="hidden" value="Englisch" name="chkEnglish"/>-->
			<div class="control-group">
                <label class="h3" for="websites" id="Labelwebsites">ป้อนสิ่งที่คุณต้องการค้นหาในเว็บไซต์ไบเออร์ ประเทศไทย</label>
              <div>
				<div class="spacer-ten"></div>
                <form action="search_content.php" method="post" >
				<input type="search" class="input-large" id="suchfeld" name="suchfeld2" id="searchfield2"/>
                <button style="margin-left:7px;" type="submit" class="btn btn-primary">ค้นหา</button>
                </form>
              <div class="clear"></div>
           </div>
            <div class="Content"></div>
            <div class="Content">
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
              </div>-->
                  <?php
	$chkpage=$_GET[chkpage];
	include "../config/connect.php";
	///////////////// Pagination //////////////////////
	///////////////////////////////////////////////////
    ?>
              <div class="viewList">
                <div class="NewsViewEntryLine">&nbsp;</div>
                <div class="clear">
                  <?php
	$sql2="SELECT *  FROM `tb_article_th` WHERE topic_article LIKE '%$viewstate%' order by id_article DESC";
	$result2=mysql_db_query($dbname,$sql2);
	$chkshow=0;
	$countsearch=0;
	$carticle=0;
	$keeparticle=array();
	$countlegal=0;
	$repeat=0;
	$showresult=0;
	$firstcha=0;
	while($rs=mysql_fetch_array($result2)) {
		$chkshow++;
		$menu_article=$rs[menu_article];
		$topic_article=$rs[topic_article];
		$content_article=$rs[content_article];
		$demo_press_content=strip_tags($content_article);
		$firstpos = strripos($demo_press_content, $viewstate);
		if ($firstpos>50){
			$firstpos = $firstpos-50;
			$chkfc = $firstpos;
			$firstcha = substr($demo_press_content, $chkfc, 1);
			do{
				$chkfc++;
				$firstcha = substr($demo_press_content, $chkfc, 1);
				$firstpos = $chkfc;
			}while($firstcha!=' ');
		}else{
			$firstpos = 0;
		}
		$lastpos = $firstpos+120;
		$demo_press_content=substr($demo_press_content, $firstpos, $lastpos);
		$demo_press_content=str_ireplace($viewstate,"<b>".$viewstate."</b>",$demo_press_content);
		$demo_press_content=substr_replace($demo_press_content,".....",120);
		/*if ($chkshow >= $chkpage2*10-9 && $chkshow <= $chkpage2*10){*/
		if ($menu_article!='0'){
			if($topic_article!='แผนที่'){
				$sql4="SELECT *  FROM `tb_legal_th` WHERE id_article = '$menu_article'";
				$result4=mysql_db_query($dbname,$sql4);
				while($cs=mysql_fetch_array($result4)) {
					$countlegal++;
				}
				$keeparticle[$carticle]=$menu_article;
				$carticle++;
			if ($countlegal>0){
				$showresult++;
				echo '<div class="clear"><p>
		<a class="NewsViewEntryTopline" href="contentpage_c.php?ID='.$menu_article.'">'.$topic_article.'</a><br />
				<a class="NewsViewEntryUnderline" href="contentpage_c.php?ID='.$menu_article.'">'.$demo_press_content.'</a>
				<a href="contentpage_c.php?ID='.$menu_article.'"><span class="more">more</span></a></p></div><div class="NewsViewEntryLine">&nbsp;</div>'; 
			}else{
				$sql5="SELECT *  FROM `tb_menu_th` WHERE id_menu = '$menu_article'";
				$result5=mysql_db_query($dbname,$sql5);
				while($cs5=mysql_fetch_array($result5)) {
					$chkpublic_menu=$rs5[public_menu];
				}
				if ($chkpublic_menu==1){
					if(stripos($topic_article, 'ภาพรวม')!==false){
						echo '<div class="clear"><p>
		<a class="NewsViewEntryTopline" href="subhomepage.php?ID='.$menu_article.'">'.$topic_article.'</a><br />
		<a class="NewsViewEntryUnderline" href="subhomepage.php?ID='.$menu_article.'">'.$demo_press_content.'</a>
		<a href="subhomepage.php?ID='.$menu_article.'"><span class="more">more</span></a></p></div><div class="NewsViewEntryLine">&nbsp;</div>'; 
					}else{
						echo '<div class="clear"><p>
		<a class="NewsViewEntryTopline" href="contentpage.php?ID='.$menu_article.'">'.$topic_article.'</a><br />
		<a class="NewsViewEntryUnderline" href="contentpage.php?ID='.$menu_article.'">'.$demo_press_content.'</a>
		<a href="contentpage.php?ID='.$menu_article.'"><span class="more">more</span></a></p></div><div class="NewsViewEntryLine">&nbsp;</div>'; 
					}
					$showresult++;
				}
			}
			}
			$countlegal=0;
	}
	}
	////////////////////////
	$sql3="SELECT *  FROM `tb_article_th` WHERE content_article LIKE '%$viewstate%' order by id_article DESC";
	$result3=mysql_db_query($dbname,$sql3);
	while($rs3=mysql_fetch_array($result3)) {
		$menu_article=$rs3[menu_article];
		$topic_article=$rs3[topic_article];
		$content_article=$rs3[content_article];
		$demo_press_content=strip_tags($content_article);
		$firstpos = strripos($demo_press_content, $viewstate);
		if ($firstpos>50){
			$firstpos = $firstpos-50;
			$chkfc = $firstpos;
			$firstcha = substr($demo_press_content, $chkfc, 1);
			do{
				$chkfc++;
				$firstcha = substr($demo_press_content, $chkfc, 1);
				$firstpos = $chkfc;
			}while($firstcha!=' ');
		}else{
			$firstpos = 0;
		}
		$lastpos = $firstpos+120;
		$demo_press_content=substr($demo_press_content, $firstpos, $lastpos);
		$demo_press_content=str_ireplace($viewstate,"<b>".$viewstate."</b>",$demo_press_content);
		$demo_press_content=substr_replace($demo_press_content,".....",120);
		
	if ($menu_article!='0'){
		if($topic_article!='แผนที่'){
				$sql6="SELECT *  FROM `tb_legal_th` WHERE id_article = '$menu_article'";
				$result6=mysql_db_query($dbname,$sql6);
				while($cs=mysql_fetch_array($result6)) {
					$countlegal++;
				}
		for ($i = 0; $i < $carticle; $i++){
			if ($keeparticle[$i]==$menu_article){
			$repeat++;
			}
		}
		if ($repeat==0){
		if ($countlegal>0){
			$showresult++;
			echo '<div class="clear"><p>
		<a class="NewsViewEntryTopline" href="contentpage_c.php?ID='.$menu_article.'">'.$topic_article.'</a><br />
		<a class="NewsViewEntryUnderline" href="contentpage_c.php?ID='.$menu_article.'">'.$demo_press_content.'</a>
		<a href="contentpage_c.php?ID='.$menu_article.'"><span class="more">more</span></a></p></div><div class="NewsViewEntryLine">&nbsp;</div>'; 
			}else{
				if(stripos($topic_article, 'ภาพรวม')!==false){
						echo '<div class="clear"><p>
		<a class="NewsViewEntryTopline" href="subhomepage.php?ID='.$menu_article.'">'.$topic_article.'</a><br />
		<a class="NewsViewEntryUnderline" href="subhomepage.php?ID='.$menu_article.'">'.$demo_press_content.'</a>
		<a href="subhomepage.php?ID='.$menu_article.'"><span class="more">more</span></a></p></div><div class="NewsViewEntryLine">&nbsp;</div>'; 
					}else{
						echo '<div class="clear"><p>
		<a class="NewsViewEntryTopline" href="contentpage.php?ID='.$menu_article.'">'.$topic_article.'</a><br />
		<a class="NewsViewEntryUnderline" href="contentpage.php?ID='.$menu_article.'">'.$demo_press_content.'</a>
		<a href="contentpage.php?ID='.$menu_article.'"><span class="more">more</span></a></p></div><div class="NewsViewEntryLine">&nbsp;</div>'; 
					}
					$showresult++;
		}
		$countlegal=0;
		}
		$repeat=0;
		}
		}
		
		}
	//////////////////////////////////////	
	$cpress=0;
	$keeppress=array();
	$sql5="SELECT *  FROM `tb_press_th` WHERE topline LIKE '%$viewstate%' order by id_press DESC";
	$result5=mysql_db_query($dbname,$sql5);
	while($rs5=mysql_fetch_array($result5)) {
		$id_press=$rs5[id_press];
		$topline=$rs5[topline];
		$press_content=$rs5[press_content];
		$demo_press_content=strip_tags($press_content);
		$firstpos = strripos($demo_press_content, $viewstate);
		if ($firstpos>50){
			$firstpos = $firstpos-50;
			$chkfc = $firstpos;
			$firstcha = substr($demo_press_content, $chkfc, 1);
			do{
				$chkfc++;
				$firstcha = substr($demo_press_content, $chkfc, 1);
				$firstpos = $chkfc;
			}while($firstcha!=' ');
		}else{
			$firstpos = 0;
		}
		$lastpos = $firstpos+120;
		$demo_press_content=substr($demo_press_content, $firstpos, $lastpos);
		$demo_press_content=str_ireplace($viewstate,"<b>".$viewstate."</b>",$demo_press_content);
		$demo_press_content=substr_replace($demo_press_content,".....",120);
		/*if ($chkshow >= $chkpage2*10-9 && $chkshow <= $chkpage2*10){*/
		if ($id_press!='0'){		
				$showresult++;		
				echo '<div class="clear"><p>
		<a class="NewsViewEntryTopline" href="press.php?ID='.$id_press.'">'.$topline.'</a><br />
		<a class="NewsViewEntryUnderline" href="press.php?ID='.$id_press.'">'.$demo_press_content.'</a>
		<a href="press.php?ID='.$id_press.'"><span class="more">more</span></a></p></div><div class="NewsViewEntryLine">&nbsp;</div>'; 
		$keeppress[$cpress]=$id_press;
		$cpress++;
	}
	}
	
	$sql5="SELECT *  FROM `tb_press_th` WHERE press_content LIKE '%$viewstate%' order by id_press DESC";
	$result5=mysql_db_query($dbname,$sql5);
	while($rs5=mysql_fetch_array($result5)) {
		$id_press=$rs5[id_press];
		$topline=$rs5[topline];
		$press_content=$rs5[press_content];
		$demo_press_content=strip_tags($press_content);
		$firstpos = strripos($demo_press_content, $viewstate);
		if ($firstpos>50){
			$firstpos = $firstpos-50;
			$chkfc = $firstpos;
			$firstcha = substr($demo_press_content, $chkfc, 1);
			do{
				$chkfc++;
				$firstcha = substr($demo_press_content, $chkfc, 1);
				$firstpos = $chkfc;
			}while($firstcha!=' ');
		}else{
			$firstpos = 0;
		}
		$lastpos = $firstpos+120;
		$demo_press_content=substr($demo_press_content, $firstpos, $lastpos);
		$demo_press_content=str_ireplace($viewstate,"<b>".$viewstate."</b>",$demo_press_content);
		$demo_press_content=substr_replace($demo_press_content,".....",120);
		/*if ($chkshow >= $chkpage2*10-9 && $chkshow <= $chkpage2*10){*/
		
		if ($id_press!='0'){	
		for ($i = 0; $i < $cpress; $i++){
			if ($keeppress[$i]==$id_press){
			$repeat++;
			}
		}
		if ($repeat==0){
				$showresult++;			
				echo '<div class="clear"><p>
		<a class="NewsViewEntryTopline" href="press.php?ID='.$id_press.'">'.$topline.'</a><br />
		<a class="NewsViewEntryUnderline" href="press.php?ID='.$id_press.'">'.$demo_press_content.'</a>
		<a href="press.php?ID='.$id_press.'"><span class="more">more</span></a></p></div><div class="NewsViewEntryLine">&nbsp;</div>'; 
		}
		$repeat=0;
	}
	}
	//echo $id_article;
	if ($showresult==0){
		echo "<div class='clear'><p>ขออภัย เราไม่พบสิ่งที่คุณต้องการค้นหา...<br><br></div><div class='NewsViewEntryLine'>&nbsp;</div>";
	}
	mysql_close();
	?>
                </div>
                </p>
                <div class="spacer"></div>
              </div>
            </div>
          </div>
        </div>
        
        
        
            
           
<!--          <div class="margiblock dontprint">
            <h1 class="h5">Publications</h1>
            <hr>
            <div class="mcontent mlnk">
              <div class="marginPublications marginBarContent">
                <div class="green"><a class="margin-image" href="#" target="_top"><img src="../files/content/$file/ab2q14_en.png" alt="" border=0></a><a href="#"  class="marginAdvancedSearchLink"   target="_top"><span>Newsletter</span></a></div>
                <a class="margin-image" href="#" target="_top"></a><a href="#"  class="marginAdvancedSearchLink"   target="_top"><span>Report</span></a> <a class="margin-image" href="#" target="_top"></a><a href="#"  class="marginAdvancedSearchLink"  target="_top"><span class="marginAdvancedSearchLinkText">research</span></a> <a class="margin-image" href="#" target="_top"></a><a href="#"  class="marginAdvancedSearchLink"  target="_top"><span>Sustainable</span></a> <a href="#"  class="marginAdvancedSearchLink"  target="_top"><span>Publications Overview</span></a> </div>
            </div>
          </div>-->
          <!-- END MarginElements-->
          <!-- Begin marginRTFContent BODY -->
          <div class="marginRTFContent"> </div>
          <!-- END marginRTFContent BODY -->
          <!-- END Right-Colu	mn //-->
          <!--##BODYEND_start##-->
        </aside>
      </section>
      <footer id="page">
        <div class="copyright">
          <div class="cright "><span>ข้อมูลล่าสุด:
            <?php include "date_mod_press.php"; ?>
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
        <li><a href="<?php echo"../en/search_content.php";?>" class="last">English</a></li>
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
<script src="//shared.bayer.com/api/bayer.js"></script>
<script src="../scripts/search.js"></script>
<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../scripts/standard.js"></script>
<script>
	//add page specific JS here
</script>
</body></html>