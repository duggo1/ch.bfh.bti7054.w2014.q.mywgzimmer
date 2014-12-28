<?php
    include('session.php');
//connection information

    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";

    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);
    
    if (isset($_POST["delete"])) {

        $delete = $_POST["checkbox"];
        foreach ($delete as $id => $val) {
            if ($val == 'on') {
                $query = "DELETE FROM tblInserate WHERE ID = '" . $id . "'";
                $result = mysql_query($query) or die("Ungültige Abfrage");
            }
        }
        header("location: index.php?link=admin");
    }
?>