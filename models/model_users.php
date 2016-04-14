<!-- http://ellislab.com/codeigniter/user-guide/database/queries.html -->
<!-- http://stackoverflow.com/questions/2577968/php-codeigniter -->
<!-- http://ellislab.com/codeigniter/user-guide/database/active_record.html -->
<?php
//Kenneth Geris

class Model_users extends CI_Model {
	
	public function can_log_in(){
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users_reg');
		if($query->num_rows() == 1){
			return true;	
		} else {
			return false;	
		}		
	}		
	
	// get id, so we know which user is logged in
	public function getID($email){
		$this->db->select('id');
		$this->db->from('users_reg');
		$this->db->where('email', $email); 
		$query = $this->db->get();
		foreach ($query->result() as $row)
		{
   			$id = $row->id;
		}		
		return $id;
	}
	
	// getting data from table users_prof
	public function getDataProfile($id){
		$this->db->select('first_name, name, date, status, location, education, hobbys, about, pxlmail, flink');
		$this->db->where('id', $id);
		$query = $this->db->get('users_prof');
                
		if($query->num_rows() > 0 ) {
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
	}
	
	// gebruiker kan gegevens van zijn profiel wijzigen
	public function editProfile($id){
		
		// kijken welke velden gewijzigd moeten worden
		if ($this->input->post('status') != null)
		{
			$status = $this->input->post('status');
		}
		else {
			$this->db->select('status');
			$this->db->where('id', $id);
			$q = $this->db->get('users_prof');
			print_r($q);
			foreach($q->result() as $row){
				$status = $row->status;
			}
		}
                
		// location
		if ($this->input->post('location') != null)
		{
			$location = $this->input->post('location');
		}
		else {
			$this->db->select('location');
			$this->db->where('id', $id);
			$q = $this->db->get('users_prof');
			print_r($q);
			foreach($q->result() as $row){
				$location = $row->location;
			}
		}
                
		// education
		if ($this->input->post('education') != null)
		{
			$education = $this->input->post('education');
		}
		else {
			$this->db->select('education');
			$this->db->where('id', $id);
			$q = $this->db->get('users_prof');
			print_r($q);
			foreach($q->result() as $row){
				$education = $row->education;
			}
		}
                
		// hobbys
		if ($this->input->post('hobbys') != null)
		{
			$hobbys = $this->input->post('hobbys');
		}
		else {
			$this->db->select('hobbys');
			$this->db->where('id', $id);
			$q = $this->db->get('users_prof');
			print_r($q);
			foreach($q->result() as $row){
				$hobbys = $row->hobbys;
			}
		}
                
		// about
		if ($this->input->post('about') != null)
		{
			$about = $this->input->post('about');
		}
		else {
			$this->db->select('about');
			$this->db->where('id', $id);
			$q = $this->db->get('users_prof');
			print_r($q);
			foreach($q->result() as $row){
				$about = $row->about;
			}
		}
                // pxlmail
		if ($this->input->post('pxlmail') != null)
		{
			$pxlmail = $this->input->post('pxlmail');
		}
		else {
			$this->db->select('pxlmail');
			$this->db->where('id', $id);
			$q = $this->db->get('users_prof');
			print_r($q);
			foreach($q->result() as $row){
				$pxlmail = $row->pxlmail;
			}
		} 
                
                // facebook
		if ($this->input->post('flink') != null)
		{
			$flink = $this->input->post('flink');
		}
		else {
			$this->db->select('flink');
			$this->db->where('id', $id);
			$q = $this->db->get('users_prof');
			print_r($q);
			foreach($q->result() as $row){
				$flink = $row->flink;
			}
		}
                

		
		$data = array(
			'status' => $status,
            'location' => $location,
			'education' => $education,
			'hobbys' => $hobbys,
			'about' => $about,
            'pxlmail' => $pxlmail,
            'flink' => $flink
		);
		
		$this->db->where('id', $id);
		$this->db->update('users_prof', $data);
		
		redirect('profiel');
		
	}
            
        function getAll(){
			$this->db->select();
			$this->db->from('users_prof');
			$query = $this->db->get();
            return $query->result();
        }
}