<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends ActiveRecord\Model
{
	static $table_name = "users";
	static $has_many = array(
#		array('user_groups', 'primary_key' => 'user_id', 'class' => 'Usergroup_model'),
#		array('groups', 'primary_key' => 'group_id', 'class' => 'Group_model') ,
#		array('galleries', 'primary_key' => 'user_id', 'through'=> 'visible_galleries', 'class' => 'Gallery_model'),
	);


	public function save()
	{
		$this->set_timestamps();
		parent::save();
	}
}
