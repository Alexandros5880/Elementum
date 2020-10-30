<?php

    /**
     * Plugin Name: Custom API
     * Plugin URI: http://chrushigit.com
     * Deskription: Crushing it;
     * VersionL 1.0
     * Author: Art Vandelay
     * Author URI: http::/watch-learn.com
     */




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





    // Main Function
    add_action('rest_api_init', function() {

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

        // Function 3
        register_rest_route('wl/v1', 'event', [
            'methods' => 'GET',
            'callback' => 'wl_events',
        ]);


    });




