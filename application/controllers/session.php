<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library('passwordHash');
		$this->passwordhash->initialize(8, TRUE);
	}
	
	public function login()
	{
		$doLogin = $this->input->post('doLogin');
		if($doLogin === FALSE)
		{	
			if($this->session->userdata('logged_in'))
			{
				redirect('/');
				return;
			}
			$pages = array();
			$varbls = array();
			$alert = $this->session->userdata('alert-text');
			if($alert !== FALSE)
			{
				$pages[] = 'alert';
				$varbls['alert-type'] = 'warning';
				$varbls['alert-words'] = $alert;
			}
			$pages[] = 'session/login';
			$varbls['email'] = '';
			$this->makePage($pages, $varbls);
			return;
		}

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$user = User_model::find_by_email($email);
		$error = false;
		if($user == null)
		{
			$error = "Invalid User / Password combination";
		}else if(!$this->passwordhash->CheckPassword($password, $user->password))
		{
			$error = "Invalid User / Password combination";
		}
		if($error !== false)
		{
			$this->makePage(
					array('alert', 'session/login'),
					array(
							'alert-type' => 'warning', 
							'alert-words' => $error,
							'email' => $email
					)
			);
			return;
		}
		
		// if we got here, password is good.
		$this->session->set_userdata(array(
				'username' => $user->username,
				'logged_in_time' => now(),
				'logged_in' => TRUE
		));
		if(!$this->session->userdata('redirect'))
		{
			redirect('/');
		}
		else
		{
			redirect($this->session->userdata('redirect'));
		}
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
					array(
							'alert-type' => 'warning', 
							'alert-words' => $error,
							'invitation' => ''
				)	
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
		
		$invFromDB = Invitation_model::find_by_invitation($key);
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
		
		$this->makePage('session/register');
	}
	
	public function checkUser()
	{
		$this->output->enable_profiler(FALSE);
		
		$userTxt = $this->input->post('username');
		
		$userObj = Users::find_by_username($userTxt);
		if($userObj == null)
		{
			echo "true";
		}
		else
		{
			echo "false";
		}
	}
}
