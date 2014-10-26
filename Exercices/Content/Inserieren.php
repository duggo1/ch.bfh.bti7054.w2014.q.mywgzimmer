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

<div style="width: 400px; float: left">
	<table>
		<tr id="trtabs">
			<td>*Pflichtfelder
				<p></p>
			</td>
		</tr>
		<tr id="trtabs">
			<td>*Anrede:</td>
			<td><input type="radio" id="radioHerr" name="radio" checked="checked">
				<label for="radioHerr">Herr</label> <input type="radio"
				id="radioFrau" name="radio"> <label for="radioFrau">Frau</label></td>
			<td class="error" id="errorgeschlecht"></td>
		</tr>
		<tr id="trtabs">
			<td>*Vorname:</td>
			<td><input id="vorname" type="text"></td>
		</tr>

		<tr id="trtabs">
			<td>*Nachname:</td>
			<td><input id="nachname" type="text"></td>
		</tr>

		<tr id="trtabs">
			<td>*Strasse/Nr</td>
			<td><input id="strasse" type="text"></td>
			<td>/</td>
			<td><input id="strasseNr" type="text" style="width: 60px"></td>
		</tr>

		<tr id="trtabs">
			<td>*PLZ:</td>
			<td><input id="plz" type="text"></td>
		</tr>

		<tr id="trtabs">
			<td>*Ort:</td>
			<td><input id="ort" type="text"></td>
		</tr>
	</table>
</div>
<div style="float: left">
	<table>
		<tr id="trtabs">
			<h4 style="margin: 0;">Es werden keine persönlichen Daten im
				Inserat veröffentlicht</h4>
		</tr>
		<tr id="trtabs">

			<td>*E-Mail</td>
			<td><input id="email" type="email"></td>
		</tr>

		<tr id="trtabs">

			<td>*E-Mail (wiederholen)</td>
			<td><input id="email" type="email"></td>
		</tr>

		<tr id="trtabs">

			<td>*Telefonnummer</td>
			<td><input id="telefonnr" type="tel"></td>
		
		
		<tr id="trtabs">
			<td>&nbsp;</td>
			<td float: right;">
				<button id="btwiter1">Weiter</button>
			</td>
		</tr>
	</table>
</div>
<?php
}
function InserierenTab2() {
?>

<div style="width: 500px; float: left">
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
			<td><input id="titeldesinserats" type="text"></td>
		</tr>
		<tr id="trtabs">
			<td>Zimmeradresse (sofern diese vom Wohnort abweicht)</td>
		</tr>
		<tr id="trtabs">
			<td>
				Strasse/Nr
			</td>
		</tr>
		<tr  id="trtabs">
			<td><input id="zimmerStrasse" type="text" ></td>
			<td>/</td>
			
			<td><input id="zimmerStrasseNr" type="text" style="width: 60px"></td>
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
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>

	</table>
</div>


<?php
}
function InserierenTab3() {
	?>






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



  