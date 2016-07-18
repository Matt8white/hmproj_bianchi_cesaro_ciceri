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

<body onload="fillSlPage('<?php echo $lang['BREAD_SL']; ?>');">
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

        <div class="col-xs-12 col-sm-5" style="height:500px;" id="displayImg">
        </div>
        <div class="col-xs-12 col-sm-7">
            <div class="col-xs-12">
                <ul class="nav nav-tabs nav-justified">
                        <li class="active" id="descbutton"><a href="#desc" data-toggle="tab"><?php echo $lang['SL_DESC']; ?></a></li>
                        <li id="actbutton"><a href="#act" data-toggle="tab"><?php echo $lang['SL_ACT']; ?></a></li>
                        <li id="faqbutton"><a href="#faq" data-toggle="tab"><?php echo $lang['SL_FAQ']; ?></a></li>
                </ul>
            </div>
            <div class="col-xs-12">
                <div class="tab-content" style="height:300px">
                        <div class="tab-pane active" id="desc">
                            <div class="devname" style="font-size: 44px; color: #014591; font-family: Arial, Helvetica, sans-serif  "></div>
                            <div class="show-content" style="width: 100%;">
                            </div>
                        </div>
                        <div class="tab-pane" id="act">
                            <div class="devname" style="font-size: 44px; color: #014591; font-family: Arial, Helvetica, sans-serif  "></div>
                            <div class="show-content" style="width: 100%;">
                            </div>
                        </div>
                        <div class="tab-pane" id="faq">
                            <div class="devname" style="font-size: 44px; color: #014591; font-family: Arial, Helvetica, sans-serif  "></div>
                            <div class="show-content" style="width: 100%;">
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-10 col-sm-offset-1" id="devRel">
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
