<!DOCTYPE html>
<html>
<body>

<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: ../pages/login.php");
exit;
?>

</body>
</html>