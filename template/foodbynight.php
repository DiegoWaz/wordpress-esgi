<?php
	/** 
	 * Template Name: One page
	 */

if(is_admin()):
?>
	<a href="/wp-admin">Accéder à la page d'aministration</a>

<?php
endif;

?>

<!-- Home Header Section -->
<?php get_template_part( 'template/onepage/home_header', 'page' ); ?>

<!-- About Section -->
<?php get_template_part( 'template/onepage/about', 'page' ); ?>

<!-- Agriculture Grid Section -->
<?php get_template_part( 'template/onepage/cuisine', 'page' ); ?>

<!-- Contact Section -->
<?php get_template_part( 'template/onepage/contact', 'page' ); ?>

<!-- Home footer Section -->
<?php get_template_part( 'template/onepage/home_footer', 'page' ); ?>


