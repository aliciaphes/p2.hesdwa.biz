<?php
class posts_controller extends base_controller {

    public function __construct() {
        parent::__construct();

        # Make sure user is logged in if they want to use anything in this controller
        if(!$this->user) {
            Router::redirect('/users/login');
        }  
    }

    public function add($added = NULL) {

        # Setup view
        $this->template->content = View::instance('v_posts_add');
        $this->template->title   = "New Oonga";

        # Pass data to the view to check if oonga has been added
        $this->template->content->added = $added;

        # Render template
        echo $this->template;

    }

    public function p_add() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

        # Unix timestamp of when this post was created / modified
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();

        # Insert into database
        DB::instance(DB_NAME)->insert('posts', $_POST);

        # Redirect to show oongas      
        Router::redirect("/posts/add/added");
    }


    public function index() {

        # Set up the View
        $this->template->content = View::instance('v_posts_index');
        $this->template->title   = $this->user->first_name."'s oongas";

        # Query
        $q = 'SELECT
        posts.content,
        posts.created,
        posts.user_id AS post_user_id,
        users_users.user_id AS follower_id,
        users.first_name,
        users.last_name
        FROM posts 
        INNER JOIN users_users
        ON posts.user_id = users_users.user_id_followed
        INNER JOIN users
        ON posts.user_id = users.user_id
        WHERE users_users.user_id = '.$this->user->user_id . ' 
        ORDER BY posts.created DESC' ;

        # Run the query, store the results in the variable $posts
        $posts = DB::instance(DB_NAME)->select_rows($q);

        # Pass data to the View
        $this->template->content->posts = $posts;

        # Render the View
        echo $this->template;

    }


    public function users() {

        # Set up the View
        $this->template->content = View::instance("v_posts_users");
        $this->template->title   = "Cavemen";

        # Build the query to get all the users
        $q = "SELECT *
        FROM users
        WHERE user_id <> ".$this->user->user_id;        

        # Execute the query to get all the users. 
        # Store the result array in the variable $users
        $users = DB::instance(DB_NAME)->select_rows($q);

        # Build the query to figure out what connections this user already has
        # I.e. who are they following
        $q = "SELECT * 
        FROM users_users
        WHERE user_id = ".$this->user->user_id;

        # Execute this query with the select_array method
        # select_array will return our results in an array and use the "users_id_followed" field as the index.
        # Store our results (an array) in the variable $connections
        $connections = DB::instance(DB_NAME)->select_array($q, 'user_id_followed');

        # Pass data (users and connections) to the view
        $this->template->content->users       = $users;
        $this->template->content->connections = $connections;

        # Render the view
        echo $this->template;
    }


    public function follow($user_id_followed) {

        # Prepare the data array to be inserted
        $data = Array(
            "created" => Time::now(),
            "user_id" => $this->user->user_id,
            "user_id_followed" => $user_id_followed
            );

        # Do the insert
        DB::instance(DB_NAME)->insert('users_users', $data);

        # Send them back
        Router::redirect("/posts/users");

    }

    public function unfollow($user_id_followed) {

        # Delete this connection
        $where_condition = 'WHERE user_id = '.$this->user->user_id.' AND user_id_followed = '.$user_id_followed;
        DB::instance(DB_NAME)->delete('users_users', $where_condition);

        # Send them back
        Router::redirect("/posts/users");

    }


} # end of the class
?>