<?php

/* 
Theme Name: KARIN Flower Arrangement
Author: Tomomi Matsuzaki
Author URL:
Description: This is my first theme on WordPress
Version* 1.0
*/

//get my title tag
function get_my_title_tag(){ //for site Front page
    global $post;
     if( is_front_page()){
         bloginfo('description'); //retrieve site tagline
     } 
    
    elseif( is_page() || is_single()){ //for site page
         the_title();  //retrieve the page or posting title
     }
    
    else{
        bloginfo('description'); //retrieve the site tagline
    }
    
    if($post->post_parent){ //for parent pages
        
        echo ' | ';
        echo get_the_title($post->post_parent);
    }
    
    echo ' | ';
    bloginfo('name'); //retrieve the site name
    echo ' | ';
    echo 'Seattle, WA'; //location
}

//meta description
add_post_type_support('page', 'excerpt');

//Register My Menus
register_nav_menus(array(
    'main-menu' => __('Main'),
));
//

//Create Post Thumbnakils
add_theme_support('post-thumbnails');
//

//create page excerprs
add_post_type_support('page', 'excerpt');
//

//Register My sidebar
register_sidebar(array(
'before_widget' => '<div id="%1$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>'
));

?>