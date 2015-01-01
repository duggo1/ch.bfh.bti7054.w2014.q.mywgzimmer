<?php

// session_start();

// Tab_1 von Inserat-----------------------------
$insBewohnerGeschlecht = (isset ( $_POST ["ISTgeschlecht"] )) ? $_POST ["ISTgeschlecht"] : "";
$insBewohnerAlter = (isset ( $_POST ["ISTalter"] )) ? $_POST ["ISTalter"] : "";
$insBewohnerBeschreibung = (isset ( $_POST ["bewohnerBeschreibung"] )) ? $_POST ["bewohnerBeschreibung"] : "";

// Tab_2 von Inserat-----------------------------
$insWohnungStr = (isset ( $_POST ["insZimmerStr"] )) ? $_POST ["insZimmerStr"] : "";
$insWohnungHausNr = (isset ( $_POST ["insZimmerStrNr"] )) ? $_POST ["insZimmerStrNr"] : "";
$insWohnungZusatzNr = (isset ( $_POST ["insZimmerZusatzNr"] )) ? $_POST ["insZimmerZusatzNr"] : "";
$insWohnungOrt = (isset ( $_POST ["insZimmerOrt"] )) ? $_POST ["insZimmerOrt"] : "";
$insWohnungPlz = (isset ( $_POST ["insZimmerPlz"] )) ? $_POST ["insZimmerPlz"] : "";

$insWohnungEinZug = (isset ( $_POST ["insMitAbDatum"] )) ? $_POST ["insMitAbDatum"] : "";
$insWohnungAusZug = (isset ( $_POST ["insMitBisDatum"] )) ? $_POST ["insMitBisDatum"] : "";
$insWohnungkosten = (isset ( $_POST ["insMitkosten"] )) ? $_POST ["insMitkosten"] : "";

// Tab_3 von Inserat----------------------------
$insZimmerTyp = (isset ( $_POST ["insZimmerTyp"] )) ? $_POST ["insZimmerTyp"] : "";
$insZimmerFlaeche = (isset ( $_POST ["insFlaeche"] )) ? $_POST ["insFlaeche"] : "";
$insZimmerBeschreibung = (isset ( $_POST ["insZimmerBeschreibung"] )) ? $_POST ["insZimmerBeschreibung"] : "";

$insFoto1 = (isset ( $_POST ["insFoto1"] )) ? $_POST ["insFoto1"] : "";
$insFoto2 = (isset ( $_POST ["insFoto2"] )) ? $_POST ["insFoto2"] : "";
$insFoto3 = (isset ( $_POST ["insFoto3"] )) ? $_POST ["insFoto3"] : "";

// Tab_4 von Inserat-----------------------------
$insGesuchtSex = (isset ( $_POST ["SOLLgeschlecht"] )) ? $_POST ["SOLLgeschlecht"] : "";
$insGesuchtMinAlter = (isset ( $_POST ["SOLLminAlter"] )) ? $_POST ["SOLLminAlter"] : "";
$insGesuchtMaxAlter = (isset ( $_POST ["SOLLmaxAlter"] )) ? $_POST ["SOLLmaxAlter"] : "";
$insGesuchtBeschreibung = (isset ( $_POST ["gesuchtBeschreibung"] )) ? $_POST ["gesuchtBeschreibung"] : "";

// Tab_5 von Inserat
$insBestaetigungEmail = (isset ( $_POST ["email"] )) ? $_POST ["email"] : "";
$insBestaetigungEmailWieder = (isset ( $_POST ["wiederemail"] )) ? $_POST ["wiederemail"] : "";
$insBestaetigungAGB = (isset ( $_POST ["agbsakzeptiert"] )) ? $_POST ["agbsakzeptiert"] : "";

// Suchen-----------------------------------------
// Ich bin
$suchGeschlecht = (isset ( $_POST ["suchGeschlecht"] )) ? $_POST ["suchGeschlecht"] : "";
$suchAlter = (isset ( $_POST ["suchAlter"] )) ? $_POST ["suchAlter"] : "";

