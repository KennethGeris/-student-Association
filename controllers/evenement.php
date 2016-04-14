<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Glenn Verrue
//Bron algemene indeling van de site: youtube tutorial op CodeIgniter van PHPAcadamy

class Evenement extends CI_Controller{
	
	function __construct() {
		parent:: __construct();
		$this->load->model('model_evenement');
	}
	
	public function index(){
		$this->evenement();
	}
	
	// evenementen
	public function evenement(){
           if ($this->session->userdata('is_logged_in')){
		$data = $this->session->all_userdata();
		$data['title'] = "Evenementen";
		$data['post'] = $this->model_evenement->getPosts(null);
		$this->load->view("view_header", $data);
		$this->load->view("view_navlogged");
		$this->load->view("view_evenement", $data);
		$this->load->view("view_footer");
           }else{
                $data['title'] = "Login";
               	$this->load->view("view_header", $data);
		$this->load->view("view_nav");
		$this->load->view("view_login", $data);
		$this->load->view("view_footer");
           }
	}
	
	//om te editen en deleten hebben we van volgende website gebruik gemaakt  http://imsocode.com/?p=285
	public function edit($postId){
		$data['query'] = "Bewerk evenement";
		$data['post'] = $this->model_evenement->getPosts($postId);		
		
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('date', 'date', 'required');
		$this->form_validation->set_rules('about', 'about', 'required');
		
		$this->form_validation->set_error_delimiters('<br/><span class="error">', '</span>');
		
		if($this->form_validation->run() == false){
			$this->load->view("view_header", $data);
			$this->load->view("view_nav");
			$this->load->view("view_bewerkEvenement", $data);
			$this->load->view("view_footer");
		} else {
			$data = $_POST;
			$this->model_evenement->updatePost($postId, $data);
			redirect('evenement');
		}
	}
	
	//om te editen en deleten hebben we van volgende website gebruik gemaakt  http://imsocode.com/?p=285
	function delete($postId){
		$this->model_evenement->deletePost($postId);
		redirect('evenement');
	}
}