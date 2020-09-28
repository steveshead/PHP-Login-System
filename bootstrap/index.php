<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";
	require_once "inc/header.php";

?>

  	<div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <?php
                echo "<h3>Hello there! Today is: ";
                echo date("l jS \of F, Y") . "</h3>";
                ?>
                <p class="mt-3">
                    <?php if(isLoggedIn()) : ?>
                        <a class="btn btn-lg btn-outline-secondary" href="/bootstrap/logout.php">Logout</a>
                    <?php else: ?>
                        <a class="btn btn-lg btn-outline-secondary" href="/bootstrap/login.php">Login</a>
                        <a class="btn btn-lg btn-outline-secondary" href="/bootstrap/register.php">Register</a>
                    <?php endif; ?>
                </p>
            </div>
        </div>
    </div>


  	<?php require_once "inc/footer.php"; ?>
