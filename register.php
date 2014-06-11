<?php
//użycie funkcji na początku
ob_start();
include 'core/init.php';
logged_in_redirect();


if (empty($_POST) === false) {
	$required_fields = array('username', 'password', 'password_again', 'first_name', 'email');
	foreach ($_POST as $key => $value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Fields marked with an asterisk are required';
			break 1;
		}
	}
	if (empty($errors) === true) {
		if (user_exists($_POST['username'])) {
			$errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' is already taken.';
		}
		if (preg_match("/\\s/", $_POST['username']) == true) {
			$errors[] = 'Your username must not contain any spaces.';
		}
		if (strlen($_POST['password']) < 6) {
			$errors[] = 'Your password must be at least 6 characters';
		}
		if ($_POST['password'] !== $_POST['password_again']) {
			$errors[] = 'Your passwords do not match';
		}
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'A valid email address is required.';
		}
		if (email_exists($_POST['email']) === true) {
			$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use.';
		}
	}
}

?>
<!doctype html>
<html lang="en">
<?php include 'includes/head.php'; ?>
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
	  				<li class="nav_li"><a class="nav_a" href="index.html">Show me this week's gadget</a></li>
	  			</ul>
	  		</div>
  		</div>
  	</div><!-- END Header-->

    <div class="content center_title">
    	<div class="row">
			<div class="container">
				
					<?php
						if (isset($_GET['success']) && empty($_GET['success'])) {
							?>
							<div class="register_ok">
								<p>Great ! You've been registered successfully !</p>
								<p>Now, one more step left...</p>
								<p>Please check your email to activate your account.</p>
							</div>
							<?php
						} else {

							if (empty($_POST) === false && empty($errors) === true) {
								$register_data = array(
									'username' 		=> $_POST['username'],
									'password' 		=> $_POST['password'],
									'first_name' 	=> $_POST['first_name'],
									'last_name' 	=> $_POST['last_name'],
									'email' 		=> $_POST['email'],
									'email_code'	=> md5($_POST['username'] + microtime())
								);

								register_user($register_data);
								header('Location: register.php?success');
								exit();

							} else if (empty($errors) === false){
								echo output_errors($errors);
							}
					//...i na koścu
					ob_end_flush();
					?>

					<form action="" method="post">
						<ul>
							<li>
								<label for="username">Username<span class="color">*</span>:</label>
								<input type="text" name="username">
							</li>
							<li>
								<label for="password">Password<span class="color">*</span>:</label>
								<input type="password" name="password">
							</li>
							<li>
								<label for="password_again">Password again<span class="color">*</span>:</label>
								<input type="password" name="password_again">
							</li>
							<li>
								<label for="first_name">First name<span class="color">*</span>:</label>
								<input type="text" name="first_name">
							</li>
							<li>
								<label for="last_name">Last name:</label>
								<input type="text" name="last_name">
							</li>
							<li>
								<label for="email">Email<span class="color">*</span>:</label>
								<input type="text" name="email">
							</li>
							<li>
								<input type="submit" value="Register">
							</li>
						</ul>
					</form>

					<?php 
					}
					?>
			</div><!-- END container-->
		</div><!-- END ROW-->
	<?php
include 'includes/overall/footer.php'; ?>