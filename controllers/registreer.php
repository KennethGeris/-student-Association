<?php
// Sam Neven & Kenneth Geris
class registreer extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->helper('captcha');
	}
	
	public function index(){
		$this->Registreer();
	}
	
        
    public function registreer(){

            // instellingen voor validatie op het registratieformulier
            $this->form_validation->set_rules("first_name", "First name", "required|alpha|trim|xss_clean");
            $this->form_validation->set_rules("name", "Name", "required|alpha|trim|xss_clean");
            $this->form_validation->set_rules("password", "Password", "required|trim|xss_clean");
            $this->form_validation->set_rules("cpassword", "Confirm Password", "required|trim|matches[password]|xss_clean");
            $this->form_validation->set_rules("date", "date", "required|trim|xss_clean");
            $this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[users_reg.email]|trim|xss_clean");
            $this->form_validation->set_rules("captcha", "captcha", "callback_captcha_check|trim|xss_clean|match_captcha[captcha.word]");
            $this->form_validation->set_message("is_unique", "That email address already exists.");


            // als validatie foutloopt
            if ($this->form_validation->run() == FALSE) {
                    $this->load->model('model_captcha');
                    $title['title'] = "Register";
                    $data["message"] = "";
                    $data['image'] = $this->model_captcha->create_image();
                    $this->load->view("view_header", $title);
                    $this->load->view("view_nav");				
                    $this->load->view("view_registreer", $data);			
                    $this->load->view("view_footer");
            }
            // als validatie goed is
            else {
                    $title['title'] = "Register";
                    $data["message"] = "Registration has been succesfully submitted";

                    // het model registreren laden om de registratie te voltooien
                    $this->load->model("model_register");
                    $this->model_register->register();

                    // na login redirect naar login pagina
                    redirect('login');
            }		
    }

    public function captcha_check($value){

            if ($value == ''){
                    $this->form_validation->set_message('captcha_check', 'Please enter the text from the image');
                    return false;	
            }else{
                    return true;	
            }

    }
}
?>
