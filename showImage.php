<?php

$user_name = "root";
$password = "root";
$database = "mywgzimmerdb";
$server = "localhost";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if (isset($_GET['id'])) {
    $id = mysql_real_escape_string($_GET['id']);
    $query = "SELECT * FROM `tblimages` WHRE 'ID' = '$id'";
    $result = mysql_query($query) or die("Ungültige Abfrage");
    while ($db_field = mysql_fetch_assoc($result)) {
        $imageData = $db_field["Image"];
    }
    header("content-type: image/jpg");
    echo $imageData;
    mysql_close($db_handle);
} else {
    echo "Error";
}


?>