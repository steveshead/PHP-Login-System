<?php
include_once 'inc/header.php';

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";

	Page::ForceDashboard();
?>


  	<div class="uk-section uk-container">
  		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1">
			<form class="uk-form-stacked js-register" method="post" action="ajax/register.php">

				<h2>Register</h2>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">First Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="firstname" id="firstname" required='required' placeholder="First Name">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Last Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="lastname" id="lastname" required='required' placeholder="Last Name">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Username</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="username" id="username" required='required' placeholder="Username">
                    </div>
                </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" type="email" required='required' placeholder="email@email.com">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Passphrase</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" type="password" required='required' placeholder="Your passphrase">
			        </div>
			    </div>

			    <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none;'></div>

			    <div class="uk-margin">
			        <button class="uk-button uk-button-default" type="submit">Register</button>
			    </div>

			</form>
  		</div>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
