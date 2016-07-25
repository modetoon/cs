<!doctype html>
<html class="no-js rwd" lang="th">
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
<title>หน้าหลัก - Bayer</title>


<link rel="stylesheet" type="text/css" href="//shared.bayer.com/api/402/bayer.css"/>
<link rel="stylesheet" type="text/css" href="../styles/custom.css"/>
<script src="//shared.bayer.com/js/modernizr.js"></script>
<link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" /> 
</head>

<!--[if lt IE 9]>
<body class="homepage en lt-ie9"> 
<![endif]-->
<!--[if gt IE 8]><!-->
<body class="homepage en">
<!--<![endif]-->

<!--##nosearch##-->
<div class="wrapper">
  <div class="page">
    <header id="header">
      <!--[if lt IE 9]><img src="../img/header/naming-area-th.png" alt="Bayer: Science For A Better Life" class="namingarea"/><![endif]-->
      <!--[if gt IE 8]><!-->
      <img src="../img/header/naming-area-th.svg" class="namingarea" alt="Bayer: Science For A Better Life"/>
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
        <li><a href="contact.php" class="mcontact">ติดต่อ</a></li>
        <li><a href="#socialbar" class="mshare">Share</a></li>
        <li><a href="#search" class="msearch">ค้นหา</a></li>    
        <li class="mlang"><a href="../en/index.php" class="mlang">EN</a></li>
      </ul>
    </nav>
    <nav role="navigation" class="navigation">
       <ul id="mega-menu-1" class="megamenu">
        <li class="n1"><a href="#nowhere" class="selected">หน้าหลัก</a></li>
			<?php include "top_menu_index.php";?>
       </ul>
	   
	   	<ul class="nobulls extra-nav "><!-- change V4 -->
            <li><a href="search_content.php" class="ir icon-search">ค้นหา</a></li>
        </ul>
        <ul class="nobulls extra-nav meta-btns">
            <li><a href="#showpanel2">Locations</a></li>
            <li><a href="#showpanel1">Our Businesses</a></li>
            <li><a href="#showpanel3">Websites</a></li>
            <li><a href="contact.php">Contact us</a></li>
        </ul>
    </nav>
    <!--##/nosearch##-->
    <div role="main" class="main">
      <div class="service">
        <ul class="breadcrumb">
          <li class="last"><a title="Home" href="index.php">หน้าหลัก</a></li>
        </ul>
        <nav class="servicenav">
          <ul class="nobulls">
            <li><a href="#print">Print</a></li>
            <li><a href="#share" class="last">Share</a></li>
          </ul>
        </nav>
      </div>
      <section>

          <div class="stage01">
            <div id="slider" class="flexslider">
              <ul class="slides">
                <?php 
					include "../config/connect.php";
					$sqlB="SELECT * FROM tb_slider_cate WHERE slider_name='index' and slider_language='2'";
					$resultB=mysql_db_query($dbname,$sqlB);
					$rs=mysql_fetch_array($resultB);

					$id_slider=$rs[id_slider];
					$slider_name=$rs[slider_name];
					$slider_language=$rs[slider_language];
					$slider_quantity=$rs[slider_quantity];
					
				
					
						$sqlC="SELECT * from tb_slider_show WHERE id_slider_cate='$id_slider' ORDER BY id_slider_show";
						$resultC=mysql_db_query($dbname,$sqlC);
						$numberC=mysql_num_rows($resultC);
						
						while($rs2=mysql_fetch_array($resultC)) {
						$id_slider_cate=$rs2[id_slider_cate] ;
						$Order_slider_each=$rs2[Order_slider_each] ;
						$color=$rs2[color] ;
						$position=$rs2[position] ;
						$image_slider=$rs2[image_slider] ;
						$topline=$rs2[topline] ;
						$headerline=$rs2[headerline] ;
						$description=$rs2[description] ;
						$link_slider=$rs2[link_slider] ;
						$Order_slider_each=1;				
						echo"
						<li>
               				<div style='width:275px;' class='stagetext $position $color'>
                  				<div class='stagetopline'>$topline</div>
                  				<h1 class='stagehdln'>$headerline</h1>
                 				<div>
                    			<p>$description</p>
                    			<a href='$link_slider' class='more'>รายละเอียด</a></div>
                				</div>
                			<img src='$image_slider' alt=''/> </li>";
						
						$Order_slider_each++;
						}
						mysql_close();					
				?>
              </ul>
            </div>
          </div>          
          <!--##nosearch##-->
          <nav id="lefthand" class="unit size-col-a lfthnd"></nav>
          <!--##/nosearch##-->           
          <div class="unit size-col-c">
            <div class="line">
              <section class="unit size2of3">
              	<div class="newslist">
                  <h2 class="colhead">ข่าว</h2>
					<?php
			  	include "../config/connect.php";
				$sql="select * from tb_press_th WHERE public_press=1 ORDER BY news_date DESC LIMIT 0 , 3 ";  // old: news_date  
				$result2=mysql_db_query($dbname,$sql);
				while($rs2=mysql_fetch_array($result2)) {
				$id_press=$rs2[id_press] ;
				$headerline=$rs2[headerline];
				$topline=$rs2[topline];
				$intro_content=$rs2[intro_content];
				$press_date=$rs2[news_date] ;
				$press_pic=$rs2[press_pic] ; 
				/*$press_content=$rs2[press_content] ;
				$demo_press_content=strip_tags($press_content);
				$demo_press_content=substr_replace($demo_press_content,"",250); */
				$news_date=explode("-",$press_date);
				
				if($news_date[1]==1){
					$news_date[1]=มกราคม;
				}else if($news_date[1]==2){
					$news_date[1]=กุมภาพันธ์;
				}else if($news_date[1]==3){
					$news_date[1]=มีนาคม;
				}else if($news_date[1]==4){
					$news_date[1]=เมษายน;
				}else if($news_date[1]==5){
					$news_date[1]=พฤษภาคม;
				}else if($news_date[1]==6){
					$news_date[1]=มิถุนายน;
				}else if($news_date[1]==7){
					$news_date[1]=กรกฎาคม;
				}else if($news_date[1]==8){
					$news_date[1]=สิงหาคม;
				}else if($news_date[1]==9){
					$news_date[1]=กันยายน;
				}else if($news_date[1]==10){
					$news_date[1]=ตุลาคม;
				}else if($news_date[1]==11){
					$news_date[1]=พฤศจิกายน;
				}else if($news_date[1]==12){
					$news_date[1]=ธันวาคม;
				}
				$news_date[0]=$news_date[0]+543;   // Added Yo.
				$press_date=$news_date[1].' '.$news_date[0];  // delete $news_date[2].' '.
				//if($press_pic!='')
				echo '<article class="media">';
				if($press_pic!=''){
				echo '<a href="press.php?ID='.$id_press.'" class="img"><img src="'.$press_pic.'" alt="" class="newsimg"/></a>';
				echo '<div class="bd">
                  <div class="newsdate">';
				echo $press_date;
				echo '</div>
                  <div class="newstopline">';
				echo $topline;
				echo '</div>
                  <h3 class="hdln"><a href="press.php?ID=';
				echo $id_press;  
				echo'">';
				echo $headerline;
				echo '<span class="txtnormal"><br/>';
				echo $intro_content;
				echo '</span> <span class="more">รายละเอียด</span></a></h3>
                	</div>
              	</article>
                  <hr> ';	
				}else{
                echo '<div class="bd">
                  <div class="newsdate">';
				echo $press_date;
				echo '</div>
                  <div class="newstopline">';
				echo $topline;
				echo '</div>
                  <h3 class="hdln"><a href="press.php?ID=';
				echo $id_press;  
				echo'">';
				echo $headerline;
				echo '<span class="txtnormal"><br/>';
				echo $intro_content;
				echo '</span> <span class="more">รายละเอียด</span></a></h3>
                	</div>
              	</article>
                  <hr> ';	
					}
				}
			  ?>     
                  <p class="lnk" style="padding-top:8px;"><a href="press_content.php">ดูข่าวทั้งหมด</a></p>
                </div>
                <div class="spacer-globalnews"></div>
              	<div class="newslist">
                  <h2 class="colhead">Global News</h2>
                  <article class="media">
                      <?php
						$xml=("http://www.bayer.com/module/xml/corporate-country-news-en.xml");
						$xmlDoc = new DOMDocument();
						$xmlDoc->load($xml);

						$rss = simplexml_load_file($xml);
				
   						$item=$rss->channel->item[0];
   						$namespaces = $item->getNameSpaces(true);
   						$bayer = $item->children($namespaces['bayer']); 
   						$showimg=(string)$item->enclosure['url'][0];
				
						$ndate=$item->pubDate;
						$ndate= date("M d, Y", strtotime($ndate));
						$ndate=strtoupper($ndate);
			
						if($showimg!='')
						echo "<a href='$item->link' class='img'><img src='$showimg' alt='' class='newsimg'/></a>";
            			echo "<div class='bd'>
				  				<div class='newsdate'>$ndate</div>
				  				<div class='newstopline'>$bayer->topline</div>
                  			 	 <h3 class='hdln'><a href='$item->guid'>$item->title <span class='txtnormal'><br/>
                 			   $item->description
                   			 	<span class='more'>more</span></a></h3>
                			</div>";
						?>
                  </article>
                  <hr>
                  <p class="lnk" style="padding-top:8px;"><a href="press_corperate.php">Global News Overview</a></p>
                  </div>
              </section>

              <div class="size1of3 lastUnit teaser">
                <h2 class="colhead">เกี่ยวกับไบเออร์ไทย</h2>
                <article class="media">
                  <div class="img"><a href="http://www.bayer.co.th/th/contentpage.php?ID=4"><img src="../img/upload/source/About Bayer/about_small.jpg" alt=""/></a></div>
                  <div class="bd plntxt">
                    <div>
                      <h3 class="hdln"><a href="http://www.bayer.co.th/th/contentpage.php?ID=4">ไบเออร์ไทย จำกัด</a></h3>
                      <p>ไบเออร์เป็นบริษัทชั้นนำระดับโลกที่มีความเชี่ยวชาญในธุรกิจไลฟ์ซายน์ ด้านการดูแลสุขภาพ เกษตรกรรม</p>
                      <a href="http://www.bayer.co.th/th/contentpage.php?ID=4" class="more">รายละเอียด</a></div>
                  </div>
                </article>
              
              	<div class="spacer"></div>
                
              <h2 class="colhead">ไบเออร์ กรุ๊ป</h2>
                <article class="media">
                  <div class="img"><a href="http://www.bayer.com/covestro"><img src="../img/upload/source/About Bayer/covestro_teaser_300x176.png" alt="โคเวสโตร"/></a></div>
                  <div class="bd plntxt">
                    <div>
                      <h3 class="hdln"><a href="http://www.bayer.com/covestro ">การแยกกลุ่มธุรกิจของไบเออร์ แมททีเรียลซายน์</a></h3>
                      <p>ไบเออร์ แมททีเรียลซายน์ ในนามบริษัทใหม่  “โคเวสโตร” มีผลตั้งแต่วันที่ 1 กันยายน พ.ศ. 2558 พร้อมแผนการซื้อขายหุ้นในตลาดหลักทรัพย์ประเทศเยอรมนีราวกลางปี 2559</p>
                      <a href="http://www.bayer.com/covestro" class="more">รายละเอียด</a></div>
                  </div>
                </article>
              </div>
              
            </div>
          </div>
          <div class="unit size-col-b">
            <div class="selects bluebg">
              <label class="whitelabel" for="searchfield2">Search</label>
              	<form action="search_content.php" method="post" >
              		<input type="search" placeholder="Enter your search term" name="suchfeld" id="searchfield2" autocomplete="off"/><button type="button" class="btn searchbtn">Go</button>
              	</form>
              <!--<input type="search" placeholder="Enter your search term" name="suchfeld" id="searchfield2" autocomplete="off"/><button type="button" class="btn searchbtn">Go</button>-->
              <div class="clear"></div>
            </div>
