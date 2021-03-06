<?php
//użycie funkcji na początku
ob_start(); 
include 'core/init.php';
protect_page();

if (empty($_POST) === false) {
	$required_fields = array('current_password', 'password', 'password_again');
	foreach ($_POST as $key => $value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Fields marked with an asterisk are required';
			break 1;
		}
	}

	if (md5($_POST['current_password']) === $user_data['password']) {
		if (trim($_POST['password']) !== trim($_POST['password_again'])) {
			$errors[] = 'Your new passwords do not match';
		} else if (strlen($_POST['password']) < 6) {
			$errors[] = 'Your password must be at least 6 characters';
		}
	} else {
		$errors[] = 'Your current password is incorrect';
	}
}
?>
<?php
//include 'includes/overall/header.php'; 
?>
<!doctype html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="content">

        <?php include 'includes/aside.php'; ?>
        </div><!--end aside container-->
		<div class="container margin_top">
			<h2 class="column_title">You need to change your password ?</h2>

			<?php
			if (isset($_GET['success']) && empty($_GET['success'])) {
				?>
					<p>Here you are, your password has been changed.</p>
					</div><!-- div container error-->
					</div><!-- div row error-->
				<?php
			} else {


				if (empty($_POST) === false && empty($errors) === true) {
					change_password($session_user_id, $_POST['password']);
					header('Location: changepassword.php?success');
				} else if (empty($errors) === false) {
					echo output_errors($errors);
				}
				//...i na koścu
			ob_end_flush();
			?>

			<form action="" method="post">
				<ul>
					<li>
						Current password*:<br>
						<input type="password" name="current_password">
					</li>
					<li>
						New password*:<br>
						<input type="password" name="password">
					</li>
					<li>
						New password again*:<br>
						<input type="password" name="password_again">
					</li>
					<li>
						<input type="submit" value="Change Password">
					</li>
				</ul>
			</form>
		</div><!-- END container-->
</div><!-- END ROW-->
<?php 
	}
include 'includes/overall/footer.php'; ?>