<?php

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";
	require_once "inc/header.php";

	ForceLogin();

	$user_id = $_SESSION['user_id'];

	$getUserInfo = $con->prepare("SELECT email, reg_time FROM users WHERE user_id = :user_id LIMIT 1");
	$getUserInfo->bindParam(':user_id', $user_id, PDO::PARAM_INT);
	$getUserInfo->execute();

	if($getUserInfo->rowCount() ==1) {
	    // User was found
        $User = $getUserInfo->fetch(PDO::FETCH_ASSOC);

    } else {
	    // User is not signed in
	    header('Location: logout.php');
	    exit;
    }

?>

  	<div class="uk-section uk-container">
  		<h3>Hello <?php echo $User['email']; ?>.  You registered at <?php echo $User['reg_time']; ?></h3>
        <a class="uk-button uk-button-default" href="logout.php">Logout</a>
  	</div>

  	<?php require_once "inc/footer.php"; ?>
