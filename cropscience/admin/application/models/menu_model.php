<?php

class Menu_model extends CI_Model {
	
	protected $table_name = 'menu';
	protected $primary_key = 'MenuID';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();

    }
    
    function get_menu()
    {
        $query = $this->db->get($this->table_name, 10);
        //$query = $this->db->get_where($this->table_name, array($this->primary_key => $id))->row();
        return $query->result();
    }


}

?>