<?php
function Inserieren() {
	?>
<table cellpadding="1">
	<tr>

		<th valign="top">
			<!-- hier ist Mittel Seite -->

			<div id="tabs" class="Tabs">
				<ul>
					<li><a href="#tabs-1">Persönliche Angaben </a></li>
					<li><a href="#tabs-2">Zimmerbeschreibung </a></li>
					<li><a href="#tabs-3">Mietangaben </a></li>
					<li><a href="#tabs-4">Rechliches </a></li>
					<li><a href="#tabs-5">Bestätigung </a></li>
				</ul>

				<div id="tabs-1">
				
				<?php
	InserierenTab1 ()?>
				</div>
				<div id="tabs-2">
				<?php
	InserierenTab2 ()?>
				</div>
				<div id="tabs-3">
				<?php
	InserierenTab3 ()?>
				</div>
				<div id="tabs-4">
				<?php
	InserierenTab4 ()?>
				</div>
				<div id="tabs-5">
				<?php
	InserierenTab5 ()?>
				</div>

			</div>
		</th>
	</tr>
</table>
<?php
}
function InserierenTab1() {
	?>
<table style="min-width: 0px;" >

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
			name="radioHerr" checked="checked"> <label for="radioHerr">Herr</label></td>
		<td style="width: 20%" colspan="2"><input type="radio" id="radioFrau"
			name="radioFrau"> <label for="radioFrau">Frau</label></td>
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
		<td style="width: 40%" colspan="4"><input id="vorname" type="text"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%"><input id="email" type="email"></td>
	</tr>
	<tr>
		<td style="width: 40%" colspan="4">*Nachname</td>
		<td style="width: 10%"></td>
		<td style="width: 50%">*E-Mail (wiederholen)</td>
	</tr>
	<tr>
		<td style="width: 40%" colspan="4"><input id="nachname" type="text"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%"><input id="email" type="email"></td>
	</tr>
	<tr>
		<td style="width: 20%" colspan="2">*Strasse</td>
		<td style="width: 20%" colspan="2">*Nr.</td>
		<td style="width: 10%"></td>
		<td style="width: 50%">*Telefonnummer</td>
	
	
	<tr>
		<td style="width: 20%" colspan="2"><input id="strasse" type="text"></td>
		<td style="width: 20%" colspan="2"><input id="strasseNr" type="text"
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

		<td style="width: 20%" colspan="2"><input id="ort" type="text"></td>
		<td style="width: 20%" colspan="2"><input id="plz" type="text"
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
		<td style="width: 40%" colspan="4"><input id="titeldesinserats"
			type="text" style="width: 60%"></td>
		<td style="width: 10%"></td>

		<td style="width: 15px"><input type="radio" id="radioZimmer"
			name="radioZimmer" /> <label for="radioZimmer">Zimmer</label></td>
		<td style="width: 15%"><input type="radio" id="radioAtelier"
			name="radioAtelier" /> <label for="radioAtelier">Atelier</label></td>
		<td style="width: 15%"><input type="radio" id="radioStudio"
			name="radioStudio" /> <label for="radioStudio">Studio</label></td>


	</tr>

	<tr>
		<td style="width: 40%" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5">*Fläche m2</td>
	</tr>

	<tr>
		<td style="width: 50%" colspan="5">Zimmeradresse (sofern diese vom
			Wohnort abweicht)</td>
		<td style="width: 50%" colspan="5"><input id="zimmerflaeche"
			type="number"></td>

	</tr>
	<tr>
		<td style="width: 20%" colspan="2">*Strasse</td>
		<td style="width: 20%" colspan="2">*Nr.</td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	
	
	<tr>
		<td style="width: 20%" colspan="2"><input id="zimmerStrasse"
			type="text"></td>
		<td style="width: 20%" colspan="2"><input id="zimmerStrasseNr"
			type="text" style="width: 40px"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"><input type="checkbox"
			id="checkboxStudirenLehrling" name="checkbox"> <label
			for="checkboxStudirenLehrling">nur für Studierende/Lehrlinge</label></td>
	</tr>

	<tr>
		<td style="width: 20%" colspan="2">*Ort</td>
		<td style="width: 20%" colspan="2">*PLZ</td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>


	<tr>

		<td style="width: 20%" colspan="2"><input id="zimmerOrt" type="text"></td>
		<td style="width: 20%" colspan="2"><input id="zimmerPlz" type="text"
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
		<td rowspan="3" style="width: 40%" colspan="4"><textarea
				id="Zimmerbeschreibung"
				style="width: 100%; height: 100%; resize: none;"></textarea></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"><input type="radio" id="zimmerFrau"
			name="zimmerFrau" /> <label for="zimmerFrau">nur Frauen</label></td>

	</tr>

	<tr>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"><input type="radio" id="zimmerHerr"
			name="zimmerHerr" /> <label for="zimmerHerr">nur Männer</label></td>

	</tr>
	<tr>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"><input type="radio" id="zimmerEgal"
			name="zimmerEgal" checked="checked" /> <label for="zimmerEgal">egal</label></td>

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
			<button id="btweiter2">Weiter</button>
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
			value="<?php echo date("d"+2).".".date("m").".".date("Y"); ?>"
			id="abdatum" style="width: 100px" /></td>
		<td style="width: 10%" colspan="1"><input type="radio"
			id="unbefristet" name="unbefristet" checked="checked" /><label
			for="unbefristet">Unbefristet</label></td>
		<td style="width: 40%" colspan="4"></td>

	</tr>

	<tr>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 10%" colspan="1"><input type="radio" id="befristet"
			name="befristet" /> <label for="befristet">Befristet</label></td>

		<td style="width: 20%" colspan="2">bis <input type="text"
			value="<?php echo date("d"+2).".".date("m").".".date("Y"); ?>"
			id="bisdatum" style="width: 100px" /></td>
		<td style="width: 20%" colspan="2"></td>

	</tr>
	<tr>
		<td style="width: 40%" height="18pt" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>

	<tr>
		<td style="width: 10%"></td>
		<td style="width: 10%;" colspan="1">*W&aumlhrung</td>
		<td style="width: 15%" colspan="2">*Miete inkl Nebenkosten</td>
		<td style="width: 50%" colspan="5"></td>

	</tr>
	<tr>
		<td style="width: 10%"></td>
		<td style="width: 10%;" colspan="1"><select id="waerung">
				<option value="chf">CHF</option>
				<option value="euro">EURO</option>
		</select></td>
		<td style="width: 10%"><input id="miete" type="text"
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






<?php
}
function InserierenTab5() {
	?>






<?php
}
?>				