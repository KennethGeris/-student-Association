<?php
// Glenn Verrue
class Model_evenement extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function newEntry($form_data){
		$this->db->insert('evenementen', $form_data);
		
		if ($this->db->affected_rows() == '1'){
			return true;
		}
		return false;
	}
	
	function getAllEntry(){
		// alle entry's ophalen en sorteren van de nieuwste naar de laatste
		$this->db->select('*');
		$this->db->from('evenementen');
		$this->db->order_by('date', 'asc');		
		$query = $this->db->get();
		return $query->result();		
	}
	
	// als $postId null is, haalt alle evenementen uit database, als id niet null is enkel evenement met die id
	// return $post[]
	function getPosts($postId){
		$post=array();
		if ($postId !== null){
			$query = $this->db->get_where('evenementen', array('id' => $postId));
			if ($query->num_rows() == 1){
				foreach($query->result() as $row){
				$post['id'] = $row->id;
				$post['title'] = $row->title;
				$post['date'] = $row->date;
				$post['about'] = $row->about;
				}
				return $post;
			}			
		}
		else {
			$query = $this->db->get('evenementen');
			if ($query->num_rows() !== 0){
				foreach($query->result() as $row){
					$post['id'][] = $row->id;
					$post['title'][] = $row->title;
					$post['date'][] = $row->date;
					$post['about'][] = $row->about;
				}
				return $post;
			}
		}
	}
	
	//om te editen en deleten hebben we van volgende website gebruik gemaakt  http://imsocode.com/?p=285
	function updatePost($postId, $data){
		$id = $postId;
		$this->db->where('id',$id);
		$this->db->update('evenementen', $data);
		return;
	}
	
	//om te editen en deleten hebben we van volgende website gebruik gemaakt  http://imsocode.com/?p=285
	function deletePost($postId){
		$id = $postId;
			$this->db->delete('evenementen', array('id' => $id));
			return;
	}
}
?>