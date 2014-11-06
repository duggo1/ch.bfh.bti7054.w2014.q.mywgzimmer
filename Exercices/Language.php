<?php

function get_URLparam($name, $default) {
    if (isset($_GET [$name]))
        return urldecode($_GET [$name]);
    else
        return $default;
}

function add_URLparam($url, $name, $value, $sep = "&") {
    $new_url = $url . $sep . $name . "=" . urlencode($value);
    return $new_url;
}

function language() {
    $url = $_SERVER ['PHP_SELF'];
    $url = add_URLparam($url, "link", get_URLparam("link", 0), "?");
    $deu = '<img id = logo src = "de.png" alt = "Deutsch" title = "Deutsch">';
    $eng = '<img id=logo src="en.png" alt="English" title="English">';        
    echo "<a href=\"".add_URLparam($url,"lan","de")."\">".$deu."</a> ";
    echo "<a href=\"".add_URLparam($url,"lan","en")."\">".$eng."</a> ";
}

function menu() {

    $lan = get_URLparam("lan", "de");
    echo "<h1>Menu</h1>";
        $url = $_SERVER['PHP_SELF'];
        $url = add_URLparam($url, "link", $home, "?");
        $url = add_URLparam($url, "lan", $lan);
        echo "<a href = \"$url\">{$link[$lan]}home</a><br />";
    echo "<a href=\"$url\">{$link[$lan]}agb</a><br />";
    echo "<a href=\"$url\">{$link[$lan]}help</a><br />";
}
?>

