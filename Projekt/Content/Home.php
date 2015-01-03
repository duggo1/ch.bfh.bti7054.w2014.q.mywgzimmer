<?php

function home() {
    global $link;
    global $title;
    global $text;
    $lan = get_URLparam("lan", "de");
    echo "<h1>" . $title[$lan] . "</h1>";
    echo "<ul>" . $text[$lan] . "</ul>";
}

$link = array(
    "de" => 'Zuhause',
    "en" => 'Home',
	"fr" => 'Maison',
	"it" => 'Casa'
);
$text = array(
    "de" => '
    
		<li>Bist du auf der Suche nach einem freien Zimmer?
            Dann klicke auf "WG-Zimmer suchen"!</li>
        <li>Hast du ein Zimmer zu vermieten und möchtest <strong>gratis</strong> ein Inserat aufgeben?
            Klicke auf "Gratis WG-Zimmer inserieren"!</li>
		',
    "en" => '
        
		<li>Are you looking for a room?
            Please click on "WG-Zimmer suchen"!</li>
        <li>Do you have a room to rent and do you want to advertise for <strong>free</strong>?
            Click on "Gratis WG-Zimmer inserieren"!</li>
		',
		"fr" =>  '
        
		<li>Vous cherchez une chambre libre? Alors cliquez sur "WG-Zimmer suchen"!</li>
<li>Avez-vous une chambre à louer et voulez-vous libérer une annonce <strong>gratuitement</strong>? Cliquez sur "Gratis WG-Zimmer inserieren"!</li>
            ',
		"it" =>  '
        
		<li>Siete alla ricerca di una stanza? Cliccate su "WG-Zimmer suchen"!</li>
        <li>Avete una stanza in affitto e vuoi pubblicizzare <strong>gratuitamente</strong>?
            Cliccate su "Gratis WG-Zimmer inserieren"!</li>
		'
);
$title = array(
    "de" => "Willkommen auf mywgzimmer.ch!",
    "en" => "Welcome to mywgzimmer.ch!",
	"fr" => "Bienvenue sur mywgzimmer.ch!",
	"it" => "Benvenuto a mywgzimmer.ch!"
	

);
?>
