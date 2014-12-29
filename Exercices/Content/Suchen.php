<?php

function suchen() {
    ?>
    <h1>WG-Zimmer suchen</h1>
    <form name="Suchen" >
        Ich bin (weiblich <input id="BINgeschlecht" name="geschlecht" type="radio" value="f">  
        / männlich <input id="BINgeschlecht" name="geschlecht" type="radio" value="m">)
        und ich bin <input id="BINalter" type="number" min="13" max="99">
        Jahre alt.</br>
        Ich suche (ein Zimmer <input id="SUCHart" name="SUCHradioZimmerArt" type="radio" value="z"> 
        / ein Studio <input id="SUCHart" name="SUCHradioZimmerArt" type="radio" value="s">)
        zwischen <input id="SUCHminFlaeche" type="number" min="13" max="99">
        und <input id="SUCHmaxFlaeche" type="number" min="13" max="99"> 
        Quadratmetern,</br>
        welches pro Monat zwischen <input id="SUCHminMiete" type="number"> 
        und <input id="SUCHmaxMiete" type="number">
        Franken kostet.</br>
        Mit Einzugsdatum (ab sofort / ab dem 
        <input type="date" value="<?php echo date("d" + 2) . "." . date("m") . "." . date("Y"); ?>"
               id="SUCHAbDatum" style="width: 100px" />) und 
        (unbefristet / bis am <input type="date" value="<?php echo date("d" + 2) . "." . date("m") . "." . date("Y"); ?>"
                                     id="SUCHBisDatum" style="width: 100px" />).</br>
        In einer (Frauen-WG <input id="SUCHgeschlecht" name="SUCHgeschlecht" type="radio" value="f">  
        / Männer-WG <input id="SUCHgeschlecht" name="SUCHgeschlecht" type="radio" value="m"> 
        / gemischten WG <input id="SUCHgeschlecht" name="SUCHgeschlecht" type="radio" value="x">)
        mit Durchschnittsalter zwischen <input id="SUCHminAlter" type="number" min="13" max="99"> 
        und <input id="SUCHmaxAlter" type="number" min="13" max="99">
        Jahren.</br>
        <table>
            <tr>
                <td  id="search">
                    <input id="btnSuchen" type="submit" value='Suchen' >
                    <input id="btnFilterAus" type="submit" value ="Filter zurücksetzen">
                </td>
            </tr>
        </table>
    </form>

    <?php
    drawtable();
}

function drawtable() {

    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";

    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);

    $SQL = "SELECT * FROM tblInserate";
    $result = mysql_query($SQL) or die("Ungültige Abfrage");
    if ($db_found) {
        $inserattable = '<h1>aktuelle Inserate</h1><form action="delete.php" method="post"><table><thead><tr><th></th><th>ID</th><th>Aktivierung</th><th>Erstellungsdatum</th><th>Strasse</th><th>PLZ</th><th>Ort</th><th>E-Mail</th><th>Einzugsdatum</th></tr></thead><tbody>';
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
        echo $inserattable . '</tbody></table></br></form>';
        mysqli_close($db_handle);
    } else {
        echo "Datenbank nicht verbindbar!";
        mysqli_close($db_handle);
    }
}
?>