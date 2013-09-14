<?php defined('BASEPATH') or die('NO ACCESS');

class Group_model extends ActiveRecord\Model
{
	static $table_name = "groups";
	static $hasmany = array(
		array('users', 'primary_key' => 'group_id', 'through' => 'user_groups', 'source' => 'users')		
	);
	
	public function save()
	{
		$this->set_timestamps();
		parent::save();
	}
}
