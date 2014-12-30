<?php

function suchen() {
    ?>
    <h1>WG-Zimmer suchen</h1>
    <form name="Suchen">
        Ich bin (weiblich <input id="BINgeschlechtf" name="geschlecht" type="radio" value="f">  
        / männlich <input id="BINgeschlechtm" name="geschlecht" type="radio" value="m">)
        und ich bin <input id="BINalter" name="alter" type="number" min="13" max="99">
        Jahre alt.</br>
        Ich suche ein (Zimmer <input id="SUCHart" name="art" type="radio" value=0> 
        / Studio <input id="SUCHart" name="art" type="radio" value=1>)
        im Ort <input id="SUCHort" name="ort" type="text">.</br>
        Mit einer Wohnfläche zwischen <input id="SUCHminFlaeche" name="m2min" type="number">
        und <input id="SUCHmaxFlaeche" name="m2max" type="number"> 
        Quadratmetern.</br>
        Mit einem monatlichen Mietzins zwischen <input id="SUCHminMiete" name="mietemin" type="number"> 
        und <input id="SUCHmaxMiete" name="mietemax" type="number">
        Franken.</br>
        Mit Einzugsdatum (ab sofort / ab dem 
        <input type="date" id="SUCHAbDatum" name="einzug">) und 
        (unbefristet / bis am <input type="date" id="SUCHBisDatum" name="auszug">).</br>
        In einer (Frauen-WG <input id="SUCHgeschlecht" name="SUCHgeschlecht" type="radio" value="f">  
        / Männer-WG <input id="SUCHgeschlecht" name="SUCHgeschlecht" type="radio" value="m"> 
        / gemischten WG <input id="SUCHgeschlecht" name="SUCHgeschlecht" type="radio" value="x">)
        mit Durchschnittsalter zwischen <input id="SUCHminAlter" type="number" min="13" max="99" name="altermin"> 
        und <input id="SUCHmaxAlter" type="number" min="13" max="99" name="altermax">
        Jahren.</br>
        <table>
            <tr>
                <td  id="search">
                    <input id="btnFiltern" name = "filtern" type="submit" value="Suchen" class="button"/>
                    <input id="btnFilterAus" name = "zurucksetzen" type="submit" value ="Filter zurücksetzen"/>
                </td>
            </tr>
        </table>
    </form>

    <?php
    drawtable();
}

function sanitizeString($var) {
    $var = stripslashes($var);
    $var = htmlentities($var);
    $var = strip_tags($var);
    return $var;
}

function drawtable() {

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
            $query = $query . "AND Minimumalter <= " . $_POST["alter"] . "AND Maximumalter >= " . $_POST["alter"];
        }
        if (isset($_POST["art"])) {
            $query = $query . "AND Studio = " . $_POST["art"];
        }
        if (isset($_POST["ort"])) {
            $query = $query . "AND Ort = '" . sanitizeString($_POST["art"]) . "'";
        }
        if (isset($_POST["m2min"])) {
            $query = $query . "AND Quadratmeter >= " . sanitizeString($_POST["m2min"]);
        }
        if (isset($_POST["m2max"])) {
            $query = $query . "AND Quadratmeter <= " . sanitizeString($_POST["m2max"]);
        }
        if (isset($_POST["mietemin"])) {
            $query = $query . "AND Mietzins >= " . sanitizeString($_POST["mietemin"]);
        }
        if (isset($_POST["mietemax"])) {
            $query = $query . "AND Mietzins <= " . sanitizeString($_POST["mietemax"]);
        }
        if (isset($_POST["einzug"])) {
            $query = $query . "AND AbDatum <= '" . $_POST["einzug"]->format('d-m-Y') . "'";
        }
        if (isset($_POST["auszug"])) {
            $query = $query . "AND BisDatum >= '" . $_POST["auszug"]->format('d-m-Y') . "'";
        }
        if (isset($_POST["geschlecht"])) {
            $query = $query . "AND (ISTGeschlecht = '" . $_POST["SUCHgeschlecht"] . "'";
        }
        if (isset($_POST["altermin"])) {
            $query = $query . "AND IstGeschlecht >= " . $_POST["altermin"];
        }
        if (isset($_POST["altermax"])) {
            $query = $query . "AND IstGeschlecht <= " . $_POST["altermax"];
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
}
?>