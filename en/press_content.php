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
<title>Press - Bayer</title>


<link rel="stylesheet" type="text/css" href="../styles/relaunch.css"/>
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
        <li class="mlang"><a href="<?php echo"../th/press_content.php?ID=$call_arti";?>" class="mlang">TH</a></li>
      </ul>
    </nav>
     <nav role="navigation" class="navigation">
      <ul id="mega-menu" class="megamenu">
      	<!--<li rel="8142" class="n1 selected&#xA;"><a href="/bayer/index.php">Home</a></li>-->
        <li rel="8142" class="n1 selected&#xA;"><a href="index.php">Home</a></li>
        <?php
	include "top_menu_press.php";
	?>
        
        </li>
      </ul>
    </nav>
    <!--##/nosearch##-->
    <div role="main" class="main">
      <div class="service">
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
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
          	<!--<li class="selected"><a href="press_content.php" class="selected">--><?php include "left_menu_press.php"; ?><!--</a>-->
            <li><a href="press_corperate.php">Global News</a></li>
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
              Press
              </h1>
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
	$sql="SELECT *  FROM `tb_press` WHERE public_press=1";
	$result=mysql_db_query($dbname,$sql);
	$count=0;
	while($cs=mysql_fetch_array($result)) {
		$show_type=$cs[show_type];
		$count++;
	}
	if ($chkpage=='')$chkpage=1;
	$nextpage=$chkpage+10;
	$prepage=$chkpage-10;
	$chkpage2=(int)($chkpage/10+0.9);
	if ($count>=11 && $count<=40){
	echo '<div class="navLinks"><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage=1">';
		if ($chkpage<=10){
			echo '<b> 1 - 10 </b>';
		}else{
			echo ' 1 - 10 ';
		}
	if($count<=20){
		echo '</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage=11">';
		if($count==11){
			if ($chkpage==11){
				echo '<b> 11 </b>';
			}else{
				echo ' 11 ';
			}
		}else{
			if ($chkpage>=11){
				echo '<b> 11 - '.$count.' </b>';
			}else{
				echo ' 11 - '.$count.' ';
			}
		}
		echo '</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""></div>';
	}else if($count<=30){
		echo '</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage=11">';
		if ($chkpage>=11 && $chkpage<=20){
			echo '<b> 11 - 20 </b>';
		}else{
			echo ' 11 - 20 ';
		}
		echo '</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage=21">';
		if($count==21){
			if ($chkpage==21){
				echo '<b> 21 </b>';
			}else{
				echo ' 21 ';
			}
		}else{
			if ($chkpage>=21){
				echo '<b> 21 - '.$count.' </b>';
			}else{
				echo ' 21 - '.$count.' ';
			}
		}
		echo '</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""></div>';
	}else{
		echo '</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage=21">';
		if ($chkpage>=21 && $chkpage<=30){
			echo '<b> 21 - 30 </b>';
		}else{
			echo ' 21 - 30 ';
		}
		echo '</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage=31">';
		if($count==31){
			if ($chkpage==31){
				echo '<b> 31 </b>';
			}else{
				echo ' 31 ';
			}
		}else{
			if ($chkpage>=31){
				echo '<b> 31 - '.$count.' </b>';
			}else{
				echo ' 31 - '.$count.' ';
			}
		}
		echo '</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt="">';
	}
	}else if($count>=41){
		if ($chkpage<=10){
			echo '<div class="navLinks"><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage=1"><b>1 - 10</b></a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage=11">11 - 20</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage=21">21 - 30</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage=31">31 - 40</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="img/nav-next.gif" border=0 alt=""></a><a href="press_content.php?chkpage='.$count.'"><img class="viewnavicon" src="img/nav-last.gif" border=0 alt=""></a></div>';
		}else{
			
		if($count-$chkpage<=9){
			$min1= (((int)(($chkpage-1)/10)-3)*10)+1;
			$max1= $min1+9;
			$min2= (((int)(($chkpage-1)/10-2))*10)+1;
			$max2= $min2+9;
			$min3= (((int)(($chkpage-1)/10)-1)*10)+1;
			$max3= $min3+9;
			$min4= (((int)(($chkpage-1)/10))*10)+1;
			$max4= $min4+9;
			echo '<div class="navLinks"><a href="press_content.php?chkpage=1"><img class="viewnavicon" src="img/nav-first.gif" border=0 alt=""></a><a href="press_content.php?chkpage='.$prepage.'"><img class="viewnavicon" src="img/nav-previous.gif" border=0 alt=""></a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min1.'">'.$min1.' - '.$max1.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min2.'">'.$min2.' - '.$max2.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min3.'">'.$min3.' - '.$max3.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min4.'"><b>';
			if ($count%10!=1){
				echo $min4.' - ';
			}
			echo $count.'</b></a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""></div>';
		}else if($count-$chkpage<=19){
			$min1= (((int)(($chkpage-1)/10)-2)*10)+1;
			$max1= $min1+9;
			$min2= (((int)(($chkpage-1)/10-1))*10)+1;
			$max2= $min2+9;
			$min3= (((int)(($chkpage-1)/10))*10)+1;
			$max3= $min3+9;
			$min4= (((int)(($chkpage-1)/10)+1)*10)+1;
			$max4= $min4+9;
			echo '<div class="navLinks"><a href="press_content.php?chkpage=1"><img class="viewnavicon" src="img/nav-first.gif" border=0 alt=""></a><a href="press_content.php?chkpage='.$prepage.'"><img class="viewnavicon" src="img/nav-previous.gif" border=0 alt=""></a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min1.'">'.$min1.' - '.$max1.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min2.'">'.$min2.' - '.$max2.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min3.'"><b>'.$min3.' - '.$max3.'</b></a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min4.'">';
			if ($count%10!=1){
				echo $min4.' - ';
			}
			echo $count.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="img/nav-next.gif" border=0 alt=""></a><a href="press_content.php?chkpage='.$count.'"><img class="viewnavicon" src="img/nav-last.gif" border=0 alt=""></a></div>';
		}else if($count-$chkpage<=29){
			$min1= (((int)(($chkpage-1)/10)-1)*10)+1;
			$max1= $min1+9;
			$min2= (((int)(($chkpage-1)/10))*10)+1;
			$max2= $min2+9;
			$min3= (((int)(($chkpage-1)/10)+1)*10)+1;
			$max3= $min3+9;
			$min4= (((int)(($chkpage-1)/10)+2)*10)+1;
			$max4= $min4+9;
			echo '<div class="navLinks"><a href="press_content.php?chkpage=1"><img class="viewnavicon" src="img/nav-first.gif" border=0 alt=""></a><a href="press_content.php?chkpage='.$prepage.'"><img class="viewnavicon" src="img/nav-previous.gif" border=0 alt=""></a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min1.'">'.$min1.' - '.$max1.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min2.'"><b>'.$min2.' - '.$max2.'</b></a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min3.'">'.$min3.' - '.$max3.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min4.'">';
			if ($count%10!=1){
				echo $min4.' - ';
			}
			echo $count.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="img/nav-next.gif" border=0 alt=""></a><a href="press_content.php?chkpage='.$count.'"><img class="viewnavicon" src="img/nav-last.gif" border=0 alt=""></a></div>';
		}else{
			$chkodd=((int)(($chkpage-1)/10))%2;
			if ($chkodd==1){
				$min1= (((int)(($chkpage-1)/10)-1)*10)+1;
				$max1= $min1+9;
				$min2= (((int)(($chkpage-1)/10))*10)+1;
				$max2= $min2+9;
				$min3= (((int)(($chkpage-1)/10)+1)*10)+1;
				$max3= $min3+9;
				$min4= (((int)(($chkpage-1)/10)+2)*10)+1;
				$max4= $min4+9;
				echo '<div class="navLinks"><a href="press_content.php?chkpage=1"><img class="viewnavicon" src="img/nav-first.gif" border=0 alt=""></a><a href="press_content.php?chkpage='.$prepage.'"><img class="viewnavicon" src="img/nav-previous.gif" border=0 alt=""></a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min1.'">'.$min1.' - '.$max1.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min2.'"><b>'.$min2.' - '.$max2.'</b></a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min3.'">'.$min3.' - '.$max3.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min4.'">'.$min4.' - '.$max4.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="img/nav-next.gif" border=0 alt=""></a><a href="press_content.php?chkpage='.$count.'"><img class="viewnavicon" src="img/nav-last.gif" border=0 alt=""></a></div>';
			}else{
				$min1= (((int)(($chkpage-1)/10)-2)*10)+1;
				$max1= $min1+9;
				$min2= (((int)(($chkpage-1)/10)-1)*10)+1;
				$max2= $min2+9;
				$min3= (((int)(($chkpage-1)/10))*10)+1;
				$max3= $min3+9;
				$min4= (((int)(($chkpage-1)/10)+1)*10)+1;
				$max4= $min4+9;
				echo '<div class="navLinks"><a href="press_content.php?chkpage=1"><img class="viewnavicon" src="img/nav-first.gif" border=0 alt=""></a><a href="press_content.php?chkpage='.$prepage.'"><img class="viewnavicon" src="img/nav-previous.gif" border=0 alt=""></a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min1.'">'.$min1.' - '.$max1.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min2.'">'.$min2.' - '.$max2.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min3.'"><b>'.$min3.' - '.$max3.'</b></a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$min4.'">'.$min4.' - '.$max4.'</a><img class="viewnavdelimiter" src="img/nav-delimiter.gif" border=0 alt=""><a href="press_content.php?chkpage='.$nextpage.'"><img class="viewnavicon" src="img/nav-next.gif" border=0 alt=""></a><a href="press_content.php?chkpage='.$count.'"><img class="viewnavicon" src="img/nav-last.gif" border=0 alt=""></a></div>';
			}
		}
		}
	}
	
	///////////////////////////////////////////////////
    ?>
              <div class="viewList">
                <div class="NewsViewEntryLine">&nbsp;</div>
                <div class="clear">
                  <?php
	$sql2="SELECT *  FROM `tb_press` WHERE public_press=1 order by news_date DESC";
	
	$result2=mysql_db_query($dbname,$sql2);
	$chkshow=0;
	while($rs=mysql_fetch_array($result2)) {
		$chkshow++;
		$id_press=$rs[id_press];
		$press_type=$rs[press_type];
		$topline=$rs[topline];
		$headerline=$rs[headerline];
		$intro_content=$rs[intro_content];
		$press_date=$rs[news_date];
		$show_type=$rs[show_type];
		$press_pic=$rs[press_pic];
		$press_content=$rs[press_content];
		$demo_press_content=strip_tags($press_content);
		$demo_press_content=substr_replace($demo_press_content,".....",120); 
				
				$news_date=explode("-",$press_date);
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
				
				$press_date=$news_date[1].', '.$news_date[0];
		if ($chkshow >= $chkpage2*10-9 && $chkshow <= $chkpage2*10){
		if ($show_type==1){
		echo '<div class="clear"><p><a class="NewsViewEntryDate" href="press.php?ID='.$id_press.'">'.$press_date.'</a><br /> 
		<a class="NewsViewEntryTopline" href="press.php?ID='.$id_press.'">'.$topline.'</a><br />
		<a class="NewsViewEntryHeadline" href="press.php?ID='.$id_press.'">'.$headerline.'</a><br />
		<a class="NewsViewEntryUnderline" href="press.php?ID='.$id_press.'">'.$intro_content.' </a>
		<a href="press.php?ID='.$id_press.'"><span class="more">more</span></a></p></div><div class="NewsViewEntryLine">&nbsp;</div>'; 
		}else{
		echo '<div class="clear"><p><a class="picLink picLinkQ" href="press.php?ID='.$id_press.'"><img class="NewsViewEntryImg" src="'.$press_pic.'" alt="" border="0" /></a></p>
		<p><a class="NewsViewEntryDate" href="press.php?ID='.$id_press.'">'.$press_date.'</a><br /> <a class="NewsViewEntryHeadline" href="press.php?ID='.$id_press.'">'.$topline.'</a><br /><a class="NewsViewEntryUnderline" href="press.php?ID='.$id_press.'">'.$intro_content.' </a><a class="NewsViewEntryUnderline" href="press.php?ID='.$id_press.'"><span class="more">more</span></a></div><div class="NewsViewEntryLine">&nbsp;</div><div class="spacer"></div>'; 
		}
	}
	}
	
	//echo $id_article;
	
	mysql_close();
	?>
                </div>
                </p>
                <div class="spacer"></div>
              </div>
            </div>
          </div>
        </div>
        
        
        <aside class="unit size-col-a margi">
          <!-- Begin MarginElements-->
          <div class="margiblock">
			<h1 class="h5">Calendar </h1>
			<hr />
			<ul class="mlnk">
			<li><a href="http://www.bayer.com/en/Calendar.aspx" target="_blank">Calendar Overview</a></li>
			</ul>
			</div>
           
           <div class="margiblock">
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
          <div class="cright "><span>Last updated:
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
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="map.php">Map</a></li>
        <li><a href="sitemap.php">Sitemap</a></li>
        <li><a href="<?php echo"../th/press_content.php?ID=$call_arti";?>" class="last">Thai</a></li>
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