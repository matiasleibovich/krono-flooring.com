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
        <div class="slider-container">
            <div id="slider-filter">
                <div class="slider-filter-text"><span><?=$dict[$_SESSION['language']]['home_title_floors']?></span>
                </div>
            </div>
            <!-- HOME SLIDER -->
            <div id="home-slider">
                <div>
                    <img src="images/photos/flooring_1.jpg" alt="">
                    <div class="ns_slideContent">
                        <div><span>Krono - Flooring</span>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="images/photos/flooring_laminate_1.jpg" alt="">
                    <div class="ns_slideContent">
                        <div><span><?=$dict[$_SESSION['language']]['home_title_floating']?></span>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="images/photos/flooring_vinyl_1.jpg" alt="">
                    <div class="ns_slideContent">
                        <div><span><?=$dict[$_SESSION['language']]['home_title_vinyl']?></span>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="images/photos/flooring_bamboo_1.jpg" alt="">
                    <div class="ns_slideContent">
                        <div><span><?=$dict[$_SESSION['language']]['home_title_bamboo']?></span>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="images/photos/flooring_porcelain_1.jpg" alt="">
                    <div class="ns_slideContent">
                        <div><span><?=$dict[$_SESSION['language']]['home_title_porcelain']?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGE CONTAINER -->
        <div class="page-block">
            <!-- MAIN PAGE CONTENT -->
            <div class="page-block-right">
                <div class="page-block-inner">


                    <h3><?=$dict[$_SESSION['language']]['products_title']?></h3>
                    <!-- LATEST PROJECTS CAROUSEL -->
                    <div id="latestprojects1" class="owl-carousel">
                        <!-- POST -->
                        <figure class="oriel-carousel">
                            <!-- POST IMAGE -->
                            <a href="floating.php" class="ext-link">
                                <img src="images/photos/flooring_laminate_3.jpg" alt="" />
                            </a>
                            <!-- POST CONTENT -->
                            <figcaption>
                                <div>
                                    <h5><a href="floating.php"><?=$dict[$_SESSION['language']]['products_floating_title']?></a></h5>
                                    <hr/>
                                    <p><?=htmlentities($dict[$_SESSION['language']]['products_floating_description'])?></p>
                                    <a href="floating.php" class="readmore-button"><?=$dict[$_SESSION['language']]['more_info_link']?></a>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- POST -->
                        <figure class="oriel-carousel">
                            <!-- POST IMAGE -->
                            <a href="vinyl.php" class="ext-link">
                                <img src="images/photos/flooring_vinyl_2.jpg" alt="" />
                            </a>
                            <!-- POST CONTENT -->
                            <figcaption>
                                <div>
                                    <h5><a href="vinyl.php"><?=$dict[$_SESSION['language']]['products_vinyl_title']?></a></h5>
                                    <hr/>
                                    <p><?=htmlentities($dict[$_SESSION['language']]['products_vinyl_description'])?></p>
                                    <a href="vinyl.php" class="readmore-button"><?=$dict[$_SESSION['language']]['more_info_link']?></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <div id="latestprojects2" class="owl-carousel">
                        <!-- POST -->
                        <figure class="oriel-carousel">
                            <!-- POST IMAGE -->
                            <a href="bamboo.php" class="ext-link">
                                <img src="images/photos/flooring_bamboo_2.jpg" alt="" />
                            </a>
                            <!-- POST CONTENT -->
                            <figcaption>
                                <div>
                                    <h5><a href="bamboo.php"><?=$dict[$_SESSION['language']]['products_bamboo_title']?></a></h5>
                                    <hr/>
                                    <p><?=htmlentities($dict[$_SESSION['language']]['products_floating_description'])?></p>
                                    <a href="bamboo.php" class="readmore-button"><?=$dict[$_SESSION['language']]['more_info_link']?></a>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- POST -->
                        <figure class="oriel-carousel">
                            <!-- POST IMAGE -->
                            <a href="porcelain.php" class="ext-link">
                                <img src="images/photos/flooring_porcelain_2.jpg" alt="" />
                            </a>
                            <!-- POST CONTENT -->
                            <figcaption>
                                <div>
                                    <h5><a href="porcelain.php"><?=$dict[$_SESSION['language']]['products_porcelain_title']?></a></h5>
                                    <hr/>
                                    <p><?=htmlentities($dict[$_SESSION['language']]['products_porcelain_description'])?></p>
                                    <a href="porcelain.php" class="readmore-button"><?=$dict[$_SESSION['language']]['more_info_link']?></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="main-icon-container">

                        <div class="icon-block" style="height:250px;">
                            <div class="icon-container">
                                <a><i class="flaticon-triangular42"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3><?=$dict[$_SESSION['language']]['icons_ecology']?></h3>
                            </div>
                        </div>

                        <div class="icon-block" style="height:250px;">
                            <div class="icon-container">
                                <a><i class="flaticon-multiple25"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3><?=$dict[$_SESSION['language']]['icons_high_transit']?></h3>
                            </div>
                        </div>

                        <div class="icon-block" style="height:250px;">
                            <div class="icon-container">
                                <a><i class="flaticon-recognition6"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3><?=$dict[$_SESSION['language']]['icons_warranty']?></h3>
                            </div>
                        </div>

                        <div class="icon-block" style="height:250px;">
                            <div class="icon-container">
                                <a><i class="flaticon-solar6"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3><?=$dict[$_SESSION['language']]['icons_solar_resistance']?></h3>
                            </div>
                        </div>

                        <div class="icon-block" style="height:250px;">
                            <div class="icon-container">
                                <a><i class="flaticon-hammer26"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3><?=$dict[$_SESSION['language']]['icons_shock_resistance']?></h3>
                            </div>
                        </div>

                        <div class="icon-block" style="height:250px;">
                            <div class="icon-container">
                                <a><i class="flaticon-bathtub3"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3><?=$dict[$_SESSION['language']]['icons_water_transit']?></h3>
                            </div>
                        </div>

                        <div class="icon-block" style="height:250px;">
                            <div class="icon-container">
                                <a><i class="flaticon-home120"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3><?=$dict[$_SESSION['language']]['icons_easy_cleaning']?></h3>
                            </div>
                        </div>

                        <div class="icon-block" style="height:250px;">
                            <div class="icon-container">
                                <a><i class="flaticon-brush20"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3><?=$dict[$_SESSION['language']]['icons_cleaning_resistant']?></h3>
                            </div>
                        </div>

                        <div class="icon-block" style="height:250px;">
                            <div class="icon-container">
                                <a><i class="flaticon-logistics2"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3><?=$dict[$_SESSION['language']]['icons_transport']?></h3>
                            </div>
                        </div>

                    </div>
                    <hr/>




                    <!--
                    <h3>What Our Clients Say</h3>

                    <div id="testimonials">

                        <div class="testimonial">
                            <p class="testimonial-text">Commodo aute singulis proident eu se laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex ut varias pariatur, laboris irure irure consequat magna, aliqua mandaremus qui varias labore ubi aut illum ipsum fore iudicem. Commodo aute singulis proident eu se laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex ut varias pariatur, laboris irure irure consequat magna, aliqua mandaremus qui varias labore ubi aut illum ipsum fore iudicem.</p>
                            <div class="testimonial-image">
                                <img src="images/photos/85x85.gif" alt="" />
                                <h5 class="testimonial-name">John Doe</h5>
                                <p>Themeforest</p>
                            </div>
                        </div>

                        <div class="testimonial">
                            <p class="testimonial-text">Sunt cohaerescant cernantur nisi probant. Doctrina esse quem laboris quorum e e incurreret graviterque. In et velit multos culpa hic enim ea admodum quo quorum, nam se adipisicing, mentitum varias noster ut velit. Ab malis laboris fidelissimae. Iudicem ipsum in mandaremus philosophari an a fore illum in possumus. Sed sint ingeniis tractavissent aut ubi sed illum occaecat, legam et fabulas, est duis. Quorum tempor commodo se incididunt est philosophari.</p>
                            <div class="testimonial-image">
                                <img src="images/photos/85x85.gif" alt="" />
                                <h5 class="testimonial-name">Michael Smith</h5>
                                <p>Codecanyon</p>
                            </div>
                        </div>

                        <div class="testimonial">
                            <p class="testimonial-text">Quorum tempor commodo se incididunt est cillum, fugiat o nescius sed quae, est an fugiat eram quis, ad aut fugiat anim amet o excepteur amet occaecat, voluptate sunt nostrud an a de sint eram multos. Qui magna ipsum quorum vidisse, ne lorem sed fore in si culpa velit lorem singulis, malis probant et amet minim, mentitum aute quibusdam ullamco, ipsum quibusdam quo ullamco, te fabulas sempiternum do o dolor quorum esse ingeniis. Duis philosophari probant.</p>
                            <div class="testimonial-image">
                                <img src="images/photos/85x85.gif" alt="" />
                                <h5 class="testimonial-name">Sam Black</h5>
                                <p>Quality Control</p>
                            </div>
                        </div>

                        <div class="testimonial">
                            <p class="testimonial-text">Aut veniam deserunt ullamco, a enim cupidatat despicationes, se arbitror ita mentitum ad de ut illustriora nam mentitum malis aliquip doctrina est occaecat concursionibus ad nescius, ita se dolore esse tamen do singulis arbitrantur a proident. Ut nam graviterque, ne amet ad sunt ne do fore ullamco, cillum voluptatibus eiusmod labore cernantur, excepteur ne aliqua litteris, multos senserit hic nostrud te anim exercitation cernantur quid aliquip, aliquip ubi ita mentitum hic.</p>
                            <div class="testimonial-image">
                                <img src="images/photos/85x85.gif" alt="" />
                                <h5 class="testimonial-name">Brad Stone</h5>
                                <p>Photodune</p>
                            </div>
                        </div>

                        <div class="testimonial">
                            <p class="testimonial-text">Eu quis litteris senserit in occaecat anim nisi consequat multos. Commodo fugiat eu possumus firmissimum, malis praesentibus cernantur amet possumus, eu non labore tamen veniam eu non ita praesentibus sed nam ubi culpa fugiat noster, velit pariatur eiusmod ab et expetendis sed commodo qui malis iis voluptate. Quis ita mentitum hic et quem nescius proident, sed lorem te fugiat, sunt mandaremus id transferrem. Aliqua sed possumus a an malis.</p>
                            <div class="testimonial-image">
                                <img src="images/photos/85x85.gif" alt="" />
                                <h5 class="testimonial-name">Jack White</h5>
                                <p>Audiojungle</p>
                            </div>
                        </div>
                    </div>
                    -->

                    <h3><?=$dict[$_SESSION['language']]['products_featured_title']?></h3>
                    <div id="latestnews" class="owl-carousel">

                        <figure class="oriel-carousel">

                            <a href="#" class="ext-link">
                                <img src="images/photos/600x400.gif" alt="" />
                            </a>

                            <figcaption>
                                <div>
                                    <h5><a href="#">Sample Post</a></h5>
                                    <p class="oriel-carousel-date">21 October 2015</p>
                                    <hr/>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat…</p>
                                    <a href="#" class="readmore-button">Read More...</a>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- POST -->
                        <figure class="oriel-carousel">
                            <!-- POST IMAGE -->
                            <a href="#" class="ext-link">
                                <img src="images/photos/600x400.gif" alt="" />
                            </a>
                            <!-- POST CONTENT -->
                            <figcaption>
                                <div>
                                    <h5><a href="#">Sample Post</a></h5>
                                    <p class="oriel-carousel-date">19 October 2015</p>
                                    <hr/>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat…</p>
                                    <a href="#" class="readmore-button">Read More...</a>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- POST -->
                        <figure class="oriel-carousel">
                            <!-- POST IMAGE -->
                            <a href="#" class="ext-link">
                                <img src="images/photos/600x400.gif" alt="" />
                            </a>
                            <!-- POST CONTENT -->
                            <figcaption>
                                <div>
                                    <h5><a href="#">Sample Post</a></h5>
                                    <p class="oriel-carousel-date">17 October 2015</p>
                                    <hr/>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat…</p>
                                    <a href="#" class="readmore-button">Read More...</a>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- POST -->
                        <figure class="oriel-carousel">
                            <!-- POST IMAGE -->
                            <a href="#" class="ext-link">
                                <img src="images/photos/600x400.gif" alt="" />
                            </a>
                            <!-- POST CONTENT -->
                            <figcaption>
                                <div>
                                    <h5><a href="#">Sample Post</a></h5>
                                    <p class="oriel-carousel-date">15 October 2015</p>
                                    <hr/>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat…</p>
                                    <a href="#" class="readmore-button">Read More...</a>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- POST -->
                        <figure class="oriel-carousel">
                            <!-- POST IMAGE -->
                            <a href="#" class="ext-link">
                                <img src="images/photos/600x400.gif" alt="" />
                            </a>
                            <!-- POST CONTENT -->
                            <figcaption>
                                <div>
                                    <h5><a href="#">Sample Post</a></h5>
                                    <p class="oriel-carousel-date">14 October 2015</p>
                                    <hr/>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat…</p>
                                    <a href="#" class="readmore-button">Read More...</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <!-- SIDEBAR -->
            <aside class="page-block-left">
                <div class="page-block-inner">
                    <div class="sidebar-box">
                    <div class="call-now"><span><?=$dict[$_SESSION['language']]['contact_us_title']?></span></div>
                    <div class="call-now" style="background:none;"><span style="background-image: url(../images/flags/argentina.png);">(11) 3660-7700</span></div>
                    <div class="call-now" style="background:none;"><span style="background-image: url(../images/flags/brazil.png);">(21) 3942-1876</span></div>
                    <div class="call-now" style="background:none;"><span style="background-image: url(../images/flags/uruguay.png);">(2) 915-2040</span></div>
                    <div class="call-now" style="background:none; padding-top:5px; padding-right: 10px; text-align:right;">
                    	<img src="images/icons/skype.png" style="margin: 3px; margin-left: 10px;">
                    	<img src="images/icons/whatsapp.png" style="margin: 3px;">
                    	<img src="images/icons/hangouts.png" style="margin: 3px;">
                    	<img src="images/icons/linked.png" style="margin: 3px;">
                    	<img src="images/icons/fbk.png" style="margin: 5px;">
                    	<img src="images/icons/twit.png" style="margin: 5px;">
                    </div>
                    </div>
                    <div class="sidebar-box">
                        <h5><?=$dict[$_SESSION['language']]['our_floors_title']?></h5>
                        <!-- SUBMENU -->
                        <nav class="submenu">
                            <ul>
                                <li><a href="floating.php"><?=$dict[$_SESSION['language']]['products_floating_title']?> Krono Original</a></li>
								<li><a href="floating.php"><?=$dict[$_SESSION['language']]['products_floating_title']?> Dankel</a></li>
								<li><a href="vinyl.php"><?=$dict[$_SESSION['language']]['products_vinyl_title']?></a></li>
								<li><a href="bamboo.php"><?=$dict[$_SESSION['language']]['products_bamboo_title']?></a></li>
								<li><a href="porcelain.php"><?=$dict[$_SESSION['language']]['products_porcelain_title']?></a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="sidebar-box">
                        <h5><?=$dict[$_SESSION['language']]['our_brands_title']?></h5>
                        <ul class="sidebar-posts">
                            <li>
                                <div class="sidebar-posts-img">
                                    <a target="_krono" href="http://www.krono-original.com/">
                                        <img src="images/brands/krono_original_85x85.jpg" alt="Krono Original" />
                                    </a>
                                </div>
                                <a target="_krono" href="http://www.krono-original.com/" class="sidebar-post-title"><b>Krono Original</b></a>
                                <p class="sidebar-post-date"><?=htmlentities($dict[$_SESSION['language']]['brand_krono_original_intro'])?></p>
                            </li>
                            <li>
                                <div class="sidebar-posts-img">
                                    <a target="_dankel" href="http://www.dankelflooring.com/">
                                        <img src="images/brands/dankel_85x85.jpg" alt="Danek Regal Flooring" />
                                    </a>
                                </div>
                                <a target="_dankel" href="http://www.dankelflooring.com/" class="sidebar-post-title"><b>Dankel Regal Flooring</b></a>
                                <p class="sidebar-post-date"><?=htmlentities($dict[$_SESSION['language']]['brand_dankel_intro'])?></p>
                            </li>
                            <li>
                                <div class="sidebar-posts-img">
                                    <a target="_span" href="http://www.kronospan-worldwide.com/">
                                        <img src="images/brands/krono_span_85x85.png" alt="Krono Spam" />
                                    </a>
                                </div>
                                <a href="single-post.html" class="sidebar-post-title"><b>Krono Span</b></a>
                                <p class="sidebar-post-date"><?=htmlentities($dict[$_SESSION['language']]['brand_krono_span_intro'])?></p>
                            </li>
                            <li>
                                <div class="sidebar-posts-img">
                                    <a href="http://www.krono-flooring.com">
                                        <img src="images/brands/krono_flooring_85x85.png" alt="Krono-Flooring" />
                                    </a>
                                </div>
                                <a href="single-post.html" class="sidebar-post-title"><b>Krono-Flooring</b></a>
                                <p class="sidebar-post-date"><?=htmlentities($dict[$_SESSION['language']]['brand_krono_flooring_intro'])?></p>
                            </li>
                            <li>
                                <div class="sidebar-posts-img">
                                    <a href="http://www.sedafinternational.com">
                                        <img src="images/brands/sedaf_international_2_85x85.png" alt="SEDAF International" />
                                    </a>
                                </div>
                                <a href="single-post.html" class="sidebar-post-title"><b>SEDAF International</b></a>
                                <p class="sidebar-post-date"><?=htmlentities($dict[$_SESSION['language']]['brand_sedaf_intro'])?></p>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-box">
                        <h5><?=$dict[$_SESSION['language']]['videos_title']?></h5>
						<div class="sidebar-post-title"><b><?=$dict[$_SESSION['language']]['products_floating_title']?></b></div><br><br>

						<a target="_youtube" href="https://youtu.be/ZcHc9TAiRog"><img src="images/photos/video_1.jpg" width="320" height="190" border=0></a><br><br>
						<a target="_youtube" href="https://youtu.be/x8nGoFpIqsw"><img src="images/photos/video_2.jpg" width="320" height="190" border=0></a><br><br>

						<div class="sidebar-post-title"><b><?=$dict[$_SESSION['language']]['products_vinyl_title']?></b></div><br><br>
						<a target="_youtube" href="https://youtu.be/VEvT2JVQZ9o"><img src="images/photos/video_3.jpg" width="320" height="190" border=0></a><br><br>

