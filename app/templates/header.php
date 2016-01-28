<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidath Construction</title>
    <meta name="author" content="Themezinho">
    <meta name="description" content="Sidath Construction">
    <meta name="keywords" content="html, template, carousel, theme,, construction, html5">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Sidath Construction">
    <meta property="og:image" content="sidathconstruction.esy.es/preview.png">
    <meta property="og:site_name" content="Constructor">
    <meta property="og:title" content="Constructor">
    <meta property="og:type" content="website">
    <meta property="og:url" content="sidathconstruction.esy.es">

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Constructor">
    <meta name="twitter:creator" content="@Constructor">
    <meta name="twitter:title" content="Constructor">
    <meta name="twitter:description" content="Sidath Construction">
    <meta name="twitter:image" content="sidathconstruction.esy.es/preview.png">

    <!-- FAVICON FILES -->
    <link href="../../public/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="../../public/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="../../public/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="../../public/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="../../public/ico/logo.ico" rel="shortcut icon">

    <!-- CSS FILES -->
    <link href="../../public/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();?>
<body class="body-left">
<div class="loading">
    <div class="table">
        <div class="inner"> <img src="../../public/images/logo.png" alt="Image" class="logo"> </div>
        <!-- end inner -->
    </div>
    <!-- end table -->
</div>
<!-- end loading -->
<div class="transition-overlay"></div>
<header>
    <div class="side-box">
        <span class="close-sidebar"><i class="ion-close"></i></span>
        <div class="widget search">
            <h4>QUICK SEARCH</h4>
            <form>
                <input type="text" placeholder="Search project">
                <button type="submit">GO</button>
            </form>
        </div>
        <!-- end widget -->
        <div class="widget text">
            <img src="../../public/images/logo.png" alt="Image">
            <p>When I came in he cleared the books and papers from the table, and with him I went into plans and</p>
        </div>
        <!-- end text -->
        <div class="widget gallery">
            <ul>
                <li><a href="../../public/images/image1.jpg" class="fancybox"><img src="../../public/images/image1.jpg" alt="Image"></a></li>
                <li><a href="../../public/images/image2.jpg" class="fancybox"><img src="../../public/images/image2.jpg" alt="Image"></a></li>
                <li><a href="../../public/images/image9.jpg" class="fancybox"><img src="../../public/images/image9.jpg" alt="Image"></a></li>
                <li><a href="../../public/images/image5.jpg" class="fancybox"><img src="../../public/images/image5.jpg" alt="Image"></a></li>
                <li><a href="../../public/images/image6.jpg" class="fancybox"><img src="../../public/images/image6.jpg" alt="Image"></a></li>
                <li><a href="../../public/images/image7.jpg" class="fancybox"><img src="../../public/images/image7.jpg" alt="Image"></a></li>
                <li><a href="../../public/images/image8.jpg" class="fancybox"><img src="../../public/images/image8.jpg" alt="Image"></a></li>
                <li><a href="../../public/images/image9.jpg" class="fancybox"><img src="../../public/images/image9.jpg" alt="Image"></a></li>
            </ul>
        </div>
        <!-- end gallery -->
        <div class="widget responsive">
            <img src="../../public/images/icon-responsive.png" alt="Image">
            <h5>RESPONSIVE DESIGN</h5>
        </div>
        <!-- end responsive -->
        <div class="widget social-media">
            <ul>
                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
            </ul>
        </div>
        <!-- end social-media -->
        <small>Copyright © 2016,| Sidath Construction |</small>
    </div>
    <!-- end side-menu -->
    <!--<div class="search-bar">
        <form>
            <input type="text" placeholder="Type your word" autofocus >
            <button type="submit">SEARCH</button>
        </form>
        <span class="close-button"><i class="ion-close"></i></span> </div>-->
    <!-- end search-bar -->
    <div class="top-bar transparent">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-3 hidden-xs">
                    <h5 class="...hidden-sm" style="color: #000">CUSTOMER SERVICE : <b>+94 772 66 80 78 </b></h5>
                    <ul class="social-media">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
                <!-- end col-6 -->
                <div class="col-md-6 col-sm-9 col-xs-12">
                    <ul class="shop-menu">
                        <li><a href="#" data-toggle="modal" data-target="#register-box">REGISTER</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#login-box">LOGIN</a></li>
                        <!-- <li><a href="#" class="search-btn">SEARCH</a></li>-->
                    </ul>
                    <div class="language dropdown hidden-xs"> <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <img src="../../public/images/en.png" alt="Image"> ENGLISH <!--<i class="ion-arrow-down-b"></i></a>-->
                            <!--<ul class="dropdown-menu" role="menu">
                                <li><a href="index-slider.html" class="transition"><img src="../../public/images/tr.png" alt="Image"> TURKISH</a></li>
                                <li><a href="index-slider.html" class="transition"><img src="../../public/images/br.png" alt="Image"> PORTUGUES</a></li>
                                <li><a href="index-slider.html" class="transition"><img src="../../public/images/fr.png" alt="Image"> FRENCH</a></li>
                            </ul>-->
                    </div>
                    <!-- end language -->
                    <!--<div class="cart"> <span class="item"><a href="cart.html" class="transition">2 ITEM(S)</a></span> <img src="../../public/images/icon-cart.svg" alt="Image"> <span class="total">$1.289</span> </div>-->
                    <!-- end cart -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end top-bar -->
    <nav class="navbar navbar-default transparent" role="navigation" id="nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#mobile-menu"> <i class="ion-navicon"></i> </button>
                <a class="navbar-brand" href="index.html"><img src="../../public/images/logo.png" alt="Image"></a> </div>
            <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="mobile-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php" class="transition">HOME</a></li>
                    <li><a href="about-us.php" class="transition">ABOUT US</a></li>
                    <li class="dropdown"> <a href="#">PAGES</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="certificates.html" class="transition">CERTIFICATES</a></li>
                            <li><a href="projects.html" class="transition">PROJECTS</a></li>
                            <li><a href="gallery.html" class="transition">GALLERY</a></li>
                            <li><a href="promo-video.html" class="transition">PROMO VIDEO</a></li>
                            <li><a href="career.html" class="transition">CAREER</a></li>
                            <li><a href="elements.html" class="transition">ELEMENTS</a></li>
                            <li><a href="typography.html" class="transition">TYPOGRAPHY</a></li>
                            <li><a href="price-list.html" class="transition">PRICE LIST</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a href="#">SERVICES</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="services1.html" class="transition">CUSTOMIZATION</a></li>
                            <li><a href="services2.html" class="transition">RENOVATION</a></li>
                            <li><a href="services3.html" class="transition">ROOF SOLUTIONS</a></li>
                            <li><a href="services4.html" class="transition">KITCHEN REDESIGNING</a></li>
                            <li><a href="services5.html" class="transition">INTERIOR DESIGNS</a></li>
                            <li><a href="services6.html" class="transition">LANDSCAPE - GARDEN</a></li>
                            <li><a href="services7.html" class="transition">PARQUET FLOORS</a></li>
                        </ul>
                    </li>
                    <!--<li class="dropdown"> <a href="#">SHOP</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="item-list.html" class="transition">ITEM LIST</a></li>
                            <li><a href="item-list-sidebar.html" class="transition">ITEM LIST - SIDEBAR</a></li>
                            <li><a href="item-detail.html" class="transition">ITEM DETAIL</a></li>
                            <li><a href="item-detail-sidebar.html" class="transition">ITEM DETAIL - SIDEBAR</a></li>
                        </ul>
                    </li>-->
                    <li class="dropdown"> <a href="#">BLOG</a>
                        <ul class="dropdown-menu" role="menu">   <li><a href="blog.html" class="transition">BLOG LIST</a></li>
                            <li><a href="blog-sidebar.html" class="transition">BLOG LIST - SIDEBAR</a></li>
                            <li><a href="blog-single-page.html" class="transition">SINGLE PAGE</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.html" class="transition">CONTAT US</a></li>
                    <li class="side-menu">SIDE MENU<span></span><span class="spacing"></span><span></span></li>
                </ul>
                <!-- end navbar-nav -->
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container-->
    </nav>
    <!--- end nav -->
