<?php
    // Redirect to login page if not logged in
    function forceLogin() {
        if (isset($_SESSION['user_id'])) {
            // The user is allowed to access this page.
        } else {
            //  The user is not allowed to access this page.
            header('Location: login.php');
            exit;
        }
    }

    // Redirect to dashboard page if logged in
    function forceDashboard() {
        if (isset($_SESSION['user_id'])) {
            // The user is allowed to access this page.
            header('Location: dashboard.php');
        } else {
            exit;
        }
    }
