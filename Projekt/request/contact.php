<?php

if (isset($_POST['btnkontakt'])) {
    if (isset($_GET['insid'])) {
        $user_name = "root";
        $password = "root";
        $database = "mywgzimmerdb";
        $server = "localhost";

        $db_handle = mysql_connect($server, $user_name, $password);
        $db_found = mysql_select_db($database, $db_handle);
        $id = mysql_real_escape_string($_GET['insid']);
        $query = "SELECT Email FROM tblInserate WHERE ID = $id";
        $result = mysql_query($query) or die("Ungültige Abfrage");
        while ($db_field = mysql_fetch_assoc($result)) {
            $email = $db_field["Email"];
            $hasResult = true;
        }
        mysql_close($db_handle);
        
        $interessent = sanitizeString($_POST['interessent']);
        $message = sanitizeString($_POST['KontaktBeschreibung']);

        if ($hasResult) {
            $betreff = "Interesse an Inserat-Nr." . $id;
            $headers = "From: " . $interessent . "\r\n" . "Content-type: text/html; charset=UTF-8";
            $text = "Guten Tag, <br /> Dein Inserat ist auf Interesse gestossen:<br /><br />" . $message;
            $text .= "<br /><br /> Freundliche Grüsse <br /> Dein mywgzimmer.ch-Team";
            mail($email, $betreff, $text, $headers);
            $msg = urlencode("<h1>Super!</h1>Du hast dich erfolgreich beim Inserat-Nr." . $id . " beworben.");
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