<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session extends MY_Controller
{
	public function login()
	{
		
		
		$this->makePage('session/login');
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		
		redirect('/');
	}
	
	public function register()
	{
		$this->makePage('session/register');
	}
}