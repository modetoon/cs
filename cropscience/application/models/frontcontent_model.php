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
    
    function get_menudata($slug)
    {
        $this->db->where("Slug", $slug);
        $this->db->limit(1);
        return $this->db->get($this->menu_table_name)->row();
    } 

    function get_menu($menu_id)
    {
        $this->db->where("MenuID", $menu_id);
        $this->db->limit(1);
        return $this->db->get('menu')->row();
    } 
	
    function get_content($menu_id='')
    {
        $this->db->where("MenuID", $menu_id);
        $this->db->limit(1);
        return $this->db->get('content')->row();
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