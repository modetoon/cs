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
<title>Homepage - Bayer</title>


<link rel="stylesheet" type="text/css" href="//shared.bayer.com/api/bayer.css"/>
<script src="../scripts/modernizr.js"></script>
<script src="//shared.bayer.com/js/modernizr.js"></script>
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
        <li class="mlang"><a href="../th/index.php" class="mlang">TH</a></li>
      </ul>
    </nav>
    <nav role="navigation" class="navigation">
       <ul id="mega-menu" class="megamenu">
        <li rel="8142" class="n1 selected&#xA;"><a href="index.php" class="selected  current">Home</a></li>
			<?php include "top_menu_index.php";?>
       </ul>
    </nav>
    <!--##/nosearch##-->
    <div role="main" class="main">
      <div class="service">
        <ul class="breadcrumb">
          <li class="last"><a title="Home" href="index.php">Home</a></li>
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
					$sqlB="SELECT * FROM tb_slider_cate WHERE slider_name='index' and slider_language='1'";
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
                    			<a href='$link_slider' class='more'>more</a></div>
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
                  <h2 class="colhead">Country News</h2>
					<?php
			  	include "../config/connect.php";
				$sql="select * from tb_press WHERE public_press=1 ORDER BY news_date DESC LIMIT 0 , 3 ";
				$result2=mysql_db_query($dbname,$sql);
				while($rs2=mysql_fetch_array($result2)) {
				$id_press=$rs2[id_press] ;
				$headerline=$rs2[headerline];
				$topline=$rs2[topline];
				$press_date=$rs2[news_date] ;
				$press_pic=$rs2[press_pic] ; 
				$press_content=$rs2[press_content] ;
				$demo_press_content=strip_tags($press_content);
				$demo_press_content=substr_replace($demo_press_content,"",150); 
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
				$press_date=$news_date[1].' '.$news_date[2].', '.$news_date[0];
				//if($press_pic!='')
				echo '<article class="media">';
				if($press_pic!=''){
				echo '<a href="#nowhere" class="img"><img src="'.$press_pic.'" alt="" class="newsimg"/></a>';
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
				echo $demo_press_content;
				echo '</span> <span class="more">more</span></a></h3>
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
				echo $demo_press_content;
				echo '</span> <span class="more">more</span></a></h3>
                	</div>
              	</article>
                  <hr> ';	
					}
				}
			  ?>     
                  <p class="lnk" style="padding-top:8px;"><a href="press_content.php">Country News Overview</a></p>
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
                <h2 class="colhead">About Bayer</h2>
                <article class="media">
                  <div class="img"><a href="http://www.bayer.co.th/en/contentpage.php?ID=4"><img src="../img/upload/source/About Bayer/about_small.jpg" alt=""/></a></div>
                  <div class="bd plntxt">
                    <div>
                      <h3 class="hdln"><a href="http://www.bayer.co.th/en/contentpage.php?ID=4">Bayer Thai</a></h3>
                      <p>Bayer is a global enterprise with core competencies in the fields of health care, nutrition and high-tech materials.</p>
                      <a href="http://www.bayer.co.th/en/contentpage.php?ID=4" class="more">more</a></div>
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
              <label class="whitelabel" for="my-dropdown3">Business areas</label>
              <select id="my-dropdown3" name="my-dropdown3">
                <option value="">Select division</option>
                <option value="http://www.healthcare.bayer.com">Bayer HealthCare</option>
                <option value="http://www.cropscience.bayer.com">Bayer CropScience</option>
                <option value="http://www.materialscience.bayer.com">Bayer MaterialScience</option>
                <option value="http://business-services.bayer.com">Bayer Business Services</option>
                <option value="http://www.bayertechnology.com/en/home.html">Bayer Technology Services</option>
                <option value="http://www.currenta.com">Currenta</option>
              </select>
              <button style="" class="sendselect" type="button">»</button>
              <div class="clear"></div>
            </div>
            <div class="selects lightgreybg">
            <label class="whitelabel" for="my-dropdown4">Countries</label>
              <select id="my-dropdown4" name="my-dropdown4">
                <option value="">Select country</option>
                <option value="http://www.bayer.com.ar/">Argentina</option>
                <option value="http://www.bayer.com.au/scripts/pages/en/index.php">Australia</option>
                <option value="https://www.bayer.at/">Austria</option>
                <option value="http://www.bayer.com/en/middle-east.aspx">Bahrain</option>
                <option value="http://www.bayer.be/ebbsc/cms/index.html">Belgium</option>
                <option value="http://www.bayer.com.bo">Bolivia</option>
                <option value="http://www.bayer.com.br">Brazil</option>
                <option value="http://www.bayer.bg">Bulgaria</option>
                <option value="http://www.bayer.ca">Canada</option>
                <option value="http://www.bayer.cl">Chile</option>
                <option value="http://www.bayer.com.cn?l=en-us">China</option>
                <option value="http://www.andina.bayer.com">Colombia</option>
                <option value="http://www.centralamerica.bayer.com">Costa Rica</option>
                <option value="http://www.bayer.hr">Croatia</option>
                <option value="http://www.middleeast.bayer.com">Cyprus</option>
                <option value="http://www.bayer.cz">Czech Republic</option>
                <option value="http://www.bayer.dk"><Denmark/option>
                <option value="http://www.centralamerica.bayer.com">Dominican Republic</option>
                <option value="http://www.andina.bayer.com">Ecuador</option>
                <option value="http://www.middleeast.bayer.com">Egypt</option>
                <option value="http://www.centralamerica.bayer.com">El Salvador</option>
                <option value="http://www.bayer.ee">Estonia</option>
                <option value="http://www.bayer.fi">Finland</option>
                <option value="http://www.bayer.fr">France</option>
                <option value="http://www.bayer.com">Germany</option>
                <option value="http://www.bayer.gr">Greece</option>
                <option value="http://www.centralamerica.bayer.com">Guatemala</option>
                <option value="http://www.centralamerica.bayer.com">Honduras</option>
                <option value="http://www.bayer.comenhongkong.aspx">Hong Kong</option>
                <option value="http://www.bayer.co.hu">Hungary</option>
                <option value="http://www.bayer.co.id">Indonesia</option>
                <option value="http://www.middleeast.bayer.com">Iraq</option>
                <option value="http://www.bayer.ie">Ireland</option>
                <option value="http://www.israel.bayer.com">Israel</option>
                <option value="http://www.bayer.it">Italy</option>
                <option value="http://www.bayer.jp">Japan</option>
                <option value="http://www.middleeast.bayer.com">Jordan</option>
                <option value="http://www.bayer.com.kz">Kazakhstan</option>
                <option value="http://www.bayer.co.kr">Korea</option>
                <option value="http://www.middleeast.bayer.com">Kuwait</option>
                <option value="http://www.bayer.lv">Latvia</option>
                <option value="http://www.middleeast.bayer.com">Lebanon</option>
                <option value="http://www.middleeast.bayer.com">Libya</option>
                <option value="http://www.bayer.lt">Lithuania</option>
                <option value="http://www.bayer.com.mx">Mexico</option>
                <option value="http://www.bayer.nl">Netherlands</option>
                <option value="http://www.bayer.com.au">New Zealand</option>
                <option value="http://www.centralamerica.bayer.com">Nicaragua</option>
                <option value="http://www.bayer.no">Norway</option>
                <option value="http://www.middleeast.bayer.com">Oman</option>
                <option value="http://www.bayer.com.pk">Pakistan</option>
                <option value="http://www.middleeast.bayer.com">Palestinian Authority</option>
                <option value="http://www.centralamerica.bayer.com">Panama</option>
                <option value="http://www.bayer.com.py">Paraguay</option>
                <option value="http://www.andina.bayer.com">Peru</option>
                <option value="http://www.bayer.com.pl">Poland</option>
                <option value="http://www.bayer.pt">Portugal</option>
                <option value="http://www.middleeast.bayer.com">Qatar</option>
                <option value="http://www.bayer.ro">Romania</option>
                <option value="http://www.bayer.ru">Russia</option>
                <option value="http://www.middleeast.bayer.com">Saudi Arabia</option>
                <option value="http://www.bayer.co.rs">Serbia</option>
                <option value="http://www.bayer.sk">Slovakia</option>
                <option value="http://www.bayer.si">Slovenia</option>
                <option value="http://www.bayer.co.za">South Africa</option>
                <option value="http://www.bayer.es">Spain</option>
                <option value="http://www.middleeast.bayer.com">Sudan</option>
                <option value="http://www.bayer.se">Sweden</option>
                <option value="http://www.bayer.ch">Switzerland</option>
                <option value="http://www.middleeast.bayer.com">Syria</option>
                <option value="http://www.bayer.com.tw">Taiwan</option>
                <option value="http://www.bayer.co.th">Thailand</option>
                <option value="http://www.bayer.com.tr">Turkey</option>
                <option value="http://www.bayer.ua">Ukraine</option>
                <option value="http://www.middleeast.bayer.com">United Arab Emirates</option>
                <option value="http://www.bayer.uk">United Kingdom</option>
                <option value="http://www.bayer.com.uy">Uruguay</option>
                <option value="http://www.bayer.us">USA</option>
                <option value="http://www.andina.bayer.com">Venezuela</option>
                <option value="http://www.bayer.com.vn">Vietnam</option>
                <option value="http://www.middleeast.bayer.com">Yemen</option>                
              </select>
              <button style="" class="sendselect" type="button">»</button>
              <div class="clear"></div>
            </div>
          </div>

          <aside class="unit size-col-a margi">
          
            <div class="margiblock">
              <h1 class="h5">Job & Career</h1>
              <hr>
              <ul class="mlnk">
                <li><a href="http://www.bayer.co.th/th/jobs_content.php">Thai</a></li>
                <li><a href="http://www.bayer.co.th/en/jobs_content.php">English</a></li>
              </ul>
            </div>
            
            <div class="margiblock">
				<h1 class="h5">Quicklinks</h1>
				<hr />
                <div class="mimg"><a href="http://www.bayer.com/en/2014-12-2-innovation-press-forum.aspx" target="_blank"><img src="/img/upload/source/RIGHT Menu/button_innopk.jpg" alt="Bayer Research" width="160" height="90" /></a></div>
                <ul class="mlnk">
				<li><a href="http://www.bayer.com/en/2014-12-2-innovation-press-forum.aspx" target="_blank">Press Forum Bayer’s Perspective on Innovation December 2, 2014</a></li>
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
                <div class="mimg"><a href="http://www.research.bayer.com/" target="_blank"><img src="/img/upload/source/RIGHT Menu/button_research.jpg" alt="Bayer Research" width="160" height="93" /></a></div>
                <div class="mlnk"><a href="/img/upload/source/download/ChildrensBookEN.pdf" download="">Children book – What’s up with the Earth? (PDF, 10.1 MB)</a></div>
				<div class="mimg"><img src="/img/upload/source/RIGHT Menu/childenbook_th.jpg" alt="Bayer HealthCare" width="160" height="190" /></div>
				<h6><a href="/img/upload/source/download/ChildrenbookThai.pdf" download="">Thai (PDF, 11.9 MB)</a></h6>
				<h6><a href="/img/upload/source/download/ChildrensBookEN.pdf" download="">English (PDF, 10.1 MB)</a></h6>
				<h6><a href="/img/upload/source/download/ChildrenBookChinese.pdf" download="">Chinese (PDF, 9.4 MB)</a></h6>
            </div>
            
            <div class="margiblock socialmediablock">
              <h1 class="h5">Follow us</h1>
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
              <h1 class="h5">Share Price/Index</h1>
              <hr>
              <div id="shareprice"></div>
            </div>
              
          </aside>

      </section>
      <footer id="page">
        <div class="copyright">
          <div class="cright "><span>Last updated: <?php include "date_mod_press.php"; ?></span> <span>Copyright © Bayer Thai Co., Ltd.</span></div>
          <ul class="pagefunctions nvgtn">
            <li><a href="#print" class="icnPrint">Print</a></li>
            <li><a href="#share" class="icnShare">Share</a></li>
            <li class="onlymobile"><a href="contact.php" class="icnContact">Contact us</a></li>
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
        <li><a href="contact.php">Contact us</a></li>
        <li><a href="map.php">Map</a></li>
        <li><a href="sitemap.php">Sitemap</a></li>
        <li><a href="../th/index.php" class="last">Thai</a></li>
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

<script src="//shared.bayer.com/api/bayer.js"></script>
<script src="../scripts/search.js"></script>
<script src="../scripts/jquery.jquery-ui.min.js"></script>
<script src="../scripts/standard.js"></script>
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
}]);
</script>
</body>
</html>