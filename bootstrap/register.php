<?php
include_once 'inc/header.php';

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";

	Page::ForceDashboard();
?>


  	<div class="container mt-5">
  		<div class="row">
            <div class="col-md-6">
                <form class="uk-form-stacked js-register" method="post" action="ajax/register.php">

                    <h2>Register</h2>

                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input class="form-control" type="text" name="firstname" id="firstname" required='required' placeholder="First Name">
                    </div>

                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                            <input class="form-control" type="text" name="lastname" id="lastname" required='required' placeholder="Last Name">
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                            <input class="form-control" type="text" name="username" id="username" required='required' placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                            <input class="form-control" type="email" required='required' placeholder="email@email.com">
                    </div>

                    <div class="form-group">
                        <label for="password">Passphrase</label>
                            <input class="form-control" type="password" required='required' placeholder="Your passphrase">
                    </div>

                    <div class="alert alert-danger js-error" style='display: none;'></div>

                    <div class="form-group">
                        <button class="btn btn-lg btn-outline-secondary" type="submit">Register</button>
                    </div>

                </form>
            </div>

  		</div>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
