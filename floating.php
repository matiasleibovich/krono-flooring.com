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
            <div id="page-title-text"><h1><?=$dict[$_SESSION['language']]['home_title_floors']?> <?=$dict[$_SESSION['language']]['home_title_floating']?></h1></div>
        </div>
        <!-- PAGE CONTAINER -->
        <div class="page-block">
            <!-- MAIN PAGE CONTENT -->
            <div class="page-block-right">
                <div class="page-block-inner">
                    
                    <!-- POST 1 -->
                    <article class="gallerycontainer">
                        <!-- POST IMAGE -->
                        <div class="galleryimage projectimage" data-image="images/photos/kronofix_classic_5167_honey_oak_700x700.jpg">
                            <a href="kronofix_classic.php"></a>
                        </div>
                        <!-- POST CONTENT -->
                        <div class="gallerycontent">
                            <h4><a href="single-project.html">Kronofix Classic</a></h4>
                            <p><?=$dict[$_SESSION['language']]['products_featured_kronofix_classic_description']?></p>
                            <a href="single-project.html" class="readmore-button"><?=$dict[$_SESSION['language']]['more_info_link']?>...</a>
                        </div>
                    </article>

                    <!-- POST 2 -->
                    <article class="gallerycontainer right-img">
                        <!-- POST IMAGE -->
                        <div class="galleryimage projectimage" data-image="images/photos/800x400.gif">
                            <a href="single-project.html"></a>
                        </div>
                        <!-- POST CONTENT -->
                        <div class="gallerycontent">
                            <h4><a href="single-project.html">Vidisse est sint</a></h4>
                            <p>In eram commodo. Ullamco ubi mandaremus et hic irure et fore, quae expetendis et vidisse qui aliqua graviterque mentitum sunt cupidatat, ex iudicem.</p>
                            <a href="single-project.html" class="readmore-button">View Project</a>
                        </div>
                    </article>

                    <!-- POST 3 -->
                    <article class="gallerycontainer">
                        <!-- POST IMAGE -->
                        <div class="galleryimage projectimage" data-image="images/photos/800x400.gif">
                            <a href="single-project.html"></a>
                        </div>
                        <!-- POST CONTENT -->
                        <div class="gallerycontent">
                            <h4><a href="single-project.html">De eram exercitat</a></h4>
                            <p>Id nisi aliquip praetermissum. Cupidatat est esse, noster an quamquam non nulla. Cupidatat ea nostrud, irure nostrud pariatur, fugiat doctrina.</p>
                            <a href="single-project.html" class="readmore-button">View Project</a>
                        </div>
                    </article>

                    <!-- POST 4 -->
                    <article class="gallerycontainer right-img">
                        <!-- POST IMAGE -->
                        <div class="galleryimage projectimage" data-image="images/photos/800x400.gif">
                            <a href="single-project.html"></a>
                        </div>
                        <!-- POST CONTENT -->
                        <div class="gallerycontent">
                            <h4><a href="single-project.html">Ad nisi eu nisi</a></h4>
                            <p>Aliquip e quibusdam. Nulla aliquip si cillum labore se sint ullamco instituendarum, se incurreret familiaritatem aut hic senserit arbitrantur cernantur.</p>
                            <a href="single-project.html" class="readmore-button">View Project</a>
                        </div>
                    </article>

                    <!-- POST 5 -->
                    <article class="gallerycontainer">
                        <!-- POST IMAGE -->
                        <div class="galleryimage projectimage" data-image="images/photos/800x400.gif">
                            <a href="single-project.html"></a>
                        </div>
                        <!-- POST CONTENT -->
                        <div class="gallerycontent">
                            <h4><a href="single-project.html">Ullamco praesentibus</a></h4>
                            <p>Multos est nam multos admodum. Admodum aute incididunt se in et aute litteris ita qui sunt qui fore, quorum in deserunt ita quae. Id minim ex quorum do.</p>
                            <a href="single-project.html" class="readmore-button">View Project</a>
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
                    <?php require_once('slider-videos.php'); ?>

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