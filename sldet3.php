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

<body  onload="fillSlPage('<?php echo $lang['SL_BREAD_CAT3']; ?>','<?php echo $lang['BREAD_SL']; ?>');">
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
        <div class="banner_slcat" style="background: url('/assets/images/slfamily.jpg') no-repeat center top;">
            <div class="banner_slcat_content">
                <h1 style="color: white"><font size="6vw"><?php echo $lang['SL_FAMILY_TITLE']; ?></font></h1>
                <p  style="color: white"><font size="4vw"><?php echo $lang['SL_FAMILY_DESC']; ?></font></p>
            </div>
        </div>
        <div class="sltitle col-xs-4 col-xs-offset-4"><?php echo $lang['SL_TITLE']; ?></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-offset-2">
                    <div class="clearfix">
                        <div id="thumbcarousel" class="carousel carousel-sl slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="http://placehold.it/100/e8117f/fff&amp;text=Product+Main"></div>
                                    <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="http://placehold.it/100/00ffff/000&amp;text=Product+Image+2"></div>
                                    <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="http://placehold.it/100/ff00ff/fff&amp;text=Product+Image+3"></div>
                                    <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="http://placehold.it/100/ffff00/000&amp;text=Product+Image+4"></div>
                                </div><!-- /item -->
                                <div class="item">
                                    <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="http://placehold.it/100/612b65/fff&amp;text=Product+Image+5"></div>
                                    <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="http://placehold.it/100/00ffcc/000&amp;text=Product+Image+6"></div>
                                    <div data-target="#carousel" data-slide-to="6" class="thumb"><img src="http://placehold.it/100/db371b/fff&amp;text=Product+Image+7"></div>
                                    <div data-target="#carousel" data-slide-to="7" class="thumb"><img src="http://placehold.it/100/feb8aa/000&amp;text=Product+Image+8"></div>
                                </div><!-- /item -->
                            </div><!-- /carousel-inner -->
                            <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div> <!-- /thumbcarousel -->
                    </div><!-- /clearfix -->
                    <div id="carousel" class="carousel carousel-sl slide" data-ride="carousel" style="margin-bottom: 10px;">
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://placehold.it/350x250/e8117f/fff&amp;text=Product+Main">
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/350x250/00ffff/000&amp;text=Product+Image+2">
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/350x250/ff00ff/fff&amp;text=Product+Image+3">
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/350x250/ffff00/000&amp;text=Product+Image+4">
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/350x250/612b65/fff&amp;text=Product+Image+5">
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/350x250/00ffff/000&amp;text=Product+Image+6">
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/350x250/db371b/fff&amp;text=Product+Image+7">
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/350x250/feb8aa/000&amp;text=Product+Image+8">
                            </div>
                        </div>
                    </div>
                </div> <!-- /col-sm-6 -->
            </div> <!-- /row -->
        </div> <!-- /container -->
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
