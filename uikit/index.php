<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";
	require_once "inc/header.php";

?>

  	<div class="uk-section uk-container">
  		<?php
  			echo "<h3>Hello there! Today is: ";
  			echo date("l jS \of F, Y") . "</h3>";
  		?>
  		<p>
            <?php if(isLoggedIn()) : ?>
                <a class="uk-button uk-button-default" href="/uikit/logout.php">Logout</a>
            <?php else: ?>
                <a class="uk-button uk-button-default" href="/uikit/login.php">Login</a>
                <a class="uk-button uk-button-default" href="/uikit/register.php">Register</a>
            <?php endif; ?>
  		</p>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
