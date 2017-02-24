<?php
	/** 
	 * Template Name: navigation
	 */

?>

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
            </button>
            <?php //home_url(); ?>
            <a class="navbar-brand" href="<?= home_url(); ?>/#page-top"><img src="<?= img_uri(); ?>logo-small.png"><span class="navi">Food by Night</span></a>
        </div>
        <?php

        wp_nav_menu(array(
            'theme-location' => 'main_menu',
            'container_class'=> 'nav navbar-nav navbar-right'
        )); 

        ?>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>