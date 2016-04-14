<?php
// Sam Neven, Kenneth Geris
class Model_register extends CI_Model{
	
	public function register(){
            $this->load->helper('date');
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'name' => $this->input->post('name'),
			'password' => md5($this->input->post('password')),
			'email' => $this->input->post('email'),
            'date' => $this->input->post('date')	
		);
		$this->db->insert('users_reg', $data);
                
		// id opvragen en die id opnieuw gebruiken om op te slaan in users_prof
		$query = $this->db->query("SELECT id FROM users_reg WHERE email = email");

		foreach ($query->result() as $row)
		{
   			$id = $row->id;
		}
		$dataProf = array(
			'id' => $id,
			'first_name' => $this->input->post('first_name'),
			'name' => $this->input->post('name'),	
            'date' => $this->input->post('date'),
			'status' => '',
			'education' => '',
			'location' => '',
			'about' => '',
            'pxlmail' => '',
            'flink' => ''
                        
		);
		$this->db->insert('users_prof', $dataProf);
	}
        
}