<!--						<iframe width="320" height="190" src="https://www.youtube.com/embed/ZcHc9TAiRog" frameborder="0" allowfullscreen></iframe><br><br>
						<iframe width="320" height="190" src="https://www.youtube.com/embed/x8nGoFpIqsw" frameborder="0" allowfullscreen></iframe><br><br>

						<iframe width="320" height="190" src="https://www.youtube.com/embed/VEvT2JVQZ9o" frameborder="0" allowfullscreen></iframe><br>-->

                    </div>

                    <!--
                    <div class="sidebar-box">
                        <h5>Categories</h5>
                        <ul class="sidebar-list">
                            <li>
                                <a href="single-post.html">O irure nostrud non</a>
                            </li>
                            <li>
                                <a href="single-post.html">Eu multos eiusmod deserunt</a>
                            </li>
                            <li>
                                <a href="single-post.html">Ab cupidatat philosophari</a>
                            </li>
                            <li>
                                <a href="single-post.html">Commodo dolore te nostrud</a>
                            </li>
                        </ul>
                    </div>
                    -->

                    <!--
                    <div class="sidebar-box">
                        <h5>Flickr Feed</h5>
                        <ul class="flickr-box"></ul>
                        <div class="clear"></div>
                    </div>
                    -->

                    <!--
                    <div class="sidebar-box">
                        <h5>Tags</h5>
                        <div class="tags-container sidebar-tags">
                            <a class="tags" href="#">Voluptate</a>
                            <a class="tags" href="#">Deserani</a>
                            <a class="tags" href="#">Quo eram</a>
                            <a class="tags" href="#">Mentitum amet sit</a>
                            <a class="tags" href="#">Cillum</a>
                            <a class="tags" href="#">Incurreret</a>
                            <a class="tags" href="#">Mauris</a>
                            <a class="tags" href="#">Admodum</a>
                            <a class="tags" href="#">Singulis</a>
                            <a class="tags" href="#">Quit</a>
                            <a class="tags" href="#">Eram amet aliqua</a>
                        </div>
                    </div>
                    -->

                </div>
            </aside>
        </div>
    </main>
    <!-- FOOTER -->
    <footer id="footer">
        <div class="footer-info">
            <!-- COPYRIGHT -->
            <div class="credits">&copy; <?=date('Y')?> <?=$dict[$_SESSION['language']]['copyright']?></div>
            <!-- SOCIAL ICONS -->
            <ul class="social-icons">
                <li>
                    <a href="#">
                        <img class="social-icon" src="images/social-icons/facebook.png" alt="Facebook" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="social-icon" src="images/social-icons/twitter.png" alt="Twitter" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="social-icon" src="images/social-icons/linkedin.png" alt="LinkedIn" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="social-icon" src="images/social-icons/google.png" alt="Google+" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="social-icon" src="images/social-icons/instagram.png" alt="Instagram" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="social-icon" src="images/social-icons/skype.png" alt="Skype" />
                    </a>
                </li>
            </ul>
        </div>
    </footer>
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