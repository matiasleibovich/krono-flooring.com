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
                <h1>Dankel Regal Flooring</h1>
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
                            <img src="images/photos/dankel_classic_oak_700x300">
                            <p class="product-image-title">Dankel Classic Oak</p>
                        </div>
                        <div>
                            <img src="images/photos/dankel_european_cherry_700x300">
                            <p class="product-image-title">Dankel European Cherry</p>
                        </div>
                        <div>
                            <img src="images/photos/dankel_mer_bau_700x300">
                            <p class="product-image-title">Dankel Merbau</p>
                        </div>
                        <div>
                            <img src="images/photos/dankel_smokey_walnut_700x300">
                            <p class="product-image-title">Dankey Smokey Walnut</p>
                        </div>
                    </div>
                    <h3>Dankel Regal Flooring</h3>
                    <p><ul style="font-size:1.2em; letter-spacing: 1px; line-height:150%;"><?=$dict[$_SESSION['language']]['products_featured_dankel_description']?></ul></p>

                    <hr/>

                    <h3><?=$dict[$_SESSION['language']]['title_floor_models']?></h3>
                    <div id="project-carousel" class="owl-carousel">

                        <div>
                            <a class="project-photo ext-link" href="images/photos/dankel_classic_oak_700x700.jpg" data-title="Dankel Classic Oak">
                                <img src="images/photos/dankel_classic_oak_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">Classic Oak</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/dankel_european_cherry_700x700.jpg" data-title="Dankel European Cherry">
                                <img src="images/photos/dankel_european_cherry_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">European Cherry</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/dankel_mer_bau_700x700.jpg" data-title="Dankel Merbau">
                                <img src="images/photos/dankel_mer_bau_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">Merbau</p>
                        </div>

                        <div>
                            <a class="project-photo ext-link" href="images/photos/dankel_smokey_walnut_700x700.jpg" data-title="Dankel Smokey Walnut">
                                <img src="images/photos/dankel_smokey_walnut_450x450.jpg" alt="">
                            </a>
                            <p class="product-image-title">Smokey Walnut</p>
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
                jQuery('.page-title-container').backstretch("images/photos/dankel_2.jpg");
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