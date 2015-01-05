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
    $deu = '<img class="lang" src = "images/de.png" alt = "Deutsch" title = "Deutsch">';
    $eng = '<img class="lang" src="images/en.png" alt="English" title="English">';
    $fra = '<img class="lang" src="images/fr.png" alt="Français" title="Français">';   
    $ita = '<img class="lang" src="images/it.png" alt="Italiano" title="Italiano">';   
    
    $output = "<a href=\"".add_URLparam($url,"lan","de")."\">".$deu."</a> ";
    $output = $output . "<a href=\"".add_URLparam($url,"lan","en")."\">".$eng."</a> ";
    $output = $output . "<a href=\"".add_URLparam($url,"lan","fr")."\">".$fra."</a> ";
    $output = $output . "<a href=\"".add_URLparam($url,"lan","it")."\">".$ita."</a> ";
    echo $output;
}

?>

