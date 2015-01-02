<?php

function Inserieren() {

    $ISTgeschlecht = "x";
    $durchschnittsalter = 13;
    $bewohnerbeschreibung = '';
    $strasse = '';
    $ort = '';
    $plz = '1000';
    $strNr = '';
    $whgNr = '';
    $art = 0;
    $AbDatum = date("d") . "." . date("m") . "." . date("Y");
    $BisDatum = '';
    $zimmerbeschreibung = '';
    $foto1 = '';
    $foto2 = '';
    $foto3 = '';
    $miete = 0;
    $email = '';
    $agb = '<input type=checkbox id="agbsakzeptiert">';
    $m2 = 4;
    $SOLLgeschlecht = 'x';
    $minalter = '13';
    $maxalter = '99';
    $personenbeschreibung = '';
    
    if (isset($_GET['id'])) {
        $user_name = "root";
        $password = "root";
        $database = "mywgzimmerdb";
        $server = "localhost";

        $db_handle = mysql_connect($server, $user_name, $password);
        $db_found = mysql_select_db($database, $db_handle);
        $id = mysql_real_escape_string($_GET['id']);
        $query = "SELECT * FROM tblInserate WHERE Link = '$id'";
        $result = mysql_query($query) or die("Ungültige Abfrage");
        while ($db_field = mysql_fetch_assoc($result)) {
            $email = $db_field["Email"];
            $ISTgeschlecht = $db_field["IstGeschlecht"];
            $durchschnittsalter = $db_field["Durchschnittsalter"];
            $bewohnerbeschreibung = $db_field['Bewohnerbeschreibung'];
            $strasse = $db_field['Strasse'];
            $ort = $db_field['Ort'];
            $plz = $db_field['PLZ'];
            $strNr = $db_field['Hausnummer'];
            $whgNr = $db_field['Wohnungszusatz'];
            $AbDatum = $db_field['AbDatum'];
            $BisDatum = $db_field['BisDatum'];
            $art = $db_field['Studio'];
            $email = $db_field['Email'];
            $zimmerbeschreibung = $db_field['Zimmerbeschreibung'];
            $foto1 = $db_field['ImageID1'];
            $foto2 = $db_field['ImageID2'];
            $foto3 = $db_field['ImageID3'];
            $miete = $db_field['Mietzins'];
            $m2 = $db_field['Quadratmeter'];
            $mde = $db_field['ds'];
            $minalter = $db_field['Minimumalter'];
            $maxalter = $db_field['Maximumalter'];
            $Personenbeschreibung = $db_field['Personenbeschreibung'];
        }
        mysql_close($db_handle);
        $agb = '<input type=checkbox id="agbsakzeptiert" checked="checked">';

    } else {
        
    }
    if ($ISTgeschlecht == "f") {
        $ISTgeschlecht = '<input id="ISTgeschlechtf" name="geschlecht" type="radio" value="f" checked="checked"> alles nur Frauen<br>
            <input id="ISTgeschlechtm" name="geschlecht" type="radio" value="m"> alles nur Männer<br>
            <input id="ISTgeschlechtx" name="geschlecht" type="radio" value="x"> gemischt<br>';
    } elseif ($ISTgeschlecht == "m") {
        $ISTgeschlecht = '<input id="ISTgeschlechtf" name="geschlecht" type="radio" value="f"> alles nur Frauen<br>
            <input id="ISTgeschlechtm" name="geschlecht" type="radio" value="m" checked="checked"> alles nur Männer<br>
            <input id="ISTgeschlechtx" name="geschlecht" type="radio" value="x"> gemischt<br>';
    } else {
        $ISTgeschlecht = '<input id="ISTgeschlechtf" name="geschlecht" type="radio" value="f"> alles nur Frauen<br>
            <input id="ISTgeschlechtm" name="geschlecht" type="radio" value="m"> alles nur Männer<br>
            <input id="ISTgeschlechtx" name="geschlecht" type="radio" value="x" checked="checked"> gemischt<br>';
    }
    if ($SOLLgeschlecht == "f") {
        $SOLLgeschlecht = '<input id="SOLLgeschlechtf" name="geschlecht" type="radio" value="f" checked="checked"> eine Frau<br>
            <input id="SOLLgeschlechtm" name="geschlecht" type="radio" value="m"> einen Mann<br>
            <input id="SOLLgeschlechtx" name="geschlecht" type="radio" value="x"> egal<br>';
    } elseif ($SOLLgeschlecht == "m") {
        $SOLLgeschlecht = '<input id="SOLLgeschlechtf" name="geschlecht" type="radio" value="f"> eine Frau<br>
            <input id="SOLLgeschlechtm" name="geschlecht" type="radio" value="m" checked="checked"> einen Mann<br>
            <input id="SOLLgeschlechtx" name="geschlecht" type="radio" value="x"> egal<br>';
    } else {
        $SOLLgeschlecht = '<input id="SOLLgeschlechtf" name="geschlecht" type="radio" value="f"> eine Frau<br>
            <input id="SOLLgeschlechtm" name="geschlecht" type="radio" value="m"> einen Mann<br>
            <input id="SOLLgeschlechtx" name="geschlecht" type="radio" value="x" checked="checked"> egal<br>';
    }
    if ($art == 0) {
        $art = '<input id="insZimmerTypz" name="radioZimmerArt" type="radio" value=0 checked="checked"> Zimmer &nbsp;&nbsp;
            <input id="insZimmerTyps" name="radioZimmerArt" type="radio" value=1>';
    } else {
        $art = '<input id="insZimmerTypz" name="radioZimmerArt" type="radio" value=0> Zimmer &nbsp;&nbsp;
            <input id="insZimmerTyps" name="radioZimmerArt" type="radio" value=1 checked="checked">';
    } 
    $GLOBALS['art'] = $art;
    $GLOBALS['ISTgeschlecht'] = $ISTgeschlecht;
    $GLOBALS['Durchschnittsalter'] = $durchschnittsalter;
    $GLOBALS['Bewohnerbeschreibung'] = $bewohnerbeschreibung;
    $GLOBALS['Str'] = $strasse;
    $GLOBALS['strNr'] = $strNr;
    $GLOBALS['whgNr'] = $whgNr;
    $GLOBALS['Ort'] = $ort;
    $GLOBALS['PLZ'] = $plz;
    $GLOBALS['agb'] = $agb;
    $GLOBALS['miete'] = $miete;
    $GLOBALS['sollgeschlecht'] = $SOLLgeschlecht;
    $GLOBALS['art'] = $art;
    $GLOBALS['m2'] = $m2;
    $GLOBALS['zimmerbeschreibung'] = $zimmerbeschreibung;
    $GLOBALS['AbDatum'] = $AbDatum;
    $GLOBALS['BisDatum'] = $BisDatum;
    $GLOBALS['Personenbeschreibung'] = $Personenbeschreibung;
    $GLOBALS['minalter'] = $minalter;
    $GLOBALS['maxalter'] = $maxalter;
    $GLOBALS['agb'] = $agb;
    $GLOBALS['email'] = $email;
    
    ?>
    <div id="tabs" class="Tabs">
        <ul>
            <li><a href="#tabs-1">Bewohner</a></li>
            <li><a href="#tabs-2">Wohnung</a></li>
            <li><a href="#tabs-3">Zimmer</a></li>
            <li><a href="#tabs-4">Gesucht</a></li>
            <li><a href="#tabs-5">Bestätigung</a></li>
        </ul>
        <div id="tabs-1" class="ui-widget-content">
    <?php InserierenTab1() ?>
        </div>
        <div id="tabs-2" class="ui-widget-content">
    <?php InserierenTab2() ?>
        </div>
        <div id="tabs-3" class="ui-widget-content">
    <?php InserierenTab3() ?>
        </div>
        <div id="tabs-4" class="ui-widget-content">
    <?php InserierenTab4() ?>
        </div>
        <div id="tabs-5" class="ui-widget-content">
    <?php InserierenTab5() ?>
        </div>
    </div>
    <?php
}

