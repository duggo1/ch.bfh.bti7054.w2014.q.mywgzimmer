<?php

//session_start();
// fotos
$insFotoName = "";
$insFotoImage = "";
$insFotoType = "";

if (isset($_POST ["btnfoto1"])) {
    $insFotoName = mysql_real_escape_string($_FILES ["tmp_insfoto1"]["name"]);
    $insFotoData = mysql_real_escape_string(file_get_contents($_FILES ["tmp_insfoto1"]["tmp_name"]));
    $insFotoType = mysql_real_escape_string($_FILES ["tmp_insfoto1"]["type"]);
} elseif (isset($_POST ["btnfoto2"])) {
    $insFotoName = mysql_real_escape_string($_FILES ["insfoto2"]["name"]);
    $insFotoData = mysql_real_escape_string(file_get_contents($_FILES ["insfoto2"]["tmp_name"]));
    $insFotoType = mysql_real_escape_string($_FILES ["insfoto2"]["type"]);
}else {
    $insFotoName = mysql_real_escape_string($_FILES ["insfoto3"]["name"]);
    $insFotoData = mysql_real_escape_string(file_get_contents($_FILES ["insfoto3"]["tmp_name"]));
    $insFotoType = mysql_real_escape_string($_FILES ["insfoto3"]["type"]);
}

$what = (isset($_POST ["what"])) ? $_POST ["what"] : "";

function upload(){
    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";

    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);

    $query = "INSERT INTO `tblimages` (`Name`, `Image`, `Type`) VALUES 		
			 ('$insFotoName', '$insFotoData', '$insFotoType');";

    $result = mysql_query($query) or die("Ungültige Abfrage");
    
}

if ($what == "upload") {
    upload();
    echo $_POST["tmp_insfoto1"];
    //echo "request/showImage.php?image=" . mysql_insert_id();
    mysql_close($db_handle);
}











