<?php get_header(); ?>



    <div id="main">
    <!-- start content -->
        
        <div id="content">
            
        <!-- start loop -->
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        
            <article class="post-excerpt">
            <!--link to the page and get the page title-->
                <h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <small>
                        Ppsted on <?php the_time('F j, Y'); //get time ?> 
                        by <?php the_author(); //get author?> 
                        in <?php the_category(', '); //get category?>
                </small>
            
                <a href="<?php the_permalink(); //link to the page ?>">
                <?php the_post_thumbnail('thumbnail'); ?></a>
                
                <!-- get the posting's excerpt -->
                <?php the_excerpt(); ?>
                
                <p class="read-more"><a href="<?php the_permalink(); ?>">Read More...</a></p>
                
            </article>
            
                <!-- end the loop -->
                <?php endwhile; endif; ?>
            
            
            <small>index.php</small> 
        </div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

    