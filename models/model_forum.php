<?php
// Sam Neven
class Model_forum extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function newTopic($form_data){
		$this->db->insert('forum', $form_data);
		
		if ($this->db->affected_rows() == '1'){
			return true;
		}
		return false;
	}
	
	function getTopics(){
		// alle topics ophalen en sorteren van de nieuwste naar de laatste
		$this->db->select();
		$this->db->from('forum');
		$this->db->order_by('subject', 'asc');		
		$query = $this->db->get();
		return $query->result();		
	}
	
	function getTopicsLoggedIn(){
		// alle topics ophalen en sorteren van de nieuwste naar de laatste
		$this->db->select();
		$this->db->from('forum');
		$this->db->like('subject', 'regels');
		$this->db->order_by('subject', 'asc');		
		$query = $this->db->get();
		return $query->result();		
	}
	
	function getDetails($id){
		$this->db->select();
		$this->db->from('forum');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}
	
	//om te editen en deleten hebben we van volgende website gebruik gemaakt  http://imsocode.com/?p=285
	function deleteTopic($id){
		$this->db->delete('forum', array('id' => $id));
		return;
	}
}
?>