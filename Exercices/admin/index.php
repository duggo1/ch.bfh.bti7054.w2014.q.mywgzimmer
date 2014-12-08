<?php
include('login.php'); // Includes Login Script

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyWGZimmer-Administrator</title>
        <link rel="stylesheet" type="text/css" href="../mywgzimmer.css">
    </head>
    <body>
        <div id="Header">
            <a href="../index.php?link=home"><img id=logo src="../logo.png" alt="Home" title="Home"></a>
            <img id=logout src="../logout.png" alt="Logout" title="Logout" onclick="logout();">

        </div>
        <div id="Login">
            </br>
            <h1>
                Login
            </h1>
            <form action="" method="post">
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
                <input type="submit" name="submit" value=" Login ">
                <p><strong><?php if (isset($error)) {
    echo $error;
} ?></strong></p>
            </form>
        </div>
    </body>
</html>