// Ich suche
$suchWGgeschlecht = (isset ( $_POST ["suchWGgeschlecht"] )) ? $_POST ["suchWGgeschlecht"] : "";
$suchWGminAlter = (isset ( $_POST ["suchWGminAlter"] )) ? $_POST ["suchWGminAlter"] : "";
$suchWGmaxAlter = (isset ( $_POST ["suchWGmaxAlter"] )) ? $_POST ["suchWGmaxAlter"] : "";
$suchWGZimmerArt = (isset ( $_POST ["suchWGZimmerArt"] )) ? $_POST ["suchWGZimmerArt"] : "";
$suchWGabDatum = (isset ( $_POST ["suchWGabDatum"] )) ? $_POST ["suchWGabDatum"] : "";
$suchWGbisDatum = (isset ( $_POST ["suchWGbisDatum"] )) ? $_POST ["suchWGbisDatum"] : "";
$suchWGminflaeche = (isset ( $_POST ["suchWGminflaeche"] )) ? sanitizeString ( $_POST ["suchWGminflaeche"] ) : "";
$suchWGmaxflaeche = (isset ( $_POST ["suchWGmaxflaeche"] )) ? sanitizeString ( $_POST ["suchWGmaxflaeche"] ) : "";
$suchWGminKost = (isset ( $_POST ["suchWGminKost"] )) ? sanitizeString ( $_POST ["suchWGminKost"] ) : "";
$suchWGmaxKost = (isset ( $_POST ["suchWGmaxKost"] )) ? sanitizeString ( $_POST ["suchWGmaxKost"] ) : "";
$suchWGort = (isset ( $_POST ["suchWGort"] )) ? sanitizeString ( $_POST ["suchWGort"] ) : "";

