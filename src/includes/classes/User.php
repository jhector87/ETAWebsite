<?php
include "../../config/configs.php";

class User
{
	
	private $user;
	
	function __construct($user)
	{
		setcookie('currentUser', $user, time()+10000);
		$this->user = $user;
	}
	
	function getCurrentUser()
	{
		return $this->user;
	}
}