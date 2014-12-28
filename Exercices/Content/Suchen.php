<?php

function suchen() {
    ?>
    <div class="ui-widget-content"><h2 class="ui-widget-header">WG-Zimmer suchen</h2>
        <form name="Suchen" >
            <h3>Ich bin</h3>
            <div>
                <input id="BINgeschlecht" name="geschlecht" type="radio" value="f"> eine Frau 
                <input id="BINgeschlecht" name="geschlecht" type="radio" value="m"> ein Mann<br>
                und ich bin
                <input id="BINalter" type="number" min="13" max="99"> Jahre alt.<br>
            </div>
            </br>
            <h3>Ich suche</h3>
            <div>
                <input id="SUCHgeschlecht" name="SUCHgeschlecht" type="radio" value="f"> eine Frauen-WG 
                <input id="SUCHgeschlecht" name="SUCHgeschlecht" type="radio" value="m"> eine Männer-WG 
                <input id="SUCHgeschlecht" name="SUCHgeschlecht" type="radio" value="x"> eine gemischte WG<br>
                mit Durchschnittsalter zwischen 
                <input id="SUCHminAlter" type="number" min="13" max="99"> und 
                <input id="SUCHmaxAlter" type="number" min="13" max="99"> Jahren.<br>
            </div>
            </br>
            Ein Zimmer <input id="SUCHart" name="SUCHradioZimmerArt" type="radio" value="z"> oder 
            <input id="SUCHart" name="SUCHradioZimmerArt" type="radio" value="s"> ein Studio 
            <div>zwischen
                <input id="SUCHminFlaeche" type="number" min="13" max="99"> und 
                <input id="SUCHmaxFlaeche" type="number" min="13" max="99"> Quadratmetern, welches<br>

                pro Monat zwischen 
                <input id="SUCHminMiete" type="number"> und 
                <input id="SUCHmaxMiete" type="number"> Franken kostet.<br>
            </div>
            </br>
            Mit Einzugsdatum ab sofort oder ab  
            <input type="date" value="<?php echo date("d" + 2) . "." . date("m") . "." . date("Y"); ?>"
                   id="SUCHAbDatum" style="width: 100px" />
            , unbefristet oder bis <input type="date" value="<?php echo date("d" + 2) . "." . date("m") . "." . date("Y"); ?>"
                                          id="SUCHBisDatum" style="width: 100px" />
        </form>
        <button id="btnSuchen" type="submit">Suchen</button>
        <button id="btnFilterAus" type="submit">Filter zurücksetzen</button></div>
    <?php
}
?>