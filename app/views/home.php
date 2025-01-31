<?php
require __DIR__ . '../../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

$base_url = $_ENV['BASE_URL'];

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
    <title>Robert - Portfolio</title>

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
            <div class="contacts d-none d-md-block">
                <div class="contact-item">
                    +96 56-85-1379
                </div>
                <div class="contact-item spacer">
                    /
                </div>
                <div class="contact-item">
                    <a href=""><span>[email&#160;protected]</span></a>
                </div>
            </div>
        </header>
        <div class="copy-bottom white boxed">© Robert 2019.</div>
        <div class="social-list social-list-bottom boxed">
            <a href="#" class="icon ion-social-twitter"></a>
            <a href="#" class="icon ion-social-facebook"></a>
            <a href="#" class="icon ion-social-googleplus"></a>
            <a href="#" class="icon ion-social-linkedin"></a>
            <a href="#" class="icon ion-social-dribbble-outline"></a>
        </div>

        <div class="pagepiling">
            <div data-anchor="page1" class="pp-scrollable text-white section section-1">
                <div class="scroll-wrap">
                    <div class="section-bg" style="background-image:url(<?php echo $base_url; ?>/public/assets/images/bg/main.jpg);"></div>
                    <div class="scrollable-content">
                        <div class="vertical-centred">
                            <div class="boxed boxed-inner">
                                <div class="vertical-title d-none d-lg-block"><span>Welcome</span></div>
                                <div class="boxed">
                                    <div class="container">
                                        <div class="intro">
                                            <div class="row">
                                                <div class="col-md-8 col-lg-6">
                                                    <p class="subtitle-top">Welcome To<br>Robert Design Studio</p>
                                                    <h1 class="display-2 text-white"><span
                                                            class="text-primary">Hello</span> I am<br> Robert.</h1>
                                                    <a href="https://www.youtube.com/watch?v=0O2aH4XLbto"
                                                        class="popup-youtube icon ion-ios-play"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-anchor="page2" class="pp-scrollable section section-2">
                <div class="scroll-wrap">
                    <div class="scrollable-content">
                        <div class="vertical-centred">
                            <div class="boxed boxed-inner">
                                <div class="vertical-title text-white  d-none d-lg-block"><span>what I do</span></div>
                                <div class="boxed">
                                    <div class="container">
                                        <div class="intro">
                                            <div class="row align-items-center">
                                                <div class="col-xl-7">
                                                    <div class="experience-box pb-5">
                                                        <div class="experience-content">
                                                            <div class="experience-number text-texture">4</div><br
                                                                class="d-block d-sm-none">
                                                            <div class="experience-info">Years<br>Experience<br>Working
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <h2 class="title-uppercase"> <span class="text-primary">the
                                                            best</span> Websites around</h2>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    Accusantium dicta sit pariatur odio unde deleniti eveniet magni cum,
                                                    ad iure, vel nisi minima vero voluptates.
                                                    <div class="progress-bars">
                                                        <div class="clearfix">
                                                            <div class="number float-left">Development</div>
                                                            <div class="number float-right">80%</div>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 80%" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="clearfix">
                                                            <div class="number float-left">WordPress</div>
                                                            <div class="number float-right">70%</div>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar"
                                                                style="width: 70%" aria-valuenow="25" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-anchor="page3" class="pp-scrollable text-white section section-3">
                <div class="scroll-wrap">
                    <div class="section-bg" style="background-image:url(<?php echo $base_url; ?>/public/assets/images/bg/resume.jpg);"></div>
                    <div class="scrollable-content">
                        <div class="vertical-centred">
                            <div class="boxed boxed-inner">
                                <div class="vertical-title d-none d-lg-block"><span>Resume</span></div>
                                <div class="boxed">
                                    <div class="container">
                                        <div class="intro">
                                            <div class="row row-resume">
                                                <div class="col-md-6">
                                                    <div class="col-resume">
                                                        <h4 class="title-uppercase">Education</h4>
                                                        <div class="resume-content">
                                                            <div class="resume-inner">
                                                                <div class="resume-row">
                                                                    <h6 class="resume-type">Specialization course</h6>
                                                                    <p class="resume-study">University of studies,
                                                                        Poland, Cracow</p>
                                                                    <p class="resume-date text-primary">Jan 2004 - Dec
                                                                        2006</p>
                                                                    <p class="resume-text">Lorem ipsum dolor sit amet,
                                                                        consectetur adipisicing elit. Minus nobis animi
                                                                        assumenda sint recusandae! Dolor placeat debitis
                                                                        animi illum quo repellendus pariatur, enim
                                                                        doloribus, </p>
                                                                </div>
                                                                <div class="resume-row">
                                                                    <h6 class="resume-type">Specialization course</h6>
                                                                    <p class="resume-study">University of studies,
                                                                        Poland, Cracow</p>
                                                                    <p class="resume-date text-primary">Jan 2004 - Dec
                                                                        2006</p>
                                                                    <p class="resume-text">Lorem ipsum dolor sit amet,
                                                                        consectetur adipisicing elit. Minus nobis animi
                                                                        assumenda sint recusandae! Dolor placeat debitis
                                                                        animi illum quo repellendus pariatur, enim
                                                                        doloribus</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-resume">
                                                        <h4 class="title-uppercase">Experience</h4>
                                                        <div class="resume-content">
                                                            <div class="resume-inner">
                                                                <div class="resume-row">
                                                                    <h6 class="resume-type">Webdesigner & Front-end</h6>
                                                                    <p class="resume-study">University of studies,
                                                                        Poland, Cracow</p>
                                                                    <p class="resume-date text-primary">Jan 2004 - Dec
                                                                        2006</p>
                                                                    <p class="resume-text">Lorem ipsum dolor sit amet,
                                                                        consectetur adipisicing elit. Minus nobis animi
                                                                        assumenda sint recusandae! Dolor placeat debitis
                                                                        animi illum quo repellendus pariatur, enim
                                                                        doloribus, deleniti!</p>
                                                                </div>
                                                                <div class="resume-row">
                                                                    <h6 class="resume-type">WordPress Developer</h6>
                                                                    <p class="resume-study">University of studies,
                                                                        Poland, Cracow</p>
                                                                    <p class="resume-date text-primary">Jan 2004 - Dec
                                                                        2006</p>
                                                                    <p class="resume-text">Lorem ipsum dolor sit amet,
                                                                        consectetur adipisicing elit. Minus nobis animi
                                                                        assumenda sint recusandae! Dolor placeat debitis
                                                                        animi illum quo repellendus pariatur, enim
                                                                        doloribus, deleniti!!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-anchor="page5" class="pp-scrollable text-white section section-5">
                <div class="scroll-wrap">
                    <div class="bg-changer">
                        <div class="section-bg" style="background-image:url(<?php echo $base_url; ?>/public/assets/images/bg/project1.jpg);"></div>
                        <div class="section-bg" style="background-image:url(<?php echo $base_url; ?>/public/assets/images/bg/project2.jpg);"></div>
                        <div class="section-bg" style="background-image:url(<?php echo $base_url; ?>/public/assets/images/bg/project3.jpg);"></div>
                        <div class="section-bg" style="background-image:url(<?php echo $base_url; ?>/public/assets/images/bg/project4.jpg);"></div>
                        <div class="section-bg" style="background-image:url(<?php echo $base_url; ?>/public/assets/images/bg/project5.jpg);"></div>
                    </div>
                    <div class="scrollable-content">
                        <div class="vertical-centred">
                            <div class="boxed boxed-inner">
                                <div class="vertical-title  d-none d-lg-block"><span>my works</span></div>
                                <div class="boxed">
                                    <div class="container">
                                        <div class="intro">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h2 class="title-uppercase text-white">LATEST PROJECTS</h2>
                                                    <div class="row-project-box row">
                                                        <div class="col-project-box col-sm-6 col-md-4 col-lg-4">
                                                            <a href="project-detail.html" class="project-box">
                                                                <div class="project-box-inner">
                                                                    <h5>Boranito<br>Skat</h5>
                                                                    <div class="project-category">House Design</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-project-box col-sm-6 col-md-4 col-lg-4">
                                                            <a href="project-detail.html" class="project-box">
                                                                <div class="project-box-inner">
                                                                    <h5>White<br>Bottle</h5>
                                                                    <div class="project-category">2018 / BRANDING</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-project-box col-sm-6 col-md-4 col-lg-4">
                                                            <a href="project-detail.html" class="project-box">
                                                                <div class="project-box-inner">
                                                                    <h5>ICO Bottle<br> Opener</h5>
                                                                    <div class="project-category">2017 / INTERACTION
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-project-box col-sm-6 col-md-4 col-lg-4">
                                                            <a href="project-detail.html" class="project-box">
                                                                <div class="project-box-inner">
                                                                    <h5>Rennovate<br> Toilet</h5>
                                                                    <div class="project-category">2018 / BRANDING</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-project-box col-sm-6 col-md-4 col-lg-4">
                                                            <a href="project-detail.html" class="project-box">
                                                                <div class="project-box-inner">
                                                                    <h5>Bauhaus<br> studio</h5>
                                                                    <div class="project-category">2017 / INTERACTION
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="h5 link-arrow text-white">view all projects <i
                                                            class="icon icon-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-anchor="page6" class="pp-scrollable text-white section section-6">
                <div class="scroll-wrap">
                    <div class="section-bg" style="background-image:url(<?php echo $base_url; ?>/public/assets/images/bg/reviews.jpg);"></div>
                    <div class="scrollable-content">
                        <div class="vertical-centred">
                            <div class="boxed boxed-inner">
                                <div class="vertical-title  d-none d-lg-block"><span>testimonials</span></div>
                                <div class="boxed">
                                    <div class="container">
                                        <div class="intro">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <span class="icon-quote ion-quote"></span>
                                                    <div class="review-carousel owl-carousel">
                                                        <div class="review-carousel-item">
                                                            <div class="text">
                                                                <p>“ If you are seeking an Interior designer that will
                                                                    understand exactly your needs, and someone who will
                                                                    utilise their creative and technical skills in
                                                                    parity with your taste, then Suzanne at The Robert
                                                                    Studio is perfect.</p>
                                                            </div>
                                                            <div class="review-author">
                                                                <div class="author-name">David & Elisa</div>
                                                                <i>Apartment view lake at Brooklyn</i>
                                                            </div>
                                                        </div>
                                                        <div class="review-carousel-item">
                                                            <div class="text">
                                                                <p>“Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit. Ducimus doloremque maxime tempora, quia
                                                                    architecto iure ipsum ipsa, corporis placeat.</p>
                                                            </div>
                                                            <div class="review-author">
                                                                <div class="author-name">Amanda</div>
                                                                <i>Apartment view lake at Brooklyn</i>
                                                            </div>
                                                        </div>
                                                        <div class="review-carousel-item">
                                                            <div class="text">
                                                                <p>“ If you are seeking an Interior designer that will
                                                                    understand exactly your needs, and someone who will
                                                                    utilise their creative and technical skills in
                                                                    parity with your taste, then Suzanne at The Robert
                                                                    Studio is perfect.</p>
                                                            </div>
                                                            <div class="review-author">
                                                                <div class="author-name">John</div>
                                                                <i>Apartment view lake at Brooklyn</i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-anchor="page7" class="pp-scrollable section section-7">
                <div class="scroll-wrap">
                    <div class="section-bg" style="background-image:url(<?php echo $base_url; ?>/public/assets/images/bg/contact.jpg);"></div>
                    <div class="scrollable-content">
                        <div class="vertical-centred">
                            <div class="boxed boxed-inner">
                                <div class="vertical-title text-white d-none d-lg-block"><span>contact</span></div>
                                <div class="boxed">
                                    <div class="container">
                                        <div class="intro overflow-hidden">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h2 class="title-uppercase"><span class="text-primary">NEW
                                                            YORK</span>,USA</h2>
                                                    <h5 class="text-muted">166 Main Street, Beverly Hills, CA 90210</h5>
                                                    <section class="contact-address">
                                                        <h3><a class="mail"
                                                                href="http://paul-themes.com/cdn-cgi/l/email-protection#41222e2f3520223501332e232433356f222e2c">
                                                                <span class="__cf_email__"
                                                                    data-cfemail="10737f7e6471736450627f727562643e737f7d">[email&#160;protected]</span></a>
                                                        </h3>
                                                        <h3><span class="phone">+96 56-85-1379</span></h3>
                                                    </section>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="contact-info">
                                                        <form class="js-form" novalidate="novalidate">
                                                            <div class="row">
                                                                <div class="form-group col-sm-6">
                                                                    <input type="text" name="name" required=""
                                                                        placeholder="Name*" aria-required="true">
                                                                </div>
                                                                <div class="form-group col-sm-6">
                                                                    <input type="email" required="" name="email"
                                                                        placeholder="Email*">
                                                                </div>
                                                                <div class="form-group col-sm-12">
                                                                    <input type="text" name="subject"
                                                                        placeholder="Subject (Optinal)">
                                                                </div>
                                                                <div class="form-group col-sm-12">
                                                                    <textarea name="message" required=""
                                                                        placeholder="Message*"></textarea>
                                                                </div>
                                                                <div class="form-group form-group-message col-sm-12">
                                                                    <span id="success" class="text-primary">Thank You,
                                                                        your message is successfully sent!</span>
                                                                    <span id="error" class="text-primary">Sorry,
                                                                        something went wrong </span>
                                                                </div>
                                                                <div class="col-sm-12"><button type="submit"
                                                                        class="btn">Contact me</button></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    </div>
</body>