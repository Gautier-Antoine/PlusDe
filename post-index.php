<?php
	$category = get_the_category(); $class_category = $category[0]->slug;
?>
	 
<div class="post-content">
	<div id="post <?php the_ID(); ?>">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<div id="title" class="post-<?php echo $class_category; ?>">
				<center><h1><?php the_title(); ?></h1></center>
			</div>
		</a>
		<?php
			if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			}
		?>
		<div class="box"><?php the_content(); ?></div>
		<div class="clear"></div>
		
	</div>
</div>
	
</div>