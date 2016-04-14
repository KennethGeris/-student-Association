<!-- http://ellislab.com/codeigniter/user-guide/database/queries.html -->
<!-- http://stackoverflow.com/questions/2577968/php-codeigniter -->
<!-- http://ellislab.com/codeigniter/user-guide/database/active_record.html -->
<?php
//Kenneth Geris

class  Model_berichten extends CI_Model {
	      
        function getBerichten(){
			$this->db->select();
			$this->db->from('contact');
			$query = $this->db->get();
            return $query->result();
        }
}