<?php

function home() {
    global $link;
    global $title;
    global $text;
    $lan = get_URLparam("lan", "de");
    echo "<h1>" . $title[$lan] . "</h1>";
    echo "<ul>" . $text[$lan] . "</ul>";

    $url = add_URLparam($url, "link", "home", "?");
    $url = add_URLparam($url, "lan", $lan);

}

$link = array(
    "de" => 'Zuhause',
    "en" => 'Home'
);
$text = array(
    "de" => '
        <li>Bist du auf der Suche nach einem freien Zimmer?
            Dann klicke auf "WG-Zimmer suchen"!</li>
        <li>Hast du ein Zimmer zu vermieten und möchtest <strong>gratis</strong> ein Inserat aufgeben?
            Klicke auf "Gratis WG-Zimmer inserieren"!</li>',
    "en" => '
        <li>Are you looking for a room?
            Please click on "search WG-Room"!</li>
        <li>Do you have a room to rent and do you want to make an  <strong>gratis</strong> ein Inserat aufgeben?
            Klicke auf "Gratis WG-Zimmer inserieren"!</li>'
);
$title = array(
    "de" => "Willkommen auf mywgzimmer.ch!",
    "en" => "Welcome to mywgzimmer.ch!"
);
?>
