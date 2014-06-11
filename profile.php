<?php 
include 'core/init.php';
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
  				<div class="row">
  				<div class="title_div title_div_two"><h1 class="title title_two">netatmo</h1></div>
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
	  			</div>

	  			<div class="row">
  				<div class="title_div title_div_two"><h1 class="title title_two">netatmo</h1></div>
	  			<div class="column float_right">
	  				<img class="img" src="photos/netatmo/netatmo_1.png" alt="netatmo box">
	  			</div><!-- END Column -->

	  			<div class="column float_right no_margin">
	  				<h2 class="column_title">Weather Station</h2>
	  				<h3 class="column_small_title">For Smartphones and Tablets</h3>
	  				<p>This is the weather station by <span class="netatmo">netatmo.</span><br>   
					This is a really easy and simple way to control you indoor temperature, relative humidity and CO2 readings.</p> 

					<p>You will be also able to know the weather conditions like temperature, air quality or even barometric pressure by using the Outdoor Module.</p>
	  			</div><!-- END Column -->
	  			</div>
		</div>
	<?php
	} else {
		echo 'Sorry, that user doesn\'t exist !';
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