<!--            <div class="selects greenbg">
              <label class="whitelabel" for="my-dropdown2">Products</label>
              <select id="my-dropdown2" name="my-dropdown2">
                <option value="#">Select product</option>
                <option value="#nowhere">Loremipsum</option>
              </select>
              <button style="" class="sendselect" type="button">»</button>
              <div class="clear"></div>
            </div>-->
            <div class="selects greybg">
              <label class="whitelabel" for="my-dropdown3">Our Businesses</label>
              <select id="my-dropdown3" name="my-dropdown3">
                <option value="">Select division</option>
				<option value="#">Pharmaceuticals</option>
                <option value="#">Consumer Health</option>
                <option value="#">Crop Science</option>                
                <option value="#">Animal Health</option>
              </select>
              <button style="" class="sendselect" type="button">»</button>
              <div class="clear"></div>
            </div>
            <div class="selects lightgreybg">
            <label class="whitelabel" for="my-dropdown4">Countries</label>
              <select id="my-dropdown4" name="my-dropdown4">
                <option value="">เลือกประเทศที่ต้องการ</option>
                <option value="http://www.bayer.co.kr">เกาหลี</option>
                <option value="http://www.bayer.co.rs">เซอร์เบีย</option>
                <option value="http://www.bayer.dk">เดนมาร์ก</option>
                <option value="http://www.bayer.nl">เนเธอร์แลนด์</option>
                <option value="http://www.bayer.be/ebbsc/cms/index.html">เบลเยี่ยม</option>
                <option value="http://www.andina.bayer.com">เปรู</option>
                <option value="http://www.bayer.com.mx">เม็กซิโก</option>
                <option value="http://www.middleeast.bayer.com">เยเมน</option>
                <option value="http://www.bayer.com">เยอรมนี</option>
                <option value="http://www.middleeast.bayer.com">เลบานอน</option>
                <option value="http://www.andina.bayer.com">เวเนซุเอลา</option>
                <option value="http://www.bayer.com.vn">เวียดนาม</option>
                <option value="http://www.andina.bayer.com">เอกวาดอร์</option>
                <option value="http://www.centralamerica.bayer.com">เอลซัลวาดอร์</option>
                <option value="http://www.bayer.ee">เอสโตเนีย</option>
                <option value="http://www.bayer.ca">แคนาดา</option>
                <option value="http://www.bayer.co.za">แอฟริกาใต้</option>
                <option value="http://www.bayer.hr">โครเอเชีย</option>
                <option value="http://www.andina.bayer.com">โคลัมเบีย</option>
                <option value="http://www.bayer.com.bo">โบลิเวีย</option>
                <option value="http://www.bayer.com.pl">โปแลนด์</option>
                <option value="http://www.bayer.pt">โปรตุเกส</option>
                <option value="http://www.bayer.ro">โรมาเนีย</option>
                <option value="http://www.middleeast.bayer.com">โอมาน</option>
                <option value="http://www.middleeast.bayer.com">ไซปรัส</option>
                <option value="http://www.bayer.com.tw">ไต้หวัน</option>
                <option value="http://www.bayer.ie">ไอร์แลนด์</option>
                <option value="http://www.bayer.gr">กรีซ</option>
                <option value="http://www.centralamerica.bayer.com">กัวเตมาลา</option>
                <option value="http://www.middleeast.bayer.com">กาตาร์</option>
                <option value="http://www.centralamerica.bayer.com">คอสตาริกา</option>
                <option value="http://www.bayer.com.kz">คาซัคสถาน</option>
                <option value="http://www.middleeast.bayer.com">คูเวต</option>
                <option value="http://www.middleeast.bayer.com">จอร์แดน</option>
                <option value="http://www.bayer.com.cn?l=en-us">จีน</option>
                <option value="http://www.bayer.cl">ชิลี</option>
                <option value="http://www.middleeast.bayer.com">ซาอุดีอาระเบีย</option>
                <option value="http://www.middleeast.bayer.com">ซีเรีย</option>
                <option value="http://www.middleeast.bayer.com">ซูดาน</option>
                <option value="http://www.bayer.jp">ญี่ปุ่น</option>
                <option value="http://www.bayer.com.tr">ตุรกี</option>
                <option value="http://www.bayer.no">นอร์เวย์</option>
                <option value="http://www.centralamerica.bayer.com">นิการากัว</option>
                <option value="http://www.bayer.com.au">นิวซีแลนด์</option>
                <option value="http://www.bayer.com.br">บราซิล</option>
                <option value="http://www.bayer.bg">บัลแกเรีย</option>
                <option value="http://www.bayer.com/en/middle-east.aspx">บาห์เรน</option>
                <option value="http://www.bayer.co.th">ประเทศไทย</option>
                <option value="http://www.bayer.com.pk">ปากีสถาน</option>
                <option value="http://www.centralamerica.bayer.com">ปานามา</option>
                <option value="http://www.bayer.com.py">ปารากวัย</option>
                <option value="http://www.bayer.fr">ฝรั่งเศส</option>
                <option value="http://www.bayer.fi">ฟินแลนด์</option>
                <option value="http://www.bayer.ua">ยูเครน</option>
                <option value="http://www.bayer.ru">รัสเซีย</option>
                <option value="http://www.bayer.lv">ลัตเวีย</option>
                <option value="http://www.middleeast.bayer.com">ลิเบีย</option>
                <option value="http://www.bayer.lt">ลิทัวเนีย</option>
                <option value="http://www.bayer.es">สเปน</option>
                <option value="http://www.bayer.si">สโลเวเนีย</option>
                <option value="http://www.bayer.sk">สโลวาเกีย</option>
                <option value="http://www.bayer.ch">สวิตเซอร์แลนด์</option>
                <option value="http://www.bayer.se">สวีเดน</option>
                <option value="http://www.bayer.us">สหรัฐอเมริกา</option>
                <option value="http://www.middleeast.bayer.com">สหรัฐอาหรับเอมิเรตส์</option>
                <option value="http://www.bayer.uk">สหราชอาณาจักร</option>
                <option value="http://www.bayer.cz">สาธารณรัฐเช็ก</option>
                <option value="http://www.centralamerica.bayer.com">สาธารณรัฐโดมินิกัน</option>
                <option value="http://www.middleeast.bayer.com">องค์การบริหารปาเลสไตน์</option>
                <option value="http://www.bayer.com.au/scripts/pages/en/index.php">ออสเตรเลีย</option>
                <option value="https://www.bayer.at/">ออสเตรีย</option>
                <option value="http://www.bayer.com.ar/">อาร์เจนตินา</option>
                <option value="http://www.bayer.it">อิตาลี</option>
                <option value="http://www.bayer.co.id">อินโดนีเซีย</option>
                <option value="http://www.middleeast.bayer.com">อิรัก</option>
                <option value="http://www.israel.bayer.com">อิสราเอล</option>
                <option value="http://www.middleeast.bayer.com">อียิปต์</option>
                <option value="http://www.bayer.com.uy">อุรุกวัย</option>
                <option value="http://www.bayer.comenhongkong.aspx">ฮ่องกง</option>
                <option value="http://www.centralamerica.bayer.com">ฮอนดูรัส</option>
                <option value="http://www.bayer.co.hu">ฮังการี</option>
              </select>
              <button style="" class="sendselect" type="button">»</button>
              <div class="clear"></div>
            </div>
          </div>

          <aside class="unit size-col-a margi">
          
            <div class="margiblock">
              <h1 class="h5">สมัครงาน</h1>
              <hr>
              <ul class="mlnk">
                <li><a href="http://www.bayer.co.th/th/jobs_content.php">ภาษาไทย</a></li>
                <li><a href="http://www.bayer.co.th/en/jobs_content.php">English</a></li>
              </ul>
            </div>
            
            <div class="margiblock">
				<h1 class="h5">Quicklinks</h1>
				<hr />                
                <ul class="mlnk">
				<li><a href="http://www.annualreport2015.bayer.com" target="_blank">Bayer AG Financial News Conference: Full Year 2015 Results</a></li>
                <li><a href="/img/upload/source/download/supplier-code-of-conduct-thai.pdf" target="_blank">แนวทางการปฏิบัติของคู่ค้า<br />ไบเออร์</a></li>
				<li><a href="/img/upload/source/download/เงื่อนไขในการซื้อ ของบริษัท ไบเออร์ไทย จำกัด (2015 Rev.04).pdf" target="_blank">เงื่อนไขในการสั่งซื้อของบริษัท ไบเออร์ไทย จำกัด</a></li>
				</ul>
			</div>
            
            <div class="margiblock">
				<h1 class="h5">สื่อสิ่งพิมพ์</h1>
				<hr />
				<div class="mlnk"><a href="http://www.annualreport2015.bayer.com/" target="_blank">Annual Report 2015</a></div>
				<div class="mlnk"><a href="http://www.investor.bayer.de/en/nc/events/stockholders-meeting/overview/" target="_blank">Annual Stockholders’ Meeting 2015-2016</a></div>
				<div class="mlnk"><a href="http://www.bayer.com/en/publications.aspx" target="_blank">Financial Reports</a></div>
				<div class="mlnk"><a href="http://www.bayer.com/en/Names-Figures-Facts.aspx" target="_blank">Name, Figures, Facts</a></div>
				<div class="mlnk"><a href="http://www.research.bayer.com/" target="_blank"><em>research</em> – The Bayer Scientific Magazine</a></div>
                <div class="mimg"><a href="http://www.research.bayer.com/" target="_blank"><img src="/img/upload/source/RIGHT Menu/button_research.jpg" alt="Bayer Research" width="160" height="93" /></a></div>				
				<div class="mimg"><img src="/img/upload/source/RIGHT Menu/childenbook_th.jpg" alt="Bayer HealthCare" width="160" height="190" /></div>
				<h6><a href="/img/upload/source/download/ChildrenbookThai.pdf" download="">Thai (PDF, 11.9 MB)</a></h6>
				<h6><a href="/img/upload/source/download/ChildrensBookEN.pdf" download="">English (PDF, 10.1 MB)</a></h6>
				<h6><a href="/img/upload/source/download/ChildrenBookChinese.pdf" download="">Chinese (PDF, 9.4 MB)</a></h6>
            </div>
            
            <div class="margiblock socialmediablock">
              <h1 class="h5">ติดตามเรา</h1>
              <hr>
				<ul class="nvgtn socialmedia">
					<li><a href="http://www.facebook.com/Bayer" data-rel="tooltip" target="_blank" class="ir fb" data-original-title="Follow Us on Facebook">Facebook</a></li>
					<li><a href="http://twitter.com/bayer" data-rel="tooltip" target="_blank" class="ir tw" data-original-title="Follow Us on Twitter">Twitter</a></li>
					<li><a href="http://www.youtube.com/user/BayerTVinternational" title="Follow Us on YouTube" data-rel="tooltip" target="_blank" class="ir yt">YouTube</a></li>
					<li><a href="http://www.linkedin.com/company/bayer" data-rel="tooltip" target="_blank" class="ir li" data-original-title="Follow Us on LinkedIn">LinkedIn</a></li>
					<li><a href="http://instagram.com/bayerofficial" title="Follow Us on Instagram" data-rel="tooltip" target="_blank" class="ir ig" data-placement="left">Instagram</a></li>
					<li><a href="http://www.bayer.com/en/rss.aspx" data-rel="tooltip" target="_blank" class="ir rss" data-placement="left" data-original-title="RSS Feed">RSS</a></li>
				</ul>
            </div>

            <div class="margiblock">
              <h1 class="h5">Share Price/Index</h1>
              <hr>
              <div id="shareprice"></div>
            </div>
              
          </aside>

      </section>
      <footer id="page">
        <div class="copyright">
          <div class="cright "><span>ข้อมูลล่าสุด:<?php include "date_mod_press.php"; ?> </span> <span>Copyright © Bayer Thai Co., Ltd.</span></div>
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
        <li><a href="../en/index.php" class="last">English</a></li>
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

<script src="../js_b/bayer.js"></script>
<script src="../js_b/custom.js"></script>
<script src="../js_b/bayerworldwide.js"></script>
<script src="../js_b/placeholder.js"></script>
<!--<script src="../scripts/search.js"></script>
<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../js_b/bayerworldwide.js"></script>-->
<script>
//add page specific JS here
</script>
<script>
Modernizr.load([{
  // share price
	load: '//shared.bayer.com/shareprice/shareprice.js',
	callback: function (url, result, key) {
		$('#shareprice').bayerSharePrice({lang: 'en'});
	}
}]);/**/
</script>
</body>
</html>