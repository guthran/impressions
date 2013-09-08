<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends MY_Controller
{
	
	public function index()
	{
		$user_id = $this->session->userdata('user_id');
		if($user_id === FALSE)
		{
			// user isn't logged in.
			$pubs = Galleries::find_by_is_public('0');
			
			echo "user isn't logged in";
			$this->makePage('index', array('galleries_active' => 'active'));
		}
		else
		{
			
		}
	}
}