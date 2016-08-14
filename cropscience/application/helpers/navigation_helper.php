<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function breadcrump($menu_slug='') {
	$ci =& get_instance();
	$ci->load->database();

	$li_str = '';

	$menu_data = $ci->Frontcontent_model->get_menudata($menu_slug);
	$menu_parent = $menu_data->Parent;
	$menu_id = $menu_data->MenuID;
	$menu_level = $menu_data->Level;
	$menu_name = $menu_data->MenuNameEN;
	$content_data = $ci->Frontcontent_model->get_content($menu_id);
	
	if($menu_parent == 0){
		$li_str .= '<li><a title="" href="'.site_url($ci->session->userdata('site_lang_url').$content_data->Url).'">'.$menu_name.'</a></li>';
	}else{
		if($menu_level == 3){

			$parent_menu_data2 = $ci->Frontcontent_model->get_parentdata($menu_data->Parent);
			$parent_content_data2 = $ci->Frontcontent_model->get_content($parent_menu_data2->MenuID);
			$li_str .= '<li><a title="" href="'.site_url($ci->session->userdata('site_lang_url').$parent_content_data2->Url).'">'.$parent_menu_data2->MenuNameEN.'</a></li>';

			$parent_menu_data = $ci->Frontcontent_model->get_parentdata($menu_data->MenuID);
			$parent_content_data = $ci->Frontcontent_model->get_content($parent_menu_data->MenuID);
			$li_str .= '<li><a title="" href="'.site_url($ci->session->userdata('site_lang_url').$parent_content_data->Url).'">'.$parent_menu_data->MenuNameEN.'</a></li>';
		}else{
			$parent_menu_data = $ci->Frontcontent_model->get_parentdata($menu_data->MenuID);
			$parent_content_data = $ci->Frontcontent_model->get_content($parent_menu_data->MenuID);
			$li_str .= '<li><a title="" href="'.site_url($ci->session->userdata('site_lang_url').$parent_content_data->Url).'">'.$parent_menu_data->MenuNameEN.'</a></li>';
		}
		$li_str .= '<li class="last"><a title="" href="'.site_url($ci->session->userdata('site_lang_url').$content_data->Url).'">'.$menu_name.'</a></li>';
	}

	$html = '';
	$html .= '<ul class="breadcrumb">
							<li><a href="'.site_url('').'">'.$ci->lang->line("home").'</a></li>';
							//<li><a title="" href="#">Business Operations</a></li>
							//<li class="last"><a title="" href="#">Crop Protections</a></li>        
	$html .= $li_str;
	$html .= '</ul>
					  <nav class="servicenav">
						<ul class="nobulls">
						  <li><a href="#print">Print</a></li>
						  <li><a href="#share" class="last">Share</a></li>
						</ul>
					  </nav>';
	return $html;
}

