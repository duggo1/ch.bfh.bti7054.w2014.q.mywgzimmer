<?php
$link = 0;

require_once ("Content/Inserieren.php");
require_once ("Content/Home.php");
?>
<!DOCTYPE html>

<html>
    <?php
				if (isset ( $_GET ['link'] )) {
					$link = $_GET ['link'];
				}
				?>

    <head>
<meta charset="utf-8">
<title>MyWGZimmer</title>
<link rel="stylesheet" type="text/css" href="mywgzimmer.css">
<link href="css/blitzer/jquery-ui-1.9.2.custom.css" rel="stylesheet">
<script src="js/jquery-1.8.3.js"></script>
<script src="js/jquery-ui-1.9.2.custom.js"></script>
<script>
	$(function() {
	
		//$("#table").resizable();
		$( "#tabs" ).tabs();
		 $( "#radio" ).buttonset();
		//$( "#tabs" ).tabs( "disable", 1 );
		//$( "#tabs" ).tabs( "disable", 2 );
		//$( "#tabs" ).tabs( "disable", 3 );
		//$( "#tabs" ).tabs( "disable", 4 );
		$( "#accordion" ).accordion();


		$( "#abdatum" ).datepicker({dateFormat:"dd.mm.yy" });
		$( "#bisdatum" ).datepicker({dateFormat:"dd.mm.yy" });	

		
		$( "#btweiter1" ).button();	
		$( "#btweiter2" ).button();	
		$( "#autocomplete" ).autocomplete({
			//source: availableTags
		});	
		 $( "#number" ).selectmenu();	
		 
	});
	</script>
</head>
<body>
	<div id="Header">
		<a href="?link=home"><img id=logo src="logo.png" alt="Home"
			title="Home"></a> <a href="?link=hilfe"><img id=help src="help.png"
			alt="Hilfe" title="Hilfe"></a> <a href="?link=agb"><img id=agb
			src="agb.png" alt="AGB" title="AGB"></a>
	</div>
	<div id="Wrap">
		<table>
			<tr>
				<td style="vertical-align: top;">
					<div id="leftbox">
						<a href="?link=suchen"><img id=suche src="suche.png"
							alt="WG-Zimmer-suchen" title="WG-Zimmer suchen"></a> <a
							href="?link=inserieren"><img id=inserat src="inserat.png"
							alt="Gratis-WG-Zimmer-inserieren"
							title="Gratis WG-Zimmer inserieren"></a>
					</div>
				</td>
				<td style="vertical-align: top;">
					<div id="content">
                            <?php
																												if ($link == 'home') {
																													home ();
																												} elseif ($link == 'suchen') {
																													echo '<ul><li>Suchen</li></ul>';
																												} elseif ($link == 'inserieren') {
																													Inserieren ();
																												} elseif ($link == 'hilfe') {
																													echo '<ul><li>Hilfe</li></ul>';
																												} elseif ($link == 'agb') {
																													echo '<ul><li>AGB</li></ul>';
																												}
																												?>
                        </div>
				</td>
				<td>
					<div id="rightbox"></div>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
