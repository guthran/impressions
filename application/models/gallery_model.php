<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery_model extends ActiveRecord\Model
{
	static $table_name = 'galleries';
	
	public function save()
	{
		$this->set_timestamps();
		parent::save();
	}
	
	
	public function get_by_access()
	{
		
	}
}
