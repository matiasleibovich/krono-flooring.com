<!DOCTYPE html>
<html lang="<?=$_SESSION['language']?>">

<head>
    <title><?=$dict[$_SESSION['language']]['home_title']?></title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=0,width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- FAVICON -->
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- CSS FILES -->

    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/nerveslider.css" rel="stylesheet" type="text/css">
    <link href="css/flaticon.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/colors.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="css/colorbox.css" rel="stylesheet" type="text/css">
    <link href="css/media.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>

<body>
    <!-- PAGE LOADING -->
    <div id="page-loading"></div>
    <!-- HEADER -->
    <header id="header" class="nav-container">
        <!-- LOGO -->
        <div class="logo">
            <a href="/">
                <img src="images/logo.png" alt="" />
            </a>
        </div>
        <!-- MOBILE MENU ICON -->
        <a class="toggleMenu" href="#">Menu</a>
        <!-- MAIN MENU -->
        <nav>
            <ul class="nav">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#"><?=$dict[$_SESSION['language']]['our_floors_title']?></a>
                    <ul>
                        <li>
                            <a href="floating.php"><?=$dict[$_SESSION['language']]['products_floating_title']?></a>
                        </li>
                        <li>
                            <a href="vinyl.php"><?=$dict[$_SESSION['language']]['products_vinyl_title']?></a>
                        </li>
                        <li>
                            <a href="bamboo.php"><?=$dict[$_SESSION['language']]['products_bamboo_title']?></a>
                        </li>
                        <li>
                            <a href="porcelain.php"><?=$dict[$_SESSION['language']]['products_porcelain_title']?></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="files/KRONO-FLOORING-Catalogo-2016-SD.pdf"><?=$dict[$_SESSION['language']]['home_title_catalog']?></a>
                </li>
                <li>
                    <a href="#contact-slider-na"><?=$dict[$_SESSION['language']]['contact_us_title']?></a>
                </li>
                <li>
                    <a href="?language=ES" style="display:table-cell; padding:5px 5px; color:white; background-color: #006;"><b>ES</b></a>
                    <a href="?language=EN" style="display:table-cell; padding:5px 5px; color:white; background-color: #900;"><b>EN</b></a>
                    <a href="?language=BR" style="display:table-cell; padding:5px 5px; color:white; background-color: #060;"><b>BR</b></a>
                </li>

            </ul>
        </nav>
    </header>