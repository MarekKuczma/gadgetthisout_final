

<div class="row center_title">
	<div class="container">
			<?php
			include 'includes/widgets/user_count.php';
			?>
			<?php
			if (logged_in() === true) {
				include 'includes/widgets/loggedin.php';
			} else {
				include 'includes/widgets/login.php'; 
			}
			
			?>

		
	