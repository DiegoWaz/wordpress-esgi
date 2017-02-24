<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */

function FoodByNight_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Right',
		'id'            => 'footer_right',
		'before_widget' => '<ul class="list-inline">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_widget( 'Social_Link_Widget' );

	register_sidebar( array(
		'name'          => 'Popups',
		'id'            => 'popups',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_widget( 'Contact_Popup_Widget' );

}
add_action( 'widgets_init', 'FoodByNight_widgets_init' );