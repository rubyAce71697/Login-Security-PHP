<?php
	require_once('sesstart.php');
	sec_session_start();
// Unset all session values
	unset($_SESSION);// = array();
// get session parameters 
$params = session_get_cookie_params();
// Delete the actual cookie.
setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
// Destroy session
//unset(session_id);
session_unset();
session_destroy();
header('Location:crookbook.php');

?> 