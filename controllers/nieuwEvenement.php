<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// Glenn Verrue
//Bron algemene indeling van de site: youtube tutorial op CodeIgniter van PHPAcadamy

class nieuwEvenement extends CI_Controller{
	
	function __construct() {
		parent:: __construct();
		$this->load->model('model_evenement');
	}
	
	// nieuw evenement aanmaken
	public function nieuwEvenement(){
		
		$data['title'] = "Nieuw evenement";
		$this->load->view("view_header", $data);
		$this->load->view("view_nav");
		$this->load->view("view_nieuwEvenement");
		$this->load->view("view_footer");
	}
	
	public function index(){
		$this->nieuwEvenement();
		
		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('date', 'date', 'required');
		$this->form_validation->set_rules('about', 'about', 'required');
		
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
		
		if ($this->form_validation->run() == TRUE)
		{ 
			// build array for the model
			$form_data = array(
					       	'title' => set_value('title'),
					       	'date' => set_value('date'),
					       	'about' => set_value('about')
						);
					
			// run insert model to write data to db
			if ($this->model_evenement->newEntry($form_data) == TRUE) 
			{
				redirect('evenement');
			}
			else
			{
			echo 'Er zijn een aantal hooggetrainde apen aan de site aan het prullen geweest!';
			}
		}
		
		
	}	
	
	
}