function InserierenTab1() {
    ?>
    <form name="Tab1" class='Tabs'>
        <h3>Wir sind</h3>
        <div>
    <?php echo $GLOBALS['ISTgeschlecht']; ?>
        </div>
        <br />
        <table>
            <tr>
                <td>unser Durchschnittsalter</td>
            </tr>
            <tr>
                <td><input id="ISTalter" type="number" value="<?php echo $GLOBALS['Durchschnittsalter']; ?>" min="13" max="99" maxlength="2"></tr>
            </tr>
        </table>
        <br />
        <div>Beschreibung der aktuellen WG-Bewohner</div>
        <textarea id="bewohnerBeschreibung" class="Beschreibung" rows="10" ><?php echo $GLOBALS['Bewohnerbeschreibung']; ?></textarea>
        <br />
        <input id="btnweiter1" class="btnweiter" name="btnweiter1" value="Weiter">
        <br />
        <br />
    </form>
    <?php
}

function InserierenTab2() {
    ?>
    <form name="Tab2" class="Tabs">
        <h3>Adresse</h3>
        <table >
            <tr>
                <td>Strasse</td>
                <td>Hausnummer</td> 
                <td>Wohnungszusatz</td> 
            </tr>
            <tr>
                <td><input id="insZimmerStr" class="formfield" name="insZimmerStr" type="text" required value="<?php echo $GLOBALS['Str']; ?>"></td>
                <td><input id="insZimmerStrNr" name="insZimmerStrNr" type="text" value="<?php echo $GLOBALS['strNr']; ?>"></td> 
                <td><input id="insZimmerZusatzNr" name="insZimmerZusatzNr" type="text" value="<?php echo $GLOBALS['whgNr']; ?>"></td> 

            </tr>
            <tr>
                <td>Ort</td>
                <td>Postleitzahl</td> 
            </tr>
            <tr>
                <td><input id="insZimmerOrt" class="formfield" name="insZimmerOrt" type="text" required value="<?php echo $GLOBALS['Ort']; ?>"></td>
                <td><input id="insZimmerPlz" name="insZimmerPLZ" type="number" value="1000" min="1000" max="9999"required maxlength=4" value="<?php echo $GLOBALS['PLZ']; ?>"></td> 
            </tr>
        </table>
        </br>
        <h3>Untermiete</h3>
        <table>
            <tr>
                <td>Einzugstermin</td>
                <td>Auszugstermin (sofern befristet)</td>
            </tr>
            <tr>
                <td><input type="date" value="<?php echo $GLOBALS['AbDatum']; ?>"
                           id="insMitAbDatum" maxlength="10"/></td>
                <td><input type="date" id="insMitBisDatum" maxlength="10" value="<?php echo $GLOBALS['BisDatum']; ?>"/></td>
            </tr>
        </table>
        <br />
        <div>Mietzins total (inkl. Nebenkosten)</div>
        <div><input id="insMitkosten" type="number" value="<?php echo $GLOBALS['miete']; ?>" min="10" maxlength="4"></div>
        <br />
        <input id="btnzuruck2" class="btnzuruck" name="btnzuruck2" value="Zurück">
        <input id="btnweiter2" class="btnweiter" name="btnweiter2" value="Weiter">
        <br />
        <br />
    </form>
    <?php
}

