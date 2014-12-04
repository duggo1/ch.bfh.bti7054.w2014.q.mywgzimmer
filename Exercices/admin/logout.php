<?php

session_start();

function logout() {
    if (session_destroy()) { // Destroying All Sessions
        header("Location: ../index.php"); // Redirecting To Home Page
    }
}

?>