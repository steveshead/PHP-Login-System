<?php

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php";

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		// header('Content-Type: application/json');

		$return = [];

		$firstname = $_POST['firstname'];
		$lastname  = $_POST['lastname'];
		$username  = $_POST['username'];
		$email 	   = Filter::String( $_POST['email'] );

		// Make sure the user does not exist.
		$user_found = User::Find($email);

		if($user_found) {
			// User exists
			// We can also check to see if they are able to log in.
			$return['error'] = "You already have an account";
			$return['is_logged_in'] = false;
		} else {
			// User does not exist, add them now.

			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$addUser = $con->prepare("INSERT INTO users(firstname, lastname, username, email, password) VALUES(:firstname, :lastname, :username, LOWER(:email), :password)");
			$addUser->bindParam(':firstname', $firstname, PDO::PARAM_STR);
			$addUser->bindParam(':lastname', $lastname, PDO::PARAM_STR);
			$addUser->bindParam(':username', $username, PDO::PARAM_STR);
			$addUser->bindParam(':email', $email, PDO::PARAM_STR);
			$addUser->bindParam(':password', $password, PDO::PARAM_STR);
			$addUser->execute();

			$user_id = $con->lastInsertId();

			$_SESSION['user_id'] = (int) $user_id;
			$_SESSION['firstname'] = $firstname;

			$return['redirect'] = '/uikit/dashboard.php?message=welcome';
			$return['is_logged_in'] = true;
		}

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('Invalid URL');
	}
?>
