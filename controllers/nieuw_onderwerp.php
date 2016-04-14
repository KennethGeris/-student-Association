<?php
// Sam Neven
class Nieuw_onderwerp extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_forum');
	}
	
	public function newTopic()
	{
		$data['title'] = "Nieuw Onderwerp";
		$this->load->view('view_header', $data);
		$this->load->view('view_nav');
		$this->load->view('view_nieuw_onderwerp');
		$this->load->view('view_footer');
	}
	
	public function index(){
		$this->newTopic();
		
		$this->form_validation->set_rules('subject', 'subject', 'required');
		$this->form_validation->set_rules('details', 'details', 'required');
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
		
		if ($this->form_validation->run() == FALSE) 
		{
			$this->load->view('view_nieuw_onderwerp');
            $this->load->view("view_footer");
		}
		else
		{
		 	// build array for the model
			$form_data = array(
					       	'subject' => set_value('subject'),
					       	'details' => set_value('details'),
					       	'name' => set_value('name'),
					       	'email' => set_value('email')
						);
		
			if ($this->model_forum->newTopic($form_data) == TRUE) 
			{
				redirect('forum');
			}
			else
			{
			echo 'Er zijn een aantal hooggetrainde apen aan de site aan het prullen geweest!';
			}
		}
		
	}	
}

?>