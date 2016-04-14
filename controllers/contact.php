<?php
// Kenneth Geris

class Contact extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->model('model_contact');
	}	
	function index()
	{
        $now = date("Y-m-d H:i:s");
        if ($this->session->userdata('is_logged_in')){
			$data = $this->session->all_userdata();
			$data['title'] = "Profiel";
			$this->load->view("view_header");
			$this->load->view("view_navlogged" , $data);	
           }
        else{
            $data['title'] = "Contact";
            $this->load->view("view_header");
            $this->load->view("view_nav", $data);
        }            
		$this->form_validation->set_rules('name', 'name', 'required|xss_clean|max_length[50]');			
                $this->form_validation->set_rules('email', 'email', 'required|xss_clean|valid_email|max_length[50]');				
		$this->form_validation->set_rules('message', 'message', 'required|xss_clean|max_length[500]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('view_contact');
		}
		else
		{
		 	// build array for the model
			$form_data = array(
					       	'name' => set_value('name'),
					       	'email' => set_value('email'),
					       	'message' => set_value('message'),
                            'date_submit' => $now
                            
						);
					
			// run insert model to write data to db
			if ($this->model_contact->SaveForm($form_data) == TRUE){ 
				redirect('contact');
			}
			else
			{
			echo 'Er zijn een aantal hooggetrainde apen aan de site aan het prullen geweest!';
			}
		}
                $this->load->view("view_footer");
	}

}
?>