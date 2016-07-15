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

<body onload="fillCategoryPage('<?php echo $lang['BREAD_PROD']; ?>');">
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

        <div class="col-xs-12 col-sm-4">
            <div class="row">
              <div class="span3">
                <div class="well">
                    <div>
                        <ul class="nav nav-list">
                            <li><label class="tree-toggle nav-header">Filters</label>
                                <ul class="nav nav-list tree">
                                    <hr>
                                        <li class="checkbox">
                                            <label>
                                                <input type="checkbox"> <?php echo $lang['PROM_SWITCH_OFFERS']; ?>
                                            </label>
                                        </li>
                                    <hr>
                                    <li><label class="tree-toggle nav-header">Brand</label>
                                        <ul id='brandfilters' class="nav nav-list tree">
                                           
                                        </ul>
                                    </li>
                                    <hr>
                                    <li><label class="tree-toggle nav-header">Price</label>
                                        <ul id='pricefilters' class="nav nav-list tree">
                                           <li class="radio"><label><input type="radio" name="price" value="<200"><200</label></li>
                                           <li class="radio"><label><input type="radio" name="price" value="<300"><300</label></li>
                                           <li class="radio"><label><input type="radio" name="price" value="<400"><400</label></li>
                                           <li class="radio"><label><input type="radio" name="price" value="<=500"><500</label></li>
                                           <li class="radio"><label><input type="radio" name="price" value=">500">>500</label></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <hr>
                            <div class="btn btn-primary" onClick="clearFilters()"> Clear Filters</div>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8">
                <div class="col-xs-12" id ="devs">
                </div>
        </div>
        <div class="col-xs-12" id="desc">
        </div>
        <div class="col-xs-12 col-sm-6" id="slRel">
        </div>
        <div class="col-xs-12 col-sm-6" id="asRel">
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
