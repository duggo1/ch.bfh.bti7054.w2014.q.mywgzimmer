<?php

if (isset($_GET['id'])) {
	//Hier wird das Inserat gelöscht. Hier ist für löschenlink und Löschenfunktion für Admin.
    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";

    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);
    $id = mysql_real_escape_string($_GET['id']);
    $query = "DELETE FROM tblInserate WHERE Link = '$id'";
    $result = mysql_query($query) or die("UngÃ¼ltige Abfrage");
    mysql_close($db_handle);

    $msg = urlencode("<h1>Inserat gelÃ¶scht!</h1>Du hast dein Inserat gelÃ¶scht.");
    header("Location: ../index.php?link=message&msg=" . $msg);

    die();
} else {
    echo "Error";
}
?>