<?php

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		// header('Content-Type: application/json');

		$return = [];

		$email = Filter::String( $_POST['email'] );
		$password = $_POST['password'];

		// Make sure the user does not exist.
		$user_found = User::Find($email, true);

		if($user_found) {
			// User exists, try and sign them in

			$user_id = (int) $user_found['user_id'];
			$username = (string) $user_found['username'];
			$hash = (string) $user_found['password'];

			if(password_verify($password, $hash)) {
				// User is signed in
				$return['redirect'] = '/uikit/dashboard.php';

				$_SESSION['user_id'] = $user_id;
				$_SESSION['username'] = $username;
			} else {
				// Invalid user email/password combo
				$return['error'] = "Invalid user email/password combo";
			}

		} else {
			// They need to create a new account
			$return['error'] = "You do not have an account. <a href='/uikit/register.php'>Create one now?</a>";
		}

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('Invalid URL');
	}
?>
