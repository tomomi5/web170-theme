<div id="sidebar">
<div id="sub-navigation" class="widget">
    
    <h2 class="sub-navigation" class="widget">
    <?php echo get_the_title($post->post_parent); ?>
    </h2>
    
    <?php if(is_page()): //if we are in page ?>
    <ul class = "sub-navigation-items">
        <?php
        
        if($post->post_parent){ //if there is a parent page
            wp_list_pages(array('child_of' => $post -> post_parent, 'title_li' => __('')));
            
        } else { //if there is no prent page
            wp_list_pages(array('child_of' => $post -> ID, 'title_li' => __(''))); 
        }
        ?>
    
    </ul>
        <?php endif; ?>
    
    <?php if(!(is_page())): //if we are not in pages ?>
    <h2 class="sub-navigation-title">Blog</h2>
    <ul class="sub-navigation-items">
        <?php wp_list_categories(array('title_li' => __('')));
        //list the categories with no title ?>
    </ul>
    <?php endif; ?>
    
    
</div>
    <!-- end of sub navigation -->
    
    
    <!-- quotes-->
    
    <?php if(get_post_meta($post->ID, 'Quotes', true)): 
    //check if there is a quotes ?>
    <blockquote><?php echo get_post_meta($post->ID, 'Quotes', true); //pick quote from custome field ?></blockquote>
    
    <?php endif; ?>
    <!-- end quotes -->
    
    <!-- dynamic sidebar -->
    <?php dynamic_sidebar(1); ?>
</div>
