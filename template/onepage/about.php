<?php
	/** 
	 * Template Name: about
	 */
?>

<!-- About Section -->
<section class="success" id="apropos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>A propos</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row text-justify">
            <div class="col-lg-4 col-lg-offset-2">
                <p>Food by Night est un service de livraison de nuit à partir de 20h00 jusqu'à 6h00. Pour cela, il suffit d'une seule chose, d'appeler pour que vous commandiez !</p>
            </div>
            <div class="col-lg-4">
                <p>Nos produits sont cuisinés avec le plus grand soin chaque jour et conservés dans des fours lors de la livraison afin de vous garantir la meilleur qualité possible.</p>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center page-scroll">
                <a href="#contact" class="btn btn-lg btn-outline">
                    <i class="fa fa-envelope-o"></i> Nous Contacter
                </a>
             </div>
                            <!--<div class="single-item">
                <?php $slides = cr_get_slides('slider-one'); 
                ?>

                <div class="single-item">
                    <?php foreach ($slides as $slide) : ?>
                      <div>
                        <h2><?= $slide->post_title; ?></h2>
                        <img src ="<?= slide_image_url($slide->ID); ?>">
                      </div>
                    <?php endforeach; ?>
                </div>
                </div>  -->           
        </div>
    </div>
</section>