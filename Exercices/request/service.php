<?php
use Cake\Console\ConsoleInput;
session_start();
//require_once '../db_functions.php';
//connect();
// function __autoload($classname) {
// 	include '../'.$classname . '.inc.php';
// }

//Tab_1 von Inserat
$insAnrede = (isset($_GET["insAnrede"]))? $_GET["insAnrede"] : "" ;
$insVorname = (isset($_GET["insVorname"]))? $_GET["insVorname"] : "" ;
$insNachname = (isset($_GET["insNachname"]))? $_GET["insNachname"] : "" ;
$insStrasse = (isset($_GET["insStrasse"]))? $_GET["insStrasse"] : "" ;
$insStrNr = (isset($_GET["insStrNr"]))? $_GET["insStrNr"] : "" ;
$insOrt = (isset($_GET["insOrt"]))? $_GET["insOrt"] : "" ;
$insPLZ = (isset($_GET["insPLZ"]))? $_GET["insPLZ"] : "" ;
$email = (isset($_GET["email"]))? $_GET["email"] : "" ;
$wiederemail = (isset($_GET["wiederemail"]))? $_GET["wiederemail"] : "" ;
$tel = (isset($_GET["tel"]))? $_GET["tel"] : "" ;
//Tab_2 von Inserat
$insTitel = (isset($_GET["insTitel"]))? $_GET["insTitel"] : "" ;
$insZimmerStr = (isset($_GET["insZimmerStr"]))? $_GET["insZimmerStr"] : "" ;
$insZimmerStrNr = (isset($_GET["insZimmerStrNr"]))? $_GET["insZimmerStrNr"] : "" ;
$insZimmerOrt = (isset($_GET["insZimmerOrt"]))? $_GET["insZimmerOrt"] : "" ;
$insZimmerPlz = (isset($_GET["insZimmerPlz"]))? $_GET["insZimmerPlz"] : "" ;
$insZimmerBeschreibung = (isset($_GET["insZimmerBeschreibung"]))? $_GET["insZimmerBeschreibung"] : "" ;
$insZimmerart = (isset($_GET["insZimmerart"]))? $_GET["insZimmerart"] : "" ;
$insFlaeche= (isset($_GET["insFlaeche"]))? $_GET["insFlaeche"] : "" ;
$insnurStdLhr = (isset($_GET["insnurStdLhr"]))? $_GET["insnurStdLhr"] : "" ;
$insZimmerSex = (isset($_GET["insZimmerSex"]))? $_GET["insZimmerSex"] : "" ;
//Tab_3 von Inserat
$insMitAbDatum = (isset($_GET["insMitAbDatum"]))? $_GET["insMitAbDatum"] : "" ;
$insMitBefristet = (isset($_GET["insMitbefristet"]))? $_GET["insMitbefristet"] : "" ;
$insMitUnBefristet = (isset($_GET["insMitunbefristet"]))? $_GET["insMitunbefristet"] : "" ;
$insMitBisDatum = (isset($_GET["insMitBisDatum"]))? $_GET["insMitBisDatum"] : "" ;
$insMitwaehrung = (isset($_GET["insMitwaehrung"]))? $_GET["insMitwaehrung"] : "" ;
$insMitkosten = (isset($_GET["insMitkosten"]))? $_GET["insMitkosten"] : "" ;
//Tab_4 von Inserat
$insRechtCheck = (isset($_GET["insRechtCheck"]))? $_GET["insRechtCheck"] : "" ;
//Suchen
$suchOrt = (isset($_GET["suchOrt"]))? $_GET["suchOrt"] : "" ;
$suchPlz = (isset($_GET["suchPlz"]))? $_GET["suchPlz"] : "" ;
$suchStr = (isset($_GET["suchStr"]))? $_GET["suchStr"] : "" ;
$suchPreisvon = (isset($_GET["suchPreisvon"]))? $_GET["suchPreisvon"] : "" ;
$suchPreisbis = (isset($_GET["suchPreisbis"]))? $_GET["suchPreisbis"] : "" ;
$suchflaechevon = (isset($_GET["suchflaechevon"]))? $_GET["suchflaechevon"] : "" ;
$suchflaechebis = (isset($_GET["suchflaechebis"]))? $_GET["suchflaechebis"] : "" ;
$suchFreiDatum = (isset($_GET["suchFreiDatum"]))? $_GET["suchFreiDatum"] : "" ;
$suchStifte = (isset($_GET["suchStifte"]))? $_GET["suchStifte"] : "" ;
$suchAtelier = (isset($_GET["suchAtelier"]))? $_GET["suchAtelier"] : "" ;
$suchFrauenwg = (isset($_GET["suchFrauenwg"]))? $_GET["suchFrauenwg"] : "" ;
$suchMannerwg = (isset($_GET["suchMannerwg"]))? $_GET["suchMannerwg"] : "" ;
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













