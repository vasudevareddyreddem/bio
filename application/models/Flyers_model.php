<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flyers_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_flyers($data){
		$this->db->insert('bibliotics_flyers', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_flyers_list($id){
		$this->db->select('bibliotics_flyers.*,journals.title as journaltitle,bibliotics_journal_category.category')->from('bibliotics_flyers');		
		$this->db->join('journals ', 'journals.j_id = bibliotics_flyers.journal_id', 'left');
		$this->db->join('bibliotics_journal_category ', 'bibliotics_journal_category.c_id = bibliotics_flyers.journal_cat_id', 'left');
		$this->db->where('bibliotics_flyers.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_flyers_details($id){
		$this->db->select('*')->from('bibliotics_flyers');		
		$this->db->where('f_id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_flyers_details($id,$data){
		$this->db->where('f_id',$id);
    	return $this->db->update("bibliotics_flyers",$data);
	}
	public function delete_flyers($id){
		$this->db->where('f_id', $id);
		return $this->db->delete('bibliotics_flyers');
	}
	

}