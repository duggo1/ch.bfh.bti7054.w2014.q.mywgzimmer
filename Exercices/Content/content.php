<?php
function home() {
	echo '
   
     <h1>Willkommen auf mywgzimmer.ch!</h1>
    <ul>
        <li>Du bist auf der Suchen nach einem freien Zimmer. 
            Klicke auf "WG-Zimmer suchen"</li>
        <li>Du hast ein Zimmer zu vermieten und möchtest <strong>gratis</strong> ein Inserat aufgeben: 
            Klicke auf "Gratis WG-Zimmer inserieren"</li>
        <li>Du suchst ein WG-Zimmer und möchtest <strong>gratis</strong>* ein Inserat für deine Zimmersuche aufgeben:
            Klicke auf "Suche WG-Zimmer" und dann auf "Gratis Zimmersuche inserieren"</li>
    </ul>
    		';
}
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
					<div style="width: 400px; float: left">
						<table>
							<tr id="trtabs">
								<td>*Pflichtfelder
									<p></p>
								</td>
							</tr>
							<tr id="trtabs">
								<td>*Anrede:</td>
								<td><input type="radio" id="radioHerr" name="radio"
									checked="checked"> <label for="radioHerr">Herr</label> <input
									type="radio" id="radioFrau" name="radio"> <label
									for="radioFrau">Frau</label></td>
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
								<td>*Kanton</td>
								<td><select name="number" id="number">
										<option>ZH</option>
										<option selected="selected">BE</option>
										<option>GE</option>
										<option>FR</option>
										<option>AG</option>
										<option>SO</option>
								</select></td>
							</tr>
							<tr id="trtabs">
								<td>*Strasse/Nr</td>
								<td><input id="strasse" t type="text"></td>
								<td>/</td>
								<td><input id="strasseNr" type="number" style="width: 60px"></td>
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
								<h4 style="margin: 0;">Es werden keine pers&#246nlichen Daten im
									Inserat ver&#246ffentlicht</h4>
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
							
							
							<tr id="trtabs" styler="height=300px;">
								<td>&nbsp;</td>
								<td style="height: 300px; float: right;">
									<button id="btwiter1">Weiter</button>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div id="tabs-2">fafsfsf</div>

			</div>
		</th>
	</tr>
</table>
<?php
}

?>  