<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";
	require_once "inc/header.php";

	Page::ForceLogin();

	$User = new User($_SESSION['user_id']);

?>

  	<div class="container mt-5">
  		<h3 class="mb-0">Hello and welcome <?php echo $User->firstname; ?>.</h3>
			<h5 class="mt-3">You registered on <?php echo date('l, jS \of F, Y \a\t h:i A', strtotime($User->reg_time)); ?></h5>
        <p>Below are your user details.</p>

        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped" style="border:1px solid #eee;">
                    <tbody>
                        <tr>
                            <th>First Name</th>
                            <td><?php echo $User->firstname; ?></td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td><?php echo $User->lastname; ?></td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td><?php echo $User->username; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $User->email; ?></td>
                        </tr>
                        <tr>
                            <th>Date Registered</th>
                            <td><?php echo date('jS \of F, Y', strtotime($User->reg_time)); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <a class="btn btn-outline-secondary" href="/bootstrap/logout.php">Logout</a>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
