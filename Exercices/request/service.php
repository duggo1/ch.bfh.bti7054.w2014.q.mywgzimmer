<?php

// session_start();

// Tab_1 von Inserat-----------------------------
$insBewohnerGeschlecht = (isset ( $_POST ["insBewohnerGeschlecht"] )) ? $_POST ["insBewohnerGeschlecht"] : "";
$insBewohnerAlter = (isset ( $_POST ["insBewohnerAlter"] )) ? $_POST ["insBewohnerAlter"] : "";
$insBewohnerBeschreibung = (isset ( $_POST ["insBewohnerBeschreibung"] )) ? $_POST ["insBewohnerBeschreibung"] : "";

// Tab_2 von Inserat-----------------------------
$insWohnungStr = (isset ( $_POST ["insWohnungStr"] )) ? $_POST ["insWohnungStr"] : "";
$insWohnungHausNr = (isset ( $_POST ["insWohnungHausNr"] )) ? $_POST ["insWohnungHausNr"] : "";
$insWohnungZusatzNr = (isset ( $_POST ["insWohnungZusatzNr"] )) ? $_POST ["insWohnungZusatzNr"] : "";
$insWohnungOrt = (isset ( $_POST ["insWohnungOrt"] )) ? $_POST ["insWohnungOrt"] : "";
$insWohnungPlz = (isset ( $_POST ["insWohnungPlz"] )) ? $_POST ["insWohnungPlz"] : "";

$insWohnungAbDatum = (isset ( $_POST ["insWohnungAbDatum"] )) ? $_POST ["insWohnungAbDatum"] : "";
$insWohnungBisDatum = (isset ( $_POST ["insWohnungBisDatum"] )) ? $_POST ["insWohnungBisDatum"] : "";
$insWohnungkosten = (isset ( $_POST ["insWohnungkosten"] )) ? $_POST ["insWohnungkosten"] : "";

// Tab_3 von Inserat----------------------------
$insZimmerTyp = (isset ( $_POST ["insZimmerTyp"] )) ? $_POST ["insZimmerTyp"] : "";
$insZimmerFlaeche = (isset ( $_POST ["insZimmerFlaeche"] )) ? $_POST ["insZimmerFlaeche"] : "";
$insZimmerBeschreibung = (isset ( $_POST ["insZimmerBeschreibung"] )) ? $_POST ["insZimmerBeschreibung"] : "";

$insFoto1link = (isset ( $_POST ["insFoto1link"] )) ? $_POST ["insFoto1link"] : "";
$insFoto2link = (isset ( $_POST ["insFoto2link"] )) ? $_POST ["insFoto2link"] : "";
$insFoto3link = (isset ( $_POST ["insFoto3link"] )) ? $_POST ["insFoto3link"] : "";

// Tab_4 von Inserat-----------------------------
$insGesuchtSollSex = (isset ( $_POST ["insGesuchtSollSex"] )) ? $_POST ["insGesuchtSollSex"] : "";
$insGesuchtSollMinAlter = (isset ( $_POST ["insGesuchtSollMinAlter"] )) ? $_POST ["insGesuchtSollMinAlter"] : "";
$insGesuchtSollMaxAlter = (isset ( $_POST ["insGesuchtSollMaxAlter"] )) ? $_POST ["insGesuchtSollMaxAlter"] : "";
$insGesuchtBeschreibung = (isset ( $_POST ["insGesuchtBeschreibung"] )) ? $_POST ["insGesuchtBeschreibung"] : "";

