<?php

$user_name = "root";
$password = "root";
$database = "mywgzimmerdb";
$server = "localhost";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);
$hasResult = false;

if (isset($_GET['email'])) {
    $email = mysql_real_escape_string($_GET['email']);
    $query = "SELECT 'Link' FROM `tblInserate` WHERE 'Email' = '$email'";
    $result = mysql_query($query) or die("Ungültige Abfrage");
    while ($db_field = mysql_fetch_assoc($result)) {
        $id = $db_field["Link"];
        $betreff = "Inserat-Hilfe";
        $from = "From: MyWGzimmer.ch <cagdascbu@hotmail.com>";
        $text = "Guten Tag \n Willst du dein Inserat bearbeiten, klicke bitte auf folgenden Link: \n
	http://localhost:8888/index.php?link=inserieren&id=" . $id . "\n";
        $text = $text . "Willst du es deaktivieren, klicke bitte auf folgenden Link: \n
	http://localhost:8888/request/deactivation.php?id=" . $id . "\n";
        $text = $text . "Willst du es löschen, klicke bitte auf folgenden Link: \n
	http://localhost:8888/request/delete.php?id=" . $id . "\n Freundliche Grüsse, \n Dein mywgzimmer.ch-Team";

        $hasResult = true;
    }
    mysql_close($db_handle);

    if (!$hasResult) {
        $betreff = "Inserat-Hilfe";
        $from = "From: MyWGzimmer.ch <help@mywgzimmer.ch>";
        $text = "Guten Tag \n Du hast zurzeit keine Inserate in unserer Datenbank. \n Freundliche Grüsse, \n Dein mywgzimmer.ch-Team";
    }
    mail($email, $betreff, $text, $from);
    header("Location: ../index.html");

    die();
} else {
    echo "Error";
}
?>