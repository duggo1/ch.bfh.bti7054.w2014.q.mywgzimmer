<?php
// Inserat aktivieren
if (isset($_GET['id'])) {
    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";

    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);
    $id = mysql_real_escape_string($_GET['id']);
    $query = "UPDATE tblInserate SET active= 1 WHERE Link = '$id'";
    $result = mysql_query($query) or die("Ungültige Abfrage");
    $query = "SELECT * FROM tblInserate WHERE Link = '$id'";
    $result = mysql_query($query) or die("Ungültige Abfrage");
    while ($db_field = mysql_fetch_assoc($result)) {
        $email = $db_field["Email"];
        $hasResult = true;
        $insid = $db_field["ID"];
    }
    mysql_close($db_handle);

    if ($hasResult) {
    	// Wenn das Inserat aktiviert wurde, bekommt Inseratgeber ein Mail. Und in diesem Mail stehen 4 Linke 
    	//,um dieses Inserat zu erreichen zu bearbeiten zu l�schen und zu deaktivieren.
    	
        $betreff = "Inseratlinks";
        $headers = "From: MyWGzimmer.ch <help@mywgzimmer.ch>" . "\r\n" . "Content-type: text/html; charset=UTF-8";
        $text = "Guten Tag, <br /> Dein Inserat ist jetzt aktiv.<br /><br /> Hier ist der Link zu deinem Inserat: <br />
	http://localhost:8888/index.php?link=inserat&insid=" . $insid . "<br /><br /> Willst du es bearbeiten, klicke bitte auf folgenden Link: <br />
	http://localhost:8888/index.php?link=inserieren&id=" . $id . "<br /><br /> Willst du es deaktivieren, klicke bitte auf folgenden Link: <br />
	http://localhost:8888/request/deactivation.php?id=" . $id . "<br /><br />";
        $text = $text . "Willst du es löschen, klicke bitte auf folgenden Link: <br />
	http://localhost:8888/request/delete.php?id=" . $id . "<br /><br /> Freundliche Grüsse <br /> Dein mywgzimmer.ch-Team";
        mail($email, $betreff, $text, $headers);
        header("Location: ../index.php?link=inserat&insid=" . $insid);
    } else {
        $msg = urlencode("<h1>Bitte inserieren!</h1>Du hast zurzeit keine Inserate in unserer Datenbank.");
        header("Location: ../index.php?link=message&msg=" . $msg);
    }
    die();
} else {
    echo "Error";
}
?>