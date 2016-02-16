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

    <?php require_once('index-slider.php'); ?>

        <div class="page-block">
            <!-- MAIN PAGE CONTENT -->
            <div class="page-block-right">
                <div class="page-block-inner">

				    <?php require_once('index-products.php'); ?>
				    <?php require_once('index-icons.php'); ?>
				    <?php require_once('index-featured.php'); ?>

                </div>
            </div>
            <!-- SIDEBAR -->
            <aside class="page-block-left">
                <div class="page-block-inner">

				    <?php require_once('slider-contact.php'); ?>
				    <?php require_once('slider-floors.php'); ?>
				    <?php require_once('slider-brands.php'); ?>
				    <?php require_once('slider-videos.php'); ?>

                </div>
            </aside>
        </div>
    </main>

	<?php include_once('footer-content.php'); ?>

    <!-- JS FILES -->

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-custom.min.js"></script>
    <script type="text/javascript" src="js/nerveslider.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/colorbox.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.min.js"></script>

    <!-- SLIDER -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            "use strict";
            jQuery("body").find('#home-slider').show();
            jQuery('.ns_slideContent').find('div span').addClass('animated fadeInRight');
            jQuery("#home-slider").nerveSlider({
                sliderAutoPlay: true,
                slideTransitionDelay: 5000,
                sliderWidth: "100%",
                sliderHeight: "100%",
                sliderHeightAdaptable: false,
                slidesDraggable: false,
                sliderResizable: true,
                sliderKeepAspectRatio: false,
                slideTransition: "slide",
                slideTransitionSpeed: 1000,
                slideTransitionEasing: "easeInOutQuart",
                showDots: false,
                slideTransitionStart: function () {
                    jQuery('.ns_slideContent').find('div span').fadeOut();
                    jQuery('.ns_slideContent').find('div span').removeClass('animated fadeInRight');
                },
                slideTransitionComplete: function () {
                    jQuery('.ns_slideContent').find('div span').fadeIn();
                    jQuery('.ns_slideContent').find('div span').addClass('animated fadeInRight');
                }
            });
        });
    </script>

    <!-- LATEST NEWS CAROUSEL -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery("#latestprojects1").owlCarousel({
                items: 1,
                margin: 16,
                dots: false,
                smartSpeed: 800,
                navText: [' ', ' '],
                nav: true,
                loop: false,
                navRewind: false,
                lazyLoad: true,
                responsive: {
                    480: {
                        items: 1
                    },
                    640: {
                        items: 2
                    }
                }
            });
            jQuery("#latestprojects2").owlCarousel({
                items: 1,
                margin: 16,
                dots: false,
                smartSpeed: 800,
                navText: [' ', ' '],
                nav: true,
                loop: false,
                navRewind: false,
                lazyLoad: true,
                responsive: {
                    480: {
                        items: 1
                    },
                    640: {
                        items: 2
                    }
                }
            });
        });
    </script>

    <!-- TESTIMONIALS CAROUSEL -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery("#testimonials").show();
            jQuery("#testimonials").owlCarousel({
                items: 1,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                dots: true,
                autoHeight: true,
                margin: 16,
                smartSpeed: 800,
                navText: ['', ''],
                nav: false,
                loop: true,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut'
            });
        });
    </script>

    <!-- LATEST NEWS CAROUSEL -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery("#latestnews").owlCarousel({
                items: 1,
                margin: 16,
                dots: false,
                smartSpeed: 800,
                navText: [' ', ' '],
                nav: true,
                loop: false,
                navRewind: false,
                lazyLoad: true,
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
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>
