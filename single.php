<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post();?>
	<div id="single-work" class="container">
		<h2><?php the_title();?></h2>
		<div class="work_image">
			<?php the_post_thumbnail('large'); ?>
		</div>
		<div><?php the_content(); ?></div>
	</div>
<?php
endwhile;
endif;

get_footer();
?>

