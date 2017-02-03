<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title(); echo " | ".bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body>
    	<!-- header -->
		<header>
            <a href="<?= site_url(); ?>">
                <img src="<?php header_image(); ?>" class="logo">
            </a>
            <?php 
                $menu_items = wp_get_nav_menu_items('main-nav');
                if( $menu_items ) {
                    echo "<ul id='nav-menu-PP'>";
                    foreach ($menu_items as $menu_item ) {
                        $title = $menu_item->title;
                        $id = $menu_item->object_id;
                        echo "
                            <li class='menu-".$title."'>"
                        ?>
                        <?php 
                            if(is_page('Home')) {
                                echo "<a href='#".$title."'>".ucfirst($title)."</a>";
                            } else {
                                echo "<a href='".site_url()."/home/#".$title."'>".ucfirst($title)."</a>";
                            }
                        ?>
                        <?= 
                            "</li>
                            ";
                    }
                    echo "</ul>";
                }
            ?>      		
		</header>
		<!-- /header --> 
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


