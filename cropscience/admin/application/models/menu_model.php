<?php

class Menu_model extends CI_Model {
	
	protected $table_name = 'menu';
	protected $primary_key = 'MenuID';
    protected $parent_key = 'Parent';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();

    }
    
    function get_menu()
    {
        //$query = $this->db->get($this->table_name, 10);
        $sql = "SELECT M2.MenuNameEN as ParentMenuName, M1.MenuID, M1.MenuNameEN as MenuName FROM ".$this->table_name." M1 LEFT JOIN ".$this->table_name." M2 ON M1.Parent = M2.MenuID WHERE M1.Status = 1"; 
        $query = $this->db->query($sql);        
        return $query->result();
    }

    function get_menu_parent($parent=0)
    {

        $sql = "SELECT * FROM ".$this->table_name." WHERE Parent = ? AND Status = 1"; 
        $query = $this->db->query($sql, array($parent));

        //$query = $this->db->get_where($this->table_name, array($this->parent_key => $parent))->row();
        return $query->result();
    } 


}

?>