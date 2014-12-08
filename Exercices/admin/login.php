<?php

session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Name oder Passwort ist ungültig!";
    } else {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $dbase = "mywgzimmerdb";

// To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
// Selecting Database
        $connection = mysql_connect('localhost', 'adminwg', 'admin');
        if ($conn) {
            $db = mysql_select_db($dbase);
            $query = mysql_query("select Name from tblLogin WHERE Name='$username'", $connection);
            $rows = mysql_num_rows($query);
            if ($rows == 1) {
                $_SESSION['login_user'] = $username; // Initializing Session
                header("location: admin.php"); // Redirecting To Other Page
            } else {
                $error = "Name oder Passwort leider ungültig!";
            }
            mysql_close($connection);
        } else
            $error = "Connection Error";
    }
}
?>
