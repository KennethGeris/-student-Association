<?php
// Kenneth Geris, Sam Neven
class Model_Captcha extends CI_Model{
	
	function create_image(){
	//captcha code aangepast van youtube tutorial van Mohammed Damia
	
	$abc = array("0", "1", "2","3", "4", "5","6", "7", "8","9", "a", "b","c", "d", "e","f", "g", "h","i", "j", "k","l", "m", "n","o","p", "q", "r","s", "t", "u","v", "w", "x","y", "z");
	$word = '';
	$n = 0;
	while ($n < 8){
		
		$word .= $abc[mt_rand(0,35)];
		$n++;
		
	}
	
	$captcha = array(
				'word'		=> strtoupper($word),
				'img_path'	=> './captcha/',
				'img_url'	=>	base_url().'./captcha/',
				'font_path'	=>	'./fonts/impact.ttf',
				'img_width'	=>	'300',
				'img_height'=>	30,
				'expiration'=>	'60',
				'time'		=> time()
			);
			$value = array(
				'time'		=> $captcha['time'],
				'ip_address'=> $this->input->ip_address(),
				'word'		=> $captcha['word']
			
			);
			
			//insert values in captcha table
			$this->db->insert('captcha', $value);
			
			$img = create_captcha($captcha);
			return $data['image'] = $img['image'];
	}
	
}