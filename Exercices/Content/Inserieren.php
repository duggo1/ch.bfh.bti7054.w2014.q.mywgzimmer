<?php

function Inserieren() {
    ?>
    <div>
        <h1>WG-Zimmer Inserieren</h1>
        <div id="tabs" class="Tabs">
            <div class="ui-widget-content">

                <ul>
                    <li><a href="#tabs-1">Bewohner</a></li>
                    <li><a href="#tabs-2">Wohnung</a></li>
                    <li><a href="#tabs-3">Zimmer</a></li>
                    <li><a href="#tabs-4">Gesucht</a></li>
                    <li><a href="#tabs-5">Bestätigung</a></li>
                </ul>

                <div id="tabs-1">

                    <?php InserierenTab1() ?>
                </div>
                <div id="tabs-2">
                    <?php InserierenTab2() ?>
                </div>
                <div id="tabs-3">
                    <?php InserierenTab3() ?>
                </div>
                <div id="tabs-4">
                    <?php InserierenTab4() ?>
                </div>
                <div id="tabs-5">
                    <?php InserierenTab5() ?>
                </div>
            </div>
        </div>
        <?php
    }

    function InserierenTab1() {
        ?>
        <form name="Tab1">
            <h3>Wir sind</h3>
            <div>
                <input id="ISTgeschlecht" name="geschlecht" type="radio" value="f"> alles nur Frauen<br>
                <input id="ISTgeschlecht" name="geschlecht" type="radio" value="m"> alles nur Männer<br>
                <input id="ISTgeschlecht" name="geschlecht" type="radio" value="x" checked="checked"> gemischt<br>
            </div>
            </br>
            <div>unser Durchschnittsalter</div>
            <div><input id="ISTalter" type="number" value="0" min="13" max="99"></div>
            </br>
            <div>Beschreibung der aktuellen WG-Bewohner</div>
            <textarea id="bewohnerBeschreibung" rows="10" ></textarea>
            </br>
            </br>
        </form>
        <button id="btnweiter1" type="submit">Weiter</button>

        <?php
    }

    function InserierenTab2() {
        ?>
        <form name="Tab2">
            <h3>Adresse</h3>
            <table>
                <tr>
                    <td>Strasse</td>
                    <td>Hausnummer</td> 
                    <td>Wohnungszusatz</td> 
                </tr>
                <tr>
                    <td><input id="insZimmerStr" type="text" required></td>
                    <td><input id="insZimmerStrNr" type="text"></td> 
                    <td><input id="insZimmerZusatzNr" type="text"></td> 

                </tr>
                <tr>
                    <td>Ort</td>
                    <td>Postleitzahl</td> 
                </tr>
                <tr>
                    <td><input id="insZimmerOrt" type="text" required></td>
                    <td><input id="insZimmerPlz" type="number" value="1000" min="1000" max="9999"required></td> 
                </tr>
            </table>
            </br>
            <h3>Untermiete</h3>
            <table>
                <tr>
                    <td>Einzugstermin</td>
                    <td style="margin-left: 200px;">Auszugstermin (sofern befristet)</td>
                </tr>
                <tr>
                    <td><input type="date"
                               value="<?php echo date("d" + 2) . "." . date("m") . "." . date("Y"); ?>"
                               id="insMitAbDatum" style="width: 100px" /></td>
                    <td style="margin-left: 200px;"><input type="date" id="insMitBisDatum" style="width: 100px" /></td>
                </tr>
            </table>
            </br>
            <div>Mietzins total (inkl. Nebenkosten)</div>
            <div><input id="insMitkosten" type="number" value="4" min="4" max="200"></div>
            </br>
            </br>
        </form>

        <button id="btnzuruck2" type="submit">Zurück</button>
        <button id="btnweiter2">Weiter</button>
        <?php
    }

    function InserierenTab3() {
        ?>
        <form name="Tab3">

            <h3>Informationen</h3>
            <div>
                <input id="insZimmerTyp" name="radioZimmerArt" type="radio" value="z" checked="checked"> Zimmer &nbsp;&nbsp;
                <input id="insZimmerTyp" name="radioZimmerArt" type="radio" value="s"> Studio (ohne Zugang zu Bad, WC oder Küche)<br>
            </div>
            </br>
            <div>Fläche in m<sup>2</sup></div>
            <div><input id="insFlaeche" type="number" min="4" max="200" required></div>
            </br>
            <h3>Beschreibung</h3>
            <textarea id="insZimmerBeschreibung" rows="10"></textarea>
            </br>
            <h3>Fotos</h3>
            <div><input id="insFoto1" type="file" ><input type="submit" value="Foto hochladen" name="submit"></div>
            </br>
            <div><input id="insFoto2" type="file" ><input type="submit" value="Foto hochladen" name="submit"></div>
            </br>
            <div><input id="insFoto3" type="file" ><input type="submit" value="Foto hochladen" name="submit"></div>
            </br>
            </br>
        </form>
        <button id="btnzuruck3" type="submit">Zurück</button>
        <button id="btnweiter3">Weiter</button>
        <?php
    }

    function InserierenTab4() {
        ?>
        <form name="Tab4">
            <h3>Wir suchen</h3>
            <div>
                <input id="SOLLgeschlecht" name="geschlecht" type="radio" value="f"> eine Frau<br>
                <input id="SOLLgeschlecht" name="geschlecht" type="radio" value="m"> einen Mann<br>
                <input id="SOLLgeschlecht" name="geschlecht" type="radio" value="x" checked="checked"> egal<br>
            </div>
            </br>
            <table>
                <tr>
                    <td>Mindestalter</td>
                    <td style="margin-left: 200px;">Maximumalter</td>
                </tr>
                <tr>
                    <td><input id="SOLLminAlter" type="number" min="13" max="99"></td>
                    <td style="margin-left: 200px;"><input id="SOLLmaxAlter" type="number" min="13" max="99"></td>
                </tr>
            </table>
            </br>
            <div>Beschreibung der gesuchten Person</div>
            <textarea id="gesuchtBeschreibung" rows="10"></textarea>
            </br>
            </br>
        </form>
        <button id="btnzuruck4" type="submit">Zurück</button>
        <button id="btnweiter4" type="submit">Weiter</button>
        <?php
    }

    function InserierenTab5() {
        ?>
        <form name="Tab5">
            <h3>Akzeptierungsbestätigung</h3>
            <div>E-Mail</div>
            <div><input id="email" type="email"></div>
            </br>
            <div>E-Mail (wiederholen)</div>
            <div><input id="wiederemail" type="email"></div>
            </br>
            <h3>AGBs</h3>
            <textarea id="agbBeschreibung" rows="10" disabled="true">Der Inserent bestätigt hiermit die Angaben über ein echtes Zimmer in einer echten WG gemacht zu haben und ist alleiniger Verantwortlicher für den Inhalt. Das Inserat läuft nach 10 Wochen ab. Daraufhin wird der Inserent automatisch an den Ablauf des Inserates erinnert. Bei Änderung der Daten oder Aktualisierung des Erstellungsdatums wird das Inserat wieder für 10 Wochen aufgeschaltet. Es wird jedoch automatisch gelöscht, sofern der Inserent die Löschwarnung ignoriert. Die E-Mail-Adressen sind für die Öffentlichkeit nicht ersichtlich. Um bei vergebenem WG-Zimmer keine E-Mails mehr zu erhalten, wird empfohlen das Inserat zu löschen. Die Betreiber der Webseite sind weder für wirtschaftliche, noch für psychische Schäden haftbar, die durch die Verwendung dieser Webseite entstanden sind. Die Webdesigner liessen sich von diversen schon existierenden vergleichbaren Webseiten inspirieren. Sie werden weder urheberrechtlichen Ansprüchen nachkommen, noch selber welche stellen.</textarea>
            </br>
            <div>AGBs akzeptieren</div>
            <div><input type=checkbox id="agbsakzeptiert"></div>
            </br>
            </br>
        </form>
        <button id="btnzuruck5" type="submit">Zurück</button>
        <button id="btnweiter5">Abschicken</button>
        <?php
    }
    ?>				