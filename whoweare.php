<?php
    include_once 'assets/php/common.php';
?>

<!doctype html>
<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE -->
    <title><?php echo $lang['ASS_PAGE_TITLE']; ?></title>

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
                <a id="wwa-inn" href="#new" class="btn btn-primary scrollto" style="background-color: white; color: #014591;"><?php echo $lang['BTN_FINDOUT']; ?></a>
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
        <div id="new" class="col-md-12" style="height: 600px;">
            QUI NUOVA TIM
        </div>
        <div id="proj" class="col-md-12" style="height: 600px;">
            QUI PROGETTI
        </div>
        <div id="testimonials" class="col-md-12" style="height: 600px;">
            QUI TESTIMONIALS
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
