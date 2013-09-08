<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->spark('php-activerecord/0.0.2');
		$this->load->model('users');
		$this->load->model('galleries');
		$this->load->model('invitation');
		
// 		$this->output->enable_profiler(TRUE);
	}

	public function makePage($page, $extraVariables = array())
	{
		$varbles = array(
				'app_name' => config_item('app_name'),
				'galleries_active' => '',
				'myprofile_active' => ''
		);
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