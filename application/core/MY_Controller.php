<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class MY_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->spark('php-activerecord/0.0.2');
		
        $this->load->library('migration');
        if ( ! $this->migration->current())
        {
                show_error($this->migration->error_string());
                return;
        }

        $this->load->library('session');
        $this->load->library('parser');
        $this->load->library('encrypt');
		
		$this->load->model('gallery_model');
		$this->load->model('group_model');
		$this->load->model('user_model');
		$this->load->model('usergroup_model');
		$this->load->model('invitation_model');
		
		$this->output->enable_profiler(TRUE);
	}
	
	public function requireLogin()
	{
		if(!$this->session->userdata('logged_in'))
		{
			$this->session->set_userdata(
				'alert-text', 
				'You need to be logged in to see this resource.  Please log in.');
			$this->session->set_userdata('redirect', $this->uri->ruri_string());
			redirect('/session/login');
			return false;
		}
		return true;
	}

	public function makePage($page, $extraVariables = array())
	{
		$varbles = array(
				'app_name' => config_item('app_name'),
				'galleries_active' => '',
				'myprofile_active' => '',
				'username' => ''
		);
		if($this->session->userdata('logged_in'))
		{
			$varbles['username'] = $this->session->userdata('username');
		}
		foreach($extraVariables as $a => $b)
		{
			$varbles[$a] = $b;
		}
		
		$this->parser->parse('header', $varbles);
		if(is_array($page)){
			foreach($page as $p)
			{
				$this->parser->parse($p, $varbles);
			}		
		}
		else 
		{
			$this->parser->parse($page, $varbles);
		}
		$this->parser->parse('footer', $varbles);
	
	}
}