</header>
<!-- Modal -->
<div class="modal fade" id="register-box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Register now </h4>
            </div>
            <!-- end modal-header -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Client ID</label>
                        <?php
                        $db_result=$db->query("SELECT * FROM client")->result(); // Run your query
                        $count=$db->query("SELECT * FROM client")->count();
                        echo '<select name="Client ID" >'; // Open your drop down box
                        echo "<option value='client_id'>Select..</option>";
                        // Loop through the query results, outputing the options one by onefor
                        for ($i=0;$i<$count;$i++){
                            echo "<option value='client_id'>{$db_result[$i]->c_id}</option>";

                        }


                        echo '</select>';?>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <label>Your e-mail</label>
                        <input type="text" placeholder="E-mail" name="email">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <label>Your password</label>
                        <input type="password" placeholder="Pasword">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <label>Your password - Again</label>
                        <input type="password" placeholder="Pasword" name="pword">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <button type="submit">REGISTER</button>
                    </div>
                    <!-- end form-group -->
                </form>
            </div>
            <!-- end modal-body -->
        </div>
        <!-- end modal-content -->
    </div>
    <!-- end modal-dialog -->
</div>
<!-- end reg-modal -->

<div class="modal fade" id="login-box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Member Login</h4>
            </div>
            <!-- end modal-header -->
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Your e-mail</label>
                        <input type="text" placeholder="E-mail">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <label>Your password</label>
                        <input type="password" placeholder="Pasword">
                    </div>
                    <!-- end form-group -->
                    <div class="form-group"> <a href="#">I forget my password</a> </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <button type="submit">LOGIN</button>
                    </div>
                    <!-- end form-group -->
                </form>
            </div>
            <!-- end modal-body -->
        </div>
        <!-- end modal-content -->
    </div>
    <!-- end modal-dialog -->
</div>
<!-- end login-modal -->