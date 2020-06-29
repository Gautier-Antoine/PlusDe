<div class="post-content">
	<div id="post-index">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<div id="title">
				<center><h1><?php the_title(); ?></h1></center>
			</div>
		</a>
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
		?>
		<div class="box">
			<?php the_content(); ?>
		</div>
	</div>
</div>
