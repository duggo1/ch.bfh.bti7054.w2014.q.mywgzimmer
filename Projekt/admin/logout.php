<?php

session_start();
session_unset($_SESSION['login_user']);
if (session_destroy()) { // Destroying All Sessions
    //$_SESSION = array();

    
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
        );
    }
    
    header("Location: ../index.php?link=home"); // Redirecting To Home Page
} else {
    $error = "die Session wurde nicht zerstört!";
}
$_SESSION ['error'] = $error;
?>