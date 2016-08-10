<?php

class Frontcontent_model extends CI_Model {
	
	protected $menu_table_name = 'menu';
	protected $menu_primary_key = 'MenuID';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();

    }
    
    function get_list()
    {
        $sql = "SELECT * FROM ".$this->table_name." ORDER BY ContentID"; 
        $query = $this->db->query($sql);        
        return $query->result();
    }  
    
    function get_menudata($slug='')
    {
        $sql = "SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE C.Slug = '".$slug."' LIMIT 0,1"; 
        $query = $this->db->query($sql);        
        $arr =  $query->result();
		return $arr[0];
    } 

    function get_menu($menu_id='')
    {
        $sql = "SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.MenuID = '".$menu_id."' LIMIT 0,1"; 
        $query = $this->db->query($sql);        
        $arr =  $query->result();
		if(count( $arr) > 0){
			return $arr[0];
		}else{
			return array();
		}
    }	
	
    function get_content($menu_id='')
    {
        $this->db->where("MenuID", $menu_id);
        $this->db->limit(1);
        return $this->db->get('content')->row();
    } 

    function get_content_product_ul($menu_id='',$parent='')
    {
		$html = '';
        if($parent == 0){

			$sql = "SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '".$menu_id."' ORDER BY M.Position"; 
			$query = $this->db->query($sql);        
			$arr =  $query->result();
			foreach($arr as $row){
				$html .= '<h2>'.$row->MenuNameEN.'</h2> 
								<hr>';

								$sql_sub = "SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '".$row->MenuID."' ORDER BY M.Position"; 
								$query_sub = $this->db->query($sql_sub);        
								$arr_sub =  $query_sub->result();
								if ($query_sub->num_rows() > 0){
									$html .= '<ul class="prd-list">';
									foreach($arr_sub as $row_sub){
										$html .= '<li><a href="'.$row_sub->Url.'">'.$row_sub->MenuNameEN.'</a></li>';
									}
									$html .= '</ul>';
									$html .= '	<div class="spacer">&nbsp;</div>';
								}

			}
			return  $html;

		}else{

			$sql = "SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.MenuID = '".$menu_id."' ORDER BY M.Position"; 
			$query = $this->db->query($sql);        
			$arr =  $query->result();
			foreach($arr as $row){
				$html .= '<h2>'.$row->MenuNameEN.'</h2> 
								<hr>';

								$sql_sub = "SELECT M.*, C.Slug, C.Url FROM menu M LEFT JOIN content C ON M.MenuID = C.MenuID WHERE M.Parent = '".$row->MenuID."' ORDER BY M.Position"; 
								$query_sub = $this->db->query($sql_sub);        
								$arr_sub =  $query_sub->result();
								if ($query_sub->num_rows() > 0){
									$html .= '<ul class="prd-list">';
									foreach($arr_sub as $row_sub){
										$html .= '<li><a href="'.site_url($row_sub->Url).'">'.$row_sub->MenuNameEN.'</a></li>';
									}
									$html .= '</ul>';
									$html .= '	<div class="spacer">&nbsp;</div>';
								}

			}
			return  $html;
			
		}
    } 
	
    function get_view($view_id='')
    {
        $this->db->where("TemplateID", $view_id);
        $this->db->limit(1);
        return $this->db->get('template')->row();
    } 

    function get_template_dropdownlist($template=''){
        $menu = '';
        $sql = "SELECT * FROM template ORDER BY TemplateID"; 
        $query = $this->db->query($sql);        
        $row = $query->result();
        $menu .= '<select class="form-control" name="TemplateID"><option value="">Please select';
        foreach($row as $r){
            $cls = ($r->TemplateID == $template) ? 'selected': '';
            $menu .= '<option value="'.$r->TemplateID.'" '.$cls.'>'.$r->TemplateName;
        }
        $menu .= '</select>';
        return $menu;
    }



}

?>