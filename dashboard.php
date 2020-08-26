<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";
	require_once "inc/header.php";

	ForceLogin();

?>

  	<div class="uk-section uk-container">
  		Dashboard here; you are signed in as user: <?php echo $_SESSION['user_id']; ?>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
  </body>
</html>
