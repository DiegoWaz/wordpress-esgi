<!DOCTYPE html>
<html>
<head>
	<title>
	<?php
	wp_title(); 
	echo " | "; 
	bloginfo('name'); ?>
	</title>
	<?php
		wp_head();
	?>
</head>
<body>
<?php

	$data = get_object_vars(get_theme_mod('header_image_data'));

	$attachment_id = is_array($data) && isset($data['attachment_id']) ? $data['attachment_id']: false;
	$att = get_post_meta($attachment_id);

	wp_nav_menu(array(
		'theme-location'=>'main_menu',
		'container-class'=>'navbar nav-default'
	));


	if (get_header_image()) {
		echo "<img src='".get_header_image()."' alt='logo'/>";
	}

?>

