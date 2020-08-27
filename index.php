<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";
	require_once "inc/header.php";

?>

  	<div class="uk-section uk-container">
  		<?php
  			echo "Hello world. Today is: ";
  			echo date("M d, Y");
  		?>
        <br>
  		<p>
  			<a class="uk-button uk-button-default" href="/login.php">Login</a>
  			<a class="uk-button uk-button-default" href="/register.php">Register</a>
  		</p>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
