<?php
get_header();

if (have_posts()) {

	while (have_posts()) {
		the_post();
		echo '<h2>'.get_the_title().'</h2>';
		the_post_thumbnail('medium');
		the_content();
	}

} else {
	echo 'Aucun article';
}

$loop = new WP_Query(array('post_type'=>'events'));

while ($loop->have_posts()) {
	$loop->the_post();
	the_title();
	the_content();
}

dynamic_sidebar('sidebar-1');

get_footer();
?>