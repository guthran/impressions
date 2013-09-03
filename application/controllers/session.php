<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session extends MY_Controller
{
	public function login()
	{
		$doLogin = $this->input->post('doLogin');
		if($doLogin === FALSE)
		{
			$this->makePage('session/login');
			return;
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		
		redirect('/');
	}
	
	public function register($invitation=null)
	{
		$getinv = $this->input->get('invitation');
		
		if($invitation === null && $getinv === FALSE)
		{
			$error = "Missing Invitation Key!  Did you click the link right?";
			$this->makePage(
					array('alert', 'session/invitation'),
					array('alert-type' => 'warning', 'alert-words' => $error)
				);
			return;
		}
		
		$key = "";
		if($invitation == null)
		{
			$key = $getinv;
		}
		else
		{
			$key = $invitation;
		}
		
		$invFromDB = Invitation::find_by_invitation($key);
		if($invFromDB == null)
		{
			$error = "Invalid Invitation Key or key not found!  Did you click the link right?";
			$this->makePage(
					array('alert', 'session/invitation'),
					array(
							'alert-type' => 'warning', 
							'alert-words' => $error,
							'invitation' => $key
			)
			);
			return;
		}
		else
		{
			print_r($invFromDB);
		}
		
		
// 		$this->makePage('session/register');
	}
}