// Tab_5 von Inserat
$insEmail = (isset ( $_POST ["insEmail"] )) ? $_POST ["insEmail"] : "";
// $insEmailWieder = (isset ( $_POST ["insEmailWieder"] )) ? $_POST ["insEmailWieder"] : "";
// $insBestaetigungAGB = (isset ( $_POST ["agbsakzeptiert"] )) ? $_POST ["agbsakzeptiert"] : "";

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
		$query = $query . " AND active=1";
		$result = mysql_query ( $query ) or die ( "Ungültige Abfrage" );
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
	
	if (strlen ( $insWohnungAbDatum ) > 0) {
		
		$tmpWohnungabdatum = explode ( ".", $insWohnungAbDatum );
		$insWohnungAbDatum = $tmpWohnungabdatum [2] . "." . $tmpWohnungabdatum [1] . "." . $tmpWohnungabdatum [0];
	}
	if (strlen ( $insWohnungBisDatum ) > 0) {
		
		$tmpWohnungBisdatum = explode ( ".", $insWohnungBisDatum );
		
		$insWohnungBisDatum = $tmpWohnungBisdatum [2] . "." . $tmpWohnungBisdatum [1] . "." . $tmpWohnungBisdatum [0];
	}
	
	// ---------Link erstellen--------------------------
	$link = "";
	// 6 Stellige Zahl
	for($i = 0; $i < 7; $i ++) {
		$x1 = rand ( 0, 9 );
		$link .= $x1;
	}
	// Wort 6 Buchschtaben
	$charakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	for($i = 0; $i < 7; $i ++) {
		$link .= substr ( $charakter, mt_rand ( 0, strlen ( $charakter ) - 1 ), 1 );
	}
	// 6 Stellige Zahl
	for($i = 0; $i < 7; $i ++) {
		$x3 = rand ( 0, 9 );
		$link .= $x3;
	}
	// -------------------------------------------------
	
	$user_name = "root";
	$password = "root";
	$database = "mywgzimmerdb";
	$server = "localhost";
	
	$db_handle = mysql_connect ( $server, $user_name, $password );
	$db_found = mysql_select_db ( $database, $db_handle );
	
	$query = "INSERT INTO `mywgzimmerdb`.`tblinserate` (`ID`, `Email`, `Strasse`, `Hausnummer`, `Wohnungszusatz`, `PLZ`, `Ort`,
			 `Quadratmeter`, `Studio`, `Minimumalter`, `Maximumalter`, `SollGeschlecht`, `IstGeschlecht`, `Durchscnittsalter`,
	 		 `Zimmerbeschreibung`, `Bewohnerbeschreibung`, `Personenbeschreibung`, `AbDatum`, `BisDatum`, `Befristet`, `Mietzins`, `active`,
			 `Link`, `ImagePath1`, `ImagePath2`, `ImagePath3`, `Erstellungsdatum`) VALUES 		
			 (NULL, '$insEmail', '$insWohnungStr', '$insWohnungHausNr', '$insWohnungZusatzNr', '$insWohnungPlz', '$insWohnungOrt',
			 '$insZimmerFlaeche' , '$insZimmerTyp', '$insGesuchtSollMinAlter', '$insGesuchtSollMaxAlter', '$insGesuchtSollSex',
	 		'$insBewohnerGeschlecht', '$insBewohnerAlter', '$insZimmerBeschreibung', '$insBewohnerBeschreibung', '$insGesuchtBeschreibung', 
	 		'$insWohnungAbDatum', '$insWohnungBisDatum', '', '$insWohnungkosten', '0', '$link', '$insFoto1link', '$insFoto2link', 
			'$insFoto3link', CURRENT_TIMESTAMP);";
	
	$result = mysql_query ( $query ) or die ( "Ungültige Abfrage" );
	mysql_close ( $db_handle );
	
	$empfaenger = $insEmail; //cagdas.cakir@students.bfh.ch
	$betreff = "Aktivierungslink";
	$from = "From: MyWGzimmer.ch <cagdascbu@hotmail.com>";
	$text = "Guten Tag \n Ihre Aktivierungslink ist \n
	http://localhost:8888/index.php?link=" . $link ."\n Freundliche Gr�sse \n mywgzimmer.ch Team";
	
	mail ( $empfaenger, $betreff, $text, $from );

	echo "true";
}

if ($what == "suchen") {
	
	drawtable ();
}

if ($what == "userbearbeiten") {
}
















