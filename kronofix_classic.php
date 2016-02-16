<?php
    include_once('init.php');
    include_once('header.php');
?>

    <div class="clear"></div>
    <!-- BG FILTERS -->
    <div id="left-bg"></div>
    <div id="right-bg"></div>
    <!-- MAIN CONTAINER -->
    <main id="site-container">
        <!-- SLIDER CONTAINER -->
        <div class="page-title-container">
            <div id="page-title-bg"></div>
            <div id="page-title-text">
                <h1>Kronofix Classic</h1>
            </div>
        </div>
        <!-- PAGE CONTAINER -->
        <div class="page-block">
            <!-- MAIN PAGE CONTENT -->
            <div class="page-block-right">
                <!-- GRID -->
                <div class="page-block-inner">
                    <!-- SLIDER -->
                    <div id="full-carousel" class="owl-carousel">
                        <div>
                            <img src="images/photos/kronofix_classic_1665_roble_royal_700x300.jpg">
                            <p class="product-image-title">Kronofix Classic (1665) Roble Royal</p>
                        </div>
                        <div>
                            <img src="images/photos/kronofix_classic_1688_flaming_beech_700x300.jpg">
                            <p class="product-image-title">Kronofix Classic (1688) Flaming Beech</p>
                        </div>
                        <div>
                            <img src="images/photos/kronofix_classic_4009_rock_ridge_oak_700x300.jpg">
                            <p class="product-image-title">Kronofix Classic (4009) Rock Ridge Oak</p>
                        </div>
                        <div>
                            <img src="images/photos/kronofix_classic_5950_manhattan_walnut_700x300.jpg">
                            <p class="product-image-title">Kronofix Classic (5950) Manhattan Walnut</p>
                        </div>
                        <div>
                            <img src="images/photos/kronofix_classic_5963_tasmanian_blackwood_700x300.jpg">
                            <p class="product-image-title">Kronofix Classic (5963) Tasmanian Blackwood</p>
                        </div>
                        <div>
                            <img src="images/photos/kronofix_classic_5968_boardwalk_700x300.jpg">
                            <p class="product-image-title">Kronofix Classic (5968) Boardwalk</p>
                        </div>
                    </div>
                    <h3>Kronofix Classic</h3>
                    <p><?=$dict[$_SESSION['language']]['products_kronofix_classic_description']?></p>
                    <p>
                      <img src="images/icons/garantie-15.jpg">
                      <img src="images/icons/gramme-7mm.jpg">
                      <img src="images/icons/eco-friendly.jpg">
                      <img src="images/icons/abc.jpg">
                      <img src="images/icons/twin-clic.jpg">
                      <img src="images/icons/nkl-23.jpg">
                      <img src="images/icons/nkl-31.jpg">
                      <img src="images/icons/voc-a.jpg">                     
                    </p>
                    <p>
                        
                        <?php if ($_SESSION['language'] == 'EN') { ?>
                        <ul>
                        <li>Dimensions: 1,285 x 192 x 7</li>
                        <li>Guaranteed for 15 years</li>
                        <li>Aquastop 7mm</li>
                        <li>Eco Friendly</li>
                        <li>A.B.C. Anti Bacterial Coating</li>
                        <li><b>Twin Clic</b>: Easy to lay with: Twin clic</li>
                        <li><b>Class 23</b>: For heavy usage in domestic areas</li>
                        <li><b>Class 31 / AC3</b>: For moderate usage in commercial areas</li>
                        <li><b>VOC A+</b>: Statement on level of emission of volatile substances in indoor air posing a toxic threat during inhaling - on a scale from A+ (very low-emission) to C (high-emission)</li>
                        </ul>
                        <?php } ?>

                        <?php if ($_SESSION['language'] == 'ES') { ?>
                        <ul>
                        <li>Medidas: 1,285 x 192 x 7</li>
                        <li>Garantizado por 15 años</li>
                        <li>Aquastop 7mm</li>
                        <li>Eco Friendly</li>
                        <li>A.B.C. Anti-Bacterial</li>
                        <li><b>Twin Clic</b>: Fácil de colocar</li>
                        <li><b>Clase 23</b>: Para uso intenso en áreas domésticas</li>
                        <li><b>Clase 31 / AC3</b>: Para uso moderado en áreas comerciales</li>
                        <li><b>VOC A+</b>: Declaración sobre el nivel de emisión de sustancias volátiles en el aire interior, constituyendo una amenaza tóxica durante la inhalación - en una escala de A + (muy bajo nivel de emisiones) a C (alta emisión)</li>
                        </ul>
                        <?php } ?>

                        <?php if ($_SESSION['language'] == 'BR') { ?>
                        <ul>
                        <li>Dimensões: 1,285 x 192 x 7</li>
                        <li>Garantida por 15 anos</li>
                        <li>Aquastop 7mm</li>
                        <li>Eco Friendly</li>
                        <li>A.B.C. Antibacteriano</li>
                        <li><b>Twin Clic</b>: Fácil para anexar</li>
                        <li><b>Clase 23</b>: Para o uso pesado em áreas domésticas</li>
                        <li><b>Clase 31 / AC3</b>: Para uso moderado em áreas comerciais</li>
                        <li><b>VOC A+</b>: Declaração sobre o nível de emissão de substâncias voláteis no ar interior, formando uma ameaça tóxica durante a inalação - numa escala de A + (emissões muito baixas) para C (libertação elevada)</li>
                        </ul>
                        <?php } ?>

                    </p>
                    <hr/>

                    <h3><?=$dict[$_SESSION['language']]['title_floor_models']?></h3>
                    <div id="project-carousel" class="owl-carousel">
                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_1665_roble_royal_700x700.jpg" data-title="Kronofix Classic (1665) Roble Royal">
                                <img src="images/photos/kronofix_classic_1665_roble_royal_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(1665) Roble Royal</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_1668_appalachia_maple_700x700.jpg" data-title="Kronofix Classic (1668) Appalachia Maple">
                                <img src="images/photos/kronofix_classic_1668_appalachia_maple_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(1668) Appalachia Maple</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_1688_flaming_beech_700x700.jpg" data-title="Kronofix Classic (1688) Flaming Beech">
                                <img src="images/photos/kronofix_classic_1688_flaming_beech_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(1688) Flaming Beech</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_4009_rock_ridge_oak_700x700.jpg" data-title="Kronofix Classic (4009) Rock Ridge Oak">
                                <img src="images/photos/kronofix_classic_4009_rock_ridge_oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(4009) Rock Ridge Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_5167_honey_oak_700x700.jpg" data-title="Kronofix Classic (5167) Honey Oak">
                                <img src="images/photos/kronofix_classic_5167_honey_oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(5167) Honey Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_5236_greenland_oak_700x700.jpg" data-title="Kronofix Classic (5236) Greenland Oak">
                                <img src="images/photos/kronofix_classic_5236_greenland_oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(5236) Greenland Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_5945_baronial_oak_700x700.jpg" data-title="Kronofix Classic (5945) Baronial Oak">
                                <img src="images/photos/kronofix_classic_5945_baronial_oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(5945) Baronial Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_5950_manhattan_walnut_700x700.jpg" data-title="Kronofix Classic (5950) Manhattan Walnut">
                                <img src="images/photos/kronofix_classic_5950_manhattan_walnut_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(5950) Manhattan Walnut</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_5962_oahu_koa_700x700.jpg" data-title="Kronofix Classic (5962) Oahu Oak">
                                <img src="images/photos/kronofix_classic_5962_oahu_koa_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(5962) Oahu Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_5963_tasmanian_blackwood_700x700.jpg" data-title="Kronofix Classic (5963) Tasmanian Blackwood">
                                <img src="images/photos/kronofix_classic_5963_tasmanian_blackwood_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(5963) Tasmanian Blackwood</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_5965_kinshasa_wenge_700x700.jpg" data-title="Kronofix Classic (5965) Kinshasa Wenge">
                                <img src="images/photos/kronofix_classic_5965_kinshasa_wenge_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(5965) Kinshasa Wenge</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_5968_boardwalk_700x700.jpg" data-title="Kronofix Classic (5968) Boardwalk">
                                <img src="images/photos/kronofix_classic_5968_boardwalk_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(5968) Boardwalk</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_7209_liberty_oak_700x700.jpg" data-title="Kronofix Classic (7209) Liberty Oak">
                                <img src="images/photos/kronofix_classic_7209_liberty_oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(7209) Liberty Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_8093_lancaster_oak_700x700.jpg" data-title="Kronofix Classic (8093) Lancaster Oak">
                                <img src="images/photos/kronofix_classic_8093_lancaster_oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8093) Lancaster Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_8220_surf_oak_700x700.jpg" data-title="Kronofix Classic (8220) Surf Oak">
                                <img src="images/photos/kronofix_classic_8220_surf_oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8220) Surf Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_8373_manitoba_oak_700x700.jpg" data-title="Kronofix Classic (8373) Manitoba Oak">
                                <img src="images/photos/kronofix_classic_8373_manitoba_oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8373) Manitoba Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_8463_sea_breeze_oak_700x700.jpg" data-title="Kronofix Classic (8463) Sea Breeze Oak">
                                <img src="images/photos/kronofix_classic_8463_sea_breeze_oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8463) Sea Breeze Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_8494_sylt_fine_line_700x700.jpg" data-title="Kronofix Classic (8494) Sylt Fine Line">
                                <img src="images/photos/kronofix_classic_8494_sylt_fine_line_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8494) Sylt Fine Line</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_8643_scandinavian_ash_700x700.jpg" data-title="Kronofix Classic (8643) Scandinavian Ash">
                                <img src="images/photos/kronofix_classic_8643_scandinavian_ash_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8643) Scandinavian Ash</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_8812_urban_legend_700x700.jpg" data-title="Kronofix Classic (8812) Urban Legend">
                                <img src="images/photos/kronofix_classic_8812_urban_legend_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8812) Urban Legend</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_9400_canadian_elm_700x700.jpg" data-title="Kronofix Classic (9400) Canadian Elm">
                                <img src="images/photos/kronofix_classic_9400_canadian_elm_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(9400) Canadian Elm</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_9742_afzelia_malay_700x700.jpg" data-title="Kronofix Classic (9472) Afzelia Malay">
                                <img src="images/photos/kronofix_classic_9742_afzelia_malay_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(9472) Afzelia Malay</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_k034_rivendell_ash_700x700.jpg" data-title="Kronofix Classic (K034) Rivendell Ash">
                                <img src="images/photos/kronofix_classic_k034_rivendell_ash_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(K034) Rivendell Ash</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_k038_bali_driftwood_700x700.jpg" data-title="Kronofix Classic (K038) Bali Driftwood">
                                <img src="images/photos/kronofix_classic_k038_bali_driftwood_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(K038) Bali Driftwood</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_k042_art_works_700x700.jpg" data-title="Kronofix Classic (K038) Bali Driftwood">
                                <img src="images/photos/kronofix_classic_k042_art_works_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(K042) Art Works</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/kronofix_classic_k056_main_oak_700x700.jpg" data-title="Kronofix Classic (K056) Main Oak">
                                <img src="images/photos/kronofix_classic_k056_main_oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(K056) Main Oak</p>
                        </div>

                    </div>
                    </div>
            </div>
            <!-- SIDEBAR -->
            <aside class="page-block-left">
                <div class="page-block-inner">

                    <?php require_once('slider-contact.php'); ?>
                    <?php require_once('slider-floors.php'); ?>
                    <?php require_once('slider-brands.php'); ?>

                </div>
            </aside>
        </div>
    </main>

    <?php include_once('footer-content.php'); ?>

    <!-- JS FILES -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/backstretch.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/easyResponsiveTabs.js"></script>
    <script type="text/javascript" src="js/colorbox.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
    <!-- PAGE TITLE BG IMAGE -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            "use strict";
            if (jQuery(window).width() > 480) {
                jQuery('.page-title-container').backstretch("images/photos/kronofix_classic.jpg");
            }
        });
    </script>
    <!-- SLIDER -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery("#full-carousel").owlCarousel({
                items: 1,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: false,
                dots: true,
                autoHeight: true,
                margin: 0,
                smartSpeed: 1000,
                navText: ['', ''],
                nav: false,
                loop: true
            });
        });
    </script>
    <!-- HORIZONTAL TABS -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('#horizontalTab').easyResponsiveTabs({
                type: 'default',
                width: 'auto',
                fit: true,
                activate: function () {
                    jQuery('#horizontalTab').find(".resp-tab-content").addClass('animatedmedium fadeIn');
                    setTimeout(function () {
                        jQuery('#horizontalTab').find(".resp-tab-content").removeClass('animatedmedium fadeIn');
                    }, 400);
                }
            });
        });
    </script>
    <!-- PROJECT GALLERY -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery("#project-carousel").owlCarousel({
                items: 1,
                margin: 16,
                dots: false,
                navRewind :false,
                smartSpeed: 800,
                navText: [' ', ' '],
                nav: true,
                loop: false,
                lazyLoad: false,
                responsive: {
                    480: {
                        items: 1
                    },
                    640: {
                        items: 2
                    },
                    900: {
                        items: 3
                    },
                    1025: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    }
                }
            });
        });
    </script>
    <!-- PROJECT GALLERY COLORBOX -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            "use strict";
            jQuery(".project-photo").colorbox({ 
                rel: 'project-photo',
                title: function () {
                    return jQuery(this).data('title');
                }, 
                maxWidth:'95%', 
                maxHeight:'95%' 
            });
        });
    </script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>