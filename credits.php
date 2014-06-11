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
          <li class="nav_li"><a class="nav_a" href="index.php">Show me this week's gadget</a></li>
        </ul>
      </div>
    </div>
    
  </div><!-- END Header-->

  <div class="content">

  		<div class="big_title">
  			<h1>GadgetThisOut Credits</h1>
      </div><!-- END big title-->

      <div class="row">
  			<div class="container">
          <p class="credits_p bold">Thanks to</p>
          <p class="credits_p">Mr.Bourgaux</p>
          <p class="credits_p">My family</p>
          <p class="credits_p">My friends</p>
          <p class="credits_p"><a class="credits_a" target="blanc" href="https://phpacademy.org">phpacademy.org</a></p>
          <p class="credits_p"><a class="credits_a" target="blanc" href="http://iconmonstr.com/">iconmonstr.com</a></p>
          <p class="credits_p"><a class="credits_a" target="blanc" href="http://stackoverflow.com/">stackoverflow.com</a></p>
          <p class="credits_p"><a class="credits_a" target="blanc" href="http://phpedia.pl/wiki/Strona_g%C5%82%C3%B3wna">phpedia.pl</a></p>   
          <p class="credits_p"><a class="credits_a" target="blanc" href="http://www.google.com/fonts/specimen/Quicksand">Quicksand Font</a></p>
          <p class="credits_p"><a class="credits_a" target="blanc" href="http://www.webdesignerdepot.com/2013/03/how-to-create-a-resizing-menu-bar/">How to create a resizing menu bar</a></p>

          <p class="credits_p bold">Images</p>
          <p class="credits_p"><a class="credits_a" target="blanc" href="http://www.samsung.com/be_fr/">samsung.com</a></p>
          <p class="credits_p"><a class="credits_a" target="blanc" href="http://www.netatmo.com/en-US/site">netatmo.com</a></p>
          <p class="credits_p"><a class="credits_a" target="blanc" href="https://dribbble.com/shots/1114707-FREE-PSDs-iGravertical-Screen-Layers-iOS-7-Screen-Converter">Balraj Chana FREE PSDs - iGravertical Screen Layers</a></p>
          <p class="credits_p"><a class="credits_a" target="blanc" href="https://play.google.com/store/apps/details?id=com.netatmo.netatmo">Google Play</a></p>
          <p class="credits_p"><a class="credits_a" target="blanc" href="https://itunes.apple.com/us/app/netatmo-weather-station/id532538499?ls=1&mt=8">App Store</a></p>
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