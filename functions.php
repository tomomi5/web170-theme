<?php

/* 
Theme Name: KARIN Flower Arrangement
Author: Tomomi Matsuzaki
Author URL:
Description: This is my first theme on WordPress
Version* 1.0
*/

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