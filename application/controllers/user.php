<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller
{
	
	public function create()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		
	}
	
	public function show($id)
	{
		$user = User_model::find($id);
		print_r($user);
		
		$usergroup = Usergroup_model::find_by_user_id($id);
		print_r($usergroup);
		
		print_r($usergroup->groups);
		
#		$groups = Group_model::find($usergroup->group_id);
#		print_r($groups);
	}
}
