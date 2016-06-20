<header class="header" id="top">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="row">
                <a href="index.php">
                    <div class="navbar-homebtn col-sm-3  col-xs-7">
						<img class="logo" src="https://img.tim.it:443/img/logo_tim_2016.png">
						<div class="button-home">Home</div>
					</div>
                </a>
				<div class="col-xs-5 button-spacer">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav col-sm-8">
                <a href="promotions.php">
                    <li class="navbar-button col-sm-3 col-xs-12">
                        <?php echo $lang['NAV_1']; ?>
                    </li>
                </a>
                <a href="products.php">
                    <li class="navbar-button col-sm-3 col-xs-12">
                        <?php echo $lang['NAV_2']; ?>
                    </li>
                </a>
                <a href="slcat.php">
                    <li class="navbar-button col-sm-3 col-xs-12">
                        <?php echo $lang['NAV_3']; ?>
                    </li>
                </a>
                <a href="asscat.php">
                    <li class="navbar-button col-sm-3 col-xs-12">
                        <?php echo $lang['NAV_4']; ?>
                    </li>
                </a>
				</ul>
                <div class="navbar-lang col-sm-1">
                    <a href="?lang=ita">
                        <img src="assets/images/ita.png">
                    </a>
                    <a href="?lang=en">
                        <img src="assets/images/en.png">
                    </a>
                </div>
				</div>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
</header>
