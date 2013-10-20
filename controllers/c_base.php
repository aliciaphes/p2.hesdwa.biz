<?php

class base_controller {
	
	public $user;
	public $userObj;
	public $template;
	public $email_template;

	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
		
		# Instantiate User obj
		$this->userObj = new User();
		
		# Authenticate / load user
		$this->user = $this->userObj->authenticate();					
		
		# Set up templates
		$this->template 	  = View::instance('_v_template');
		$this->email_template = View::instance('_v_email');			
		
		# So we can use $user in views			
		$this->template->set_global('user', $this->user);
				# CSS/JS includes -- moved to c_base.php
		
		$client_files_head = Array('/css/mycss.css');
		$this->template->client_files_head = Utils::load_client_files($client_files_head);
		$this->template->client_files_head .= "<link href='http://fonts.googleapis.com/css?family=Andika' rel='stylesheet' type='text/css'>";
		
	}
	

	/**once your system has the ability to log in users, you don't want to repeat yourself in every Controller, checking to see if a user is logged in. Instead, you can do this action here in the base Controller.*/

} # eoc
