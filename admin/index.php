<?php
session_start();

$base_url = "http://localhost:8888/mollanative";

if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    session_destroy();
    header("Location:login/");
    exit();
}

if (!isset($_SESSION['user_name'])) {
    header('location:login/');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="<?php echo $base_url; ?>/public/assets/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo $base_url; ?>/public/assets/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $base_url; ?>/public/assets/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $base_url; ?>/public/assets/apple-touch-icon-114x114.png">
    <title>Admin | Robert - Portfolio</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400i&amp;display=swap" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/public/assets/css/style.css" rel="stylesheet" media="screen">
</head>

<body>
    <div class="animsition">
        <div class="loader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>

        <div class="click-capture"></div>

        <div class="menu">
            <span class="close-menu icon-cross2 right-boxed"></span>
            <ul class="menu-list right-boxed">
                <li data-menuanchor="page1">
                    <a href="#page1">Home</a>
                </li>
                <li data-menuanchor="page2">
                    <a href="#page2">About</a>
                </li>
                <li data-menuanchor="page3">
                    <a href="#page3">Resume</a>
                </li>
                <li data-menuanchor="page4">
                    <a href="#page4">Clients</a>
                </li>
                <li data-menuanchor="page5">
                    <a href="#page5">Projects</a>
                </li>
                <li data-menuanchor="page6">
                    <a href="#page6">Testimonials</a>
                </li>
                <li data-menuanchor="page7">
                    <a href="#page7">Contact</a>
                </li>
                <li data-menuanchor="logout">
                    <a href="<?php echo $base_url; ?>/admin/index.php?logout=true">Logout</a>
                </li>
            </ul>
            <div class="menu-footer right-boxed">
                <div class="social-list">
                    <a href="#" class="icon ion-social-twitter"></a>
                    <a href="#" class="icon ion-social-facebook"></a>
                    <a href="#" class="icon ion-social-googleplus"></a>
                    <a href="#" class="icon ion-social-linkedin"></a>
                    <a href="#" class="icon ion-social-dribbble-outline"></a>
                </div>
                <div class="copy"><a href="templateshub.net">Templates Hub</a></div>
            </div>
        </div>

        <header class="navbar boxed">
            <div class="navbar-bg"></div>
            <a class="brand" href="#">
                <img class="brand-img" alt="" src="<?php echo $base_url; ?>/public/assets/images/brand.png">
                <div class="brand-info">
                    <div class="brand-name">Robert</div>
                    <div class="brand-text">personal</div>
                </div>
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"
                aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </header>
        <div class="copy-bottom white boxed">© Robert <?= date('Y'); ?>.</div>
        <div class="social-list social-list-bottom boxed">
            <a href="#" class="icon ion-social-twitter"></a>
            <a href="#" class="icon ion-social-facebook"></a>
            <a href="#" class="icon ion-social-googleplus"></a>
            <a href="#" class="icon ion-social-linkedin"></a>
            <a href="#" class="icon ion-social-dribbble-outline"></a>
        </div>

        <div data-anchor="page1" class="pp-scrollable text-white section section-1">
            <div class="scroll-wrap">
                <div class="section-bg" style="background-image:url(<?php echo $base_url; ?>/public/assets/banner.jpg);"></div>
            </div>
        </div>
    </div>

    <script src="<?php echo $base_url; ?>/public/assets/js/jquery.min.js"></script>
    <script src="<?php echo $base_url; ?>/public/assets/js/wow.min.js"></script>
    <script src="<?php echo $base_url; ?>/public/assets/js/smoothscroll.js"></script>
    <script src="<?php echo $base_url; ?>/public/assets/js/animsition.js"></script>
    <script src="<?php echo $base_url; ?>/public/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo $base_url; ?>/public/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $base_url; ?>/public/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo $base_url; ?>/public/assets/js/jquery.pagepiling.min.js"></script>

    <script src="<?php echo $base_url; ?>/public/assets/js/scripts.js"></script>
</body>