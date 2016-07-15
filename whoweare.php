<?php
    include_once 'assets/php/common.php';
?>

<!doctype html>
<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE -->
    <title><?php echo $lang['WWA_PAGE_TITLE']; ?></title>

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Bianchi Cesaro Ciceri">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FAVICON  -->
    <link rel="icon" href="https://img.tim.it/sdr/icone/icon-ios.png">

    <!-- =========================
       STYLESHEETS
    ============================== -->

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="assets/css/icons/icons.min.css">

    <!-- GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:300,400,600,700%7COpen+Sans:300,400,600,700%7CHandlee" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.vertical-tabs.css">


    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- RESPONSIVE FIXES -->
<!--<link rel="stylesheet" href="assets/css/responsive.css"> -->

    <!-- COLOR STYLESHEET -->
    <!-- Change here the Main Color of the Site: Choose your favorite predefined color from assets/css/colors.css -->
<!--<link rel="stylesheet" href="assets/css/colors/red.css" title="red"> -->


    <!--[if lt IE 9]>
            <script src="assets/js/plugins/html5shiv.min.js"></script>
            <script src="assets/js/plugins/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="createBreadcrumb(null, 'wwa', '<?php echo $lang['BREAD_WWA']; ?>')">
    <!-- =========================
         HEADER
    ============================== -->
    <?php include 'header.php' ?>
    <!-- =========================
         /END HEADER
    ============================== -->
    <div class="main-wrapper clear-fix">
        <ol class="breadcrumb" id="bc">
        </ol>
        <div class="col-xs-12 col-md-5 wwa-left">
            <div class="wwa-left-content">
                <img src="assets/images/logo-wwa.png">
                <h2 style="color: white;"><?php echo $lang['WWA_INN']; ?></h2>
                <a href="#new" class="btn btn-primary scrollto" style="background-color: white; color: #014591;"><?php echo $lang['BTN_FINDOUT']; ?></a>
            </div>
        </div>
        <div class="col-xs-12 col-md-7" style="padding-left: 0px; padding-right: 0px;">
            <div class="col-xs-12 wwa-right-top">
                <div class="wwa-right-top-content">
                    <h2 style="color: white;"><?php echo $lang['WWA_PROJ']; ?></h2>
                    <a href="#proj" class="btn btn-primary scrollto" style="background-color: white; color: #014591;"><?php echo $lang['BTN_FINDOUT']; ?></a>
                </div>
            </div>
            <div class="col-xs-12 wwa-right-bot">
                <div class="wwa-right-bot-content">
                    <h2 style="color: white;"><?php echo $lang['WWA_TESTIMONIALS']; ?></h2>
                    <a href="#testimonials" class="btn btn-primary scrollto" style="background-color: white; color: #014591;"><?php echo $lang['BTN_FINDOUT']; ?></a>
                </div>
            </div>
        </div>
        <div id="new" class="col-xs-12 wwa_newtim">
            <div class="wwa_newtim_content">
                <h1 style="font: normal normal 40px 'Bold', Arial, sans-serif; font-size: 3vw"><?php echo $lang['WWA_NEW_TITLE']; ?></h1>
                <p><?php echo $lang['WWA_NEW_BODY']; ?></p>
            </div>
        </div>
        <div id="proj" class="col-xs-12" style="margin-top: 40px;">
            <div class="col-xs-12 col-md-6 box-projects">
                <img src="/assets/images/wwa_innovation.jpg">
                <h3><?php echo $lang['WWA_PROJ1_TITLE']; ?></h3>
                <p><?php echo $lang['WWA_PROJ1_DESC']; ?></p>
                <span class="btn btn-primary"><?php echo $lang['BTN_FINDOUT']; ?></span>
            </div>
            <div class="col-xs-12 col-md-6 box-projects">
                <img src="/assets/images/wwa_social.jpg">
                <h3><?php echo $lang['WWA_PROJ2_TITLE']; ?></h3>
                <p><?php echo $lang['WWA_PROJ2_DESC']; ?></p>
                <span class="btn btn-primary"><?php echo $lang['BTN_FINDOUT']; ?></span>
            </div>
            <div class="col-xs-12 col-md-6 box-projects">
                <img src="/assets/images/wwa_culture.jpg">
                <h3><?php echo $lang['WWA_PROJ3_TITLE']; ?></h3>
                <p><?php echo $lang['WWA_PROJ3_DESC']; ?></p>
                <span class="btn btn-primary"><?php echo $lang['BTN_FINDOUT']; ?></span>
            </div>
            <div class="col-xs-12 col-md-6 box-projects">
                <img src="/assets/images/wwa_sport.jpg">
                <h3><?php echo $lang['WWA_PROJ4_TITLE']; ?></h3>
                <p><?php echo $lang['WWA_PROJ4_DESC']; ?></p>
                <span class="btn btn-primary"><?php echo $lang['BTN_FINDOUT']; ?></span>
            </div>
        </div>
        <div id="testimonials" class="col-xs-12" style="margin-top: 40px;">
            <div class="col-xs-12 col-md-8" style="height: 350px; background: url('/assets/images/testimonials/berners-lee.jpg') no-repeat center top;">
                <div class="wwa_cont">
                    <h1 style="color: white"><font size="6vw"><?php echo $lang['BERNERS_LEE']; ?></font></h1>
                    <p style="color: white"><font size="4vw"><?php echo $lang['BERNERS_LEE_QUOTE']; ?></font></p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4" style="height: 350px;">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-rxy9lI8-7Q"></iframe>
                </div>
            </div>
            <div class="col-xs-12 col-md-8" style="height: 350px; background: url('/assets/images/testimonials/fabio-fazio.jpg') no-repeat center top;">
                <div class="wwa_cont">
                    <h1 style="color: white"><font size="6vw"><?php echo $lang['FAZIO']; ?></font></h1>
                    <p style="color: white"><font size="4vw"><?php echo $lang['FAZIO_QUOTE']; ?></font></p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4" style="height: 350px;">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eTz4o7NMGXg"></iframe>
                </div>
            </div>
            <div class="col-xs-12 col-md-8" style="height: 350px; background: url('/assets/images/testimonials/pif.jpg') no-repeat center top;">
                <div class="wwa_cont">
                    <h1 style="color: white"><font size="6vw"><?php echo $lang['PIF']; ?></font></h1>
                    <p style="color: white"><font size="4vw"><?php echo $lang['PIF_QUOTE']; ?></font></p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4" style="height: 350px; margin-bottom: 20px;">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5hHXbK9Dpyc"></iframe>
                </div>
            </div>
        </div>
    </div><!-- /End Main Wrapper -->
    <!-- ==================================================
        FOOTER
    ======================================================= -->
    <?php include 'footer.php' ?>

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
