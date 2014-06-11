<?php
//użycie funkcji na początku
ob_start();
include 'core/init.php';
logged_in_redirect();

if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'You need to enter a username and a password';
	} else if (user_exists($username) === false) {
		$errors[] = 'We can\'t find that username... Have you registered?';
	} else if (user_active($username) === false) {
		$errors[] = 'You haven\'t activated your account!';
	} else {
		$login = login($username, $password);
		if ($login === false) {
			$errors[] = 'That username/password combination is incorrect';
		} else {

			if (strlen($password) > 32) {
				$errors[] = 'Password too long';
			}

			// set the user session
			$_SESSION['user_id'] = $login;
			// redirect user to account ROBIE ZMIANE
			header('Location: account.php');
			exit();
		}
	}
} else {
	//$errors[] = 'No data received.';
	$errors[] = 'Sorry, this trick will not work here.';
}
include 'includes/overall/header.php';

if (empty($errors) === false) {
?>
<div class="container">
	  				
	<h2 class="column_title">We tried to log you in, but...</h2>
<?php
	echo output_errors($errors);
}
?>

	  			</div><!-- END container -->
	  		</div><!-- END container-->
  		</div><!-- END ROW-->
  		<?php
include 'includes/overall/footer.php';
//...i na koścu
ob_end_flush();
?>
