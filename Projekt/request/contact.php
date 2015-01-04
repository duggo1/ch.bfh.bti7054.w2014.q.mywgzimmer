<?php

// Wenn ein Besucher irgendein Inserat interesiert, wird das Bewerbungsmail von hier geschickt.
if (isset($_POST['btnkontakt'])) {
    if (isset($_GET['insid'])) {
        $user_name = "root";
        $password = "root";
        $database = "mywgzimmerdb";
        $server = "localhost";

        $db_handle = mysql_connect($server, $user_name, $password);
        $db_found = mysql_select_db($database, $db_handle);
        $insid = mysql_real_escape_string($_GET['insid']);
        $query = "SELECT * FROM tblInserate WHERE ID = $insid";
        $result = mysql_query($query) or die("Ungültige Abfrage");
        while ($db_field = mysql_fetch_assoc($result)) {
            $email = $db_field["Email"];
            $id = $db_field["Link"];
            $hasResult = true;
        }
        mysql_close($db_handle);

        $interessent = sanitizeString($_POST['interessent']);
        $message = sanitizeString($_POST['KontaktBeschreibung']);

        if ($hasResult) {
            $betreff = "Interesse an Inserat-Nr." . $insid;
            $headers = "From: " . $interessent . "\r\n" . "Content-type: text/html; charset=UTF-8";
            $text = "Guten Tag, <br /> Dein Inserat ist auf Interesse gestossen:$interessent\"<br /><br />" . $message;
            $text .= "\"<br /><br />Hier ist der Link zu deinem Inserat-Nr " . $insid . ":<br />
	http://localhost:8888/index.php?link=inserat&insid=" . $insid . "<br /><br />
            Willst du es bearbeiten, klicke bitte auf folgenden Link: <br />
	http://localhost:8888/index.php?link=inserieren&id=" . $id . "<br /><br />
            Willst du es löschen, klicke bitte auf folgenden Link: <br />
	http://localhost:8888/request/delete.php?id=" . $id . "<br /><br /><br />";
            $text .= "<br /><br /> Freundliche Grüsse <br /> Dein mywgzimmer.ch-Team";
            mail($email, $betreff, $text, $headers);
            $msg = urlencode("<h1>Super!</h1>Du hast dich erfolgreich beim Inserat-Nr." . $insid . " beworben.");
            header("Location: ../index.php?link=message&msg=" . $msg);
        } else {
            $msg = urlencode("<h1>Bitte inserieren!</h1>Du hast zurzeit keine Inserate in unserer Datenbank.");
            header("Location: ../index.php?link=message&msg=" . $msg);
        }
        die();
    }
} else {
    echo "Error";
}

function sanitizeString($var) {
    $var = stripslashes($var);
    $var = htmlentities($var);
    $var = strip_tags($var);
    return $var;
}

?>