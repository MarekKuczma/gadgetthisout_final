<?php
//użycie funkcji na początku
ob_start();
include 'core/init.php';
protect_page();
include 'includes/overall/header.php';

if (empty($_POST) === false) {
	$required_fields = array('first_name', 'email');
	foreach ($_POST as $key => $value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Fields marked with an asterisk are required';
			break 1;
		}
	}

	if (empty($errors) === true) {
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'A valid email address is required.';
		} else if (email_exists($_POST['email']) === true && $user_data['email'] !== $_POST['email']) {
			$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use.';
		}
	}
}

?>
<!-- ROBIE ZMIANE -->
		<div class="container margin_top">
		<h2 class="column_title">You need to change few details ?</h2>
		<?php
		if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
			?>
					<p>Here you are, your details have been updated!.</p>
					</div><!-- div container error-->
					</div><!-- div container error-->
					</div><!-- div last row error-->
				<?php
		} else {
				if (empty($_POST) === false && empty($errors) === true) {
					// update user details
					$update_data = array(
						'first_name' 	=> $_POST['first_name'],
						'last_name' 	=> $_POST['last_name'],
						'email' 		=> $_POST['email']

					);

					update_user($update_data);
					header('Location: settings.php?success');
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
						<label for="first_name">First name<span class="color">*</span>:</label>
						<input type="text" name="first_name" value="<?php echo $user_data['first_name']; ?>">
					</li>
					<li>
						<label for="last_name">Last name :</label>
						<input type="text" name="last_name" value="<?php echo $user_data['last_name']; ?>">
					</li>
					<li>
						<label for="email">Email<span class="color">*</span>:</label>
						<input type="text" name="email" value="<?php echo $user_data['email']; ?>">
					</li>
					<li>
						<input type="submit" value="Update">
					</li>
				</ul>
			</form>
		</div><!-- END Column -->
	</div><!-- END container-->
</div><!-- END ROW-->

	<?php
}
include 'includes/overall/footer.php'; 
?>