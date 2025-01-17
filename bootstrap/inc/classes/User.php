<?php

// If there is no constant defined called __CONFIG__, do not load this file
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}

class User {

	private $con;

	public $firstname;
	public $lastname;
	public $username;
	public $user_id;
	public $email;
	public $reg_time;

	public function __construct(int $user_id) {
		$this->con = DB::getConnection();
		$this->con;

		$user = $this->con->prepare("SELECT firstname, lastname, username, user_id, email, reg_time FROM users WHERE user_id = :user_id LIMIT 1");
		$user->bindParam(':user_id', $user_id, PDO::PARAM_INT);
		$user->execute();

		if($user->rowCount() == 1) {
			$user = $user->fetch(PDO::FETCH_OBJ);

			$this->firstname = (string) $user->firstname;
			$this->lastname = (string) $user->lastname;
			$this->username = (string) $user->username;
			$this->email 	= (string) $user->email;
			$this->user_id  = (int) $user->user_id;
			$this->reg_time = (string) $user->reg_time;

		} else {
			// Redirect to logout
			header('Location: /bootstrap/logout.php');
			exit;
		}
	}

	public static function Find($email, $return_assoc = false) {
		$con = DB::getConnection();
		$email = (string) Filter::String($email);
		// Make sure the user does not exist.
		$findUser = $con->prepare("SELECT firstname, lastname, username, user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();

		if($return_assoc) {
			return $findUser->fetch(PDO::FETCH_ASSOC);
		}

		$user_found = (boolean) $findUser->rowCount();
		return $user_found;
	}
}

?>
