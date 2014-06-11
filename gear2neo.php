<?php 
include 'core/init.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GadgetThisOut</title>
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
  				<li class="nav_li"><a class="nav_a" href="#what">The Gadget</a></li>
  				<li class="nav_li"><a class="nav_a" href="#appearance">Appearance</a></li>
  				<li class="nav_li"><a class="nav_a" href="#connected">Features</a></li>
          <li class="nav_li"><a class="nav_a" href="#compatible">Compatible</a></li>
  				<li class="nav_li"><a class="nav_a" href="#buy">Oh yeah</a></li>
  			</ul>
  		</div>
  	</div>
    
  </div><!-- END Header-->

  <div class="content">

  		<div class="big_title">
  			<h1>This week’s gadget</h1>
			<h2>Samsung Galaxy Gear 2neo</h2>
  		</div><!-- END big title-->
  		<img class="big_img" src="photos/gear2neo/big_gear2neo.png" alt="Galaxy Gear 2neo">

  		<div id="what" class="title_div"><h1 class="title">What's that ?</h1></div>
  		<div class="row">
  			<div class="container">
	  			<div class="column float_left no_margin">
	  				<img class="img" src="photos/gear2neo/gear_notif.png" alt="">
	  			</div><!-- END Column -->

	  			<div class="column float_left">
	  				<h2 class="column_title">Welcome,</h2>
	  				<h3 class="column_small_title">this week we will take a closer look a the new Galaxy Gear 2neo.</h3>
	  			  <p>First of all, what's this famous Galaxy Gear 2neo ? Well the answear is simple... it's a watch, actualy it's more thant just a watch, it's a smartwatch !</p>
            <p>This little gadget will expand the functionality of your smartphone all you need is the smartwatch and the gearmenager app on your smartphone.</p>
            </div><!-- END Column -->
	  		</div><!-- END container-->
  		</div><!-- END ROW-->

  		<div id="appearance" class="title_div"><h1 class="title">The appearance</h1></div>
  		<div class="row">
  			<div class="container">
	  			<div class="column float_left no_margin">
	  				<img class="img" src="photos/gear2neo/orange_straps.png" alt="Orange Gear 2neo">
	  			</div><!-- END Column -->

	  			<div class="column float_left">
	  				<h2 class="column_title">Straps, Straps, straps... </h2>
  	  				<p>First of all, the Galaxy Gear 2neo is quite resistant and in addition has a comfortable strap.</p>
              <p>What's great about the straps is that, they are interchangeable so you don't have to worry if you don't like the color anymore.</p>
	  			</div><!-- END Column -->
	  		</div><!-- END container-->
  		</div><!-- END ROW-->
  		<div class="row">
  			<div class="container">
	  			<div class="column float_right">
	  				<img class="img" src="photos/gear2neo/gear_water.png" alt="Mocha Gray Gear2neo">
	  			</div><!-- END Column -->

	  			<div class="column float_right no_margin">
	  				<h2 class="column_title"> Waterproof ? </h2>
	  				<p>Oh yes, this "super watch" is also waterproof, you will not lose time to take it off for instance if you need to wash your hands</p>
				</div><!-- END Column -->
	  		</div><!-- END container-->
  		</div><!-- END ROW-->

      <div id="connected" class="title_div"><h1 class="title">Features</h1></div>
      <div class="row">
        <div class="container">
          <div class="column float_left no_margin">
            <img class="img" src="photos/gear2neo/gear_sms.png" alt="">
          </div><!-- END Column -->

          <div class="column float_left">
            <h2 class="column_title">Phone calls and what else ?</h2>
              <p>When the Gear 2neo is connected to your phone, it allows you to make and receive calls, read and send text messages.The only problem is that you can only use template text messages if you want to reply to somebody.</p>
              <p>The only little problem is that you can only use template text messages if you want to reply to somebody.</p>
          </div><!-- END Column -->
        </div><!-- END container-->
      </div><!-- END ROW-->
      <div class="row">
        <div class="container">
          <div class="column float_right">
            <img class="img" src="photos/gear2neo/gear_music.png" alt="Black Gear 2neo">
          </div><!-- END Column -->

          <div class="column float_right no_margin">
            <h2 class="column_title"> Music Lover ? </h2>
            <p>The smartwatch show you notifications from your phone. You can also use it as a remote for your music player.</p>
            <p>What's great about it is that you can upload songs to your watch and listen to them without the need to carry a smartphone, all you need is a bluetooth headset.</p>
        </div><!-- END Column -->
        </div><!-- END container-->
      </div><!-- END ROW-->

      <div id="compatible" class="title_div"><h1 class="title">Compatibility</h1></div>
      <div class="row">
        <div class="container">
          <div class="column float_left no_margin">
            <img class="img" src="photos/gear2neo/big_gear2neo.png" alt="">
          </div><!-- END Column -->

          <div class="column float_left">
            <h2 class="column_title">Is that all ?</h2>
              <p>The last features I will talk about is the fact that it's compatible with your Samsung smartphone and Samsung Tablets<span class="color">*</span>.</p>
              <p>The Gear has few accesible applications for itself but unfortunetly not all of them are free.</p>
          </div><!-- END Column -->
        </div><!-- END container-->
      </div><!-- END ROW-->
      <div class="row">
        <div class="container">
          <p class="listing accesories_small ">Samsung Gear is compatible with 17 types of device models : Samsung Galaxy S5 / Galaxy Grand 2 / Galaxy Note 3 / Galaxy Note 3 Neo / Galaxy Note 2 / Galaxy S4 / Galaxy s3 / Galaxy S4 Zoom / Galaxy S4 Active / Galaxy S4 mini / Galaxy Mega 6.3 / Galaxy Mega 5.8 / Galaxy Note 10.1 (2014 Edition) / Galaxy NotePRO (12.2) / Galaxy TabPRO (12.2/10.1/8.4)<br>
          <span class="color">*</span>Compatible device models to be further expanded
          <br>
          <span class="color">*</span>Device compatibility may vary by country.</p>
        </div><!-- END container-->
      </div><!-- END ROW-->
      
  		<div id="buy" class="title_div"><h1 class="title">Now you can make your choice</h1></div>
  		<div class="row">
  			<div class="container">
	  			<div class="column float_left no_margin">
	  				<img class="img" src="photos/gear2neo/gear_black.png" alt="Black Gear 2neo">
	  			</div><!-- END Column -->

	  			<div class="column float_left center_title">
	  				<h2 class="column_title margin_top_48">You can have the black one from us</h2>
            <h3 class="column_title">for only <span class="logo_span color">250 euros</span></h3>
            <a href="thanks.php" class="big_button">I take it</a>
            <p class="accesories_small"><span class="color">*</span> Any additional straps are sold separately.</p>
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