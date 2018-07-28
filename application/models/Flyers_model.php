<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flyers_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	
	public function save_flyers($data){
		$this->db->insert('Bibliotics_flyers', $data);
		return $insert_id = $this->db->insert_id();
	}
	public function get_flyers_list($id){
		$this->db->select('Bibliotics_flyers.*,journals.title as journaltitle,Bibliotics_journal_category.category')->from('Bibliotics_flyers');		
		$this->db->join('journals ', 'journals.j_id = Bibliotics_flyers.journal_id', 'left');
		$this->db->join('Bibliotics_journal_category ', 'Bibliotics_journal_category.c_id = Bibliotics_flyers.journal_cat_id', 'left');
		$this->db->where('Bibliotics_flyers.create_by',$id);
        return $this->db->get()->result_array();	
	}
	public function get_flyers_details($id){
		$this->db->select('*')->from('Bibliotics_flyers');		
		$this->db->where('f_id',$id);
        return $this->db->get()->row_array();	
	}
	public function update_flyers_details($id,$data){
		$this->db->where('f_id',$id);
    	return $this->db->update("Bibliotics_flyers",$data);
	}
	public function delete_flyers($id){
		$this->db->where('f_id', $id);
		return $this->db->delete('Bibliotics_flyers');
	}
	

}