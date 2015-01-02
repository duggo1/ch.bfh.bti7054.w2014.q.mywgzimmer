<?php
$user_name = "root";
$password = "root";
$database = "mywgzimmerdb";
$server = "localhost";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if (isset($_GET['id'])) {
    $id = mysql_real_escape_string($_GET['id']);
    $query = "DELETE FROM tblInserate WHERE Link = '$id'";
    $result = mysql_query($query) or die("Ungültige Abfrage");
    mysql_close($db_handle);
    
    $msg = urlencode("<h1>Inserat gelöscht!</h1>Du hast dein Inserat gelöscht.");
    header("Location: ../index.php?link=message&msg=" . $msg);
    
die();
} else {
    echo "Error";
}
?>