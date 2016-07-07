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

<body onload="createBreadcrumb(null, 'ass', '<?php echo $lang['BREAD_ASS']; ?>')">
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
        <div class="container assist-cont">
            <a href="">
                <div class="col-xs-12 col-sm-3">
                    <img src="assets/images/ass/assicon01.png">
                    <p><?php echo $lang['ASS_DESC1']; ?></p>
                </div>
            </a>
            <a href="">
                <div class="col-xs-12 col-sm-3">
                    <img src="assets/images/ass/assicon02.png">
                    <p><?php echo $lang['ASS_DESC2']; ?></p>
                </div>
            </a>
            <a href="">
                <div class="col-xs-12 col-sm-3">
                    <img src="assets/images/ass/assicon03.png">
                    <p><?php echo $lang['ASS_DESC3']; ?></p>
                </div>
            </a>
            <a href="">
                <div class="col-xs-12 col-sm-3" style="border-right: 0px;">
                    <img src="assets/images/ass/assicon04.png">
                    <p><?php echo $lang['ASS_DESC4']; ?></p>
                </div>
            </a>
        </div>
        <div class="container">
            <div class="col-xs-12 container ass-highlights">
                <h4>In Evidenza</h4>
                <div class="col-xs-12 col-md-6">
                    <a href="">ciao</a>
                </div>
                <div class="col-xs-12 col-md-6 rightcol">
                    <a href="">ciao</a>
                </div>
                <div class="col-xs-12 col-md-6">
                    <a href="">ne</a>
                </div>
                <div class="col-xs-12 col-md-6 rightcol">
                    <a href="">ne</a>
                </div>
                <div class="col-xs-12 col-md-6 bottom">
                    <a href="">grosso</a>
                </div>
                <div class="col-xs-12 col-md-6 rightcol bottom">
                    <a href="">grosso</a>
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
