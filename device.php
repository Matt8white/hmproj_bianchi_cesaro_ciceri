<?php
    include_once 'assets/php/common.php';
?>

<!doctype html>
<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE -->
    <title><?php echo $lang['DEVICE_PAGE_TITLE']; ?></title>

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

<body onload="fillDevicePage('<?php echo $lang['BREAD_PROD']; ?>');">
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

        <div class="col-xs-12 col-sm-5" style="height:760px;" id="displayImg">
        </div>
        <div class="col-xs-12 col-sm-7">
            <div class="col-xs-12">
                <ul class="nav nav-tabs nav-justified">
                        <li class="active" id="presbutton"><a href="#pres" data-toggle="tab"><?php echo $lang['DEV_PRES']; ?></a></li>
                        <li id="techbutton"><a href="#tech" data-toggle="tab"><?php echo $lang['DEV_SPEC']; ?></a></li>
                </ul>
            </div>
            <div class="col-xs-12">
                <div class="tab-content" style="height:560px">
                        <div class="tab-pane active" id="pres">
                            <div class="devname" style="font-size: 44px; color: #014591; font-family: Arial, Helvetica, sans-serif  "></div>
                            <div class="show-content" style="width: 100%;">
                                <span class="btn btn-primary"><?php echo $lang['BUY_BTN']; ?></span>
                            </div>
                        </div>
                        <div class="tab-pane" id="tech">
                            <div class="devname" style="font-size: 44px; color: #014591; font-family: Arial, Helvetica, sans-serif  "></div>
                            <div class="show-content" style="width: 100%;">
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12" id="desc" style="width: 80%; margin-left:10%">
        </div>
        <div class="col-xs-12 col-sm-5 col-sm-offset-1" id="slRel">
        </div>
        <div class="col-xs-12 col-sm-5" id="asRel">
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
    <script src="assets/js/plugins/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/jquery.easing.1.3.min.js"></script>
    <script src="assets/js/plugins/modernizr.custom.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="assets/js/plugins/twitter/tweetie.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>



</body>
