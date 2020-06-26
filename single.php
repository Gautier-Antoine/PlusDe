<?php get_header(); ?>
<div id="main">
    
    <div id="content">
        <?php if(have_posts()) : ?>
        <?php while (have_posts()) : the_post();
        require("post-index.php");
        endwhile; ?>
        <?php endif; ?>
        
        
        <div id="pagination">
           <?php
              global $wp_query;

             $big = 999999999; // need an unlikely integer

              echo paginate_links( array(
              	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              	'format' => '?paged=%#%',
              	'current' => max( 1, get_query_var('paged') ),
              	'total' => $wp_query->max_num_pages
            ) );
            ?>
        </div>
    </div>




</div>
