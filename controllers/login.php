<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Kenneth Geris
//Bron algemene indeling van de site: youtube tutorial op CodeIgniter van PHPAcadamy

class login extends CI_Controller {
	
	function __construct() {
		parent:: __construct();
		$this->load->helper('captcha');
	}	
	
	public function index(){
		$this->Login();
	}

	// de register/login pagina
	public function Login(){
		$title['title'] = "Login";		
		$this->load->view("view_header", $title);
		$this->load->view("view_nav");		
		$this->load->view("view_login");		
		$this->load->view("view_footer");
	}
	
	public function login_validation(){
						
			$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');
			$this->form_validation->set_rules('password', 'Password', 'required|md5|trim');
			
			$this->load->model('model_users');
			
			if ($this->form_validation->run()){
				$email = $this->input->post('email');
				$id = $this->model_users->getID($email);
				
				// data in session (cookie) opslaan
				$data = array(
					'email' => $email,
					'is_logged_in' => 1,
					'id' => $id
				);
				
				$this->session->set_userdata($data);
				redirect('profiel');
			} else {
				$this->login();	
			}			
	}
	
	public function validate_credentials(){
		$this->load->model('model_users');		
		if ($this->model_users->can_log_in()){
			return true;
		} else {
				$this->form_validation->set_message('validate_credentials', 'Incorrect username/password.');
			return false;	
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();	
		redirect('home');
	}
}

?>
	