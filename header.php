<!DOCTYPE html>
<html lang="en">
    
<head>
    <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
    <meta charset= "UTF-8">
    <link rel="stylesheet" type="text/css" media= "all" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <link rel="stylesheet" href="flexslider.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="jquery.flexslider.js"></script>
    
    <script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
    </script>
    
    <?php wp_head(); ?>
    
</head>
    
    <!-- ----------------BODY------------------ -->   
<body <?php body_class(); ?>>
    
    <header>
    <!-- <h1 class="title"><a href = "home.php">- KARIN -</a></h1> -->
        <a href = "http://tomomim.com/web170/wordpress/"><img alt="Logo" src="<?php bloginfo('template_directory'); ?>/images/karinlogo.svg" id="logo" width="220"></a>
    
<!-- NAVIGATION -->
        
    
        <?php wp_nav_menu(array('theme_location' =>'main-menu', 'container' => 'div', 'container_id' => 'nav', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>',)); ?>
        
    <!-- save for review    
        <nav>
        <ul class="menu" id="myTopnav">
            <li><a href = "index.php">Home</a></li>
            <li><a href = "main.php"><li>About</a></li>
            <li><a href = "">Service</a></li>
            <li><a href = "">Contact</a></li>
            <li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
        </ul>
        </nav>
    -->
       
        
<!-- NAVIGATION END -->
        
    </header>
    