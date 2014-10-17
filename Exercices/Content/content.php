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
function anders() {
	echo '
    
	<link href="css/blitzer/jquery-ui-1.9.2.custom.css" rel="stylesheet">
	<script src="js/jquery-1.8.3.js"></script>
	<script src="js/jquery-ui-1.9.2.custom.js"></script>
		<script>
	$(function() {
	
		//$("#table").resizable();
		$( "#tabs" ).tabs();
		$( "#accordion" ).accordion({height:550});
		$( "#accordion2" ).accordion();
		$( "#datepicker" ).datepicker({
			inline: true	
				
		});
		$( "#datepicker2" ).datepicker({
			
			dateFormat:"dd.mm.yy"
		});
		
		$( "#button" ).button();
		
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
		
		 $( "#number" ).selectmenu();
	
		
	});
	</script>
			
   <div  ><table cellpadding="5">
	<tr>
		
		<th  valign="top" s><!-- hier ist Mittel Seite -->
			
		<div id="tabs" class="Tabs">
			<ul>
				<li><a href="#tabs-1">WG-Zimmer suchen</a></li>
				<li><a href="#tabs-2">Gratis WG-Zimmer inserieren</a></li>
			</ul>
			
		<div id="tabs-1">
				<h2>Suchen</h2>
				<div>
					<table>

				<!-- Button -->
						<tr>
							<td>Land</td>
							<td><input id="autocomplete" title="type &quot;a&quot;"></td>
						</tr>
						<tr>
							<td>Kanton</td>
							<td>
								<select name="number" id="number">
									<option>ZH</option>
									<option selected="selected">BE</option>
									<option>GE</option>
									<option>FR</option>
									<option>AG</option>
									<option>SO</option>
								</select>			
							</td>
						</tr>
						<tr>
							<td>Ort/Plz</td>
							<td><input id="autocomplete" title="type &quot;a&quot;"></td>	
						</tr>
						<tr>
							<td>Strasse</td>
							<td><input id="autocomplete" title="type &quot;a&quot;"></td>
						</tr>
						<tr>
							<td><button id="button">Suchen</button></td>
						</tr>
					</table>
				</div>
	
			</div>	

			<div id="tabs-2">
				<h2 >Accordion</h2>
				<div id="accordion" >
					<h3>First</h3>
					<div>Accordion1</div>
					<h3>Second</h3>
					<div>Accordion2</div>
					<h3>Third</h3>
					<div class="Accordion">Accordion3
						<div>
						<!-- Datepicker -->
						<h2 >Datepicker</h2>
						<div id="datepicker">
						</div>
					</div>
				</div>
			</div>

		</div>

		</div>
		</th>
	</tr>
</table></div>
    		';
}

?>  