<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invitation_model extends ActiveRecord\Model
{
	static $table_name = "invitations";
	

	static function createInvitation($invitedByUserID)
	{
		
		$user = Users::find($invitedByUserID);
		$numinv = $user->number_of_invitations++;
		$invkey = $this->encrypt->sha1($invitedByUserID . $numinv . now());
		
		$invitation = new Invitation();
		$invitation->created_by = $invitedByUserID;
		$invitation->invitation = $invkey;
		$invitation->save();
		$user->save();
		
		return $invkey;
	}
	
	
	
}