$what = (isset ( $_POST ["what"] )) ? $_POST ["what"] : "";
function sanitizeString($var) {
	$var = stripslashes ( $var );
	$var = htmlentities ( $var );
	$var = strip_tags ( $var );
	return $var;
}
function drawtable() {
	$user_name = "root";
	$password = "root";
	$database = "mywgzimmerdb";
	$server = "localhost";
	
	$db_handle = mysql_connect ( $server, $user_name, $password );
	$db_found = mysql_select_db ( $database, $db_handle );
	
	if (isset ( $_POST ["what"] )) {
		$query = "SELECT * FROM tblInserate WHERE ";
		
		if (isset ( $_POST ["suchGeschlecht"] )) {
			$tmpgeschlecht = $_POST ["suchGeschlecht"];
			$query = $query . "(SollGeschlecht = '" . $tmpgeschlecht . "' OR SollGeschlecht = 'x')";
		}
		if (isset ( $_POST ["suchAlter"] )) {
			$query = $query . " AND Minimumalter <= " . $_POST ["suchAlter"] . " AND Maximumalter >= " . $_POST ["suchAlter"];
		}
		if (isset ( $_POST ["suchWGZimmerArt"] )) {
			$query = $query . " AND Studio = " . $_POST ["suchWGZimmerArt"];
		}
		if (isset ( $_POST ["suchWGort"] )) {
			
			if ($_POST ["suchWGort"] != "") {
				
				$query = $query . " AND Ort = '" . $_POST ["suchWGort"] . "'";
			}
		}
		if (isset ( $_POST ["suchWGminflaeche"] )) {
			if ($_POST ["suchWGminflaeche"] != "") {
				$query = $query . " AND Quadratmeter >= " . $_POST ["suchWGminflaeche"];
			}
		}
		if (isset ( $_POST ["suchWGmaxflaeche"] )) {
			if ($_POST ["suchWGmaxflaeche"] != "") {
				$query = $query . " AND Quadratmeter <= " . $_POST ["suchWGmaxflaeche"];
			}
		}
		if (isset ( $_POST ["suchWGminKost"] )) {
			$tmpminkost = $_POST ["suchWGminKost"];
			if ($tmpminkost != "") {
				$query = $query . " AND Mietzins >= " . $tmpminkost;
			}
		}
		if (isset ( $_POST ["suchWGmaxKost"] )) {
			$tmpmaxkost = $_POST ["suchWGmaxKost"];
			if ($tmpmaxkost != "") {
				$query = $query . " AND Mietzins <= " . $tmpmaxkost;
			}
		}
		if (isset ( $_POST ["suchWGabDatum"] )) {
			$abdatum = $_POST ["suchWGabDatum"];
			if ($abdatum != "") {
				
				if (strlen ( $abdatum ) > 0) {
					
					$tmpabdatum = explode ( ".", $abdatum );
					
					$abdatum = $tmpabdatum [2] . "." . $tmpabdatum [1] . "." . $tmpabdatum [0];
					$query = $query . " AND AbDatum <= '" . $abdatum . "'";
				}
			}
		}
		if (isset ( $_POST ["suchWGbisDatum"] )) {
			
			$bisdatum = $_POST ["suchWGbisDatum"];
			if ($bisdatum != "") {
				
				if (strlen ( $bisdatum ) > 0) {
					
					$tmpbisdatum = explode ( ".", $bisdatum );
					$bisdatum = $tmpbisdatum [2] . "." . $tmpbisdatum [1] . "." . $tmpbisdatum [0];
					$query = $query . " AND BisDatum >= '" . $bisdatum . "'";
				}
			}
		}
		
		if (isset ( $_POST ["suchWGgeschlecht"] )) {
			$tmpsuchgeschleckt = $_POST ["suchWGgeschlecht"];
			if ($tmpsuchgeschleckt != "") {
				$query = $query . " AND IstGeschlecht = '" . $tmpsuchgeschleckt . "'";
			}
		}
		if (isset ( $_POST ["suchWGmaxAlter"] )) {
			$tmpmaxalter = $_POST ["suchWGmaxAlter"];
			if ($tmpmaxalter != "") {
				$query = $query . " AND Durchscnittsalter <= " . $tmpmaxalter;
			}
		}
		if (isset ( $_POST ["suchWGminAlter"] )) {
			$tmpminalter = $_POST ["suchWGminAlter"];
			if ($tmpminalter != "") {
				$query = $query . " AND Durchscnittsalter >= " . $tmpminalter;
			}
		}
		
		$result = mysql_query ( $query ) or die ( "Ungültige Abfrage Hallo" );
	} else {
		$query = "SELECT * FROM tblInserate";
		$result = mysql_query ( $query ) or die ( "Ungültige Abfrage" );
	}
	
	if ($db_found) {
		$inserattable = '<h1>aktuelle Inserate</h1><table><thead><tr><th>Art</th><th>Fläche</th><th>Strasse</th><th>PLZ</th><th>Ort</th><th>Verfügbar ab</th><th>Befristet bis</th><th>Mietzins</th><th>Bild</th></tr></thead><tbody>';
		while ( $db_field = mysql_fetch_assoc ( $result ) ) {
			$inserattable = $inserattable . '<tr class="admintable"><td>' . $db_field ['Studio'] . '</td>';
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $db_field ['Quadratmeter'];
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $db_field ['Strasse'];
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $db_field ['PLZ'];
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $db_field ['Ort'];
			
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $db_field ['AbDatum'];
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $db_field ['BisDatum'];
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $db_field ['Mietzins'] . " CHF";
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $db_field ['ImagePath1'] . "</td></tr>";
		}
		$inserattable = $inserattable . '</tbody></table></br></form>';
		mysql_close ( $db_handle );
		echo $inserattable;
	} else {
		echo "Datenbank nicht verbindbar!";
		mysql_close ( $db_handle );
	}
	
	// echo "what = " . $what;
	// echo " geschlecht = " .$suchgeschlecht;
	// echo " wggeschlecht = " .$suchWGgeschlecht;
	// echo " minalter = " .$suchWGminAlter;
	// echo " WGmaxAlter = " .$suchWGmaxAlter;
	// echo " ZimmerArt = " .$suchWGZimmerArt;
	// echo " abDatum = " .$suchWGabDatum;
	// echo " WGbisDatum = " .$suchWGbisDatum;
	// echo " minflaeche = " .$suchWGminflaeche;
	// echo " maxflaeche = " .$suchWGmaxflaeche;
	// echo " WGminKost = " .$suchWGminKost;
	// echo " WGminKost = " .$suchWGmaxKost;
	// echo " WGort = " .$suchWGort;
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
	
	drawtable ();
}

if ($what == "userbearbeiten") {
}














