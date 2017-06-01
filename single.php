<?php get_header(); ?>



    <div id="main">
    <!-- start content -->
        
        <div id="content">
            
        <!-- start loop -->
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
            
                <article id="post-<?php the_ID(); ?>" class="post">
                <!--link to the page and get the page title-->
                    <h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
                    
                <small>
                        Ppsted on <?php the_time('F j, Y'); //get time ?> 
                        by <?php the_author(); //get author?> 
                        in <?php the_category(', '); //get category?>
                </small>
                    
                <?php the_post_thumbnail('large'); //insert large featured image// ?>
                    
    
                <?php the_content(''); // get the content?>
                
                </article>
            
        <!-- end the loop -->
            <?php endwhile; endif; ?>
            <small>single.php</small> 
        </div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

    