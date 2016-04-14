<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Sam Neven
class Forum extends CI_Controller{
	
	function __construct() {
		parent:: __construct();		
		$this->load->model('model_forum');
	}
	
	public function index(){
		$this->forum();
	}
	
	public function forum(){
		if ($this->session->userdata('is_logged_in')){
        $data = $this->session->all_userdata();
		$data['title'] = "Forum";
		$data['query'] = $this->model_forum->getTopics();
		$this->load->view("view_header", $data);
		$this->load->view("view_navlogged");
		$this->load->view("view_forum");
		$this->load->view("view_footer");	
		}
		else {
			$data['title'] = "Forum";
			$data['query'] = $this->model_forum->getTopicsLoggedIn();
			$this->load->view("view_header", $data);
			$this->load->view("view_nav");
			$this->load->view("view_forum");
			$this->load->view("view_footer");	
		}
	}
	
	public function details($id){
		$data['title'] = "Details";
		$data['query'] = $this->model_forum->getDetails($id); 
		$this->load->view("view_header", $data);
		$this->load->view("view_nav");
		$this->load->view("view_details"); 
		$this->load->view("view_footer");	
	}
	
	//om te editen en deleten hebben we van volgende website gebruik gemaakt  http://imsocode.com/?p=285
	public function deleteTopic($id){
		$this->model_forum->deleteTopic($id);
		redirect('forum');
	}
	
}