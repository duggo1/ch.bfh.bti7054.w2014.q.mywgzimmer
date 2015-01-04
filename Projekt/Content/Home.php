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
    
		<h2>&#8592 suchen</h2>Bist du auf der Suche nach einem freien Zimmer?
            Dann klicke auf "WG-Zimmer suchen"!
        <h2>&#8601; inserieren</h2>Hast du ein Zimmer zu vermieten und möchtest <strong>gratis</strong> ein Inserat aufgeben?
        Klicke auf "Gratis WG-Zimmer inserieren"!
        <h2>Hilfe &#8599;</h2>Hast du die Links zu deinem Inserat verloren?
        Dann klicke auf "Hilfe"!
        <h2>AGBs &#8599;</h2>Für Hintergrund-Informationen zum Inhalt dieser Webseite besuche die "AGB"s!
		',
    "en" => '
        <h2>&#8592 search</h2>Are you looking for a room?
            Please click on "WG-Zimmer suchen"!
        <h2>&#8601; advertise</h2>Do you have a room to rent and do you want to advertise for <strong>free</strong>?
            Click on "Gratis WG-Zimmer inserieren"!
        <h2>Help &#8599;</h2>Have you lost the links to your advertisements?
Then click on "Hilfe"!
        <h2>terms and conditions &#8599;</h2>For background information on the content of this site, click on "AGB"!
		',
		"fr" =>  '
        
		<h2>&#8592 chercher</h2>Vous cherchez une chambre libre? Alors cliquez sur "WG-Zimmer suchen"!
<h2>&#8601; annoncer</h2>Avez-vous une chambre à louer et voulez-vous libérer une annonce <strong>gratuitement</strong>? Cliquez sur "Gratis WG-Zimmer inserieren"!
<h2>Aide &#8599;</h2> 
Avez-vous perdu les liens vers vos annonces?
Ensuite, cliquez sur "Hilfe"!
<h2>Conditions &#8599;</h2>            
Pour plus d\'information sur le contenu de ce site, veuillez consulter les "AGB"s!

',
		"it" =>  '
        
<h2>&#8592 search</h2>Siete alla ricerca di una stanza? Cliccate su "WG-Zimmer suchen"!
        <h2>&#8601; advertise</h2>Avete una stanza in affitto e vuoi pubblicizzare <strong>gratuitamente</strong>?
        Cliccate su "Gratis WG-Zimmer inserieren"!
<h2>Aiuto &#8599;</h2>Avete perso i link ai tuoi annunci?
Quindi fare clic su "Hilfe"!
        <h2>termini di utilizzo &#8599;</h2>Per informazioni generali sul contenuto di questo sito, cliccate su "AGB"!

		'
);
$title = array(
    "de" => "Willkommen auf mywgzimmer.ch!",
    "en" => "Welcome to mywgzimmer.ch!",
	"fr" => "Bienvenue sur mywgzimmer.ch!",
	"it" => "Benvenuto a mywgzimmer.ch!"
	

);
?>
