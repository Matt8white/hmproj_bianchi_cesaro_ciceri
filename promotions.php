<?php
    include_once 'assets/php/common.php';
?>

<!doctype html>
<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE -->
    <title><?php echo $lang['OFF_PAGE_TITLE']; ?></title>

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

<body>
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
        <div class="banner" style="background: url('/assets/images/promotions_banner.jpg') no-repeat center top;">
            <div class="banner-content">
                <h1 style="color: white"><font size="6vw"><?php echo $lang['OFF_BANNER_TITLE']; ?></font></h1>
                <p  style="color: white"><font size="4vw"><?php echo $lang['OFF_BANNER_DESC']; ?></font></p>
            </div>
        </div>
        <div class="clear-fix" style="width: 70%; margin: 50px 15%;">
            <div class="col-xs-12 col-md-3 prods-head">
                <ul style="list-style-type: none;">
                    <li><h3><?php echo $lang['PROM_DEV_TITLE']; ?></h3></li>
                    <li>
                        <a href="category.php" onclick="setCategory('<?php echo $lang['PROM_SWITCH_ALL']; ?>', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>')">
                            <?php echo $lang['PROM_DEV_ALL']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="category.php" onclick="setCategory('Smartphones', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>')">
                            <?php echo $lang['PROM_DEV_SMART']; ?>
                        </a>
                    <li>
                        <a href="category.php" onclick="setCategory('Tablet', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>')">
                            <?php echo $lang['PROM_DEV_TAB']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="category.php" onclick="setCategory('<?php echo $lang['PROM_SWITCH_ALL']; ?>', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>' + ' ' + '<?php echo $lang['PROM_DEV_APPLE']; ?>')">
                            <?php echo $lang['PROM_DEV_APPLE']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="category.php" onclick="setCategory('<?php echo $lang['PROM_SWITCH_ALL']; ?>', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>' + ' ' + '<?php echo $lang['PROM_DEV_SAMS']; ?>')">
                            <?php echo $lang['PROM_DEV_SAMS']; ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-9">
                <div class="col-xs-12 col-sm-6 prods-cont">
                    <a href="category.php" onclick="setCategory('Smartphones', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>')">
                        <div class="col-xs-12 prods-dev" style="padding: 0;">
                            <div style="background: url('/assets/images/prom_smartphones.jpg') no-repeat center top; height: 250px;">
                                <div class="proms-content">
                                    <p style="color: #014591"><font size="4vw"><?php echo $lang['PROM_SHOW_SMART']; ?></font></p>
                                    <p style="color: #014591"><font size="2vw"><?php echo $lang['PROM_SHOW_SMART2']; ?></font></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 prods-cont">
                    <a href="category.php" onclick="setCategory('Tablet', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>')">
                        <div class="col-xs-12 prods-dev" style="padding: 0;">
                            <div style="background: url('/assets/images/prom_tablet.jpg') no-repeat center top; height: 250px;">
                                <div class="proms-content">
                                    <p style="color: #014591"><font size="4vw"><?php echo $lang['PROM_SHOW_TAB']; ?></font></p>
                                    <p  style="color: #014591"><font size="2vw"><?php echo $lang['PROM_SHOW_TAB2']; ?></font></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="clear-fix" style="width: 70%; margin: 50px 15%;">
            <div class="col-xs-12 col-md-3 prods-head">
                <ul style="list-style-type: none;">
                    <li><h3><?php echo $lang['PROM_SL_TITLE']; ?></h3></li>
                    <li>
                        <a href="category.php" onclick="setCategory('<?php echo $lang['PROM_SWITCH_ALL']; ?>', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>')">
                            <?php echo $lang['PROM_SL1']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="category.php" onclick="setCategory('Smartphones', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>')">
                            <?php echo $lang['PROM_SL2']; ?>
                        </a>
                    <li>
                        <a href="category.php" onclick="setCategory('Tablet', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>')">
                            <?php echo $lang['PROM_SL3']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="category.php" onclick="setCategory('<?php echo $lang['PROM_SWITCH_ALL']; ?>', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>' + ' ' + '<?php echo $lang['PROM_DEV_APPLE']; ?>')">
                            <?php echo $lang['PROM_SL4']; ?>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- LINK SBAGLIATI TODO -->
            <div class="col-xs-12 col-md-9">
                <div class="col-xs-12 col-sm-6 prods-cont">
                    <a href="category.php" onclick="setCategory('Smartphones', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>')">
                        <div class="col-xs-12 prods-dev" style="padding: 0;">
                            <div style="background: url('/assets/images/prom_sl1.jpg') no-repeat center top; height: 250px;">
                                <div class="proms-content">
                                    <p style="color: #014591"><font size="4vw"><?php echo $lang['PROM_SHOW_SL1']; ?></font></p>
                                    <p style="color: #014591"><font size="2vw"><?php echo $lang['PROM_SHOW_SL1_2']; ?></font></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 prods-cont">
                    <a href="category.php" onclick="setCategory('Tablet', '<?php echo $lang['PROM_SWITCH_OFFERS']; ?>')">
                        <div class="col-xs-12 prods-dev" style="padding: 0;">
                            <div style="background: url('/assets/images/prom_sl2.jpg') no-repeat center top; height: 250px;">
                                <div class="proms-content">
                                    <p style="color: #014591"><font size="4vw"><?php echo $lang['PROM_SHOW_SL2']; ?></font></p>
                                    <p  style="color: #014591"><font size="2vw"><?php echo $lang['PROM_SHOW_SL2_2']; ?></font></p>
                                </div>
                            </div>
                        </div>
                    </a>
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
    <script src="assets/js/plugins/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/jquery.easing.1.3.min.js"></script>
    <script src="assets/js/plugins/modernizr.custom.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="assets/js/plugins/twitter/tweetie.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>
</body>
