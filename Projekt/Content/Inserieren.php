<?php

function Inserieren() {
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
            <input id="ISTgeschlechtf" name="geschlecht" type="radio" value="f"> alles nur Frauen<br>
            <input id="ISTgeschlechtm" name="geschlecht" type="radio" value="m"> alles nur Männer<br>
            <input id="ISTgeschlechtx" name="geschlecht" type="radio" value="x" checked="checked"> gemischt<br>
        </div>
        <br />
        <table>
            <tr>
                <td>unser Durchschnittsalter</td>
            </tr>
            <tr>
                <td><input id="ISTalter" type="number" value="0" min="13" max="99"></tr>
            </tr>
        </table>
        <br />
        <div>Beschreibung der aktuellen WG-Bewohner</div>
        <textarea id="bewohnerBeschreibung" class="Beschreibung" rows="10" ></textarea>
        <br />
        <button id="btnweiter1" class="btnweiter" name="btnweiter1" type="button">Weiter</button>
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
                <td><input id="insZimmerStr" class="formfield" name="insZimmerStr" type="text" required></td>
                <td><input id="insZimmerStrNr" name="insZimmerStrNr" type="text"></td> 
                <td><input id="insZimmerZusatzNr" name="insZimmerZusatzNr" type="text"></td> 

            </tr>
            <tr>
                <td>Ort</td>
                <td>Postleitzahl</td> 
            </tr>
            <tr>
                <td><input id="insZimmerOrt" class="formfield" name="insZimmerOrt" type="text" required></td>
                <td><input id="insZimmerPlz" name="insZimmerPLZ" type="number" value="1000" min="1000" max="9999"required></td> 
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
                <td><input type="date"
                           value="<?php echo date("d") . "." . date("m") . "." . date("Y"); ?>"
                           id="insMitAbDatum"/></td>
                <td><input type="date" id="insMitBisDatum"/></td>
            </tr>
        </table>
        <br />
        <div>Mietzins total (inkl. Nebenkosten)</div>
        <div><input id="insMitkosten" type="number" value="10" min="10" ></div>
        <br />
        <button id="btnzuruck2" class="btnzuruck" name="btnzuruck2" type="button">Zurück</button>
            <button id="btnweiter2" class="btnweiter" name="btnweiter2" type="button">Weiter</button>
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
            <input id="insZimmerTypz" name="radioZimmerArt" type="radio" value=0 checked="checked"> Zimmer &nbsp;&nbsp;
            <input id="insZimmerTyps" name="radioZimmerArt" type="radio" value=1> Studio (ohne Zugang zu Bad, WC oder Küche)<br>
        </div>
        <br />
        <div>Fläche in m<sup>2</sup></div>
        <div><input id="insFlaeche" type="number" value="4" min="4" max="200" required></div>
        <br />
        <h3>Beschreibung</h3>
        <textarea id="ZimmerBeschreibung" class="Beschreibung" rows="5"></textarea>
        <br />
        <h3>Fotos</h3>
        <br />
        <table>
            <tr class="drittel">
                <td >
                    <form method="post" enctype="multipart/form-data" id="image_upload_form" action="request/upload.php"><input id="insfoto1id" type="file" name="insfoto1" multiple accept="image/x-png, image/gif, image/jpeg, image/jpg, image/png">
                </td>
                <td>
                    <button id="btnfoto1id" name="btnfoto1" type="button">Titelfoto hochladen</button></form>
                </td>
                <td >
                    <img id="image1" src="" class="thumbnail">
                    <div id="response"></div>
<ul id="image-list">

</ul>
                </td>
            </tr>
            <tr>
                <td>
                    <form id="foto2form" enctype="multipart/form-data"><input id="insFoto2" type="file" name="insfoto2" >
                </td>
                <td>
                    <button id="btnfoto2" name="btnfoto2" type="button">zweites Foto hochladen</button></form>
                </td>
                <td>
                    <img id="image2" src="" class="thumbnail">
                </td>
            </tr>
            <tr>
                <td>
                    <form id="foto3form" enctype="multipart/form-data"><input id="insFoto3" type="file" name="insfoto3">
                </td>
                <td>
                    <button id="btnfoto3" name="btnfoto3" type="button">drittes Foto hochladen</button></form>
                </td>
                <td>
                    <img id="image3" src="" class="thumbnail">
                </td>
            </tr>
        </table>
    </form>
    <br />
    <button id="btnzuruck3" class="btnzuruck" name="btnzuruck3" type="button">Zurück</button>
    <button id="btnweiter3" class="btnweiter" name="btnweiter3" type="button">Weiter</button>
    <br />
    <br />
    </form><?php
}

