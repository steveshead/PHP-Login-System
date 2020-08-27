<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";
	require_once "inc/header.php";

	Page::ForceLogin();

	$User = new User($_SESSION['user_id']);

?>

  	<div class="uk-section uk-container">
  		<h3>Hello <?php echo $User->email; ?>.  You registered at <?php echo $User->reg_time; ?></h3>
        <a class="uk-button uk-button-default" href="logout.php">Logout</a>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
