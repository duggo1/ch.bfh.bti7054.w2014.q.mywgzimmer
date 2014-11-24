<?php

session_start();
//require_once '../db_functions.php';
//connect();
// function __autoload($classname) {
// 	include '../'.$classname . '.inc.php';
// }

//Tab_1 von Inserat-----------------------------
$insBewohnerGeschlecht = (isset($_GET["ISTgeschlecht"]))? $_GET["ISTgeschlecht"] : "" ;
$insBewohnerAlter = (isset($_GET["ISTalter"]))? $_GET["ISTalter"] : "" ;
$insBewohnerBeschreibung = (isset($_GET["bewohnerBeschreibung"]))? $_GET["bewohnerBeschreibung"] : "" ;


//Tab_2 von Inserat-----------------------------
$insWohnungStr = (isset($_GET["insZimmerStr"]))? $_GET["insZimmerStr"] : "" ;
$insWohnungHausNr = (isset($_GET["insZimmerStrNr"]))? $_GET["insZimmerStrNr"] : "" ;
$insWohnungZusatzNr = (isset($_GET["insZimmerZusatzNr"]))? $_GET["insZimmerZusatzNr"] : "" ;
$insWohnungOrt = (isset($_GET["insZimmerOrt"]))? $_GET["insZimmerOrt"] : "" ;
$insWohnungPlz = (isset($_GET["insZimmerPlz"]))? $_GET["insZimmerPlz"] : "" ;

$insWohnungEinZug = (isset($_GET["insMitAbDatum"]))? $_GET["insMitAbDatum"] : "" ;
$insWohnungAusZug = (isset($_GET["insMitBisDatum"]))? $_GET["insMitBisDatum"] : "" ;
$insWohnungkosten = (isset($_GET["insMitkosten"]))? $_GET["insMitkosten"] : "" ;


//Tab_3 von Inserat----------------------------
$insZimmerTyp = (isset($_GET["insZimmerTyp"]))? $_GET["insZimmerTyp"] : "" ;
$insZimmerFlaeche= (isset($_GET["insFlaeche"]))? $_GET["insFlaeche"] : "" ;
$insZimmerBeschreibung = (isset($_GET["insZimmerBeschreibung"]))? $_GET["insZimmerBeschreibung"] : "" ;

$insFoto1 = (isset($_GET["insFoto1"]))? $_GET["insFoto1"] : "" ;
$insFoto2= (isset($_GET["insFoto2"]))? $_GET["insFoto2"] : "" ;
$insFoto3 = (isset($_GET["insFoto3"]))? $_GET["insFoto3"] : "" ;


//Tab_4 von Inserat-----------------------------
$insGesuchtSex = (isset($_GET["SOLLgeschlecht"]))? $_GET["SOLLgeschlecht"] : "" ;
$insGesuchtMinAlter = (isset($_GET["SOLLminAlter"]))? $_GET["SOLLminAlter"] : "" ;
$insGesuchtMaxAlter = (isset($_GET["SOLLmaxAlter"]))? $_GET["SOLLmaxAlter"] : "" ;
$insGesuchtBeschreibung = (isset($_GET["gesuchtBeschreibung"]))? $_GET["gesuchtBeschreibung"] : "" ;


//Tab_5 von Inserat
$insBestaetigungEmail = (isset($_GET["email"]))? $_GET["email"] : "" ;
$insBestaetigungEmailWieder = (isset($_GET["wiederemail"]))? $_GET["wiederemail"] : "" ;
$insBestaetigungAGB = (isset($_GET["agbsakzeptiert"]))? $_GET["agbsakzeptiert"] : "" ;



//Suchen-----------------------------------------

//Ich bin
$suchGeschlecht = (isset($_GET["BINgeschlecht"]))? $_GET["BINgeschlecht"] : "" ;
$suchAlter = (isset($_GET["BINalter"]))? $_GET["BINalter"] : "" ;

//Ich suche
$suchWGgeschlecht = (isset($_GET["SUCHgeschlecht"]))? $_GET["SUCHgeschlecht"] : "" ;
$suchWGminAlter = (isset($_GET["SUCHminAlter"]))? $_GET["SUCHminAlter"] : "" ;
$suchWGmaxAlter = (isset($_GET["SUCHmaxAlter"]))? $_GET["SUCHmaxAlter"] : "" ;
$suchWGZimmerArt = (isset($_GET["SUCHart"]))? $_GET["SUCHart"] : "" ;
$suchWGminflaeche = (isset($_GET["SUCHminFlaeche"]))? $_GET["SUCHminFlaeche"] : "" ;
$suchWGmaxflaeche = (isset($_GET["SUCHmaxFlaeche"]))? $_GET["SUCHmaxFlaeche"] : "" ;
$suchWGminKost = (isset($_GET["SUCHminMiete"]))? $_GET["SUCHminMiete"] : "" ;
$suchWGmaxKost = (isset($_GET["SUCHmaxMiete"]))? $_GET["SUCHmaxMiete"] : "" ;
$suchWGabDatum= (isset($_GET["SUCHAbDatum"]))? $_GET["SUCHAbDatum"] : "";
$suchWGbisDatum = (isset($_GET["SUCHBisDatum"]))? $_GET["SUCHBisDatum"] : "" ;


$what = $_GET['what'];


if($what == "inserierenTab1")
{

	echo "true";
}
if($what == "inserierenTab2")
{
	echo "true";
}
if($what == "inserierenTab3")
{
	echo "true";
}
if($what == "inserierenTab4")
{
	echo "true";
}
if($what == "inserierenTab5")
{
	echo "true";
}

if($what == "suchen")
{
	echo "true";
}

if($what == "admin")
{

}

if($what == "loeschen")
{

}

if($what == "userlogin")
{

}
if($what == "userbearbeiten")
{

}













