<?php
//Kenneth Geris

class Model_edit extends CI_Model{
	
	var $gallery_path;
	var $gallery_path_url;
	
	function Model_edit(){
	
		parent::__construct();
		
		$this->gallery_path = realpath(APPPATH . '../img/profilepics');
		$this->gallery_path_url = base_url().'img/profilepics/';
	}
	
	function getUserId($email){
		$this->db->select();
		$this->db->from('users_reg');
		$this->db->where('email', $email);
		$query = $this->db->get();
		
		foreach ($query->result() as $row){
			$id = $row->id;
		}		
	}
	
	function do_upload(){
		
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path,
			'max_size' => 2000
		);
		
		$this->load->library('upload', $config);	
		$this->upload->do_upload();
		$image_data = $this->upload->data();
		
		$config = array(
			'source_image' => $image_data['full_path'],
			'new_image' => $this->gallery_path.'/thumbs/',
			'maintain_ratio' => true,
			'width' => 75,
			'height' => 75
		);
		
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
	}
	
	function get_images(){
	
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.', '..', 'thumbs'));
		
		$images = array();
		
		foreach ($files as $file){
				$images []= array(
					'url' => $this->gallery_path_url.$file,
					'thumb_url' => $this->gallery_path_url.'thumbs/'.$file
				);
		}
		
		return $images;
		
	}
	
}