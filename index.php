<?php
    include_once 'assets/php/common.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE -->
    <title><?php echo $lang['PAGE_TITLE']; ?></title>

    <meta name="description" content="Responsive Landing Page for Presenting Your Startup: Saas, Mobile or Web Application" />
    <meta name="keywords" content="exlab, exlabsolutions, startup, research, responsive, app landing, html template, mobile application, responsive landing page" />
    <meta name="author" content="ExLab">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FAVICON  -->
    <link rel="icon" href="assets/images/favicon/favicon.ico">

    <!-- =========================
       STYLESHEETS
    ============================== -->

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="assets/css/icons/icons.min.css">

    <!-- GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600,700%7COpen+Sans:300,400,600,700%7CHandlee" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">

    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- COLORE STYLESHEET -->
    <!-- Change here the Main Color of the Site: Choose your favorite predefined color from assets/css/colors.css -->
    <link rel="stylesheet" href="assets/css/colors/red.css" title="red">


    <!--[if lt IE 9]>
            <script src="assets/js/plugins/html5shiv.min.js"></script>
            <script src="assets/js/plugins/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="main-wrapper">

        <!-- =========================
             PRELOADER
        ============================== -->
        <div class="preloader">
            <div class="loader-container">
                <div class="text-logo">ExLab</div>
                <div class="signal"></div>
            </div>
        </div>


        <!-- =========================
             HEADER
        ============================== -->
        <header class="header type" id="top" data-stellar-background-ratio="0.5">
            <!-- Background Overlay -->
            <div class="overlay">

                <!-- =========================================
                     Navigation
                ========================================== -->
                <nav class="navbar navbar-fixed-top" role="navigation">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Navbar-Header -->
                                <div class="navbar-header">

                                    <!-- Mobile Menu -->
                                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                        <i class="icon icon_menu"></i>
                                    </button>

                                    <!-- Text-Logo
                                    <a href="#top" class="navbar-brand scrollto" title="ExLab">
                                        <span class="text-logo">ExLab</span>
                                    </a>  -->

                                    <!-- Image-Logo -->

                                    <a href="#top" class="navbar-brand img-logo scrollto" title="ExLab">
                                        <img src="assets/images/logo.png" alt="Logo">
                                    </a>
                                </div><!-- /End Navbar-Header -->

                                <!-- Navbar-Collapse -->
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <!-- Menu Items -->
                                        <li><a href="#about" title="" class="scrollto"><?php echo $lang['NAV_ABOUT']; ?></a></li>
                                        <li><a href="#features" title="" class="scrollto"><?php echo $lang['NAV_FEATURES']; ?></a></li>
                                        <li><a href="#testimonials" title="" class="scrollto"><?php echo $lang['NAV_QUOTES']; ?></a></li>
                                        <li><a href="#team" title="" class="scrollto"><?php echo $lang['NAV_TEAM']; ?></a></li>
                                        <!-- Login and Signup Modal on click -->
                                        <li><a class="btn btn-nav" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();"><?php echo $lang['NAV_LOGIN']; ?></a></li>
                                        <li><a class="btn btn-nav btn-signup" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();"><?php echo $lang['NAV_REGISTER']; ?></a></li>
                                    </ul>
                                </div><!-- /End Navbar-Collapse -->
                            </div><!-- /End Col -->
                        </div><!-- /End Row -->
                    </div><!-- /End Container -->
                    <div class="col-md-1 navbar-lang">
                        <a href="?lang=ita">
                            <img src="assets/images/ita.png">
                        </a>
                        <a href="?lang=en">
                            <img src="assets/images/en.png">
                        </a>
                    </div>
                </nav><!-- /End Sticky Navigation -->


                <!-- =========================================
                     Login/Signup Bootstrap Modal
                ==========================================  -->
                <div class="modal fade login" id="loginModal">
                    <div class="modal-dialog">
                    </div><!-- /End Modal Dialog -->
                </div><!-- /End Modal -->


                <!-- =========================================
                     Hero-Section
                ========================================== -->
                <div class="container vmiddle">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="hero-section">

                                <!-- Welcome - Hero Message -->
                                <h1 class="text-white"><?php echo $lang['HERO_DESC1']; ?> <span data-typer-targets="<?php echo $lang['HERO_TEXT']; ?>"></span> </h1>
                                <p class="text-white"><?php echo $lang['HERO_DESC2']; ?></p>

                                <!-- Learn More & Register Buttons -->
                                <div class="btn-box">
                                    <a href="#about" class="btn btn-white scrollto"><?php echo $lang['LEARN_MORE']; ?></a>
                                    <!-- Register on Click -->
                                    <a class="btn btn-color" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();"><?php echo $lang['NAV_REGISTER']; ?></a>
                                </div>

                            </div><!-- /End Intro-Section -->
                        </div><!-- /End Col -->
                    </div><!-- /End Row -->
                </div><!-- /End Container Hero-Section -->


            </dv><!-- /End Background Overlay -->
        </header>
        <!-- =========================
             /END HEADER
        ============================== -->

        <!-- ==================================================
             SECTION ABOUT - IMAGE RIGHT AND TEXT WITH CALL TO ACTION
        ======================================================= -->
        <section class="img-with-action light-bg">
            <div class="container wrapper-lg">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <!-- Text Col -->
                        <h3><?php echo $lang['HOWITWORKS_TITLE']; ?></h3>
                        <p><?php echo $lang['HOWITWORKS_DESC']; ?></p>
                        <!-- Call To Action Buttons -->
                        <div class="btn-box">
                            <a href="#features" class="btn btn-grey scrollto"><?php echo $lang['HOWITWORKS_BTN']; ?></a>
                            <a class="btn btn-color" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();"><?php echo $lang['NAV_REGISTER']; ?></a>
                        </div>
                        <!-- Div Required for Correct Charts Animation -->
                        <div class="start-charts"></div>
                    </div>
                </div><!-- /End Row-->
            </div><!-- /End Container-->
            <!-- Image Col -->
            <div class="hidden-sm hidden-xs col-md-6 img-col-bg img-right"></div>
        </section>
        <!-- =============================
             /END SECTION
        ============================== -->

        <!-- =================================
             SECTION ABOUT 2 - INTRO FEATURES
        ====================================== -->
        <section class="intro-features" id="about">
            <div class="container">
                <!-- Padding -->
                <div class="wrapper-lg">
                    <div class="row">
                        <!-- Section Header Title -->
                        <div class="col-xs-12">
                            <h2><?php echo $lang['INTRO_TITLE']; ?></h2>
                            <p class="large"><?php echo $lang['INTRO_SUBTITLE']; ?></p>
                        </div>
                    </div>
                    <!-- Three Main Features with Icons -->
                    <div class="row">
                        <div class="col-sm-4 intro-content">
                            <div class="icon-lg">
                                <i class="icon icon_genius"></i>
                            </div>
                            <h4><?php echo $lang['INTRO_FEAT1']; ?></h4>
                            <p><?php echo $lang['INTRO_DESC1']; ?></p>
                        </div>
                        <div class="col-sm-4 intro-content">
                            <div class="icon-lg">
                                <i class="icon icon_globe"></i>
                            </div>
                            <h4><?php echo $lang['INTRO_FEAT2']; ?></h4>
                            <p><?php echo $lang['INTRO_DESC2']; ?></p>
                        </div>
                        <div class="col-sm-4 intro-content">
                            <div class="icon-lg">
                                <i class="icon icon-key"></i>
                            </div>
                            <h4><?php echo $lang['INTRO_FEAT3']; ?></h4>
                            <p><?php echo $lang['INTRO_DESC3']; ?></p>
                        </div>
                    </div><!-- /End Row -->
                </div><!-- /End Wrapper -->
            </div><!-- /End Container -->
        </section>
        <!-- =============================
             /END INTRO FEATURES
        ============================== -->

        <!-- ==================================================
            FEATURES SECTION
        ======================================================= -->

        <section class="tab-features color-bg" id="features">
            <div class="container">
                <div class="features-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-white"><?php echo $lang['FEATURE_TITLE']; ?></h2>
                            <p class="large text-white"><?php echo $lang['FEATURE_SUB']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <!-- Features Tab -->
                    <div class="tabs features tab-container">
                        <ul class="etabs">
                            <!-- Feature Icon -->
                            <li class="tab">
                                    <a href="#tab-feature-1">
                                        <div class="icon-sm">
                                            <i class="icon icon_bag"></i>
                                        </div>
                                        <h5 class="text-white"><?php echo $lang['FEATURE1_SUB']; ?></h5>
                                    </a>
                            </li>
                            <!-- Feature Icon -->
                            <li class="tab">
                                    <a href="#tab-feature-2">
                                        <div class="icon-sm">
                                            <i class="icon icon-gears"></i>
                                        </div>
                                        <h5 class="text-white"><?php echo $lang['FEATURE2_SUB']; ?></h5>
                                    </a>
                            </li>
                            <!-- Feature Icon -->
                            <li class="tab">
                                    <a href="#tab-feature-3">
                                        <div class="icon-sm">
                                            <i class="icon icon-streetsign"></i>
                                        </div>
                                        <h5 class="text-white"><?php echo $lang['FEATURE3_SUB']; ?></h5>
                                    </a>
                            </li>
                        </ul><!-- /End Etabs -->

                        <div class="panel-container">

                            <div class="tab-content" id="tab-feature-1">
                                <div class="container">
                                    <div class="row">
                                        <!-- Feature Description 2cols Text-Left with Buttons -->
                                        <div class="col-md-5 col-sm-6">
                                            <h4><?php echo $lang['FEATURE1_TITLE']; ?></h4>
                                            <p><?php echo $lang['FEATURE1_DESC']; ?></p>
                                        </div>
                                        <!-- Image-right -->
                                        <div class="col-md-7 col-sm-6 hidden-xs wow fadeInRight" data-wow-duration="2s">
                                            <img src="assets/images/features/feature1.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /End Tab-content -->

                            <div class="tab-content" id="tab-feature-2">
                                <div class="container">
                                    <div class="row">
                                        <!-- Feature Description 2cols Text-Right with Icons -->
                                        <div class="col-xs-12 col-sm-6 col-sm-push-6 col-lg-7 col-lg-push-5">
                                            <h4><?php echo $lang['FEATURE2_TITLE']; ?></h4>
                                            <p><?php echo $lang['FEATURE2_DESC']; ?></p>
                                        </div>
                                        <!-- Image-Left -->
                                        <div class="col-md-7 col-sm-6 hidden-xs wow fadeInLeft" data-wow-duration="2s">
                                            <img src="assets/images/features/feature2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- / End Tab-content -->

                            <div class="tab-content" id="tab-feature-3">
                                <div class="container">
                                    <div class="row">
                                        <!-- Feature Description 2cols Text-Left -->
                                        <div class="col-md-5 col-sm-6">
                                            <h4><?php echo $lang['FEATURE3_TITLE']; ?></h4>
                                            <p><?php echo $lang['FEATURE3_DESC']; ?></p>
                                        </div>
                                        <!-- Image-Right -->
                                        <div class="col-md-7 col-sm-6 hidden-xs wow fadeInRight" data-wow-duration="2s">
                                            <img src="assets/images/features/feature3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /End Tab-content -->

                        </div><!-- / End Panel-Container -->
                    </div><!-- / End Tabs -->
                </div><!-- /End Col -->
            </div><!-- /End Row -->
        </section>
        <!-- =============================
             /END FEATURES TAB
        ============================== -->



        <!-- =======================================================
             TESTIMONIALS WITH PRESS/CLIENTS LOGOS
        ============================================================ -->
        <section class="testimonial-press light-bg" id="testimonials">
            <div class="container vmiddle">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo $lang['PRESS_TITLE']; ?></h2>
                        <p class="large"><?php echo $lang['PRESS_DESC']; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="tabs testimonials tab-container">
                        <div class="col-md-8">
                            <div class="panel-container">
                                <div class="tab-block" id="tab-testimonials-1">
                                    <blockquote>
                                        <!-- Testimonial quote -->
                                        <p>Il mondo della ricerca ha bisogno di trasferire la sua conoscenza sul mercato. Il team ha quindi sviluppato un modo per connettere queste due realtà: un collegamento tra aziende e ricerca attraverso una piattaforma web in cui confluiscono tutti i problemi che le aziende propongono, “girati” poi ai centri di ricerca collegati.</p>
                                    </blockquote>
                                    <a href="http://www.larena.it/territori/valpolicella/pescantina/porsche-premia-due-veronesi-1.3204477#scroll=1878"><?php echo $lang['PRESS_READ']; ?></a>
                                </div><!-- /End Tab-block -->

                                <!-- Other articles... -->

                            </div><!-- /End Panel-container -->
                        </div><!-- /End Col -->

                        <ul class="etabs col-md-4 list-unstyled">
                            <li class="tab col-md-6">
                                <a href="#tab-testimonials-1">
                                    <!-- Testimonial logo -->
                                    <img src="assets/images/press-logos/press-1.png" alt="">
                                </a>
                            </li>

                            <!-- Other logos... -->

                        </ul><!-- /End Etabs -->

                    </div><!-- /End Tabs -->
                </div><!-- /End Row -->
            </div><!-- /End Container -->
        </section>
        <!-- =============================
             /END TESTIMONIALS
        ============================== -->


        <!-- ==================================================
            TEAM
        ======================================================= -->
        <section class="team" id="team">
            <div class="container">
                <div class="wrapper-lg">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php echo $lang['TEAM_TITLE']; ?></h2>
                            <p class="large"><?php echo $lang['TEAM_SUB']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Team Box -->
                        <div class="col-sm-4 team-box">
                            <div class="team-img">
                                <img src="assets/images/team-placeholder-gabri.jpg" class="img-responsive" alt="">
                                <div class="img-overlay">
                                    <div class="img-icons">
                                        <span class="icon-white">
                                            <a href="https://www.facebook.com/profile.php?id=100004210239868&fref=ts">
                                                <i class="icon icon-facebook"></i>
                                            </a>
                                        </span>
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-twitter"></i>
                                            </a>
                                        </span>
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-linkedin"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <h4>Gabriele Garofalo</h4>
                            <p class="team-bio"><span class="text-color"><?php echo $lang['TEAM_DESC1a']; ?></span> <?php echo $lang['TEAM_DESC1b']; ?></p>
                        </div>
                        <!-- Team Box -->
                        <div class="col-sm-4 team-box">
                            <div class="team-img">
                                <img src="assets/images/team-placeholder-giova.jpg" class="img-responsive" alt="">
                                <div class="img-overlay">
                                    <div class="img-icons">
                                        <span class="icon-white">
                                            <a href="https://www.facebook.com/giovanni.fontana.564">
                                                <i class="icon icon-facebook"></i>
                                            </a>
                                        </span>
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-twitter"></i>
                                            </a>
                                        </span>
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-linkedin"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <h4>Giovanni Fontana</h4>
                            <p class="team-bio"><span class="text-color"><?php echo $lang['TEAM_DESC2a']; ?></span> <?php echo $lang['TEAM_DESC2b']; ?></p>
                        </div>
                        <!-- Team Box -->
                        <div class="col-sm-4 team-box">
                            <div class="team-img">
                                <img src="assets/images/team-placeholder-mattia.jpg" class="img-responsive" alt="">
                                <div class="img-overlay">
                                    <div class="img-icons">
                                        <span class="icon-white">
                                            <a href="https://www.facebook.com/Matthew.White8">
                                                <i class="icon icon-facebook"></i>
                                            </a>
                                        </span>
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-twitter"></i>
                                            </a>
                                        </span>
                                        <span class="icon-white">
                                            <a href="#">
                                                <i class="icon icon-linkedin"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <h4>Mattia Bianchi</h4>
                            <p class="team-bio"><span class="text-color"><?php echo $lang['TEAM_DESC3a']; ?></span> <?php echo $lang['TEAM_DESC3b']; ?></p>
                        </div>
                    </div><!-- /End Row -->
                </div><!-- End Wrapper -->
            </div><!--/End Container -->
        </section>
        <!-- =============================
             /END TEAM SECTION
        ============================== -->



        <!-- ==================================================
            FOOTER
        ======================================================= -->
        <footer class="footer dark-bg" id="footer">
            <div class="container">
                <div class="wrapper-sm">
                    <div class="row">
                        <!-- Footer Left Col -->
                        <div class="col-md-6">
                                <!-- Logo -->
                                <div class="container">
                                    <a href="#top" class="navbar-brand img-logo scrollto" title="ExLab">
                                        <img src="assets/images/logo.png" alt="Logo">
                                    </a>
                                </div>
                                <p class="footer-hero"><?php echo $lang['FOOTER_DESC1']; ?></p>
                                <p class="footer-cta"><?php echo $lang['FOOTER_DESC2']; ?>
                                    <a class="btn btn-color" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();"><?php echo $lang['NAV_REGISTER']; ?></a>
                                </p>
                        </div>
                        <!-- Footer Social Col -->
                        <div class="col-md-3">
                            <div class="table">
                                <div class="table-row">
                                    <div class="table-cell follow">
                                        <h5 class="text-white"><?php echo $lang['FOOTER_FOLLOW']; ?></h5>
                                    </div>
                                    <div class="table-cell">
                                        <ul class="social-list">
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-twitter"></i>
                                                </a>
                                            </li>
                                            <br>
                                            <br>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-googleplus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon icon-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- /End Table-Cell -->
                                </div><!-- /End Table-Row -->
                            </div><!-- /End Table -->
                        </div><!-- /End Col -->
                        <!-- Footer Contact Col -->
                        <div class="col-md-3">
                            <h5 class="text-white"><?php echo $lang['FOOTER_CONTACTS']; ?></h5>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="icon icon_mail"></i>
                                </div>
                                <div class="contact-content">
                                    <a href="mailto:hi@themedept.com"><?php echo $lang['FOOTER_EMAIL']; ?></a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="icon icon_pin"></i>
                                </div>
                                <div class="contact-content">
                                    <?php echo $lang['FOOTER_ADDRESS']; ?>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="icon icon_phone"></i>
                                </div>
                                <div class="contact-content">
                                    <?php echo $lang['FOOTER_PHONE']; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Menu and Copy -->
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="footer-nav">
                                    <li>
                                        <a href="help.php">Help</a>
                                    </li>
                                    <li>
                                        <a href="terms.php">Terms</a>
                                    </li>
                                    <li>
                                        <a href="privacy.php">Privacy</a>
                                    </li>
                                </ul>
                                <p class="footer-copy">&copy; 2016 - ExLab.</p>
                            </div>
                        </div>

                    </div><!-- End Row -->
                </div><!-- /End Wrapper -->
            </div><!-- /End Container -->
        </footer>

    </div><!-- /End Main Wrapper -->

    <!-- =========================
         SCRIPTS
    ============================== -->
    <script src="assets/js/plugins/jquery1.11.0.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/jquery.easing.1.3.min.js"></script>
    <script src="assets/js/plugins/modernizr.custom.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="assets/js/plugins/twitter/tweetie.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>



</body>
</html>
