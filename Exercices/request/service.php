<?php
session_start ();

require_once '../Content/suchen.php';

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

/* Suchen-----------------------------------------

// Ich bin
$suchGeschlecht = (isset ( $_POST ["BINgeschlecht"] )) ? $_POST ["BINgeschlecht"] : "";
$suchAlter = (isset ( $_POST ["BINalter"] )) ? $_POST ["BINalter"] : "";

// Ich suche
$suchWGgeschlecht = (isset ( $_POST ["SUCHgeschlecht"] )) ? $_POST ["SUCHgeschlecht"] : "";
$suchWGminAlter = (isset ( $_POST ["SUCHminAlter"] )) ? $_POST ["SUCHminAlter"] : "";
$suchWGmaxAlter = (isset ( $_POST ["SUCHmaxAlter"] )) ? $_POST ["SUCHmaxAlter"] : "";
$suchWGZimmerArt = (isset ( $_POST ["SUCHart"] )) ? $_POST ["SUCHart"] : "";
$suchWGminflaeche = (isset ( $_POST ["SUCHminFlaeche"] )) ? $_POST ["SUCHminFlaeche"] : "";
$suchWGmaxflaeche = (isset ( $_POST ["SUCHmaxFlaeche"] )) ? $_POST ["SUCHmaxFlaeche"] : "";
$suchWGminKost = (isset ( $_POST ["SUCHminMiete"] )) ? $_POST ["SUCHminMiete"] : "";
$suchWGmaxKost = (isset ( $_POST ["SUCHmaxMiete"] )) ? $_POST ["SUCHmaxMiete"] : "";
$suchWGabDatum = (isset ( $_POST ["SUCHAbDatum"] )) ? $_POST ["SUCHAbDatum"] : "";
$suchWGbisDatum = (isset ( $_POST ["SUCHBisDatum"] )) ? $_POST ["SUCHBisDatum"] : "";
*/
$what = $_POST ['what'];

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
    echo "true";
}

if ($what == "userbearbeiten") {
}














