<?php get_header(); ?>

<div id="main">
    <!-- start content -->
    
    <blockquote>Every flower is a soul blossoming in nature.</blockquote>
    
<div class="flexslider">
    <ul class="slides">
    <li>
      <img src="http://tomomim.com/web170/wordpress/wp-content/uploads/2017/04/flower1.jpg" />
    </li>
    <li>
      <img src="http://tomomim.com/web170/wordpress/wp-content/uploads/2017/04/flower4.jpg" />
    </li>
    <li>
      <img src="http://tomomim.com/web170/wordpress/wp-content/uploads/2017/04/flower3.jpg" />
    </li>
    </ul>
</div>
    
    <!-- end of flexslider -->
    
    

    
        
        <div id="content">
            <h2>Heading 1</h2>
            
        <!-- start loop -->
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
            <!-- to get the written content -->
            <?php the_content(''); ?>
            
            <!-- end the loop -->
            <?php endwhile; endif; ?>
            
            <h2>Latest Posting</h2>
            <?php rewind_posts(); ?>
            <?php query_posts('showpost=4'); ?>
            <?php while(have_posts()): the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            
            <small>front-page.php</small> 
            
           
            
        </div>
    </div>

<?php get_footer(); ?>

    