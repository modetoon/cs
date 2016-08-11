<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('top_menu')){
		function top_menu($menu_slug='') {
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
			//$html .= '	<ul id="mega-menu-1" class="megamenu">';
			$html .= '	<ul id="mega-menu" class="megamenu">';
			$cls = ($menu_slug == 'home') ? 'class="selected"': '';
			$html .= '		<li class="n1"><a href="'.site_url("/").'" '.$cls.'>Home</a></li>';

					$query = $ci->db->query("SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '0' AND M.Status = '1' AND C.Status = '1' ORDER BY M.Position");
					if ($query->num_rows() > 0){
							foreach ($query->result() as $row){
							   $cls = (($menu_slug == $row->Slug) && ($row->Slug != '')) ? ' selected': '';
							   $html .= '		<li class="n2">
																  <a class="haschild '.$cls.'" href="'.site_url($row->Url).'">'.$row->MenuNameEN.'</a>
																  <ul class="newsub">
																			<li class="megaTsrBx">
																			  <h2 class="thdln">'.$row->MenuNameEN.'</h2>
																			  <a href="'.site_url($row->Url).'"><img width="170" height="100" data-original="'.site_url('upload/'.$row->Image).'" alt="'.$row->MenuNameEN.'" src="'.site_url('upload/'.$row->Image).'" class="lazy"></a>
																				<p>'.$row->ImageCaption.'</p>
																				<div class="lnk"><a href="'.site_url($row->Url).'">Overview</a></div>
																			  </li>';

																			  $query2 = $ci->db->query("SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '".$row->MenuID."' AND M.Status = '1'  AND C.Status = '1' ORDER BY M.Position");
																			  if ($query2->num_rows() > 0){
																						$html .= '<li class="newlevel2">';
																						$html .= '	<ul>';
																						foreach ($query2->result() as $row2){
																							$query3 = $ci->db->query("SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '".$row2->MenuID."' AND M.Status = '1' AND C.Status = '1'  ORDER BY M.Position");
																							$cls = ($query3->num_rows() > 0) ? ' class="haschild"': '';
																							$html .= '	<li '.$cls.'><a href="'.site_url($row2->Url).'">'.$row2->MenuNameEN.'</a>';
																							if ($query3->num_rows() > 0){
																										$html .= '	<ul>';
																										foreach ($query3->result() as $row3){
																																$html .= '<li><a href="'.site_url($row3->Url).'">'.$row3->MenuNameEN.'</a></li>';
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

			$html .= '	</ul>
								<ul class="nobulls extra-nav ">
            						<li><a href="search_content.php" class="ir icon-search">Search</a></li>
        						</ul>';
			$html .= '</nav>';
			return $html;

		}

}


if ( ! function_exists('left_menu_home')){
		function left_menu_home() {
			$ci =& get_instance();
			$ci->load->database();

			$html = '';
			$html .= '<nav id="lefthand" class="unit size-col-a lfthnd">';
			$html .= '<ul class="lfthndnavi">';
			$html .= '<li class="selected"><a class="selected" href="#">Overview</a></li>';

					$query = $ci->db->query("SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '0' AND M.Status = '1' AND C.Status = '1' ORDER BY M.Position");
					if ($query->num_rows() > 0){
							foreach ($query->result() as $row){
								$query2 = $ci->db->query("SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE Parent = '".$row->MenuID."' AND M.Status = '1' AND C.Status = '1' ORDER BY M.Position");
								$cls = ($query2->num_rows() > 0) ? 'class="haschildren"': '';
							    $html .= '		<li '.$cls.'><a href="index.php"> '.$row->MenuNameEN.'</a>';
																			  
																			  if ($query2->num_rows() > 0){
																						$html .= '<ul>';
																						foreach ($query2->result() as $row2){
																							$html .= '	<li><a href="'.$row2->Url.'">'.$row2->MenuNameEN.'</a></li>';
																						}
																						$html .= '</ul>';
																			  }

								  $html .= '		</li>';
							}
					}

			$html .= '</ul>';
			$html .= '</nav>';
			return $html;

		}

}


if ( ! function_exists('left_menu_content')){
		function left_menu_content($menu_id='',$level='',$parent='') {
			$ci =& get_instance();
			$ci->load->database();

			$html = '';
			$html .= '<nav id="lefthand" class="unit size-col-a lfthnd">';
			$html .= '<ul class="lfthndnavi">';
			if($level == ''){
				$html .= '<li class="selected"><a class="selected" href="#">Overview</a></li>';
			}
					$menu_id = ($menu_id == '') ? 0: $menu_id;
					if($level == 1){
						$query = $ci->db->query("SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '".$menu_id."' AND M.Status = '1' AND C.Status = '1' ORDER BY M.Position");
					}else{
						$query = $ci->db->query("SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '".$parent."' AND M.Status = '1' AND C.Status = '1' ORDER BY M.Position");
					}
					if ($query->num_rows() > 0){
							foreach ($query->result() as $row){
								$query2 = $ci->db->query("SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '".$row->MenuID."' AND M.Status = '1' AND C.Status = '1' ORDER BY M.Position");
								$cls = array();
								$cls[] = ($query2->num_rows() > 0) ? 'haschildren': '';
								$cls[] = ($menu_id == $row->MenuID) ? 'selected': '';
								$cls_str = implode(" ",$cls);
								$cls_str = 'class="'.$cls_str.'"';
							    $html .= '		<li '.$cls_str.'><a href="'.site_url($row->Url).'"> '.$row->MenuNameEN.'</a>';
																			  
																			  if ($query2->num_rows() > 0){
																						$html .= '<ul>';
																						foreach ($query2->result() as $row2){
																							$html .= '	<li><a href="'.site_url($row2->Url).'">'.$row2->MenuNameEN.'</a></li>';
																						}
																						$html .= '</ul>';
																			  }

								  $html .= '		</li>';
							}
							
					}

			$html .= '</ul>';
			$html .= '</nav>';
			return $html;

		}

}


?>  