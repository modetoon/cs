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
<meta name="apple-mobile-web-app-capable" content="yes">
<title>Content Page - Bayer</title>

<link rel="stylesheet" type="text/css" href="../styles/global/standard.css"/>
<script src="../styles/modernizr.js"></script>
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
    <!--##Header-id##-->
    <?php include"header-id.php"; ?>
    <!--##END-Header-id##-->
    
<!--    <nav class="mobilenav">
      <ul class="nobulls">
        <li><a href="#nav" class="mnav">Menu</a></li>
        <li><a href="#search" class="msearch">Search</a></li>
        <li><a href="#contact" class="mcontact">Contact</a></li>
      </ul>
    </nav>-->
    <!--##/Navigation bar##-->
    <?php include"admin_menu.php";?>
    <!--##/END-Navigation bar##-->
    
    <!--##/Top menu##-->
      <div role="main" class="main">
        <div class="service">
          <ul class="breadcrumb">
            <li><a href="#home"></a></li>
          </ul>
          <nav class="servicenav">
            <ul class="nobulls">
              <li>Welcome</li>
              <li><a href="#share" class="last"><?php echo $result["name_admin"];?></a></li>
            </ul>
          </nav>
        </div>
        <section>             
            <!--##/Main Content##--> 
            
            <div class="unit size-col-d-admin">
              <h1>Headline H1: Consectetur adipisicing elit</h1>
              
              <table class="table txtR">
                <colgroup>
                <col width="25%">
                <col width="15%">
                <col width="15%">
                <col width="15%">
                <col width="15%">
                <col width="15%">
                </colgroup>
                <tbody>
                  <tr>
                    <th class="txtL" colspan="5">Table condensed</th>
                    <th class="tablegend">[Table 2]</th>
                  </tr>
                  <tr>
                    <td>Höchstkurs</td>
                    <td>in €</td>
                    <td>59,35</td>
                    <td class="em">56,78</td>
                    <td>59,35</td>
                    <td>57,31</td>
                  </tr>
                  <tr class="txtbold">
                    <td>Tiefstkurs</td>
                    <td>in €</td>
                    <td>53,70</td>
                    <td class="em">47,97</td>
                    <td>51,17</td>
                    <td>47,97</td>
                  </tr>
                  <tr class="borderblue">
                    <td class="txtL indent">Durchschnittliche tägliche Umsätze</td>
                    <td>in Mio</td>
                    <td>3,7</td>
                    <td class="em">3,1</td>
                    <td>3,4</td>
                    <td>2,9</td>
                  </tr>
                  <tr class="nohover">
                    <td colspan="6" class="legend"><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="spacer"></div>

              
              <div class="spacer"></div>

</div>

			<!--##/Right Menu##--> 
            <aside class="unit size-col-a margi">
                    
              <div class="margiblock">
                <h1 class="h5">Publications</h1>
                <hr>
                <div class="mlnk"><a href="#nowhere">Phasellusultrices</a></div>
              </div>
              
            </aside>

        </section>
	  <!--##/Footer##--> 
		<?php include"footer.php"; ?> 
      <!--##/END-Footer##-->
    </div>
    
    <!--##nosearch##--> 
  </div>

  
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
	//add page specific JS here
</script>
</body>
</html>