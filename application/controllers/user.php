<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller
{
	
	public function create()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		
	}
}