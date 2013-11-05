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
		
		 # CSS includes:
		$client_files_head = Array('/css/bootstrap.min.css',
								   '/css/bootstrap-responsive.min.css',
								   '/css/mycss.css');
		$this->template->client_files_head = Utils::load_client_files($client_files_head);


		//$this->template->client_files_head .= "<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>";
		
		// $this->template->client_files_head .= "<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>";
		
		// $this->template->client_files_head .= "<link href='http://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'>";



		 # JS includes:
		$client_files_body = Array(
								   // "/js/bootstrap.min.js",
								   // "/js/jquery-1.10.2.min.js",
								   // "/js/effects.js"
								   );
        $this->template->client_files_body = Utils::load_client_files($client_files_body);		
	}
	

	/**once your system has the ability to log in users, you don't want to repeat yourself in every Controller, checking to see if a user is logged in. Instead, you can do this action here in the base Controller.*/

} # eoc
