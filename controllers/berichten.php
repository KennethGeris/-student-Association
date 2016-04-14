<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Bron algemene indeling van de site: youtube tutorial op CodeIgniter van PHPAcadamy

class Berichten extends CI_Controller{
	
	function __construct() {
		parent:: __construct();
	}
        
	public function index(){
                $this->bericht();
	}
        
        public function bericht(){
            if ($this->session->userdata('is_logged_in')){
                $data = $this->session->all_userdata();
                $this->load->view("view_header");
                $this->load->view("view_navlogged", $data);
                $this->load->model("model_berichten");
                $data['results'] = $this->model_berichten->getBerichten();
                $this->load->view("view_berichten", $data);    
                $this->load->view("view_footer");                
            }
        }
 }