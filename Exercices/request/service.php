<?php

session_start();

// Tab_1 von Inserat-----------------------------
$insBewohnerGeschlecht = (isset($_POST ["ISTgeschlecht"])) ? $_POST ["ISTgeschlecht"] : "";
$insBewohnerAlter = (isset($_POST ["ISTalter"])) ? $_POST ["ISTalter"] : "";
$insBewohnerBeschreibung = (isset($_POST ["bewohnerBeschreibung"])) ? $_POST ["bewohnerBeschreibung"] : "";

// Tab_2 von Inserat-----------------------------
$insWohnungStr = (isset($_POST ["insZimmerStr"])) ? $_POST ["insZimmerStr"] : "";
$insWohnungHausNr = (isset($_POST ["insZimmerStrNr"])) ? $_POST ["insZimmerStrNr"] : "";
$insWohnungZusatzNr = (isset($_POST ["insZimmerZusatzNr"])) ? $_POST ["insZimmerZusatzNr"] : "";
$insWohnungOrt = (isset($_POST ["insZimmerOrt"])) ? $_POST ["insZimmerOrt"] : "";
$insWohnungPlz = (isset($_POST ["insZimmerPlz"])) ? $_POST ["insZimmerPlz"] : "";

$insWohnungEinZug = (isset($_POST ["insMitAbDatum"])) ? $_POST ["insMitAbDatum"] : "";
$insWohnungAusZug = (isset($_POST ["insMitBisDatum"])) ? $_POST ["insMitBisDatum"] : "";
$insWohnungkosten = (isset($_POST ["insMitkosten"])) ? $_POST ["insMitkosten"] : "";

// Tab_3 von Inserat----------------------------
$insZimmerTyp = (isset($_POST ["insZimmerTyp"])) ? $_POST ["insZimmerTyp"] : "";
$insZimmerFlaeche = (isset($_POST ["insFlaeche"])) ? $_POST ["insFlaeche"] : "";
$insZimmerBeschreibung = (isset($_POST ["insZimmerBeschreibung"])) ? $_POST ["insZimmerBeschreibung"] : "";

$insFoto1 = (isset($_POST ["insFoto1"])) ? $_POST ["insFoto1"] : "";
$insFoto2 = (isset($_POST ["insFoto2"])) ? $_POST ["insFoto2"] : "";
$insFoto3 = (isset($_POST ["insFoto3"])) ? $_POST ["insFoto3"] : "";

// Tab_4 von Inserat-----------------------------
$insGesuchtSex = (isset($_POST ["SOLLgeschlecht"])) ? $_POST ["SOLLgeschlecht"] : "";
$insGesuchtMinAlter = (isset($_POST ["SOLLminAlter"])) ? $_POST ["SOLLminAlter"] : "";
$insGesuchtMaxAlter = (isset($_POST ["SOLLmaxAlter"])) ? $_POST ["SOLLmaxAlter"] : "";
$insGesuchtBeschreibung = (isset($_POST ["gesuchtBeschreibung"])) ? $_POST ["gesuchtBeschreibung"] : "";

// Tab_5 von Inserat
$insBestaetigungEmail = (isset($_POST ["email"])) ? $_POST ["email"] : "";
$insBestaetigungEmailWieder = (isset($_POST ["wiederemail"])) ? $_POST ["wiederemail"] : "";
$insBestaetigungAGB = (isset($_POST ["agbsakzeptiert"])) ? $_POST ["agbsakzeptiert"] : "";

// Suchen-----------------------------------------
// Ich bin
$suchGeschlecht = isset($_POST ["geschlecht"]) ? $_POST ["geschlecht"] : "";
$suchAlter = isset($_POST ["alter"]) ? $_POST ["alter"] : "";

// Ich suche
$suchWGgeschlecht = (isset($_POST ["SUCHgeschlecht"])) ? $_POST ["SUCHgeschlecht"] : "";
$suchWGminAlter = (isset($_POST ["SUCHminAlter"])) ? $_POST ["SUCHminAlter"] : "";
$suchWGmaxAlter = (isset($_POST ["SUCHmaxAlter"])) ? $_POST ["SUCHmaxAlter"] : "";
$suchWGZimmerArt = (isset($_POST ["art"])) ? $_POST ["art"] : "";
$suchWGabDatum = (isset($_POST ["SUCHAbDatum"])) ? $_POST ["SUCHAbDatum"] : "";
$suchWGbisDatum = (isset($_POST ["SUCHBisDatum"])) ? $_POST ["SUCHBisDatum"] : "";
$suchWGminflaeche = (isset($_POST ["SUCHminFlaeche"])) ? sanitizeString($_POST ["SUCHminFlaeche"]) : "";
$suchWGmaxflaeche = (isset($_POST ["SUCHmaxFlaeche"])) ? sanitizeString($_POST ["SUCHmaxFlaeche"]) : "";
$suchWGminKost = (isset($_POST ["SUCHminMiete"])) ? sanitizeString($_POST ["SUCHminMiete"]) : "";
$suchWGmaxKost = (isset($_POST ["SUCHmaxMiete"])) ? sanitizeString($_POST ["SUCHmaxMiete"]) : "";
$suchWGort = (isset($_POST ["SUCHort"])) ? sanitizeString($_POST ["SUCHort"]) : "";


