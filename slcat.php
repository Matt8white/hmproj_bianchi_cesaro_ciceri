<?php
    include_once 'assets/php/common.php';
?>

<!doctype html>
<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE -->
    <title><?php echo $lang['SL_PAGE_TITLE']; ?></title>

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

<body onload="createBreadcrumb(null, 'sl', '<?php echo $lang['BREAD_SL']; ?>')">
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
        <div class="banner_sl" style="background: url('/assets/images/sltv.jpg') no-repeat center top;">
            <div class="banner-sl-content">
                <h1 style="color: white"><font size="6vw"><?php echo $lang['SL_TV_TITLE']; ?></font></h1>
                <p style="color: white"><font size="4vw"><?php echo $lang['SL_TV_DESC']; ?></font></p>
                <a href="slcattv.php"><span class="btn btn-primary"><?php echo $lang['BTN_FINDOUT']; ?></span></a>
            </div>
        </div>
        <div class="banner_sl" style="background: url('/assets/images/slhealth.jpg') no-repeat center top;">
            <div class="banner-sl-content">
                <h1 style="color: white"><font size="6vw"><?php echo $lang['SL_HEALTH_TITLE']; ?></font></h1>
                <p  style="color: white"><font size="4vw"><?php echo $lang['SL_HEALTH_DESC']; ?></font></p>
                <a href="slcathealth.php"><span class="btn btn-primary"><?php echo $lang['BTN_FINDOUT']; ?></span></a>
            </div>
        </div>
        <div class="banner_sl" style="background: url('/assets/images/slfamily.jpg') no-repeat center top;">
            <div class="banner-sl-content">
                <h1 style="color: white"><font size="6vw"><?php echo $lang['SL_FAMILY_TITLE']; ?></font></h1>
                <p  style="color: white"><font size="4vw"><?php echo $lang['SL_FAMILY_DESC']; ?></font></p>
                <a href="slcathome.php"><span class="btn btn-primary"><?php echo $lang['BTN_FINDOUT']; ?></span></a>
            </div>
        </div>
        <div class="banner_sl" style="background: url('/assets/images/slpersonal.jpg') no-repeat center top;">
            <div class="banner-sl-content">
                <h1 style="color: white"><font size="6vw"><?php echo $lang['SL_PERSONAL_TITLE']; ?></font></h1>
                <p  style="color: white"><font size="4vw"><?php echo $lang['SL_PERSONAL_DESC']; ?></font></p>
                <a href="slcatpersonal.php"><span class="btn btn-primary"><?php echo $lang['BTN_FINDOUT']; ?></span></a>
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
