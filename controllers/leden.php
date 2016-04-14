<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Kenneth Geris
//Bron algemene indeling van de site: youtube tutorial op CodeIgniter van PHPAcadamy

class Leden extends CI_Controller{
	
	function __construct() {
		parent:: __construct();
	}
	
	public function index(){
		$this->Leden();
	}
	
	// over hexion
	public function Leden(){
                if ($this->session->userdata('is_logged_in')){
                    $data = $this->session->all_userdata();
                    $this->load->view("view_header");
                    $this->load->view("view_navlogged", $data);
                    $this->load->model("model_users");
                    $data['results'] = $this->model_users->getAll();
                    $this->load->view("view_ledenlogged", $data);    
                    $this->load->view("view_footer");                
                }
                else{
                    $this->load->view("view_header");
                    $this->load->view("view_nav");
                    $this->load->model("model_users");
                    $data['results'] = $this->model_users->getAll();
                    $this->load->view("view_leden", $data);    
                    $this->load->view("view_footer");  
                }
	}

 }