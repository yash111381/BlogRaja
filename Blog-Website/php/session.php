<?php
	session_start();
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) {
		// last request was more than 30 minutes ago
		session_unset();     // unset $_SESSION variable for the run-time 
		session_destroy();   // destroy session data in storage
		header("Location: ../login.php");
		die();
	}
else{
	$_SESSION['LAST_ACTIVITY'] = time();	
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>