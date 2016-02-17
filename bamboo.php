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
            <div id="page-title-text"><h1><?=$dict[$_SESSION['language']]['title_bamboo_floors']?></h1></div>
        </div>
        <!-- PAGE CONTAINER -->
        <div class="page-block">
            <!-- MAIN PAGE CONTENT -->
            <div class="page-block-right">
                <div class="page-block-inner" style="background-image:url(images/photos/catalog_book_1080.jpg); background-repeat:no-repeat;">
                    
                    <img src="images/icons/working_150.png" style="float:right;">
                    <h4 style="text-shadow: 2px 2px 8px #fff;"><?=$dict[$_SESSION['language']]['catalog_update']?></h4>
                    <p style="height:500px; text-align:top;"></p>


                </div>
            </div>

            <!-- SIDEBAR -->
            <aside class="page-block-left">
                <div class="page-block-inner">

                    <?php require_once('slider-contact.php'); ?>
                    <?php require_once('slider-floors.php'); ?>


                </div>
            </aside>
        </div>
    </main>

    <?php include_once('footer-content.php'); ?>

    <!-- JS FILES -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/backstretch.min.js"></script>
    <script type="text/javascript" src="js/colorbox.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
    <!-- PAGE TITLE BG IMAGE -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            "use strict";
            if (jQuery(window).width() > 480) {
                jQuery('.page-title-container').backstretch("images/photos/flooring_bamboo_1.jpg");
            }
        });
    </script>
    <!-- POST IMAGE LOOP -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            "use strict";
            jQuery(".galleryimage").each(function () {
                if (jQuery(this).attr('data-image')) {
                    jQuery(this).backstretch(jQuery(this).data('image'));
                }
            });
        });
    </script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>