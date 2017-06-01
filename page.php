<?php get_header(); ?>



    <div id="main">
    <!-- start content -->
        
        <div id="content">
            
        <!-- start loop -->
            <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            
            
                <article id="article-<?php the_ID(); ?>" class="article">
                <!--link to the page and get the page title-->
                    <h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
                <!-- to get the written content -->
                <?php the_content(''); ?>
                
                </article>
            
        <!-- end the loop -->
            <?php endwhile; endif; ?>
            <small>page.php</small> 
        </div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

    