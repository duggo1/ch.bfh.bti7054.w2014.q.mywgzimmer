<?php

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "root");
// Selecting Database
$database = mysql_select_db("mywgzimmerdb", $connection);
session_start(); // Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql = mysql_query("select Name from tblLogin where Name='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['Name'];
if (!isset($login_session)) {
    mysql_close($connection); // Closing Connection
    header('Location: index.html'); // Redirecting To Home Page
}
?>
