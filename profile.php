<?php 
include 'core/init.php';

protect_page();
include 'includes/overall/header.php';
?>
<div class="row row_two">
	<div class="container">
<?php
if (isset($_GET['username']) === true && empty($_GET['username']) === false) {
	$username = $_GET['username'];

	if (user_exists($username) === true) {
	
		$user_id = user_id_from_username($username);
		$profile_data = user_data($user_id, 'first_name', 'last_name', 'email');
	?>

		<div class="big_title big_title_two">
  			<h1>What you bought until now ...</h1>
  		</div><!-- END big title-->
  				<div class="row"><!-- row special -->
  				
  				<div class="column float_left">
	  			  	<h1 class="column_title">Samsung Gear 2neo</h1>
	  			  	<a class="gadgetthisout" href="index.php">gadget this out</a>
	  				<img class="img_for_profile" src="photos/gear2neo/gear_black_small.png" alt="Black Gear 2neo">
	  			</div><!-- END Column -->

	  			<div class="column float_left no_margin">
	  				<h1 class="column_title"><span class="netatmo">net<span class="logo_span">atmo</span></span> Weather Station</h1>
	  				<a class="gadgetthisout" href="netatmo.php">gadget this out</a>
	  				<img class="img_for_profile" src="photos/netatmo/netatmo_1.png" alt="netatmo box">
	  			</div><!-- END Column -->

	  			</div><!-- end row special -->

	  			</div>
		</div>
	<?php
	} else {
		//echo 'Sorry, that user doesn\'t exist !';
		header('Location: 404.php');
		exit();
	}

} else {
	header('Location: account.php');
	exit();
}
?>
	</div><!-- END container-->
</div><!-- END ROW-->
<?php
include 'includes/overall/footer.php'; ?>