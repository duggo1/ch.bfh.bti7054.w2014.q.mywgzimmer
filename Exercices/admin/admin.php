<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyWGZimmer-Administrator</title>
        <link rel="stylesheet" type="text/css" href="../mywgzimmer.css">
    </head>
    <body>
        <div id="Header">
            <a href="../index.php?link=home"><img id=logo src="../logo.png" alt="Home"
                                                  title="Home"></a>
            <a href="?log=out"><img id=help src="../logout.png"
                                    alt="Logout" title="Logout"></a>
        </div>
            <div id="admin">
                </br>
                <h1>
                    Inserate
                </h1>
                <p>
                    alle Inserate hier
                </p>
                    <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
                    <b id="logout"><a href="logout.php">Log Out</a></b>
                <p><strong><?php if (isset($error)) {
    echo $error;
} ?></strong></p>
            </div>
    </body>
</html>



