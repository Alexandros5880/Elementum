<?php

    /**
     * Plugin Name: MY-CUSTOM-REST-API
     * Plugin URI: http://chrushigit.com
     * Deskription: Crushing it;
     * VersionL 1.0
     * Author: Art Vandelay
     * Author URI: http::/watch-learn.com
     */


    /*
		http://localhost:8080/Elementum/wp-json/wl/v1/bookings
    */


    /*
    // Function 1
    function wl_posts() {
        $args = [
            'numberposts' => 99999,
            'post_type' => 'post'
        ];
        $posts = get_posts($args);
        $data = [];
        $i = 0;
        foreach($posts as $post) {
            $data[$i]['id'] = $post->ID;
            $data[$i]['title'] = $post->post_title;
            $data[$i]['content'] = $post->post_content;
            $data[$i]['slug'] = $post->post_name;
            $data[$i]['featured_image']['thumbnail'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');
            $data[$i]['featured_image']['medium'] = get_the_post_thumbnail_url($post->ID, 'medium');
            $data[$i]['featured_image']['large'] = get_the_post_thumbnail_url($post->ID, 'large');
            $i++;
        }
        return $data;
    }


    // Function 2
    function wl_post( $slug ) {
        $args = [
            'name' => $slug['slug'],
            'post_type' => 'post'
        ];
        $post = get_posts($args);

        #get_field( '', $post[0]->ID );

        $data[$i]['id'] = $post[0]->ID;
        $data[$i]['title'] = $post[0]->post_title;
        $data[$i]['content'] = $post[0]->post_content;
        $data[$i]['slug'] = $post[0]->post_name;
        $data[$i]['featured_image']['thumbnail'] = get_the_post_thumbnail_url($post[0]->ID, 'thumbnail');
        $data[$i]['featured_image']['medium'] = get_the_post_thumbnail_url($post[0]->ID, 'medium');
        $data[$i]['featured_image']['large'] = get_the_post_thumbnail_url($post[0]->ID, 'large');
        return $data;
    }
	*/


    // Function 3
    function wl_events() {
        $args = [
            'numberposts' => 99999,
            'post_type' => 'Event'
        ];
        $posts = get_posts($args);
        $data = [];
        $i = 0;
        foreach($posts as $post) {
            $data[$i]['id'] = $post->ID;
            /*
            $data[$i]['title'] = $post->post_title;
            $data[$i]['content'] = $post->post_content;
            $data[$i]['slug'] = $post->post_name;
            */
            $i++;
        }
        return $data;
    }


    // Function 4
    function wl_bookings() {
    	global $wpdb;
        $rows = $wpdb->get_results("SELECT * FROM wp_bookly_appointments");
        return $rows;
    }

    // Function 5
    function wl_booking_gategories() {
    	global $wpdb;
        $rows = $wpdb->get_results("SELECT * FROM wp_bookly_categories");
        return $rows;
    }

    // Function 6
    function wl_booking_customers() {
    	global $wpdb;
        $rows = $wpdb->get_results("SELECT * FROM wp_bookly_customers");
        return $rows;
    }

    // Function 7
    function wl_booking_services() {
    	global $wpdb;
        $rows = $wpdb->get_results("SELECT * FROM wp_amelia_services");
        return $rows;
    }


    


    // Update a record example
    /*
	$my_post = array(
	  'ID'           => $updatePostID, // User defined variable; the post id you want to update.
	  'post_title'   => 'Update Title',
	  'post_content' => 'Update Content', 
	);
	// Update the post into the database
	$post_id = wp_update_post( $my_post, true ); // Returns 0 if no error; returns post id if there was an error.
	// Check if table was updated without error. For debugging. Remove from your code if it all works, before publishing.
	if (is_wp_error($post_id)) {
		$errors = $post_id->get_error_messages();
		foreach ($errors as $error) {
		    echo $error;
		}
	}
	*/


    // Function 8
    function wl_get_post_types() {
    	return get_post_types();
    }

    // Function 9
    function get_user() {
    	$all_users = get_users();
		return $all_users;
    }



    // Create User
    function wl_create_user( $request ) {
    	$data      = $request->get_json_params();
    	$username  = $data["username"];
    	$email     = $data["email"];
    	$password  = $data["password"];
    	$firstname = $data["firstname"];
    	$lastname  = $data["lastname"];
    	$role      = $data["role"];
    	$user_id = wp_insert_user( array(
		  'user_login'   => $username,
		  'user_pass'    => $password,
		  'user_email'   => $email,
		  'first_name'   => $firstname,
		  'last_name'    => $lastname,
		  'display_name' => $firstname . " " . $lastname,
		  'role'         => $role
		));
		return "User Id: " . $user_id;
    }

    /* Example of Create New User Post Request
    {
	    "username"  : "test2",
	    "email"     : "test2@gmail.com",
	    "password"  : "123456",
	    "firstname" : "Alexandros_test",
		"lastname"  : "Platanios_test",
	  	"role"      : "Subscriber"
	}
	*/




    // Main Function
    add_action('rest_api_init', function() {

    	/*
        // Function 1
        register_rest_route('wl/v1', 'posts', [
            'methods' => 'GET',
            'callback' => 'wl_posts',
        ]);

        // Function 2
        register_rest_route('wl/v1', 'posts/(?P<slug>[a-zA-Z0-9-]+)', array(
            'methods' => 'GET',
            'callback' => 'wl_post',
        ));
        */

        // Function 3
        register_rest_route('wl/v1', 'events', [
            'methods' => 'GET',
            'callback' => 'wl_events',
        ]);

        // Function 4
        register_rest_route('wl/v1', 'bookings', [
            'methods' => 'GET',
            'callback' => 'wl_bookings',
        ]);

        // Function 5
        register_rest_route('wl/v1', 'booking_gategories', [
            'methods' => 'GET',
            'callback' => 'wl_booking_gategories',
        ]);

        // Function 6
        register_rest_route('wl/v1', 'booking_customers', [
            'methods' => 'GET',
            'callback' => 'wl_booking_customers',
        ]);

        // Function 7
        register_rest_route('wl/v1', 'booking_services', [
            'methods' => 'GET',
            'callback' => 'wl_booking_services',
        ]);

        // Function 8
        register_rest_route('wl/v1', 'posttypes', [
            'methods' => 'GET',
            'callback' => 'wl_get_post_types',
        ]);

        // Function 8
        register_rest_route('wl/v1', 'users', [
            'methods' => 'GET',
            'callback' => 'get_user',
        ]);

        // Function test
        register_rest_route('wl/v1', 'create_user', [
            'methods' => 'POST',
            'callback' => 'wl_create_user',
        ]);



    });




