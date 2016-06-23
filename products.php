<?php
    include_once 'assets/php/common.php';
?>

<!doctype html>
<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE -->
    <title><?php echo $lang['DEVICES_PAGE_TITLE']; ?></title>

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

<body onload="fillDevicesPage(); createBreadcrumb(null, 'devCategory', '<?php echo $lang['BREAD_PROD']; ?>');">
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
        <div class="banner" style="background: url('/assets/images/devices_banner.jpg') no-repeat center top;">
            <div class="banner-content">
                <h1 style="color: white"><font size="6vw"><?php echo $lang['PRODS_BANNER_TITLE']; ?></font></h1>
                <p  style="color: white"><font size="4vw"><?php echo $lang['PRODS_BANNER_DESC']; ?></font></p>
            </div>
        </div>
        <div class="clear-fix" style="width: 70%; margin: 50px 15%;">
            <div class="col-xs-12 col-sm-3 prods-head">
                <ul style="list-style-type: none;">
                    <li><h3><?php echo $lang['SPS_FILTER_TITLE']; ?></h3></li>
                    <li><?php echo $lang['SPS_FILTER_ALL']; ?> </li>
                    <li><?php echo $lang['SPS_FILTER_APPLE']; ?></li>
                    <li><?php echo $lang['SPS_FILTER_SAMSUNG']; ?></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3 prods-cont">
                <a>
                    <div class="col-xs-12 prods-dev" id="devsp1">
                        <div class="devspimg">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3 prods-cont">
                <a>
                    <div class="col-xs-12 prods-dev" id="devsp2">
                        <div class="devspimg">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3 prods-cont">
                <a>
                    <div class="col-xs-12 prods-dev" id="devsp3">
                        <div class="devspimg">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="clear-fix" style="width: 70%; margin: 50px 15%;">
            <div class="col-xs-12 col-sm-3 prods-head">
                <ul style="list-style-type: none;">
                    <li><h3><?php echo $lang['TBS_FILTER_TITLE']; ?></h3></li>
                    <li><?php echo $lang['TBS_FILTER_ALL']; ?></li>
                    <li><?php echo $lang['TBS_FILTER_APPLE']; ?></li>
                    <li><?php echo $lang['TBS_FILTER_SAMSUNG']; ?></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3 prods-cont">
                <a>
                    <div class="col-xs-12 prods-dev" id="devtb1">
                        <div class="devspimg">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3 prods-cont">
                <a>
                    <div class="col-xs-12 prods-dev" id="devtb2">
                        <div class="devspimg">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3 prods-cont">
                <a>
                    <div class="col-xs-12 prods-dev" id="devtb3">
                        <div class="devspimg">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="clear-fix" style="width: 70%; margin: 50px 15%;">
            <div class="col-xs-12 col-sm-3 prods-head">
                <ul style="list-style-type: none;">
                    <li><h3><?php echo $lang['MODS_FILTER_TITLE']; ?></h3></li>
                    <li><?php echo $lang['MODS_FILTER_ALL']; ?></li>
                    <li><?php echo $lang['MODS_FILTER_APPLE']; ?></li>
                    <li><?php echo $lang['MODS_FILTER_SAMSUNG']; ?></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3 prods-cont">
                <a>
                    <div class="col-xs-12 prods-dev" id="devmod1">
                        <div class="devspimg">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3 prods-cont">
                <a>
                    <div class="col-xs-12 prods-dev" id="devmod2">
                        <div class="devspimg">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3 prods-cont">
                <a>
                    <div class="col-xs-12 prods-dev" id="devmod3">
                        <div class="devspimg">
                        </div>
                    </div>
                </a>
            </div>
        </div><div class="clear-fix" style="width: 70%; margin: 50px 15%;">
            <div class="col-xs-12 col-sm-3 prods-head">
                <ul style="list-style-type: none;">
                    <li><h3><?php echo $lang['TVSLS_FILTER_TITLE']; ?></h3></li>
                    <li><?php echo $lang['TVSLS_FILTER_ALL']; ?></li>
                    <li><?php echo $lang['TVSLS_FILTER_APPLE']; ?></li>
                    <li><?php echo $lang['TVSLS_FILTER_SAMSUNG']; ?></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3 prods-cont">
                <a>
                    <div class="col-xs-12 prods-dev" id="devtvsl1">
                        <div class="devspimg">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3 prods-cont">
                <a>
                    <div class="col-xs-12 prods-dev" id="devtvsl2">
                        <div class="devspimg">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3 prods-cont">
                <a>
                    <div class="col-xs-12 prods-dev" id="devtvsl3">
                        <div class="devspimg">
                        </div>
                    </div>
                </a>
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
    <script src="assets/js/plugins/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/jquery.easing.1.3.min.js"></script>
    <script src="assets/js/plugins/modernizr.custom.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="assets/js/plugins/twitter/tweetie.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>



</body>
