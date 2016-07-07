<?php
    include_once 'assets/php/common.php';
?>

<!doctype html>
<head>
    <meta charset="utf-8">

    <!-- TITLE OF SITE -->
    <title><?php echo $lang['PAGE_TITLE']; ?></title>

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
    <div class="main-wrapper">
        <!-- =========================
             CAROUSEL
        ============================== -->
        <div id="myCarousel" class="carousel slide" style="margin-bottom: 20px;" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

              <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item critem active" style="background: url('/assets/images/banner1.jpg') no-repeat center top;">
                    <div class="carousel-content">
                        <h1 style="color: white"><font size="6vw"><?php echo $lang['CAROUSEL_HEADER1']; ?></font></h1>
                        <p  style="color: white"><font size="4vw"><?php echo $lang['CAROUSEL_DESC1']; ?></font></p>
                        <span class="btn btn-primary"><?php echo $lang['CAROUSEL_BTN1']; ?></span>
                    </div>
                </div>

                <div class="item critem" style="background: url('/assets/images/banner2.jpg') no-repeat center top;">
                    <div class="carousel-content">
                        <h1 style="color: white"><font size="6vw"><?php echo $lang['CAROUSEL_HEADER2']; ?></font></h1>
                        <p  style="color: white"><font size="4vw"><?php echo $lang['CAROUSEL_DESC2']; ?></font></p>
                        <span class="btn btn-primary"><?php echo $lang['CAROUSEL_BTN2']; ?></span>
                    </div>
                </div>

                <div class="item critem" style="background: url('/assets/images/banner3.jpg') no-repeat center top;">
                    <div class="carousel-content">
                        <h1 style="color: white"><font size="6vw"><?php echo $lang['CAROUSEL_HEADER3']; ?></font></h1>
                        <p  style="color: white"><font size="4vw"><?php echo $lang['CAROUSEL_DESC3']; ?></font></p>
                        <span class="btn btn-primary"><?php echo $lang['CAROUSEL_BTN3']; ?></span>
                    </div>
                </div>

            </div>

              <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- =========================
             /END CAROUSEL
        ============================== -->
        <!-- =========================
             PAGE CONTENT
        ============================== -->
        <div class="show-highlights clear-fix" style="margin-bottom: 20px;">
            <div class="col-xs-12 col-md-9"> <!-- required for floating -->
        <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#promotion" data-toggle="tab"><?php echo $lang['SHOW_PROMOTION']; ?></a></li>
                    <li><a href="#device" data-toggle="tab"><?php echo $lang['SHOW_DEVICE']; ?></a></li>
                    <li><a href="#sl" data-toggle="tab"><?php echo $lang['SHOW_SL']; ?></a></li>

                </ul>
            </div>

            <div class="col-xs-12 col-md-9">
                <!-- Tab panes -->
                <div class="tab-content" style="height:360px;">
                    <div class="tab-pane active" id="promotion" style="background: url('/assets/images/prom-home.jpg') no-repeat right top;">
                        <div class="show-content">
                            <h1 style="color: black"><font size="6vw"><?php echo $lang['SHOW_PROM_HEAD']; ?></font></h1>
                            <p  style="color: black"><font size="4vw"><?php echo $lang['SHOW_PROM_DESC']; ?></font></p>
                            <span class="btn btn-primary"><?php echo $lang['SHOW_PROM_BTN']; ?></span>
                        </div>
                    </div>
                    <div class="tab-pane" id="device" style="background: url('/assets/images/device-home.jpg') no-repeat right top;">
                        <div class="show-content">
                            <h1 style="color: black"><font size="6vw"><?php echo $lang['SHOW_DEV_HEAD']; ?></font></h1>
                            <p  style="color: black"><font size="4vw"><?php echo $lang['SHOW_DEV_DESC']; ?></font></p>
                            <a href="device.php?device=6"><span class="btn btn-primary"><?php echo $lang['SHOW_DEV_BTN']; ?></span></a>
                        </div>
                    </div>
                    <div class="tab-pane" id="sl" style="background: url('/assets/images/sl-home.jpg') no-repeat right top;">
                        <div class="show-content">
                            <h1 style="color: black"><font size="6vw"><?php echo $lang['SHOW_SL_HEAD']; ?></font></h1>
                            <p  style="color: black"><font size="4vw"><?php echo $lang['SHOW_SL_DESC']; ?></font></p>
                            <span class="btn btn-primary"><?php echo $lang['SHOW_SL_BTN']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 topup-cont">
                <div class="col-xs-12 topup">
                    <h4 style="color: red"><font size="4"><?php echo $lang['TOPUP_HEAD']; ?></font></h4>
                    <select style="width: 70%; height: 24%; margin-top: 2%; margin-bottom:10%">
                        <option>5 €</option>
                        <option>10 €</option>
                        <option>20 €</option>
                    </select>
                    <span class="btn btn-topup"><?php echo $lang['TOPUP_BTN']; ?></span>
                </div>
                <div class="col-xs-12 topup" style="margin-top: -1px">
                    <img src="https://img.tim.it:443/sdr/icone/icona_wcb_schede_offerta.png" class="img-tab" style="margin-top: 7.5%; margin-left: 24%">
                    <h1 style="color: black; text-align: left; margin-left: 10%"><font size="4"><?php echo $lang['NEWCUST_HEAD']; ?></font></h1>
                    <p  style="color: black; text-align: left; margin-left: 12%"><font size="3"><?php echo $lang['NEWCUST_BODY']; ?></font></p>
                    <span class="btn btn-topup"><?php echo $lang['NEWCUST_BTN']; ?></span>
                </div>
            </div>
        </div>
        <!-- =========================
             /END PAGE CONTENT
        ============================== -->
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
