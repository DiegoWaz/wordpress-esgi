    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="googlemap">
                <div class="googlemap_overlay">
                    <div class="row">
                        <div class="footer-col col-md-12">
                            <h3>Location</h3>
                            <p>Paris
                                <br>France</p>

                            <h3>Autour du web</h3>

                                <?php if ( is_active_sidebar( 'footer_right' ) ) : ?>

                                        <?php dynamic_sidebar( 'footer_right' ); ?>

                                <?php endif; ?>
                            </ul>

                            <h3>Par téléphone</h3>
                            <p><i class="fa fa-phone"></i> +33 77 3109595<br>
                            <i class="fa fa-phone"></i> +331 78 2254115</p>
                        </div>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.35392558463!2d2.3436592156748204!3d48.870529179288596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e161c72fff1%3A0x14804fa9242a3b8b!2s18+Rue+Saint-Fiacre%2C+75002+Paris!5e0!3m2!1sfr!2sfr!4v1487903895710" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="container">

            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Food By Night <?= date("Y"); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <?php $products = cr_get_product('american-food'); ?>
    <?php foreach ($products as $product) : ?>
        <!-- Portfolio Modals -->
        <div class="portfolio-modal modal fade" id="portfolioModal-<?= $product->post_name; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2><?= $product->post_title; ?></h2>
                                <hr class="star-primary">
                                <img src="<?= product_image_url($product->ID); ?>" class="img-responsive img-centered" alt="">
                                <p>
                                    <?= $product->post_content; ?>
                                </p>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>