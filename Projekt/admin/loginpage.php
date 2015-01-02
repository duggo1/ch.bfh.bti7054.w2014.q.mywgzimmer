<?php

function loginpage() {
session_start();
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];  // Variable To Store Error Message
}
    $output = '<div id="Login">
            <h1>
                Login
            </h1>
            <form action="login.php" method="post">
                <p>
                    <label for = "username">Name</label>
                </p>
                <p>
                    <input id="name" type="text" name="username" value="">
                </p>
                <p>
                    <label for = "password">Passwort</label>
                </p>
                <p>
                    <input id="password" type="password" name="password" value="">
                </p>
                <input id="btnlogin" type="submit" name="submit" value=" Login " >';
    if (isset($error)) {
        $output = $output . '<p class="error">' . $error . '</p>';
    }
    echo $output . '</form></div>';
}
?>
