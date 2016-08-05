<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('top_menu')){
		function top_menu() {
			$ci =& get_instance();
			$ci->load->database();

			$html = '';
			$html .= '<nav class="mobilenav">
									  <ul class="nobulls">
										<li><a href="#nav" class="mnav">Menu</a></li>
										<li><a href="contact.php" class="mcontact">Contact</a></li>
										<li><a href="#socialbar" class="mshare">Share</a></li>
										<li><a href="#search" class="msearch">Search</a></li>      
										<li class="mlang"><a href="../th/index.php" class="mlang">TH</a></li>
									  </ul>
							</nav>';
			$html .= '<nav role="navigation" class="navigation">';
			$html .= '	<ul id="mega-menu-1" class="megamenu">';
			$html .= '		<li class="n1"><a href="../index.php">Home</a></li>';

					$query = $ci->db->query("SELECT * FROM menu WHERE Parent = '0' ORDER BY Position");
					if ($query->num_rows() > 0){
							foreach ($query->result() as $row){
							   $html .= '		<li class="n2">
																  <a class="haschild" href="#">'.$row->MenuNameEN.'</a>
																  <ul class="newsub">
																			<li class="megaTsrBx">
																			  <h2 class="thdln">'.$row->MenuNameEN.'</h2>
																			  <a href="#"><img width="170" height="100" data-original="../img/top_menu/image_ar2015_284.jpg" alt="" src="../img/top_menu/image_ar2015_284.jpg" class="lazy"></a>
																				<p>The activities of Bayer Thai are concentrated in three business subgroups: Bayer HealthCare (BHC), Bayer CropScience (BCS). Moreover, Bayer Thai also take care of an agency business representing third parties.</p>
																				<div class="lnk"><a href="crp-content.php">Overview</a></div>
																			  </li>';

																			  $query2 = $ci->db->query("SELECT * FROM menu WHERE Parent = '".$row->MenuID."' ORDER BY Position");
																			  if ($query2->num_rows() > 0){
																						$html .= '<li class="newlevel2">';
																						$html .= '	<ul>';
																						foreach ($query2->result() as $row2){
																							$query3 = $ci->db->query("SELECT * FROM menu WHERE Parent = '".$row2->MenuID."' ORDER BY Position");
																							$cls = ($query3->num_rows() > 0) ? ' class="haschild"': '';
																							$html .= '	<li '.$cls.'><a href="crp-content.php">'.$row2->MenuNameEN.'</a>';
																							if ($query3->num_rows() > 0){
																										$html .= '	<ul>';
																										foreach ($query3->result() as $row3){
																																$html .= '<li><a href="crp-product-details.php">'.$row3->MenuNameEN.'</a></li>';
																										}
																										$html .= '	</ul>';
																							}
																							$html .= '</li>';
																						}
																						$html .= '	</ul>';
																						$html .= '</li>';
																			  }

								  $html .= '				</ul>';
								  $html .= '		</li>';
							}
					}

			$html .= '	</ul>';
			$html .= '</nav>';
			return $html;


		}
}

?>  