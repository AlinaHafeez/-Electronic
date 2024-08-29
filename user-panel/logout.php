<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['userEmail'])) {
    // Destroy the session and redirect to the sign-in page
    session_destroy();
    header('Location: signin.php');
    exit;
}
?>
