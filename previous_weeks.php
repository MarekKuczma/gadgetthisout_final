<?php 
include 'core/init.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Previous Weeks</title>
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
  				<li class="nav_li"><a class="nav_a" href="#">Take me back to the top</a></li>
  				
  			</ul>
  		</div>
  	</div>
  </div><!-- END Header-->

  <div class="content">

  		<div class="big_title">
  			<h1>Previously on<br>Gadget<span class="logo_span">This</span>Out</h1>
  		</div><!-- END big title-->

  		<div class="title_div"><h1 class="title">Gadget One <span class="archive_span">1/50 left</span></h1></div>
  		<div class="row">
  			<div class="container">
	  			<div class="column float_left no_margin">
	  				<img class="img" src="photos/netatmo/netatmo_1.png" alt="netatmo box">
	  			</div><!-- END Column -->

	  			<div class="column float_left">
	  				<h2 class="column_title">Weather Station</h2>
	  				<h3 class="column_small_title">For Smartphones and Tablets</h3>
	  				<p>This is the weather station by <span class="netatmo">netatmo.</span><br>   
					This is a really easy and simple way to control you indoor temperature, relative humidity and CO2 readings.</p> 

					<p>You will be also able to know the weather conditions like temperature, air quality or even barometric pressure by using the Outdoor Module.</p>
	  			</div><!-- END Column -->
	  		</div><!-- END container-->
  		</div><!-- END ROW-->

  		<div class="title_div"><h1 class="title">Gadget Two <span class="archive_span">2/50 left</span></h1></div>
  		<div class="row">
  			<div class="container">
	  			<div class="column float_right">
	  				<img class="img" src="photos/netatmo/netatmo_1.png" alt="netatmo box">
	  			</div><!-- END Column -->

	  			<div class="column float_right no_margin">
	  				<h2 class="column_title">Weather Station</h2>
	  				<h3 class="column_small_title">For Smartphones and Tablets</h3>
	  				<p>This is the weather station by netatmo.<br>   
					This is a really easy and simple way to control you indoor temperature, relative humidity and CO2 readings.</p> 

					<p>You will be also able to know the weather conditions like temperature, air quality or even barometric pressure by using the Outdoor Module.</p>
	  			</div><!-- END Column -->
	  		</div><!-- END container-->
  		</div><!-- END ROW-->

  		<div class="title_div"><h1 class="title">Gadget Three <span class="archive_span">3/50 left</span></h1></div>
  		<div class="row">
  			<div class="container">
	  			<div class="column float_left no_margin">
	  				<img class="img" src="photos/netatmo/netatmo_1.png" alt="netatmo box">
	  			</div><!-- END Column -->

	  			<div class="column float_left">
	  				<h2 class="column_title">Weather Station</h2>
	  				<h3 class="column_small_title">For Smartphones and Tablets</h3>
	  				<p>This is the weather station by netatmo.<br>   
					This is a really easy and simple way to control you indoor temperature, relative humidity and CO2 readings.</p> 

					<p>You will be also able to know the weather conditions like temperature, air quality or even barometric pressure by using the Outdoor Module.</p>
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