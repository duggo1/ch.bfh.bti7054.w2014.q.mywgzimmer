<?php

//include ('session.php');
// connection information

$user_name = "root";
$password = "root";
$database = "mywgzimmerdb";
$server = "localhost";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if (isset($_POST ["delete"])) {

    $delete = $_POST ["checkbox"];
    foreach ($delete as $id => $val) {
        if ($val == 'on') {
            //Fotos löschen
            $query = "SELECT * FROM tblInserate WHERE ID = '$id'";
            $result = mysql_query($query) or die("Ungültige Abfrage");
            while ($db_field = mysql_fetch_assoc($result)) {
                $foto1 = "../uploads/" . $db_field["ImageID1"];
                $foto2 = "../uploads/" . $db_field["ImageID2"];
                $foto3 = "../uploads/" . $db_field["ImageID3"];
            }
            if ($foto1 != '') {
                unlink($foto1);
            }
            if ($foto2 != '') {
                unlink($foto2);
            }
            if ($foto3 != '') {
                unlink($foto3);
            }

            $query = "DELETE FROM tblInserate WHERE ID = '$id'";
            $result = mysql_query($query) or die("Ungültige Abfrage");
        }
    }
    header("location: index.php?link=admin");
}
?>