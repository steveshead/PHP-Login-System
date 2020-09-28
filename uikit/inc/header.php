<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">
    <link rel="stylesheet" href="/uikit/assets/css/style.css">

    <title>PHP & Ajax Login and Registration System</title>

    <base href="/" />
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />
</head>

<nav class="uk-navbar-container uk-navbar-secondary" uk-navbar>
    <div class="uk-navbar-left">
        <a href="index.php" class="uk-navbar-item uk-logo">PHP LOGIN</a>
        <ul class="uk-navbar-nav">
            <?php if (isset($_SESSION['user_id'])) : ?>
                <li class="uk-parent"><a href="/uikit/dashboard.php">Dashboard</a></li>
            <?php else: ?>
                <li class="uk-parent"><a href="/uikit/login.php">Login</a></li>
                <li class="uk-parent"><a href="/uikit/register.php">Register</a></li>
            <?php endif; ?>
        </ul>
    </div>

    <?php if (isset($_SESSION['user_id'])) : ?>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                    <li class="uk-parent"><a href="/uikit/logout.php">Logout</a></li>
            </ul>
        </div>
    <?php endif; ?>

</nav>

<body>
    <div id="page-wrapper">
