<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends MY_Controller
{
	
	public function index()
	{
		if(!$this->requireLogin('/gallery')) return;
		
		$galleries = Galleries::get_by_access();
		$this->makePage('index', $varbls);
	}
}
