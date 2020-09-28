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
  		<h3 style="margin-bottom:0 !important">Hello and welcome <?php echo $User->firstname; ?>.</h3>
			<h5 style="margin-top:5px">You registered on <?php echo date('l, jS \of F, Y \a\t h:i A', strtotime($User->reg_time)); ?></h5>
        <p>Below are your user details.</p>

        <div class="uk-grid">
            <div class="uk-overflow-auto">
                <table class="uk-table uk-table-small uk-table-striped" style="border:1px solid #eee;">
                    <tbody>
                        <tr>
                            <th class="uk-width-small">First Name</th>
                            <td><?php echo $User->firstname; ?></td>
                        </tr>
                        <tr>
                            <th class="uk-width-small">Last Name</th>
                            <td><?php echo $User->lastname; ?></td>
                        </tr>
                        <tr>
                            <th class="uk-width-small">Username</th>
                            <td><?php echo $User->username; ?></td>
                        </tr>
                        <tr>
                            <th class="uk-width-small">Email</th>
                            <td><?php echo $User->email; ?></td>
                        </tr>
                        <tr>
                            <th class="uk-width-small">Date Registered</th>
                            <td><?php echo date('jS \of F, Y', strtotime($User->reg_time)); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <a class="uk-button uk-button-default uk-margin" href="/uikit/logout.php">Logout</a>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