function InserierenTab3() {
    ?>
    <form name="Tab3" class="Tabs">

        <h3>Informationen</h3>
        <div>
            <?php echo $GLOBALS['art']; ?>
            Studio (ohne Zugang zu Bad, WC oder Küche)<br />
        </div>
        <br />
        <div>Fläche in m<sup>2</sup></div>
        <div><input id="insFlaeche" type="number" value="<?php echo $GLOBALS['m2']; ?>" min="4" max="200" required maxlength="3"></div>
        <br />
        <h3>Beschreibung</h3>
        <textarea id="ZimmerBeschreibung" class="Beschreibung" rows="5"><?php echo $GLOBALS['zimmerbeschreibung']; ?></textarea>
        <br />
        <h3>Fotos</h3>
        <br />
        <table>
            <tr class="drittel">
                <td >
                    <form id="foto1form" enctype="multipart/form-data"><input id="insFoto1" type="file" name="insfoto1">
                        </td>
                        <td>
                        <input id="btnfoto1" value="Titelfoto hochladen" name="btnfoto1" type="button"></form>
                </td>
                <td >
                    <img id="image1" src="<?php echo $GLOBALS['foto1'];?>" class="thumbnail">
                </td>
            </tr>
            <tr>
                <td>
                    <form id="foto2form" enctype="multipart/form-data"><input id="insFoto2" type="file" name="insfoto2">
                        </td>
                        <td>
                        <input id="btnfoto2" value="zweites Foto hochladen" name="btnfoto2" type="button"></form>
                </td>
                <td>
                    <img id="image2" src="<?php echo $GLOBALS['foto2'];?>" class="thumbnail">
                </td>
            </tr>
            <tr>
                <td>
                    <form id="foto3form" enctype="multipart/form-data"><input id="insFoto3" type="file" name="insfoto3">
                        </td>
                        <td>
                        <input id="btnfoto3" value="drittes Foto hochladen" name="btnfoto3" type="button"></form>
                </td>
                <td>
                   <img id="image3" src="<?php echo $GLOBALS['foto3'];?>" class="thumbnail">
                </td>
            </tr>
        </table>
    </form>
    <br />
    <input id="btnzuruck3" class="btnzuruck" name="btnzuruck3" value="Zurück">
    <input id="btnweiter3" class="btnweiter" name="btnweiter3" value="Weiter">
    <br />
    <br />
    </form><?php
}

