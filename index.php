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
  			echo date("M d, Y") . "</h3>";
  		?>
  		<p>
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a class="uk-button uk-button-default" href="/logout.php">Logout</a>
            <?php else: ?>
                <a class="uk-button uk-button-default" href="/login.php">Login</a>
                <a class="uk-button uk-button-default" href="/register.php">Register</a>
            <?php endif; ?>
  		</p>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
