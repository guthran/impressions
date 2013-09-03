<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends ActiveRecord\Model
{
	static $table_name = "users";

	
	public static function create($email, $password)
	{
		$salt = $this->encrypt->sha1(now());
		
		$user = new Users();
		$user->salt = $salt;
	}
}