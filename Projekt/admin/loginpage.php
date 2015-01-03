<?php
function loginpage() {

	if (isset ( $_SESSION ['error'] )) {
		$error = $_SESSION ['error']; // Variable To Store Error Message
	}
	// Hier erstellt 2 Felder, um Adminpasswort und Adminname einzugeben.
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
                <input id="btnlogin" type="submit" class="button" name="submit" value=" Login " >';
	if (isset ( $error )) {
		$output = $output . '<p class="error">' . $error . '</p>';
	}
	echo $output . '</form></div>';
}
?>
