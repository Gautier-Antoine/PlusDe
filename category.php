<?php get_header(); ?>

<div id="main">
    <div id="content">
       <?php if(have_posts()) : ?>
       <?php while (have_posts()) : the_post();
       require("post.php");
       endwhile; ?>
       <?php endif; ?>
        
    </div>
</div></div>



<div id="delimiter"></div>

<?php get_footer(); ?>

