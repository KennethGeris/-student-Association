<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Kenneth Geris
//Bron algemene indeling van de site: youtube tutorial op CodeIgniter van PHPAcadamy

class Home extends CI_Controller{
		
	function __construct() {
		parent:: __construct();
		$this->load->model('model_evenement');
	}
	
	public function index(){
		$this->Home();
	}
	
	// homepage
	public function Home(){
           if ($this->session->userdata('is_logged_in')){
		$data = $this->session->all_userdata();
		$data['title'] = "Profiel";
		$data['post'] = $this->model_evenement->getPosts(null);
		$this->load->view("view_header", $data);
		$this->load->view("view_navlogged");
		$this->load->view("view_home", $data);
		$this->load->view("view_footer");	
           }
           else{
               	$data['title'] = "Home";
		$data['post'] = $this->model_evenement->getPosts(null);
                $this->load->view("view_header");
                $this->load->view("view_nav");
		$this->load->view("view_home", $data);
		$this->load->view("view_footer");
           }
	}	
}

?>