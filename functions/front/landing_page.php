<?php
/**
 * Get extra page
 */
function extra_pages(){
	$args = array(
		'sort_order' => 'asc',
		'sort_column' => 'post_title',
		'hierarchical' => 1,
		'exclude' => '',
		'include' => [ 12 , 63 ],
		'meta_key' => '',
		'meta_value' => '',
		'authors' => '',
		'child_of' => 0,
		'parent' => -1,
		'exclude_tree' => '',
		'number' => '',
		'offset' => 0,
		'post_type' => 'page',
		'post_status' => 'publish'
	); 
	return get_pages($args);	
}

/**
 * Get list of post
 */
function cree_last_articles($numberposts = 4/*, $category = false*/){
	$args = array(
		'numberposts' => $numberposts,
		'post_type' => 'slides'
	);
	return get_posts( $args );
}

/**
 * Get parent category
 */
function cree_get_parent_category($article_id){
	$categories = get_the_category($article_id );

	foreach ($categories as $category) {
		if( $category->parent == 0 && $category->slug != "non-classe"){
			$cree_category = $category;
		}
	}

	return $cree_category;
}