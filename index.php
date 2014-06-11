<?php 
include 'core/init.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GadgetThisOut</title>
  <meta name="description" content="">
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
  				<li class="nav_li"><a class="nav_a" href="#what">The Gadget</a></li>
  				<li class="nav_li"><a class="nav_a" href="#box">The Box</a></li>
  				<li class="nav_li"><a class="nav_a" href="#use">Usage</a></li>
  				<li class="nav_li"><a class="nav_a" href="#more">Accessories</a></li>
  				<li class="nav_li"><a class="nav_a" href="#buy">I need one</a></li>
  			</ul>
  		</div>
  	</div>
    
  </div><!-- END Header-->

  <div class="content">

  		<div class="big_title">
  			<h1>This week’s gadget</h1>
			<h2><span class="netatmo">net<span class="logo_span">atmo</span></span> Weather Station</h2>
  		</div><!-- END big title-->
  		<img class="big_img" src="photos/netatmo/big_netatmo.png">

  		<div id="what" class="title_div"><h1 class="title">What's that ?</h1></div>
  		<div class="row">
  			<div class="container">
	  			<div class="column float_left no_margin">
	  				<img class="img" src="photos/netatmo/netatmo_1.png" alt="netatmo box">
	  			</div><!-- END Column -->

	  			<div class="column float_left">
	  				<h2 class="column_title">Welcome</h2>
	  				<h3 class="column_small_title">This week we will take a look at the weather station by <span class="netatmo">net<span class="logo_span">atmo</span></span>.</h3>
	  			  <p>If you want to have your own personal mini meteo station, or maybe you need to know the co2 level in your room...</p> 
            <p>It's not a problem anymore... those little modules connect to your smartphone or tablet and send you a bunch of information about weather conditions.</p>
            </div><!-- END Column -->
	  		</div><!-- END container-->
  		</div><!-- END ROW-->

  		<div id="box" class="title_div"><h1 class="title">I bet you would like to know what you get in the box ... </h1></div>
  		<div class="row">
  			<div class="container">
        <p class="listing margin_bottom">Well, here's a little list :</p>
  			<ul class="listing">
  				<li>One indoor Module</li>
  				<li>One Outdoor Module</li>
  				<li>USB power adapter</li>
  				<li>USB cable</li>
  				<li>Batteries included</li>
  			</ul>
	  		<p class="listing">And of course you can download the <span class="netatmo">net<span class="logo_span">atmo</span></span> Weather Station app here</p>
	  		<a href="https://play.google.com/store/apps/details?id=com.netatmo.netatmo" class="big_button" target="blanc">Google Play Download</a>
	  		<a href="https://itunes.apple.com/us/app/netatmo-weather-station/id532538499?ls=1&mt=8" class="big_button" target="blanc">App Store Download</a>

	  		</div><!-- END container-->
  		</div><!-- END ROW-->

  		<div id="use" class="title_div"><h1 class="title">How to use it ?</h1></div>
  		<div class="row">
  			<div class="container">
	  			<div class="column float_left no_margin">
	  				<img class="img" src="photos/netatmo/indoor2.png" alt="netatmo indoor module">
	  			</div><!-- END Column -->

	  			<div class="column float_left">
	  				<h2 class="column_title">Indoor module</h2>
  	  				<p>On one hand the indoor module let you check the temperature and humidity in your home.</p>
              <p>It can even check the CO2 level and let you know if you need to air out your home.</p>
	  			</div><!-- END Column -->
	  		</div><!-- END container-->
  		</div><!-- END ROW-->
  		<div class="row">
  			<div class="container">
	  			<div class="column float_right">
	  				<img class="img" src="photos/netatmo/outdoor2.png" alt="netatmo outdoor module">
	  			</div><!-- END Column -->

	  			<div class="column float_right no_margin">
	  				<h2 class="column_title">Outdoor module</h2>
	  				<p>On the other hand, the outdoor module sends to your smartphone or tablet, real-time weather readings.</p>
            <p>Thanks to this, you will know if you can go out and play some soccer or maybe go with friends for a picnic ? Or better, you should go shopping.</p>
				</div><!-- END Column -->
	  		</div><!-- END container-->
  		</div><!-- END ROW-->

  		<div id="more" class="title_div"><h1 class="title">If you need more ...</h1></div>
  		<div class="row">
  			<div class="container">
	  			<div class="column float_left no_margin">
	  				<h2 class="column_title center_title">Additional module</h2>
	  				<h3 class="column_small_title center_title">70 euro</h3>
	  				<img class="img" src="photos/netatmo/module.png" alt="netatmo module 2">
	  			</div><!-- END Column -->

	  			<div class="column float_left">
	  				<h2 class="column_title center_title">Pluvio rain gauge</h2>
	  				<h3 class="column_small_title center_title">70 euro</h3>
	  				<img class="img" src="photos/netatmo/pluvio.png" alt="netatmo pluvio">
	  			</div><!-- END Column -->
	  		</div><!-- END container-->
  		</div><!-- END ROW-->

  		<div id="buy" class="title_div"><h1 class="title">Now when you know everything...</h1></div>
  		<div class="row">
  			<div class="container">
	  			<div class="column float_left no_margin">
	  				<img class="img" src="photos/netatmo/netatmo_1.png" alt="netatmo box">
	  			</div><!-- END Column -->

	  			<div class="column float_left center_title">
	  				<h2 class="column_title">I think you should</h2>
	  				<a href="thanks.php" class="big_button">Take one</a>
	  				<h4 class="column_title">for only <span class="logo_span color">180 euro</span></h4>
            <p>and maybe take an additional</p>
            <img class="img_small" src="photos/netatmo/pluvio.png" alt="netatmo pluvio">
            <img class="img_small" src="photos/netatmo/module.png" alt="netatmo module 2">
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