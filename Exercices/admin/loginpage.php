<?php

function loginpage() {

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
                <input type="submit" name="submit" value=" Login " class="button">';
    if (isset($_GET["error"])) {
        $output = $output . '<p><strong>' . urldecode($_GET["error"]) . '</strong></p>';
    }
    echo $output . '</form></div>';
}
?>
