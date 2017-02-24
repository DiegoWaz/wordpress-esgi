<?php
	/** 
	 * Template Name: cuisine
	 */
?>

<section id="cuisine" class="success portfolio">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Cuisine</h2>
                <hr class="star-light">
            </div>
        </div>

        <div class="row">
	        <?php $products = cr_get_product('american-food', 6); ?>
	        <?php foreach ($products as $product) : 
	        ?>
	            <div class="col-sm-4 portfolio-item">
	                <a href="#portfolioModal-<?= $product->post_name; ?>" class="portfolio-link" data-toggle="modal">
	                    <div class="caption">
	                        <div class="caption-content">
	                            <i class="fa fa-search-plus fa-3x"></i>
	                        </div>
	                    </div>
		                <img src="<?= product_image_url($product->ID); ?>" class="img-responsive" alt="">
	                </a>
	            </div>
		    <?php endforeach; ?>
        </div>

        <div id="cuisine-item-2" class="row collapse">
	        <?php $products = cr_get_product('cuisine', 6, 5); ?>
	        <?php foreach ($products as $product) : ?>
	            <div class="col-sm-4 portfolio-item">
	                <a href="#portfolioModal<?= $key; ?>" class="portfolio-link" data-toggle="modal">
	                    <div class="caption">
	                        <div class="caption-content">
	                            <i class="fa fa-search-plus fa-3x"></i>
	                        </div>
	                    </div>
		                <img src="<?= product_image_url($product->ID); ?>" class="img-responsive" alt="">
	                </a>
	            </div>
		    <?php endforeach; ?>
        </div> 

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                <a href="#cuisine-item-2" class="btn btn-lg btn-outline" data-toggle="collapse" data-target="#cuisine-item-2">
                    <i class="fa fa-hand-o-down"></i> Plus d'articles
                </a>
            </div>
        </div>
    </div>
</section>