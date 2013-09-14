<?php defined('BASEPATH') or die('NO ACCESS');

class Usergroup_model extends ActiveRecord\Model
{
	static $table_name = 'user_groups';
	static $has_one = array(
		array('users', 'primary_key' => 'user_id', 'class' => 'User_model'),
		array('groups', 'primary_key'=> 'group_id', 'class' => 'Group_model')
	);
}
