<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Kenneth Geris
//Bron algemene indeling van de site: youtube tutorial op CodeIgniter van PHPAcadamy

class Profiel extends CI_Controller{
	
	public function index(){
		$this->Profiel();
	}
	
	function __construct() {
		parent:: __construct();
		$this->load->model('model_edit');
	}
	

    public function profiel(){
		
		$email = $this->session->userdata('email');// dafuck :o da mag toch nie hier, da moet toch in model? :oooo van wie is dit? dat moet eruit of we hebben 0 ja fuck ma hoe meoten we da dan oplossen... die query moet in een model terecht komen en dan hier die dinges opvragen van het model, net zoals bij forum, evenementen, doe es voor xD euhm xD wtf heeft hij hier allemaal gedaan xD ja,manman :pm
		// $query = $this->db->query("SELECT id FROM users_reg WHERE email = '".$email."'");
		
		// foreach ($query->result() as $row)
		// {
   			// $id = $row->id; // da query gedeelte moet gwn een functie in model zijn denk ik en dan roept ge die aan in uw controller uhu, ma ben effe aant kijken wat we allemaal weer nodig hebben ok
		// }
		
		$id = $this->model_edit->getUserId($email);
		
		if ($this->session->userdata('is_logged_in')){
                    $this->load->model('model_users');
                    $data = $this->session->all_userdata();
                    $data['images'] = $this->model_edit->get_images();
                    $dataProfile['q'] = $this->model_users->getDataProfile($id);
                    $data['title'] = "Profiel";
                    $this->load->view("view_header", $data);
                    $this->load->view("view_navlogged");
                    $this->load->view("view_profiel", $dataProfile, $data);
                    $this->load->view("view_footer");
		} else {
                    redirect('site/registerlogin');		
		}		
	}
        public function editProfile(){
	
		$this->form_validation->set_rules("status", "status", "trim|xss_clean");
		$this->form_validation->set_rules("location", "Location", "trim|xss_clean");
                $this->form_validation->set_rules("Education", "Education", "trim|xss_clean");
                $this->form_validation->set_rules("Hobbys", "Hobbys", "trim|xss_clean");
		$this->form_validation->set_rules("about", "about", "trim|xss_clean");
                $this->form_validation->set_rules('pxlmail', 'pxlmail', 'xss_clean|valid_email|max_length[50]');
                $this->form_validation->set_rules('flink', 'flink', 'xss_clean|max_length[50]');
		
		$this->load->model('model_edit');
		if($this->input->post('upload')){
					$this->model_edit->do_upload();
				}
		
		if ($this->form_validation->run() == FALSE) {
                        $data = $this->session->all_userdata();
                        $data['title'] = "Profiel";
                        $this->load->model('model_edit');
			$title['title'] = "Edit Profile";
			$data['images'] = $this->model_edit->get_images();			
			$this->load->view("view_header", $title);
			$this->load->view("view_navlogged", $data);				
			// load the search view
			$this->load->view("view_editprofiel", $data);			
			// footer load
			$this->load->view("view_footer");
		}
		else {
			//$email = $this->session->userdata('email');
			//$query = $this->db->query("SELECT id FROM users_reg WHERE email = '".$email."'");

			//foreach ($query->result() as $row)
			//{
   			//	$id = $row->id;
			//}		
			$this->load->model('model_edit');			
			$this->load->view("view_header", $title);
			$data['images'] = $this->model_edit->get_images();
			$this->load->view("view_navlogged");		
			$this->load->model("model_users");
			$dataProfile['q'] = $this->model_users->editprofile($id);
			// back to profile view
			$this->load->view("view_profiel", $dataProfile, $data);
			$this->load->view("view_footer");
		}		
	}
}