<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package foodbynight
 *
 */

get_header(); ?>
<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="<?= img_uri(); ?>profile.png" alt="">
                <div class="intro-text">
                    <h1 class="name"><?php _e( 'Not Found', 'foodbynight' ); ?></h1>
                        <hr class="star-transparent">
                    <span class="skills"><?php _e( 'This is somewhat embarrassing, isn’t it?', 'foodbynight' ); ?></span>
					<!-- <span class="skills"><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'foodbynight' ); ?></span> -->
					<?php //get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</header>


<?php get_footer(); ?>