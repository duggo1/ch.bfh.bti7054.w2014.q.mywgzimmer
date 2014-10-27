<?php
function Inserieren() {
	?>
<table cellpadding="1">
	<tr>

		<th valign="top">
			<!-- hier ist Mittel Seite -->

			<div id="tabs" class="Tabs">
				<ul>
					<li><a href="#tabs-1">Pers&#246nliche Angaben </a></li>
					<li><a href="#tabs-2">Zimmerbeschreibung </a></li>
					<li><a href="#tabs-3">Mietangaben </a></li>
					<li><a href="#tabs-4">Rechliches </a></li>
					<li><a href="#tabs-5">Best&aumltigung </a></li>
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
<table style="min-width: 0px";>
	<tr>
		<td style="width: 40%" colspan="4">*Pflichtfelder</td>
		<td style="width: 10%"></td>
		<td style="width: 50%">Es werden keine persönlichen</td>

	</tr>
	<tr>
		<td style="width: 40%" colspan="4">*Anrede</td>
		<td style="width: 10%"></td>
		<td style="width: 50%">Daten im Inserat veröffentlicht.</td>
	</tr>
	<tr>
		<td style="width: 20%" colspan="2"><input type="radio" id="radioHerr"
			name="radio" checked="checked"> <label for="radioHerr">Herr</label></td>
		<td style="width: 20%" colspan="2"><input type="radio" id="radioFrau"
			name="radio"> <label for="radioFrau">Frau</label></td>
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
		<td style="width: 20%" colspan="2">*PLZ</td>
		<td style="width: 20%" colspan="2">*Ort</td>
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
		<td style="width: 40%; float: right;">
			<button id="btweiter1">Weiter</button>
		</td>
	</tr>
</table>

<?php
}
function InserierenTab2() {
	?>

<div style="width: 450px; float: left">
	<table>
		<tr id="trtabs">
			<td>*Pflichtfelder
				<p></p>
			</td>
		</tr>
		<tr style="float: left">
			<td>*Titel des Inserats</td>
		</tr>
		<tr id="trtabs">
			<td><input id="titeldesinserats" type="text" style="width: 250px"></td>
		</tr>
		<tr style="float: left">
			<td>Zimmeradresse (sofern diese vom Wohnort abweicht)</td>
		</tr>
		<tr>
			<td style="float: left">Strasse/Nr</td>
		</tr>
		<tr style="float: left">
			<td><input id="zimmerStrasse" type="text"></td>
			<td>/</td>
			<td><input id="zimmerStrasseNr" type="text" style="width: 40px"></td>

		</tr>
		<tr>
			<td style="float: left">PLZ/Ort</td>
		</tr>
		<tr id="trtabs" style="float: left">
			<td><input id="zimmerPlz" type="number" style="width: 40px"></td>
			<td>/</td>
			<td><input id="zimmerOrt" type="text"></td>
		</tr>

		<tr id="trtabs">
			<td><p></p>*Zimmerbeschreibung</td>
		</tr>
		<tr id="trtabs" style="float: left">
			<td><textarea id="Zimmerbeschreibung"
					style="width: 250px; height: 120px;"></textarea></td>
		</tr>

	</table>
</div>
<div style="float: left">
	<table>
		<tr style="float: left">
			<td>*Zimmerart</td>
		</tr>
		<tr id="trtabs">
			<td><input type="radio" id="radioZimmer" name="radio" /> <label
				for="radioZimmer">Zimmer</label> <input type="radio"
				id="radioAtelier" name="radio" /> <label for="radioAtelier">Atelier</label>
				<input type="radio" id="radioStudio" name="radio" /> <label
				for="radioStudio">Studio</label></td>
			<td class="error" id="errorZimmerart"></td>
		</tr>
		<tr style="float: left">
			<td>*Fl&aumlche m2</td>
		</tr>
		<tr id="trtabs">
			<td><input id="zimmerflaeche" type="number"></td>
		</tr>
		<tr id="trtabs">
			<td><input type="checkbox" id="checkboxStudirenLehrling"
				name="checkbox"> <label for="checkboxStudirenLehrling">nur f&uumlr
					Studierende/Lehrlinge</label></td>
		</tr>
		<tr id="trtabs">
			<td><p></p>Erw&uumlnschte Geschlecht</td>
		</tr>
		<tr id="trtabs">
			<td><input type="radio" id="zimmerFrau" name="radio" /> <label
				for="zimmerFrau">nur Frauen</label></td>
		</tr>
		<tr id="trtabs">
			<td><input type="radio" id="zimmerHerr" name="radio" /> <label
				for="zimmerHerr">nur M&aumlnner</label></td
		
		</tr>
		<tr id="trtabs">
			<td><input type="radio" id="zimmerEgal" name="radio"
				checked="checked" /> <label for="zimmerEgal">egal</label></td>
		</tr>
		<tr id="trtabs" styler="height=300px;">
			<td>&nbsp;</td>
			<td style="height: 300px; float: right;">
				<button id="btweiter2">Weiter</button>
			</td>
		</tr>
	</table>
</div>


<?php
}
function InserierenTab3() {
	?>

<table>
	<tr>
		<td>*Pflichtfelder</td>
		<td>*Pflichtfelder</td>
	</tr>
	<tr style="float: left">
		<td><p></p>
			<p></p>
			<p></p>*Ab-Datum</td>
	</tr>
	<tr id="trtabs">
		<td><input type="text"
			value="<?php echo date("d"+2).".".date("m").".".date("Y"); ?>"
			id="abdatum" style="width: 100px" /></td>
	</tr>
	<tr style="float: left">
		<td><p></p>*Bis-Datum</td>
	</tr>

	<tr>
		<td style="float: left"><input type="radio" id="unbefristet"
			name="radio" checked="checked" /> <label for="unbefristet">Unbefristet</label></td
	
	</tr>
	<tr id="trtabs" style="float: left">
		<td><input type="radio" id="befristet" name="radio" /> <label
			for="befristet">Befristet</label></td>
		<td>bis <input type="text"
			value="<?php echo date("d"+2).".".date("m").".".date("Y"); ?>"
			id="bisdatum" style="width: 100px" /></td>
	</tr>
	<tr style="float: left">
		<td><p></p>*W&aumlhrung / *Miete inkl Nebenkosten</td>
	</tr>

	<tr style="float: left">
		<td><select id="waerung">
				<option value="chf">CHF</option>
				<option value="euro">EURO</option>
		</select></td>
		<td>/</td>
		<td><input id="miete" type="text"></td>
		<td class="errorClass" id="errorwaerungmiete"></td>
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