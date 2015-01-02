<?php

if (isset($_GET['id'])) {
    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";
    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);
    $id = mysql_real_escape_string($_GET['id']);
    $query = "UPDATE tblInserate SET active= 0 WHERE Link = '$id'";
    $result = mysql_query($query) or die("Ungültige Abfrage");
    mysql_close($db_handle);
    $msg = urlencode("<h1>Inserat deaktiviert!</h1>Du hast dein Inserat nun deaktiviert.");
    header("Location: ../index.php?link=message&msg=" . $msg);
    die();
} else {
    echo "Error";
}
?>