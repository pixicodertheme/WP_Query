<?php


/**
 * Setup query to show the ‘services’ post type with all posts filtered by 'home' category.
 * Output is linked title with featured image and excerpt.
 */
   
    $args = array(  
        'post_type' => 'services',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'ASC',
        'cat' => 'home',
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
        $featured_img = wp_get_attachment_image_src( $post->ID );
        print the_title();
        if ( $feature_img ) {
           < img src="print $featured_img['url']" width=”print $featured_img['width']" height="print $featured_img['height']" />
        }
        the_excerpt(); 
    endwhile;

    wp_reset_postdata(); 
