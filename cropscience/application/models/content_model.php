<?php

class Content_model extends CI_Model {
	
	protected $table_name = 'content';
	protected $primary_key = 'ContentID';
    protected $table_menu_name = 'menu';
    protected $primary_menu_key = 'MenuID'; 

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();

    }
    
    function get_menu()
    {
        $sql = "SELECT M2.MenuNameEN as ParentMenuName, M1.MenuID, M1.Parent, M1.MenuNameEN as MenuName FROM ".$this->table_menu_name." M1 LEFT JOIN ".$this->table_menu_name." M2 ON M1.Parent = M2.MenuID ORDER BY M1.Parent, M1.Position"; 
        $query = $this->db->query($sql);        
        return $query->result();
    }

    function get_menu_parent($parent=0)
    {

        $sql = "SELECT * FROM ".$this->table_menu_name." WHERE Parent = ? AND Status = 1"; 
        $query = $this->db->query($sql, array($parent));
        return $query->result();
    } 

    function get_list()
    {
        $sql = "SELECT C.*, M.MenuNameEN as MenuName FROM ".$this->table_name." C LEFT JOIN ".$this->table_menu_name." M ON C.MenuID = M.MenuID ORDER BY C.ContentID"; 
        $query = $this->db->query($sql);        
        return $query->result();
    }  
    
    function get_data($id)
    {

        $this->db->where($this->primary_key, $id);
        $this->db->limit(1);
        return $this->db->get($this->table_name)->row();
    } 

    function delete_data($id){

        $this->db->where($this->primary_key, $id);
        $this->db->delete($this->table_name);
    }

    function get_menu_structure($selected=''){
        $this->db->order_by('Position','asc');
        $this->db->select('*')->from($this->table_menu_name);
        $q=$this->db->get();
        foreach($q->result() as $r){
            
            $data[$r->Parent][] = $r;
        }
        $menu=$this->build_menu($data, 0,$selected); // From Parent ID 1
        return $menu;
    } 
    
    
    function build_menu($category, $parent,$selected){
        static $i = 1;
        $path = '';
        if (array_key_exists($parent, $category)) {
            $menu = ($parent != 0) ? '': '<select class="form-control" name="MenuID"><option value="">Please select';
            $i++;
            foreach ($category[$parent] as $r) {
                $child = $this->build_menu($category, $r->MenuID, $selected);
                $level_str = "";
                if($parent != 0){
                    $level_str = str_repeat("&nbsp;&nbsp;",$r->Level);
                    $level_str .= "|--";
                }
                $cls = ($selected == $r->MenuID) ? 'selected': '';
                $menu .= '<option value="'.$r->MenuID.'" '.$cls.'>'.$level_str.$r->MenuNameEN;
                if ($child) {
                    $i--;
                    $menu .= $child;
                }
                $menu .= '</option>';
            }
            $menu .= ($parent != 0) ? '': '</select>';
            return $menu;
        } else {
            return false;
        }
    }

    function get_template_dropdownlist($template=''){
        $menu = '';
        $sql = "SELECT * FROM template ORDER BY TemplateID"; 
        $query = $this->db->query($sql);        
        $row = $query->result();
        $menu .= '<select class="form-control" name="TemplateID" id="TemplateID"><option value="">Please select';
        foreach($row as $r){
            $cls = ($r->TemplateID == $template) ? 'selected': '';
            $menu .= '<option value="'.$r->TemplateID.'" '.$cls.'>'.$r->TemplateName;
        }
        $menu .= '</select>';
        return $menu;
    }

    function get_template_data($template_id='')
    {
        $this->db->where('TemplateID', $template_id);
        $this->db->limit(1);
        return $this->db->get('template')->row();
    } 

    function get_product_dropdownlist($product=''){
        $menu = '';
        $sql = "SELECT * FROM product ORDER BY TradeName"; 
        $query = $this->db->query($sql);        
        $row = $query->result();
        $menu .= '<select class="form-control" name="ProductID"><option value="">Please select';
        foreach($row as $r){
            $cls = ($r->ProductID == $product) ? 'selected': '';
            $menu .= '<option value="'.$r->ProductID.'" '.$cls.'>'.$r->TradeName;
        }
        $menu .= '</select>';
        return $menu;
    }

    function insert_data($data){
        $this->db->insert($this->table_name, $data);
    }

    function update_data($data,$id){
        $this->db->where($this->primary_key,$id);
        $this->db->update($this->table_name, $data);     
    }

}

?>