$what = (isset($_POST ["what"])) ? $_POST ["what"] : "";

function sanitizeString($var) {
    $var = stripslashes($var);
    $var = htmlentities($var);
    $var = strip_tags($var);
    return $var;
}

function drawtable() {

    /*
    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";

    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);

    if ($what == "suchen") {
        $query = "SELECT * FROM tblInserate WHERE ";

        if ($suchGeschlecht != "") {
            $query = $query . "(SollGeschlecht = '" . $suchGeschlecht . "' OR SollGeschlecht = 'x')";
        }
        if ($suchAlter != "") {
            $query = $query . " AND Minimumalter <= " . $suchAlter . "AND Maximumalter >= " . $suchAlter;
        }
        if ($suchWGZimmerArt != "") {
            $query = $query . " AND Studio = " . $suchWGZimmerArt;
        }
        if ($suchWGort != "") {
            $query = $query . " AND Ort = '" . $suchWGort . "'";
        }
        if ($suchWGminflaeche != "") {
            $query = $query . " AND Quadratmeter >= " . $suchWGminflaeche;
        }
        if ($suchWGmaxflaeche != "") {
            $query = $query . " AND Quadratmeter <= " . $suchWGmaxflaeche;
        }
        if ($suchWGminKost != "") {
            $query = $query . " AND Mietzins >= " . $suchWGminKost;
        }
        if ($suchWGmaxKost != "") {
            $query = $query . "AND Mietzins <= " . $suchWGmaxKost;
        }
        if ($suchWGabDatum != "") {
            $query = $query . " AND AbDatum <= '" . $suchWGabDatum->format('d-m-Y') . "'";
        }
        if ($suchWGbisDatum != "") {
            $query = $query . " AND BisDatum >= '" . $suchWGbisDatum->format('d-m-Y') . "'";
        }
        if ($suchWGgeschlecht != "") {
            $query = $query . " AND (ISTGeschlecht = '" . $suchWGgeschlecht . "'";
        }
        if ($suchWGmaxAlter != "") {
            $query = $query . " AND Durchscnittsalter <= " . $suchWGmaxAlter;
        }
        if ($suchWGminAlter != "") {
            $query = $query . " AND Durchscnittsalter >= " . $suchWGminAlter;
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
        $inserattable = $inserattable . '</tbody></table></br></form>';
        echo $inserattable;
        mysqli_close($db_handle);
    } else {
        echo "Datenbank nicht verbindbar!";
        mysqli_close($db_handle);
    }
     */

    echo "what = " . $what;
    echo " geschlecht = " .$suchgeschlecht;
    echo " wggeschlecht = " .$suchWGgeschlecht;
    echo " minalter = " .$suchWGminAlter;
    echo " WGmaxAlter = " .$suchWGmaxAlter;
    echo " ZimmerArt = " .$suchWGZimmerArt;
    echo " abDatum = " .$suchWGabDatum;
    echo " WGbisDatum = " .$suchWGbisDatum;
    echo " minflaeche = " .$suchWGminflaeche;
    echo " maxflaeche = " .$suchWGmaxflaeche;
    echo " WGminKost = " .$suchWGminKost;
    echo " WGminKost = " .$suchWGmaxKost;
    echo " WGort = " .$suchWGort;
}

if ($what == "inserierenTab1") {

    echo "true";
}
if ($what == "inserierenTab2") {
    echo "true";
}
if ($what == "inserierenTab3") {
    echo "true";
}
if ($what == "inserierenTab4") {
    echo "true";
}
if ($what == "inserierenTab5") {

    // if(strlen($insWohnungEinZug) > 0 )
    // {
    // $tmpEinzugdatum = explode(".",$insWohnungEinZug);
    // $insWohnungEinZug = $tmpEinzugdatum[0] . "-". $tmpEinzugdatum[1] . "-". $tmpEinzugdatum[2] ;
    // }
    // if(strlen($insWohnungAusZug) > 0 )
    // {
    // $tmpAuszugdatum = explode(".",$insWohnungAusZug);
    // $insWohnungAusZug = $tmpAuszugdatum[0] . "-". $tmpAuszugdatum[1] . "-". $tmpAuszugdatum[2] ;
    // }
    // $tmpRes = Inserat_speichern();
    // if( isset($tmpRes))
    // echo "true";
    // else {
    // echo "false";
    // }



    echo "true";
}

if ($what == "suchen") {

    drawtable();
}

if ($what == "userbearbeiten") {
    
}