function InserierenTab4() {
    ?>
    <form name="Tab4" class="Tabs">
        <h3>Wir suchen</h3>
        <div>
            <input id="SOLLgeschlechtf" name="geschlecht" type="radio" value="f"> eine Frau<br>
            <input id="SOLLgeschlechtm" name="geschlecht" type="radio" value="m"> einen Mann<br>
            <input id="SOLLgeschlechtx" name="geschlecht" type="radio" value="x" checked="checked"> egal<br>
        </div>
        <br />
        <table>
            <tr>
                <td>Mindestalter</td>
                <td>Maximumalter</td>
            </tr>
            <tr>
                <td><input id="SOLLminAlter" type="number" min="13" max="99"></td>
                <td ><input id="SOLLmaxAlter" type="number" min="13" max="99"></td>
            </tr>
        </table>
        <br />
        <div>Beschreibung der gesuchten Person</div>
        <textarea id="gesuchtBeschreibung" class="Beschreibung" rows="10"></textarea>
        <br />
        <button id="btnzuruck4" class="btnzuruck" name="btnzuruck4" type="button">Zurück</button>
    <button id="btnweiter4" class="btnweiter" name="btnweiter4" type="button">Weiter</button>
        <br />
        <br />
    </form><?php
}

function InserierenTab5() {
    ?>
    <form name="Tab5" class="Tabs">
        <h3>Akzeptierungsbestätigung</h3>
        <div>E-Mail</div>
        <div><input id="email" class="formfield" type="email"></div>
        <br />
        <div>E-Mail (wiederholen)</div>
        <div><input id="wiederemail" class="formfield" type="email"></div>
        <br />
        <h3>AGBs</h3>
        <textarea id="agbBeschreibung" class="Beschreibung" rows="5" disabled="true">Der Inserent bestätigt hiermit die Angaben über ein echtes Zimmer in einer echten WG gemacht zu haben und ist alleiniger Verantwortlicher für den Inhalt. Das Inserat läuft nach 10 Wochen ab. Daraufhin wird der Inserent automatisch an den Ablauf des Inserates erinnert. Bei Änderung der Daten oder Aktualisierung des Erstellungsdatums wird das Inserat wieder für 10 Wochen aufgeschaltet. Es wird jedoch automatisch gelöscht, sofern der Inserent die Löschwarnung ignoriert. Die E-Mail-Adressen sind für die Öffentlichkeit nicht ersichtlich. Um bei vergebenem WG-Zimmer keine E-Mails mehr zu erhalten, wird empfohlen das Inserat zu löschen. Die Betreiber der Webseite sind weder für wirtschaftliche, noch für psychische Schäden haftbar, die durch die Verwendung dieser Webseite entstanden sind. Die Webdesigner liessen sich von diversen schon existierenden vergleichbaren Webseiten inspirieren. Sie werden weder urheberrechtlichen Ansprüchen nachkommen, noch selber welche stellen.</textarea>
        <br />
        <div>AGBs akzeptieren</div>
        <div><input type=checkbox id="agbsakzeptiert"></div>
        <br />
        <button id="btnzuruck5" class="btnzuruck" name="btnzuruck5" type="button">Zurück</button>
    <button id="btnweiter5" class="btnweiter" name="btnweiter5" type="button">Inserieren</button>
        <br />
        <br />
    </form>
    <?php
}
?>				