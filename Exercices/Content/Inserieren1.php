<?php
function Inserieren() {
	?>
<table cellpadding="1">
	<tr>

		<th valign="top">
			<!-- hier ist Mittel Seite -->
<div class="ui-widget-content" >
<h2 class="ui-widget-header" style="margin-top: 0; margin-bottom: 5px; ">WG-Zimmer Inserieren</h2>
			<div id="tabs" class="Tabs">
				<ul>
					<li><a href="#tabs-1">Persönliche Angaben </a></li>
					<li><a href="#tabs-2">Zimmerbeschreibung </a></li>
					<li><a href="#tabs-3">Mietangaben </a></li>
					<li><a href="#tabs-4">Rechliches </a></li>
					<li><a href="#tabs-5">Bestätigung </a></li>
				</ul>

				<div id="tabs-1">

                <?php InserierenTab1()?>
            </div>
				<div id="tabs-2">
                <?php InserierenTab2()?>
            </div>
				<div id="tabs-3">
                <?php InserierenTab3()?>
            </div>
				<div id="tabs-4">
                <?php InserierenTab4()?>
            </div>
				<div id="tabs-5">
                <?php InserierenTab5()?>
            </div>

			</div>
			</div>
		</th>
	</tr>
</table>
<?php
}
function InserierenTab1() {
	?>
<table style="min-width: 0px;">

	<tr>
		<td style="width: 40%" colspan="4">*Pflichtfelder</td>
		<td style="width: 10%"></td>
		<td style="width: 50%"></td>

	</tr>
	<tr>
		<td style="width: 40%" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%">Es werden keine persönlichen</td>

	</tr>
	<tr>
		<td style="width: 40%" colspan="4">*Anrede</td>
		<td style="width: 10%"></td>
		<td style="width: 50%">Daten im Inserat veröffentlicht.</td>
	</tr>
	<tr>
		<td style="width: 10%" colspan="1"><input type="radio" id="radioHerr"
			name="PersSex" checked="checked"> <label for="radioHerr">Herr</label></td>
		<td style="width: 20%" colspan="2"><input type="radio" id="radioFrau"
			name="PersSex"> <label for="radioFrau">Frau</label></td>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%"></td>
	</tr>
	<tr>
		<td style="width: 40%" colspan="4">*Vorname</td>
		<td style="width: 10%"></td>
		<td style="width: 50%">*E-Mail</td>
	</tr>
	<tr>
		<td style="width: 40%" colspan="4"><input id="insvorname" type="text"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%"><input id="email" type="email"></td>
	</tr>
	<tr>
		<td style="width: 40%" colspan="4">*Nachname</td>
		<td style="width: 10%"></td>
		<td style="width: 50%">*E-Mail (wiederholen)</td>
	</tr>
	<tr>
		<td style="width: 40%" colspan="4"><input id="insnachname" type="text"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%"><input id="wiederemail" type="email"></td>
	</tr>
	<tr>
		<td style="width: 20%" colspan="2">*Strasse</td>
		<td style="width: 20%" colspan="2">*Nr.</td>
		<td style="width: 10%"></td>
		<td style="width: 50%">*Telefonnummer</td>
	
	
	<tr>
		<td style="width: 20%" colspan="2"><input id="inspersonstrasse" type="text"></td>
		<td style="width: 20%" colspan="2"><input id="inspersonstrasseNr" type="text"
			style="width: 40px"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%"><input id="telefonnr" type="tel"></td>
	</tr>
	<tr>
		<td style="width: 20%" colspan="2">*Ort</td>
		<td style="width: 20%" colspan="2">*PLZ</td>
		<td style="width: 10%"></td>
		<td style="width: 50%"></td>
	</tr>


	<tr>

		<td style="width: 20%" colspan="2"><input id="inspersonort" type="text"></td>
		<td style="width: 20%" colspan="2"><input id="inspersonaplz" type="text"
			style="width: 40px"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%"></td>
	</tr>
	<tr>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 20%"></td>
		<td style="width: 30%; float: right;">
			<button id="btweiter1">Weiter</button>
		</td>
	</tr>
</table>

<?php
}
function InserierenTab2() {
	?>

<table style="min-width: 0px;">
	<tr>
		<td style="width: 40%" colspan="4">*Pflichtfelder</td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>

	</tr>
	<tr>
		<td style="width: 40%" height="18pt" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>
	<tr>
		<td style="width: 40%" colspan="4">*Titel des Inserats</td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5">*Zimmerart</td>

	</tr>
	<tr>
		<td style="width: 40%" colspan="4"><input id="insTitel"
			type="text" style="width: 60%"></td>
		<td style="width: 10%"></td>

		<td style="width: 15px"><input type="radio" id="insZimmer"
			name="radioZimmerArt" checked="checked"/> <label for="insZimmer">Zimmer</label></td>
		<td style="width: 15%"><input type="radio" id="insAtelier"
			name="radioZimmerArt" /> <label for="insAtelier">Atelier</label></td>
		<td style="width: 15%"><input type="radio" id="insStudio"
			name="radioZimmerArt" /> <label for="insStudio">Studio</label></td>


	</tr>

	<tr>
		<td style="width: 40%" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5">*Fläche m2</td>
	</tr>

	<tr>
		<td style="width: 50%" colspan="5">Zimmeradresse (sofern diese vom
			Wohnort abweicht)</td>
		<td style="width: 50%" colspan="5"><input id="insFlaeche"
			type="number"></td>

	</tr>
	<tr>
		<td style="width: 20%" colspan="2">Strasse</td>
		<td style="width: 20%" colspan="2">Nr.</td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	
	
	<tr>
		<td style="width: 20%" colspan="2"><input id="insZimmerStr"
			type="text"></td>
		<td style="width: 20%" colspan="2"><input id="insZimmerStrNr"
			type="text" style="width: 40px"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"><input type="checkbox"
			id="insnurStdLhr" name="checkbox"> <label
			for="insnurStdLhr">nur für Studierende/Lehrlinge</label></td>
	</tr>

	<tr>
		<td style="width: 20%" colspan="2">Ort</td>
		<td style="width: 20%" colspan="2">PLZ</td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>


	<tr>

		<td style="width: 20%" colspan="2"><input id="insZimmerOrt" type="text"></td>
		<td style="width: 20%" colspan="2"><input id="insZimmerPlz" type="text"
			style="width: 40px"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>
	<tr>
		<td style="width: 40%" colspan="4">*Zimmerbeschreibung</td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5">Erwünschte Geschlecht</td>

	</tr>

	<tr>
		<td rowspan="3" style="width: 40%" colspan="4"><textarea rows="3"
				id="Zimmerbeschreibung"
				style="width: 100%; resize: none; overflow: auto;"></textarea></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"><input type="radio" id="insZimmerFrau"
			name="zimmerGeschlecht" /> <label for="insZimmerFrau">nur Frauen</label></td>

	</tr>

	<tr>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"><input type="radio" id="insZimmerHerr"
			name="zimmerGeschlecht" /> <label for="insZimmerHerr">nur Männer</label></td>

	</tr>
	<tr>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"><input type="radio" id="insZimmerEgal"
			name="zimmerGeschlecht" checked="checked" /> <label for="insZimmerEgal">egal</label></td>

	</tr>
	<tr>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 20%"></td>

		<td style="width: 15%"></td>
		<td style="float: right;"><button id="btzuruck2">Zurück</button></td>

		<td>
			<button type="submit" id="btweiter2">Weiter</button>
		</td>
	</tr>

</table>


<?php
}
function InserierenTab3() {
	?>

<table >
	<tr>
		<td style="width: 40%" colspan="4">*Pflichtfelder</td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>

	</tr>
	<tr>
		<td style="width: 40%" height="18pt" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>
	<tr>
		<td style="width: 10%"></td>
		<td style="width: 10%" colspan="1">*Ab-Datum</td>
		<td style="width: 10%" colspan="1">*Bis-Datum</td>
		<td style="width: 50%" colspan="5"></td>

	</tr>

	<tr>
		<td style="width: 10%"></td>
		<td style="width: 10%" colspan="1"><input type="text"
			value="<?php echo date("d" + 2) . "." . date("m") . "." . date("Y"); ?>"
			id="insMitAbDatum" style="width: 100px" /></td>
		<td style="width: 10%" colspan="1"><input type="radio"
			id="insMitunbefristet" name="datumbefristet" checked="checked" /><label
			for="unbefristet">Unbefristet</label></td>
		<td style="width: 40%" colspan="4"></td>

	</tr>

	<tr>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 10%" colspan="1"><input type="radio" id="insMitbefristet"
			name="datumbefristet" /> <label for="befristet">Befristet</label></td>

		<td style="width: 20%" colspan="2">bis <input type="text"
			value="<?php echo date("d" + 2) . "." . date("m") . "." . date("Y"); ?>"
			id="insMitBisDatum" style="width: 100px" /></td>
		<td style="width: 20%" colspan="2"></td>

	</tr>
	<tr>
		<td style="width: 40%" height="18pt" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>

	<tr>
		<td style="width: 10%"></td>
		<td style="width: 10%;" colspan="1">*Währung</td>
		<td style="width: 15%" colspan="2">*Miete inkl Nebenkosten</td>
		<td style="width: 50%" colspan="5"></td>

	</tr>
	<tr>
		<td style="width: 10%"></td>
		<td style="width: 10%;" colspan="1"><select id="insMitwaehrung">
				<option value="chf">CHF</option>
				<option value="euro">EURO</option>
		</select></td>
		<td style="width: 20%"><input id="insMitkosten" type="text"
			style="width: 100px"></td>
		<td style="width: 50%" colspan="5"></td>

	</tr>
	<tr>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 20%"></td>

		<td style="width: 20%"></td>
		<td style="float: right;"><button id="btzuruck3">Zurück</button></td>

		<td>
			<button id="btweiter3">Weiter</button>
		</td>
	</tr>
</table>


<?php
}
function InserierenTab4() {
	?>
<table >
	<tr>
		<td style="width: 40%" colspan="4">*Pflichtfelder</td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>
	<tr>

		<td style="width: 100%" colspan="10"><textarea rows="20" cols="104"
				id="Zimmerbeschreibung"
				style="width: 100%; resize: none; overflow: auto; " readonly><?php AGB_Schreib() ?></textarea></td>

	</tr>

	<tr>
	</tr>

	<td style="width: 80%" colspan="5"><input type="checkbox"
		id="insRechtCheck" name="checkbox"> <label for="checkboxAGB">*Ich bin
			mit den Allgemeinen Bedingungen einverstanden</label></td>
	<td style="width: 10%"></td>
	<td style="width: 10%"></td>
	<tr>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 20%"></td>

		<td style="width: 50%"></td>
		<td style="float: right;"><button id="btzuruck4">Zurück</button></td>

		<td>
			<button id="btweiter4">Weiter</button>
		</td>
	</tr>

</table>
<?php
}
function InserierenTab5() {
	?>
<table>
	<tr>
		<td style="width: 40%" colspan="4">Mögliche Mitbewohner</td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>
	</tr>
	<tr>
		<td style="width: 40%" height="18pt" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>

	<tr>
		<td style="width: 100%" colspan="10">Hier ist fur die Tabelle</td>
	</tr>
	<tr>
		<td style="width: 40%" height="18pt" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>
	<tr>
		<td valign="middle" style="width: 100%;" colspan="8">Die
			Mitbewohnerinserate mit den Angaben Deines Inserates durchsuchen:</td>

		<td style="width: 10%" colspan="1">
			<button style="width: 140px" id="btMitbewohsuch">Mitbewohner/in
				suchen</button>
		</td>
	</tr>
	<tr>
		<td style="width: 40%" height="18pt" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>
	<tr>
		<td style="width: 40%" height="18pt" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>
	<tr>
		<td valign="middle" style="width: 100%;" colspan="8">Nach Aufgabe des
			Inserats erh�lst Du ein Mail mit einem Aktivierungslink.</td>

		<td style="width: 10%" colspan="1" rowspan="2">
			<button style="width: 140px" id="btInserataufgeben">Inserat aufgeben</button>
		</td>
	</tr>
	<tr>
		<td valign="middle" style="width: 100%;" colspan="8">Das Inserat wird
			erst aufgeschaltet sobald es aktiviert wurde.</td>
	</tr>
</table>






<?php
}

?>				