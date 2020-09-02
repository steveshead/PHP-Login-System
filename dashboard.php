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
  		<h3 style="margin-bottom:0 !important">Hello and welcome <?php echo $User->email; ?>.</h3>
			<h5 style="margin-top:5px">You registered on <?php echo date('l jS \of F Y h:i:s A', strtotime($User->reg_time)); ?></h5>
        <a class="uk-button uk-button-default" href="logout.php">Logout</a>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
