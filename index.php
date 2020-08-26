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
  			echo date("Y m d");
  		?>
  		<p>
  			<a href="/login.php">Login</a>
  			<a href="/register.php">Register</a>
  		</p>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
  </body>
</html>
