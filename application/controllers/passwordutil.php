<?php defined('BASEPATH') or die('NO ACCESS');


class Passwordutil extends CI_Controller
{
	
	public function hash($password)
	{
		$this->load->library('PasswordHash');
		$this->passwordhash->initialize(8, TRUE);
		
		echo $this->passwordhash->HashPassword($password);
	}

}






