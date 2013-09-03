<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class People extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$users = Users::all();
		
		foreach($users as $user)
		{
			print_r($user);
		}
	}
} 