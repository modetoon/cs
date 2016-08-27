<?php

class Cropcalendar_model extends CI_Model {
	
    protected $table_name = 'crop_calendar';
	protected $primary_key = 'CalendarID';
    protected $table_name_sub = 'crop_calendar_sub';
	protected $primary_key_sub = 'SubCalendarID';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();

    }
    
    function get_lists()
    {
        $sql = "SELECT * FROM ".$this->table_name." ORDER BY ".$this->primary_key; 
        $query = $this->db->query($sql);        
        return $query->result();
    }
	
    function get_sub_lists($calendar_id='')
    {
        $sql = "SELECT * FROM ".$this->table_name_sub." WHERE CalendarID = '".$calendar_id."' ORDER BY ".$this->primary_key_sub; 
        $query = $this->db->query($sql);        
        return $query->result();
    }
    
    function get_data($id)
    {
        $this->db->where($this->primary_key, $id);
        $this->db->limit(1);
        return $this->db->get($this->table_name)->row();
    } 

    function get_sub_data($id)
    {
        $this->db->where($this->primary_key_sub, $id);
        $this->db->limit(1);
        return $this->db->get($this->table_name_sub)->row();
    } 

    function delete($id){

        $this->db->where($this->primary_key, $id);
        $this->db->delete($this->table_name);
    }
	
    function delete_chart($id){

        $this->db->where($this->primary_key_sub, $id);
        $this->db->delete($this->table_name_sub);
    }

    function insert_data($data){
        $this->db->insert($this->table_name, $data);
    }
	
    function insert_sub_data($data){
        $this->db->insert($this->table_name_sub, $data);
		return $this->db->insert_id();
    }
    
    function update_data($data,$id){
        $this->db->where($this->primary_key,$id);
        $this->db->update($this->table_name, $data);     
    }

    function update_chart_data($data,$id){
        $this->db->where($this->primary_key_sub,$id);
        $this->db->update($this->table_name_sub, $data);     
    }


}

?>