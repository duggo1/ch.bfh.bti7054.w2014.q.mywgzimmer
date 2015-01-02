<?php

function inserat() {
    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";

    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);

    if (isset($_GET['insid'])) {
        $id = mysql_real_escape_string($_GET['insid']);
        $query = "SELECT * FROM tblInserate WHERE ID = $id";
        $result = mysql_query($query) or die("Ungültige Abfrage");
        while ($db_field = mysql_fetch_assoc($result)) {
            if ($db_field ['Studio'] == 1) {
                $art = "Studio";
            } else {
                $art = "Zimmer";
            }
            $strasse = $db_field ['Strasse'];
            $strnr = $db_field ['Hausnummer'];
            $whgnr = $db_field ['Wohnungszusatz'];
            $plz = $db_field ['PLZ'];
            $ort = $db_field ['Ort'];
            $m2r = $db_field ['Quadratmeter'];
            if ($db_field ['IstGeschlecht'] == 'f') {
                $geschlecht = "eine Frauen-WG";
            } elseif ($db_field ['IstGeschlecht'] == 'm') {
                $geschlecht = "eine Männer-WG";
            } else {
                $geschlecht = "eine gemischte WG";
            }
            $alter = $db_field ['Durchschnittsalter'];
            $Zimmer = $db_field ['Zimmerbeschreibung'];
            $Bewohner = $db_field ['Bewohnerbeschreibung'];
            $Person = $db_field ['Personenbeschreibung'];
            $ab = $db_field ['AbDatum'];
            if ($db_field ['BisDatum'] == "30.12.9999") {
                $bis = "unbefristet";
                $befristet = false;
            } else {
                $bis = $db_field ['BisDatum'];
                $befristet = true;
            }
            $miete = $db_field ['Mietzins'];
            $foto1 = (isset($db_field ['ImageID1'])) ? ("<img class='preview' src='request/showImage.php?image='" . $db_field ['ImageID1'] . "'>") : "";
            $foto2 = (isset($db_field ['ImageID2'])) ? ("<img class='preview' src='request/showImage.php?image='" . $db_field ['ImageID2'] . "'>") : "";
            $foto3 = (isset($db_field ['ImageID3'])) ? ("<img class='preview' src='request/showImage.php?image='". $db_field ['ImageID3'] . "'>") : "";
            //$foto3 = (isset($db_field ['ImageID3'])) ? ("<img class='preview' src='images/holz1.jpg'" . $db_field ['ImageID3'] . "'>") : "";
            //$foto2 = (isset($db_field ['ImageID3'])) ? ("<img class='preview' src='images/holz.jpg'" . $db_field ['ImageID3'] . "'>") : "";
            //$foto1 = (isset($db_field ['ImageID3'])) ? ("<img class='preview' src='images/suche.png'" . $db_field ['ImageID3'] . "'>") : "";
        }
        mysql_close($db_handle);
        ?>
        <h1>
            Inserat-Nr. <?php
            echo $id;
            if ($befristet) {
                echo "<br />(Ab dem: " . $ab . ", bis zum: " . $bis . ")";
            } else {
                echo "<br />(Ab dem: " . $ab . ")";
            }
            ?>
        </h1>
        <h2>
        <?php echo "<a href='https://www.google.ch/maps/search/" . $strasse . "+" . $strnr . "+" . $whgnr . ",+" . $plz . "+" . $ort . "'>" . $strasse . " " . $strnr . " " . $whgnr . ", " . $plz . " " . $ort . "</a>"; ?>
        </h2>
        <h2>
            Wen wir suchen
        </h2>
        <div>
        <?php echo $Person; ?>
        </div>
        <h2>
            Wer wir sind
        </h2>
        <div>
            Wir sind 
            <?php echo $geschlecht; ?>
            mit einem Durchschnittsalter von
        <?php echo $alter; ?>
            Jahren.
            <h3>
                Über uns
            </h3>
                <?php echo $Bewohner; ?>
            <h2>Das 
            <?php echo $art; ?></h2>
            Das 
            <?php echo $art; ?>
            ist
        <?php echo $m2; ?>
            Quadratmeter gross.
            Es kostet 
        <?php echo $miete; ?>
            Fr. pro Monat.
            <h3>
                Über das Zimmer
            </h3>
        <?php echo $Zimmer; ?>
            <h2>
                Fotos
            </h2>

            <?php echo $foto1;
            echo $foto2;
            echo $foto3;
            ?>
        </div>
<h2>
    Kontaktaufnahme
</h2>
<form id="kontakt">
<table>
    <tr>
        <td>
            <input id="btnfoto2" value="zweites Foto hochladen" name="btnfoto2" type="button">
        </td>
          
    </tr>
</table>
</form>
        <?php
    } else {
        echo "Error";
    }
}
?>
