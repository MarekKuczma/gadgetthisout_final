<div class="container loggedin_container">
	<h2 class="column_title">Hello, <?php echo $user_data['first_name']; ?>!</h2>
	<div class="inner">
		<ul>
			<li class="li_loggedin">
				<a class="loggedin" href="logout.php">Log out</a>
			</li>
			<li class="li_loggedin">
				<a class="loggedin" href="<?php echo $user_data['username']; ?>">Profile</a>
			</li>
			<li class="li_loggedin">
				<a class="loggedin" href="changepassword.php">Change password</a>
			</li>
			<li class="li_loggedin">
				<a class="loggedin" href="settings.php">Settings</a>
			</li>
		</ul>
	</div>
</div>