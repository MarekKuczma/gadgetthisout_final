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
  				<li class="nav_li"><a class="nav_a" href="#what">Description</a></li>
  				<li class="nav_li"><a class="nav_a" href="#box">The Box</a></li>
  				<li class="nav_li"><a class="nav_a" href="#use">Usage</a></li>
  				<li class="nav_li"><a class="nav_a" href="#more">Accessories</a></li>
  				<li class="nav_li"><a class="nav_a" href="#buy">I need one</a></li>
  			</ul>
  		</div>
  	</div>
    
  </div><!-- END Header-->

  <div class="content">

  		<div class="big_title margin_top">
  			<h1>Nice, one more step please...</h1>
  		</div><!-- END big title-->
  		<div class="row">
        <h2 class="column_title center_title margin_top">Now, you will be redirected to the payment page.</h2>
        <h2 class="column_title center_title">Thank you, and see you soon.</h2>
  		</div><!-- END ROW-->

  </div><!-- END Content-->

	<div class="footer">
  		<p class="copyright">© 2014 Marek Kuczma. All rights reserved<br><a class="footer_a" href="http://gadgetthisout.eu/credits.php">credits</a></p>
	</div><!-- END Footer-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/myquery.js"></script>
</body>
</html>