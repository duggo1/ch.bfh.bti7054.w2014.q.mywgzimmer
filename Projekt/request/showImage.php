<?php

$user_name = "root";
$password = "root";
$database = "mywgzimmerdb";
$server = "localhost";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if (isset($_GET['image'])) {
    $image = mysql_real_escape_string($_GET['image']);
    $query = "SELECT 'Image' FROM `tblimages` WHERE 'ID' = '$image'";
    $result = mysql_query($query) or die("Ungültige Abfrage");
    while ($db_field = mysql_fetch_assoc($result)) {
        $imageData = $db_field["Image"];
        //$imageData = move_uploaded_file("uploads", $database);
    }
    header("content-type: image/png");
    echo $imageData . ".png";
    mysql_close($db_handle);
} else {
    echo "Error";
}


?>