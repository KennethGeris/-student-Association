<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Kenneth Geris
//Bron algemene indeling van de site: youtube tutorial op CodeIgniter van PHPAcadamy

class OverHexion extends CI_Controller{
	
	function __construct() {
		parent:: __construct();
	}
	
	public function index(){
		$this->OverHexion();
	}
	
	// over hexion
	public function OverHexion(){
        if ($this->session->userdata('is_logged_in')){
			$data = $this->session->all_userdata();
            $this->load->view("view_header", $data);
            $this->load->view("view_navlogged");
			$this->load->view("view_overhexion", $data);
			$this->load->view("view_footer");
        }
        else{
			$data['title'] = "overHexion";
			$this->load->view("view_header");
            $this->load->view("view_nav");               
			$this->load->view("view_overhexion", $data);
			$this->load->view("view_footer");	
        }
	}	
}