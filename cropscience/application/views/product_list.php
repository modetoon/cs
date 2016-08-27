            
            <!--##/center##--> 
            <div class="unit size-col-d">

              <!-- <div class="topline">Products</div> -->

              <p><?php echo $content_abstract;?></p>

              <div class="spacer">&nbsp;</div>

                <?php echo $content;?>

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
          <div class="cright "><span>Copyright © Bayer Thai Co., Ltd.</span></div>
          <ul class="pagefunctions nvgtn">
            <li><a href="#print" class="icnPrint">Print</a></li>
            <li><a href="#share" class="icnShare">Share</a></li>
            <li class="onlymobile"><a href="contact.php" class="icnContact">Contact us</a></li>
            <li><a href="#header" class="icnTop">Top</a></li>
          </ul>
          <div class="printfooter">www.bayer.co.th</div>
        </div>
        <nav class="legal">
          <!-- <ul class="nvgtn clearfix">
					<li><a href="#" title="Conditions of Use">Conditions of Use</a></li>
					<li><a href="#" title="Privacy Statement ">Privacy Statement </a></li>
					<li><a href="#" title="Imprint">Imprint</a></li>   
          </ul> -->
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
		<?php
		$site_lang = $this->session->userdata('site_lang');
		$switch_to = ($site_lang == 'th') ? 'en': 'th';
		?>
        <li><a href="<?php echo site_url('langswitch/switchLanguage/'.$switch_to);?>" class="last"><?php echo ($site_lang == 'th') ? '<img src="'.site_url('resource/img/flag_en.jpg').'" width="20">': '<img src="'.site_url('resource/img/flag_th.jpg').'" width="20">';?></a></li>
      </ul>
    </nav>
    <!-- /Support Navigation --> 
  </div>

  <nav id="fatfooter">
    <div class="shdw"></div>
    <ul class="nvgtn fatfooter">
      <?php //include "btm_menu.php"; ?>
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
<?php
$base_url = base_url();
$base_url = str_replace('/cropscience','',$base_url);
?>
<script src="<?php echo $base_url;?>js_b/bayer.js"></script>
<script src="<?php echo $base_url;?>js_b/custom.js"></script>
<script src="<?php echo $base_url;?>js_b/bayerworldwide.js"></script>
<script src="<?php echo $base_url;?>js_b/placeholder.js"></script>
<script>
	//add page specific JS here
</script>
</body>
</html>