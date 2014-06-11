<?php 
include 'core/init.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Previous Weeks</title>
  <meta name="description" content="GadgetThisOut is a school project not for commercial use">
  <meta name="author" content="Marek Kuczma">
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="http://www.mygadgets.pl/favicon.ico?v=2" />
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>

  <div class="header large">
  	<div class="container container_header large">
      <a href="index.php" class="logo">Gadget<span class="logo_span">This</span>Out</a>
      <?php green_dot(); ?>
      <a href="account.php" class="button profil" title="What I got ?"></a>
      <a href="previous_weeks.php" class="button archive" title="Previous Week's Gadgets"></a>
      <div class="button menu jeden" title="Show/Hide menu"></div>
    </div><!-- END container-->
  	<div class="nav">
  		<div class="container">
  			<ul>
  				<li class="nav_li"><a class="nav_a" href="#">Take me back to the top</a></li>
  				
  			</ul>
  		</div>
  	</div>
  </div><!-- END Header-->

  <div class="content">

  		<div class="big_title">
  			<h1>Previously on<br>Gadget<span class="logo_span">This</span>Out</h1>
  		</div><!-- END big title-->

      <div class="title_div"><h1 class="title">Samsung Galaxy Gear 2neo<span class="archive_span">64/100 left</span></h1></div>
      <div class="row">
        <div class="container">
          <div class="column float_left no_margin">
            <img class="img" src="photos/gear2neo/big_gear2neo.png" alt="Galaxy Gear 2neo">
          </div><!-- END Column -->

          <div class="column float_left">
            <h3 class="column_small_title">Smartwatch Galaxy Gear 2neo<br><a class="gadgetthisout" href="index.php">gadget this out</a></h3>
            <p>First of all, what's this famous Galaxy Gear 2neo ? Well the answear is simple... it's a watch, actualy it's more thant just a watch, it's a smartwatch !</p>
            <p>This little gadget will expand the functionality of your smartphone all you need is the smartwatch and the gearmenager app on your smartphone.</p>
            </div><!-- END Column -->
            </div><!-- END Column -->
        </div><!-- END container-->
      </div><!-- END ROW-->

      <div class="title_div"><h1 class="title">weather station by net<span class="logo_span">atmo</span><span class="archive_span">00/50 left</span></h1></div>
      <div class="row">
        <div class="container">
          <div class="column float_left no_margin">
            <img class="img" src="photos/netatmo/netatmo_1.png" alt="netatmo box">
          </div><!-- END Column -->

          <div class="column float_left">
            <h3 class="column_small_title">The weather station by <span class="netatmo">net<span class="logo_span">atmo</span></span>.<br><a class="gadgetthisout  gadgetthisout_no" href="netatmo.php">gadget this out</a></h3>
            <p>If you want to have your own personal mini meteo station, or maybe you need to know the co2 level in your room...</p> 
            <p>It's not a problem anymore... those little modules connect to your smartphone or tablet and send you a bunch of information about weather conditions.</p>
            </div><!-- END Column -->
        </div><!-- END container-->
      </div><!-- END ROW-->

  </div><!-- END Content-->
		
  	<div class="footer">
  		<p class="copyright">© 2014 Marek Kuczma. All rights reserved<br><a class="footer_a" href="http://gadgetthisout.eu/credits.php">credits</a></p>
	</div><!-- END Footer-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/myquery.js"></script>
</body>
</html>