<?php
require_once 'request/service.php';
function suchen() {
    ?>
    <h1>WG-Zimmer suchen</h1>
    <form name="Suchen" id="Suchen">
        Ich bin (weiblich <input id="BINgeschlechtf" name="geschlecht" type="radio" value="f">  
        / männlich <input id="BINgeschlechtm" name="geschlecht" type="radio" value="m">)
        und ich bin <input id="BINalter" name="alter" type="number" min="13" max="99">
        Jahre alt.</br>
        Ich suche ein (Zimmer <input id="SUCHart" name="art" type="radio" value=0> 
        / Studio <input id="SUCHart" name="art" type="radio" value=1>)
        im Ort <input id="SUCHort" name="ort" type="text">.</br>
        Mit einer Wohnfläche zwischen <input id="SUCHminFlaeche" name="m2min" type="number">
        und <input id="SUCHmaxFlaeche" name="m2max" type="number"> 
        Quadratmetern.</br>
        Mit einem monatlichen Mietzins zwischen <input id="SUCHminMiete" name="mietemin" type="number"> 
        und <input id="SUCHmaxMiete" name="mietemax" type="number">
        Franken.</br>
        Mit Einzugsdatum (ab sofort / ab dem 
        <input type="date" id="SUCHAbDatum" name="einzug">) und 
        (unbefristet / bis am <input type="date" id="SUCHBisDatum" name="auszug">).</br>
        In einer (Frauen-WG <input id="SUCHgeschlecht" name="SUCHgeschlecht" type="radio" value="f">  
        / Männer-WG <input id="SUCHgeschlecht" name="SUCHgeschlecht" type="radio" value="m"> 
        / gemischten WG <input id="SUCHgeschlecht" name="SUCHgeschlecht" type="radio" value="x">)
        mit Durchschnittsalter zwischen <input id="SUCHminAlter" type="number" min="13" max="99" name="altermin"> 
        und <input id="SUCHmaxAlter" type="number" min="13" max="99" name="altermax">
        Jahren.</br>
        <table>
            <tr>
                <td  id="search">
                    <input id="btnFiltern" name = "filtern"  value="Suchen" type="button"/>
                    <input id="btnFilterAus" name = "filteraus" value ="Filter zurücksetzen"/>
                </td>
            </tr>
        </table>
    </form>
    <div id="Sie"><?php drawtable(); ?></div>
    <?php
}
?>