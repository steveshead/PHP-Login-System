<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";
	require_once "inc/header.php";

	Page::ForceDashboard();
?>

  	<div class="container mt-5">
  		<div class="row">
            <div class="col-md-6">
                <form class="form js-login">

                    <h2>Login</h2>

                    <div class="form-group">
                        <label for="email">Email</label>
                            <input class="form-control" id="email" type="email" required='required' placeholder="email@email.com">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                            <input class="form-control" id="password" type="password" required='required' placeholder="Your Password">
                    </div>

                    <div class="alert alert-danger js-error" style='display: none;'></div>

                    <div class="form-group">
                        <button class="btn btn-lg btn-outline-secondary" type="submit">Login</button>
                    </div>

                </form>
            </div>

  		</div>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
