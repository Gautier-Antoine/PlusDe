<?php
	$category = get_the_category();
	$class_category = $category[0]->slug;
?>
<div id="post <?php the_ID(); ?>" class="post-<?= $class_category; ?> post-category">
	<div class="post-content">
		<details>
			<summary><?php the_title(); ?></summary>
			<div class="text"><?php the_content(); ?></div>
		</details>
	</div>
</div>
