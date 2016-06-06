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
    <div class="main-wrapper">

        <!-- =========================
             HEADER
        ============================== -->
        <header class="header" id="top">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="row">
                        <a href="#">
                            <div class="navbar-homebtn col-md-3">
                                <img class="logo" src="https://img.tim.it:443/img/logo_tim_2016.png">
                                <div class="button-home">Home</div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="navbar-button col-md-2">
                                <?php echo $lang['NAV_1']; ?>
                            </div>
                        </a>
                        <a href="#">
                            <div class="navbar-button col-md-2">
                                <?php echo $lang['NAV_2']; ?>
                            </div>
                        </a>
                        <a href="#">
                            <div class="navbar-button col-md-2">
                                <?php echo $lang['NAV_3']; ?>
                            </div>
                        </a>
                        <a href="#">
                            <div class="navbar-button col-md-2">
                                <?php echo $lang['NAV_4']; ?>
                            </div>
                        </a>
                        <div class="navbar-lang col-md-1">
                            <a href="?lang=ita">
                                <img src="assets/images/ita.png">
                            </a>
                            <a href="?lang=en">
                                <img src="assets/images/en.png">
                            </a>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!-- =========================
             /END HEADER
        ============================== -->
        <!-- =========================
             CAROUSEL
        ============================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
                        <h1 style="color: white"><font size="20"><?php echo $lang['CAROUSEL_HEADER1']; ?></font></h1>
                        <p  style="color: white"><font size="5"><?php echo $lang['CAROUSEL_DESC1']; ?></font></p>
                        <span class="btn btn-primary"><?php echo $lang['CAROUSEL_BTN1']; ?></span>
                    </div>
                </div>

                <div class="item critem" style="background: url('/assets/images/banner2.jpg') no-repeat center top;">
                    <div class="carousel-content">
                        <h1 style="color: white"><font size="20"><?php echo $lang['CAROUSEL_HEADER2']; ?></font></h1>
                        <p  style="color: white"><font size="5"><?php echo $lang['CAROUSEL_DESC2']; ?></font></p>
                        <span class="btn btn-primary"><?php echo $lang['CAROUSEL_BTN2']; ?></span>
                    </div>
                </div>

                <div class="item critem" style="background: url('/assets/images/banner3.jpg') no-repeat center top;">
                    <div class="carousel-content">
                        <h1 style="color: white"><font size="20"><?php echo $lang['CAROUSEL_HEADER3']; ?></font></h1>
                        <p  style="color: white"><font size="5"><?php echo $lang['CAROUSEL_DESC3']; ?></font></p>
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
        <!-- ==================================================
            FOOTER
        ======================================================= -->
        <footer class="footer dark-bg" id="footer">
            <div class="container">
                <div>CIAONE</div>
            </div><!-- /End Container -->
        </footer>

    </div><!-- /End Main Wrapper -->

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
