<?php
function admin() {
	include ('session.php');
	// connection information
	
	$user_name = "root";
	$password = "root";
	$database = "mywgzimmerdb";
	$server = "localhost";
	
	$db_handle = mysql_connect ( $server, $user_name, $password );
	$db_found = mysql_select_db ( $database, $db_handle );
	
	$SQL = "SELECT * FROM tblInserate";
	$result = mysql_query ( $SQL ) or die ( "Ungültige Abfrage" );
	if ($db_found) {
		// Hier wird die Tabelle von alle Inseraten erstellt.
		// Tabelletitel
		$inserattable = '
        		<h1>Inserate</h1><form action="delete.php" method="post"><table><thead><tr><th></th><th>
        		ID
        		</th><th>
        		Aktivierung
        		</th><th>
        		Erstellungsdatum
        		</th><th>
        		Art
        		</th><th>
        		Fläche
        		</th><th>
        		Strasse
        		</th><th>
        		PLZ
        		</th><th>
        		Ort
        		</th><th>
        		Verfügbar ab
        		</th><th>
        		Befristet bis
        		</th><th>
        		Mietzins
        		</th><th>
        		E-Mail
        		</th><th>
        		Bild
        		</th></tr></thead><tbody>';
		
		while ( $db_field = mysql_fetch_assoc ( $result ) ) {
			// Die Tabelle wird hier gef�llt.
			if ($db_field ['Studio'] == 1) {
				$art = "Studio";
			} else {
				$art = "Zimmer";
			}
			if ($db_field ['active'] == 1) {
				$aktiv = "aktiv";
			} else {
				$aktiv = "deaktiv";
			}
			
			$inserattable = $inserattable . '<tr class="admintable"><td><input type="checkbox" name="checkbox[' . $db_field ['ID'] . ']"/>';
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $db_field ['ID'];
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $aktiv;
			$inserattable = $inserattable . "</td><td>";	
			$inserattable = $inserattable . $db_field ['Erstellungsdatum'];
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $art;
			$inserattable = $inserattable . '</td><td>';
			$inserattable = $inserattable . $db_field ['Quadratmeter'] . " m&sup2;";
			$inserattable = $inserattable . '</td><td>';
			$inserattable = $inserattable . $db_field ['Strasse'];
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $db_field ['PLZ'];
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $db_field ['Ort'];
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . $db_field ['AbDatum'];
			$inserattable = $inserattable . '</td><td>';
			$inserattable = $inserattable . $db_field ['BisDatum'];
			$inserattable = $inserattable . '</td><td>';
			$inserattable = $inserattable . "CHF " . $db_field ['Mietzins'];
			$inserattable = $inserattable . '</td><td>';
			$inserattable = $inserattable . $db_field ['Email'];
			$inserattable = $inserattable . "</td><td>";
			$inserattable = $inserattable . "<img class='titlefoto' src='../uploads/";
			 $inserattable = $inserattable . $db_field ['ImageID1'] . "'></td></tr>";
		}
		echo $inserattable . '</tbody></table></br><input type="submit" name="delete" value="Löschen" class="button"/></form>';
		mysql_close ( $db_handle );
	} else {
		echo "Datenbank nicht verbindbar!";
		mysql_close ( $db_handle );
	}
}

?>