<?php

function admin() {
    include('session.php');
//connection information

    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";

    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);

    $SQL = "SELECT * FROM tblInserate";
    $result = mysql_query($SQL) or die("Ungültige Abfrage");
    if ($db_found) {
        $inserattable = '<h1>Inserate</h1><form action="delete.php" method="post"><table><thead><tr><th></th><th>ID</th><th>Aktivierung</th><th>Erstellungsdatum</th><th>Strasse</th><th>PLZ</th><th>Ort</th><th>E-Mail</th><th>Einzugsdatum</th></tr></thead><tbody>';
        while ($db_field = mysql_fetch_assoc($result)) {
            $inserattable = $inserattable . '<tr class="admintable"><td><input type="checkbox" name="checkbox[' . $db_field['ID'] . ']"/>';
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['ID'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['active'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['Erstellungsdatum'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['Strasse'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['PLZ'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['Ort'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['Email'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['AbDatum'] . "</td></tr>";
        }
        echo $inserattable . '</tbody></table></br><input type="submit" name="delete" value="Löschen" class="button"/></form>';
        mysqli_close($db_handle);
    } else {
        echo "Datenbank nicht verbindbar!";
        mysqli_close($db_handle);
    }
}

?>