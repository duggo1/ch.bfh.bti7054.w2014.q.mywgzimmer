<?php

function sanitizeString($var) {
    $var = stripslashes($var);
    $var = htmlentities($var);
    $var = strip_tags($var);
    return $var;
}


// Hilfe bekommen
if (isset($_GET['email'])) {
    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";

    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);
    $email = mysql_real_escape_string(sanitizeString($_GET['email']));
    $query = "SELECT * FROM `tblInserate` WHERE Email = '$email'";
    $result = mysql_query($query) or die("Ungültige Abfrage");
    $text = "Guten Tag, <br /> Du hast deine Links verloren...<br /><br />";
    
    while ($db_field = mysql_fetch_assoc($result)) {
        $id = $db_field["Link"];
        $insid = $db_field["ID"];
        $hasResult = true;
        $text .= "Hier ist der Link zu deinem Inserat-Nr " . $insid . ":<br />
	http://localhost:8888/index.php?link=inserat&insid=" . $insid . "<br /><br />
            Willst du es bearbeiten, klicke bitte auf folgenden Link: <br />
	http://localhost:8888/index.php?link=inserieren&id=" . $id . "<br /><br />
            Willst du es löschen, klicke bitte auf folgenden Link: <br />
	http://localhost:8888/request/delete.php?id=" . $id . "<br /><br /><br />";
    }
    mysql_close($db_handle);

    if ($hasResult) {
        // Wenn das Inserat aktiviert wurde, bekommt Inseratgeber ein Mail. Und in diesem Mail stehen 4 Linke 
        //,um dieses Inserat zu erreichen zu bearbeiten zu l�schen und zu deaktivieren.

        $betreff = "Inseratlinks";
        $headers = "From: MyWGzimmer.ch <help@mywgzimmer.ch>" . "\r\n" . "Content-type: text/html; charset=UTF-8";
        $text .= "Freundliche Grüsse <br /> Dein mywgzimmer.ch-Team";
        mail($email, $betreff, $text, $headers);
        $msg = urlencode("<h1>E-Mail geschickt!</h1>Die Links wurden an deine E-Mail-Adresse geschickt.");
        header("Location: ../index.php?link=message&msg=" . $msg);
    } else {
        $msg = urlencode("<h1>Bitte inserieren!</h1>Du hast zurzeit keine Inserate in unserer Datenbank.");
        header("Location: ../index.php?link=message&msg=" . $msg);
    }
    die();
} else {
    echo "Error";
}
?>