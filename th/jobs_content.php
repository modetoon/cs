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
<!--Version 2.1-->
<title>สมัครงาน - Bayer</title>

<link rel="stylesheet" type="text/css" href="//shared.bayer.com/api/bayer.css"/>
<script src="../scripts/modernizr.js"></script>
<!--<script src="//shared.bayer.com/js/modernizr.js"></script>-->
<link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" /> 
</head>

<!--[if lt IE 7]>
<body class="subhm en lt-ie9 lt-ie8 lt-ie7">
<![endif]-->
<!--[if IE 7]>
<body class="subhm en lt-ie9 lt-ie8">
<![endif]-->
<!--[if IE 8]>
<body class="subhm en lt-ie9"> 
<![endif]-->
<!--[if gt IE 8]><!-->
<body class="subhm en">
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
        <li><a href="contact.php" class="mcontact">ติดต่อ</a></li>
        <li class="mlang"><a href="<?php echo"../en/jobs_content.php?ID=$call_arti";?>" class="mlang">EN</a></li>
      </ul>
    </nav>
     <nav role="navigation" class="navigation">
      <ul id="mega-menu" class="megamenu">
        <li rel="8142" class="n1 selected&#xA;"><a href="index.php">หน้าหลัก</a></li>
        
        <?php
	include "top_menu_job.php";
	?>
      </ul>
    </nav>
    <!--##/nosearch##-->
      <div role="main" class="main">
        <div class="service">        
          <ul class="breadcrumb">
            <li><a href="index.php">หน้าหลัก</a></li>
            
            <?php 
				include"top_sup_menu_jobs.php";
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
                  <li>
                    <!--<div class="stagetext">
                      <div class="stagetopline"></div>
                      <h1 class="stagehdln"></h1>
                      <div>
                        <p></p>
                        <a href="#nowhere" class="more"></a>
                      </div>
                    </div>-->
                    <img src="../img/stage/EB_LinkedIn_Banner_Diver1_800x253.png" alt=""/> </li>
                  <li>
                    <img src="../img/stage/EB_LinkedIn_Banner_Supertree1_800x253.png" alt=""/> </li>
                  <li>
                    <img src="../img/stage/EB_LinkedIn_Banner_Garden1_800x253.png" alt=""/> </li>
                  <li>
                    <img src="../img/stage/EB_LinkedIn_Banner_Rice1_800x253.png" alt=""/> </li>
                  <li>
                    <img src="../img/stage/EB_LinkedIn_Banner_NorthernLights1_800x253.png" alt=""/> </li>
                  <li>
                    <img src="../img/stage/EB_LinkedIn_Banner_Diver2_800x253.png" alt=""/> </li>
                  <li>
                    <img src="../img/stage/EB_LinkedIn_Banner_Supertree2_800x253.png" alt=""/> </li>
                  <li>
                    <img src="../img/stage/EB_LinkedIn_Banner_Garden2_800x253.png" alt=""/> </li>
                  <li>
                    <img src="../img/stage/EB_LinkedIn_Banner_Rice2_800x253.png" alt=""/> </li>
                  <li>
                    <img src="../img/stage/EB_LinkedIn_Banner_NorthernLights2_800x253.png" alt=""/> </li>
                </ul>
              </div>
            </div>
            <!--Slider End-->
        
                   
            <!--##nosearch##-->
            <nav id="lefthand" class="unit size-col-a lfthnd"> 
              <ul class="lfthndnavi">
            <?php
				include "left_menu_jobs.php";
			?>
              </ul>
            </nav>
            
            <!--##/nosearch##--> 
            
            <div class="unit size-col-d">
            	<div class="topline">ทางเลือกสำหรับการพัฒนาอาชีพ</div>
            	<h1>ร่วมงานกับไบเออร์ไทย</h1>

    	<?php
			include "../config/connect.php";
			$sql="select * from tb_job order by job_date DESC";
			$result=mysql_db_query($dbname,$sql);
			$number=mysql_num_rows($result);
			$no=1;
			if($number<>0) {
			echo"	
			<table class='table txtR'>
                <colgroup>
                <col width='35%'>
                <col width='65%'>
                </colgroup>
                <tbody>
                  <tr>
                    <th class='txtL' colspan='2'>ตำแหน่งงานทั้งหมด</th>
                  </tr>
                  <tr class='borderblue'>
                    <td>วันที่</td>
                    <td class='em'><center>ตำแหน่งงาน</center></td>
                  </tr>";
			while($rs=mysql_fetch_array($result)) {
			$id_job=$rs[id_job] ;
			$job_name=$rs[job_name] ;
			$job_date=$rs[job_date] ;
			$job_date2=$rs[job_date] ;
			$job_link=$rs[link];
			$job_link_name = substr($job_link,21);
			$news_date=explode("-",$job_date);
			if($news_date[1]==1){
			$news_date[1]=JAN;
				}else if($news_date[1]==2){
					$news_date[1]=FEB;
				}else if($news_date[1]==3){
					$news_date[1]=MAR;
				}else if($news_date[1]==4){
					$news_date[1]=APR;
				}else if($news_date[1]==5){
					$news_date[1]=MAY;
				}else if($news_date[1]==6){
					$news_date[1]=JUN;
				}else if($news_date[1]==7){
					$news_date[1]=JUL;
				}else if($news_date[1]==8){
					$news_date[1]=AUG;
				}else if($news_date[1]==9){
					$news_date[1]=SEP;
				}else if($news_date[1]==10){
					$news_date[1]=OCT;
				}else if($news_date[1]==11){
					$news_date[1]=NOV;
				}else if($news_date[1]==12){
					$news_date[1]=DEC;
				}
					$job_date=substr($news_date[2],0,2).'-'.$news_date[1].'-'.$news_date[0];
					
					$exp = explode(" ",$job_date2);
					$t = explode(":",$exp[1]);
					$d = explode("-",$exp[0]);
					$job_date2= mktime($t[0], $t[1], $t[2], $d[1], $d[2], $d[0]);
					$time = time();
					if ($time>=$job_date2)		
			echo"<tr> 
					<td>".$job_date."</td>
					<td class='em'><div style='text-align:left'><a href='$job_link'>".$job_name."</a></div></td></tr>" ;
					}
				echo"</tbody></table>";
				mysql_close();
			}
		?>
                 
             


            </div>



            <aside class="unit size-col-a margi">
            
              <div class="margiblock socialmediablock">
              <h1 class="h5">ติดตามเรา</h1>
              <hr>
              <ul class="nvgtn socialmedia">
                <li><a class="ir fb" data-rel="tooltip" title="Follow us on Facebook" href="http://www.facebook.com/Bayer">facebook</a></li>
                <li><a class="ir gp" data-rel="tooltip" title="Follow us on Google +" href="https://plus.google.com/stream#117647787115921182944/posts">google plus</a></li>
                <li><a class="ir tw" data-rel="tooltip" title="Follow us on Twitter" href="http://twitter.com/#!/bayer_press">twitter</a></li>
                <li><a class="ir yt" data-rel="tooltip" title="Follow us on Youtube" href="http://www.youtube.com/user/BayerTVinternational">youtube</a></li>
                <li><a class="ir li" data-rel="tooltip" title="Follow us on Linked in" href="http://www.linkedin.com/company/bayer">linked in</a></li>
                <li><a class="ir rss" data-rel="tooltip" title="RSS Feed" href="#rss">RSS</a></li>
              </ul>
            </div>
              
              <div class="margiblock">
                <h1 class="h5">ติดต่อเรา</h1>
                <hr>
                <div class="mlnk"><li>ผู้ที่สนใจสามารถส่งประวัติส่วนตัวของคุณมาที่ <a href="mailto:hr-recruitment@bayer.com">hr-recruitment@bayer.com</a> หรือติดต่อ Recruitment ได้ทางเบอร์โทรศัพท์ 02-232-7007</li></div>
              </div>
              
              <div class="margiblock">
                <h1 class="h5">วิดีโอ</h1>
                <hr>
                <a href="http://www.video-center.bayer.com/vsc_3706_2515_1_vid_339518/IT-S-GONNA-BE-A-GOOD-DAY-Bayer-s-Recruiting-Song.html"><img src="../img/upload/source/RIGHT Menu/Bayers-Recruiting.jpg" width="160" border="0" /></a>
				<div class="mlnk"><a href="http://www.video-center.bayer.com/vsc_3706_2515_1_vid_339518/IT-S-GONNA-BE-A-GOOD-DAY-Bayer-s-Recruiting-Song.html">IT'S GONNA BE A GOOD DAY! - Bayer's Recruiting-Song</a></div>
				<br>
				<a href="http://www.video-center.bayer.com/vsc_3706_2515_1_vid_632981/Financial-Management-at-Bayer-Enabling-Innovation.html"><img src="../img/upload/source/RIGHT Menu/Financial-Management.jpg" border="0" width="160"/></a>
				<div class="mlnk"><a href="http://www.video-center.bayer.com/vsc_3706_2515_1_vid_632981/Financial-Management-at-Bayer-Enabling-Innovation.html">Financial Management at Bayer - Enabling Innovation</a></div>
                
              </div>
              
            </aside>

        </section>
      <footer id="page">
      
        <div class="copyright">
          <div class="cright "><span>ข้อมูลล่าสุด: <?php include "date_mod_job.php"; ?></span> <span>Copyright © Bayer Thai Co., Ltd.</span></div>
          
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
            <?php include "legal_menu.php";	?>
          </ul>
        </nav>
      </footer>
    </div>
    
    <!--##nosearch##--> 
    <!-- Support Navigation -->
    <nav class="meta">
      <ul class="nobulls">
        <li><a href="contact.php">ติดต่อ</a></li>
        <li><a href="sitemap.php">Sitemap</a></li>
        <li><a href="<?php echo"../en/jobs_content.php";?>" class="last">English</a></li>
        <li><a href="http://bayer.com" class="last lnk">Bayer Group</a></li>
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

<!--<script src="//shared.bayer.com/api/bayer.js"></script>
<script src="scripts/search.js"></script>-->
<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../scripts/standard.js"></script>
<script>
//add page specific JS here
</script>
</body>
</html>