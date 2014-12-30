<?php 
    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";

    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);

    $query = "SELECT * FROM tblInserate ";

    if (isset($_POST["suche"])) {
        $query = "SELECT * FROM tblInserate WHERE ";

        if (isset($_POST["geschlecht"])) {
            $query = $query . "(SollGeschlecht = '" . $_POST["geschlecht"] . "' OR SollGeschlecht = 'x')";
        }
        if (isset($_POST["alter"])) {
            $query = $query . " AND Minimumalter <= " . $_POST["alter"] . "AND Maximumalter >= " . $_POST["alter"];
        }
        if (isset($_POST["art"])) {
            $query = $query . " AND Studio = " . $_POST["art"];
        }
        if (isset($_POST["ort"])) {
            $query = $query . " AND Ort = '" . sanitizeString($_POST["art"]) . "'";
        }
        if (isset($_POST["m2min"])) {
            $query = $query . " AND Quadratmeter >= " . sanitizeString($_POST["m2min"]);
        }
        if (isset($_POST["m2max"])) {
            $query = $query . " AND Quadratmeter <= " . sanitizeString($_POST["m2max"]);
        }
        if (isset($_POST["mietemin"])) {
            $query = $query . " AND Mietzins >= " . sanitizeString($_POST["mietemin"]);
        }
        if (isset($_POST["mietemax"])) {
            $query = $query . "AND Mietzins <= " . sanitizeString($_POST["mietemax"]);
        }
        if (isset($_POST["einzug"])) {
            $query = $query . " AND AbDatum <= '" . $_POST["einzug"]->format('d-m-Y') . "'";
        }
        if (isset($_POST["auszug"])) {
            $query = $query . " AND BisDatum >= '" . $_POST["auszug"]->format('d-m-Y') . "'";
        }
        if (isset($_POST["geschlecht"])) {
            $query = $query . " AND (ISTGeschlecht = '" . $_POST["SUCHgeschlecht"] . "'";
        }
        if (isset($_POST["altermin"])) {
            $query = $query . " AND IstGeschlecht >= " . $_POST["altermin"];
        }
        if (isset($_POST["altermax"])) {
            $query = $query . " AND IstGeschlecht <= " . $_POST["altermax"];
        }
    } else {
        $query = "SELECT * FROM tblInserate";
    }
    $result = mysql_query($query) or die("Ungültige Abfrage");
    if ($db_found) {
        $inserattable = '<h1>aktuelle Inserate</h1><table><thead><tr><th>Art</th><th>Fläche</th><th>Strasse</th><th>PLZ</th><th>Ort</th><th>Verfügbar ab</th><th>Befristet bis</th><th>Mietzins</th><th>Bild</th></tr></thead><tbody>';
        while ($db_field = mysql_fetch_assoc($result)) {
            $inserattable = $inserattable . '<tr class="admintable"><td>' . $db_field['Studio'] . '</td>';
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['Quadratmeter'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['Strasse'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['PLZ'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['Ort'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['Mietzins'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['Ab'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['Bis'];
            $inserattable = $inserattable . "</td><td>";
            $inserattable = $inserattable . $db_field['ImagePath1'] . "</td></tr>";
        }
        echo $inserattable . '</tbody></table></br></form>';
        mysqli_close($db_handle);
    } else {
        echo "Datenbank nicht verbindbar!";
        mysqli_close($db_handle);
    }
?>