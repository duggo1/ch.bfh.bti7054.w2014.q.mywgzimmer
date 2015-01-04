<?php

if (isset($_GET['id'])) {
    //Hier wird das Inserat gel�scht. Hier ist f�r l�schenlink und L�schenfunktion f�r Admin.
    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";

    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);
    $id = mysql_real_escape_string($_GET['id']);

    //Fotos löschen
    $query = "SELECT * FROM tblInserate WHERE Link = '$id'";
    $result = mysql_query($query) or die("Ungültige Abfrage");
    while ($db_field = mysql_fetch_assoc($result)) {
        $foto1 = "../uploads/" . $db_field["ImageID1"];
        $foto2 = "../uploads/" . $db_field["ImageID2"];
        $foto3 = "../uploads/" . $db_field["ImageID3"];
    }
    if ($foto1 != '') {
        unlink($foto1);
    }
    if ($foto2 != '') {
        unlink($foto2);
    }
    if ($foto3 != '') {
        unlink($foto3);
    }

    $query = "DELETE FROM tblInserate WHERE Link = '$id'";
    $result = mysql_query($query) or die("Ungültige Abfrage");
    mysql_close($db_handle);

    $msg = urlencode("<h1>Inserat gelöscht!</h1>Du hast dein Inserat gelöscht.");
    header("Location: ../index.php?link=message&msg=" . $msg);

    die();
} else {
    echo "Error";
}
?>