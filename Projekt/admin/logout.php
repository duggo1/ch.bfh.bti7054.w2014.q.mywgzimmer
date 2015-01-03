<?php
session_start ();

if (session_destroy ()) { // Destroying All Sessions
	header ( "Location: ../index.php?link=home" ); // Redirecting To Home Page
} else {
	$error = "die Session wurde nicht zerstört!";
}
$_SESSION ['error'] = $error;
?>