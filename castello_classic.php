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
                <h1>Castello Classic</h1>
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
                            <img src="images/photos/castello_classic_0709_Roble_Highland_700x300.jpg">
                            <p class="product-image-title">Castello Classic (0709) Roble Highland</p>
                        </div>
                        <div>
                            <img src="images/photos/castello_classic_4291_Roble_Crusoe_700x300.jpg">
                            <p class="product-image-title">Castello Classic (4291) Roble Crusoe</p>
                        </div>
                        <div>
                            <img src="images/photos/castello_classic_5958_Cabana_Driftwood_700x300.jpg">
                            <p class="product-image-title">Castello Classic (5958) Cabana Driftwood</p>
                        </div>
                        <div>
                            <img src="images/photos/castello_classic_8222_Roble_Rugged_700x300.jpg">
                            <p class="product-image-title">Castello Classic (8222) Roble Rugged</p>
                        </div>
                        <div>
                            <img src="images/photos/castello_classic_8527_Roble_Wasabi_700x300.jpg">
                            <p class="product-image-title">Castello Classic (8527) Roble Wasabi</p>
                        </div>
                        <div>
                            <img src="images/photos/castello_classic_8527_Roble_Wasabi_700x300.jpg">
                            <p class="product-image-title">Castello Classic (8527) Roble Wasabi</p>
                        </div>
                        <div>
                            <img src="images/photos/castello_classic_K040_Urban_Driftwood_700x300.jpg">
                            <p class="product-image-title">Castello Classic (K040) Urban Driftwood</p>
                        </div>

                    </div>
                    <h3>Castello Classic</h3>
                    <p><?=$dict[$_SESSION['language']]['products_castello_classic_description']?></p>
                    <p>
                      <img src="images/icons/garantie-20.jpg">
                      <img src="images/icons/gramme-8mm.jpg">
                      <img src="images/icons/eco-friendly.jpg">
                      <img src="images/icons/abc.jpg">
                      <img src="images/icons/twin-clic.jpg">
                      <img src="images/icons/nkl-23.jpg">
                      <img src="images/icons/nkl-32.jpg">
                      <img src="images/icons/voc-a.jpg">                     
                    </p>
                    <p>
                        
                        <?php if ($_SESSION['language'] == 'EN') { ?>
                        <ul>
                        <li>Dimensions: 1,285 x 192 x 8</li>
                        <li>Guaranteed for 20 years</li>
                        <li>Aquastop 8mm</li>
                        <li>Eco Friendly</li>
                        <li>A.B.C. Anti Bacterial Coating</li>
                        <li><b>Twin Clic</b>: Easy to lay with: Twin clic</li>
                        <li><b>Class 23</b>: For heavy usage in domestic areas</li>
                        <li><b>Class 32 / AC4</b>: For normal usage in commercial areas</li>
                        <li><b>VOC A+</b>: Statement on level of emission of volatile substances in indoor air posing a toxic threat during inhaling - on a scale from A+ (very low-emission) to C (high-emission)</li>
                        </ul>
                        <?php } ?>

                        <?php if ($_SESSION['language'] == 'ES') { ?>
                        <ul>
                        <li>Medidas: 1,285 x 192 x 8</li>
                        <li>Garantizado por 20 años</li>
                        <li>Aquastop 8mm</li>
                        <li>Eco Friendly</li>
                        <li>A.B.C. Anti-Bacterial</li>
                        <li><b>Twin Clic</b>: Fácil de colocar</li>
                        <li><b>Clase 23</b>: Para uso intenso en áreas domésticas</li>
                        <li><b>Clase 32 / AC4</b>: Para uso normal en áreas comerciales</li>
                        <li><b>VOC A+</b>: Declaración sobre el nivel de emisión de sustancias volátiles en el aire interior, constituyendo una amenaza tóxica durante la inhalación - en una escala de A + (muy bajo nivel de emisiones) a C (alta emisión)</li>
                        </ul>
                        <?php } ?>

                        <?php if ($_SESSION['language'] == 'BR') { ?>
                        <ul>
                        <li>Dimensões: 1,285 x 192 x 8</li>
                        <li>Garantida por 20 anos</li>
                        <li>Aquastop 8mm</li>
                        <li>Eco Friendly</li>
                        <li>A.B.C. Antibacteriano</li>
                        <li><b>Twin Clic</b>: Fácil para anexar</li>
                        <li><b>Clase 23</b>: Para o uso pesado em áreas domésticas</li>
                        <li><b>Clase 32 / AC4</b>: Para uso normal em áreas comerciais</li>
                        <li><b>VOC A+</b>: Declaração sobre o nível de emissão de substâncias voláteis no ar interior, formando uma ameaça tóxica durante a inalação - numa escala de A + (emissões muito baixas) para C (libertação elevada)</li>
                        </ul>
                        <?php } ?>

                    </p>
                    <hr/>

                    <h3><?=$dict[$_SESSION['language']]['title_floor_models']?></h3>
                    <div id="project-carousel" class="owl-carousel">

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_0709_Roble_Highland_700x700.jpg" data-title="Castello Classic (0709) Roble Highland">
                                <img src="images/photos/castello_classic_0709_Roble_Highland_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(0709) Roble Highland</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_1665_Roble_Royal_700x700.jpg" data-title="Castello Classic (1665) Roble Royal">
                                <img src="images/photos/castello_classic_1665_Roble_Royal_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(1665) Roble Royal</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_1675_Roble_Spreewald_700x700.jpg" data-title="Castello Classic (1675) Roble Spreewald">
                                <img src="images/photos/castello_classic_1675_Roble_Spreewald_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(1675) Roble Spreewald</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_4280_Roble_Swedish_Country_700x700.jpg" data-title="Castello Classic (4280) Roble Swedish Country">
                                <img src="images/photos/castello_classic_4280_Roble_Swedish_Country_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(4280) Roble Swedish Country</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_4281_Roble_Sable_700x700.jpg" data-title="Castello Classic (4281) Roble Sable">
                                <img src="images/photos/castello_classic_4281_Roble_Sable_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(4281) Roble Sable</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_4282_Roble_Reykjavik_700x700.jpg" data-title="Castello Classic (4282) Roble Reykjavik">
                                <img src="images/photos/castello_classic_4282_Roble_Reykjavik_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(4282) Roble Reykjavik</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_4283_Roble_Flaxen_700x700.jpg" data-title="Castello Classic (4283) Roble Flaxen">
                                <img src="images/photos/castello_classic_4283_Roble_Flaxen_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(4283) Roble Flaxen</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_4284_Roble_Cinder_700x700.jpg" data-title="Castello Classic (4284) Roble Cinder">
                                <img src="images/photos/castello_classic_4284_Roble_Cinder_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(4284) Roble Cinder</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_4290_Pino_Glastonbury_700x700.jpg" data-title="Castello Classic (4290) Pino Glastonbury">
                                <img src="images/photos/castello_classic_4290_Pino_Glastonbury_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(4290) Pino Glastonbury</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_4291_Roble_Crusoe_700x700.jpg" data-title="Castello Classic (4291) Roble Crusoe">
                                <img src="images/photos/castello_classic_4291_Roble_Crusoe_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(4291) Roble Crusoe</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_5552_Roble_White_Oiled_700x700.jpg" data-title="Castello Classic (5552) Roble White Oiled">
                                <img src="images/photos/castello_classic_5552_Roble_White_Oiled_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(5552) Roble White Oiled</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_5949_Manilla_Oak_700x700.jpg" data-title="Castello Classic (5949) Manilla Oak">
                                <img src="images/photos/castello_classic_5949_Manilla_Oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(5949) Manilla Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_5955_Maritime_Oak_700x700.jpg" data-title="Castello Classic (5955) Maritime Oak">
                                <img src="images/photos/castello_classic_5955_Maritime_Oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(5955) Maritime Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_5958_Cabana_Driftwood_700x700.jpg" data-title="Castello Classic (5958) Cabana Driftwood">
                                <img src="images/photos/castello_classic_5958_Cabana_Driftwood_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(5958) Cabana Driftwood</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_6952_Roble_Classic_700x700.jpg" data-title="Castello Classic (6952) Roble Classic">
                                <img src="images/photos/castello_classic_6952_Roble_Classic_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(6952) Roble Classic</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8072_Dab_Nostalgie_700x700.jpg" data-title="Castello Classic (8072) Dab Nostalgie">
                                <img src="images/photos/castello_classic_8072_Dab_Nostalgie_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8072) Dab Nostalgie</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8096_Roble_San_Diego_700x700.jpg" data-title="Castello Classic (8096) Roble San Diego">
                                <img src="images/photos/castello_classic_8096_Roble_San_Diego_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8096) Roble San Diego</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8222_Roble_Rugged_700x700.jpg" data-title="Castello Classic (8222) Roble Rugged">
                                <img src="images/photos/castello_classic_8222_Roble_Rugged_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8222) Roble Rugged</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8459_Cerezo_Brazilian_700x700.jpg" data-title="Castello Classic (8459) Cerezo Brazilian">
                                <img src="images/photos/castello_classic_8459_Cerezo_Brazilian_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8459) Cerezo Brazilian</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8464_Pino_White_Brushed_700x700.jpg" data-title="Castello Classic (8464) Pino White Brushed">
                                <img src="images/photos/castello_classic_8464_Pino_White_Brushed_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8464) Pino White Brushed</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8521_Roble_Elegant_700x700.jpg" data-title="Castello Classic (8521) Roble Elegant">
                                <img src="images/photos/castello_classic_8521_Roble_Elegant_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8521) Roble Elegant</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8527_Roble_Wasabi_700x700.jpg" data-title="Castello Classic (8527) Roble Wasabi">
                                <img src="images/photos/castello_classic_8527_Roble_Wasabi_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8527) Roble Wasabi</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8696_Piton_Nuez_700x700.jpg" data-title="Castello Classic (8696) Piton Nuez">
                                <img src="images/photos/castello_classic_8696_Piton_Nuez_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8696) Piton Nuez</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8726_Roble_Alsace_700x700.jpg" data-title="Castello Classic (8726) Roble Alsace">
                                <img src="images/photos/castello_classic_8726_Roble_Alsace_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8726) Roble Alsace</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8731_Roble_Cottage_700x700.jpg" data-title="Castello Classic (8731) Roble Cottage">
                                <img src="images/photos/castello_classic_8731_Roble_Cottage_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8731) Roble Cottage</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8735_Roble_Black_700x700.jpg" data-title="Castello Classic (8735) Roble Black">
                                <img src="images/photos/castello_classic_8735_Roble_Black_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8735) Roble Black</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8766_Wenge_Kyoto_700x700.jpg" data-title="Castello Classic (8766) Wenge Kyoto">
                                <img src="images/photos/castello_classic_8766_Wenge_Kyoto_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8766) Wenge Kyoto</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_8812_Urban_Legend_700x700.jpg" data-title="Castello Classic (8812) Urban Legend">
                                <img src="images/photos/castello_classic_8812_Urban_Legend_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(8812) Urban Legend</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_9155_Roble_Cordoba_700x700.jpg" data-title="Castello Classic (9155) Roble Cordoba">
                                <img src="images/photos/castello_classic_9155_Roble_Cordoba_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(9155) Roble Cordoba</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_9220_Haya_Reed_700x700.jpg" data-title="Castello Classic (9220) Haya Reed">
                                <img src="images/photos/castello_classic_9220_Haya_Reed_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(9220) Haya Reed</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_K039_Silverside_Driftwood_700x700.jpg" data-title="Castello Classic (K039) Silverside Driftwood">
                                <img src="images/photos/castello_classic_K039_Silverside_Driftwood_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(K039) Silverside Driftwood</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/castello_classic_K040_Urban_Driftwood_700x700.jpg" data-title="Castello Classic (K040) Urban Driftwood">
                                <img src="images/photos/castello_classic_K040_Urban_Driftwood_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">(K040) Urban Driftwood</p>
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
                jQuery('.page-title-container').backstretch("images/photos/castello_classic.jpg");
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