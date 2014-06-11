<?php
	function email($to, $subject, $body) {
		mail($to, $subject, $body, 'From: hello@gadgetthisout.eu');
	}

	function logged_in_redirect() {
		if (logged_in() === true) {
			header('Location: account.php');
			exit();
		}
	}

	function protect_page() {
		if (logged_in() === false) {
			header('Location: sorry.php');
			exit();
		}
	}

	function array_sanitize(&$item) {
		$item = htmlentities(strip_tags(mysql_real_escape_string($item)));
	}

	function sanitize($data) {
		return htmlentities(strip_tags(mysql_real_escape_string($data)));
	}

	function output_errors($errors){
		return '<ul><li class="errors">' . implode('</li><li class="errors">', $errors) . '</li></ul>';
	}

	function green_dot() {
		if (logged_in() === true) {
			echo " <div class='button green_test' title='Logged in'></div>";
		}else{
			echo " <div class='button red_test' title='Logged out'></div>";
		}
	}	
?>
