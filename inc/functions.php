<?php

// Force the user to be logged in, or redirect.
function ForceLogin() {
	if(isset($_SESSION['user_id'])) {
		// The user is allowed here
	} else {
		// The user is not allowed here.
		header("Location: /login.php"); exit;
	}
}

function ForceDashboard() {
	if(isset($_SESSION['user_id'])) {
		// The user is allowed here but redirect anyway
		header("Location: /dashboard.php"); exit;
	} else {
		// The user is not allowed here.
	}
}

function FindUser($con, $email, $return_assoc = false) {
    $email = (string) Filter::String($email);
    // Make sure the user does not exist.
    $findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
    $findUser->execute();

    if($return_assoc) {
        return $findUser->fetch(PDO::FETCH_ASSOC);
    }

    $user_found = (boolean) $findUser->rowCount();
    return $user_found;
}

?>