function top_menu($menu_slug='') {
			$ci =& get_instance();
			$ci->load->database();
			
			$top_menu = 0;
			if($menu_slug != 'home'){
				$menu_data = $ci->Frontcontent_model->get_menudata($menu_slug);
				$parent_menu_data = $ci->Frontcontent_model->get_parentdata($menu_data->MenuID);
				$top_menu = $parent_menu_data->MenuID;
			}

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
			$html .= '		<li class="n1"><a href="'.site_url("/").'" '.$cls.' title="'.$ci->lang->line("home").'" alt="'.$ci->lang->line("home").'">Home</a></li>';

					$query = $ci->db->query("SELECT DISTINCT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '0' AND M.Status = '1' AND C.Status = '1' ORDER BY M.Position");
					if ($query->num_rows() > 0){
							foreach ($query->result() as $row){
							   $cls = ((($menu_slug == $row->Slug) && ($row->Slug != '')) || ($top_menu == $row->MenuID)) ? ' selected': '';
							   $html .= '		<li class="n2">
																  <a class="haschild '.$cls.'" href="'.site_url($ci->session->userdata('site_lang_url').$row->Url).'">'.$row->MenuNameEN.'</a>
																  <ul class="newsub">
																			<li class="megaTsrBx">
																			  <h2 class="thdln">'.$row->MenuNameEN.'</h2>
																			  <a href="'.site_url($ci->session->userdata('site_lang_url').$row->Url).'"><img width="170" height="100" data-original="'.site_url('upload/'.$row->Image).'" alt="'.$row->MenuNameEN.'" src="'.site_url('upload/'.$row->Image).'" class="lazy"></a>
																				<p>'.$row->ImageCaption.'</p>
																				<div class="lnk"><a href="'.site_url($ci->session->userdata('site_lang_url').$row->Url).'">Overview</a></div>
																			  </li>';

																			  $query2 = $ci->db->query("SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '".$row->MenuID."' AND M.Status = '1'  AND C.Status = '1' ORDER BY M.Position");
																			  if ($query2->num_rows() > 0){
																						$html .= '<li class="newlevel2">';
																						$html .= '	<ul>';
																						foreach ($query2->result() as $row2){
																							$query3 = $ci->db->query("SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '".$row2->MenuID."' AND M.Status = '1' AND C.Status = '1'  ORDER BY M.Position");
																							$cls = ($query3->num_rows() > 0) ? ' class="haschild"': '';
																							$html .= '	<li '.$cls.'><a href="'.site_url($ci->session->userdata('site_lang_url').$row2->Url).'">'.$row2->MenuNameEN.'</a>';
																							if ($query3->num_rows() > 0){
																										$html .= '	<ul>';
																										foreach ($query3->result() as $row3){
																																$html .= '<li><a href="'.site_url($ci->session->userdata('site_lang_url').$row3->Url).'">'.$row3->MenuNameEN.'</a></li>';
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
     

if ( ! function_exists('slider')){
		function slider($page='') {
			$ci =& get_instance();
			$ci->load->database();

			$html = '';

					if($page == 'home'){
						$query = $ci->db->query("SELECT * FROM slider WHERE Status = '1' AND ShowHome = '1' ORDER BY SliderID");
					}else{
						$query = $ci->db->query("SELECT S.* FROM slider S LEFT JOIN content C ON S.SliderID = C.SliderID WHERE C.Slug = '".$page."' AND S.Status = '1' ORDER BY S.SliderID");
					}
					$total = $query->num_rows();

					if ($total > 0){
							$html .= '<div class="stage01">';
							$html .= '<div id="slider" class="flexslider">';
							$html .= '<ul class="slides">';
							foreach ($query->result() as $row){
							    $html .= '<li style="display: list-item;">
															  <div style="width:275px;" class="stagetext stageright ">
																  <div class="stagetopline">'.$row->SliderTopLine.'</div>
																  <h1 class="stagehdln">'.$row->SliderHeadLine.'</h1>
																<div><p>'.$row->SliderDetail.'</p><a href="'.site_url($ci->session->userdata('site_lang_url').$row->SliderLink).'" class="more">more</a></div></div>
															   <img src="'.site_url('upload/banner/'.$row->SliderImage).'" alt="'.$row->SliderHeadLine.'"> 
												</li>  ';
							}
							$html .= '</ul>';
							$html .= '</div>';
							$html .= '</div>';
					}

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
			
			$product_detail_level = false;
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

								$cls_link = ($menu_id == $row->MenuID) ? 'class="selected"': '';
							    $html .= '		<li '.$cls_str.'><a href="'.site_url($ci->session->userdata('site_lang_url').$row->Url).'" '.$cls_link.'> '.$row->MenuNameEN.'</a>';
																			  
																			  if ($query2->num_rows() > 0){
																						$html .= '<ul>';
																						foreach ($query2->result() as $row2){
																							$html .= '	<li><a href="'.site_url($ci->session->userdata('site_lang_url').$row2->Url).'">'.$row2->MenuNameEN.'</a></li>';
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

if ( ! function_exists('left_menu_productdetail')){
		function left_menu_productdetail($menu_id='',$parent='',$top_parent='') {
			$ci =& get_instance();
			$ci->load->database();

			$product_detail_level = false;
			$html = '';
			$html .= '<nav id="lefthand" class="unit size-col-a lfthnd">';
			$html .= '<ul class="lfthndnavi">';
			$html .= '<li class="selected"><a class="selected" href="#">Overview</a></li>';


					$menu_id = ($menu_id == '') ? 0: $menu_id;
					$query = $ci->db->query("SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '".$top_parent."' AND M.Status = '1' AND C.Status = '1' ORDER BY M.Position");

					if ($query->num_rows() > 0){
							foreach ($query->result() as $row){
								$query2 = $ci->db->query("SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '".$row->MenuID."' AND M.Status = '1' AND C.Status = '1' ORDER BY M.Position");
								$arrSubMenu = array();
								foreach ($query2->result() as $row_sub){
										$arrSubMenu[] = $row_sub->MenuID;
								}
								$cls = array();
								$cls[] = ($query2->num_rows() > 0) ? 'haschildren': '';
								$cls[] = (in_array($menu_id, $arrSubMenu)) ? 'selected': '';
								$cls_str = implode(" ",$cls);
								$cls_str = 'class="'.$cls_str.'"';

								$cls_link = ($parent == $row->MenuID) ? 'class="selected"': '';
							    $html .= '		<li '.$cls_str.'><a href="'.site_url($ci->session->userdata('site_lang_url').$row->Url).'" '.$cls_link.'> '.$row->MenuNameEN.'</a>';
																			  
																			  if ($query2->num_rows() > 0){
																						$html .= '<ul>';
																						foreach ($query2->result() as $row2){
																							$cls_link = ($menu_id == $row2->MenuID) ? 'class="selected"': '';
																							$html .= '	<li><a href="'.site_url($ci->session->userdata('site_lang_url').$row2->Url).'" '.$cls_link.'>'.$row2->MenuNameEN.'</a></li>';
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