function InserierenTab4() {
    ?>
    <form name="Tab4" class="Tabs">
        <h3>Wir suchen</h3>
        <div>
            <?php echo $GLOBALS['sollgeschlecht']; ?>
        </div>
        <br />
        <table>
            <tr>
                <td>Mindestalter</td>
                <td>Maximumalter</td>
            </tr>
            <tr>
                <td><input id="SOLLminAlter" type="number" min="13" max="99" maxlength="2" value="<?php echo $GLOBALS['minalter']; ?>"></td>
                <td ><input id="SOLLmaxAlter" type="number" min="13" max="99" maxlength="2" value="<?php echo $GLOBALS['maxalter']; ?>"></td>
            </tr>
        </table>
        <br />
        <div>Beschreibung der gesuchten Person</div>
        <textarea id="gesuchtBeschreibung" class="Beschreibung" rows="10"><?php echo $GLOBALS['personenbeschreibung']; ?></textarea>
        <br />
        <input id="btnzuruck4" class="btnzuruck" name="btnzuruck4" value="Zurück">
        <input id="btnweiter4" class="btnweiter" name="btnweiter4" value="Weiter">
        <br />
        <br />
    </form><?php
}

function InserierenTab5() {
    ?>
    <form name="Tab5" class="Tabs">
        <h3>Akzeptierungsbestätigung</h3>
        <div>E-Mail</div>
        <div><input id="email" class="formfield" type="email" value="<?php echo $GLOBALS['email']; ?>"></div>
        <br />
        <div>E-Mail (wiederholen)</div>
        <div><input id="wiederemail" class="formfield" type="email" value="<?php echo $GLOBALS['email']; ?>"></div>
        <br />
        <h3>AGBs</h3>
        <textarea id="agbBeschreibung" class="Beschreibung" rows="5" disabled="true">Der Inserent bestätigt hiermit die Angaben über ein echtes Zimmer in einer echten WG gemacht zu haben und ist alleiniger Verantwortlicher für den Inhalt. Das Inserat läuft nach 10 Wochen ab. Daraufhin wird der Inserent automatisch an den Ablauf des Inserates erinnert. Bei Änderung der Daten oder Aktualisierung des Erstellungsdatums wird das Inserat wieder für 10 Wochen aufgeschaltet. Es wird jedoch automatisch gelöscht, sofern der Inserent die Löschwarnung ignoriert. Die E-Mail-Adressen sind für die Öffentlichkeit nicht ersichtlich. Um bei vergebenem WG-Zimmer keine E-Mails mehr zu erhalten, wird empfohlen das Inserat zu löschen. Die Betreiber der Webseite sind weder für wirtschaftliche, noch für psychische Schäden haftbar, die durch die Verwendung dieser Webseite entstanden sind. Die Webdesigner liessen sich von diversen schon existierenden vergleichbaren Webseiten inspirieren. Sie werden weder urheberrechtlichen Ansprüchen nachkommen, noch selber welche stellen.</textarea>
        <br />
        <div>AGBs akzeptieren</div>
        <div><?php echo $GLOBALS['agb']; ?></div>
        <br />
        <input id="btnzuruck5" class="btnzuruck" name="btnzuruck5" value="Zurück" >
        <input id="btnweiter5" class="btnweiter" name="btnweiter5" value="Abschicken">

        <br />
        <br />
    </form>
    <?php
}
?>				