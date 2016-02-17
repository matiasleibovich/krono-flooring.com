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
            <div id="page-title-text"><h1><?=$dict[$_SESSION['language']]['title_floating_floors']?></h1></div>
        </div>
        <!-- PAGE CONTAINER -->
        <div class="page-block">
            <!-- MAIN PAGE CONTENT -->
            <div class="page-block-right">
                <div class="page-block-inner">
                    

                    <article class="gallerycontainer">
                        <div class="galleryimage projectimage" data-image="images/photos/kronofix_classic_5167_honey_oak_700x700.jpg">
                            <a href="kronofix_classic.php"></a>
                        </div>

                        <div class="gallerycontent">
                            <h4><a href="kronofix_classic.php">Kronofix Classic</a></h4>
                            <p><?=$dict[$_SESSION['language']]['products_featured_kronofix_classic_description']?></p>
                            <a href="kronofix_classic.php" class="readmore-button"><?=$dict[$_SESSION['language']]['more_info_link']?>...</a>
                        </div>
                    </article>

                    <article class="gallerycontainer right-img">
                        <div class="galleryimage projectimage" data-image="images/photos/danek_800x400.jpg">
                            <a href="dankel.php"></a>
                        </div>

                        <div class="gallerycontent">
                            <h4><a href="dankel.php">Dankel Flooring</a></h4>
                            <p><?=$dict[$_SESSION['language']]['products_featured_dankel_description']?></p>
                            <a href="dankel.php" class="readmore-button"><?=$dict[$_SESSION['language']]['more_info_link']?>...</a>
                        </div>
                    </article>

                    <article class="gallerycontainer">
                        <div class="galleryimage projectimage" data-image="images/photos/castello_classic_4281_Roble_Sable_700x700.jpg">
                            <a href="catello_classic.php"></a>
                        </div>

                        <div class="gallerycontent">
                            <h4><a href="castello_classic.php">Castello Classic</a></h4>
                            <p><?=$dict[$_SESSION['language']]['products_featured_castello_classic_description']?></p>
                            <a href="kronofix_classic.php" class="readmore-button"><?=$dict[$_SESSION['language']]['more_info_link']?>...</a>
                        </div>
                    </article>

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
    <script type="text/javascript" src="js/colorbox.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
    <!-- PAGE TITLE BG IMAGE -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            "use strict";
            if (jQuery(window).width() > 480) {
                jQuery('.page-title-container').backstretch("images/photos/flooring_laminate_1.jpg");
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