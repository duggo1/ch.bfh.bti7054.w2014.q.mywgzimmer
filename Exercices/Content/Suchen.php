<?php
function suchen() {
	?>


<!--     $("#table").droppable(); -->
<table cellpadding="1">

	<tr>

		<th valign="top">

			<div class="ui-widget-content">
				<h2 class="ui-widget-header"
					style="margin-top: 0; margin-bottom: 5px;">WG-Zimmer Suchen</h2>

				<div class="Tabs">
				<?php
	
	suchenDesign ()?>
				</div>
			</div>
		</th>
	</tr>

</table>


<?php
}
function suchenDesign() {
	?>

<table style="margin: 5%">
	
	<tr>
		<td style="width: 10%">Ort</td>
		<td style="width: 20%" colspan="2">PLZ</td>
		<td style="width: 10%"></td>

		<td style="width: 40%" colspan="4">*Strasse</td>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
	</tr>

	<tr>

		<td style="width: 10%"><input id="suchenort" type="text"></td>
		<td style="width: 10%"><input id="suchenplz" type="text"
			style="width: 40px"></td>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>

		<td style="width: 40%" colspan="4"><input id="suchenstrasse"
			type="text"></td>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
	</tr>
	<tr>
		<td style="width: 40%" height="18pt" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>
	<tr>
		<td style="width: 10%">Preis von</td>
		<td style="width: 10%">Preis bis</td>
		<td style="width: 20%" colspan="2"></td>

		<td style="width: 20%" colspan="2">Fläche von</td>

		<td style="width: 30%" colspan="3">Fläche bis</td>
		<td style="width: 20%" colspan="2"></td>
	</tr>
	<tr>
		<td style="width: 10%"><input id="suchenpreisvon" type="number"
			style="width: 100px"></td>
		<td style="width: 10%"><input id="suchenpreisbis" type="number"
			style="width: 100px"></td>
		<td style="width: 20%" colspan="2"></td>

		<td style="width: 20%" colspan="2"><input id="suchenflaechevon"
			type="number" style="width: 100px"></td>

		<td style="width: 30%" colspan="3"><input id="suchenflaechebis"
			type="number" style="width: 100px"></td>

		<td style="width: 20%" colspan="2"></td>
	</tr>
	<tr>
		<td style="width: 10%">Frei ab</td>
		<td style="width: 10%">Nur</td>
		<td style="width: 20%" colspan="2"></td>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 10%"></td>
		<td style="width: 30%" colspan="3"></td>
	</tr>
	<tr>
		<td style="width: 10%"><input type="text"
			value="<?php echo date("d" + 2) . "." . date("m") . "." . date("Y"); ?>"
			id="suchenfreiab" style="width: 100px" /></td>
		<td style="width: 10%"><input type="checkbox"
			id="checkboxsuchenstudis" name="checkboxsuchenstudis"> <label
			for="checkboxsuchenstudis">Studis/Stifte</label></td>

		<td style="width: 30%" colspan="3"><input type="checkbox"
			id="checkboxsuchenateiler" name="checkboxsuchenateiler"><label
			for="checkboxsuchenateiler">Studio/Atelier</label></td>

		<td style="width: 10%" colspan="2"><input type="checkbox"
			id="checkboxsuchenFrauenwg" name="checkboxsuchenFrauenwg"> <label
			for="checkboxsuchenFrauenwg">Frauen-WG</label></td>
		<td style="width: 40%" colspan="4"><input type="checkbox"
			id="checkboxsuchenMannerwg" name="checkboxsuchenMannerwg"> <label
			for="checkboxsuchenMannerwg">Männer-WG</label></td>

	</tr>
	<tr>
		<td style="width: 40%" height="18pt" colspan="4"></td>
		<td style="width: 10%"></td>
		<td style="width: 50%" colspan="5"></td>
	</tr>
	<tr>
		<td style="width: 50%" colspan="5">
			<button type="submit" id="btSuchen" style="width: 100%">Suchen</button>
		</td>
		<td style="width: 10%"></td>
		<td style="width: 40%" colspan="4"></td>
	</tr>
</table>




<?php
}
?>