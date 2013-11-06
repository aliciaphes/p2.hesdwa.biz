<?php

class base_controller {
	
	public $user;
	public $userObj;
	public $template;
	public $email_template;

	/*-------------------------------------------------------------------------------------------------
		Base constructor of our controllers
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
								   '/css/oongacss.css');
		$this->template->client_files_head = Utils::load_client_files($client_files_head);


		$this->template->client_files_head .= "<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>";
		

		 # JS includes:
		$client_files_body = Array();
        $this->template->client_files_body = Utils::load_client_files($client_files_body);		
	}
	

} # eoc
