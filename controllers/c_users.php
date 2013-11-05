<?php
class users_controller extends base_controller {

    public function __construct() {
        // echo "users_controller construct called<br><br>";       
        parent::__construct();

    } 

    public function signup() {

        # Setup view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title = 'Sign up';

        # Render template
        echo $this->template;
    }

    public function p_signup() {
        # Dump out the results of POST to see what the form submitted
        # for debugging purposes

        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';  

        # Last/first name, email and password are retrieved from the form.
        # We set the rest of the DB fields:
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();
        $_POST['timezone'] = TIMEZONE;

        # Encrypt the password  
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);            

        # Create an encrypted token via their email address and a random string
        $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

        # Insert this user into the database
        $success = DB::instance(DB_NAME)->insert_row('users', $_POST);

        # If the insertion is successful, we modify 'last_login':
        if($success > 0){
            $data = Array("last_login" => Time::now());
            DB::instance(DB_NAME)->update("users", $data, "WHERE user_id = ".$success);
        }else{
            die("<h2>There's been an error creating your credentials</h2>");
        }
        
        # You should eventually make a proper View for this

        # Send them to the login page
        Router::redirect('/users/login');        
    }


    public function login($error = NULL) {
# Setup view
        $this->template->content = View::instance('v_users_login');
        $this->template->title   = "Welcome!";

# Pass data to the view
        $this->template->content->error = $error;

# Render template
        echo $this->template;        
    }


//use SANITIZE when when we retrieve post data (data the user has entered)


    public function p_login() {

# Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
       $_POST = DB::instance(DB_NAME)->sanitize($_POST);

# Hash submitted password so we can compare it against one in the db
       $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

# Search the db for this email and password
# Retrieve the token if it's available
       $q = "SELECT token 
       FROM users 
       WHERE email  = '".$_POST['email']."' 
       AND password = '".$_POST['password']."'";

       $token = DB::instance(DB_NAME)->select_field($q);

# If we didn't find a matching token in the database, it means login failed
       if(!$token) {

        # Send error and redirect to login page
           Router::redirect("/users/login/error");

# But if we did, login succeeded! 
       } else {

/* 
Store this token in a cookie using setcookie()
Important Note: *Nothing* else can echo to the page before setcookie is called
Not even one single white space.
param 1 = name of the cookie
param 2 = the value of the cookie
param 3 = when to expire
param 4 = the path of the cooke (a single forward slash sets it for the entire domain)
*/
setcookie("token", $token, strtotime('+1 year'), '/');

#update last login date:

#retrieve user_id first??

$q = "UPDATE users
SET last_login = Time::now()
WHERE user_id  = '".$this->user->user_id."'";

# Send them to the main page - or wherever you want them to go
Router::redirect("/");

}     
}

public function logout() {
// echo "This is the logout page";

# Generate and save a new token for next login
    $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

# Create the data array we'll use with the update method
# In this case, we're only updating one field, so our array only has one entry
    $data = Array("token" => $new_token);


# UPDATE OTHER FIELDS AS WELL!!!!



# Do the update
    DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

# Delete their token cookie by setting it to a date in the past - effectively logging them out
    setcookie("token", "", strtotime('-1 year'), '/');

# Send them back to the main index.
    Router::redirect("/");    
}



public function profile($user_name = NULL) {

# If user is blank, they're not logged in; redirect them to the login page
    if(!$this->user) {
        Router::redirect('/users/login');
    }

# If they weren't redirected away, continue:

# Setup view
    $this->template->content = View::instance('v_users_profile');
    $this->template->title   = $this->user->first_name."'s profile";

# Render template
    echo $this->template;

}

public function edit() {
# Setup view
    $this->template->content = View::instance('v_users_edit');
    $this->template->title   = "Profile";

# Render template
    echo $this->template;        
}


public function p_edit() {
# Sanitize the user entered data
    $_POST = DB::instance(DB_NAME)->sanitize($_POST);

    echo '<pre>';
    print_r($_POST);
    echo '</pre>'; 


    $data = Array(
        "first_name" => $_POST['first_name'],
        "last_name"  => $_POST['last_name'],
        "email"      => $_POST['email'],
        // "password"   => $_POST['password'],
        "modified"   => Time::now()
        );

    DB::instance(DB_NAME)->update("users", $data, "WHERE user_id = ".$this->user->user_id);


# Redirect to user's profile
    Router::redirect('/users/profile');

}


} # end of the class
?>